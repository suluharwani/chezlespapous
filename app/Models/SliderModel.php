<?php namespace App\Models;

use CodeIgniter\Model;

class SliderModel extends Model
{
    protected $table = 'sliders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'subtitle', 'image_url', 'button_text', 'button_link', 'is_active', 'display_order'];
    protected $returnType = 'object';
    
    public function getActiveSliders()
    {
        return $this->where('is_active', true)
                   ->orderBy('display_order', 'ASC')
                   ->findAll();
    }
}