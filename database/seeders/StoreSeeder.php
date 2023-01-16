<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
                'local_food_id' => 1,
                'city_id' => 1,
                'name' => 'モーリヤ 本店',
                'overview' => '明治18年の創業当初から神戸牛を扱っている老舗。お肉の素材の良さそのものにとことんこだわっている。石と木目を基調とした風格ある店内で、丁寧に焼かれた変わらない味。神戸牛ステーキを食べるならぜひ一度は訪れたい名店。',
                'adress' => '兵庫県神戸市中央区下山手通2-1-17',
                'parking' => 0,
                'private_room' => 0,
                'card' => 1,
                'midnight' => 0,
                'e_money' => 1,
                'counter_seat' => 1,
                'reserve' => 1,
                'take_out' => 0,
                'child' => 1,
         ]);
         
         DB::table('stores')->insert([
                'local_food_id' => 1,
                'city_id' => 1,
                'name' => 'ステーキみその 神戸本店',
                'overview' => '1945年創業の、鉄板焼ステーキ発祥の店として有名。開放的な空間で、シェフが目の前で腕をふるって、最高級の神戸牛サーロインを丁寧に焼き上げる。お皿を使わず、鉄板の上からいただく食べ方はみそのならではのこだわり。',
                'adress' => '神戸市中央区下山手通1-1-2 みそのビル7・8F',
                'parking' => 0,
                'private_room' => 0,
                'card' => 1,
                'midnight' => 0,
                'e_money' => 0,
                'counter_seat' => 1,
                'reserve' => 1,
                'take_out' => 0,
                'child' => 1,
         ]);
         
         DB::table('stores')->insert([
                'local_food_id' => 1,
                'city_id' => 1,
                'name' => '神戸牛ステーキ彩ダイニング',
                'overview' => '店内は神戸らしいおしゃれな雰囲気で白を基調としており、女性にも人気。希少価値の高い特選A5ランクの神戸牛を食べられる。特選旬の野菜などを使った料理も一緒に。お客様への配慮に満ちたお店なので、子様連れのファミリーも気軽に入店OK。',
                'adress' => '兵庫県神戸市中央区下山手通3-1-9 コスモビル B1F',
                'parking' => 0,
                'private_room' => 0,
                'card' => 1,
                'midnight' => 0,
                'e_money' => 0,
                'counter_seat' => 1,
                'reserve' => 1,
                'take_out' => 0,
                'child' => 1,
         ]);

    }
}
