<?php

namespace ResellerClub;

use ResellerClub\Controller\Plugin\Factory\ResellerClubPluginFactory;
use ResellerClub\Controller\Plugin\ResellerClubPlugin;
use ResellerClub\Service\Factory\ResellerClubServiceFactory;
use ResellerClub\Service\ResellerClubService;

return [
    'zf3_reseller_club' => [
        'user_id' => '',
        'api_key' => '',
        'test_mode' => true,
    ],
    'service_manager' => [
        'aliases' => [
            'resellerClub' => ResellerClubService::class,
        ],
        'factories' => [
            ResellerClubService::class => ResellerClubServiceFactory::class,
        ],
    ],
    'controller_plugins' => [
        'aliases' => [
            'resellerClub' => ResellerClubPlugin::class,
        ],
        'factories' => [
            ResellerClubPlugin::class => ResellerClubPluginFactory::class,
        ],
    ],
];