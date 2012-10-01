<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jsiciarek
 * Date: 01.10.12
 * Time: 22:35
 * To change this template use File | Settings | File Templates.
 */
class UserTest extends PHPUnit_Framework_TestCase
{
    public function testSetFirstName()
    {
        $first_name = "Jacek";
        $last_name = "Siciarek";

        $this->user->setFirstName($first_name);
        $this->assertEquals($first_name, $this->user->getFirstName());
    }

    public function testSetLastName()
    {
        $last_name = "Siciarek";

        $this->user->setLastName($last_name);
        $this->assertEquals($last_name, $this->user->getLastName());
    }

    public function setUp()
    {
        $this->user = new User();
    }
}
