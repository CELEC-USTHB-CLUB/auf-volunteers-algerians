<?php

namespace App\Http\Livewire;

use App\Models\Volunteer;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Register extends Component {

	public $firstname;
	public $lastname;
	public $email;
	public $blood_group;
	public $phone;
	public $phone2;
	public $occupation;

	public function rules() {
		return [
			"firstname" 	=> 	"required",
			"lastname" 		=> 	"required",
			"email" 		=> 	"email|required|unique:volunteers,email",
			"blood_group" 	=> 	["required", Rule::in(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', "O+", "O-"])],
			"phone" 		=> 	"required|unique:volunteers,phone",
			"phone2" 		=> 	"required|unique:volunteers,phone2",
		];
	}

	public function updated($propertyName) {
		if ($propertyName !== "occupation") {
	        $this->validateOnly($propertyName);
		}
    }

    public function render() {
        return view('livewire.register');
    }

    public function submit() {
    	$this->validate();
    	Volunteer::create([
    		"firstname" 	=> 	$this->firstname,
    		"lastname" 		=> 	$this->lastname,
    		"email" 		=> 	$this->email,
    		"Occupation" 	=> 	$this->occupation,
    		"blood_group" 	=> 	$this->blood_group,
    		"phone"	 		=> 	$this->phone,
    		"phone2" 		=> 	$this->phone2,
    	]);
		$this->dispatchBrowserEvent('volunteer-created');
    }
}
