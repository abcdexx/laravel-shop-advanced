<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(UserAddressesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(CouponCodesSeeder::class);
        $this->call(OrdersSeeder::class);
        // 放在 ProductsSeeder 之前
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
    }
}
