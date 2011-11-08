<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _welcomeAcme
        if ($pathinfo === '/acme') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcomeAcme',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _assetic_4657d2c
        if ($pathinfo === '/css/login.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4657d2c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4657d2c',);
        }

        // _assetic_4657d2c_0
        if ($pathinfo === '/css/login_tripoli_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4657d2c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4657d2c_0',);
        }

        // _assetic_4657d2c_1
        if ($pathinfo === '/css/login_login_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4657d2c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_4657d2c_1',);
        }

        // _assetic_081eeec
        if ($pathinfo === '/css/compresed/compressed.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '081eeec',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_081eeec',);
        }

        // _assetic_081eeec_0
        if ($pathinfo === '/css/compresed/compressed_main_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '081eeec',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_081eeec_0',);
        }

        // _assetic_081eeec_1
        if ($pathinfo === '/css/compresed/compressed_menu_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '081eeec',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_081eeec_1',);
        }

        // _assetic_081eeec_2
        if ($pathinfo === '/css/compresed/compressed_jquery-ui_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '081eeec',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_081eeec_2',);
        }

        // _assetic_ef8a279
        if ($pathinfo === '/js/compresed/compressed.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef8a279',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ef8a279',);
        }

        // _assetic_ef8a279_0
        if ($pathinfo === '/js/compresed/compressed_jquery_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef8a279',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ef8a279_0',);
        }

        // _assetic_ef8a279_1
        if ($pathinfo === '/js/compresed/compressed_menu_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef8a279',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ef8a279_1',);
        }

        // _assetic_ef8a279_2
        if ($pathinfo === '/js/compresed/compressed_global.twig_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef8a279',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ef8a279_2',);
        }

        // _assetic_ef8a279_3
        if ($pathinfo === '/js/compresed/compressed_jquery-ui_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef8a279',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ef8a279_3',);
        }

        // _assetic_44adec6
        if ($pathinfo === '/css/compresed/960grid.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '44adec6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_44adec6',);
        }

        // _assetic_44adec6_0
        if ($pathinfo === '/css/compresed/960grid_reset_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '44adec6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_44adec6_0',);
        }

        // _assetic_44adec6_1
        if ($pathinfo === '/css/compresed/960grid_text_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '44adec6',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_44adec6_1',);
        }

        // _assetic_44adec6_2
        if ($pathinfo === '/css/compresed/960grid_960_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '44adec6',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_44adec6_2',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // GobernacionRrhhBundle_homepage
        if (0 === strpos($pathinfo, '/rrhh/hello') && preg_match('#^/rrhh/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gobernacion\\RrhhBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'GobernacionRrhhBundle_homepage'));
        }

        // _homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_homepage');
            }
            return array (  '_controller' => 'Configuration\\GralBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_homepage',);
        }

        if (0 === strpos($pathinfo, '/config/menu')) {
            // config_menu
            if (rtrim($pathinfo, '/') === '/config/menu') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'config_menu');
                }
                return array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::indexAction',  '_route' => 'config_menu',);
            }

            // config_menu_show
            if (preg_match('#^/config/menu/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::showAction',)), array('_route' => 'config_menu_show'));
            }

            // config_menu_new
            if ($pathinfo === '/config/menu/new') {
                return array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::newAction',  '_route' => 'config_menu_new',);
            }

            // config_menu_create
            if ($pathinfo === '/config/menu/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_config_menu_create;
                }
                return array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::createAction',  '_route' => 'config_menu_create',);
            }
            not_config_menu_create:

            // config_menu_edit
            if (preg_match('#^/config/menu/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::editAction',)), array('_route' => 'config_menu_edit'));
            }

            // config_menu_update
            if (preg_match('#^/config/menu/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_config_menu_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::updateAction',)), array('_route' => 'config_menu_update'));
            }
            not_config_menu_update:

            // config_menu_delete
            if (preg_match('#^/config/menu/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_config_menu_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Configuration\\GralBundle\\Controller\\MenuController::deleteAction',)), array('_route' => 'config_menu_delete'));
            }
            not_config_menu_delete:

        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupname>[^/]+?)$#x', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',)), array('_route' => 'fos_user_group_show'));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupname>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',)), array('_route' => 'fos_user_group_edit'));
            }

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupname>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',)), array('_route' => 'fos_user_group_delete'));
            }
            not_fos_user_group_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
