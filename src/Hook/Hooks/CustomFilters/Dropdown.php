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

namespace Blast\UtilsBundle\Hook\Hooks\CustomFilters;

use Blast\UtilsBundle\Hook\Component\AbstractHook;

class Dropdown extends AbstractHook
{
    protected $hookName = 'admin.custom_filters.dropdown';
    protected $template = 'BlastUtilsBundle:Hook/CustomFilters:dropdown.html.twig';

    public function handleParameters($hookParameters)
    {
        $this->templateParameters = [
            'customFilters' => []
        ];
    }
}
