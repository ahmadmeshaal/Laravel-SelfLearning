<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("todos")->insert([
            [
                'task' => 'buy a new phone',
                'completed' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'task' => 'call my granma',
                'completed' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
