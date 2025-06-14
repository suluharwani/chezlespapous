<?php namespace App\Models;

use CodeIgniter\Model;

class GuideRegistrationModel extends Model
{
    protected $table = 'guide_registrations';
    protected $primaryKey = 'id';
    protected $allowedFields = ['full_name', 'email', 'phone', 'address', 'experience', 'languages', 'certification', 'status'];
    protected $returnType = 'object';
}