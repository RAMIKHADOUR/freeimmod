<?php

namespace App\Form;

use App\Entity\Propertys;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertysType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code')
            ->add('category')
            ->add('typeproperty')
            ->add('surface')
            ->add('description')
            ->add('prix')
            ->add('chambres')
            ->add('salle_bains')
            ->add('etages')
            ->add('numero_etage')
            ->add('adresse')
            ->add('ville')
            ->add('code_postale')
            ->add('region')
            ->add('internet')
            ->add('balcon')
            ->add('garage')
            ->add('salle_sport')
            ->add('piscine')
            ->add('camera_surveillance')
            ->add('user')
            ->add('imageFile',VichImageType::class)
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Propertys::class,
        ]);
    }
}
