<?php
/**
 * @file
 * Theme.php
 */

namespace Theme;

/**
 * Theme class
 */
class Theme {

  static public function writeFromData(array $data) {
    $instance = new self;

    return $instance->write($data);
  }

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

  protected function tabs($depth = 0) {
    $o = '';
    for ($i = 0; $i < $depth; $i++) {
      $o .= "\t";
    }

    return $o;
  }

}
