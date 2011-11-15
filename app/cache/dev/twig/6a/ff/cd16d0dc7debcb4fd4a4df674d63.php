<?php

/* ConfigurationGralBundle:Menu:index.html.twig */
class __TwigTemplate_6affcd16d0dc7debcb4fd4a4df674d63 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de Items Menu";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"cuerpo grid_16 \" >
    ";
        // line 10
        echo $this->renderParentBlock("body", $context, $blocks);
        echo "
        <table>
            <thead>
                <tr>
                    <th min-width=7px>#</th>
                    <th>Nombre</th>
                    <th>Uri</th>
                    <th>Parent</th>
                    <th>Roles</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'entities'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['entity']) {
            // line 24
            echo "                <tr>
                    <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_menu_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
            echo "</a></td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "nombre", array(), "any", false), "html");
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "uri", array(), "any", false), "html");
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "parent", array(), "any", false), "html");
            echo "</td>
                    <td>
                        <ul> 
                            ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'entity'), "groups", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['key']) {
                // line 32
                echo "                            <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'key'), "name", array(), "any", false), "html");
                echo "
                                <ul>
                              ";
                // line 34
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'key'), "roles", array(), "any", false));
                foreach ($context['_seq'] as $context['key'] => $context['name']) {
                    // line 35
                    echo "                                   <li>
                                       ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
                    echo "
                                   </li>
                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 39
                echo "                                  </ul>
                             </li>                           
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 42
            echo "                       </ul>                    
                    </td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_menu_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_menu_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                   <tr>
                     <td colspan=\"6\"><h1><center>No existe ningún registro</center></h1></td>
                   </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_menu_new"), "html");
        echo "\" ><button class=\"add_button\" >Nuevo Menu</button></a>
                    </td>    
                </tr>
            </tfoot>
        </table>    
</div>
<div id=\"new_form\" style=\"display:none\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_menu_new"), "html");
        echo "\" ></div>    

                
";
    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        // line 76
        echo $this->renderParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                         \$( \".add_button\" ).button({ 
                               text: true
                         });
                        /* \$('#new_form').load(\$('#new_form').attr(\"href\")).dialog({
\t\t\t\t\tautoOpen: false,
\t\t\t\t\twidth: 980,
\t\t\t\t\tbuttons: {
\t\t\t\t\t\t\"Guardar\": function() { 
                                                    \$.post(\$('#new_form').attr(\"href\"), \$(\"form\").serializeArray() ,function(data) {
                                                      \$.mesages_validation(data);                                                      
                                                    });
\t\t\t\t\t\t}, 
\t\t\t\t\t\t\"Cancelar\": function() { 
\t\t\t\t\t\t\t\$(this).dialog(\"close\"); 
\t\t\t\t\t\t} 
\t\t\t\t\t}
\t\t\t\t});

                         \$(\".add_button\").click(function(){
                             \$('#new_form').dialog('open');
                             return false;
                        });*/
            });
            
        </script>
";
    }

    public function getTemplateName()
    {
        return "ConfigurationGralBundle:Menu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
