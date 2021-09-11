<?php
# Generated by the protocol buffer compiler (https://github.com/mix-php/grpc). DO NOT EDIT!
# source: orders.proto

namespace Orders\Services;

use Mix\Grpc;
use Mix\Grpc\Context;

interface OrdersServiceInterface extends Grpc\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "orders.services.OrdersService";

    /**
    * @param Context $context
    * @param Id $request
    * @return Order
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function OrderById(Context $context, Id $request): Order;

    /**
    * @param Context $context
    * @param Order $request
    * @return Order
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function updateOrder(Context $context, Order $request): Order;
}
