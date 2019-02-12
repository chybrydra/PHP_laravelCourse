<?php

namespace App\Repositories;

use App\Models\Specialization;

class SpecializationRepository extends BaseRepository{

    public function __construct(Specialization $model){
        $this->model = $model;
    }

    public function getAllDoctors(){
        return $this->model->where('type','doctor')->orderBy('name','asc')->get();
    }
}