<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('setting_shops')->insert();

        $settingShop = [[
            'key' => 'name',
            'value' => 'name Shop',
        ],
        [
        'key' => 'email',
        'value' => 'shop@gmail.com',
    ],
    [
        'key' => 'established',
        'value' => '2020/01/01',
    ],
    [
        'key' => 'phone',
        'value' => '0212222407',
    ],
    [
        'key' => 'adress',
        'value' => 'tehran-iran',
    ],
    [
        'key' => 'description',
        'value' => '',
    ],
    [
        'key' => 'briefDescription',
        'value' => '',
    ],
    [
        'key' => 'latitude',
        'value' => '',
    ],
    [
        'key' => 'longitude',
        'value' => '',
    ],
    [
        'key' => 'telegramChanel',
        'value' => '',
    ],
    [
        'key' => 'telegramBot',
        'value' => '',
    ],
    [
        'key' => 'instagram',
        'value' => '',
    ],
    [
        'key' => 'linkedin',
        'value' => '',
    ],
    [
        'key' => 'twitter',
        'value' => '',
    ],
    [
        'key' => 'video',
        'value' => '',
    ],
    [
        'key' => 'image',
        'value' => '',
    ]];
        DB::table('setting_shops')->insert($settingShop);



    }
}