<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->CreateRole();
    }

    private function CreateRole()
    {
        $level = [
            'role_name' => 'Admin',
            'role_slug' => 'admin',
        ];
        Role::create($level);

        $level = [
            'role_name' => 'Manager',
            'role_slug' => 'manager',
        ];
        Role::create($level);

        $level = [
            'role_name' => 'Operator',
            'role_slug' => 'operator',
        ];
        Role::create($level);

        $level = [
            'role_name' => 'Staff',
            'role_slug' => 'staff',
        ];
        Role::create($level);

    }
}
