<?php
/**
 * @file
 * FakeInterface.php
 */

namespace Radcliffe\Fake;

/**
 * FakeInterface
 */
interface FakeInterface {

  /**
   * Add data.
   */
  public function add(array $data);

  /**
   * Analyze some fake data.
   *
   * @return array
   *   An array of analysis data.
   */
  public function analyze();

  /**
   * Return the object data variable directly.
   *
   * @return array
   *   The array of fake data.
   */
  public function getData();
}
