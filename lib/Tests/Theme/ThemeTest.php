<?php
/**
 * @file
 * ThemeTest.php
 */

use Fake\Theme\Theme;

/**
 * ThemeTest
 */
class ThemeTest extends PHPUnit_Framework_TestCase {

  public function testNoTabs() {
    $theme = new Theme();

    $this->assertEmpty($theme->tabs(0));
  }

}
