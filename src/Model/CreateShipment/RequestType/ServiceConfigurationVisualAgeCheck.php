<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\Paket\Bcs\Model\CreateShipment\RequestType;

/**
 * ServiceConfigurationShipmentHandling
 *
 * @package Dhl\Sdk\Paket\Bcs\Model\CreateShipment
 * @author  Rico Sonntag <rico.sonntag@netresearch.de>
 * @license https://choosealicense.com/licenses/mit/ The MIT License
 * @link    https://www.netresearch.de/
 */
class ServiceConfigurationVisualAgeCheck
{
    /**
     * Indicates, if the option is on/off.
     *
     * @var int $active "0" or "1"
     */
    protected $active;

    /**
     * Service VisualCheckOfAge is used to specify the minimum age of the recipient. Allowed values:
     * - A16
     * - A18
     *
     * @var string $type
     */
    protected $type;

    /**
     * @param bool $active
     * @param string $type
     */
    public function __construct(bool $active, string $type)
    {
        $this->active = intval($active);
        $this->type = $type;
    }
}
