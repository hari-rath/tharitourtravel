<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TourPackageModel;

class TourPackageController extends BaseController
{
    protected $TourPackageModel;

    public function __construct()
    {
        $this->TourPackageModel = new TourPackageModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['title'] = 'Tour Package';
        $data['tourDetails'] = $this->TourPackageModel->findAll();
        return view('admin/tour-package/index', $data);
    }
    
    public function add(){
        return view('admin/tour-package/create');
    }
    
    public function store(){
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'tour_amount' => 'required',
            'tour_duration' => 'required',
            'image' => 'uploaded[image]|is_image[image]|max_size[image,2048]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        $file = $this->request->getFile('image');

        if (!$file->isValid()) {
            return redirect()->back()->withInput()->with('error', $file->getErrorString());
        }

        $uploadPath = FCPATH . 'uploads/tours';

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
            'file_name' => 'uploads/tours/' . $newName, // This is the public path
            'description'  => htmlspecialchars($this->request->getPost('description')),
            'starting_price'  => $this->request->getPost('tour_amount'),
            'tour_days'  => $this->request->getPost('tour_duration'),
            'status'    => 1,
        ];

        if (!$this->TourPackageModel->save($data)) {
            return redirect()->back()->withInput()->with('error', 'Database insert failed.');
        }

        return redirect()->to('/admin/tour-package')->with('success', 'Tour Package details added successfully!');
    }
    
    public function show($id){
        $tour = $this->TourPackageModel->find($id);
        if (!$tour) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('admin/tour-package/details', ['tour' => $tour, 'title' => 'Tour Package Details']);
    }
    
    public function edit($id)
    {
        $tour = $this->TourPackageModel->find($id);
        if (!$tour) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('admin/tour-package/edit', ['tour' => $tour, 'title' => 'Edit Tour Details']);
    }
    
    public function update($id)
    {
        $tour = $this->TourPackageModel->find($id);
        if (!$tour) {
            return redirect()->back()->with('error', 'Tour package not found.');
        }
    
        $rules = [
            'title'         => 'required',
            'description'   => 'required',
            'tour_amount'   => 'required|numeric',
            'tour_duration' => 'required',
            'image'         => 'if_exist|is_image[image]|max_size[image,2048]',
        ];
    
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }
    
        $file = $this->request->getFile('image');
        $imagePath = $tour['file_name'];
    
        // If a new image is uploaded
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $uploadPath = FCPATH . 'uploads/tours';
    
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
    
            $newName = $file->getRandomName();
    
            if (!$file->move($uploadPath, $newName)) {
                return redirect()->back()->withInput()->with('error', 'Image upload failed.');
            }
    
            if (is_file(FCPATH . $tour['file_name'])) {
                unlink(FCPATH . $tour['file_name']);
            }
            $imagePath = 'uploads/tours/' . $newName;
        }
    
        $data = [
            'id'           => $id,
            'title'        => htmlspecialchars($this->request->getPost('title')),
            'description'  => htmlspecialchars($this->request->getPost('description')),
            'starting_price' => $this->request->getPost('tour_amount'),
            'tour_days'    => $this->request->getPost('tour_duration'),
            'file_name'    => $imagePath,
        ];
    
        if (!$this->TourPackageModel->save($data)) {
            return redirect()->back()->withInput()->with('error', 'Failed to update tour package.');
        }
        return redirect()->to('/admin/tour-package')->with('success', 'Tour package updated successfully!');
    }
    
    public function delete($id)
    {
        $tour = $this->TourPackageModel->find($id);
        if ($tour && file_exists($tour['file_name'])) {
            unlink($tour['file_name']);
        }
        $this->TourPackageModel->delete($id);
        return redirect()->to('/admin/tour-package')->with('success', 'Tour Package deleted successfully!');
    }
    
    public function updateStatus($id)
    {
        $existingPackage = $this->TourPackageModel->find($id);
        if (!$existingPackage) {
            return redirect()->back()->with('error', 'Tour Package not found.');
        }
    
        $newStatus = ($existingPackage['status'] == 1) ? 0 : 1;
        $data = [
            'id'     => $id,
            'status' => $newStatus
        ];
    
        $this->TourPackageModel->save($data);
        return redirect()->to('/admin/tour-package')->with('success', 'Tour Package status updated successfully!');
    }
}
