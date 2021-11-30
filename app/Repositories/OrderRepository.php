<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function get_all_orders()
    {
        return Order::all();
    }

    public function get_order_by_id($orderId)
    {
        Order::findOrFail($orderId);
    }

    public function delete_order($orderId)
    {
        return Order::destroy($orderId);
    }

    public function create_order(array $orderDetails)
    {
        return Order::create($orderDetails);
    }

    public function update_order($orderId, array $newDetails)
    {
        return Order::whereId($orderId)->update($newDetails);
    }

    public function get_fullfilled_orders()
    {
        return Order::where('is_fulfilled', true);
    }
}