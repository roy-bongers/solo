<?php

/**
 * @author Aaron Francis <aaron@tryhardstudios.com>
 *
 * @link https://aaronfrancis.com
 * @link https://x.com/aarondfrancis
 */

namespace SoloTerm\Solo\Tests\Unit;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase;
use SoloTerm\Solo\Providers\SoloServiceProvider;
use SoloTerm\Solo\Tests\Support\SoloTestServiceProvider;

abstract class Base extends TestCase
{
    /**
     * Define environment setup.
     *
     * @param  Application  $app
     * @return void
     */
    protected function getEnvironmentSetup($app) {}

    protected function getPackageProviders($app)
    {
        return [
            SoloServiceProvider::class,
            SoloTestServiceProvider::class,
        ];
    }
}
