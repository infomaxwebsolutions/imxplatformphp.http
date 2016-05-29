imxplatformphp.http
==========================
This is pretty much a meta package to provide standard definitions for the <a href="http://www.php-fig.org/psr/psr-7/" target="_blank">PSR-7</a> implementation. Currenty,
<a href="https://github.com/zendframework/zend-diactoros" target="_blank">zendframework/zend-diactoros</a> is used as implementation. This doesn't really matter though,
as we always code to interfaces, not to actual implementations. ;)
#Installation
Easiest way is via composer:
```json
"require": {
  "codenamephp/platform.gitlib": "*"
}
```
Then add the DefinitionsProvider to the ContainerBuilder:
```php
$builder = new de\codenamephp\platform\di\ContainerBuilder();
...
$builder->addDefinitionsByProvider(new de\imxnet\imxplatformphp\http\DefinitionsProvider());
...
$container = $builder->build();
$container->get(\Psr\Http\Message\ServerRequestInterface::class);
```