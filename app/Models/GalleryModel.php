<?php namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'galleries';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'image_url', 'category', 'location', 'is_featured', 'display_order'];
    protected $returnType = 'object';
    
    public function getGalleryImages($limit = 8)
    {
        return $this->orderBy('display_order', 'ASC')
                   ->orderBy('created_at', 'DESC')
                   ->limit($limit)
                   ->findAll();
    }
    
    public function getFeaturedImages()
    {
        return $this->where('is_featured', true)
                   ->orderBy('display_order', 'ASC')
                   ->findAll();
    }
}