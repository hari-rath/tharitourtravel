<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VehicleModel;

class VehicleRental extends BaseController
{
    protected $VehicleModel;

    public function __construct()
    {
        $this->VehicleModel = new VehicleModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['title'] = 'Manage Vehicle List';
        $data['vehiclelist'] = $this->VehicleModel->orderBy('id', 'DESC')->findAll();
        return view('admin/vehicle_list', $data);
    }

   public function delete($id)
{
    if (!$this->VehicleModel->find($id)) {
        return redirect()->back()->with('error', 'Vehicle not found!');
    }   

    $this->VehicleModel->delete($id);

    return redirect()->to('/admin/vehicle-list')->with('success', 'Vehicle deleted successfully!');
}

}
