<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace GPBMetadata;

class Orders
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\User::initOnce();
        \GPBMetadata\Packages::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
orders.protoorders.services.grpcpackages.proto"
Id

id ("�
Order

id (
user_id (

to_user_id (
total_cost_in_usd (
packages_cost_in_usd (
registration_fee_in_usd (

is_paid_at (	
is_resolved_at (	
is_refund_at	 (	
validity_in_days
 (!
is_commission_resolved_at (	
payment_type (	
payment_currency (	
payment_driver (	
plan (	

deleted_at (	

created_at (	

updated_at (	&
user (2.user.services.grpc.User)
to_user (2.user.services.grpc.User

package_id (0
package (2.packages.services.grpc.Package2�
OrdersServiceD
	OrderById.orders.services.grpc.Id.orders.services.grpc.Order" I
updateOrder.orders.services.grpc.Order.orders.services.grpc.Order" J
hasValidPackage.user.services.grpc.User.orders.services.grpc.Order" bproto3'
        , true);

        static::$is_initialized = true;
    }
}

