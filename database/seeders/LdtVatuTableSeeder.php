<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LdtVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //DB::table('ldtvattu')->insert([
            //'ldtMaVTu'=>'DD01',
            //'ldtTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            //'ldtDvTinh'=>'Bộ',
            //'ldtPhanTram'=>40,
            //]);
        //DB::table('ldtvattu')->insert([
            //'ldtMaVTu'=>'DD02',
            //'ldtTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            //'ldtDvTinh'=>'Bộ',
            //'ldtPhanTram'=>50,
            //]);




        $faker = Faker::create();
        foreach(range(1,50)as $index){
            DB::table('ldtvattu')->insert([
                'ldtMaVTu'=>$faker->word(4),
                // 'MaVTu'=>$faker->word(15),
                'ldtTenVTu'=>$faker->sentence(5),
                'ldtDvTinh'=>$faker->word(3),
                'ldtPhanTram'=>$faker->randomFloat('2',0,100)
            ]);
        }
    }
}