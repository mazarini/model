<?php

/*
 * Copyright (C) 2019 Mazarini <mazarini@protonmail.com>.
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
 * You should have received a copy of the GNU General Public License
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExampleRepository")
 */
class Example
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $col1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $col2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCol1(): ?string
    {
        return $this->col1;
    }

    public function setCol1(string $col1): self
    {
        $this->col1 = $col1;

        return $this;
    }

    public function getCol2(): ?string
    {
        return $this->col2;
    }

    public function setCol2(string $col2): self
    {
        $this->col2 = $col2;

        return $this;
    }
}
