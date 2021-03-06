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

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class HomeControllerTest extends WebTestCase
{
    /**
     * @var KernelBrowser;
     */
    protected $client;

    public function setUp(): void
    {
        $this->client = static::createClient();
    }

    /**
     * @dataProvider getUrls
     */
    public function testUrls(string $url, string $method = 'GET', int $response1 = 0, int $response2 = 0): void
    {
        $response = 0 === $response1 ? Response::HTTP_MOVED_PERMANENTLY : $response1;
        $this->client->request($method, $url);

        $this->assertSame(
            $response,
            $this->client->getResponse()->getStatusCode(),
            sprintf('The %s URL redirect correctly.', $url)
        );

        $url .= '/';
        $response = 0 === $response2 ? $response : $response2;
        $this->client->request($method, $url);

        $this->assertSame(
            $response,
            $this->client->getResponse()->getStatusCode(),
            sprintf('The %s URL redirect correctly.', $url)
        );
    }

    /**
     * getUrls.
     *
     * @return \Traversable<array>
     */
    public function getUrls(): \Traversable
    {
        yield ['', 'GET', Response::HTTP_MOVED_PERMANENTLY];
        yield ['/user', 'GET', Response::HTTP_MOVED_PERMANENTLY, Response::HTTP_FOUND];
        yield ['/profile', 'GET', Response::HTTP_MOVED_PERMANENTLY];
    }
}
