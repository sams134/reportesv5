<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Job;
use Livewire\Component;

class Search extends Component
{
    public $keyword;
    public function render()
    {
        if (strpos($this->keyword,'-') != 0)
          {
              $key = explode("-",$this->keyword);
              $jobs = Job::query()
              ->where('os','like','%'.$key[1].'%')
              ->where('year','like','%'.$key[0].'%')
              ->get()->take(6);
              
          }else{
            $jobs = Job::query()->where('os','like','%'.$this->keyword.'%')->get()->take(6);
          }
        
        $customers = Customer::query()->where('name','like','%'.$this->keyword.'%')->get()->take(6);
          
        return view('livewire.search',compact('jobs','customers'));
    }
}
