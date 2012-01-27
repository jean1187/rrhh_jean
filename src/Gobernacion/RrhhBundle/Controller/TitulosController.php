<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gobernacion\RrhhBundle\Entity\Titulos;
use Gobernacion\RrhhBundle\Form\TitulosType;
use Configuration\GralBundle\Resources\util\Util;

/**
 * Titulos controller.
 *
 */
class TitulosController extends Controller
{
    /**
     * Lists all Titulos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('GobernacionRrhhBundle:Titulos')->findAll();

        return $this->render('GobernacionRrhhBundle:Titulos:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Titulos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Titulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Titulos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Titulos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Titulos entity.
     *
     */
    public function newAction()
    {
        $entity = new Titulos();
        $form   = $this->createForm(new TitulosType(), $entity);

        return $this->render('GobernacionRrhhBundle:Titulos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Titulos entity.
     *
     */
    public function createAction()
    {
        $entity  = new Titulos();
        $request = $this->getRequest();
        $form    = $this->createForm(new TitulosType(), $entity);
        $em = $this->getDoctrine()->getEntityManager();
        
        if ($request->getMethod() == 'POST' && $request->isXmlHttpRequest()) 
                 {  
                    $inyeccioDependencias=array("validator"=>$this->get('validator'),"translator"=>$this->get('translator'),"session"=>$this->get('session'));
                    return Util::ValidarAjax($entity, $request->get("gobernacion_rrhhbundle_titulostype"),$inyeccioDependencias,$em);
              
                }

        
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('titulos_show', array('id' => $entity->getId())));
            
        }

        return $this->render('GobernacionRrhhBundle:Titulos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }//fin createAcction

    /**
     * Displays a form to edit an existing Titulos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Titulos')->find($id);
        
        if ($this->getRequest()->isXmlHttpRequest()) 
                 { 
                   $response = new \Symfony\Component\HttpFoundation\Response(json_encode(array('code' =>1,"selectores"=>
                                                                                                        array(
                                                                                                              "#gobernacion_rrhhbundle_titulostype_nombre"=>$entity->getNombre()
                                                                                                            )
                                                                                            ))
                                                                                      );
                        $response->headers->set('Content-Type', 'application/json');
                        return $response; 
                 } 

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Titulos entity.');
        }

        $editForm = $this->createForm(new TitulosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Titulos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
   
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Titulos')->find($id);
        
        if ($this->getRequest()->getMethod() == 'POST' && $this->getRequest()->isXmlHttpRequest()) 
                 {  
                    $inyeccionTitulos=array("validator"=>$this->get('validator'),"translator"=>$this->get('translator'),"session"=>$this->get('session'));
                    return Util::ValidarAjax($entity, $this->getRequest()->get("gobernacion_rrhhbundle_titulostype"),$inyeccionTitulos,$em);
                 }

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Titulos entity.');
        }

        $editForm   = $this->createForm(new TitulosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('titulos_edit', array('id' => $id)));
        }

        return $this->render('GobernacionRrhhBundle:Titulos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Titulos entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getEntityManager();
        
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GobernacionRrhhBundle:Titulos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Titulos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('titulos'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
