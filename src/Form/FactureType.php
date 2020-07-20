<?php

namespace App\Form;

use App\Entity\Facture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Num_fact',null,[])
            ->add('total')
            ->add('libelle')
            ->add('qte_fact')
            ->add('user')

            ->add('Apply',SubmitType::class, [
        'label' => 'Nom de button','attr'=> array('class'=>'btn btn btn-dark mx-auto')
         ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
        ]);
    }
}

