<?php

namespace BLOG\UsersBundle\Controller;
use BLOG\UsersBundle\Entity\Users;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Created by PhpStorm.
 * User: julien
 * Date: 29/04/2016
 * Time: 15:06
 */

class UsersController extends FOSRestController{

    /**
     * @return array
     */
    public function getUsersAction(){
        $repository = $this->getDoctrine()->getManager()->getRepository('BLOGUsersBundle:Users');
        $users = $repository->findAll();

        /*$serializer = $this->get('jms_serializer');
        $response = $serializer->serialize($users,'json');
        return new Response($response);*/

        return array('users' => $users);
    }

    /**
     * @param $id
     * @return array
     */
    public function getUserAction($id){
        $repository = $this->getDoctrine()->getManager()->getRepository('BLOGUsersBundle:Users');
        $user = $repository->find($id);

        /*$serializer = $this->get('jms_serializer');
        $response = $serializer->serialize($user,'json');
        return new Response($response);*/

        return array('user' => $user);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function postUserAction(Request $request){

        $content = $request->request->all();

        //print_r($content);

        if(isset($content[0])){
            //echo 'plusieurs';
            foreach ($content as $value){
                $user = new Users();

                $user->setNom($value["nom"]);
                $user->setPrenom($value["prenom"]);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
            }
        }else{
            //echo '1';
            $user = new Users();

            $user->setNom($content["nom"]);
            $user->setPrenom($content["prenom"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return new Response("Ajout OK");
    }

    /**
     * @param $id
     * @return Response
     */
    public function deleteUserAction($id){
        $repository = $this->getDoctrine()->getManager()->getRepository('BLOGUsersBundle:Users');
        $user = $repository->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        return new Response("Utilisateur bien supprimé : ".$id);
    }

    /**
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function putUserAction($id, Request $request){
        $content = $request->query->all();

        $repository = $this->getDoctrine()->getManager()->getRepository('BLOGUsersBundle:Users');
        $user = $repository->find($id);
        
        //print_r($content);
        
        //print_r($user);

        if(!empty($content)){

            $user->setNom($content["nom"]);
            $user->setPrenom($content["prenom"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new Response("Utilisateur bien modifié : ".$user->getId());
        }
    }
}