<?php
namespace App\Models;

use CodeIgniter\Model;

class VehicleModel extends Model
{
    protected $table = 'vehicle_book';
    protected $primaryKey = 'id';
    protected $allowedFields = ['full_name', 'mobileNumber','email','adults','children','vehicleType','duration','durationValue','with_driver','pickupLocation','pickupDate','created_on','updated_on'];
    protected $returnType = 'array';

}
