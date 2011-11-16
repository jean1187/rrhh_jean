<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gobernacion\RrhhBundle\Entity\Cargos;
use Gobernacion\RrhhBundle\Form\CargosType;

/**
 * Cargos controller.
 *
 */
class CargosController extends Controller
{
    /**
     * Lists all Cargos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('GobernacionRrhhBundle:Cargos')->findAll();

        return $this->render('GobernacionRrhhBundle:Cargos:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Cargos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Cargos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cargos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Cargos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Cargos entity.
     *
     */
    public function newAction()
    {
        $entity = new Cargos();
        $form   = $this->createForm(new CargosType(), $entity);

        return $this->render('GobernacionRrhhBundle:Cargos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Cargos entity.
     *
     */
    public function createAction()
    {
        $entity  = new Cargos();
        $request = $this->getRequest();
        $form    = $this->createForm(new CargosType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Gobernacion_RrhhBundle_Entity__show', array('id' => $entity->getId())));
            
        }

        return $this->render('GobernacionRrhhBundle:Cargos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Cargos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Cargos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cargos entity.');
        }

        $editForm = $this->createForm(new CargosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Cargos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Cargos entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GobernacionRrhhBundle:Cargos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cargos entity.');
        }

        $editForm   = $this->createForm(new CargosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Gobernacion_RrhhBundle_Entity__edit', array('id' => $id)));
        }

        return $this->render('GobernacionRrhhBundle:Cargos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cargos entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GobernacionRrhhBundle:Cargos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cargos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Gobernacion_RrhhBundle_Entity_'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
