<?php namespace App\Models;

use CodeIgniter\Model;

class TourPackageModel extends Model
{
    protected $table = 'tour_packages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'duration', 'price', 'includes', 'image_url'];
    protected $returnType = 'object';
}