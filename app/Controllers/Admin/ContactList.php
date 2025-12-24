<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class ContactList extends BaseController
{
    protected $ContactModel;

    public function __construct()
    {
        $this->ContactModel = new ContactModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['title'] = 'Manage Contact';
        $data['contactlist'] = $this->ContactModel->orderBy('id', 'DESC')->findAll();
        return view('admin/contact_list', $data);
    }

    public function delete($id)
    {
        if (!$this->ContactModel->find($id)) {
            return redirect()->back()->with('error', 'Contact not found!');
        }

        $this->ContactModel->delete($id);

        return redirect()->to('/admin/contact-list')->with('success', 'Contact deleted successfully!');
    }
}
