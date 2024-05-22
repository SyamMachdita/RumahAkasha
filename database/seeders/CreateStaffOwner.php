<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CreateStaffOwner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateStaffOwner extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Staff_Akasha',
                'email'=>'staff@gmail.com',
                'role'=>'staff',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Owner_Akasha',
                'email'=>'owner@gmail.com',
                'role'=>'owner',
                'password'=>bcrypt('123456')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
