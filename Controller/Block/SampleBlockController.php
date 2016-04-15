<?php

/*
 * This file is part of the SampleBlock
 *
 * Copyright (C) 2016 kurozumi
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\SampleBlock\Controller\Block;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class SampleBlockController
{

    /**
     * SampleBlock画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {
        return $app->render('SampleBlock/Resource/template/default/Block/sampleBlock.twig', array(
            // add parameter...
        ));
    }

}
