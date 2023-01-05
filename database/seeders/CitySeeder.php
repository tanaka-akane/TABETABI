<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
                'name' => '神戸・有馬',
                'prefecture_id' => 28,
         ]);
         
        DB::table('cities')->insert([
                'name' => '姫路・西播磨',
                'prefecture_id' => 28,
        ]);
         
        DB::table('cities')->insert([
            'name' => '丹波・篠山',
            'prefecture_id' => 28,
        ]);
        
        DB::table('cities')->insert([
            'name' => '淡路',
            'prefecture_id' => 28,
        ]);
        
        DB::table('cities')->insert([
            'name' => '西宮・宝塚',
            'prefecture_id' => 28,
        ]);
        
        DB::table('cities')->insert([
            'name' => '明石・東播磨',
            'prefecture_id' => 28,
        ]);
        
        DB::table('cities')->insert([
            'name' => '但馬・香住・城崎',
            'prefecture_id' => 28,
        ]);
        
    }
}
