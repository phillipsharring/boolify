# Boolify

A PHP Library to make something a boolean.

This will take a value and return either true or false.

## Usage

```lang=php
<?php

use Philsown\Boolify\Boolify;

// $someValue has been set previously
$bool = Boolify::cast($someValue);

// $bool is now a boolean

```

### True Values

* true
* "True"
* "true"
* 1
* "1"
* "Yes"
* "yes"
* "Y"
* "y"
* An integer greater than 0
* A non-empty array
* A non-empty object

### False Values

* false
* "False"
* "false"
* "F"
* "f"
* 0
* "0"
* "No"
* "no"
* "N"
* "n"
* Any integer less than 1
* An empty array
* An empty object
* Null
