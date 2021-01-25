<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Contact extends Component {

	public $firstname;
	public $lastname;
	public $email;
	public $message;

	public function rules() {
		return [
			"firstname" => "required",
			"lastname" => "required",
			"email" => "email|required",
			"message" => "required",
		];
	}

	public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render() {
        return view('livewire.contact');
    }

    public function submit() {
    	$this->validate();
    	Message::create([
    		"firstname" => $this->firstname,
    		"lastname" 	=> $this->lastname,
    		"email" 	=> $this->email,
    		"message" 	=> $this->message,
    	]);
    	$this->dispatchBrowserEvent('message-created');
    }

}
