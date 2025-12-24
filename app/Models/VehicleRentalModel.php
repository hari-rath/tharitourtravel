<?php

namespace App\Models;

use CodeIgniter\Model;

class EnquiryModel extends Model
{
    protected $table = 'send_enquiry';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'date',
        'full_name',
        'contact_no',
        'email_id',
        'no_of_member',
        'select_destination',
        'message',
        'created_on',
        'updated_on'
    ];

    protected $returnType = 'array';

    public function getEnquiryById($id)
    {
        return $this->find($id);
    }
}
