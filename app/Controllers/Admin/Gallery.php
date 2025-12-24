<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ImageModel;
use App\Models\CategoryModel;

class Gallery extends BaseController
{
    protected $imageModel;
    protected $CategoryModel;

    public function __construct()
    {
        $this->imageModel = new ImageModel();
        $this->CategoryModel = new CategoryModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['title'] = 'Manage Gallery';
        $data['images'] = $this->imageModel->findAll();
        return view('admin/gallery', $data);
    }
    
    public function add()
    {
        $data['title'] = 'Add Gallery';
        $data['category'] = $this->CategoryModel->where('status', 1)->findAll();
        return view('admin/add_gallery', $data);
    }
    
    public function store()
    {
        $rules = [
            'title' => 'required',
            'category' => 'required',
            'image' => 'uploaded[image]|is_image[image]|max_size[image,2048]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        $file = $this->request->getFile('image');

        if (!$file->isValid()) {
            return redirect()->back()->withInput()->with('error', $file->getErrorString());
        }

        $uploadPath = FCPATH . 'uploads/gallery'; // ✅ safer than 'public/uploads/gallery'

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
            'file_name' => 'uploads/gallery/' . $newName, // This is the public path
            'category'  => htmlspecialchars($this->request->getPost('category')),
            'status'    => 1,
        ];

        if (!$this->imageModel->save($data)) {
            return redirect()->back()->withInput()->with('error', 'Database insert failed.');
        }

        return redirect()->to('/admin/gallery')->with('success', 'Image added successfully!');
    }

    
    public function edit($id)
    {
        $image = $this->imageModel->find($id);
        if (!$image) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('admin/edit', ['image' => $image, 'title' => 'Edit Image']);
    }
    
    public function update($id)
    {
        $data = [
            'id' => $id,
            'title' => $this->request->getPost('title'),
            'category' => $this->request->getPost('category'),
        ];

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/gallery', $newName);
            $data['file_name'] = 'uploads/gallery/' . $newName;
        }

        $this->imageModel->save($data);
        return redirect()->to('/admin/gallery')->with('success', 'Image updated successfully!');
    }
    
    
    public function delete($id)
    {
        $image = $this->imageModel->find($id);
        if ($image && file_exists($image['file_name'])) {
            unlink($image['file_name']);
        }

        $this->imageModel->delete($id);
        return redirect()->to('/admin/gallery')->with('success', 'Image deleted successfully!');
    }
}



