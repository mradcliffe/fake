<?php
/**
 * @file
 * Run fake.
 */

$loader = require 'vendor/autoload.php';
$loader->register();

use Fake\Fake;
use Theme\Theme;

$fake = new Fake(array(1, 2, 3));

print Theme::writeFromData($fake->analyze()) . "\n";

print Theme::writeFromData($fake->getData()) . "\n";

$fake->add(array(4));

print Theme::writeFromData($fake->analyze()) . "\n";

