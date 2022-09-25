<?php
declare(strict_types=1);

namespace Nadeem\RegionBasedProducts\Model\Product\Attribute\Source;

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
        ['value' => ' meerut', 'label' => __(' Meerut')],
        ['value' => ' noida', 'label' => __(' Noida')],
        ['value' => ' greater noida', 'label' => __(' Greater Noida')],
        ['value' => ' gurgoan', 'label' => __(' Gurgoan')],
        ['value' => 'goa', 'label' => __('Goa')]
        ];
        return $this->_options;
    }
}

