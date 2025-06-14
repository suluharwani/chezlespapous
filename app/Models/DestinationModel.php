<?php namespace App\Models;

use CodeIgniter\Model;

class DestinationModel extends Model
{
    protected $table = 'destinations';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'location', 'category', 'entrance_fee', 'best_season', 'image_url'];
    protected $returnType = 'object';
    
    public function getPopularDestinations($limit = 5)
    {
        return $this->orderBy('created_at', 'DESC')->limit($limit)->find();
    }
    
    public function getDivingSpots()
    {
        return $this->where('category', 'diving')->findAll();
    }
}