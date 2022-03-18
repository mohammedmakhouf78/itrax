<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            [
                'title' => "activity one",
                'slug' => "hello this is very good",
                'icon' => "activity1.png"
            ],
            [
                'title' => "activity Two",
                'slug' => "hello this is very good",
                'icon' => "activity2.png"
            ],
            [
                'title' => "activity Three",
                'slug' => "hello this is very good",
                'icon' => "activity3.png"
            ],
            [
                'title' => "activity Four",
                'slug' => "hello this is very good",
                'icon' => "activity4.png"
            ],
        ];


        foreach ($activities as $activity)
        {
            Activity::create($activity);
        }


    }
}
