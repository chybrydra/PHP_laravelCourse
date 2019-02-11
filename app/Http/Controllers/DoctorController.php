<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller{

    public function index(){
    	$doctorsList = array(
    		array("id"=>1, "lastname"=>"Newman", "firstname"=>"John", "email"=>"john@newman.com", "phone"=>"123123123", "address"=>"Address 1", "status"=>"Dostępny"),
    		array("id"=>2, "lastname"=>"Austin", "firstname"=>"Adam", "email"=>"adam@austin.com", "phone"=>"666333666", "address"=>"Address 2", "status"=>"Dostępny"),
    		array("id"=>3, "lastname"=>"Carrson", "firstname"=>"Bob", "email"=>"bob@carrson.com", "phone"=>"987654321", "address"=>"Address 3", "status"=>"Niedostępny")
    	);
    	return view('doctors.list', ["doctorsList"	=>	$doctorsList,
									"footerYear"	=>	date("Y"),
									"title"			=>	"Moduł lekarzy"]);
    }
}
