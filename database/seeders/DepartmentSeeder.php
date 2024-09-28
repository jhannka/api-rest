<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('department')->insert([
            [
                'code' => 01,
                'names' => 'Human Resources',
                'lead' => 1,
                'state' => true,
            ],
            [
                'code' => 02,
                'names' => 'IT Department',
                'lead' => 2,
                'state' => true,
            ],
            [
                'code' => 03,
                'names' => 'Finance',
                'lead' => 3,
                'state' => true,
            ],
            [
                'code' => 04,
                'names' => 'Marketing',
                'lead' => 4,
                'state' => false
            ],
        ]);
    }
}
