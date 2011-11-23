<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gobernacion\RrhhBundle\Entity\Permiso;
use Gobernacion\RrhhBundle\Form\PermisoType;

/**
 * Permiso controller.
 *
 */
class PermisoController extends Controller
{
    /**
     * Lists all Permiso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('GobernacionRrhhBundle:Permiso')->findAll();

        return $this->render('GobernacionRrhhBundle:Permiso:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Permiso entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Permiso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Permiso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Permiso:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Permiso entity.
     *
     */
    public function newAction()
    {
        $entity = new Permiso();
        $form   = $this->createForm(new PermisoType(), $entity);

        return $this->render('GobernacionRrhhBundle:Permiso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Permiso entity.
     *
     */
    public function createAction()
    {
        $entity  = new Permiso();
        $request = $this->getRequest();
        $form    = $this->createForm(new PermisoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('permiso_show', array('id' => $entity->getId())));
            
        }

        return $this->render('GobernacionRrhhBundle:Permiso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Permiso entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Permiso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Permiso entity.');
        }

        $editForm = $this->createForm(new PermisoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Permiso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Permiso entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Permiso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Permiso entity.');
        }

        $editForm   = $this->createForm(new PermisoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('permiso_edit', array('id' => $id)));
        }

        return $this->render('GobernacionRrhhBundle:Permiso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Permiso entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GobernacionRrhhBundle:Permiso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Permiso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('permiso'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
