<?php
declare(strict_types=1);
namespace Gene\NewrelicRumPageType\Test\Integration;

use Magento\Framework\Module\ModuleListInterface;
use Magento\TestFramework\Helper\Bootstrap;
use PHPUnit\Framework\TestCase;

class ModuleIsInstalledTest extends TestCase
{
    public function testModuleIsInstalled()
    {
        $moduleNames = Bootstrap::getObjectManager()->get(ModuleListInterface::class)->getNames();
        $this->assertContains('Gene_NewrelicRumPageType', $moduleNames);
    }
}
