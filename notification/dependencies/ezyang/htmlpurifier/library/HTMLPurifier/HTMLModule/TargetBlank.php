<?php

/**
 * Module adds the target=blank attribute transformation to a tags.  It
 * is enabled by HTML.TargetBlank
 *
 * @license LGPL-2.1-or-later
 * Modified by bracketspace on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */
class BracketSpace_Notification_Dependencies_HTMLPurifier_HTMLModule_TargetBlank extends BracketSpace_Notification_Dependencies_HTMLPurifier_HTMLModule
{
    /**
     * @type string
     */
    public $name = 'TargetBlank';

    /**
     * @param BracketSpace_Notification_Dependencies_HTMLPurifier_Config $config
     */
    public function setup($config)
    {
        $a = $this->addBlankElement('a');
        $a->attr_transform_post[] = new BracketSpace_Notification_Dependencies_HTMLPurifier_AttrTransform_TargetBlank();
    }
}

// vim: et sw=4 sts=4