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
            'name' => '明石・東播磨',
            'prefecture_id' => 28,
        ]);
        
        DB::table('cities')->insert([
            'name' => '但馬・香住・城崎',
            'prefecture_id' => 28,
        ]);
        
        DB::table('cities')->insert([
            'name' => 'キタ(梅田周辺)',
            'prefecture_id' => 27,
        ]);
        
        DB::table('cities')->insert([
            'name' => 'ミナミ(道頓堀周辺)',
            'prefecture_id' => 27,
        ]);
        
        DB::table('cities')->insert([
            'name' => '中河内・北河内',
            'prefecture_id' => 27,
        ]);
        
        DB::table('cities')->insert([
            'name' => '堺・泉州・南河内',
            'prefecture_id' => 27,
        ]);
        
        DB::table('cities')->insert([
            'name' => '北摂',
            'prefecture_id' => 27,
        ]);
    }
}
