<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = DB::table('roles')->where('name', 'admin')->first();
        $department = DB::table('department')->where('code', 02)->first();

        $user = User::create([
            'names' => 'ludycom',
            'last_name' => 'TM',
            'birth_date' => '1990-08-11',
            'department_id' => $department->id,
            'email' => 'admin@ludycom.com',
            'identification_card' => '111111',
            'salary' => 4500000,
            'state' => 1,
            'password' => Hash::make('password'),
            'must_change_password' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($adminRole) {
            $user->roles()->attach($adminRole->id);
        }
    }
}
