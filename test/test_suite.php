<?php

require_once("test_helper.php");

class AllTests extends TestSuite {
  function AllTests() {
    $this->TestSuite("All Tests");
    $this->addFile("unit/test_user.php");
  }
}

?>
