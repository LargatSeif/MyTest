<?php

namespace dataBundle\Controller;

use dataBundle\Entity\chien;
use dataBundle\Entity\etat;
use dataBundle\Entity\periode;
use dataBundle\Form\chienType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class dogsController extends Controller
{
    public function listAllAction(){
        $dogList = $this->getDoctrine()->getRepository('dataBundle:chien')->findBy(['maitre'=>$this->getUser()]);
        return $this->render('@public/memberArea/dogs/list.hmtl.twig',['dogs'=>$dogList]);
    }

    public function createAction(Request $request)
    {
        $entity = new chien();
        $form = $this->createCreateForm($entity);
        $data = $form->handleRequest($request);
        #var_dump($data->get('etat'));die;

        if ($form->isValid()) {
            $emptyPeriode = $this->getDoctrine()->getRepository('dataBundle:periode')->findOneBy(['id'=>'3']);
            $etat = $entity->getEtat();
            $newEtat = $etat->setPeriode($emptyPeriode);
            $entity->setEtat($newEtat);
            $entity->setMaitre($this->getUser());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect(
                $this->generateUrl(
                    'dog_show',
                    [
                        'dogID'     =>  $entity->getId(),
                        'dogName'   =>  $entity->getNom(),
                        'userID'    =>  $this->getUser()->getId()
                    ]
                )
            );
        }

        return $this->render('sampleBundle:sample:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    private function createCreateForm(chien $entity)
    {
        $form = $this->createForm(new chienType(), $entity, array(
            'action' => $this->generateUrl('dog_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    public function newAction()
    {
        $entity = new chien();
        $form   = $this->createCreateForm($entity);

        return $this->render(
            'publicBundle:memberArea/dogs:add.html.twig', 
            [
                'entity' => $entity,
                'edit_form'   => $form->createView(),
            ]
        );
    }

    public function showAction($userID ,$dogName ,$dogID){
        if($userID = $this->getUser()->getId()){
            $dog = $this->getDoctrine()->getRepository('dataBundle:chien')->findOneBy(['id'=>$dogID ,'nom'=>$dogName]);
            return $this->render('@public/memberArea/dogs/show.html.twig',['dog'=>$dog] );    
        }
        else{
            return new Response("You messed with me".$this->getUser()->getUsername().", and i'll ban you !");
        }
        
    }

    private function createEditForm(chien $entity)
    {
        $form = $this->createForm(new chienType(), $entity, [
            'action' => $this->generateUrl(
                'dog_update',
                [
                    'dogID' => $entity->getId()
                ]
            ),
            'method' => 'PUT',
        ]);

        $form->add(
            'submit',
            'submit',
            [
                'label' => 'Mettre à jours',
                'attr'=>
                    [
                        'class'=>'btn ',
                        'style'=>'width:100%'
                    ]
            ]
        );

        return $form;
    }

    public function editAction($dogID){
        $em = $this->getDoctrine();
        $entity = $em->getRepository('dataBundle:chien')->findOneBy(['id'=>$dogID]);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find the dog you are looking for !');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('@public/memberArea/dogs/edit.html.twig',
            [
                'dog'      => $entity,
                'edit_form'   => $editForm->createView(),
            ]
        );
    }


    public function updateAction(Request $request , $dogID ){
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('dataBundle:chien')->findOneBy(['id'=>$dogID]);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find sample entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('dog_show', ['dogID' => $dogID ,'dogName'=> $entity->getNom(), 'userID'=>$this->getUser()->getId()]));
        }

        return $this->render(
            'publicBundle:memberArea/dogs:edit.html.twig',
            [
                'dog'      => $entity,
                'edit_form' => $editForm->createView()
            ]
        );
    }
}
