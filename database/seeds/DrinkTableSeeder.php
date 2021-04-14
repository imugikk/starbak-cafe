<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DrinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drinks')->insert([
            'id' => '1',
            'nama' => 'Ice Americano',
            'stock' => '10',
            'harga' => '39.99',
            'status' => '1',
            'foto' => '/assets2/img/drinks/d1.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('drinks')->insert([
            'id' => '2',
            'nama' => 'Ice Green Tea',
            'stock' => '5',
            'harga' => '49.99',
            'status' => '1',
            'foto' => '/assets2/img/drinks/d2.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('drinks')->insert([
            'id' => '3',
            'nama' => 'Hot Coffee',
            'stock' => '5',
            'harga' => '29.99',
            'status' => '1',
            'foto' => '/assets2/img/drinks/d3.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('drinks')->insert([
            'id' => '4',
            'nama' => 'Creamy Latte',
            'stock' => '5',
            'harga' => '59.99',
            'status' => '1',
            'foto' => '/assets2/img/drinks/d4.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('drinks')->insert([
            'id' => '5',
            'nama' => 'Ice Choco',
            'stock' => '5',
            'harga' => '19.99',
            'status' => '0',
            'foto' => '/assets2/img/drinks/d5.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
