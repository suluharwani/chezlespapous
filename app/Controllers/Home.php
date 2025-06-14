<?php namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\TourGuideModel;
use App\Models\TourPackageModel;

class Home extends BaseController
{
    public function index()
    {
        $destinationModel = new DestinationModel();
        $tourGuideModel = new TourGuideModel();
        $tourPackageModel = new TourPackageModel();
        $sliderModel = new \App\Models\SliderModel();
        $galleryModel = new \App\Models\GalleryModel();
        $guideModel = new \App\Models\LocalGuideModel();
        $data = [
            
             'gallery' => $galleryModel->getGalleryImages(8),
            'sliders' => $sliderModel->getActiveSliders(),
            'destinations' => $destinationModel->findAll(),
            'guides' => $guideModel->getVerifiedGuides(),
            'packages' => $tourPackageModel->findAll(),
            'title' => 'Home | Chezlespapous'
        ];
        
        return view('home', $data);
    }
}

class Guide extends BaseController
{
    public function register()
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
                
                return redirect()->to('/guide/register')->with('success', 'Pendaftaran berhasil dikirim! Kami akan menghubungi Anda segera.');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        
        $data['title'] = 'Daftar sebagai Tour Guide | Wisata Guide';
        return view('guide_register', $data);
    }
}