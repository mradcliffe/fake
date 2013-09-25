<?php
/**
 * @file
 * Theme.php
 */

namespace Radcliffe\Theme;

/**
 * Theme class
 */
class Theme {

  /**
   * Simple output without instantiating object first.
   *
   * @param $data
   *   An array of anything.
   * @return string
   *   A formatted string with tabs and new line characters.
   */
  static public function writeFromData(array $data) {
    $instance = new self;

    return $instance->write($data);
  }

  /**
   * Recursively write data array to a multi-lined string.
   *
   * Format rules:
   *
   *    - Each key/value pair will be separated by a colon and a space.
   *    - An array value will recurse and be printed on a new line with each
   *      key proceeded by a number of tab characters equal to the depth.
   *    - A new line character will be concatenated to the last string value
   *      in the current array.
   *
   * @param $data
   *   An array of anything.
   * @param $depth
   *   Optionally provide the current depth. This is used internally by this
   *   method only.
   * @return string
   *   A formatted string with tabs and new line characters. This format is a
   */
  public function write(array $data, $depth = 0) {
    $o = '';
    foreach ($data as $key => $value) {
      if (is_array($value)) {

        $o .= $this->tabs($depth);
        $depth++;
        $o .= $key . ": \n" . $this->tabs($depth);

        $o .= $this->write($value, $depth);
      }
      else {
        $o .= $key . ': ' . $value;
      }

      $o .= "\n";
    }

    return $o;
  }

  /**
   * Print a number of tab characters equal to depth.
   *
   * @param $depth
   *   An optional parameter. By default zero.
   * @return string
   *   Zero or more tab characters.
   */
  protected function tabs($depth = 0) {
    $o = '';
    for ($i = 0; $i < $depth; $i++) {
      $o .= "\t";
    }

    return $o;
  }

}
