# Skill test for Wordpress Plugin Posttype

## GIT 
1. Fork this repository to any git account
2. Commit you progress every time you're compleating a task, don't forget to push and the end
3. Share the repository to job@paupenin.com and send the URL with the same email you sent CV

## Composer
1. Use Composer to install packages dependencies
```sh
composer install
```
2. You can use Composer to update autoload file
```sh
composer dump-autoload
```

## Install plugin
1. Install plugin on local Wordpress
2. Activate plugin, should work but don't show any custom PostType

## PHPUnit
1. Execute PHPUnit tests and change code on `PostType.php` to make tests on `LaptopTest.php` succed
```sh
composer test
```

## New Custom PostType
1. Create new `Phone.php` custom PostType with new name and [icon](https://developer.wordpress.org/resource/dashicons/#smartphone)
2. Register `Phone` PostType on `PluginLoader.php`
3. Create new `PhoneTest.php` on `tests/PostTypes` folder and implement tests similar to `LaptopTest.php`

## Monolog
1. Install [Monolog](https://github.com/Seldaek/monolog) via composer
2. Implement `Monolog` at `src/Log.php` to write log files on `log` folder
3. Update last two test on `tests/LogTest.php` using `assertFileExists` to check that log file is created
