<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallets.proto

namespace Wallets\Services\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wallets.services.grpc.Deposit</code>
 */
class Deposit extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string sub_type = 3;</code>
     */
    protected $sub_type = '';
    /**
     * Generated from protobuf field <code>double amount = 4;</code>
     */
    protected $amount = 0.0;
    /**
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>.wallets.services.grpc.WalletNames wallet_name = 6;</code>
     */
    protected $wallet_name = 0;
    /**
     * Generated from protobuf field <code>string service_name = 7;</code>
     */
    protected $service_name = '';
    /**
     * Generated from protobuf field <code>int64 payload_id = 8;</code>
     */
    protected $payload_id = 0;
    /**
     * Generated from protobuf field <code>bool confirmed = 9;</code>
     */
    protected $confirmed = false;
    /**
     * Generated from protobuf field <code>string transaction_id = 10;</code>
     */
    protected $transaction_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $user_id
     *     @type string $type
     *     @type string $sub_type
     *     @type float $amount
     *     @type string $description
     *     @type int $wallet_name
     *     @type string $service_name
     *     @type int|string $payload_id
     *     @type bool $confirmed
     *     @type string $transaction_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wallets::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
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
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sub_type = 3;</code>
     * @return string
     */
    public function getSubType()
    {
        return $this->sub_type;
    }

    /**
     * Generated from protobuf field <code>string sub_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSubType($var)
    {
        GPBUtil::checkString($var, True);
        $this->sub_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double amount = 4;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>double amount = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.wallets.services.grpc.WalletNames wallet_name = 6;</code>
     * @return int
     */
    public function getWalletName()
    {
        return $this->wallet_name;
    }

    /**
     * Generated from protobuf field <code>.wallets.services.grpc.WalletNames wallet_name = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setWalletName($var)
    {
        GPBUtil::checkEnum($var, \Wallets\Services\Grpc\WalletNames::class);
        $this->wallet_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string service_name = 7;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Generated from protobuf field <code>string service_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 payload_id = 8;</code>
     * @return int|string
     */
    public function getPayloadId()
    {
        return $this->payload_id;
    }

    /**
     * Generated from protobuf field <code>int64 payload_id = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPayloadId($var)
    {
        GPBUtil::checkInt64($var);
        $this->payload_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool confirmed = 9;</code>
     * @return bool
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Generated from protobuf field <code>bool confirmed = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setConfirmed($var)
    {
        GPBUtil::checkBool($var);
        $this->confirmed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 10;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction_id = $var;

        return $this;
    }

}

