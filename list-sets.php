<?php

/**
 * @author Leandro Silva
 * @copyright 2017 Leandro Silva (http://grafluxe.com)
 * @license MIT
 *
 * List available character sets.
 *
 */

if ($_SERVER["argv"][0] == "show=sets") {
  $dir = scandir("./sets");

  unset($dir[0], $dir[1]);

  $out = "\nSETS\n";

  foreach ($dir as $key) {
    $out .= "  " . rtrim($key, ".php") . "\n";
  }

  echo "$out\n";

  close_tag();
  exit();
}

?>
