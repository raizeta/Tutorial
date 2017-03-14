<?php

namespace EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use EntityBundle\Entity\Categories;
class ProductsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productName',TextType::class,array('label' => 'Product Name'))
            ->add('productSlug',TextType::class,array('label' => 'Product Slug'))
            ->add('categoryFk', EntityType::class,array('class' => Categories::class,'choice_label' => 'categoryName','label' => 'Category','placeholder' => 'Choose Category','empty_data'  => null,'required' => true))
            ->add('save', SubmitType::class, array('label' => 'Create Task'));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntityBundle\Entity\Products'
        ));
    }
}
