<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcomeAcme' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_assetic_4657d2c' => true,
       '_assetic_4657d2c_0' => true,
       '_assetic_4657d2c_1' => true,
       '_assetic_abfa510' => true,
       '_assetic_abfa510_0' => true,
       '_assetic_abfa510_1' => true,
       '_assetic_abfa510_2' => true,
       '_assetic_abfa510_3' => true,
       '_assetic_a26618a' => true,
       '_assetic_a26618a_0' => true,
       '_assetic_a26618a_1' => true,
       '_assetic_a26618a_2' => true,
       '_assetic_a26618a_3' => true,
       '_assetic_a26618a_4' => true,
       '_assetic_44adec6' => true,
       '_assetic_44adec6_0' => true,
       '_assetic_44adec6_1' => true,
       '_assetic_44adec6_2' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'GobernacionRrhhBundle_homepage' => true,
       'dep' => true,
       'dep_show' => true,
       'dep_new' => true,
       'dep_create' => true,
       'dep_edit' => true,
       'dep_update' => true,
       'dep_delete' => true,
       'dir' => true,
       'dir_show' => true,
       'dir_new' => true,
       'dir_create' => true,
       'dir_edit' => true,
       'dir_update' => true,
       'dir_delete' => true,
       'titulos' => true,
       'titulos_show' => true,
       'titulos_new' => true,
       'titulos_create' => true,
       'titulos_edit' => true,
       'titulos_update' => true,
       'titulos_delete' => true,
       'cargos' => true,
       'cargos_show' => true,
       'cargos_new' => true,
       'cargos_create' => true,
       'cargos_edit' => true,
       'cargos_update' => true,
       'cargos_delete' => true,
       '_homepage' => true,
       'config_menu' => true,
       'config_menu_show' => true,
       'config_menu_new' => true,
       'config_menu_create' => true,
       'config_menu_edit' => true,
       'config_menu_update' => true,
       'config_menu_delete' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
       'fos_user_group_list' => true,
       'fos_user_group_new' => true,
       'fos_user_group_show' => true,
       'fos_user_group_edit' => true,
       'fos_user_group_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeAcmeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/acme',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_assetic_4657d2cRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '4657d2c',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/login.css',  ),));
    }

    private function get_assetic_4657d2c_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '4657d2c',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/login_tripoli_1.css',  ),));
    }

    private function get_assetic_4657d2c_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '4657d2c',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/login_login_2.css',  ),));
    }

    private function get_assetic_abfa510RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'abfa510',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compresed/compressed.css',  ),));
    }

    private function get_assetic_abfa510_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'abfa510',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compresed/compressed_main_1.css',  ),));
    }

    private function get_assetic_abfa510_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'abfa510',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compresed/compressed_menu_2.css',  ),));
    }

    private function get_assetic_abfa510_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'abfa510',  'pos' => 2,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compresed/compressed_jquery-ui_3.css',  ),));
    }

    private function get_assetic_abfa510_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'abfa510',  'pos' => 3,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compresed/compressed_ui.achtung-min_4.css',  ),));
    }

    private function get_assetic_a26618aRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a26618a',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/compresed/compressed.js',  ),));
    }

    private function get_assetic_a26618a_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a26618a',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/compresed/compressed_jquery_1.js',  ),));
    }

    private function get_assetic_a26618a_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a26618a',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/compresed/compressed_menu_2.js',  ),));
    }

    private function get_assetic_a26618a_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a26618a',  'pos' => 2,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/compresed/compressed_global.twig_3.js',  ),));
    }

    private function get_assetic_a26618a_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a26618a',  'pos' => 3,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/compresed/compressed_jquery-ui_4.js',  ),));
    }

    private function get_assetic_a26618a_4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a26618a',  'pos' => 4,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/compresed/compressed_ui.achtung-min_5.js',  ),));
    }

    private function get_assetic_44adec6RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '44adec6',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compresed/960grid.css',  ),));
    }

    private function get_assetic_44adec6_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '44adec6',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compresed/960grid_reset_1.css',  ),));
    }

    private function get_assetic_44adec6_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '44adec6',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compresed/960grid_text_2.css',  ),));
    }

    private function get_assetic_44adec6_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '44adec6',  'pos' => 2,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compresed/960grid_960_3.css',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getGobernacionRrhhBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\RrhhController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/',  ),));
    }

    private function getdepRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DependenciaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/dep/',  ),));
    }

    private function getdep_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DependenciaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/dep',  ),));
    }

    private function getdep_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DependenciaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/dep/new',  ),));
    }

    private function getdep_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DependenciaController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/dep/create',  ),));
    }

    private function getdep_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DependenciaController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/dep',  ),));
    }

    private function getdep_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DependenciaController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/dep',  ),));
    }

    private function getdep_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DependenciaController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/dep',  ),));
    }

    private function getdirRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DireccionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/dir/',  ),));
    }

    private function getdir_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DireccionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/dir',  ),));
    }

    private function getdir_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DireccionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/dir/new',  ),));
    }

    private function getdir_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DireccionController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/dir/create',  ),));
    }

    private function getdir_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DireccionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/dir',  ),));
    }

    private function getdir_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DireccionController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/dir',  ),));
    }

    private function getdir_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DireccionController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/dir',  ),));
    }

    private function gettitulosRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\TitulosController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/titulos/',  ),));
    }

    private function gettitulos_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\TitulosController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/titulos',  ),));
    }

    private function gettitulos_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\TitulosController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/titulos/new',  ),));
    }

    private function gettitulos_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\TitulosController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/titulos/create',  ),));
    }

    private function gettitulos_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\TitulosController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/titulos',  ),));
    }

    private function gettitulos_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\TitulosController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/titulos',  ),));
    }

    private function gettitulos_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\TitulosController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/titulos',  ),));
    }

    private function getcargosRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\CargosController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/cargos/',  ),));
    }

    private function getcargos_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\CargosController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/cargos',  ),));
    }

    private function getcargos_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\CargosController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/cargos/new',  ),));
    }

    private function getcargos_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\CargosController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/rrhh/cargos/create',  ),));
    }

    private function getcargos_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\CargosController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/cargos',  ),));
    }

    private function getcargos_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\CargosController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/cargos',  ),));
    }

    private function getcargos_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\CargosController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rrhh/cargos',  ),));
    }

    private function get_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Configuration\\GralBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getconfig_menuRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/config/menu/',  ),));
    }

    private function getconfig_menu_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/config/menu',  ),));
    }

    private function getconfig_menu_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/config/menu/new',  ),));
    }

    private function getconfig_menu_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/config/menu/create',  ),));
    }

    private function getconfig_menu_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/config/menu',  ),));
    }

    private function getconfig_menu_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/config/menu',  ),));
    }

    private function getconfig_menu_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/config/menu',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/change-password/change-password',  ),));
    }

    private function getfos_user_group_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/group/list',  ),));
    }

    private function getfos_user_group_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/group/new',  ),));
    }

    private function getfos_user_group_showRouteInfo()
    {
        return array(array (  0 => 'groupname',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'groupname',  ),  1 =>   array (    0 => 'text',    1 => '/group',  ),));
    }

    private function getfos_user_group_editRouteInfo()
    {
        return array(array (  0 => 'groupname',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'groupname',  ),  2 =>   array (    0 => 'text',    1 => '/group',  ),));
    }

    private function getfos_user_group_deleteRouteInfo()
    {
        return array(array (  0 => 'groupname',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'groupname',  ),  2 =>   array (    0 => 'text',    1 => '/group',  ),));
    }
}
