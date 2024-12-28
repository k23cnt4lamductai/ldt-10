<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LdtNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100)as $index){
            DB::table('ldtnhacc')->insert([
                'ldtMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'ldtTenNCC'=>$faker->sentence(5),
                'ldtDiaChi'=>$faker->address(),
                'ldtDienThoai'=>$faker->phoneNumber(10),
                'ldtemail'=>$faker->email(),
                'ldtstatus'=>$faker->boolean(),
            ]);
        }
    }
}