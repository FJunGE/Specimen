<?php

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_ids = ['1','2','3','4','5'];
        $faker = app(Faker\Generator::class);
        $statues = factory(Status::class)->times(100)->make()->each(function ($status) use ($faker, $user_ids){
            $status->user_id = $faker->randomElement($user_ids);
        });

        Status::insert($statues->toArray());
    }
}
