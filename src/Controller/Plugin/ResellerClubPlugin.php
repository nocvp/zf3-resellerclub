<?php
/**
 * Created by PhpStorm.
 * User: semihs
 * Date: 10/12/2016
 * Time: 11:58
 */

namespace ResellerClub\Controller\Plugin;

use ResellerClub\Service\ResellerClubService;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class ResellerClubPlugin
 * @package ResellerClub\Controller\Plugin
 */
class ResellerClubPlugin extends AbstractPlugin
{
    /**
     * @var ResellerClubService
     */
    protected $reseller_club_service;

    /**
     * ResellerClubPlugin constructor.
     * @param ResellerClubService $resellerClubService
     */
    public function __construct(ResellerClubService $resellerClubService)
    {
        $this->reseller_club_service = $resellerClubService;
    }

    /**
     * @param $domain
     * @return string
     */
    public function __invoke($domain)
    {
        return $this->getResellerClubService();
    }

    /**
     * @return ResellerClubService
     */
    public function getResellerClubService()
    {
        return $this->reseller_club_service;
    }

    /**
     * @param ResellerClubService $reseller_club_service
     */
    public function setResellerClubService($reseller_club_service)
    {
        $this->reseller_club_service = $reseller_club_service;
    }
}