<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class UploadSinglePatient extends Component
{
    public $hiv_clinic_no;
    public $family_name;
    public $given_name;
    public $gender;
    public $hiv_viral_load_date;
    public $return_visit_date;
    public $phone_number;
    public $care_giver_phone_number;

    public function addSingle(){
        $this->validate([
            'hiv_clinic_no' => 'required',
            'family_name' => 'required',
            'given_name' => 'required',
            'gender' => 'required',
            'hiv_viral_load_date' => 'required|after_or_equal:today',
            'return_visit_date' => 'required|after_or_equal:today',
            'phone_number' => 'required',
            'care_giver_phone_number' => 'required'
        ]);

        $create = Patient::create([
            'hiv_clinic_no' => $this->hiv_clinic_no,
            'family_name' => $this->family_name,
            'given_name' => $this->given_name,
            'gender' => $this->gender,
            'hiv_viral_load_date' => $this->hiv_viral_load_date,
            'return_visit_date' => $this->return_visit_date,
            'phone_number' => $this->phone_number,
            'care_giver_phone_number' => $this->care_giver_phone_number
        ]);

        if($create) {
            $this->message = "Patient added successfully!";
            $this->success = true;
            $this->isUpload = false;
            $this->buttonText = 'Upload Batch';
            // $this->reset();
        }
    }

    public function filterPatient($clinic) {
        //if clinic already exists
        $clinic = 'OKO/010';

        $check = Patient::where('hiv_clinic_no', $clinic)->first();

        if($check !== null) {
            $this->family_name = '$check->first_name';
            $this->given_name = $check->given_name;
        }
    }

    public function render()
    {
        return view('livewire.upload-single-patient');
    }
}
