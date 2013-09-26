<?php
/**
 * @file
 * ThemeTest.php
 */

use Radcliffe\Theme\Theme;

/**
 * ThemeTest
 */
class ThemeTest extends PHPUnit_Framework_TestCase {

  public function testNoTabs() {
    $theme = new Theme();

    $this->assertEmpty($theme->tabs(0));
  }

}
