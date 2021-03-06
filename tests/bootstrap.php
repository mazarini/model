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

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

if (\App\Kernel::isOlder(50100)) {
    $dotEnv = new Dotenv();
    $method = 'bootEnv';
} else {
    $dotEnv = new Dotenv(false);
    $method = 'loadEnv';
}
if (method_exists($dotEnv, $method)) {
    $dotEnv->$method(dirname(__DIR__).'/.env');
} else {
    throw new LogicException(sprintf('Unknow method "%s::%s" : env not initialized', get_class($dotEnv), $method));
}
