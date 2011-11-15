<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gobernacion\RrhhBundle\Entity\Dependencia;
use Gobernacion\RrhhBundle\Form\DependenciaType;
use Configuration\GralBundle\Resources\util\Util;
/**
 * Dependencia controller.
 *
 */
class DependenciaController extends Controller
{
    /**
     * Lists all Dependencia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('GobernacionRrhhBundle:Dependencia')->findAll();

        return $this->render('GobernacionRrhhBundle:Dependencia:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Dependencia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Dependencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dependencia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Dependencia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Dependencia entity.
     *
     */
    public function newAction()
    {
        $entity = new Dependencia();
        $form   = $this->createForm(new DependenciaType(), $entity);

        return $this->render('GobernacionRrhhBundle:Dependencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Dependencia entity.
     *
     */
    public function createAction()
    {
        $entity  = new Dependencia();
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getEntityManager();

        if ($request->getMethod() == 'POST' && $request->isXmlHttpRequest()) 
                 {  
                    $inyeccioDependencias=array("validator"=>$this->get('validator'),"translator"=>$this->get('translator'),"session"=>$this->get('session'));
                    return Util::ValidarAjax($entity, $request->get("gobernacion_rrhhbundle_dependenciatype"),$inyeccioDependencias,$em,array("direccion"=>array("ruta"=>"GobernacionRrhhBundle:Direccion")));
              
                }
                
        $form    = $this->createForm(new DependenciaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            //$em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dep_show', array('id' => $entity->getId())));
            
        }

        return $this->render('GobernacionRrhhBundle:Dependencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Dependencia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Dependencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dependencia entity.');
        }

        $editForm = $this->createForm(new DependenciaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Dependencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Dependencia entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Dependencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dependencia entity.');
        }

        $editForm   = $this->createForm(new DependenciaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dep_edit', array('id' => $id)));
        }

        return $this->render('GobernacionRrhhBundle:Dependencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Dependencia entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GobernacionRrhhBundle:Dependencia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dependencia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dep'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
