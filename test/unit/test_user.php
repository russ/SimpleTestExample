<?php

require_once("test_helper.php");

class TestUser extends UnitTestCase {
  function testTrue() {
    $this->assertTrue(true);
  }

  function testFalse() {
    $this->assertFalse(false);
  }
}

?>
