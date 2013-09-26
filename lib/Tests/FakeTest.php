<?php
/**
 * @file
 * FakeTest.php
 */

use Radcliffe\Fake\Fake;

/**
 * FakeTest
 */
class FakeTest extends PHPUnit_Framework_TestCase {

  public function testConstruct() {
    $test = new StdClass();

    try {
      $fake = new Fake();
    }
    catch (Exception $e) {
      $test = $e;
    }

    $this->assertInstanceOf('Exception', $test);
  }

  public function testEmpty() {
    $fake = new Fake(array());

    $this->assertEmpty($fake->getData());
  }

}
