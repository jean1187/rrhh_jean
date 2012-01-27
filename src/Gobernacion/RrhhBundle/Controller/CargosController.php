<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gobernacion\RrhhBundle\Entity\Cargos;
use Gobernacion\RrhhBundle\Form\CargosType;
use Configuration\GralBundle\Resources\util\Util;

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
        $em = $this->getDoctrine()->getEntityManager();
        
        if ($request->getMethod() == 'POST' && $request->isXmlHttpRequest()) 
                 {  
                    $inyeccioCargos=array("validator"=>$this->get('validator'),"translator"=>$this->get('translator'),"session"=>$this->get('session'));
                    return Util::ValidarAjax($entity, $request->get("gobernacion_rrhhbundle_cargostype"),$inyeccioCargos,$em);
              
                }
                
        $form    = $this->createForm(new CargosType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
           // $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cargos_show', array('id' => $entity->getId())));
            
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
        
         if ($this->getRequest()->isXmlHttpRequest()) 
                 { 
                        $response = new \Symfony\Component\HttpFoundation\Response(json_encode(array('code' =>1,"selectores"=>
                                                                                                        array(
                                                                                                              "#gobernacion_rrhhbundle_cargostype_nombre"=>$entity->getNombre(),
                                                                                                             "#gobernacion_rrhhbundle_cargostype_sueldo"=>$entity->getSueldo(),
                                                                                                            )
                                                                                            ))
                                                                                      );
                        $response->headers->set('Content-Type', 'application/json');
                        return $response;                    
                 }   

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
        $request = $this->getRequest();
        $entity = $em->getRepository('GobernacionRrhhBundle:Cargos')->find($id);
        
        if ($request->getMethod() == 'POST' && $request->isXmlHttpRequest()) 
                 {  
                    $inyeccionCargos=array("validator"=>$this->get('validator'),"translator"=>$this->get('translator'),"session"=>$this->get('session'));
                    return Util::ValidarAjax($entity, $request->get("gobernacion_rrhhbundle_cargostype"),$inyeccionCargos,$em);
              
                }

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cargos entity.');
        }

        $editForm   = $this->createForm(new CargosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cargos_edit', array('id' => $id)));
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
        $em = $this->getDoctrine()->getEntityManager();
        
        if ($this->getRequest()->getMethod() == 'POST' && $this->getRequest()->isXmlHttpRequest()) 
                 {  
                    $dep=$em->getRepository('GobernacionRrhhBundle:CargosDependencia')->findDepCargos($id);
                    $msg="";
                    $num=count($dep);
                        if($num )
                        {
                                $msg.=" La dependencia no puede ser eliminada, por que tiene ".$num." dependencias";
                                if($num>1)
                                    $msg.="s";
                        }
                        else
                            { 
                                $entity = $em->getRepository('GobernacionRrhhBundle:Cargos')->find($id);
                                $em->remove($entity);
                                $em->flush();
                            }
                    return new \Symfony\Component\HttpFoundation\Response($msg);
                 }
        
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

        return $this->redirect($this->generateUrl('cargos'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
