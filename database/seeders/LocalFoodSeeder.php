<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LocalFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('local_foods')->insert([
                'city_id' => '1',
                'name' => '神戸牛',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '1',
                'name' => 'みそだれ餃子',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '1',
                'name' => 'ぼっかけ',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '1',
                'name' => 'ビフカツ',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '1',
                'name' => 'そばめし',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '1',
                'name' => 'いかなごのくぎ煮',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '2',
                'name' => '姫路おでん',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '2',
                'name' => 'アーモンドトースト',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '2',
                'name' => '姫路ラーメン',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '2',
                'name' => 'ひねぽん',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '2',
                'name' => 'ちゃんぽん焼き',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '2',
                'name' => 'ホルモン焼うどん',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '3',
                'name' => '丹波の黒豆',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '3',
                'name' => 'ぼたん鍋',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '4',
                'name' => '淡路島バーガー',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '4',
                'name' => '生しらす丼',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '5',
                'name' => '明石焼き',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '5',
                'name' => '加古川かつめし',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '5',
                'name' => '播州ラーメン',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '6',
                'name' => '香住ガニ',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '6',
                'name' => '但馬牛',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '6',
                'name' => '出石そば',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '7',
                'name' => 'いか焼き',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '7',
                'name' => 'ねぎ焼き',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '7',
                'name' => '箱寿司',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '8',
                'name' => '大阪お好み焼き',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '8',
                'name' => '串カツ',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '8',
                'name' => 'たこ焼き',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '8',
                'name' => 'どて焼き',
         ]);
        
        DB::table('local_foods')->insert([
                'city_id' => '8',
                'name' => '肉吸い',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '9',
                'name' => '東大阪カレーパン',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '10',
                'name' => 'かすうどん',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '10',
                'name' => 'かしみん焼き',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '10',
                'name' => '羽曳野バーガー',
         ]);
         
        DB::table('local_foods')->insert([
                'city_id' => '11',
                'name' => '高槻うどんギョーザ',
         ]);
        
        
        
    }
    
    
}
