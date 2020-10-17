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
            [
                'name' => 'Samsung Galaxy A40',
                'price' => '45000',
                'category' => 'mobile',
                'gallery' => 'https://www.whatmobile.com.pk/admin/images/Samsung/SamsungGalaxyA22-b.jpg',
                'description' => 'Samsung Galaxy A80 price in Pakistan starts at Rs. 45000. This is for the base variant that comes with 8GB of RAM and 128GB of internal storage.'
            ],
            [
                'name' => 'Samsung Galaxy A90',
                'price' => '150000',
                'category' => 'mobile',
                'gallery' => 'https://www.whatmobile.com.pk/admin/images/Samsung/SamsungGalaxyA90-b.jpg',
                'description' => 'Samsung Galaxy A80 price in Pakistan starts at Rs. 114,999. This is for the base variant that comes with 8GB of RAM and 128GB of internal storage.'
            ],
            [
                'name' => 'Hisense 49M2160 - 49 Full HD LED TV - Black',
                'price' => '43000',
                'category' => 'led',
                'gallery' => 'https://oktra.pk/wp-content/uploads/2019/04/2b.png',
                'description' => 'Samsung Galaxy A80 price in Pakistan starts at Rs. 114,999. This is for the base variant that comes with 8GB of RAM and 128GB of internal storage.'
            ],
            [
                'name' => 'TCL 32 HD LED TV - 32D310',
                'price' => '20000',
                'category' => 'led',
                'gallery' => 'https://ahmadbrothers.pk/wp-content/uploads/2020/02/Screenshot_2020-02-04-Hisense-32E5100-32-HD-Ready-LED-TV-Ansons.png',
                'description' => 'Samsung Galaxy A80 price in Pakistan starts at Rs. 114,999. This is for the base variant that comes with 8GB of RAM and 128GB of internal storage.'
            ],
        ]);
    }
}
