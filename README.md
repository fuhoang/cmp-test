CMP test
======================

This is a test for CMP

Dependencies
------------

- Composer
- libyaml
- phpunit
- php 7.1



Usage
-----
Install the dependencies

	$ composer install


How to use the demo test
-----

    $ cd CMP-test

Run the script

    $ php index.php

You should see the following output

    Importing: science experiment goes wrong; Url: http://glorf.com/videos/3; Tags: microwave cats peanutbutter
	Importing: amazing dog can talk; Url: http://glorf.com/videos/4; Tags: dog amazing
	Importing: funny cats; Url: http://glorf.com/videos/asfds.com; Tags: cats, cute, funny
	Importing: more cats; Url: http://glorf.com/videos/asdfds.com; Tags: cats, ugly,funny
	Importing: lots of dogs; Url: http://glorf.com/videos/asasddfds.com; Tags: dogs, cute, funny
	Importing: bird dance; Url: http://glorf.com/videos/q34343.com; Tags:

Run the example unit test

    $ phpunit tests/ParserTest.php

You should see the following output

	PHPUnit 5.7.21 by Sebastian Bergmann and contributors.

	.                                                                 1 / 1 (100%)

	Time: 84 ms, Memory: 4.00MB

	OK (1 test, 6 assertions)


