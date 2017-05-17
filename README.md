# Text to ASCII

Ping the below site to output your text in ASCII text.

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
curl "grafluxe.com/ascii/fuzzy/hi my /friend"
```

```
------------------------------------------------------------------------
- ## -- ## -- ######## -------------- ## -- ## -- ## -- ## -------------
- ## -- ## ----- ## ----------------- ###  ### -- ## -- ## -------------
- ######## ----- ## ----------------- ## ## ## --- ####### -------------
- ## -- ## ----- ## ----------------- ## -- ## -------- ## -------------
- ## -- ## -- ######## -------------- ## -- ## -- ####### --------------
------------------------------------------------------------------------
------------------------------------------------------------------------
-- ####### --- ###### --- ######## -- ######## -- ## -- ## -- ####### --
- ## -------- ## -- ## ----- ## ----- ## -------- ### - ## -- ## -- ## -
- ###### ---- ####### ------ ## ----- ###### ---- ## ## ## -- ## -- ## -
- ## -------- ## - ## ------ ## ----- ## -------- ## - ### -- ## -- ## -
- ## -------- ## -- ## -- ######## -- ######## -- ## -- ## -- ####### --
------------------------------------------------------------------------
```

It's available via the browser too.

***

Visit `curl grafluxe.com/ascii/` for the below help page:

```
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
```

## License

Copyright (c) 2017 Leandro Silva (http://grafluxe.com)

Released under the MIT License.

See LICENSE.md for entire terms.
