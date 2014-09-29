<?php

namespace Hypersites\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SupplierType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('fiscalDocument')
            ->add('address')
            ->add('email')
            ->add('telephones')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hypersites\StockBundle\Entity\Supplier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hypersites_stockbundle_supplier';
    }
}
