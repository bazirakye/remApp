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

    public $disable_button = true;
    public $file_to_upload;
    public $message = "";

    public $success = false;

    protected $rules = [
        'file_to_upload' => 'required|mimes:xlsx,cvs,txt',
    ];

    public function updated($fields)
    {
        $this->disable_button = true;
        $this->validate(); //
        $this->disable_button = false;
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

    public function render()
    {
        return view('livewire.upload-file');
    }
}
