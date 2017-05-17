<?php

/**
 * @author Leandro Silva
 * @copyright 2017 Leandro Silva (http://grafluxe.com)
 * @license MIT
 *
 * If browser.
 *
 */

$is_curl = (strpos($_SERVER["HTTP_USER_AGENT"], "curl") !== false ? true : false);

if (!$is_curl): ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo ucfirst($parts[0]); ?> character set</title>
  <meta name="Author" content="Leandro Silva">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Convert text in ASCII text.">
  <meta name="keywords" content="ascii, text to ascii, ascii fun">
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-size: 11px;
    }

    pre {
      white-space: pre-wrap;
    }
  </style>
</head>

<body>
  <pre>
<?php endif;

function browserify($str) {
  global $is_curl;

  if (!$is_curl) {
    return htmlspecialchars($str);
  } else {
    return $str;
  }
}

function close_tag() {
  global $is_curl;

  if (!$is_curl): ?>
  </pre>
</body>
</html>

<?php endif; }

?>
