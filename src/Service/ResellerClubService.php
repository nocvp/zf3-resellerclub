<?php
/**
 * Created by PhpStorm.
 * User: semihs
 * Date: 13.08.2016
 * Time: 11:08
 */

namespace ResellerClub\Service;

/**
 * Class ResellerClubService
 * @package ResellerClub\Service
 */
class ResellerClubService
{
    /**
     * @var array
     */
    private $options = array();

    /**
     * ResellerClubService constructor.
     * @param array $options
     */
    public function __construct($options = array())
    {
        $this->options = $options;

        $resellerClub = \afbora\ResellerClub\ResellerClub($options['user_id'], $options['api_key'], $options['test_mode']);
    }
}