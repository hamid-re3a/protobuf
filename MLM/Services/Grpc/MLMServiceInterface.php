<?php
# Generated by the protocol buffer compiler (https://github.com/mix-php/grpc). DO NOT EDIT!
# source: mlm.proto

namespace MLM\Services\Grpc;

use Mix\Grpc;
use Mix\Grpc\Context;
use Orders\Services\Grpc;
use User\Services\Grpc;

interface MLMServiceInterface extends Grpc\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "MLM.services.grpc.MLMService";

    /**
    * @param Context $context
    * @param Grpc\User $request
    * @return Acknowledge
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function hasValidPackage(Context $context, Grpc\User $request): Acknowledge;

    /**
    * @param Context $context
    * @param Grpc\User $request
    * @return Rank
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function getUserRank(Context $context, Grpc\User $request): Rank;

    /**
    * @param Context $context
    * @param Grpc\Order $request
    * @return Acknowledge
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function simulateOrder(Context $context, Grpc\Order $request): Acknowledge;

    /**
    * @param Context $context
    * @param Grpc\Order $request
    * @return Acknowledge
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function submitOrder(Context $context, Grpc\Order $request): Acknowledge;

    /**
    * @param Context $context
    * @param UserDescendantCheck $request
    * @return Acknowledge
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function isUserInSecondUserDescendant(Context $context, UserDescendantCheck $request): Acknowledge;
}
