<?php

namespace Kunstmaan\PagePartBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * class to define the form to upload a picture
 *
 */
class TextPagePartAdminType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('content', 'textarea', array( 'data_class' =>'Kunstmaan\PagePartBundle\Entity\TextPagePart', 'required' => false, 'attr' => array( 'class' => 'rich_editor' )))
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Kunstmaan\PagePartBundle\Entity\TextPagePart',
        );
    }

    public function getName()
    {
        return 'kunstmaan_pagepartbundle_textpageparttype';
    }
}

?>