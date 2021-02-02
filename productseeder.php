<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>' vivo mobile',
            'price'=>'1000',
            'category'=>'mobiles',
            'description'=>'A mobile is high resolution camera with dual camera angle,highly chargeable battery power',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
            ],
            [
                'name'=>' samsung',
                'price'=>'2000',
                'category'=>'TV',
                'description'=>'A mobile is high resolution camera with dual camera angle,highly chargeable battery power with high security',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
                ],
                [
                    'name'=>' Redmi mobile',
                    'price'=>'20000',
                    'category'=>'mobiles',
                    'description'=>'A mobile is high resolution camera with dual camera angle,highly chargeable battery power with high security',
                    'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
                    ],
        ]);
    }
}
