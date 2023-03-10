<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallets.proto

namespace Wallets\Services\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wallets.services.grpc.Transfer</code>
 */
class Transfer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 from_user_id = 1;</code>
     */
    protected $from_user_id = 0;
    /**
     * Generated from protobuf field <code>int64 to_user_id = 2;</code>
     */
    protected $to_user_id = 0;
    /**
     * Generated from protobuf field <code>double amount = 3;</code>
     */
    protected $amount = 0.0;
    /**
     * Generated from protobuf field <code>string description = 4;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>.wallets.services.grpc.WalletNames from_wallet_name = 5;</code>
     */
    protected $from_wallet_name = 0;
    /**
     * Generated from protobuf field <code>.wallets.services.grpc.WalletNames to_wallet_name = 6;</code>
     */
    protected $to_wallet_name = 0;
    /**
     * Generated from protobuf field <code>string deposit_transaction_id = 7;</code>
     */
    protected $deposit_transaction_id = '';
    /**
     * Generated from protobuf field <code>string withdraw_transaction_id = 8;</code>
     */
    protected $withdraw_transaction_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $from_user_id
     *     @type int|string $to_user_id
     *     @type float $amount
     *     @type string $description
     *     @type int $from_wallet_name
     *     @type int $to_wallet_name
     *     @type string $deposit_transaction_id
     *     @type string $withdraw_transaction_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wallets::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 from_user_id = 1;</code>
     * @return int|string
     */
    public function getFromUserId()
    {
        return $this->from_user_id;
    }

    /**
     * Generated from protobuf field <code>int64 from_user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFromUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->from_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 to_user_id = 2;</code>
     * @return int|string
     */
    public function getToUserId()
    {
        return $this->to_user_id;
    }

    /**
     * Generated from protobuf field <code>int64 to_user_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setToUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->to_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double amount = 3;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>double amount = 3;</code>
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
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 4;</code>
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
     * Generated from protobuf field <code>.wallets.services.grpc.WalletNames from_wallet_name = 5;</code>
     * @return int
     */
    public function getFromWalletName()
    {
        return $this->from_wallet_name;
    }

    /**
     * Generated from protobuf field <code>.wallets.services.grpc.WalletNames from_wallet_name = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFromWalletName($var)
    {
        GPBUtil::checkEnum($var, \Wallets\Services\Grpc\WalletNames::class);
        $this->from_wallet_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.wallets.services.grpc.WalletNames to_wallet_name = 6;</code>
     * @return int
     */
    public function getToWalletName()
    {
        return $this->to_wallet_name;
    }

    /**
     * Generated from protobuf field <code>.wallets.services.grpc.WalletNames to_wallet_name = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setToWalletName($var)
    {
        GPBUtil::checkEnum($var, \Wallets\Services\Grpc\WalletNames::class);
        $this->to_wallet_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string deposit_transaction_id = 7;</code>
     * @return string
     */
    public function getDepositTransactionId()
    {
        return $this->deposit_transaction_id;
    }

    /**
     * Generated from protobuf field <code>string deposit_transaction_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDepositTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deposit_transaction_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string withdraw_transaction_id = 8;</code>
     * @return string
     */
    public function getWithdrawTransactionId()
    {
        return $this->withdraw_transaction_id;
    }

    /**
     * Generated from protobuf field <code>string withdraw_transaction_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setWithdrawTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->withdraw_transaction_id = $var;

        return $this;
    }

}

