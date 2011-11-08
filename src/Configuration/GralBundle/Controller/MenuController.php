<?php
namespace Configuration\GralBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Configuration\GralBundle\Entity\Menu;
use Configuration\GralBundle\Form\MenuType;

/**
 * Menu controller.
 *
 */
class MenuController extends Controller
{
       private $rutas_exclude=array("_assetic_4657d2c","_assetic_4657d2c_0","_assetic_4657d2c_1",
                             "_assetic_6213c29","_assetic_6213c29_0","_assetic_6213c29_1",
                             "_assetic_6213c29_2","_assetic_6213c29_3","_assetic_6213c29_4",
                             "_assetic_95af9d4","_assetic_95af9d4_0","_assetic_95af9d4_1",
                             "_assetic_95af9d4_2","_assetic_95af9d4_3","_assetic_95af9d4_4",
                             "_assetic_95af9d4_5","_assetic_ab3a3bd","_assetic_ab3a3bd_0",
                             "_assetic_ab3a3bd_1","_assetic_ab3a3bd_2","_assetic_ad3f819",
                             "_assetic_ad3f819_0","_assetic_ad3f819_1","_assetic_ad3f819_2",
                             "_assetic_ad3f819_3","_assetic_9b32ce3","_assetic_9b32ce3_0",
                             "_assetic_9b32ce3_1","_assetic_9b32ce3_2","_wdt","_profiler_search",
                             "_profiler_purge","_profiler_import","_profiler_export",
                             "_profiler_search_results","_profiler","_configurator_home",
                             "_configurator_step","_configurator_final","fos_user_security_login",
                             "fos_user_security_check","fos_user_security_logout","fos_user_profile_show",
                             "fos_user_profile_edit","fos_user_registration_register","fos_user_registration_check_email",
                             "fos_user_registration_confirm","fos_user_registration_confirmed","fos_user_resetting_request",
                             "fos_user_resetting_send_email","fos_user_resetting_check_email","fos_user_resetting_reset",
                             "fos_user_change_password","fos_user_group_list","fos_user_group_new","fos_user_group_show",
                             "fos_user_group_edit","fos_user_group_delete" );    
      
    /**
     * Lists all Menu entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();       
        $entities = $em->getRepository('ConfigurationGralBundle:Menu')->findAll();
        return $this->render('ConfigurationGralBundle:Menu:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Menu entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('ConfigurationGralBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Menu entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConfigurationGralBundle:Menu:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Menu entity.
     *
     */
    public function newAction()
    {
        $entity = new Menu();
        $form   = $this->createForm(new MenuType(), $entity,array("rutas_totales"=>$this->calculo_de_rutas(1)) );
        return $this->render('ConfigurationGralBundle:Menu:new.html.twig',array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Menu entity.
     *
     */
    public function createAction()
    {
        $entity  = new Menu();
        $request = $this->getRequest();
        $form    = $this->createForm(new MenuType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('config_menu_show', array('id' => $entity->getId())));
            
        }

        return $this->render('ConfigurationGralBundle:Menu:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Menu entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('ConfigurationGralBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Menu entity.');
        }

        $editForm = $this->createForm(new MenuType(), $entity,array("rutas_totales"=>$this->calculo_de_rutas(0)));
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConfigurationGralBundle:Menu:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Menu entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('ConfigurationGralBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Menu entity.');
        }

        $editForm   = $this->createForm(new MenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
        $request = $this->getRequest();
        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('config_menu_edit', array('id' => $id)));
        }

        return $this->render('ConfigurationGralBundle:Menu:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Menu entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('ConfigurationGralBundle:Menu')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Menu entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('config_menu'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    private function calculo_de_rutas($boleano){
        $rutas_totales=array_diff(array_keys($this->get('router')->getRouteCollection()->all()),$this->rutas_exclude);        
        if($boleano)
        {
            $items_Menu = $this->getDoctrine()->getEntityManager()->getRepository('ConfigurationGralBundle:Menu')
                           ->findMenuesConUri();
            $rutas_bd=array();
            foreach ($items_Menu as $valor)
                $rutas_bd[]=$valor->getUri();
            $rutas_totales=array_diff($rutas_totales,$rutas_bd);
        }//fin si el boleano es diferente de cero
        $clave_valor=array_combine($rutas_totales,$rutas_totales);
        return array_merge((array)array("#"=>"Seleccione [ Sin Ruta ]"),(array)$clave_valor);
    }
    
}//fin class Controller
