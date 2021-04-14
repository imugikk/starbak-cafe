<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            'id' => '1',
            'nama' => 'Spicy Pizza',
            'stock' => '10',
            'harga' => '79.99',
            'status' => '1',
            'foto' => '/assets2/img/foods/f1.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'id' => '2',
            'nama' => 'Pasta Europe',
            'stock' => '7',
            'harga' => '65.87',
            'status' => '1',
            'foto' => '/assets2/img/foods/f2.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'id' => '3',
            'nama' => 'Hamburger Fries',
            'stock' => '10',
            'harga' => '55.87',
            'status' => '1',
            'foto' => '/assets2/img/foods/f3.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'id' => '4',
            'nama' => 'Steak Fish',
            'stock' => '1',
            'harga' => '105.87',
            'status' => '1',
            'foto' => '/assets2/img/foods/f4.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
