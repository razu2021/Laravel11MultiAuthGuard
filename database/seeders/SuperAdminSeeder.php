<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\SuperAdmin;
class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        SuperAdmin::create([
            "name"=>"Super Admin",
            "email" => "superadmin@gmail.com",
            "password" => Hash::make(123456789),

        ]);

    }
}
