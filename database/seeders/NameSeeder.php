<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('names')->insert([
            'name' => Str::random(10),
        ]);

        DB::table('names')->insert([
            'name' => Str::random(10),
        ]);

        DB::table('names')->insert([
            'name' => Str::random(10),
        ]);

        DB::table('names')->insert([
            'name' => Str::random(10),
        ]);

        DB::table('names')->insert([
            'name' => Str::random(10),
        ]);

        DB::table('names')->insert([
            'name' => Str::random(10),
        ]);

        DB::table('names')->insert([
            'name' => Str::random(10),
        ]);

        DB::table('names')->insert([
            'name' => Str::random(10),
        ]);

        DB::table('names')->insert([
            'name' => Str::random(10),
        ]);
    }
}
