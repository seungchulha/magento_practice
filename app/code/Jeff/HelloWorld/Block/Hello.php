<?php
/**
 *
 * @package     magento2
 * @author      Jeff Technologies
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.mage-practice.com/
 */

namespace Jeff\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getText() {
        return "Hello World";
    }
}
