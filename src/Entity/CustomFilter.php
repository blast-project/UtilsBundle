<?php

/*
 * This file is part of the Blast Project package.
 *
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU LGPL v3.
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Blast\UtilsBundle\Entity;

use Blast\BaseEntitiesBundle\Entity\Traits\BaseEntity;

/**
 * CustomFilter.
 */
class CustomFilter
{
    use BaseEntity;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $routeName;

    /**
     * @var string
     */
    private $routeParameters;

    /**
     * @var string
     */
    private $filterParameters;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set routeName.
     *
     * @param string $routeName
     *
     * @return CustomFilter
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;

        return $this;
    }

    /**
     * Get routeName.
     *
     * @return string
     */
    public function getRouteName()
    {
        return $this->routeName;
    }

    /**
     * Set routeParameters.
     *
     * @param string $routeParameters
     *
     * @return CustomFilter
     */
    public function setRouteParameters($routeParameters)
    {
        $this->routeParameters = $routeParameters;

        return $this;
    }

    /**
     * Get routeParameters.
     *
     * @return string
     */
    public function getRouteParameters()
    {
        return $this->routeParameters;
    }

    /**
     * Set filterParameters.
     *
     * @param string $filterParameters
     *
     * @return CustomFilter
     */
    public function setFilterParameters($filterParameters)
    {
        $this->filterParameters = $filterParameters;

        return $this;
    }

    /**
     * Get filterParameters.
     *
     * @return string
     */
    public function getFilterParameters()
    {
        return $this->filterParameters;
    }
}
