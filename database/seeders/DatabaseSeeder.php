<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create(),

        // user
        DB::table('users')->insert([
            'name' => 'Victor HF',
            'email' => 'prueba@email.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // oxxo
        DB::table('oxxos')->insert([
            'store' => Str::random(10),
            'phone' => mt_rand(999999999, 9999999999),
            'address' => Str::random(10).' '.Str::random(5).' #'.mt_rand(10, 999),
            'state' => 'México',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // profile
        DB::table('profiles')->insert([
            'user_id' => 1,
            'oxxo_id' => 1,
            'name' => 'Victor',
            'psurname' => Str::random(7),
            'msurname' => Str::random(10),
            'email' => 'prueba@email.com',
            'employee' => mt_rand(999,9999),
            'phone' => mt_rand(999999999, 9999999999),
            'birthday' => '1980-01-25',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // missions
        DB::table('missions')->insert([
            'validity_date' => '2021-04-25',
            'validity_time' => '12:00',
            'title' => 'GL Total Marcas EF21',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl.',
            'image' => 'assets\images\misiones\misiones-oxxo-01.jpg',
            'code' => Str::random(8),
            'value' => mt_rand(1,10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('missions')->insert([
            'validity_date' => '2021-05-27',
            'validity_time' => '16:00',
            'title' => 'GL Total Marcas EF22',
            'description' => 'Praesent vulputate vestibulum libero, eu luctus turpis euismod in.',
            'image' => 'assets\images\misiones\misiones-oxxo-01.jpg',
            'code' => Str::random(8),
            'value' => mt_rand(1,10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('missions')->insert([
            'validity_date' => '2021-06-30',
            'validity_time' => '20:00',
            'title' => 'GL Total Marcas EF23',
            'description' => 'Morbi eget mi condimentum odio elementum semper dictum molestie magna.',
            'image' => 'assets\images\misiones\misiones-oxxo-01.jpg',
            'code' => Str::random(8),
            'value' => mt_rand(1,10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('objectives')->insert([
            'user_id' => 1,
            'mission_id' => 1,
            'product' => 'SNICKERS 48g',
            'image' => 'assets\images\productos\SNK-001-KLT.png',
            'base' => 2,
            'progress' => 5,
            'goal' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('objectives')->insert([
            'user_id' => 1,
            'mission_id' => 2,
            'product' => 'SNICKERS VITROLERO',
            'image' => 'assets\images\productos\SNK-014-KLT.png',
            'base' => 5,
            'progress' => 15,
            'goal' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('prizes')->insert([
            'title' => 'Nintendo DS',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl. Praesent vulputate vestibulum libero, eu luctus turpis euismod in.',
            'image' => 'assets\images\premios\10.jpg',
            'category' => 'tecnología',
            'price' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('prizes')->insert([
            'title' => 'PlayStation 5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl. Praesent vulputate vestibulum libero, eu luctus turpis euismod in.',
            'image' => 'assets\images\premios\09.jpg',
            'category' => 'tecnología',
            'price' => 10000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('prizes')->insert([
            'title' => Str::random(8),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl. Praesent vulputate vestibulum libero, eu luctus turpis euismod in.',
            'image' => 'assets\images\premios\01.jpg',
            'category' => 'hogar',
            'price' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('prizes')->insert([
            'title' => 'Smart TV 50"',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl. Praesent vulputate vestibulum libero, eu luctus turpis euismod in.',
            'image' => 'assets\images\premios\11.jpg',
            'category' => 'entretenimiento',
            'price' => 3000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('orders')->insert([
            'user_id' => 1,
            'products' => '1,2',
            'total' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('orders')->insert([
            'user_id' => 1,
            'products' => '3',
            'total' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('points')->insert([
            'transaction_id' => 1,
            'user_id' => 1,
            'out' => 0,
            'amount' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('points')->insert([
            'transaction_id' => 2,
            'user_id' => 1,
            'out' => 0,
            'amount' => 1500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('points')->insert([
            'transaction_id' => 1,
            'user_id' => 1,
            'out' => 1,
            'amount' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('points')->insert([
            'transaction_id' => 3,
            'user_id' => 1,
            'out' => 0,
            'amount' => 750,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
            
    }
}
