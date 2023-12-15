<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Example;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('examples')->insert([
        //     'id' => 11,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s")
        // ]);
        Example::factory()->count(3)->create();
    }
}
