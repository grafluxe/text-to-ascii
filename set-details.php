<?php

/**
 * @author Leandro Silva
 * @copyright 2017 Leandro Silva (http://grafluxe.com)
 * @license MIT
 *
 * List available characters in a set.
 *
 */

$author = $author ?: "-";
$description = $description ?: "-";
$set_name = ucfirst($parts[0]);

if (count($parts) == 1) {
  $out = "
SET
  $set_name

BY
  $author

DESCRIPTION
  $description

CHARACTERS
  ";

  foreach ($letters as $key => $val) {
    $out .= "$key ";
  }

    $out .= "

SAMPLES
  1) curl grafluxe.com/ascii/$parts[0]/hello
  2) curl grafluxe.com/ascii/$parts[0]/hello/newline
  3) curl grafluxe.com/ascii/$parts[0]/hello%20there
  ";

  echo "$out\n";

  close_tag();
  exit();
}

?>
