<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gobernacion\RrhhBundle\Entity\Persona;
use Gobernacion\RrhhBundle\Form\PersonaType;

/**
 * Persona controller.
 *
 */
class PersonaController extends Controller
{
    /**
     * Lists all Persona entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('GobernacionRrhhBundle:Persona')->findAll();

        return $this->render('GobernacionRrhhBundle:Persona:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Persona entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Persona:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Persona entity.
     *
     */
    public function newAction()
    {
        $entity = new Persona();
        $form   = $this->createForm(new PersonaType(), $entity);

        return $this->render('GobernacionRrhhBundle:Persona:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Persona entity.
     *
     */
    public function createAction()
    {
        $entity  = new Persona();
        $request = $this->getRequest();
        $form    = $this->createForm(new PersonaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('persona_show', array('id' => $entity->getId())));
            
        }

        return $this->render('GobernacionRrhhBundle:Persona:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Persona entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $editForm = $this->createForm(new PersonaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Persona:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Persona entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $editForm   = $this->createForm(new PersonaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('persona_edit', array('id' => $id)));
        }

        return $this->render('GobernacionRrhhBundle:Persona:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Persona entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GobernacionRrhhBundle:Persona')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Persona entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('persona'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
