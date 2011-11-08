<?php

/*namespace Taller\AeronauticoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadInicial extends AbstractFixture implements OrderedFixtureInterface
{

    protected $manager;

    public function load($manager)
    {
        $this->manager = $manager;
        
          $tipo_aeronave_array=array("Jet","Helicopteros","Avionetas");
          
        // -- Cargar TipoAeronaves ----------------------------------------
        foreach ($tipo_aeronave_array as $tipo)
        {
            $tipo_aeronave=new \Taller\AeronauticoBundle\Entity\TipoAeronave();
            $tipo_aeronave->setNombre($tipo);
            $manager->persist($tipo_aeronave);
            
        }

        // -- Cargar Status----------------------------------------
        
            $status= array (
                1=>array(
                    "nombre"=>"Activo",
                    "tabla"=>"usr"
                ),
                2=>array(
                    "nombre"=>"Inactivo",
                    "tabla"=>"usr"
                ),                
                3=>array(
                    "nombre"=>"Moroso",
                    "tabla"=>"Cliente"
                ),                
                4=>array(
                    "nombre"=>"Solvente",
                    "tabla"=>"Cliente"
                )                
            );
            
 foreach ($status as $referencia => $datosStatus) {
            $status = new \Taller\AeronauticoBundle\Entity\Status();

            foreach ($datosStatus as $propiedad => $valor) 
                $status->{'set'.ucfirst($propiedad)}($valor);
            

            $this->addReference($referencia, $status);

            $manager->persist($status);
        }            

        // -- Cargar Usuarios----------------------------------------
        for($j=1;$j<=2;$j++){
            $users1=array();
            for($i=0;$i<2;$i++)            
            $users1[]=array(
                        "user"=>"usuario".$i."-".$j,
                        "password"=>"123"

                );
            foreach ($users1 as $key=>$valorUSER)
            {
                $user=new \Taller\AeronauticoBundle\Entity\Usuario();
                foreach ($valorUSER as $propiedad => $valor) 
                    $user->{'set'.ucfirst($propiedad)}($valor);
                $user->setStatus($manager->merge($this->getReference($j)));
                 $manager->persist($user);
            }
        }
        // -- Cargar Empresa----------------------------------------
        $empresa_array=array(
            "nombre"=>"Empresa nombre",
            "direccion"=>"Av.  boyaca @38",
            "rif"=>"j-2356963",
            "tlf"=>"0416-7432523",
            "email"=>"empresa@gob.ve",
            "createAt"=>new \DateTime('2011-07-01'),
            "updateAt"=>new \DateTime('2011-08-01')            
        );
        $empresa_obj=new \Taller\AeronauticoBundle\Entity\Empresa();
         foreach ($empresa_array as $propiedad => $valor) 
             $empresa_obj->{'set'.ucfirst($propiedad)}($valor);
             
             $manager->persist($empresa_obj);
        // -- Cargar Clientes----------------------------------------

        $cliente=new \Taller\AeronauticoBundle\Entity\Cliente();
        $cliente->setStatus($status);
        $cliente->setEmpresa($empresa_obj);
        $cliente->setUsuario($user);
        
        $manager->persist($cliente);
        

        // -- Cargar Aeronave----------------------------------------
        $aeronave_array=array(
            "siglas"=>"YV",
            "certificado"=>new \DateTime(),
            "serial"=>"yv-255",
            "horastt"=>52,
            "horametro"=>15.21,
            "ciclos"=>20.3,
            "cliente"=>$cliente,
            "tipoAeronave"=>$tipo_aeronave,
            "createAt"=>new \DateTime('2011-07-01'),
            "updateAt"=>new \DateTime('2011-08-01')            
        );        
           $aeronave_obj=new \Taller\AeronauticoBundle\Entity\Aeronave();
            foreach ($aeronave_array as $propiedad => $valor) 
             $aeronave_obj->{'set'.ucfirst($propiedad)}($valor);
             
           
        $manager->persist($aeronave_obj);
        
        // -- Cargar Componentes----------------------------------------
        $componentes_array=array(
            
                "descripcion"=>"Este componentes es el primero, cuya descripcion es sumamente larga.. veamos como se ve en la tabla",
                "horastt"=>32,
                "horastos"=>25,
                "serial"=>'829-comp',
                "ciclos"=>2.56,
                "frecuenciaDate"=>new \DateTime('2011-9-15'),
                "frecuenciaHours"=>25
  
            ); 

        // -- Cargar Categorias----------------------------------------
        
          $categorias= array ("Repuestos","Paracaidas","Partes");
		 foreach ($categorias as  $datos) {
	            $categoria = new \Taller\AeronauticoBundle\Entity\CategoriaComponente();
        	    $categoria->setNombre($datos);
	            $manager->persist($categoria);
		}

                // -- Cargar Tipo_Componente----------------------------------------
                    $tipo_componente = new \Taller\AeronauticoBundle\Entity\TipoComponente();
                    $tipo_componente->setNombre("Motor");
                    $tipo_componente->setIdParte("idP1");
                    $tipo_componente->setCategoriaComponente($categoria);
                    $manager->persist($tipo_componente);

                    
         $componente_obj=new \Taller\AeronauticoBundle\Entity\Componente();
            foreach ($componentes_array as $propiedad => $valor) 
             $componente_obj->{'set'.ucfirst($propiedad)}($valor);
             
             $componente_obj->setTipoComponente($tipo_componente);
             $componente_obj->setAeronave($aeronave_obj);
        
             $manager->persist($componente_obj);
             
         $cambio=new \Taller\AeronauticoBundle\Entity\Cambio();
         $cambio->setComponenteRemovido($componente_obj);
         $cambio->setMotivo("Motivo de la eliminacion");
             
         $manager->persist($cambio);




//finalmente se cargan los datos
            $manager->flush();        
            

            
            
    }//fin load


    public function getOrder()
    {
        return 1;
    }
    
}//fin class
*/