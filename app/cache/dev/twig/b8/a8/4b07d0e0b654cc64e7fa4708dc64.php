<?php

/* ConfigurationGralBundle:Welcome:index.html.twig */
class __TwigTemplate_b8a84b07d0e0b654cc64e7fa4708dc64 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("ConfigurationGralBundle::layout.html.twig");
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
        echo "Portada";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <br/> <center><h1>Bienvenido</h1></center>
";
    }

    public function getTemplateName()
    {
        return "ConfigurationGralBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
