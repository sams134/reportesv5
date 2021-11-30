<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\Status;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class JobIndex extends Component
{
    public $status_id;
    public $user_id;
    public $customer_id;
    public $list = false;
    public $pagination = 8;
    

    use WithPagination;

    public function render()
    {

     
        $jobs = Job::query()->status($this->status_id)
                            ->user($this->user_id)
                            ->customer($this->customer_id)
                            ->latest('id')
                            ->paginate($this->pagination);
                        
        $statuses = Status::all();
        $users = User::all();
       
        return view('livewire.job-index',compact('jobs','statuses','users'));
    }
    public function change_view()
    {
        $this->list = !$this->list;
        $this->pagination = !$this->list?8:30;
        $this->render();
    }
    public function resetFilters()
    {
        $this->reset(['status_id','user_id','page']);
    }
}
