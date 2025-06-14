<?php namespace App\Models;

use CodeIgniter\Model;

class LocalGuideModel extends Model
{
    protected $table = 'local_guides';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'full_name', 'email', 'phone', 'address', 'experience', 
        'languages', 'specialization', 'price_per_day', 'photo_url',
        'rating', 'years_experience', 'is_verified'
    ];
    protected $returnType = 'object';
    
    public function getVerifiedGuides($limit = 5)
    {
        return $this->where('is_verified', true)
                   ->orderBy('rating', 'DESC')
                   ->orderBy('years_experience', 'DESC')
                   ->limit($limit)
                   ->findAll();
    }
    
    public function getGuidesBySpecialization($type)
    {
        return $this->where(['is_verified' => true, 'specialization' => $type])
                   ->orderBy('rating', 'DESC')
                   ->findAll();
    }
}