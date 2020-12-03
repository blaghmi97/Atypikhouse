<?php

namespace AppBundle\Controller;
use ClasseBundle\Entity\Reservation;
use ClasseBundle\Entity\Habitat;
use ClasseBundle\Form\HabitatType;
use ClasseBundle\Form\recherchehabitatType;
use ClasseBundle\Entity\Prisedevue;
use ClasseBundle\Form\PrisedevueType;
use ClasseBundle\Entity\Commentaire;
use ClasseBundle\Form\CommentaireType;
use ClasseBundle\Repository\HabitatRepository;
use ClasseBundle\Entity\Photo;
use ClasseBundle\Entity\Photo2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $habitats = $em->getRepository('ClasseBundle:Habitat')->findBy(
           [] ,
           ["datePub"=>"desc"],
           3,
           0);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'habitats' => $habitats,
        ]);
    }
 /**
     * @Route("/users", name="users")
     */
    public function usersAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAll();
           $paginator=$this->get('knp_paginator');
           $paginatiousers=$paginator->paginate(
           $users,
           $request->query->getInt('page',1),
           6
           );

        // replace this example code with whatever you need
        return $this->render('default/users.html.twig', [
            'users' => $paginatiousers,
        ]);
    }


    /**
     * @Route("/annonces", name="Annonces")
     */
    public function AnnoncesAction(Request $request)
    {
        $form = $this->createForm('ClasseBundle\Form\recherchehabitatType');
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        $habitats = $em->getRepository('ClasseBundle:Habitat')->findBy(
           [] ,
           ["datePub"=>"desc"],
           null,
           0);
           $paginator=$this->get('knp_paginator');
           $paginationannonce=$paginator->paginate(
           $habitats,
           $request->query->getInt('page',1),
           6
           );
           if ($form->isSubmitted() && $form->isValid()) {
            
            $critere = $form->getData();
            $titre = $critere['type'];

            if($critere['type']=="all" && $critere['pays']== null){

                $habitats = $em->getRepository('ClasseBundle:Habitat')->findBy(
                    [] ,
                    ["datePub"=>"desc"],
                    null,
                    0);
            }else if($critere['type']=="all" && $critere['pays'] != null){
                $habitats = $em->getRepository('ClasseBundle:Habitat')->findBy(
                    ["pays" => $critere['pays']] ,
                    ["datePub"=>"desc"],
                    null,
                    0);

            }else if($critere['type'] !="all" && $critere['pays'] == null){
                $habitats = $em->getRepository('ClasseBundle:Habitat')->findBy(
                    ["type" => $critere['type']] ,
                    ["datePub"=>"desc"],
                    null,
                    0);

            }else{
                $habitats = $em->getRepository('ClasseBundle:Habitat')->findBy(
                    ["type" => $critere['type'],"pays" => $critere['pays']] ,
                    ["datePub"=>"desc"],
                    null,
                    0);

            }

            $paginator=$this->get('knp_paginator');
           $paginationannonce=$paginator->paginate(
           $habitats,
           $request->query->getInt('page',1),
           6
           );
           return $this->render('default/annonces.html.twig', [
            'habitats' => $paginationannonce,
            'form' => $form->createView(),
        ]);
 
           
         }

        // replace this example code with whatever you need
        return $this->render('default/annonces.html.twig', [
            'habitats' => $paginationannonce,
            'form' => $form->createView(),
        ]);
    }

 /**
     *
     *
     * @Route("/annonces/{id}", name="annonces_show")
     * 
     */
    public function afficherAction(Habitat $habitat,$id)
    
    {  
        $deleteForm = $this->createDeleteForm($habitat);
        $em = $this->getDoctrine()->getManager();
     
        $habitat = $em->getRepository('ClasseBundle:Habitat')->find($id);
        $reservations = $em->getRepository('ClasseBundle:Reservation')->findBy(["habitat" => $habitat]);
        $commentaires = $em->getRepository('ClasseBundle:Commentaire')->findBy(["reservation" => $reservations],["dateCommentaire" => "DESC"]);
        
        return $this->render('default/Afficher.html.twig', array(
            'commentaires' => $commentaires,
            'habitat' => $habitat,
            'delete_form' => $deleteForm->createView(),
           
        ));
    }


    /**
     *
     *
     * @Route("/mesreservations/{id}", name="reservation_show")
     * 
     */
    public function afficherreservationAction(Reservation $reservation,$id)
    
    {  $deleteForm = $this->createDeleteFormr($reservation);
        $em = $this->getDoctrine()->getManager();

        $reservation = $em->getRepository('ClasseBundle:Reservation')->find($id);
          if($reservation->getUser() == $this->getUser()){
        return $this->render('default/reservation2.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));}else{
            return $this->redirectToRoute('mesreservations');
        }
    }
     /**
     * @Route("/mesannonces", name="mesannonces")
     */
    public function mesannoncesAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
            $user= $this->getUser() ;
        $habitats = $em->getRepository('ClasseBundle:Habitat')->findBy(
           ["user"=> $user ] ,
           ["datePub"=>"desc"],
           null,
           0);
           $paginator=$this->get('knp_paginator');
           $paginationannonce=$paginator->paginate(
           $habitats,
           $request->query->getInt('page',1),
           9
           );

        // replace this example code with whatever you need
        return $this->render('default/mesannonces.html.twig', [
            'habitats' => $paginationannonce,
        ]);
    }

      /**
     * @Route("/mesreservations", name="mesreservations")
     */
    public function mesreservationsAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
            $user= $this->getUser() ;
        $reservations = $em->getRepository('ClasseBundle:Reservation')->findBy(
           ["user"=> $user ] ,
           ["dateReservation"=>"desc"],
           null,
           0);
           $paginator=$this->get('knp_paginator');
           $paginationannonce=$paginator->paginate(
            $reservations,
           $request->query->getInt('page',1),
           9
           );

        // replace this example code with whatever you need
        return $this->render('default/mesreservations.html.twig', [
            'reservations' => $paginationannonce,
          

        ]);
    }


   /**
     *
     *
     * @Route("/admin/", name="adminpage")
     * 
     */
    public function adminAction()
    {

        return $this->render('default/admin.html.twig');
    }

    /**
     * 
     *
     * @Route("/AddHabitat", name="habitat_Add")
     * 
     */
    public function addAction(Request $request)
    {
        $habitat = new Habitat();
        $form = $this->createForm('ClasseBundle\Form\HabitatType', $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $images= $form["photos"]["Src"]->getData();
            
         if($images){
            foreach($images as $image){
               
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                if($image->guessExtension() == "jpeg" || $image->guessExtension() =="gif" || $image->guessExtension() == "png"){
                $image->move(
                    $this->getParameter('images_directory'),$fichier);

                
                $img = new Photo();
                $img->setSrc($fichier);
                $habitat->addPhoto($img);}
            }}
            $habitat->setUser($this->getUser());
      
            $em = $this->getDoctrine()->getManager();
          
            $em->persist($habitat);
            $em->flush();

            return $this->redirectToRoute('mesannonces');
        }

        return $this->render('default/AddAnnonce.html.twig', array(
            'habitat' => $habitat,
            'form' => $form->createView(),
        ));
    }

    
 /**
     * Displays a form to edit an existing habitat entity.
     *
     * @Route("mesannonces/{id}/edit", name="editannonce")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Habitat $habitat)
    {
        $deleteForm = $this->createDeleteForm($habitat);
        $editForm = $this->createForm('ClasseBundle\Form\HabitatType', $habitat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
           
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mesannonces', array('id' => $habitat->getId()));
        }
        if($habitat->getUser() == $this->getUser() || $this->getUser()->getRoles[0]="ROLE_ADMIN"){
        return $this->render('Default/editerannonce.html.twig', array(
            'habitat' => $habitat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));}
        else{
            return $this->redirectToRoute('annonces');
        }
    }


   /**
     * @Route("/annonces/{id}/reserve", name="reserver")
     */
    public function reservationAction(Request $request,$id)
    {
        $reservation = new Reservation();
        $form = $this->createForm('ClasseBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        
        $habit = $em->getRepository('ClasseBundle:Habitat')->find($id);
        $events = $em->getRepository('ClasseBundle:Reservation')->findBy(["habitat"=> $habit ]);
        
            $rdvs=[];

            foreach($events as $event){
                  $rdvs[] = [
                      'id'=> $event->getId(),
                      'start'=> $event->getDateDebut()->format('Y-m-d'),
                      'end'=> date("Y-m-d", strtotime($event->getDateFin()->format('Y-m-d').'+ 1 days')),
                      'display'=> 'background',
                      'backgroundColor' => "#ff0000",
                      
                  ]; }
                  
            $data=json_encode($rdvs);
             

            foreach($events as $habitat){
                    if(($reservation->getDateDebut() >  $habitat->getDateDebut() && $reservation->getDateDebut() <= $habitat->getDateFin())
                    || ($reservation->getDateFin() >= $habitat->getDateDebut() && $reservation->getDateFin() < $habitat->getDateFin()) || $reservation->getDateDebut() > $reservation->getDateFin()){
                          
                        return $this->render('default/reservation.html.twig', array(
                            'data' => $data,
                            'reservation' => $reservation,
                            'form' => $form->createView()));
                     }
    
                }

            if ($form->isSubmitted() ) {
               
 
            $reservation->setUser($this->getUser());
            
         $nb=$reservation->getDateDebut()->diff($reservation->getDateFin())->format('%d')+1;
           
            $reservation->setNombreNuit($nb);
            $em = $this->getDoctrine()->getManager();
     
            $reservation->setHabitat($habit);
            $reservation->setPrixTotal($nb * $reservation->getHabitat()->getPrix());
            $em->persist($reservation);
            $em->flush();
           
            return $this->redirectToRoute('reservation_show', array('id' => $reservation->getId()));
        }
        // replace this example code with whatever you need

        return $this->render('default/reservation.html.twig', array(
            'data' => $data,
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }


    /**
     * Deletes a habitat entity.
     *
     * @Route("/annonces/{id}/delete", name="supprimerhabitat")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Habitat $habitat)
    {
        $form = $this->createDeleteForm($habitat);
        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
               if($habitat->getUser() == $this->getUser() || $this->getUser()->getRoles[0]="ROLE_ADMIN"){
                    $em->remove($habitat);
                    $em->flush(); 
                    return $this->redirectToRoute('mesannonces');
               } 
          
        }

        return $this->redirectToRoute('Annonces');
    }
    /**
     * Deletes a reservation entity.
     *
     * @Route("mesreservations/{id}/delete", name="supprimerreservation")
     * @Method("DELETE")
     */
    public function deletereservationAction(Request $request, Reservation $reservation)
    {
        $form = $this->createDeleteFormr($reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($reservation->getUser() == $this->getUser() ){
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
            return $this->redirectToRoute('mesreservations');
        }
        }

        return $this->redirectToRoute('mesreservations');
    }

/**
     * Creates a new commentaire entity.
     *
     * @Route("mesreservations/{id}/commenter", name="commenter")
     * @Method({"GET", "POST"})
     */
    public function newcommentaireAction(Request $request,$id)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm('ClasseBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        
        $reservation = $em->getRepository('ClasseBundle:Reservation')->find($id);
        $habitat=$reservation->getHabitat();
        if ($reservation->getUser() == $this->getUser()){
        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setUser($this->getUser());
            $commentaire->setReservation($reservation);
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('annonces_show',array('id' => $habitat->getId()));
        }

        return $this->render('Default/Commenter.html.twig', array(
            'habitat' => $habitat,
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));}else{
            return $this->redirectToRoute('mesreservations');
        }
    }

        /**
     * Creates a new prisedevue entity.
     *
     * @Route("mesreservations/{id}/prisedevue", name="newprisedevue")
     * @Method({"GET", "POST"})
     */
    public function newprisedevueAction(Request $request,$id)
    {
        $prisedevue = new Prisedevue();
        $form = $this->createForm('ClasseBundle\Form\PrisedevueType', $prisedevue);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('ClasseBundle:Reservation')->find($id);
        $habitat=$reservation->getHabitat();
        if ($reservation->getUser() == $this->getUser()){
        if ($form->isSubmitted() && $form->isValid()) {
            $images= $form["photos2"]["source"]->getData();
            if($images){
               foreach($images as $image){
                   
                   $fichier = md5(uniqid()) . '.' . $image->guessExtension();
   
                   if($image->guessExtension() == "jpeg" || $image->guessExtension() =="gif" || $image->guessExtension() == "png"){
                   $image->move(
                       $this->getParameter('images_directory'),$fichier);
   
                   
                   $img = new Photo2();
                   $img->setSource($fichier);
                   $prisedevue->addPhotos2($img);}
               }}

            $prisedevue->setUser($this->getUser());
            $prisedevue->setReservation($reservation);
            $em = $this->getDoctrine()->getManager();
            $em->persist($prisedevue);
            $em->flush();

            return $this->redirectToRoute('listeprises');
        }}

        return $this->render('Default/prisedevue.html.twig', array(
            'habitat' => $habitat,
            'prisedevue' => $prisedevue,
            'form' => $form->createView(),
        ));
    }



    /**
     * @Route("/prisesdevue", name="listeprises")
     */
    public function listeprisesAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $prises = $em->getRepository('ClasseBundle:Prisedevue')->findBy(
            [],
            ["dateprise" => "desc"],
            null,
            0);

        // replace this example code with whatever you need
        return $this->render('default/listeprisedevue.html.twig', [
            'prises' => $prises,
        ]);
    }

        /**
     * @Route("/mesprisesdevue", name="mesprises")
     */
    public function malisteprisesAction(Request $request)
    {

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $prises = $em->getRepository('ClasseBundle:Prisedevue')->findBy(
            ["user" => $user],
            ["dateprise" => "desc"],
            null,
            0
           );

        // replace this example code with whatever you need
        return $this->render('default/mesprisedevue.html.twig', [
            'prises' => $prises,
        ]);
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
            ->setAction($this->generateUrl('supprimerhabitat', array('id' => $habitat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

   
    /**
     * Deletes a commentaire entity.
     *
     * @Route("annonces/{id}/{idd}/delete", name="supprimercommentaire")
     * 
     */
    public function deletecommentaireAction($id,$idd)
    {
          
            $em = $this->getDoctrine()->getManager();
            $commentaire = $em->getRepository('ClasseBundle:Commentaire')->find($idd);
             if ($commentaire->getUser() == $this->getUser()|| $this->getUser()->getRoles[0]="ROLE_ADMIN"){
            $em->remove($commentaire);
            $em->flush();
            return $this->redirectToRoute('annonces_show',array('id' => $id));
       }
    }
 
    /**
     * Deletes a commentaire entity.
     *
     * @Route("listeprisedevue/{id}/delete", name="supprimerprise")
     * 
     */
    public function deletepriseAction($id)
    {
          
            $em = $this->getDoctrine()->getManager();
            $prise = $em->getRepository('ClasseBundle:Prisedevue')->find($id);
             if ($prise->getUser() == $this->getUser() || $this->getUser()->getRoles[0]="ROLE_ADMIN"){
            $em->remove($prise);
            $em->flush();
            return $this->redirectToRoute('listeprises');
       }
    }

    
    /**
     * Creates a form to delete a reservation entity.
     *
     * @param Reservation $reservation The reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteFormr(Reservation $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('supprimerreservation', array('id' => $reservation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
