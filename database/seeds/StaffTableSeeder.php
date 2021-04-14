<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            'id' => '1',
            'nama' => 'Marissa Fortuna',
            'divisi' => 'Marketing',
            'NIK' => '105218001',
            'gender' => 'Female',
            'status' => '1',
            'foto' => '/assets2/img/staffs/marissa.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('staffs')->insert([
            'id' => '2',
            'nama' => 'Paraptughessa P',
            'divisi' => 'IT Development',
            'NIK' => '105218008',
            'gender' => 'Female',
            'status' => '1',
            'foto' => '/assets2/img/staffs/ugik.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('staffs')->insert([
            'id' => '3',
            'nama' => 'Sarah Allya',
            'divisi' => 'Chef',
            'NIK' => '105218011',
            'gender' => 'Female',
            'status' => '1',
            'foto' => '/assets2/img/staffs/sarah.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('staffs')->insert([
            'id' => '4',
            'nama' => 'Pridya Rahmayanti',
            'divisi' => 'Manager',
            'NIK' => '105218016',
            'gender' => 'Female',
            'status' => '1',
            'foto' => '/assets2/img/staffs/pridya.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('staffs')->insert([
            'id' => '5',
            'nama' => 'Sara Florensia',
            'divisi' => 'CEO',
            'NIK' => '105218048',
            'gender' => 'Female',
            'status' => '1',
            'foto' => '/assets2/img/staffs/ploren.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
