<?php

declare(strict_types=1);

namespace MageCondition\ScrollToTop\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    private const XML_PATH_GENERAL = 'scroll_to_top/general/';
    private const XML_PATH_ADVANCED = 'scroll_to_top/advanced/';

    public const ENABLED = 'enabled';
    public const ICON_COLOR = 'icon_color';
    public const BACKGROUND_COLOR = 'background_color';
    public const POSITION = 'position';
    public const BUTTON_TYPE = 'button_type';
    public const BREAKPOINT = 'breakpoint';
    public const SIDE_MARGIN = 'side_margin';
    public const BOTTOM_MARGIN = 'bottom_margin';

    public function __construct(protected ScopeConfigInterface $scopeConfig)
    {
    }

    /**
     * Get general configuration
     */
    public function getGeneralConfiguration(string $field, int $storeId = null): string
    {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_GENERAL . $field,
            ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    /**
     * Get advanced configuration
     */
    public function getAdvancedConfiguration(string $field, int $storeId = null): string
    {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_ADVANCED . $field,
            ScopeInterface::SCOPE_STORE, $storeId
        );
    }
}
