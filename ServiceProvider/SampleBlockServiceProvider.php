<?php

/*
 * This file is part of the SampleBlock
 *
 * Copyright (C) 2016 kurozumi
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\SampleBlock\ServiceProvider;

use Eccube\Application;
use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossedHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Plugin\SampleBlock\Form\Type\SampleBlockConfigType;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;
use Symfony\Component\Yaml\Yaml;


class SampleBlockServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {
        // ブロック
        $app->match('/block/sample_block', '\Plugin\SampleBlock\Controller\Block\SampleBlockController::index')
            ->bind('block_sample_block');

    }

    public function boot(BaseApplication $app)
    {
    }
}
