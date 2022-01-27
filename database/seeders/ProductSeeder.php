<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'LG mobile',
                'price' => '200',
                'description' => 'a smartphone with 5GB ram',
                'category' => 'mobile',
                'gallery' => 'https://www.lg.com/levant_en/images/mobile-phones/MD05885898/gallery/LGH930DS-V30-Desktop-01-05092017.jpg'
            ],
            [
                'name' => 'Poco x3',
                'price' => '300',
                'description' => 'a smartphone with 8GB ram',
                'category' => 'mobile',
                'gallery' => 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-poco-x3-pro-1.jpg'
            ],
            [
                'name'=>'IPHONE 13Pro',
                'price'=>'1100',
                'description'=>'a smartphone with 8GB ram',
                'category'=>'mobile',
                'gallery'=>'https://www.notebookcheck.net/uploads/tx_nbc2/4_to_3_Teaser_Apple_iPhone_13_Pro.jpg'
            ],
            [
                'name'=>'IPHONE 13',
                'price'=>'500',
                'description'=>'a smartphone with 6GB ram',
                'category'=>'mobile',
                'gallery'=>'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-13-pro-family-hero?wid=940&hei=1112&fmt=png-alpha&.v=1631220221000'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'2200',
                'description'=>'a smart TV with some feature',
                'category'=>'tv',
                'gallery'=>'https://m.media-amazon.com/images/I/81zeKI1IG9L._SL1500_.jpg'
            ]
        ]);
    }
}
