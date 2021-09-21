<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user_id = $status_id = $customer_id =null;
       
        
        return view('jobs.index',compact('user_id','status_id','customer_id'));
    }
    public function view_jobs($user_id,$status_id)
    {  
        $customer_id = null;
        return view('jobs.index',compact('user_id','status_id','customer_id'));
    }
    public function view_jobs_customer($customer_id,$status_id)
    {  
        if ($status_id == "none")
         $status_id = null;
        $user_id = null;
        return view('jobs.index',compact('customer_id','status_id','user_id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
        
       $statuses = Status::all();
        return view('jobs.show',compact('job','statuses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orders($job_id,&$orders = [])
    {
        $job = Job::find($job_id);
        $orders[] = $job;
        if (count($job->all_old_orders) > 0)
            return $this->orders($job->all_old_orders->first()->id,$orders);
        return $orders;
    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
