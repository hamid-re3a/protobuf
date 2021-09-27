<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: payments.proto

namespace Payments\Services\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>payments.services.grpc.Invoice</code>
 */
class Invoice extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string payable_type = 1;</code>
     */
    protected $payable_type = '';
    /**
     * Generated from protobuf field <code>int64 payable_id = 2;</code>
     */
    protected $payable_id = 0;
    /**
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>double pf_amount = 4;</code>
     */
    protected $pf_amount = 0.0;
    /**
     * Generated from protobuf field <code>double amount = 5;</code>
     */
    protected $amount = 0.0;
    /**
     * Generated from protobuf field <code>string transaction_id = 6;</code>
     */
    protected $transaction_id = '';
    /**
     * Generated from protobuf field <code>string checkout_link = 7;</code>
     */
    protected $checkout_link = '';
    /**
     * Generated from protobuf field <code>string status = 8;</code>
     */
    protected $status = '';
    /**
     * Generated from protobuf field <code>string additional_status = 9;</code>
     */
    protected $additional_status = '';
    /**
     * Generated from protobuf field <code>double paid_amount = 10;</code>
     */
    protected $paid_amount = 0.0;
    /**
     * Generated from protobuf field <code>double due_amount = 11;</code>
     */
    protected $due_amount = 0.0;
    /**
     * Generated from protobuf field <code>bool is_paid = 12;</code>
     */
    protected $is_paid = false;
    /**
     * Generated from protobuf field <code>string expiration_time = 13;</code>
     */
    protected $expiration_time = '';
    /**
     * Generated from protobuf field <code>string payment_type = 14;</code>
     */
    protected $payment_type = '';
    /**
     * Generated from protobuf field <code>string payment_currency = 15;</code>
     */
    protected $payment_currency = '';
    /**
     * Generated from protobuf field <code>string payment_driver = 16;</code>
     */
    protected $payment_driver = '';
    /**
     * Generated from protobuf field <code>string deleted_at = 17;</code>
     */
    protected $deleted_at = '';
    /**
     * Generated from protobuf field <code>string created_at = 18;</code>
     */
    protected $created_at = '';
    /**
     * Generated from protobuf field <code>string updated_at = 19;</code>
     */
    protected $updated_at = '';
    /**
     * Generated from protobuf field <code>.user.services.grpc.User user = 20;</code>
     */
    protected $user = null;
    /**
     * Generated from protobuf field <code>double deposit_amount = 21;</code>
     */
    protected $deposit_amount = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payable_type
     *     @type int|string $payable_id
     *     @type int|string $user_id
     *     @type float $pf_amount
     *     @type float $amount
     *     @type string $transaction_id
     *     @type string $checkout_link
     *     @type string $status
     *     @type string $additional_status
     *     @type float $paid_amount
     *     @type float $due_amount
     *     @type bool $is_paid
     *     @type string $expiration_time
     *     @type string $payment_type
     *     @type string $payment_currency
     *     @type string $payment_driver
     *     @type string $deleted_at
     *     @type string $created_at
     *     @type string $updated_at
     *     @type \User\Services\Grpc\User $user
     *     @type float $deposit_amount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Payments::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string payable_type = 1;</code>
     * @return string
     */
    public function getPayableType()
    {
        return $this->payable_type;
    }

    /**
     * Generated from protobuf field <code>string payable_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPayableType($var)
    {
        GPBUtil::checkString($var, True);
        $this->payable_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 payable_id = 2;</code>
     * @return int|string
     */
    public function getPayableId()
    {
        return $this->payable_id;
    }

    /**
     * Generated from protobuf field <code>int64 payable_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPayableId($var)
    {
        GPBUtil::checkInt64($var);
        $this->payable_id = $var;

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
     * Generated from protobuf field <code>double pf_amount = 4;</code>
     * @return float
     */
    public function getPfAmount()
    {
        return $this->pf_amount;
    }

    /**
     * Generated from protobuf field <code>double pf_amount = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setPfAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->pf_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double amount = 5;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>double amount = 5;</code>
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
     * Generated from protobuf field <code>string transaction_id = 6;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string checkout_link = 7;</code>
     * @return string
     */
    public function getCheckoutLink()
    {
        return $this->checkout_link;
    }

    /**
     * Generated from protobuf field <code>string checkout_link = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCheckoutLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->checkout_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 8;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string additional_status = 9;</code>
     * @return string
     */
    public function getAdditionalStatus()
    {
        return $this->additional_status;
    }

    /**
     * Generated from protobuf field <code>string additional_status = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setAdditionalStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->additional_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double paid_amount = 10;</code>
     * @return float
     */
    public function getPaidAmount()
    {
        return $this->paid_amount;
    }

    /**
     * Generated from protobuf field <code>double paid_amount = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setPaidAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->paid_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double due_amount = 11;</code>
     * @return float
     */
    public function getDueAmount()
    {
        return $this->due_amount;
    }

    /**
     * Generated from protobuf field <code>double due_amount = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setDueAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->due_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_paid = 12;</code>
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->is_paid;
    }

    /**
     * Generated from protobuf field <code>bool is_paid = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPaid($var)
    {
        GPBUtil::checkBool($var);
        $this->is_paid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string expiration_time = 13;</code>
     * @return string
     */
    public function getExpirationTime()
    {
        return $this->expiration_time;
    }

    /**
     * Generated from protobuf field <code>string expiration_time = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payment_type = 14;</code>
     * @return string
     */
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * Generated from protobuf field <code>string payment_type = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payment_currency = 15;</code>
     * @return string
     */
    public function getPaymentCurrency()
    {
        return $this->payment_currency;
    }

    /**
     * Generated from protobuf field <code>string payment_currency = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_currency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payment_driver = 16;</code>
     * @return string
     */
    public function getPaymentDriver()
    {
        return $this->payment_driver;
    }

    /**
     * Generated from protobuf field <code>string payment_driver = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentDriver($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_driver = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string deleted_at = 17;</code>
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * Generated from protobuf field <code>string deleted_at = 17;</code>
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
     * Generated from protobuf field <code>string created_at = 18;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>string created_at = 18;</code>
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
     * Generated from protobuf field <code>string updated_at = 19;</code>
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 19;</code>
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
     * Generated from protobuf field <code>.user.services.grpc.User user = 20;</code>
     * @return \User\Services\Grpc\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Generated from protobuf field <code>.user.services.grpc.User user = 20;</code>
     * @param \User\Services\Grpc\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \User\Services\Grpc\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double deposit_amount = 21;</code>
     * @return float
     */
    public function getDepositAmount()
    {
        return $this->deposit_amount;
    }

    /**
     * Generated from protobuf field <code>double deposit_amount = 21;</code>
     * @param float $var
     * @return $this
     */
    public function setDepositAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->deposit_amount = $var;

        return $this;
    }

}

