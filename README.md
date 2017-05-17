# Text to ASCII

Via your favorite CLI, ping the below site to output your text in an ASCII art style.

```
curl grafluxe.com/ascii/basic/hello
```

```
::    ::  .:::::::  ::        ::         .::::.
::    ::  ::        ::        ::        ::    ::
::::::::  ::::::    ::        ::        ::    ::
::    ::  ::        ::        ::        ::    ::
::    ::  ':::::::  ::::::::  ::::::::   '::::'
```

or

```
curl grafluxe.com/ascii/fuzzy/mic%20%20/check/one%20%20
```

```
------------------------------------------------------------
- ## -- ## -- ######## --- ###### --------------------------
- ###  ### ----- ## ----- ## -- ## -------------------------
- ## ## ## ----- ## ----- ## -------------------------------
- ## -- ## ----- ## ----- ## -- ## -------------------------
- ## -- ## -- ######## --- ###### --------------------------
------------------------------------------------------------
------------------------------------------------------------
-- ###### --- ## -- ## -- ######## --- ###### --- ## -- ## -
- ## -- ## -- ## -- ## -- ## -------- ## -- ## -- ## - ## --
- ## -------- ######## -- ###### ---- ## -------- ###### ---
- ## -- ## -- ## -- ## -- ## -------- ## -- ## -- ## - ## --
-- ###### --- ## -- ## -- ######## --- ###### --- ## -- ## -
------------------------------------------------------------
------------------------------------------------------------
-  ######  -- ## -- ## -- ######## -------------------------
- ## -- ## -- ### - ## -- ## -------------------------------
- ## -- ## -- ## ## ## -- ###### ---------------------------
- ## -- ## -- ## - ### -- ## -------------------------------
-  ######  -- ## -- ## -- ######## -------------------------
------------------------------------------------------------
```

It's available via the browser too.

***

Visit `curl grafluxe.com/ascii/` for the below help page:

```
DEFINITIONS
  <set>   = Your selected character set.
  <words> = The words to output. Use slashes to create newlines.

USAGE
  curl grafluxe.com/ascii/<set>/<words>

SAMPLES
  1) curl grafluxe.com/ascii/basic/hello
  2) curl grafluxe.com/ascii/fuzzy/converts/text/to%20ascii

HELPERS
  To list available character sets, use: curl grafluxe.com/ascii/?show=sets
  To list available characters in a specific set, use: curl grafluxe.com/ascii/<set>

MORE
  See the README and/or add a new character set at https://github.com/Grafluxe/text-to-ascii
```

## Developer Note

The logic for `$parts` (in `index.php`) assumes this project will live nested inside *one* folder from your root directory. If on your server you plan to have it live nested inside multiple directories, update the `array_shift($parts)` line.

## License

Copyright (c) 2017 Leandro Silva (http://grafluxe.com)

Released under the MIT License.

See LICENSE.md for entire terms.
