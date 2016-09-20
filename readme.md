# PHPUnit
This is a repository to share what was done during a three day training from Sebastian Bergamann (yes, the author of PHPUnit)

## Topics
- PHPUnit installed as a tool of this project (v5.5.4)

## What was used to build this

- Generating phpunit.xml that will be used in runtime as a configuration file

```
./tools/phpunit --generate-configuration
```

- phpab was used to create the class map/autoload file

```
phpab -o src/autoload.php src
```
 

## Installation
```
git clone  https://github.com/ajaaleixo/phpunit-training.git
```

## Running Tests
```
./tools/phpunit

PHPUnit 5.5.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 5.6.18 with Xdebug 2.3.3
Configuration: /Users/andreja/row/phpunit/phpunit.xml

.........                                                           9 / 9 (100%)

Time: 109 ms, Memory: 13.50MB

OK (9 tests, 9 assertions)

```