<?php

namespace Database\Seeders;

use App\Models\Task;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) :
            $task  = new Task();
            $task->title = $faker->sentence(rand(2, 5));
            $task->desc = collect($faker->paragraphs(rand(4, 8)))
                ->map((fn ($p) => "<p>$p</p>"))
                ->join('');
            $task->save();
        endfor;
    }
}
