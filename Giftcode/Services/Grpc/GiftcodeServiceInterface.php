<?php
# Generated by the protocol buffer compiler (https://github.com/mix-php/grpc). DO NOT EDIT!
# source: giftcodes.proto

namespace Giftcode\Services\Grpc;

use Mix\Grpc;
use Mix\Grpc\Context;
use User\Services\Grpc;

interface GiftcodeServiceInterface extends Grpc\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "giftcode.services.grpc.GiftcodeService";

    /**
    * @param Context $context
    * @param Giftcode $request
    * @return Giftcode
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function createGiftcode(Context $context, Giftcode $request): Giftcode;

    /**
    * @param Context $context
    * @param Giftcode $request
    * @return Giftcode
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function redeemGiftcode(Context $context, Giftcode $request): Giftcode;

    /**
    * @param Context $context
    * @param Giftcode $request
    * @return Giftcode
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function cancelGiftcode(Context $context, Giftcode $request): Giftcode;

    /**
    * @param Context $context
    * @param Id $request
    * @return Giftcode
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function getGiftcodeById(Context $context, Id $request): Giftcode;

    /**
    * @param Context $context
    * @param Id $request
    * @return Giftcode
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function getGiftcodeByUuid(Context $context, Id $request): Giftcode;

    /**
    * @param Context $context
    * @param Grpc\User $request
    * @return Count
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function getUserCreatedGiftcodesCount(Context $context, Grpc\User $request): Count;

    /**
    * @param Context $context
    * @param Grpc\User $request
    * @return Count
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function getUserExpiredGiftcodesCount(Context $context, Grpc\User $request): Count;

    /**
    * @param Context $context
    * @param Grpc\User $request
    * @return Count
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function getUserCanceledGiftcodesCount(Context $context, Grpc\User $request): Count;

    /**
    * @param Context $context
    * @param Grpc\User $request
    * @return Count
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function getUserRedeemedGiftcodesCount(Context $context, Grpc\User $request): Count;
}
