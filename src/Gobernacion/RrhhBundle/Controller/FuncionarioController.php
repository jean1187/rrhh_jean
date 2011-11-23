<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gobernacion\RrhhBundle\Entity\Funcionario;
use Gobernacion\RrhhBundle\Form\FuncionarioType;

use Gobernacion\RrhhBundle\Entity\Persona;
use Gobernacion\RrhhBundle\Form\PersonaType;

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
        $request = $this->getRequest();
        $form    = $this->createForm(new FuncionarioType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('funcionario_show', array('id' => $entity->getId())));
            
        }

        return $this->render('GobernacionRrhhBundle:Funcionario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
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

        $editForm = $this->createForm(new FuncionarioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GobernacionRrhhBundle:Funcionario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
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
