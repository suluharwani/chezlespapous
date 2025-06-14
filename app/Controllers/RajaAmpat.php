<?php namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\ResortModel;
use App\Models\LocalGuideModel;
use App\Models\DiveSpotModel;
use App\Models\TourPackageModel;
use App\Models\TestimonialModel;

class RajaAmpat extends BaseController
{
    public function index()
    {
        $destinationModel = new DestinationModel();
        $resortModel = new ResortModel();
        $guideModel = new LocalGuideModel();
        $diveSpotModel = new DiveSpotModel();
        $packageModel = new TourPackageModel();
        $testimonialModel = new TestimonialModel();
        
        $data = [
            'destinations' => $destinationModel->getPopularDestinations(),
            'resorts' => $resortModel->findAll(),
            'guides' => $guideModel->where('is_verified', true)->findAll(),
            'diveSpots' => $diveSpotModel->findAll(),
            'packages' => $packageModel->findAll(),
            'testimonials' => $testimonialModel->where('is_featured', true)->findAll(),
            'title' => 'Wisata Raja Ampat | Paradise on Earth'
        ];
        
        return view('raja_ampat/index', $data);
    }
    
    public function diveSpots()
    {
        $diveSpotModel = new DiveSpotModel();
        
        $data = [
            'diveSpots' => $diveSpotModel->findAll(),
            'title' => 'Spot Menyelam Raja Ampat'
        ];
        
        return view('raja_ampat/dive_spots', $data);
    }
    
    public function registerGuide()
    {
        helper(['form']);
        
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'full_name' => 'required|min_length[3]|max_length[100]',
                'email' => 'required|valid_email|max_length[100]',
                'phone' => 'required|min_length[10]|max_length[20]',
                'address' => 'required|min_length[10]|max_length[255]',
                'experience' => 'required|min_length[10]',
                'languages' => 'required',
            ];
            
            if ($this->validate($rules)) {
                $model = new \App\Models\GuideRegistrationModel();
                
                $model->save([
                    'full_name' => $this->request->getPost('full_name'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'address' => $this->request->getPost('address'),
                    'experience' => $this->request->getPost('experience'),
                    'languages' => $this->request->getPost('languages'),
                    'certification' => $this->request->getPost('certification'),
                    'status' => 'pending'
                ]);
                
                return redirect()->to('/raja-ampat/guide/register')->with('success', 'Pendaftaran berhasil dikirim! Kami akan menghubungi Anda segera.');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        
        $data['title'] = 'Daftar sebagai Tour Guide Raja Ampat';
        return view('raja_ampat/guide_register', $data);
    }
}