<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'gallery_images';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'file_name', 'category', 'status'];

    
    public function getImages($category = null)
    {
        $builder = $this->where('status', 1);
        if ($category) {
            $builder->where('category', $category);
        }
        return $builder->findAll();
    }
    
    public function getImageById($id)
    {
        return $this->find($id);
    }
}