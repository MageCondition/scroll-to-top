<?php

declare(strict_types=1);

namespace MageCondition\ScrollToTop\ViewModel;

use MageCondition\ScrollToTop\Model\Config;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ScrollToTop implements ArgumentInterface
{
    public function __construct(protected Config $config, protected Json $json)
    {
    }

    /**
     * Get configuration for the scroll to top button
     */
    public function getConfigJson(): string
    {
        $config = [
            Config::ICON_COLOR => $this->config->getGeneralConfiguration(Config::ICON_COLOR),
            Config::BACKGROUND_COLOR => $this->config->getGeneralConfiguration(Config::BACKGROUND_COLOR),
            Config::POSITION => $this->config->getAdvancedConfiguration(Config::POSITION),
            Config::BUTTON_TYPE => $this->config->getAdvancedConfiguration(Config::BUTTON_TYPE),
            Config::BREAKPOINT => $this->config->getAdvancedConfiguration(Config::BREAKPOINT),
            Config::SIDE_MARGIN => $this->config->getAdvancedConfiguration(Config::SIDE_MARGIN) . 'px',
            Config::BOTTOM_MARGIN => $this->config->getAdvancedConfiguration(Config::BOTTOM_MARGIN) . 'px',
        ];

        return $this->json->serialize($config);
    }
}
