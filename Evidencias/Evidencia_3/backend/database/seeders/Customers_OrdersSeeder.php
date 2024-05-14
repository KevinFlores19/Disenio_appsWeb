<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Customers_Orders;
use App\Models\Orders;
use App\Models\Customers;
use App\Models\Photos;

class Customers_OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtén todas las órdenes
        $orders = Orders::all();

        // Itera sobre cada orden y crea una entrada en la tabla user_orders
        foreach ($orders as $order) {
            Customers_Orders::create([
                'customer_id' => $order->customer_id,
                'photo_id' => $order->photo_id,
            ]);
        }
    }
}
