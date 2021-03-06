<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Foundation\Providers;

use AltThree\TestBench\ServiceProviderTrait;
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Integrations\Credits;
use CachetHQ\Cachet\Integrations\Releases;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the app service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class AppServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testDateFactoryIsInjectable()
    {
        $this->assertIsInjectable(DateFactory::class);
    }

    public function testCreditsIsInjectable()
    {
        $this->assertIsInjectable(Credits::class);
    }

    public function testReleasesIsInjectable()
    {
        $this->assertIsInjectable(Releases::class);
    }
}
