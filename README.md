# Text to ASCII

Via your favorite CLI, ping the below site to output your text in an ASCII art style.

```
curl grafluxe.com/o/ascii/basic/hello
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
curl grafluxe.com/o/ascii/fuzzy/mic%20%20/check/one%20%20
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

## Working With Special Characters

Note that some characters need to be URL encoded while others can simply be escaped.

```
Bad : curl grafluxe.com/o/ascii/basic/hi<
Good: curl grafluxe.com/o/ascii/basic/hi\<
```

```
Bad : curl grafluxe.com/o/ascii/basic/hi\[
Good: curl grafluxe.com/o/ascii/basic/hi%5B
```

Before using a character set, make sure that the characters you want to use are supported. See the *helper* routes below.

## Help

Visit `curl grafluxe.com/o/ascii/` for the below help page:

```
DEFINITIONS
  <set>   = Your selected character set.
  <words> = The words to output. Use slashes to create newlines.

USAGE
  curl grafluxe.com/o/ascii/<set>/<words>

SAMPLES
  1) curl grafluxe.com/o/ascii/basic/hello
  2) curl grafluxe.com/o/ascii/fuzzy/converts/text/to%20ascii

HELPERS
  To list available character sets, use: curl grafluxe.com/o/ascii/?show=sets
  To list available characters in a specific set, use: curl grafluxe.com/o/ascii/<set>

MORE
  See the README and/or add a new character set at https://github.com/Grafluxe/text-to-ascii
```

## Notes

- This project outputs ASCII art, therefore window size matters. Using a shell/browser window that is too thin will cause the text lines to break and thus become illegible.
- Check out `curl wttr.in` for really cool ASCII weather updates. Seeing that project inspired me to create this.

### Developer Note

- If you host this project on your server, adjust the `$distance_from_root` property at `index.php` to match the number of nested directories in which this project lives (e.g. if `./path/to/ascii`, set `$distance_from_root` to `3`).
- Feel free to send a PR with new character sets.

## License

Copyright (c) 2017 Leandro Silva (http://grafluxe.com)

Released under the MIT License.

See LICENSE.md for entire terms.
