<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jsiciarek
 * Date: 01.10.12
 * Time: 22:35
 * To change this template use File | Settings | File Templates.
 */
class User
{
    private $first_name;
    private $last_name;

    public function setFirstName($value) {
        $this->first_name = (string) $value;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setLastName($value) {
        $this->last_name = (string) $value;
    }

    public function getLastName() {
        return $this->first_name;
    }
}
