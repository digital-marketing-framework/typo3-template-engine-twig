<?php

namespace DigitalMarketingFramework\Typo3\TemplateEngineTwig\Registry\EventListener;

use DigitalMarketingFramework\TemplateEngineTwig\TemplateEngineTwigInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new TemplateEngineTwigInitialization('dmf_template_engine_twig'));
    }
}
