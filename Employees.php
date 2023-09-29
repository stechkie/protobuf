<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: employees.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Employees</code>
 */
class Employees extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Employee employees = 1;</code>
     */
    private $employees;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Employee>|\Google\Protobuf\Internal\RepeatedField $employees
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Employees::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Employee employees = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Generated from protobuf field <code>repeated .Employee employees = 1;</code>
     * @param array<\Employee>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmployees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Employee::class);
        $this->employees = $arr;

        return $this;
    }

}

