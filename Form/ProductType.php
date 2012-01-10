<?php

namespace Khepin\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
                ->add('tags', 'collection', array(
                    'type' => new TagType(), 
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                    ))
        ;
        
    }

    public function getName()
    {
        return 'khepin_productbundle_producttype';
    }
    
    public function getDefaultOptions(array $options){
        return array('data_class' => 'Khepin\ProductBundle\Entity\Product');
    }
    
}
