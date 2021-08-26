<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace User\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>user.services.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string first_name = 2;</code>
     */
    protected $first_name = '';
    /**
     * Generated from protobuf field <code>string last_name = 3;</code>
     */
    protected $last_name = '';
    /**
     * Generated from protobuf field <code>string username = 4;</code>
     */
    protected $username = '';
    /**
     * Generated from protobuf field <code>string email = 5;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string role = 6;</code>
     */
    protected $role = '';
    /**
     * Generated from protobuf field <code>int64 sponsor_id = 7;</code>
     */
    protected $sponsor_id = 0;
    /**
     * Generated from protobuf field <code>string block_type = 8;</code>
     */
    protected $block_type = '';
    /**
     * Generated from protobuf field <code>bool is_freeze = 9;</code>
     */
    protected $is_freeze = false;
    /**
     * Generated from protobuf field <code>bool is_deactivate = 10;</code>
     */
    protected $is_deactivate = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type string $first_name
     *     @type string $last_name
     *     @type string $username
     *     @type string $email
     *     @type string $role
     *     @type int|string $sponsor_id
     *     @type string $block_type
     *     @type bool $is_freeze
     *     @type bool $is_deactivate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\User::initOnce();
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
     * Generated from protobuf field <code>string first_name = 2;</code>
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Generated from protobuf field <code>string first_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_name = 3;</code>
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Generated from protobuf field <code>string last_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLastName($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 4;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 5;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string role = 6;</code>
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Generated from protobuf field <code>string role = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->role = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sponsor_id = 7;</code>
     * @return int|string
     */
    public function getSponsorId()
    {
        return $this->sponsor_id;
    }

    /**
     * Generated from protobuf field <code>int64 sponsor_id = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSponsorId($var)
    {
        GPBUtil::checkInt64($var);
        $this->sponsor_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string block_type = 8;</code>
     * @return string
     */
    public function getBlockType()
    {
        return $this->block_type;
    }

    /**
     * Generated from protobuf field <code>string block_type = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setBlockType($var)
    {
        GPBUtil::checkString($var, True);
        $this->block_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_freeze = 9;</code>
     * @return bool
     */
    public function getIsFreeze()
    {
        return $this->is_freeze;
    }

    /**
     * Generated from protobuf field <code>bool is_freeze = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFreeze($var)
    {
        GPBUtil::checkBool($var);
        $this->is_freeze = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_deactivate = 10;</code>
     * @return bool
     */
    public function getIsDeactivate()
    {
        return $this->is_deactivate;
    }

    /**
     * Generated from protobuf field <code>bool is_deactivate = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDeactivate($var)
    {
        GPBUtil::checkBool($var);
        $this->is_deactivate = $var;

        return $this;
    }

}
