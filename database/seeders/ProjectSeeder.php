<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i = 0; $i < 10; $i++) {

            $new_project = new Project();

            $title = $faker->sentence(6);
            $new_project->name = $faker->name();
            $new_project->description = $faker->text();
            $new_project->giturl = $faker->url();

            $new_project->slug = Str::slug($title);

            $new_project->save();
        }
    }
}
