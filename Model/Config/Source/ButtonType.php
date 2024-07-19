<?php

declare(strict_types=1);

namespace MageCondition\ScrollToTop\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class ButtonType implements OptionSourceInterface
{
    private const ROUND = 'round';
    private const SQUARE = 'square';

    /**
     * Return values for button type
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => self::ROUND,
                'label' => __('Round'),
            ],
            [
                'value' => self::SQUARE,
                'label' => __('Square'),
            ]
        ];
    }
}
