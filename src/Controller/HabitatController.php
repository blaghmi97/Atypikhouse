<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Entity\Photo;
use App\Form\HabitatType;
use App\Entity\Message;
use DateTime;
use App\Repository\HabitatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Habitat controller.
 *
 * @Route("habitat")
 */
class HabitatController extends Controller
{

 



    /**
     * Lists all habitat entities.
     *
     * @Route("/", name="habitat_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $habitats = $em->getRepository(Habitat::class)->findAll(
        );

        $paginator=$this->get('knp_paginator');
        $paginationannonce=$paginator->paginate(
         $habitats,
        $request->query->getInt('page',1),
        7
        );
        return $this->render('default/index.html.twig', [
            'habitats' => $paginationannonce,]
        );
    }


    /**
     * Creates a new habitat entity.
     *
     * @Route("/new", name="habitat_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $habitat = new Habitat();
        $form = $this->createForm('App\Form\HabitatType', $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $images = $form->get('photos')->getData();
         if($images){
            foreach($images as $image){
                
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                
                $image->move(
                    $this->getParameter('images_directory'),$fichier);

                
                $img = new Photo();
                $img->setSrc($fichier);
                $habitat->addPhoto($img);
            }}
            $habitat->setUser($this->getUser());
      
            $em = $this->getDoctrine()->getManager();
          
            $em->persist($habitat);
            $em->flush();

            return $this->redirectToRoute('habitat_show', array('id' => $habitat->getId()));
        }

        return $this->render('habitat/new.html.twig', array(
            'habitat' => $habitat,
            'form' => $form->createView(),
        ));
    }


    /**
     * Finds and displays a habitat entity.
     *
     * @Route("/{id}", name="habitat_show")
     * @Method("GET")
     */
    public function showAction(Habitat $habitat)
    {
        $deleteForm = $this->createDeleteForm($habitat);

        return $this->render('habitat/show.html.twig', array(
            'habitat' => $habitat,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to edit an existing habitat entity.
     *
     * @Route("/{id}/edit", name="habitat_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Habitat $habitat)
    {
        $deleteForm = $this->createDeleteForm($habitat);
        $editForm = $this->createForm('App\Form\HabitatType', $habitat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $images = $editForm->get('photos')->getData();
            if($images){
               foreach($images as $image){
                   
                   $fichier = md5(uniqid()) . '.' . $image->guessExtension();
   
                   
                   $image->move(
                       $this->getParameter('images_directory'),$fichier);
   
                   
                   $img = new Photo();
                   $img->setSrc($fichier);
                   $habitat->addPhoto($img);
               }}

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('habitat_edit', array('id' => $habitat->getId()));
        }

        return $this->render('habitat/edit.html.twig', array(
            'habitat' => $habitat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a habitat entity.
     *
     * @Route("/{id}/delete", name="habitat_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Habitat $habitat)
    {
        $form = $this->createDeleteForm($habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($habitat);
            $em->flush();
        }

        return $this->redirectToRoute('habitat_index');
    }

    /**
     * Creates a form to delete a habitat entity.
     *
     * @param Habitat $habitat The habitat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Habitat $habitat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('habitat_delete', array('id' => $habitat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }



}
