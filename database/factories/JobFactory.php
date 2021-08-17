<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'power' => $this->faker->randomElement(['0.5','0.75','1','1.5','2','3','4','5','5.5','7.5','10','11','15','20','25','30','40','50']),
            'hpkw' =>$this->faker->randomElement([Job::HP,Job::KW,Job::HP]),
            'serial' => strtoupper($this->faker->bothify("??###-###??# / ###")),
            'model' =>  strtoupper($this->faker->bothify("????-##?")),
            'rpm' =>  $this->faker->randomElement(['3550','1780','1755','1720','1190','895']),
            'frame' => $this->faker->numerify("###T"),
            'mfg' => $this->faker->randomElement(['BALDOR','SIEMENS','WEG','RELIANCE','ABB','HYUNDAI','TECHTOP','LESSON','ITALVIBRA','GRUNDFOS']),
            'volts' => $this->faker->randomElement(['230/460','208-220/460','460','240','380','440']),
            'amps' => $this->faker->randomElement(['12.3/6.1','45/23','102/51','78.3','1.23','3.5-3.8/1.7']),
            'pf' => "".round(rand(70,89)/100,2),
            'hz' => 60,
            'eff' => rand(70,95)."%",
            'insul' => $this->faker->randomElement(['F','B','F','H','N','F','F']),
            'sf' => $this->faker->randomElement(['1.15','1.0','1.10','1.25','1.3','1.35'])
        ];
    }
}
