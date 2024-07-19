<?php

declare(strict_types=1);

namespace MageCondition\ScrollToTop\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Position implements OptionSourceInterface
{
    private const LEFT_BOTTOM = 'left';
    private const RIGHT_BOTTOM = 'right';

    /**
     * Return values for position
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => self::LEFT_BOTTOM,
                'label' => __('Left Bottom'),
            ],
            [
                'value' => self::RIGHT_BOTTOM,
                'label' => __('Right Bottom'),
            ]
        ];
    }
}
