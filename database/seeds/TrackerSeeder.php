<?php

use Illuminate\Database\Seeder;

class TrackerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tracker::class, 50)->create()->each(function ($t) {
            $t->locations()->save(factory(App\TrackerLocation::class)->make([
                'tracker_id' => $t->id
            ]));
        });
    }
}
