<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_eb533d0563d5098bc78c3e76eeb77781 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "LOGIN";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo " ";
        echo $this->renderParentBlock("stylesheets", $context, $blocks);
        echo "
        ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4657d2c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4657d2c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/login_tripoli_1.css");
            // line 9
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "4657d2c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4657d2c_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/login_login_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "4657d2c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4657d2c") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/login.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 29
        echo "\t\t    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "        <div id=\"bd-login-form\" class=\"grid_16 \">
\t\t<div id=\"msj_header\">
\t\t    ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "\t\t        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false)), "FOSUserBundle"), "html");
            echo " |
\t\t        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html");
            echo "\">
\t\t            ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html");
            echo "
\t\t        </a>
\t\t    ";
        }
        // line 22
        echo "\t\t</div>
 \t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "getFlashes", array(), "method", false));
        foreach ($context['_seq'] as $context['key'] => $context['message']) {
            // line 24
            echo "\t\t\t<div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'key'), "html");
            echo "\">
\t\t\t    ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'message'), array(), "FOSUserBundle"), "html");
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "\t\t    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
