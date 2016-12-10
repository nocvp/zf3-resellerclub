Zf3 ResellerClub Query
============================
This module uses the [afbora/resellerclub-php-sdk](https://github.com/afbora/resellerclub-php-sdk "afbora/resellerclub-php-sdk Package")


Installation
------------
For the installation uses composer [composer](http://getcomposer.org "composer - package manager").
Add this project in your composer.json:


    "require": {
        "nocvp/zf3-resellerclub": "dev-master"
    }


Examples
=====================================
Default use of Zf3 ResellerClub
------------
```php
$resellerClubService = $container->get('resellerClub');
// Get Available TLDs
$resellerClubService->domains()->getTLDs();

// Check Domain Availablity
$resellerClubService->domains()->available(['google', 'example'], ['com', 'net']); // This will check google.com, google.net, example.com and example.net


or in your controller

$resellerClubPlugin = $this->resellerClub();
// Get Available TLDs
$resellerClubPlugin->domains()->getTLDs();

// Check Domain Availablity
$resellerClubPlugin->domains()->available(['google', 'example'], ['com', 'net']); // This will check google.com, google.net, example.com and example.net

```


Contributors
=====================================

Semih SARI - semih.sari@noc.com.tr