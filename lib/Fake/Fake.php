<?php
/**
 * @file
 * Fake.php
 */

namespace Fake;

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
   * Implements Fake\FakeInterface::add().
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
   * Implements Fake\FakeInterface::analyze().
   */
  public function analyze() {
    return array(
      'cardinality' => count($this->data),
    );
  }

  /**
   * Implements Fake\FakeInterface::getData().
   */
  public function getData() {
    return $this->data;
  }

}
