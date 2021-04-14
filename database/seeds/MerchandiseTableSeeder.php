<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MerchandiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchandises')->insert([
            'id' => '1',
            'nama' => 'Tumblr America',
            'stock' => '10',
            'harga' => '79.99',
            'status' => '1',
            'foto' => '/assets2/img/merchandises/m1.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('merchandises')->insert([
            'id' => '2',
            'nama' => 'Tumblr Indonesia',
            'stock' => '10',
            'harga' => '59.99',
            'status' => '1',
            'foto' => '/assets2/img/merchandises/m2.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('merchandises')->insert([
            'id' => '3',
            'nama' => 'Tumblr Wakanda',
            'stock' => '10',
            'harga' => '199.50',
            'status' => '1',
            'foto' => '/assets2/img/merchandises/m4.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('merchandises')->insert([
            'id' => '4',
            'nama' => 'Tumblr Rainbow',
            'stock' => '10',
            'harga' => '79.99',
            'status' => '1',
            'foto' => '/assets2/img/merchandises/m5.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('merchandises')->insert([
            'id' => '5',
            'nama' => 'Tumblr China',
            'stock' => '10',
            'harga' => '49.99',
            'status' => '1',
            'foto' => '/assets2/img/merchandises/m6.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
