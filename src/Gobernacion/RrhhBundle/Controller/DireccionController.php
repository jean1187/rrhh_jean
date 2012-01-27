<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gobernacion\RrhhBundle\Entity\Direccion;
use Gobernacion\RrhhBundle\Form\DireccionType;
use Configuration\GralBundle\Resources\util\Util;

/**
 * Direccion controller.
 *
 */
class DireccionController extends Controller
{
    /**
     * Lists all Direccion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('GobernacionRrhhBundle:Direccion')->findAll();

        return $this->render('GobernacionRrhhBundle:Direccion:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Direccion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Direccion')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Direccion entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('GobernacionRrhhBundle:Direccion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Direccion entity.
     *
     */
    public function newAction()
    {
        $entity = new Direccion();
        $form   = $this->createForm(new DireccionType(), $entity);

        return $this->render('GobernacionRrhhBundle:Direccion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Direccion entity.
     *
     */
    public function createAction()
    {
        $entity  = new Direccion();
        $request = $this->getRequest();
        $form    = $this->createForm(new DireccionType(), $entity);
        $em = $this->getDoctrine()->getEntityManager();

        if ($request->getMethod() == 'POST' && $request->isXmlHttpRequest()) 
                 {  
                    $inyeccioDependencias=array("validator"=>$this->get('validator'),"translator"=>$this->get('translator'),"session"=>$this->get('session'));
                    return Util::ValidarAjax($entity, $request->get("gobernacion_rrhhbundle_direcciontype"),$inyeccioDependencias,$em);
              
                }

            $form->bindRequest($request);
            
              if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();  
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('dir_show', array('id' => $entity->getId())));

              }

            return $this->render('GobernacionRrhhBundle:Direccion:new.html.twig', array(
                'entity' => $entity,
                'form'   => $form->createView()
            ));

    }//fin createAcction

    /**
     * Displays a form to edit an existing Direccion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Direccion')->find($id);

                if ($this->getRequest()->isXmlHttpRequest()) 
                 { 
                   return new \Symfony\Component\HttpFoundation\Response($entity->getNombre());
                 }     
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Direccion entity.');
        }

        $editForm = $this->createForm(new DireccionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Direccion:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Direccion entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Direccion')->find($id);
        
        if ($this->getRequest()->getMethod() == 'POST' && $this->getRequest()->isXmlHttpRequest()) 
                 {  
                    $inyeccioDependencias=array("validator"=>$this->get('validator'),"translator"=>$this->get('translator'),"session"=>$this->get('session'));
                    return Util::ValidarAjax($entity, $this->getRequest()->get("gobernacion_rrhhbundle_direcciontype"),$inyeccioDependencias,$em);
                 }
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Direccion entity.');
        }

        $editForm   = $this->createForm(new DireccionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dir_edit', array('id' => $id)));
        }

        return $this->render('GobernacionRrhhBundle:Direccion:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Direccion entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getEntityManager();
        if ($this->getRequest()->getMethod() == 'POST' && $this->getRequest()->isXmlHttpRequest()) 
                 {  
                    $dep=$em->getRepository('GobernacionRrhhBundle:Dependencia')->findDep($id);
                    $msg="";
                    $num=count($dep);
                        if($num )
                                $msg.=" La direccion no puede ser eliminada, por que tiene ".$num." dependencias ";                    
                        else
                            { 
                                $entity = $em->getRepository('GobernacionRrhhBundle:Direccion')->find($id);
                                $em->remove($entity);
                                $em->flush();
                            }
                    return new \Symfony\Component\HttpFoundation\Response($msg);
                 }        
        
        
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GobernacionRrhhBundle:Direccion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Direccion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dir'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
