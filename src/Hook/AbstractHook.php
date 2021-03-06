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

namespace Blast\UtilsBundle\Hook;

abstract class AbstractHook
{
    const HOOK_NAME_DUMMY = 'blast.hook.dummy';
    /**
     * @var string
     */
    protected $hookName = self::HOOK_NAME_DUMMY;

    /**
     * @var string
     */
    protected $template;

    /**
     * @var array
     */
    protected $templateParameters = [];

    /**
     * handleParameters should handle $templateParameters. It will be called when
     * the block template will be rendered. Please override this method to set
     * the view parameters of your block.
     */
    abstract public function handleParameters($hookParameters);

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return array
     */
    public function getTemplateParameters()
    {
        return $this->templateParameters;
    }

    /**
     * @param array templateParameters
     *
     * @return self
     */
    public function setTemplateParameters(array $templateParameters)
    {
        $this->templateParameters = $templateParameters;

        return $this;
    }

    /**
     * @return string
     */
    public function getHookName()
    {
        return $this->hookName;
    }

    /**
     * @param string hookName
     *
     * @return self
     */
    public function setHookName($hookName)
    {
        $this->hookName = $hookName;

        return $this;
    }
}
