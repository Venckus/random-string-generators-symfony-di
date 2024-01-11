# Mini project as example of creating random strings
## Prerequisites
Created using:
PHP 8.3.1
Symfony 6 components

## Installlation
1. Clone repository
2. run `composer install`

## Project features
### Generator
In this project one generator generates strings of pattern `a-zA-Z0-9`. Generator class have 2 methods `generateString` and `generateArray`. `generateArray` method returns simple stack of generated strings from `generateString`.

### Converters
In addition to generator there are 2 string converters: rot13, and `CharacterToIndexIntConverter`.
`CharacterToIndexIntConverter` replaces letters in string with `/` + index integer ('a' -> 1, 'b' -> 2, ... 'z' -> 26). Example: '9ab' -> '9/1/2'.

## Symfony components
Symfony 6 Dependency Injection and Config packages are used. `Conainer` is created in `./src/Project/Bootstrap.php` and values from `./config/services.yaml` are loaded using dependency injection.

# Usage
In `./public/index.php` the `./src/Project/Bootstrap.php` is used to get the container and Generator instance. In loop generators methods are randomly called and results pushed into `StringsCollection` and later random converter applied to those strings and printed out.

PHPUnit tests included.