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

  public function getData();
}
