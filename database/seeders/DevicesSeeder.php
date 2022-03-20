<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DevicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['name' => 'Acer'],
            ['name' => 'Alcatel'],
            ['name' => 'Apple'],
            ['name' => 'ASUS'],
            ['name' => 'BLU'],
            ['name' => 'Google'],
            ['name' => 'Honor'],
            ['name' => 'HTC'],
            ['name' => 'Huawei'],
            ['name' => 'Lenovo'],
            ['name' => 'LG'],
            ['name' => 'Motorola'],
            ['name' => 'Nokia'],
            ['name' => 'OnePlus'],
            ['name' => 'Oppo'],
            ['name' => 'Realme'],
            ['name' => 'Samsung'],
            ['name' => 'Sony'],
            ['name' => 'TCL'],
            ['name' => 'Vivo'],
            ['name' => 'Xiaomi'],
            ['name' => 'ZTE']

        ];
        DB::table('brands')->insert($brands);
    }
}
