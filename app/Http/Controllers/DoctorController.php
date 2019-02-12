<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller{

	public function index(){		
		$users = User::where('type', 'doctor')->orderBy('name','asc')->get();
    	return view('doctors.list', ["doctorsList"	=>	$users,
									"footerYear"	=>	date("Y"),
									"title"			=>	"Moduł lekarzy"]);
	}
	
	public function show($id){		
		$doctor = User::find($id);		
		return view('doctors.show', ["doctor"		=>	$doctor,
									"footerYear"	=>	date("Y"),
									"title"			=>	"Moduł lekarzy"]);
	}

	public function create(){		
		User::create([
			'name' => 'New Newman',
			'email' => 'new@user.us',
			'password' => bcrypt('password'),
			'phone' => 010203111,
			'address' => '1 New Av., Thecity, USA',
			'status' => 'Active',
			'pesel' => '90021020193',
			'type' => 'doctor'
		]);
		return redirect('doctors');
	}
    
	public function edit($id){
        $doctor = User::find($id);
        $doctor->name = "Newer Newman";
        $doctor->save();
        return redirect('doctors');
	}
}
