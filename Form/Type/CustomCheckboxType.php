<?php

/*
 *
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Blast\Bundle\UtilsBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType as BaseAbstractType;
use Blast\Bundle\UtilsBundle\Form\DataTransformer\CheckboxTransformer;

class CustomCheckboxType extends BaseAbstractType
{
    public function getParent()
    {
        return 'checkbox';
    }

    public function getName()
    {
        return 'blast_custom_checkbox';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new CheckboxTransformer());
    }
}
