<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    protected $CategoryModel;

    public function __construct()
    {
        $this->CategoryModel = new CategoryModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['title'] = 'Category';
        $data['categoryDetails'] = $this->CategoryModel->findAll();
        return view('admin/category/index', $data);
    }
    
    public function add(){
        return view('admin/category/create');
    }
    
    public function store(){
        $rules = [
            'name' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        $data = [
            'name'     => htmlspecialchars($this->request->getPost('name')),
            'status'    => 1,
        ];

        if (!$this->CategoryModel->save($data)) {
            return redirect()->back()->withInput()->with('error', 'Database insert failed.');
        }

        return redirect()->to('/admin/category')->with('success', 'Category added successfully!');
    }
    
    public function edit($id)
    {
        $category = $this->CategoryModel->find($id);
        if (!$category) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('admin/category/edit', ['category' => $category, 'title' => 'Edit Category']);
    }
    
    public function update($id)
    {
        $category = $this->CategoryModel->find($id);
        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }
    
        $rules = [
            'name' => 'required',
        ];
    
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }
    
        $data = [
            'id' => $id,
            'name' => htmlspecialchars($this->request->getPost('name')),
        ];
    
        if (!$this->CategoryModel->save($data)) {
            return redirect()->back()->withInput()->with('error', 'Failed to update Category.');
        }
        return redirect()->to('/admin/category')->with('success', 'Category updated successfully!');
    }
    
    public function delete($id)
    {
        $category = $this->CategoryModel->find($id);
        
        $this->CategoryModel->delete($id);
        return redirect()->to('/admin/category')->with('success', 'Category deleted successfully!');
    }
    
    public function updateStatus($id)
    {
        $existingPackage = $this->CategoryModel->find($id);
        if (!$existingPackage) {
            return redirect()->back()->with('error', 'Category not found.');
        }
    
        $newStatus = ($existingPackage['status'] == 1) ? 0 : 1;
        $data = [
            'id'     => $id,
            'status' => $newStatus
        ];
    
        $this->CategoryModel->save($data);
        return redirect()->to('/admin/category')->with('success', 'Category status updated successfully!');
    }
}
