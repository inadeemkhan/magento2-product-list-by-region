<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nadeem\RegionBasedProducts\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Psr\Log\LoggerInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\App\Action\Action;
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Helper DataHelper
 * @api
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @since 100.0.2
 */
class DataHelper extends AbstractHelper
{
    /**
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;
    /**
     * @var Curl
     */
    protected $_curl;
    /**
     * @var RemoteAddress
     */
    protected $remoteAddress;
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;
    
    /**
     * @param Context $context
     * @param LoggerInterface $logger
     * @param ObjectManagerInterface $objectManager
     * @param Curl $curl
     * @param RemoteAddress $remoteAddress
     * @param ScopeConfigInterface $scopeConfig
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        Context $context,
        LoggerInterface $logger, 
        ObjectManagerInterface $objectManager,
        Curl $curl,
        RemoteAddress $remoteAddress
    ) {
        $this->logger = $logger;
        $this->_curl = $curl;
        $this->objectManager = $objectManager;
        $this->remoteAddress = $remoteAddress;
        parent::__construct($context);
    }

    /**
     * Chech if module enable.
     * @return string
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue(
            "region_based_products/general/enable",
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Customer Region Name
     * @return string
     */
    public function getCustomerRegionName() 
    {
        $visitorRegionLocation = "";
        $isEnable = $this->isEnabled();
        if ($isEnable) {
            $visitorRegionLocation = $this->getVisitorLocation();
        } 

        // Sending detauils to the ListProduct.php file
        if (!empty($visitorRegionLocation)) {
            return $visitorRegionLocation;
        }
        return $visitorRegionLocation;
    }

    /**
     * Region Details
     * @return string
     */
    public function getVisitorLocation()
    {
        // Getting customer IP address
        $ipAddress = $this->remoteAddress->getRemoteAddress();

        // Getting All Address Details from IP Address.
        $VisitorAddressLocation = file_get_contents('https://www.iplocate.io/api/lookup/'.$ipAddress);
        $VisitorAddressLocation = json_decode($VisitorAddressLocation);
        return $VisitorAddressLocation->city;
    }
}
