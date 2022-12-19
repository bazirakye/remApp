<?php

namespace App\Http\Livewire;

use App\ExcelModel;
use App\Models\Patient;
use Livewire\Component;
use Livewire\WithFileUploads;
use Excel;
use Rap2hpoutre\FastExcel\FastExcel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UploadFile extends Component
{
    use WithFileUploads;

    public bool $isUpload = true;
    public $buttonText = 'New Patient';

    public $disable_button = true;
    public $file_to_upload;
    public $message = "";

    public $success = false;

    // for single adding7
    public $hiv_clinic_no;
    public $family_name;
    public $given_name;
    public $gender;
    public $hiv_viral_load_date;
    public $return_visit_date;
    public $phone_number;
    public $care_giver_phone_number;

    protected $rules = [
        'file_to_upload' => 'required|mimes:xlsx,cvs,txt',
    ];

    public function isUpload(){
        if($this->isUpload){
            $this->isUpload = false;
            $this->buttonText = 'Upload Batch';
        } else{
            $this->isUpload = true;
            $this->buttonText = 'New Patient';
        }
    }

    public function uploadFile()
    {
        $this->validate();

        $update =  Excel::import(new ExcelModel, $this->file_to_upload);

        if($update) {
            $this->message = "Updated database successfully!";
            $this->success = true;
            $this->file_to_upload = "";
        } else {
            $this->message = "An error occured. Please try again!";
            $this->file_to_upload = "";
        }
    }
    
    public function addSingle(){
        $this->validate([
            'hiv_clinic_no' => 'required',
            'family_name' => 'required',
            'given_name' => 'required',
            'gender' => 'required',
            'hiv_viral_load_date' => 'required',
            'return_visit_date' => 'required',
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
            'care_giver_phone-number' => $this->care_giver_phone_number
        ]);

        if($create) {
            $this->message = "Patient added successfully!";
            $this->success = true;
            $this->isUpload = false;
            $this->buttonText = 'Upload Batch';
            // $this->reset();
        }
    }
    public function render()
    {
        return view('livewire.upload-file');
    }
}
