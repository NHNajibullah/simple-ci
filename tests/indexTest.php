<?php

require_once('../index.php');

class indexTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testIndex()
  {
    $this->AssertContains('Hello World', 'Hello World');
  }
}