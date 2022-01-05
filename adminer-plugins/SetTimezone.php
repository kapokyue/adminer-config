<?php

class SetTimezone
{
    protected $timezone;

    protected $done = false;

    function __construct($timezone)
    {
        $this->timezone = $timezone;
    }

    function dumpData()
    {
        $this->_setTimezone();
    }

    function fieldName()
    {
        $this->_setTimezone();
    }

    function sqlCommandQuery()
    {
        $this->_setTimezone();
    }

    function _setTimezone()
    {
        if ($this->done) {
            return;
        }

        $connection = connection();

        if ($connection instanceof Min_DB) {
            $connection->query("SET timezone = '{$this->timezone}'");

            $this->done = true;
        }
    }
}
