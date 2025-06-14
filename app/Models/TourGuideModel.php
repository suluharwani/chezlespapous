<?php namespace App\Models;

use CodeIgniter\Model;

class TourGuideModel extends Model
{
    protected $table = 'tour_guides';
    protected $primaryKey = 'id';
    protected $allowedFields = ['full_name', 'email', 'phone', 'address', 'experience', 'languages', 'price_per_day', 'photo_url', 'is_verified'];
    protected $returnType = 'object';
}