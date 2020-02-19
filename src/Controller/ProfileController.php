<?php

/*
 * Copyright (C) 2019-2020 Mazarini <mazarini@protonmail.com>.
 * This file is part of mazarini/model.
 *
 * mazarini/model is free software: you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version.
 *
 * mazarini/model is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License.
 */

namespace App\Controller;

use Mazarini\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/profile")
 */
class ProfileController extends BaseController
{
    /*
     public function __construct(RequestStack $requestStack, UrlGeneratorInterface $router)
     {
         parent::__construct($requestStack, $router);
         $this->twigFolder = '@MazariniUser/profile/';
     }
     */
}
