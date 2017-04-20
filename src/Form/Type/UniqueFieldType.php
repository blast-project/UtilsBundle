<?php

namespace Blast\UtilsBundle\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
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
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'return_link'   => 'false',
        ]);
      
        $resolver->setDefined('return');
    }
    
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['return_link'] = $options['return_link'];
    }

}
