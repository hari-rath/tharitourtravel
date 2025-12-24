<?php

namespace App\Controllers;

use App\Models\ImageModel;

class Gallery extends BaseController
{
    protected $imageModel;

    public function __construct()
    {
        $this->imageModel = new ImageModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['title'] = 'Manage Gallery';
        $data['images'] = $this->imageModel->findAll();

        return view('admin/gallery_list', $data);
    }

    public function add()
    {
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'title' => 'required',
                'category' => 'required',
                'image' => 'uploaded[image]|is_image[image]|max_size[image,2048]'
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
            }

            $file = $this->request->getFile('image');
            $newName = $file->getRandomName();
            $file->move('uploads/gallery', $newName);

            $this->imageModel->save([
                'title' => $this->request->getPost('title'),
                'category' => $this->request->getPost('category'),
                'file_name' => 'uploads/gallery/' . $newName
            ]);

            return redirect()->to('/admin/gallery')->with('success', 'Image added successfully!');
        }

        return view('admin/add', ['title' => 'Add New Image']);
    }

    public function edit($id)
    {
        $image = $this->imageModel->find($id);
        if (!$image) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if ($this->request->getMethod() === 'post') {
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

        return view('admin/edit', ['image' => $image, 'title' => 'Edit Image']);
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
