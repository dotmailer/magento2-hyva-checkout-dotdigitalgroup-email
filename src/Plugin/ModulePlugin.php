<?php

namespace Hyva\CheckoutDotdigitalgroupEmail\Plugin;

use Composer\InstalledVersions;
use Dotdigitalgroup\Email\Model\Connector\Module;

class ModulePlugin
{
    public const MODULE_DESCRIPTION = 'Hyvä Checkout Compatibility module for Dotdigitalgroup_Email';

    /**
     * Before fetch active module details
     *
     * @param Module $module
     * @param array $modules
     * @return array
     */
    public function beforeFetchActiveModules(Module $module, array $modules = [])
    {
        $modules[] = [
            'name' => self::MODULE_DESCRIPTION,
            'version' => InstalledVersions::getPrettyVersion('dotdigital/magento2-hyva-checkout-dotdigitalgroup-email')
        ];
        return [
            $modules
        ];
    }
}
