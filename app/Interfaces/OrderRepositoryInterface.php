<?php

namespace App\Interfaces;

interface OrderRepositoryInterface
{
    public function get_all_orders();

    public function get_order_by_id($orderId);

    public function delete_order($orderId);

    public function create_order(array $orderDetails);

    public function update_order($orderId, array $newDetails);

    public function get_fullfilled_orders();


}