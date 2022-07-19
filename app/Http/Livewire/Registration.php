<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Registration extends Component
{
    public $currentSection = 1;
    public $name, $username, $companyName, $industry, $companySize, $email, $phone;
    public $successMessage;

    public function step1()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'username' => 'required',
            'companyName' => 'required',
            'industry' => 'required',
            'companySize' => 'required',
            'addressLineOne' => 'required',
            'addressLineTwo' => 'required',
            'addressLineThree' => 'required',
        ]);

        $this->currentSection = 2;
    }
    public function step2()
    {
        $validatedData = $this->validate([
            'email' => 'required|unique:users,email',
            'phone' => 'required|numeric'
        ]);

        $this->currentSection = 3;
    }
    public function step3()
    {
        $validatedData = $this->validate([
            'email' => 'required|unique:users,email',
            'phone' => 'required|numeric'
        ]);

        $this->currentSection = 4;
    }
    public function step4()
    {
        User::create([
            'name' => $this->name,
            'username' => $this->username,
            'companyName' => $this->companyName,
            'industry' => $this->industry,
            'companySize' => $this->companySize,
            'email' => $this->email,
            'phone' => $this->phone
        ]);

        $this->successMessage = "You've been registered";

        $this->clearForm();
        $this->currentSection = 1;
    }
    public function back($section)
    {
        $this->currentSection = $section;
    }
    public function clearForm()
    {
        $this->name = "";
        $this->username = "";
        $this->birhtPlace = "";
        $this->industry = "";
        $this->companySize = "";
        $this->email = "";
        $this->phone = "";
    }

    public function render()
    {
        return view('livewire.bootstrap-modal');
    }
}
