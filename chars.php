<?php

/**
 * @author Leandro Silva
 * @copyright 2017 Leandro Silva (http://grafluxe.com)
 * @license MIT
 *
 * List available characters in a set.
 *
 */

if (count($parts) == 1) {
  $out = "
SET
  $parts[0]

CHARACTERS
  ";

  foreach ($letters as $key => $val) {
    $out .= "$key ";
  }

    $out .= "

SAMPLES
  1) curl grafluxe.com/ascii/$parts[0]/hello
  2) curl grafluxe.com/ascii/$parts[0]/hello/newline
  3) curl \"grafluxe.com/ascii/$parts[0]/hello there\"
  ";

  echo "$out\n";

  close_tag();
  exit();
}

?>
