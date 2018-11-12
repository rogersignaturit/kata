# SIGNATURIT

1. Download the repo

2. Execute `composer install`

3. Launch the Lawsuit with: `php bin/console lawsuit`

4. Test under `test` folder:

# TEST

1. Entity tests:
 ```
 php vendor/phpunit/phpunit/phpunit --no-configuration /home/roger/projects/test/signaturit/tests/Context/Module/Lawsuit/Domain/Entity --teamcity
 ```

2. Application test:
 ```
 php vendor/phpunit/phpunit/phpunit --no-configuration --no-configuration /home/roger/projects/test/signaturit/tests/Context/Module/Lawsuit/Application --teamcity
 ```
