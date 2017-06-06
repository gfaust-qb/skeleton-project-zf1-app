# skeleton-project-zf1-app
A skeleton for creating a new zend framework 1 project.

This file is the main file for documentation, other README.md files describe the content of their directory.

## Structure

* bin/
  * [README.md](bin/README.md)
* config/
  * [README.md](config/README.md)
* docs/
  * [README.md](docs/README.md)
* public/
  * [README.md](public/README.md)
* ressources/    
  * [README.md](ressources/README.md)  
* src/
  * application/
    * configs/
    * controllers/
    * models/
    * modules/
      * [README.md](src/application/modules/README.md)
    * views/
      * scripts/
        * error/
  * data/
    * import/
    * export/
  * logs/
  * public/
    * `index.php`
  * scripts/
  * vendor/
    * [README.md](src/vendor/README.md)
  * [README.md](src/README.md)
* tests/  
  * [README.md](tests/README.md)
* [CHANGELOG.md](CHANGELOG.md)
  * If the package provides a root-level file with a list of changes since the last release or version, it MUST be named CHANGELOG.
    
    It MAY have a lowercase filename extension indicating the file format.
    
    This publication does not otherwise define the structure and contents of the file.
* [CONTRIBUTING.md](CONTRIBUTING.md)    
* [composer.json]() 
  * require
    * [php-di/php-di](https://github.com/php-di/php-di)
    * [php-di/zf1-bridge](https://github.com/php-di/zf1-bridge)
    * [phpseclib/phpseclib](https://github.com/phpseclib/phpseclib)
  * require-dev:
    * [pds/skeleton](https://github.com/php-pds/skeleton)
    * [phpmd/phpmd](https://github.com/phpmd/phpmd)
    * [sebastian/phpcpd](https://github.com/sebastian/phpcpd)
    * [phing/phing](https://github.com/phing/phing)
    * [phpunit/phpunit](https://github.com/phpunit/phpunit)
    * [phpdocumentor/phpdocumentor](https://github.com/phpdocumentor/phpdocumentor)
    * [squizlabs/php_codesniffer](https://github.com/squizlabs/php_codesniffer)
* [README.md]() (this file)

### Other Directories
The package MAY contain other root-level directories for purposes not described by this publication.

This publication does not define the structure and contents of the other root-level directories.

### Other Files
The package MAY contain other root-level files for purposes not described in this publication.

This publication does not define the structure and contents of the other root-level files.
