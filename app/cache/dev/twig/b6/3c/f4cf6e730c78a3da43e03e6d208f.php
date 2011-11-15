<?php

/* ::base.html.twig */
class __TwigTemplate_b63cf4cf6e730c78a3da43e03e6d208f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadesc' => array($this, 'block_metadesc'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageid' => array($this, 'block_pageid'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
  <title>Empresa | ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('metadesc', $context, $blocks);
        echo "\" /></meta>
  ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />  
</head>

<body id=\"";
        // line 22
        $this->displayBlock('pageid', $context, $blocks);
        echo "\">
    <div class=\"container_16\">
    <header>
    
    ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "
  </header>
  
     
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
             ";
        // line 33
        $this->displayBlock('footer', $context, $blocks);
        // line 40
        echo "   </div> 
        
  ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Plnatilla General";
    }

    // line 7
    public function block_metadesc($context, array $blocks = array())
    {
        echo "Descripcion general";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9b32ce3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b32ce3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compresed/960grid_reset_1.css");
            // line 14
            echo "                ";
            // line 16
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
    ";
            // asset "9b32ce3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b32ce3_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compresed/960grid_text_2.css");
            // line 14
            echo "                ";
            // line 16
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
    ";
            // asset "9b32ce3_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b32ce3_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compresed/960grid_960_3.css");
            // line 14
            echo "                ";
            // line 16
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
    ";
        } else {
            // asset "9b32ce3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b32ce3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compresed/960grid.css");
            // line 14
            echo "                ";
            // line 16
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "  ";
    }

    // line 22
    public function block_pageid($context, array $blocks = array())
    {
        echo "";
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        // line 34
        echo "                    <footer>
                        <a href=\"\">&copy; ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html");
        echo " - Taller Areonatico</a>
                        <a href=\"\"> Privacidad</a>
                        <a href=\"\"> Condiciones de uso</a>
                    </footer>
            ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
