<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: giftcodes.proto

namespace GPBMetadata;

class Giftcodes
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\User::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
giftcodes.protogiftcode.services"
Id

id ("
Uuid
uuid (	"
Count
counts ("�
Giftcode

id (
uuid (	
user_id (

package_id (
packages_cost_in_usd (
registration_fee_in_usd (
total_cost_in_usd (
code (	
expiration_date	 (	
redeem_user_id
 (
redeem_date (	
is_canceled ($
creator (2.user.services.User%
redeemer (2.user.services.User

deleted_at (	

created_at (	

updated_at (	"?
GiftcodesArray-
giftcode (2.giftcode.services.Giftcode2�
GiftcodeServiceL
createGiftcode.giftcode.services.Giftcode.giftcode.services.Giftcode" L
redeemGiftcode.giftcode.services.Giftcode.giftcode.services.Giftcode" L
cancelGiftcode.giftcode.services.Giftcode.giftcode.services.Giftcode" G
getGiftcodeById.giftcode.services.Id.giftcode.services.Giftcode" I
getGiftcodeByUuid.giftcode.services.Id.giftcode.services.Giftcode" S
getUserCreatedGiftcodes.user.services.User!.giftcode.services.GiftcodesArray" S
getUserExpiredGiftcodes.user.services.User!.giftcode.services.GiftcodesArray" T
getUserCanceledGiftcodes.user.services.User!.giftcode.services.GiftcodesArray" T
getUserRedeemedGiftcodes.user.services.User!.giftcode.services.GiftcodesArray" O
getUserCreatedGiftcodesCount.user.services.User.giftcode.services.Count" O
getUserExpiredGiftcodesCount.user.services.User.giftcode.services.Count" P
getUserCanceledGiftcodesCount.user.services.User.giftcode.services.Count" P
getUserRedeemedGiftcodesCount.user.services.User.giftcode.services.Count" bproto3'
        , true);

        static::$is_initialized = true;
    }
}

