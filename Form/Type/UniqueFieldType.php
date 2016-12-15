<?php

namespace Blast\UtilsBundle\Form\Type;

use Blast\CoreBundle\Form\AbstractType as BaseAbstractType;


class UniqueFieldType extends BaseAbstractType
{
    public function getParent()
    {
        return 'text';
    }

    public function getBlockPrefix(){

        return 'blast_unique_field';
    }

}
