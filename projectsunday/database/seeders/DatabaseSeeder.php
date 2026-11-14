<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Seller;
use App\Models\Catigore;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $sellerUser = User::create([
            'name' => 'Ahmad',
            'email' => 'ahmad@example.com',
            'password' => Hash::make('password'),
        ]);

        $customer = User::create([
            'name' => 'Sara',
            'email' => 'sara@example.com',
            'password' => Hash::make('password'),
        ]);

        $seller = Seller::create([
            'user_id' => $sellerUser->id,
            'store_name' => 'Tech Store',
        ]);

        $category = Catigore::create([
            'title' => 'Electronics',
            'image' => 'images/category-placeholder.png',
        ]);

        $laptop = Product::create([
            'seller_id' => $seller->id,
            'catigore_id' => $category->id,
            'name' => 'Laptop',
            'price' => 500,
            'image' => 'images/laptop.png',
        ]);

        $mouse = Product::create([
            'seller_id' => $seller->id,
            'catigore_id' => $category->id,
            'name' => 'Mouse',
            'price' => 10,
            'image' => 'images/mouse.png',
        ]);

        $order = Order::create([
            'user_id' => $customer->id,
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $laptop->id,
            'quantity' => 1,
            'price' => $laptop->price,
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $mouse->id,
            'quantity' => 2,
            'price' => $mouse->price,
        ]);
    }
}
