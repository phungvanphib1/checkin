<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $customer = new Customer();
    // $customer->id = 1;
    $customer->name = "customer 1";
    $customer->phone = "000000";
    $customer->city_id = 1;
    $customer->save();

    $customer = new Customer();
    // $customer->id = 2;
    $customer->name = "customer 2";
    $customer->phone = "000000";
    $customer->city_id = 1;
    $customer->save();

    $customer = new Customer();
    // $customer->id = 3;
    $customer->name = "customer 3";
    $customer->phone = "000000";
    $customer->city_id = 2;
    $customer->save();
    }
}
