Proyecto PLANTILLA
==================

Este repositorio alberga el código fuente del proyecto que se esta desarollando

Sobre la aplicación
-------------------

Se estima desarrollar una aplicacion que sea capaz de llevar el control del LOGIN Y DE LOS MENUES PARA APLICACIONES VENIDERAS

Instalación y configuración
---------------------------

#### Instalación ####

  1. Clona el repositorio `plantilla_sf2`  && cd plantilla_sf2`
  2. Ejecuta el comando  php `bin/vendors install`  para descargar
  o actualizar las librerías externas de ``Symfony2``. Este comando puede tardar
  un buen rato en completarse.
  
#### Configuración de la base de datos ####

Si quieres utilizar otros valores o tu base de datos no es MySQL, puedes 
configurarlo en las primeras líneas del archivo `app/config/parameters.ini`:

```ini
[parameters]
    database_driver   = pdo_mysql
    database_host     = localhost
    database_port     =
    database_name     = plantilla
    database_user     = root
    database_password = 123
```

Una vez configurado el acceso a la base de datos, tienes dos opciones para crear la base de datos,

### Ingenieria Inversa ###

```
Ya este paso no es necesario, porque las entidades estan creadas ve la paso ### Con ayuda de Doctrine Doctrine  ###

Restaurar la base de datos con ayuda del SQL que esta en data_base_SQL/Empresa_plantillasf2.sql

    Si las entidades no estivieran creadas

1. php app/console doctrine:mapping:convert yml ./src/Empresa/PlantillaBundle/Resources/config/doctrine/metadata/orm --from-database --force

2. php app/console doctrine:mapping:import PlantillaBundle annotation

3. php app/console doctrine:generate:entities PlantillaBundle


```

### Con ayuda de Doctrine Doctrine  ###

```
Como ya las entidades estan creadas

1. php app/console doctrine:database:create

2. php app/console doctrine:schema:create

3. php app/console doctrine:fixtures:load
    
    `Solamente tengo algunas tablas precargadas` Si quieres modificar puedes ver el archivo

    `/src/Empresa/PlantillaBundle/DataFixtures/ORM/`

```


### Configuración del servidor web ###

Para probar el proyecto fácilmente, es recomendable crear un *host virtual* en 
tu servidor web local. Añade en primer lugar la siguiente línea en el archivo 
`/etc/hosts`:

```
127.0.0.1    w2w.plantilla_sf2

```

Después, configura el *host* en el servidor web. Si utilizas por ejemplo 
Apache, debes añadir lo siguiente en su archivo de configuración:

```
# plantillasf2 2011
<VirtualHost *:80>
  DocumentRoot "/home/jean/Documentos/www/plantilla_sf2/web"
  ServerName    w2w.plantilla_sf2
  DirectoryIndex app_dev.php
  <Directory "/home/jean/Documentos/www/plantilla_sf2/web">
    AllowOverride All
    Allow from All
  </Directory>
</VirtualHost>

```

Para terminar, no olvides reiniciar el servidor web.

### Probando el proyecto ###

Después de la configuración anterior, ya puedes acceder al entorno de 
desarrollo de la aplicación en `http://w2w.plantilla_sf2/app_dev.php`. El 
entorno de producción es accesible en `http://w2w.plantilla_sf2/`

Si se produce algún error, es posible que el servidor web no tenga permiso de 
escritura en los directordesymfonyios de la caché y de los logs. Ejecuta `chmod -R 777 
/proyectos/desymfony/app/cache /proyectos/desymfony/app/logs` y el error ya no 
debería mostrarse.



`Al terminar puedes tener muchas ramas locales, pero los cambios que hagamos tratemos
en la rama desarrollo, y cuando todo este estable lo cambiamos a la master`

## PASOS: ##

```
    1. $ git checkout desarrollo
        
       1.1 Si quieres crear una nueva rama ->  $ git checkout -b Mi_rama
       
       1.2 Cuando estes listo, haces los commits que tengas que hacer, te cambias a 
            la rama desarrollo y haces un merge -> $ git checkout desarrollo && git merge Mi_rama 

    2. $ git push origin desarrollo    //para montar la informacion en el server github este comando
        puedes ser tambien $ git push

```

Sobre los autores
-----------------

El proyecto esta siendo desarrollado por:

```

  * Jean Mendoza (@rivasjeancarlos)

```
