<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gobernacion\RrhhBundle\Entity\Funcionario;
use Gobernacion\RrhhBundle\Form\FuncionarioType;

use Gobernacion\RrhhBundle\Entity\Persona;
use Gobernacion\RrhhBundle\Form\PersonaType;


use Configuration\GralBundle\Resources\util\Util;
/**
 * Funcionario controller.
 *
 */
class FuncionarioController extends Controller
{
    /**
     * Lists all Funcionario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('GobernacionRrhhBundle:Funcionario')->findAll();

        return $this->render('GobernacionRrhhBundle:Funcionario:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Funcionario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Funcionario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Funcionario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Funcionario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Funcionario entity.
     *
     */
    public function newAction()
    {
        $entity = new Funcionario();
        $form   = $this->createForm(new FuncionarioType(), $entity);
        $persona   = $this->createForm(new PersonaType(), $persona=new Persona());

        return $this->render('GobernacionRrhhBundle:Funcionario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'form_persona'=>$persona->createView()
        ));
    }

    /**
     * Creates a new Funcionario entity.
     *
     */
    public function createAction()
    {
        $entity  = new Funcionario();
        $persona  = new Persona();
        $request = $this->getRequest();
        $persona_form   = $this->createForm(new PersonaType(), $persona);

        
        $em = $this->getDoctrine()->getEntityManager();
         
        if ($request->getMethod() == 'POST' && $request->isXmlHttpRequest()) 
                 {  
                         $persona->setFchCre(new  \DateTime());
                         $persona->setFchModif(new \DateTime());
                       $Respuesta_Peticion_Persona=$request->get("gobernacion_rrhhbundle_personatype"); 
                         
                       $status= $em->find("GobernacionRrhhBundle:Status", $Respuesta_Peticion_Persona["status"]);
                       $persona->setStatus($status);
                        $persona->setCedula((int)$Respuesta_Peticion_Persona["cedula"]);
                       //echo (int)$Respuesta_Peticion_Persona["cedula"];
                       
                       
                       
                    $inyeccioDependencias=array("validator"=>$this->get('validator'),"translator"=>$this->get('translator'),"session"=>$this->get('session'));
                       $retorno[]= Util::ValidarAjax($persona,$Respuesta_Peticion_Persona,$inyeccioDependencias,$em,array("nivelAcademico"=>array("ruta"=>"GobernacionRrhhBundle:NivelAcademico"),"status"=>array("ruta"=>"GobernacionRrhhBundle:Status")),true,array("status","cedula"));
                    
                       
                    if($retorno[0]["code"]===true){
                        $Respuesta_Peticion_Funcionario=$request->get("gobernacion_rrhhbundle_funcionariotype");
                        if(strlen($Respuesta_Peticion_Funcionario["fchIngreso"])<10)
                            $entity->setfchIngreso($Respuesta_Peticion_Funcionario["fchIngreso"]);
                        else  $entity->setfchIngreso(new \DateTime($Respuesta_Peticion_Funcionario["fchIngreso"]));
                       
                    $entity->setPersona($persona);
                    $entity->setStatus($status);
                        $retorno[]=   Util::ValidarAjax($entity, $Respuesta_Peticion_Funcionario,$inyeccioDependencias,$em,array("estadoCivil"=>array("ruta"=>"GobernacionRrhhBundle:EstadoCivil"),"status"=>array("ruta"=>"GobernacionRrhhBundle:Status"),"lateralidad"=>array("ruta"=>"GobernacionRrhhBundle:Status"),"tipoFuncionario"=>array("ruta"=>"GobernacionRrhhBundle:TipoFuncionario")),true,array("fchIngreso"));
                    }
                    
                   $response = new \Symfony\Component\HttpFoundation\Response(json_encode($retorno));
                        $response->headers->set('Content-Type', 'application/json');
                        return $response;
                }
                
        /*$form    = $this->createForm(new FuncionarioType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('funcionario_show', array('id' => $entity->getId())));
            
        }

        return $this->render('GobernacionRrhhBundle:Funcionario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'form_persona'=>$persona_form->createView()
        ));*/
    }

    /**
     * Displays a form to edit an existing Funcionario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Funcionario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Funcionario entity.');
        }

       /* $editForm = $this->createForm(new FuncionarioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Funcionario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));*/
    }

    /**
     * Edits an existing Funcionario entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Funcionario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Funcionario entity.');
        }

        $editForm   = $this->createForm(new FuncionarioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('funcionario_edit', array('id' => $id)));
        }

        return $this->render('GobernacionRrhhBundle:Funcionario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Funcionario entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GobernacionRrhhBundle:Funcionario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Funcionario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('funcionario'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
