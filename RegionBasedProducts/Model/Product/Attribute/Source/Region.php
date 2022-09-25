<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nadeem\RegionBasedProducts\Model\Product\Attribute\Source;

/**
 * Region
 * @api
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @since 100.0.2
 */
class Region extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        $this->_options = [
            ['value' => 'delhi', 'label' => __('Delhi')],
            ['value' => 'meerut', 'label' => __('Meerut')],
            ['value' => 'noida', 'label' => __('Noida')],
            ['value' => 'greater noida', 'label' => __('Greater Noida')],
            ['value' => 'gurgoan', 'label' => __(' Gurgoan')],
            ['value' => 'goa', 'label' => __('Goa')],
            ['value' => 'maharashtra', 'label' => __('Maharashtra')]
        ];
        return $this->_options;
    }
}

