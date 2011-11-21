<?php
namespace Gobernacion\RrhhBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Configuration\GralBundle\Resources\util\Util;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Gobernacion\rrhhBundle\Entity\Persona,
    Gobernacion\rrhhBundle\Entity\NivelAcademico,
    Gobernacion\rrhhBundle\Entity\Status,
    Gobernacion\rrhhBundle\Entity\CatStatus,
    Gobernacion\rrhhBundle\Entity\Parentezco,
    Gobernacion\rrhhBundle\Entity\EstadoCivil,
    Gobernacion\rrhhBundle\Entity\TipoFuncionario,
    Gobernacion\rrhhBundle\Entity\Cargos,
    Gobernacion\rrhhBundle\Entity\CargosDependencia,
    Gobernacion\rrhhBundle\Entity\Direccion,
    Gobernacion\rrhhBundle\Entity\Dependencia,
    Gobernacion\rrhhBundle\Entity\TitulosPersona,
    Gobernacion\rrhhBundle\Entity\FuncionarioCargosDependencia,
    Gobernacion\rrhhBundle\Entity\Permiso,
    Gobernacion\rrhhBundle\Entity\Funcionario,
    Gobernacion\rrhhBundle\Entity\Reposo,
    Gobernacion\rrhhBundle\Entity\Beneficiario,
    Gobernacion\rrhhBundle\Entity\Titulos;

class LoadInicial_RRHH extends AbstractFixture implements OrderedFixtureInterface,ContainerAwareInterface
{

    protected $manager;
    protected   $cantidad=50;

    private $container;
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    
    public function load($manager)
    {
                
        $this->manager = $manager;

      $datos_personales=array(
					'nombres'=>array(
							  	 'Adán', 'Adolfo', 'Agustin', 'Albert', 'Alberto', 'Alejandro',
								 'Andrés', 'Antonio', 'Ariel', 'Benjamin', 'Bernardo', 'Carles',
								 'Carlos', 'Cayetano', 'César', 'Cristian', 'Daniel', 'David',
								 'Diego', 'Dimas', 'Eduardo', 'Eneko', 'Esteban', 'Fernando',
								 'Francisco', 'Gonzalo', 'Gregorio', 'Guillermo', 'Haritz', 'Iago',
								 'Ignacio', 'Iker', 'Isaïes', 'Isis', 'Iván', 'Jacob', 'Javier',
								 'Joan', 'Jordi', 'Jorge', 'Jose', 'Juan', 'Kevin', 'Luis', 'Marc',
								 'Marta', 'Miguel', 'Moisés', 'Oriol', 'Oscar', 'Pablo', 'Pedro',
								 'Pere', 'Rafael', 'Raúl', 'Rebeca', 'Rosa', 'Rubén', 'Salvador',
								 'Santiago', 'Sergio', 'Susana', 'Verónica', 'Vicente', 'Víctor',
								 'Victoria', 'Vidal'),
					'apellidos'=>array(
								  'García', 'Fernández', 'González', 'Rodríguez', 'López', 'Martínez',
								  'Sánchez', 'Pérez', 'Martín', 'Gómez', 'Jiménez', 'Ruiz', 'Hernández',
								  'Díaz', 'Moreno', 'Álvarez', 'Muñoz', 'Romero', 'Alonso', 'Gutiérrez',
								  'Navarro', 'Torres', 'Domínguez', 'Vázquez', 'Gil', 'Ramos', 'Serrano',
								  'Blanco', 'Ramírez', 'Molina', 'Suárez', 'Ortega', 'Delgado', 'Morales',
								  'Castro', 'Rubio', 'Ortíz', 'Marín', 'Sanz', 'Iglesias', 'Núñez',
								  'Garrido', 'Cortés', 'Medina', 'Santos', 'Lozano', 'Cano', 'Castillo',
								  'Gerrero', 'Prieto')
              			 );

             $NivelAcademico=array('Ninguno','Basico','Medio','Universitario');
             $Cat_Status=array('Academico','Persona','Documentos','Lateralidad');
             $Status_array=array(
					0=>array('Culminado','Sin Culminar'),
				        1=>array('Activo(a)','Inactivo(a)'),
					2=>array('Anulado','Activo'),
                                        3=>array('Zurdo(a)','Derecho(a)')
				);

             
             $EdoCivil=array('Soltero(a)','Casado(a)');
             $Parent=array('Padre','Madre','Hijo(a)','Esposo(a)','Conyugue','Hermano(a)');
             $TipoFun=array('Fijo(a)','Contratado(a)','Comision');
             $Titulos=array('Ing en Informatica','Lic en Contabilidad','Ing Electrico');
             $Direccion=array('Tecnologia y Sistemas','Recursos Humanos');
             $Cargos=array('Tecnico I','Desarrollo de Aplicaciones','Analista I','Programador I','Diseñador','Confeccionista','Director','Secretario','Servicio General','Obrero','Seguridad');
             $Dependencia=array(
					0=>array('Desarrollo','Soporte Tecnico'),
				        1=>array('Administracion de Personas','Soporte Tecnico')	
				);

        // -- Cargar cat Status ----------------------------------------
        foreach ($Cat_Status as $key=>$nombre)
        {
                $CatStatus_obj=new CatStatus();
                $CatStatus_obj->setNombre($nombre);
                $this->addReference("cat_".$key, $CatStatus_obj);
                $manager->persist($CatStatus_obj);
            
        }


        // -- Cargar Status ----------------------------------------
        foreach ($Status_array as $key_cat=>$status)
        { 
		foreach ($status as $key=>$nombre)
	        {
		        $status_obj=new Status();
		        $status_obj->setNombre($nombre);
		        $this->addReference("status_".$key_cat."-".$key, $status_obj);
			$status_obj->setCatStatus($manager->merge($this->getReference("cat_".$key_cat)));
		        $manager->persist($status_obj);
        	}    
        }


        foreach ($NivelAcademico as $key_nivel=>$nombre)
        {
                $NivelAcademico_obj=new NivelAcademico();
                $NivelAcademico_obj->setNombre($nombre);
                $this->addReference("nivel_".$key_nivel, $NivelAcademico_obj);
                $manager->persist($NivelAcademico_obj);
            
        }

        foreach ($EdoCivil as $key_EdoCivil=>$nombre)
        {
                $EdoCivil_obj=new EstadoCivil();
                $EdoCivil_obj->setNombre($nombre);
                $this->addReference("edo_".$key_EdoCivil, $EdoCivil_obj);
                $manager->persist($EdoCivil_obj);
            
        }

        foreach ($Parent as $key_Parent=>$nombre)
        {
                $Parent_obj=new Parentezco();
                $Parent_obj->setNombre($nombre);
                $this->addReference("parent_".$key_Parent,$Parent_obj);
                $manager->persist($Parent_obj);
            
        }

	foreach ($TipoFun as $key_TipoFun=>$nombre)
        {
                $TipoFun_obj=new TipoFuncionario();
                $TipoFun_obj->setNombre($nombre);
                $this->addReference("tipofun_".$key_TipoFun,$TipoFun_obj);
                $manager->persist($TipoFun_obj);
            
        }
        
        foreach ($Titulos as $key_titulos=>$nombre)
        {
                $Titulos_obj= new Titulos();
                $Titulos_obj->setNombre($nombre);
                $this->addReference("titulos_".$key_titulos, $Titulos_obj);
                $manager->persist($Titulos_obj);
            
        }
     
        foreach ($Direccion as $key_direccion=>$nombre)
        {
                $Direccion_obj= new Direccion();
                $Direccion_obj->setNombre($nombre);
                $this->addReference("direccion_".$key_direccion, $Direccion_obj);
                $manager->persist($Direccion_obj);
            
        }

        // -- Cargar Dependencia ----------------------------------------
        foreach ($Dependencia as $key_dir=>$dir)
        { 
		foreach ($dir as $key_d=>$nombre)
	        {
		        $Dependencia_obj=new Dependencia();
		        $Dependencia_obj->setNombre($nombre);
		        $this->addReference("dependencia_".$key_dir."-".$key_d, $Dependencia_obj);
			$Dependencia_obj->setDireccion($manager->merge($this->getReference("direccion_".$key_dir)));
		        $manager->persist($Dependencia_obj);
        	}    
        }

        foreach ($Cargos as $key_cargos=>$nombre)
        {
                $Cargos_obj=new Cargos();
                $Cargos_obj->setNombre($nombre);
                $Cargos_obj->setSueldo(rand(1200,5000));
                $this->addReference("cargos_".$key_cargos, $Cargos_obj);
                $manager->persist($Cargos_obj);
            
        }

        for ($i=0 ;$i<7;$i++)
        {
                $Cargos_dep=new CargosDependencia();
	        $Cargos_dep->setCargos($manager->merge($this->getReference("cargos_".$i)));
	        $Cargos_dep->setDependencia($manager->merge($this->getReference("dependencia_".rand(0,1)."-".rand(0,1))));
                $this->addReference("cargos_Dep".$i, $Cargos_dep);
                $manager->persist($Cargos_dep);
            
        }


       for($i=1;$i<=$this->cantidad;$i++)
        {

            $persona_obj = new Persona();
            $persona_obj->setCedula(18543906+$i);
            $persona_obj->setSexo(rand(0,1)?'M':"F");
            $persona_obj->setNombre($datos_personales['nombres'][rand(0, count($datos_personales['nombres'])-1)]);
            $persona_obj->setApellido(
                $datos_personales['apellidos'][rand(0, count($datos_personales['apellidos'])-1)].
                ' '.
                $datos_personales['apellidos'][rand(0, count($datos_personales['apellidos'])-1)]
            );

	    $persona_obj->setFchCre(new \DateTime('2011-08-01'));
	    $persona_obj->setFchModif(new \DateTime('2011-11-08'));
            
            $persona_obj->setNivelAcademico($manager->merge($this->getReference("nivel_".rand(0,3))));
	    $persona_obj->setStatus($manager->merge($this->getReference("status_1-".rand(0,1))));

            $manager->persist($persona_obj);

	    //llenado titulos-persona
           
	    $titulos_persona=new TitulosPersona();
	    $titulos_persona->setTitulos($manager->merge($this->getReference("titulos_".rand(0,2))));
	    $titulos_persona->setPersona($persona_obj);
	    $titulos_persona->setStatus($manager->merge($this->getReference("status_0-".rand(0,1))));
            $manager->persist($titulos_persona);

		if($i<=20)
		{
			$funcionario=new Funcionario();
			$funcionario->setPersona($persona_obj);
			$funcionario->setFchIngreso(new \DateTime(rand(1988,2010).'-'.rand(1,12).'-'.rand(1,28)));
			$funcionario->setEstadoCivil($manager->merge($this->getReference("edo_".rand(0,1))));
			$funcionario->setStatus($manager->merge($this->getReference("status_1-".rand(0,1))));
			$funcionario->setLateralidad($manager->merge($this->getReference("status_3-".rand(0,1))));
			$funcionario->setVivienda((rand(0,1)?TRUE:FALSE));
			$funcionario->setVehiculo((rand(0,1)?TRUE:FALSE));
			$funcionario->setTipoFuncionario($manager->merge($this->getReference("tipofun_".rand(0,2))));
	                $this->addReference("Funcionario".$i, $funcionario);
		   $manager->persist($funcionario);

			//FuncionarioCargosDependencia

		   $FuncCDep = new FuncionarioCargosDependencia();
		   $FuncCDep->setSueldo((rand(0,3))?rand(1200,8000):NULL);
	           $FuncCDep->setFuncionario($funcionario);
	           $FuncCDep->setCargosDependencia($manager->merge($this->getReference("cargos_Dep".rand(0,6))));
		  $manager->persist($FuncCDep);
		}//fin $i<=20

		if($i>20)
		{
		  $benef=new Beneficiario();
		  $benef->setPersona($persona_obj);
		  $benef->setFuncionario($manager->merge($this->getReference("Funcionario".rand(1,20))));
		  $benef->setParentezco($manager->merge($this->getReference("parent_".rand(0,5))));
   	         $manager->persist($benef);
		}

         }

    //finalmente se cargan los datos
            $manager->flush();
   }//fin load

    public function getOrder()
    {
		//primero se carga el load de ConfigurationGral y luego este bundle
        return 2;
    }
    
}//fin class LoadInicial_RRHH
