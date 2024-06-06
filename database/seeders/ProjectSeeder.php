<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
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

        $types = Type::all(); //collection di oggetti Type -> deve diventare un array di id

        $ids = $types->pluck('id')->all();


        for ($i = 0; $i < 10; $i++) {

            $new_project = new Project();

            $title = $faker->sentence(6);
            $new_project->name = $faker->name();
            $new_project->description = $faker->text();
            $new_project->giturl = $faker->url();
            $new_project->type_id = $faker->optional()->randomElement($ids);

            $new_project->slug = Str::slug($title);

            $new_project->save();
        }
    }
}
