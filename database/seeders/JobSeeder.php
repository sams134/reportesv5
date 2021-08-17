<?php

namespace Database\Seeders;

use App\Models\Assignment;
use App\Models\Customer;
use App\Models\Inventory;
use App\Models\Job;
use App\Models\Job_type;
use App\Models\Status;
use App\Models\User;
use App\Models\Image;
use App\Models\Image_type;
use DateTime;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $date = new DateTime('2021-01-01');
        $customers = Customer::select('id')->get();
        $statuses = Status::select('id')->get();
        $jobTypes = Job_type::select('id')->get();
        $technicians = User::where('user_type',User::USER_TECHNICIAN)->get();
        while ($date < now())
        {
            
            $number_of_motors = random_int(0,2);
            $last_job = Job::all()->last();
            
               // si ya existe una orden le sumo 1
            if ($last_job != null){
                $new_os = intval($last_job->os)+1;
                $new_year = $last_job->year;
            }
            else
            {
             // si no hay ordenes insertadas, creo la 1
                $new_os = 1;
                $year = new DateTime();
                $new_year = "2M".$date->format('y');
            }
            $random_time_expected_for_repair = random_int(1,10);
             $dateRequired = date('Y-m-d', strtotime($date->format('Y-m-d') . ' +'.$random_time_expected_for_repair.' day'));
            for ($i=0;$i<=$number_of_motors;$i++)
             {
                $jobs = Job::factory(1)->create([
                    'year' => $new_year,
                    'os' => str_pad("".$new_os++,4,"0",STR_PAD_LEFT),
                    'date_received' => $date,
                    'date_required' => $dateRequired,
                    'customer_id' => $customers->random()->id,
                    'status_id' => $statuses->random()->id,
                    'job_type_id' => $jobTypes->random()->id
                 ])->each(function($job) use ($technicians){
                     Inventory::factory(1)->create(['job_id' => $job->id]);
                     $job->assignments()->attach($technicians->random()->id,['assigned_by_id' => 1]);
                     Image::factory(1)->create([
                         'image_type_id' => Image_type::IMAGE_TYPE_JOB_FRONT,
                         'imageable_id' => $job->id,
                         'imageable_type' => Job::class
                         
                     ]);
                 });
                 
             }
            $date->modify("+2 day");
        }

    }
}
