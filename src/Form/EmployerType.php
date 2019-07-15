<?php

namespace App\Form;

use App\Entity\Employer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Service;

class EmployerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule')
            ->add('nom')
            ->add('date_naiss')
            ->add('salaire')
            ->add('idservice')
            ->add('idservice', EntityType::class, ['class' => Service::class, 'choice_label' => 'libelle']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employer::class,
        ]);
    }
}
