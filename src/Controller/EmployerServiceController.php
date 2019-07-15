<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\EmployerType;
use App\Entity\Service;
use App\Entity\Employer;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use PhpParser\Node\NullableType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class EmployerServiceController extends AbstractController
{
    /**
     * @Route("/employer/service", name="employer_service")
     */
    public function index()
    {
        return $this->render('employer_service/index.html.twig', [
            'controller_name' => 'EmployerServiceController',
        ]);
    }


    /**
     * @Route("/", name="base")
     */
    public function base()
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'EmployerServiceController',
        ]);
    }

    /**
     * @Route("/employer/service/accueil",name="accueil")
     * @Route("/employer/service/{id}/edit",name="accueil_edit")
     */
    public function accueil(Employer $employer = null, Request $request, ObjectManager $manager)
    {
        if (!$employer) {
            $employer = new Employer();
        }
        $form = $this->createFormBuilder($employer)
            ->add('matricule')
            ->add('nom')
            ->add('dateNaiss', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ])
            ->add('salaire', MoneyType::class)
            ->add('idservice')
            ->add('idservice', EntityType::class, ['class' => Service::class, 'choice_label' => 'libelle'])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($employer);
            $manager->flush();
            $this->addFlash('success', 'Employer enregistrer avec succée');
            return $this->redirectToRoute('accueil', ['id' => $employer->getId()]);
        }

        return $this->render('employer_service/accueil.html.twig', [
            'formp' => $form->createView(),
            'editMode' => $employer->getId() !== Null

        ]);
    }


    /**
     * @Route("/employer/service/listeservice",name="listerservice")
     */
    public function listerservice()
    {
        $bdd = $this->getDoctrine()->getRepository(Service::class);

        $lister = $bdd->findAll();

        return $this->render('employer_service/liste.html.twig', [
            'controller_name' => 'EmployerServiceController', 'lister'  => $lister
        ]);
    }


    /**
     * @Route("/employer/service/listemployer",name="listemployer")
     */
    public function listeremployer()
    {
        $bdd = $this->getDoctrine()->getRepository(Employer::class);

        $listemployers = $bdd->findAll();

        return $this->render('employer_service/listemployer.html.twig', [
            'controller_name' => 'EmployerServiceController', 'listemployers' => $listemployers
        ]);
    }

    /**
     * @Route("/employer/service/{id}/delete",name="delete")
     */
    public function delete(Employer $employer, ObjectManager $manager)
    {
        // $manager=$this->getDoctrine()->getManager();
        $manager->remove($employer);
        $manager->flush();
        return $this->redirectToRoute('listemployer');
    }
}
