Apigility Welcome Screen
========================

[![Build Status](https://travis-ci.org/zfcampus/zf-apigility-welcome.svg?branch=master)](https://travis-ci.org/zfcampus/zf-apigility-welcome)
[![Coverage Status](https://coveralls.io/repos/github/zfcampus/zf-apigility-welcome/badge.svg?branch=master)](https://coveralls.io/github/zfcampus/zf-apigility-welcome?branch=master)

Welcome page for the web interface of the [Apigility](http://www.apigility.org) project.


Installation
------------

Run the following `composer` command:

```console
$ composer require zfcampus/zf-apigility-welcome
```

Alternately, manually add the following to your `composer.json`, in the `require` section:

```javascript
"require": {
    "zfcampus/zf-apigility-welcome": "^1.1"
}
```

And then run `composer update` to ensure the module is installed.

Finally, add the module name to your project's `config/application.config.php` under the `modules`
key:

```php
return [
    /* ... */
    'modules' => [
        /* ... */
        'ZF\Apigility\Welcome',
    ],
    /* ... */
];
```

> ### zf-component-installer
>
> If you use [zf-component-installer](https://github.com/zendframework/zf-component-installer),
> that plugin will install zf-apigility-welcome as a module for you.
