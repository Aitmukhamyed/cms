<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->CreateUser();
    }

    private function CreateUser()
    {
        $level = [
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('pass@admin'),
        ];
        User::create($level);

        $level = [
            'role_id' => '2',
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('pass@manager'),
        ];
        User::create($level);

        $level = [
            'role_id' => '3',
            'name' => 'Operator',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('pass@operator'),
        ];
        User::create($level);

        $level = [
            'role_id' => '4',
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('pass@staff'),
        ];
        User::create($level);
  
    }
}
