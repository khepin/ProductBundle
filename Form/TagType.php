<?php

namespace Khepin\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TagType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
        ;
    }

    public function getName()
    {
        return 'khepin_productbundle_tagtype';
    }
    
    public function getDefaultOptions(array $options){
        return array('data_class' => 'Khepin\ProductBundle\Entity\Tag');
    }
}
