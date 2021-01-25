<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminPanelController extends Controller {
    public function showLogin() {
    	// return User::create(["email" => "admin@admin.com", "password" => Hash::make("admin")]);
    	return view("admin.login");
    }

    public function dashboard() {
    	$counts = DB::table("volunteers")->select("blood_group", DB::raw('count(*) as blood_count'))->groupBy("blood_group")->get();
    	$messages = Message::all();
    	return view("admin.dashboard", ["counts" => $counts, "messages" => $messages]);
    }
}
