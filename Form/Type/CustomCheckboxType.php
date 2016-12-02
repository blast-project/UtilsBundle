<?php

namespace Blast\UtilsBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Blast\CoreBundle\Form\AbstractType as BaseAbstractType;
use Blast\UtilsBundle\Form\DataTransformer\CheckboxTransformer;

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
