<?php
/**
 * Link.php
 *
 * @category    CLS
 * @package     DesignSwitcher
 * @copyright   Copyright (c) 2013 David Alger, Erik Hansen & Classy Llama Studios, LLC
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class CLS_DesignSwitcher_Block_Link extends Mage_Core_Block_Template
{
    /**
     * If this cookie is set, we know that the user clicked on the "View Full Site" link from a *mobile* device
     *
     * @return bool
     */
    public function isMobileVisitor()
    {
        return isset($_COOKIE[CLS_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE]) ? true : false;
    }
}