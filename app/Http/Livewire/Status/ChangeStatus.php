<?php

namespace App\Http\Livewire\Status;

use App\Models\Job;
use App\Models\Status;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ChangeStatus extends Component
{
    public $job_id, $job;
    public $open = false;
    public $status;

    public function mount($job_id)
    {
        $this->job = Job::find($job_id);
        $this->status = $this->job->status->id;
    }

    public function render()
    {
   
        $statuses = Status::all();
        $currentStatus = Status::find($this->status);
        
        return view('livewire.status.change-status')->with(
            [
                'job' => $this->job,
                'statuses' => $statuses,
                'statusName' => $currentStatus->name
            ]
        );
    }
    public function save()
    {
        if ($this->status != $this->job->status_id)
        {
            $this->job->status_id = $this->status;
            $this->job->save();
            $this->job->stat()->attach($this->status,['user'=>Auth::user()->name]);
        }
        $this->open = false;
    }

    
}
