<?php
/**
 * @file
 * Fake.php
 */

namespace Radcliffe\Fake;

use Radcliffe\Fake\FakeInterface;

/**
 * Fake class
 */
class Fake implements FakeInterface {

  protected $data;

  /**
   * __construct().
   */
  public function __construct(array $data) {
    $this->data = $data;
  }

  /**
   * Implements Fake\Fake\FakeInterface::add().
   */
  public function add(array $data) {
    try {
      $this->data = array_merge($this->data, $data);
    }
    catch (Exception $e) {
      throw $e;
    }
  }

  /**
   * Implements Fake\Fake\FakeInterface::analyze().
   */
  public function analyze() {
    return array(
      'cardinality' => count($this->data),
    );
  }

  /**
   * Implements Fake\Fake\FakeInterface::getData().
   */
  public function getData() {
    return $this->data;
  }

}
