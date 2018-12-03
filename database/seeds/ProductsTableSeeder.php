<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'category_id'  => '1',
            'vendor_id' => '1',
            'name' => 'Đầm nữ tay dài phong cách Ulzzang Hàn Quốc',
            'slug' => 'Đầm-nữ-tay-dài-phong-cách-Ulzzang-Hàn-Quốc',
            'sale_price'=>'200 000',
            'origin_price' => '250 000'
        ]);
        \DB::table('products')->insert([
            'category_id'  => '1',
            'vendor_id' => '1',
            'name' => 'Váy liền tôn dáng phong cách Hàn Quốc',
            'slug' => 'Váy-liền-tôn-dáng-phong-cách-Hàn-Quốcc',
            'sale_price'=>'218 000',
            'origin_price' => '250 000'
        ]);
        
    }
}
