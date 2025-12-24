<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BannerModel;

class BannerController extends BaseController
{
    protected $BannerModel;

    public function __construct()
    {
        $this->BannerModel = new BannerModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['title'] = 'Manage Banner';
        $data['images'] = $this->BannerModel->findAll();
        return view('admin/banner', $data);
    }
    
    public function upload(){
        return view('admin/add_banner');
    }
    
    public function insert()
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => 'uploaded[image]|is_image[image]|max_size[image,2048]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        $file = $this->request->getFile('image');

        if (!$file->isValid()) {
            return redirect()->back()->withInput()->with('error', $file->getErrorString());
        }

        $uploadPath = FCPATH . 'uploads/banner';

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $newName = $file->getRandomName();

        if (!$file->move($uploadPath, $newName)) {
            return redirect()->back()->withInput()->with('error', 'Image upload failed.');
        }

        // Save to database
        $data = [
            'title'     => htmlspecialchars($this->request->getPost('title')),
            'file_name' => 'uploads/banner/' . $newName, // This is the public path
            'description'  => htmlspecialchars($this->request->getPost('description')),
            'status'    => 1,
        ];

        if (!$this->BannerModel->save($data)) {
            return redirect()->back()->withInput()->with('error', 'Database insert failed.');
        }

        return redirect()->to('/admin/banner')->with('success', 'Banner details added successfully!');
    }
    
    public function edit($id)
    {
        $banner = $this->BannerModel->find($id);
        if (!$banner) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('admin/edit_banner', ['banner' => $banner, 'title' => 'Edit Banner Details']);
    }
    
    public function update($id)
    {
        $existingBanner = $this->BannerModel->find($id);
        if (!$existingBanner) {
            return redirect()->back()->with('error', 'Banner not found.');
        }
    
        $data = [
            'id' => $id,
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];
    
        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/banner', $newName);
    
            if (!empty($existingBanner['file_name']) && file_exists($existingBanner['file_name'])) {
                unlink($existingBanner['file_name']);
            }
    
            $data['file_name'] = 'uploads/banner/' . $newName;
        }
    
        // Save all data
        $this->BannerModel->save($data);
    
        return redirect()->to('/admin/banner')->with('success', 'Banner details updated successfully!');
    }
    public function updateStatus($id)
    {
        $existingBanner = $this->BannerModel->find($id);
        if (!$existingBanner) {
            return redirect()->back()->with('error', 'Banner not found.');
        }
    
        $newStatus = ($existingBanner['status'] == 1) ? 0 : 1;
        $data = [
            'id'     => $id,
            'status' => $newStatus
        ];
    
        $this->BannerModel->save($data);
        return redirect()->to('/admin/banner')->with('success', 'Banner status updated successfully!');
    }

    
    public function delete($id)
    {
        $image = $this->BannerModel->find($id);
        if ($image && file_exists($image['file_name'])) {
            unlink($image['file_name']);
        }

        $this->BannerModel->delete($id);
        return redirect()->to('/admin/banner')->with('success', 'Banner deleted successfully!');
    }
    
}
