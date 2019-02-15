<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\UserRepository;

class DoctorController extends Controller{

    public function index(UserRepository $userRepo){		
        $statistics = $userRepo->getDoctorsStatistics();
        $users = $userRepo->getAllDoctors();
    	return view('doctors.list', ["doctorsList"	=>	$users,
									"footerYear"	=>	date("Y"),
                                    "title"			=>	"Moduł lekarzy",
                                    "statistics"    => $statistics]);
    }
    
    public function listBySpecialization(UserRepository $userRepo, $id){        
        $statistics = $userRepo->getDoctorsStatistics();
        $users = $userRepo->getDoctorsBySpecialization($id);
    	return view('doctors.list', ["doctorsList"	=>	$users,
									"footerYear"	=>	date("Y"),
                                    "title"			=>	"Moduł lekarzy",
                                    "statistics"    => $statistics]);
    }
	
	public function show(UserRepository $userRepo, $id){		
		$doctor = $userRepo->find($id);	
		return view('doctors.show', ["doctor"		=>	$doctor,
									"footerYear"	=>	date("Y"),
									"title"			=>	"Moduł lekarzy"]);
	}

	public function create(UserRepository $userRepo){		
		$userRepo->create([
			'name' => 'Second Newman',
			'email' => 'second@user.us',
			'password' => bcrypt('password'),
			'phone' => 010203111,
			'address' => '2 New Av., Thecity, USA',
			'status' => 'Active',
			'pesel' => '90021120194',
			'type' => 'doctor'
		]);
		return redirect('doctors');
	}
    
	public function edit(UserRepository $userRepo, $id){
        $doctor = $userRepo->update([ 'name' => 'NewerNewer Newman'], $id);
        return redirect('doctors');
	}
}
