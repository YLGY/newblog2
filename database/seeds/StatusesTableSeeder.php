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
        $ids = ['1', '2', '3'];
        $faker = app(Faker\Generator::class);

        $statuses = factory(Status::class)->times(100)->make()->each(function($status) use ($ids, $faker) {
            $status->user_id = $faker->randomElement($ids);
        });

        Status::insert($statuses->toArray());
    }
}
