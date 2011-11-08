<?php

namespace Taller\AeronauticoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpFoundation\Response;

use Taller\AeronauticoBundle\Form\AeronaveType;



class AeronaveController extends Controller
{
    
    public function indexAction()
    {
        
         $em = $this->get('doctrine')->getEntityManager();

        return $this->render('AeronauticoBundle:Aeronave:index.html.twig', array(
            'aeronaves' => $em->getRepository('AeronauticoBundle:Aeronave')->findAll()
        ));
     
     
    }//fin index

    
    public function newAction()
    {
       
        $peticion = $this->getRequest();
        $formulario = $this->get('form.factory')->create(new AeronaveType(array("serial"=>'as')));
         if ($peticion->getMethod() == 'POST') {
                $em = $this->getDoctrine()->getEntityManager();
                     if ($peticion->isXmlHttpRequest()) {  
                         /*
                         $t = $this->get('translator')->trans('Symfony2 is great');
                            return new Response($t." --- > ".$this->get('session')->getLocale());
                           //deberia salir Symfony2 es magnífico
                            */
                         $aeronave = new \Taller\AeronauticoBundle\Entity\Aeronave();
                         $aeronave_array_form=$peticion->get("Aeronave");
                         foreach ($aeronave_array_form as $key=>$value){                             
                             if($key=="tipoAeronave")
                             {
                                if (null ==$tipoAeronave = $em->find('AeronauticoBundle:TipoAeronave', $aeronave_array_form[$key]))
                                        return new Response("No se Encontro el Tipo de Aeronave ");
                                $aeronave->{'set'.ucfirst($key)}($tipoAeronave);
                             }
                             else if($key=="cliente")
                             {
                                $cliente = $em->find('AeronauticoBundle:Cliente',  $aeronave_array_form[$key]);
                                $aeronave->{'set'.ucfirst($key)}($cliente);
                             }                                 
                             else if($key!="_token")
                                $aeronave->{'set'.ucfirst($key)}( $aeronave_array_form[$key]);
                         }
                         $msg = array();
                         $errores = $this->get('validator')->validate($aeronave);
                         if (count($errores) > 0) {
                             foreach ($errores as $err) {
                                $msg[$err->getPropertyPath()]= $this->get('translator')->trans($err->getMessage(), array(), 'validators');
                            }
                            $code = false;
                        
                        } else {
                         $code = true;
                        }
                        $response = new Response(json_encode(array('code' => $code, 'msg' => $msg,"locale" => $this->get('session')->getLocale())));
                        $response->headers->set('Content-Type', 'application/json');
                        return $response;
                    }//fin si la peticion es por ajax
                    
            $formulario->bindRequest($peticion);
            if ($formulario->isValid()) {
                $aeronave = $formulario->getData();
                $em->persist($aeronave);
                $em->flush();
                $peticion->getSession()->setFlash('notice', 'Se ha creado correctamente la aeronave');

                return $this->redirect($this->generateUrl('_AeronauticoBundle_edit', array(
                    'id' => $aeronave->getId()
                )));
            }//fin si es valido
        }//fin post
        

        return $this->render('AeronauticoBundle:Aeronave:new.html.twig', array(
            'form' => $formulario->createView()
        ));
    }//fin new
    
     public function editAction($id)
    {
            $peticion = $this->getRequest();
            $em = $this->getDoctrine()->getEntityManager();

            if (null == $aeronave = $em->find('AeronauticoBundle:Aeronave', $id)) {
                throw new NotFoundHttpException('No existe la aeronave que se quiere modificar');
            }

            $formulario = $this->get('form.factory')->create(new AeronaveType());
            $formulario->setData($aeronave);

            if ($peticion->getMethod() == 'POST') {
                $formulario->bindRequest($peticion);

                if ($formulario->isValid()) {
                    $em->persist($aeronave);
                    $em->flush();

                    return $this->redirect($this->generateUrl('_AeronauticoBundle_homepage'));
                }
            }

            return $this->render('AeronauticoBundle:Aeronave:edit.html.twig', array(
                'form' => $formulario->createView(),
                'aeronave'   => $aeronave
            ));
    }//fin edit

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if (null == $aeronave = $em->find('AeronauticoBundle:Aeronave', $id)) {
            throw $this->createNotFoundException('No existe la Aeronave que se quiere ver');
        }

        return $this->render('AeronauticoBundle:Aeronave:show.html.twig', array(
            'aeronave'   => $aeronave
        ));
    }//fin show    
    
    public function delAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $aeronave   = $em->getRepository("AeronauticoBundle:Aeronave")->findOneBy(array('id' => $id));
        $em->remove($aeronave);
        $em->flush();
        return $this->redirect($this->generateUrl('_AeronauticoBundle_homepage'));
    }
    
}//fin class