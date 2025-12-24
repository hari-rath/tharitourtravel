<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EnquiryModel;

class Enquirylist extends BaseController
{
    protected $enquiryModel;

    public function __construct()
    {
        $this->enquiryModel = new EnquiryModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['title'] = 'Manage Enquiry';
        $data['enquirylist'] = $this->enquiryModel->orderBy('id', 'DESC')->findAll();
        return view('admin/enquiry_list', $data);
    }

    public function delete($id)
    {
        if (!$this->enquiryModel->find($id)) {
            return redirect()->back()->with('error', 'Enquiry not found!');
        }

        $this->enquiryModel->delete($id);

        return redirect()->to('/admin/enquiry-list')->with('success', 'Enquiry deleted successfully!');
    }
}
