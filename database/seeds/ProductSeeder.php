<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name' => 'Bolu Kukus',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data);

        $data1 = [
            [
                'name' => 'Bolu Rebus',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data1);

        $data2 = [
            [
                'name' => 'Lapis',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data2);

        $data3 = [
            [
                'name' => 'Pipis',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data3);

        $data4 = [
            [
                'name' => 'Bolu Kukus Gosong',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data4);

        $data5 = [
            [
                'name' => 'Bolu Kukus Setengah Mateng',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data5);

        $data6 = [
            [
                'name' => 'Bolu Kukus Hem',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data6);

        $data7 = [
            [
                'name' => 'Bolu Kukus dalah',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data7);

        $data8 = [
            [
                'name' => 'Bolu Kukus ora mateng',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data8);

        $data9 = [
            [
                'name' => 'Bolu Kukus mentah',
                'image'=>'bolu.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '10000',
                'weigth' => '500',
                'categories_id' => '1',
                'stok' => '500'
                ]
        ];
        Product::insert($data9);
    }
}
