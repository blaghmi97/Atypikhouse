<?php

namespace App\Controller;

use App\Entity\Atypikhouse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation;
use App\Entity\Habitat;
use App\Form\HabitatType;
use App\Form\recherchehabitatType;
use App\Entity\Prisedevue;
use App\Form\PrisedevueType;
use App\Entity\Commentaire;
use App\Entity\Demande;
use App\Entity\Message;
use App\Form\CommentaireType;
use App\Repository\HabitatRepository;
use App\Repository\DemandeRepository;
use App\Repository\UserRepository;
use App\Entity\Photo;
use App\Entity\Photo2;
use App\Entity\Propriete;
use App\Repository\PhotoRepository;
use App\Repository\ProprieteRepository;
use DateTime;
use Doctrine\Common\Collections\Expr\Value;
use Doctrine\ORM\Query\Expr\GroupBy;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class DefaultController extends Controller
{

     /**
     * @Route("/reponse", name="repondre")
     */
    public function repAction(Request $request,UserRepository $userss)
    {
        $em = $this->getDoctrine()->getManager();
        $message = new Message();
        $users = $userss->find($_POST['id']);
        $hab = $em->getRepository(Habitat::class)->find($_POST['hid']);
           if ( !empty($_POST['contexte'])) {
             
               $user = $userss->find($_POST['id']);
               
               $message->setContexte($_POST['contexte']);
               $message->setTouser($user);
               $message->setFromuser($this->getUser());
               $message->setDateMessage(new DateTime());
               $message->setHabitat($hab);
               $em->persist($message);
               $em->flush();
             $this->addFlash('success',"Message Bien envoyé ! ");
              return $this->redirectToRoute('messagerie');
             
           }
   
        }

 /**
  * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/users", name="users")
     */
    public function usersAction(Request $request,UserRepository $users)
    {


        $listusers = $users->findAll();
           $paginator=$this->get('knp_paginator');
           $paginatiousers=$paginator->paginate(
           $listusers,
           $request->query->getInt('page',1),
           6
           );

        // replace this example code with whatever you need
        return $this->render('default/users.html.twig', [
            'users' => $paginatiousers,
        ]);
    }


    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $atyp =  $em->getRepository(Atypikhouse::class)->find(1);
        $habitats = $em->getRepository(Habitat::class)->findBy(
           [] ,
           ["datePub"=>"desc"],
           3,
           0);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'habitats' => $habitats,
            'atypik'=> $atyp,
        ]);
    }



     /**
      * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/proprietes", name="prop")
     */
    public function propsAction(Request $request,ProprieteRepository $prop)
    {

        $props= $prop->findAll();
           $paginator=$this->get('knp_paginator');
           $paginatiousers=$paginator->paginate(
           $props,
           $request->query->getInt('page',1),
           6
           );

        // replace this example code with whatever you need
        return $this->render('default/proprites.html.twig', [
            'props' => $paginatiousers,
        ]);
    }

         /**
     * @Route("/chercheproprietes", name="chercheprop")
     */
    public function cherhcepropsAction(Request $request,ProprieteRepository $prop)
    {

        $props= $prop->findBy(["habitat"=> $_POST['typ'] ] );
           $paginator=$this->get('knp_paginator');
           $paginatiousers=$paginator->paginate(
           $props,
           $request->query->getInt('page',1),
           6
           );

        // replace this example code with whatever you need
        return $this->render('default/proprites.html.twig', [
            'props' => $paginatiousers,
        ]);
    }


     /**
      * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/listepartenariat", name="liste_partenariat")
     */
    public function listepartenariatAction(Request $request,DemandeRepository $dms)
    {


        $demandes = $dms->findAll();
           $paginator=$this->get('knp_paginator');
           $paginatiousers=$paginator->paginate(
           $demandes,
           $request->query->getInt('page',1),
           6
           );

        // replace this example code with whatever you need
        return $this->render('default/demandePartenaire.html.twig', [
            'dms' => $paginatiousers,
        ]);
    }


     /**
     * @Route("/devenir_partenaire", name="partenaire")
     */
    public function partenaireAction()
    {

        
        return $this->render('default/partenaire.html.twig');
    }


          /**
     * @Route("/cgv", name="cgv")
     */
    public function cgvAction()
    {

        
        return $this->render('default/cgv.html.twig');
    }
    /**
     * @Route("/annonces", name="Annonces")
     */
    public function AnnoncesAction(Request $request)
    {
        $form = $this->createForm('App\Form\recherchehabitatType');
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        $habitats = $em->getRepository(Habitat::class)->findBy(
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

                $habitats = $em->getRepository(Habitat::class)->findBy(
                    [] ,
                    ["datePub"=>"desc"],
                    null,
                    0);
            }else if($critere['type']=="all" && $critere['pays'] != null){
                $habitats = $em->getRepository(Habitat::class)->findBy(
                    ["pays" => $critere['pays']] ,
                    ["datePub"=>"desc"],
                    null,
                    0);

            }else if($critere['type'] !="all" && $critere['pays'] == null){
                $habitats = $em->getRepository(Habitat::class)->findBy(
                    ["type" => $critere['type']] ,
                    ["datePub"=>"desc"],
                    null,
                    0);

            }else{
                $habitats = $em->getRepository(Habitat::class)->findBy(
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
    
    {  $message = new Message();
        $deleteForm = $this->createDeleteForm($habitat);
        $form = $this->createForm('App\Form\MessageType', $message);

        $em = $this->getDoctrine()->getManager();
     
        $habitat = $em->getRepository(Habitat::class)->find($id);
        $reservations = $em->getRepository(Reservation::class)->findBy(["habitat" => $habitat]);
        $commentaires = $em->getRepository(Commentaire::class)->findBy(["reservation" => $reservations],["dateCommentaire" => "DESC"]);
        if($habitat){
        return $this->render('default/Afficher.html.twig', array(
            'commentaires' => $commentaires,
            'habitat' => $habitat,
            'delete_form' => $deleteForm->createView(),
            'form' =>$form->createView(),
           
        ));}
        else{
           return $this->redirectToRoute('mentions');
        }
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

        $reservation = $em->getRepository(Reservation::class)->find($id);
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
        $habitats = $em->getRepository(Habitat::class)->findBy(
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
        $reservations = $em->getRepository(Reservation::class)->findBy(
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
     *@Security("is_granted('ROLE_ADMIN')")
     * @Route("/admin/", name="adminpage")
     * 
     */
    public function adminAction()
    {

        return $this->render('default/admin.html.twig');
    }



    
 


   
   /**
     * @Route("/annonces/{id}/reserve", name="reserver")
     */
    public function reservationAction(Request $request,$id)
    {
        $reservation = new Reservation();
        $form = $this->createForm('App\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        
        $habit = $em->getRepository(Habitat::class)->find($id);
        $events = $em->getRepository(Reservation::class)->findBy(["habitat"=> $habit ]);
        
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
             

      
if ($form->isSubmitted()) {

          if($events){
                foreach($events as $habitat){
          if(($reservation->getDateDebut() >  $habitat->getDateDebut() && $reservation->getDateDebut() < $habitat->getDateFin())
          || ($reservation->getDateDebut() > $habitat->getDateDebut() && $reservation->getDateFin() < $habitat->getDateDebut()) ||
          ($reservation->getDateDebut() < $habitat->getDateFin() && $reservation->getDateFin() > $habitat->getDateFin()) ||
          ($reservation->getDateFin() > $habitat->getDateDebut() && $reservation->getDateFin() < $habitat->getDateFin()) 
          || $reservation->getDateDebut() >= $reservation->getDateFin() || $reservation->getDateDebut() ==  $habitat->getDateDebut()){


                        $this->addFlash('refus',"Vérifier vos dates de votre demandes ! ");
                        return $this->render('default/reservation.html.twig', array(
                            'data' => $data,
                            'reservation' => $reservation,
                            'form' => $form->createView()));
                     }
    
                }}
                
                
                if($reservation->getDateDebut() >= $reservation->getDateFin() ){


                        $this->addFlash('refus',"Vérifier vos dates de votre demandes ! ");
                        return $this->render('default/reservation.html.twig', array(
                            'data' => $data,
                            'reservation' => $reservation,
                            'form' => $form->createView()));
                     }
    
                
        
                     if ($this->getUser()->getEnabled() == 1 ){
            
            
            $reservation->setUser($this->getUser());
            $nb = $reservation->getDateDebut()->diff($reservation->getDateFin())->format('%a');
            $reservation->setHabitat($habit);
            $reservation->setNombreNuit($nb);
            $reservation->setPrixTotal($nb * $reservation->getHabitat()->getPrix());
          
            
            if(($nb * $reservation->getHabitat()->getPrix()) < 1000){
            return $this->render('default/verification-res.html.twig', array(
                'reservation' => $reservation,
              
            ));}else{
                
                   $this->addFlash('refus',"le montant doit étre inférieur a 1000 euro  ! ");
                        return $this->render('default/reservation.html.twig', array(
                            'data' => $data,
                            'reservation' => $reservation,
                            'form' => $form->createView()));
                     }
                    }else{
                        $this->addFlash('refus',"Votre compte est suspendu ! ");  
                        return $this->redirectToRoute('habitat_Add');


                    }
            
            
             
        }
            return $this->render('default/reservation.html.twig', array(
               'data' => $data,
               'reservation' => $reservation,
               'habitat' => $habit,
               'form' => $form->createView(),
           ));
    }




    /**
     * 
     *
     * @Route("/envoi", name="envoimessage")
     * 
     */
    public function EnvoiAction(Request $request)
    {
        $message = new Message();
      

        if ( !empty($_POST['contexte'])) {
            $em = $this->getDoctrine()->getManager();
            $habitat = $em->getRepository(Habitat::class)->find($request->request->get('id'));  
            $message->setContexte($_POST['contexte']);
           $message->setHabitat($habitat);
            $message->setTouser($habitat->getUser());
            $message->setFromuser($this->getUser());
            $message->setDateMessage(new DateTime());
            
            $em->persist($message);
            $em->flush();
          $this->addFlash('success',"Message Bien envoyé ! ");
           return $this->redirectToRoute('annonces_show',array('id' => $habitat->getId()));
          
        }


        
       
           return $this->redirectToRoute('homepage');
    }
  
    
    


  /**
     * 
     *
     * @Route("/checkout.php", name="checkout")
     * 
     */
    public function validerAction(Request $request)
    {

        if(!empty($_POST)){
        $reservation =new Reservation(); 
        $em = $this->getDoctrine()->getManager();
        $habit = $em->getRepository(Habitat::class)->find($_POST['habitat']);
        $events = $em->getRepository(Reservation::class)->findBy(["habitat"=> $habit ]);
        $reservation->setDateDebut(new \DateTime($_POST['dated']));
        $reservation->setDateFin(new \DateTime($_POST['datef']));
        foreach($events as $habitat){
            if(($reservation->getDateDebut() >  $habitat->getDateDebut() && $reservation->getDateDebut() < $habitat->getDateFin())
            || ($reservation->getDateDebut() > $habitat->getDateDebut() && $reservation->getDateFin() < $habitat->getDateDebut()) ||
            ($reservation->getDateDebut() < $habitat->getDateFin() && $reservation->getDateFin() > $habitat->getDateFin()) ||
            ($reservation->getDateFin() > $habitat->getDateDebut() && $reservation->getDateFin() < $habitat->getDateFin()) 
            || $reservation->getDateDebut() >= $reservation->getDateFin() || $reservation->getDateDebut() ==  $habitat->getDateDebut()){
  
  
                          $this->addFlash('refus',"Vérifier vos dates de votre demandes ! ");
                          return $this->redirectToRoute("reserver",array('id' => $habit->getId())); }
      
                  }
             \Stripe\Stripe::setApiKey('sk_test_51IAcQ2H4vWt6fF11LgnUXyWlM9SYqjfMF4zWvMRjIoKzBFmkiBSH3PnwpH01CIF4is8dXBp4EP6KEcfbLKTwu4uY00wd0Y3He7');
             $charge = \Stripe\Charge::create([
               'amount' => $_POST['prix'] * 100,
               'currency' => 'eur',
               'description' => 'Reservation',
               'source' => $request->request->get('stripeToken'),
             ]);
           $reservation->setHabitat($habit);
           $reservation->setUser($this->getUser());
           $reservation->setNombreNuit($_POST['nb']);
           $reservation->setPrixTotal($_POST['prix']);
           $reservation->setDateReservation(new DateTime());
           $em = $this->getDoctrine()->getManager();
           $em->persist($reservation);
           $em->flush();
           $this->addFlash('success','Votre résérvation à été bien effectuée ');
           return $this->redirectToRoute('mesreservations');
        }
        return $this->render('default/verification-res.html.twig');
    }

    

   /**
     * 
     *
     * @Route("/devenirpartenaire", name="dm_partenaire")
     * 
     */
    public function dmpartenaireAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager(); 
        $demande = new Demande();

        if ( !empty($_POST)) {

            $demande->setStatut($_POST['statut']);
            $demande->setSecteur($_POST['lieu']);
            $demande->setActivite($_POST['activite']);
            $demande->setConnu($_POST['connu']);
            $demande->setUser($this->getUser());
            
            $em->persist($demande);
            $em->flush();
          $this->addFlash('success',"Votre demande est bien envoyé ! ");
          return $this->redirectToRoute('homepage');
          
        }

       
           return $this->redirectToRoute('homepage');
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
        $form = $this->createForm('App\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        
        $reservation = $em->getRepository(Reservation::class)->find($id);
        $habitat=$reservation->getHabitat();
        if ($reservation->getUser() == $this->getUser()){
        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setUser($this->getUser());
            $commentaire->setReservation($reservation);
            $commentaire->setDateCommentaire(new DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('annonces_show',array('id' => $habitat->getId()));
        }

        return $this->render('default/commenter.html.twig', array(
            'habitat' => $habitat,
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));}else{
            return $this->redirectToRoute('mesreservations');
        }
    }

 



    /**
     * @Route("/prisesdevue", name="listeprises")
     */
    public function listeprisesAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $prises = $em->getRepository(Prisedevue::class)->findBy(
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
        $prises = $em->getRepository(Prisedevue::class)->findBy(
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
            $commentaire = $em->getRepository(Commentaire::class)->find($idd);
             if ($commentaire->getUser() == $this->getUser()|| $this->getUser()->getRoles[0]="ROLE_ADMIN"){
            $em->remove($commentaire);
            $em->flush();
            return $this->redirectToRoute('annonces_show',array('id' => $id));
       }
    }
 
        /**
     * Deletes a photo entity.
     *
     * @Route("photos/{id}/delete", name="supprimerphoto")
     * 
     */
    public function deletePhotoAction($id)
    {
            
            $em = $this->getDoctrine()->getManager();
            $photo = $em->getRepository(Photo::class)->find($id);
        
            $idh = $photo->getHabitat()->getId();
            $em->remove($photo);
            $em->flush();
            return $this->redirectToRoute('editannonce',array('id' => $idh));
       
    }



    /**
     * Deletes a prise entity.
     *
     * @Route("listeprisedevue/{id}/delete", name="supprimerprise")
     * 
     */
    public function deletepriseAction($id)
    {
          
            $em = $this->getDoctrine()->getManager();
            $prise = $em->getRepository(Prisedevue::class)->find($id);
             if ($prise->getUser() == $this->getUser() || $this->getUser()->getRoles[0]="ROLE_ADMIN"){
            $em->remove($prise);
            $em->flush();
            return $this->redirectToRoute('listeprises');
       }
    }

       /**
     * @Route("/mentions", name="mentions")
     */
    public function MentionsAction()
    {

        
        return $this->render('default/mentions.html.twig');
    }
      /**
     * @Route("/cgu", name="cgu")
     */
    public function cguAction()
    {

        
        return $this->render('default/cgu.html.twig');
    }
        
       /**
     * @Route("/politique", name="politique")
     */
    public function politiqueAction()
    {

        
        return $this->render('default/politique.html.twig');
    }

        /**
     * @Route("/supprimercompte", name="supprimercompte")
     */
    public function supprimercompteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $useer = $em->getRepository(User::class)->find($user->getId());
         if ($useer == $this->getUser()){
        $em->remove($useer);
        $em->flush();
         return $this->redirectToRoute('homepage');
         }   
         return $this->render('homepage');
    }

      /**
     * @Route("/messagerie", name="messagerie")
     */
    public function MessagerieAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        
        
        $messages = $em->getRepository(Message::class)->findBy(
           ["touser"=> $this->getUser()] ,
           ["dateMessage"=>"desc"],
           null,
           null);

       
        // replace this example code with whatever you need
        return $this->render('default/Chat.html.twig',['messages' => $messages]);
    }


 /**
     * @Route("/supprimeruser/{id}", name="supprimeruser")
     */
    public function supprimeruserAction(UserRepository $userss,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $useer = $userss->find($id);
       if($useer){
        $em->remove($useer);
        $em->flush();
         
         return $this->redirectToRoute('users');}

         return $this->redirectToRoute('users');
    }

        /**
         * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/desableuser/{id}", name="desableuser")
     */
    public function desableAction(UserRepository $userss,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $useer = $userss->find($id);
        $useer->setEnabled(false);
       if($useer){
        $em->persist($useer);
        $em->flush();
         
         return $this->redirectToRoute('users');}

         return $this->redirectToRoute('users');
    }

          /**
           * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/enableuser/{id}", name="enableuser")
     */
    public function enableAction(UserRepository $userss,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $useer = $userss->find($id);
        $useer->setEnabled(true);
       if($useer){
        $em->persist($useer);
        $em->flush();
         
         return $this->redirectToRoute('users');}

         return $this->redirectToRoute('users');
    }


          /**
           * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/usertoadmin/{id}", name="usertoadmin")
     */
    public function usertoadminAction(UserRepository $userss, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $useer = $userss->find($id);
        $useer->setRoles(array('ROLE_ADMIN'));
       if($useer){
        $em->persist($useer);
        $em->flush();
         
         return $this->redirectToRoute('users');}

         return $this->redirectToRoute('users');
    }




           /**
            * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/admintouser/{id}", name="admintouser")
     */
    public function admintouserAction(UserRepository $userss, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $useer = $userss->find($id);
        $useer->setRoles(array('ROLE_USER'));
       if($useer){
        $em->persist($useer);
        $em->flush();
         
         return $this->redirectToRoute('users');}

         return $this->redirectToRoute('users');
    }

               /**
                * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/usertopartenaire/{id}", name="usertopartenaire")
     */
    public function usertopartenaireAction(UserRepository $userss, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $useer = $userss->find($id);
        $useer->setRoles(array('ROLE_PARTENAIRE'));
       if($useer){
        $em->persist($useer);
        $em->flush();
         
         return $this->redirectToRoute('liste_partenariat');}

         return $this->redirectToRoute('liste_partenariat');
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


/**
 * @Route("sitemap.xml", name="sitemap", defaults={"_format"="xml"})
 * @param Request $request
 * @return Response
 */
public function index(Request $request)
{
    // Nous récupérons le nom d'hôte depuis l'URL
    $hostname = $request->getSchemeAndHttpHost();
 
    // On initialise un tableau pour lister les URLs
    $urls = [];
 
    // On ajoute les URLs "statiques"
    $urls[] = ['loc' => $this->generateUrl('homepage')];
    $urls[] = ['loc' => $this->generateUrl('Annonces')];
    $urls[] = ['loc' => $this->generateUrl('users')];
    $urls[] = ['loc' => $this->generateUrl('annonces_show')];
    $urls[] = ['loc' => $this->generateUrl('app_register')];
    $urls[] = ['loc' => $this->generateUrl('app_login')];

    $urls[] = ['loc' => $this->generateUrl('mesreservations')];
    $urls[] = ['loc' => $this->generateUrl('habitat_Add')];
    $urls[] = ['loc' => $this->generateUrl('resever')];
    $urls[] = ['loc' => $this->generateUrl('repondre')];
    $urls[] = ['loc' => $this->generateUrl('commenter')];
    $urls[] = ['loc' => $this->generateUrl('newprisedevue')];
    $urls[] = ['loc' => $this->generateUrl('listeprises')];
    $urls[] = ['loc' => $this->generateUrl('mesprises')];
 
// Fabrication de la réponse XML
$response = new Response(
    $this->renderView('sitemap/index.html.twig', ['urls' => $urls,
        'hostname' => $hostname]),
    200
);

// Ajout des entêtes
$response->headers->set('Content-Type', 'text/xml');

// On envoie la réponse
return $response;

    

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
                    $this->addFlash('success',"Annonce a été Bien Supprimée ! ");
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
     * 
     *
     * @Route("/AddHabitat", name="habitat_Add")
     * 
     */
    public function addAction(Request $request,ProprieteRepository $prop)
    {
        $habitat = new Habitat();
        $form = $this->createForm('App\Form\HabitatType', $habitat);
        $form->handleRequest($request);
        $props = $prop->findAll();
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
          
            $res = $habitat->getDescription(). '     ';
            foreach($props as $p){
                   if($p->getHabitat() == $habitat->getType() ){
                         $res .=' |- ' .$p->getNom() .' : '. $_POST[$p->getNom()] .' . ';
                   }
            }
            
            $habitat->setDescription($res);
            $habitat->setUser($this->getUser());
            $habitat->setDatePub(new DateTime());
             if ($this->getUser()->getEnabled() == 1 ){
            $em = $this->getDoctrine()->getManager(); 
            $em->persist($habitat);
            $em->flush();
            $this->addFlash('success',"Annonce bien enregistrée ! ");
            return $this->redirectToRoute('mesannonces');}
            else{
                $this->addFlash('Erreur',"Votre compte est suspendu ! ");  
                return $this->redirectToRoute('habitat_Add');
            }
        }
        return $this->render('default/AddAnnonce.html.twig', array(
            'habitat' => $habitat,
            'props' => $props,
            'form' => $form->createView(),
        ));
    }


 /**
     * @Route("/supprimerpropriete/{id}", name="supprimerpropriete")
     */
    public function supprimerproprieteAction(ProprieteRepository $prop,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $p = $prop->find($id);
       if($p){
        $em->remove($p);
        $em->flush();
         
         return $this->redirectToRoute('prop');}

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
        $habitat =new Habitat();
        $form = $this->createForm('App\Form\PrisedevueType', $prisedevue);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository(Reservation::class)->find($id);
        $idh = $reservation->getHabitat()->getId();
        $habitat = $em->getRepository(Habitat::class)->find($idh);
        
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
            $prisedevue->setDateprise(new DateTime());
            $prisedevue->setReservation($reservation);
            $em = $this->getDoctrine()->getManager();
            $em->persist($prisedevue);
            $em->flush();

            return $this->redirectToRoute('listeprises');
        }}
  
        return $this->render('default/prisedevue.html.twig', array(
            'habitat' => $habitat,
            'prisedevue' => $prisedevue,
            'form' => $form->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing habitat entity.
     *
     * @Route("mesannonces/{id}/edit", name="editannonce")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Habitat $habitat,ProprieteRepository $prop)
    {
        $deleteForm = $this->createDeleteForm($habitat);
        $editForm = $this->createForm('App\Form\HabitatType', $habitat);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $photos = $em->getRepository(Photo::class)->findBy(["habitat" => $habitat] );
        $props = $prop->findAll();
        if ($editForm->isSubmitted()) {
            $images= $editForm["photos"]["Src"]->getData();
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
                $res = $habitat->getDescription(). '     ';
                foreach($props as $p){
                       if($p->getHabitat() == $habitat->getType() ){
                             $res .=' |- ' .$p->getNom() .' : '. $_POST[$p->getNom()] .' . ';
                       }
                }
        
        
        
                $habitat->setDescription($res);
                $em->persist($habitat);
                $em->flush();
           
            return $this->redirectToRoute('annonces_show', array('id' => $habitat->getId()));
        }
      
        if($habitat->getUser() == $this->getUser() || $this->getUser()->getRoles[0]="ROLE_ADMIN"){
        return $this->render('default/editerannonce.html.twig', array(
            'habitat' => $habitat,
            'photos' => $photos,
            'props' => $props,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));}
        else{
            return $this->redirectToRoute('annonces');
        }
    }

       /**
     *
     *
     * @Route("/description", name="description")
     * @Method({"GET", "POST"}) 
     */
    public function descriptionAction()
    {      
        $em = $this->getDoctrine()->getManager();
        $desc = $em->getRepository(Atypikhouse::class)->find(1);
   
        return $this->render('default/Description.html.twig', array(
            'atyp' => $desc,
           
        ));
    }

    
     /**
      * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/editdescr", name="editdescr")
     */
    public function editdescrAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $atyp = $em->getRepository(Atypikhouse::class)->find(1);
      
           
             
              $atyp->setDescription($_POST['descr']);
               $em->persist($atyp);
               $em->flush(); 
              return $this->redirectToRoute('homepage');
             
           
   
        }


    /**
     *
     *@Security("is_granted('ROLE_ADMIN')")
     * @Route("/statistique", name="statistique")
     * 
     */
    public function statistiqueAction()
    {
        $em = $this->getDoctrine()->getManager();
        $habitats = $em->getRepository(Habitat::class)->findAll();
        return $this->render('default/graphique.html.twig',array(
            'habitats' => $habitats
        ));
    }

    /**
     * 
     *@Security("is_granted('ROLE_ADMIN')")
     * @Route("/Ajoutpropriete", name="Ajoutprodyn")
     * 
     */
    public function AjoutpropeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager(); 
        $pro = new Propriete();
        if ( !empty($_POST)) {
            $pro->setNom($_POST['pro']);
            $pro->setInput($_POST['inp']);
            $pro->setHabitat($_POST['type']);
            $em->persist($pro);
            $em->flush();
          $this->addFlash('success',"Votre demande est bien envoyé ! ");
          return $this->redirectToRoute('prop');
        }
           return $this->redirectToRoute('homepage');
    }
}