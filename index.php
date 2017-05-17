<?php

/**
 * @author Leandro Silva
 * @copyright 2017 Leandro Silva (http://grafluxe.com)
 * @license MIT
 *
 * Convert text into ascii characters.
 *
 */

$parts = explode("/", ltrim(urldecode($_SERVER["REQUEST_URI"]), "/"));
$parts_len = count($parts);
$set = $parts[0];
$fi = "./sets/$set.php";

include "./browser.php";
include "./sets.php";

if (! file_exists($fi)) {
  echo browserify("
DEFINITIONS
  <set>   = Your selected character set.
  <words> = The words to output. Use slash to create newlines.

USAGE
  curl grafluxe.com/ascii/<set>/<words>

SAMPLES
  1) curl grafluxe.com/ascii/basic/hello
  2) curl \"grafluxe.com/ascii/fuzzy/converts/text/to ascii\"

HELPERS
  To list available character sets, use: curl grafluxe.com/ascii/?show=sets
  To list available characters in a specific set, use: curl grafluxe.com/ascii/<set>

MORE
  See the README and/or add a new character set at https://github.com/Grafluxe/text-to-ascii

");

  close_tag();
  exit();
}

include $fi;
include "./chars.php";

function convert($str) {
  global $row_count, $row_to_start_from, $letters;

  $text = str_replace(array("\n", "\r", "\x"), "", strtolower($str));
  $text_len = strlen($text);
  $row_len = $row_count + $row_to_start_from;
  $line = "";

  //convert used characters to arrays
  for ($i = 0; $i < $text_len; $i++) {
    $let = $letters[$text[$i]];

    if (! is_array($let)) {
      $letters[$text[$i]] = explode("\n", $let);
    }
  }

  //output ascii text
  for ($i = $row_to_start_from; $i < $row_len; $i++) {
    for ($j = 0; $j < $text_len; $j++) {
      $chars = $letters[$text[$j]][$i];

      if ($chars) {
        $line .= $chars;
      } else {
        exit("You're using an unsupported character: " . substr($text, 0, $j) . "[?]\n");
      }
    }

    $line .= "\n";
  }

  return $line;
}

$out = "";

for ($i = 1; $i < $parts_len; $i++) {
  $out .= convert($parts[$i]);
}

echo $out;
close_tag();

?>
