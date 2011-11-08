<?php

/* ConfigurationGralBundle::layout.html.twig */
class __TwigTemplate_6a1c7daac831cb06ed8d4410748729ae extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'titulo_page' => array($this, 'block_titulo_page'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Plantilla";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->renderParentBlock("stylesheets", $context, $blocks);
        echo "
        ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ab3a3bd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab3a3bd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compresed/compressed_main_1.css");
            // line 12
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "ab3a3bd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab3a3bd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compresed/compressed_menu_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "ab3a3bd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab3a3bd_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compresed/compressed_jquery-ui_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "ab3a3bd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab3a3bd") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compresed/compressed.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        // line 21
        echo "       <div  id=\"menu\" class=\"grid_16 \" >
            ";
        // line 22
        echo $this->env->getExtension('knp_menu')->render("ConfigurationGralBundle:Builder:MenuPrincipal");
        echo " 
            <div id=\"copyright\" style=\"display:none\">Copyright &copy; 2011 <a href=\"http://apycom.com/\" >Apycom jQuery Menus</a></div>
        </div>
    ";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "    <div id=\"header\" class=\"grid_16 \" >
       <center> <h1> ========= Aqui va un banner HEADER ===============</h1> </center>
    </div>
    <div class=\"clear\"></div>
    ";
        // line 20
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "    <div class=\"clear\"></div>
";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "     <noscript>
        <h1> Por Favor Active el Javascript en su Navegador para el buen Funcionamiento de este Modulo</h1>
     </noscript>
        ";
        // line 33
        $this->displayBlock('titulo_page', $context, $blocks);
        echo "
";
    }

    // line 36
    public function block_titulo_page($context, array $blocks = array())
    {
        // line 37
        echo "        <h1> ";
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>
    ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "         ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ad3f819_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad3f819_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compresed/compressed_jquery_1.js");
            // line 46
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\"></script>
        ";
            // asset "ad3f819_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad3f819_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compresed/compressed_menu_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\"></script>
        ";
            // asset "ad3f819_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad3f819_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compresed/compressed_global.twig_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\"></script>
        ";
            // asset "ad3f819_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad3f819_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compresed/compressed_jquery-ui_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\"></script>
        ";
        } else {
            // asset "ad3f819"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad3f819") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compresed/compressed.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "ConfigurationGralBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
