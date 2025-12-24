<?php
namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact_us';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname', 'email','phone','subject','message','created_on','updated_on'];
    protected $returnType = 'array';

}
