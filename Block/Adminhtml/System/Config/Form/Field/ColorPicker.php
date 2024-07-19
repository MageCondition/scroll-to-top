<?php

declare(strict_types=1);

namespace MageCondition\ScrollToTop\Block\Adminhtml\System\Config\Form\Field;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Data\Form\Element\Text;

class ColorPicker extends Field
{
    public function __construct(
        protected Context $context,
        protected Text $text
    ) {
        parent::__construct($context);
    }

    /**
     * Add color picker to the field
     */
    public function _getElementHtml(
        AbstractElement $element
    ) {
        $input = $this->text;

        $input->setForm($element->getForm())
            ->setElement($element)
            ->setValue($element->getValue())
            ->setHtmlId($element->getHtmlId())
            ->setClass('magecondition-colpicker')
            ->setName($element->getName());

        return $input->getHtml();
    }
}
