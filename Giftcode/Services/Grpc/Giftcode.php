<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: giftcodes.proto

namespace Giftcode\Services\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>giftcode.services.grpc.Giftcode</code>
 */
class Giftcode extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string uuid = 2;</code>
     */
    protected $uuid = '';
    /**
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>int64 package_id = 4;</code>
     */
    protected $package_id = 0;
    /**
     * Generated from protobuf field <code>double packages_cost_in_usd = 5;</code>
     */
    protected $packages_cost_in_usd = 0.0;
    /**
     * Generated from protobuf field <code>double registration_fee_in_usd = 6;</code>
     */
    protected $registration_fee_in_usd = 0.0;
    /**
     * Generated from protobuf field <code>double total_cost_in_usd = 7;</code>
     */
    protected $total_cost_in_usd = 0.0;
    /**
     * Generated from protobuf field <code>string code = 8;</code>
     */
    protected $code = '';
    /**
     * Generated from protobuf field <code>string expiration_date = 9;</code>
     */
    protected $expiration_date = '';
    /**
     * Generated from protobuf field <code>int64 redeem_user_id = 10;</code>
     */
    protected $redeem_user_id = 0;
    /**
     * Generated from protobuf field <code>string redeem_date = 11;</code>
     */
    protected $redeem_date = '';
    /**
     * Generated from protobuf field <code>bool is_canceled = 12;</code>
     */
    protected $is_canceled = false;
    /**
     * Generated from protobuf field <code>.user.services.grpc.User creator = 13;</code>
     */
    protected $creator = null;
    /**
     * Generated from protobuf field <code>.user.services.grpc.User redeemer = 14;</code>
     */
    protected $redeemer = null;
    /**
     * Generated from protobuf field <code>string deleted_at = 15;</code>
     */
    protected $deleted_at = '';
    /**
     * Generated from protobuf field <code>string created_at = 16;</code>
     */
    protected $created_at = '';
    /**
     * Generated from protobuf field <code>string updated_at = 17;</code>
     */
    protected $updated_at = '';
    /**
     * Generated from protobuf field <code>int64 order_id = 18;</code>
     */
    protected $order_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type string $uuid
     *     @type int|string $user_id
     *     @type int|string $package_id
     *     @type float $packages_cost_in_usd
     *     @type float $registration_fee_in_usd
     *     @type float $total_cost_in_usd
     *     @type string $code
     *     @type string $expiration_date
     *     @type int|string $redeem_user_id
     *     @type string $redeem_date
     *     @type bool $is_canceled
     *     @type \User\Services\Grpc\User $creator
     *     @type \User\Services\Grpc\User $redeemer
     *     @type string $deleted_at
     *     @type string $created_at
     *     @type string $updated_at
     *     @type int|string $order_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Giftcodes::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string uuid = 2;</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Generated from protobuf field <code>string uuid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uuid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 package_id = 4;</code>
     * @return int|string
     */
    public function getPackageId()
    {
        return $this->package_id;
    }

    /**
     * Generated from protobuf field <code>int64 package_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPackageId($var)
    {
        GPBUtil::checkInt64($var);
        $this->package_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double packages_cost_in_usd = 5;</code>
     * @return float
     */
    public function getPackagesCostInUsd()
    {
        return $this->packages_cost_in_usd;
    }

    /**
     * Generated from protobuf field <code>double packages_cost_in_usd = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setPackagesCostInUsd($var)
    {
        GPBUtil::checkDouble($var);
        $this->packages_cost_in_usd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double registration_fee_in_usd = 6;</code>
     * @return float
     */
    public function getRegistrationFeeInUsd()
    {
        return $this->registration_fee_in_usd;
    }

    /**
     * Generated from protobuf field <code>double registration_fee_in_usd = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setRegistrationFeeInUsd($var)
    {
        GPBUtil::checkDouble($var);
        $this->registration_fee_in_usd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double total_cost_in_usd = 7;</code>
     * @return float
     */
    public function getTotalCostInUsd()
    {
        return $this->total_cost_in_usd;
    }

    /**
     * Generated from protobuf field <code>double total_cost_in_usd = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setTotalCostInUsd($var)
    {
        GPBUtil::checkDouble($var);
        $this->total_cost_in_usd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string code = 8;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string expiration_date = 9;</code>
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    /**
     * Generated from protobuf field <code>string expiration_date = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setExpirationDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->expiration_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 redeem_user_id = 10;</code>
     * @return int|string
     */
    public function getRedeemUserId()
    {
        return $this->redeem_user_id;
    }

    /**
     * Generated from protobuf field <code>int64 redeem_user_id = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRedeemUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->redeem_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string redeem_date = 11;</code>
     * @return string
     */
    public function getRedeemDate()
    {
        return $this->redeem_date;
    }

    /**
     * Generated from protobuf field <code>string redeem_date = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setRedeemDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->redeem_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_canceled = 12;</code>
     * @return bool
     */
    public function getIsCanceled()
    {
        return $this->is_canceled;
    }

    /**
     * Generated from protobuf field <code>bool is_canceled = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsCanceled($var)
    {
        GPBUtil::checkBool($var);
        $this->is_canceled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.user.services.grpc.User creator = 13;</code>
     * @return \User\Services\Grpc\User|null
     */
    public function getCreator()
    {
        return $this->creator;
    }

    public function hasCreator()
    {
        return isset($this->creator);
    }

    public function clearCreator()
    {
        unset($this->creator);
    }

    /**
     * Generated from protobuf field <code>.user.services.grpc.User creator = 13;</code>
     * @param \User\Services\Grpc\User $var
     * @return $this
     */
    public function setCreator($var)
    {
        GPBUtil::checkMessage($var, \User\Services\Grpc\User::class);
        $this->creator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.user.services.grpc.User redeemer = 14;</code>
     * @return \User\Services\Grpc\User|null
     */
    public function getRedeemer()
    {
        return $this->redeemer;
    }

    public function hasRedeemer()
    {
        return isset($this->redeemer);
    }

    public function clearRedeemer()
    {
        unset($this->redeemer);
    }

    /**
     * Generated from protobuf field <code>.user.services.grpc.User redeemer = 14;</code>
     * @param \User\Services\Grpc\User $var
     * @return $this
     */
    public function setRedeemer($var)
    {
        GPBUtil::checkMessage($var, \User\Services\Grpc\User::class);
        $this->redeemer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string deleted_at = 15;</code>
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * Generated from protobuf field <code>string deleted_at = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setDeletedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->deleted_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_at = 16;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>string created_at = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 17;</code>
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 order_id = 18;</code>
     * @return int|string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Generated from protobuf field <code>int64 order_id = 18;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkInt64($var);
        $this->order_id = $var;

        return $this;
    }

}

