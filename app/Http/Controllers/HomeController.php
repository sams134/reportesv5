<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        $inProgressJobs = Job::whereHas('status',function($q){
            $q->where('id',Status::STATUS_TRABAJANDO);
        })->get();
        $technicians = User::where('user_type',3)->get();
        
       

        return $technicians;
        //return $inProgressJobs;
        return view('welcome',['inProgressJobs' => $inProgressJobs,'technicians' => $technicians]);
    }
}
