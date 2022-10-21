<?php

namespace VendorDave\SystemConfiguration1\Model\Config;

/**
 * Basado en Magento\Config\Model\Config\Source\Yesno;
 */
class SourceExample1 implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 2, 'label' => __('Correcto')],
            ['value' => 1, 'label' => __('Indefinido')],
            ['value' => 0, 'label' => __('Incorrecto')]
        ];
    }
    // /**
    //  * Get options in "key-value" format
    //  *
    //  * @return array
    //  */
    // public function toArray()
    // {
    //     return [0 => __('No'), 1 => __('Yes')];        
    // }
}
