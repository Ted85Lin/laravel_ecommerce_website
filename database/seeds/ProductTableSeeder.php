<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Product = new \App\Product([
             'imagePath' =>'https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369',
             'title' => 'ssss',
              'description' => 'ssss',
              'price' => 10,   
        ]);
        $Product->save();
           $Product = new \App\Product([
             'imagePath' =>'https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369',
             'title' => 'shhhsss',
              'description' => 'ssffss',
              'price' => 15,   
        ]);
        $Product->save();
        $Product = new \App\Product([
             'imagePath' =>'https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369',
             'title' => 'shhhsss',
              'description' => 'ssffss',
              'price' => 15,   
        ]);
        $Product->save();
        $Product = new \App\Product([
             'imagePath' =>'https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369',
             'title' => 'shhhsss',
              'description' => 'ssffss',
              'price' => 15,   
        ]);
        $Product->save();
    }
}
