<?php

/* knp_menu.html.twig */
class __TwigTemplate_f028cf77f1872b2121a1d3906fa9347f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'linkElement_jean' => array($this, 'block_linkElement_jean'),
            'spanElement_jean' => array($this, 'block_spanElement_jean'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('children', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('item', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('linkElement', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('linkElement_jean', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('spanElement_jean', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('spanElement', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock('root', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 16
        if ((($this->getAttribute($this->getContext($context, 'item'), "hasChildren", array(), "any", false) && (!twig_test_sameas($this->getAttribute($this->getContext($context, 'options'), "depth", array(), "any", false), 0))) && $this->getAttribute($this->getContext($context, 'item'), "displayChildren", array(), "any", false))) {
            // line 17
            echo "    <ul";
            echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array($this->getAttribute($this->getContext($context, 'item'), "attributes", array(), "any", false), ), "method", false), "html");
            echo ">
        ";
            // line 18
            $this->displayBlock('children', $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 23
    public function block_children($context, array $blocks = array())
    {
        // line 25
        $context['currentOptions'] = $this->getContext($context, 'options');
        // line 26
        $context['currentItem'] = $this->getContext($context, 'item');
        // line 28
        if ((!twig_test_none($this->getAttribute($this->getContext($context, 'options'), "depth", array(), "any", false)))) {
            // line 29
            $context['options'] = twig_array_merge($this->getContext($context, 'currentOptions'), array("depth" => ($this->getAttribute($this->getContext($context, 'currentOptions'), "depth", array(), "any", false) - 1)));
        }
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'currentItem'), "children", array(), "any", false));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            // line 32
            echo "    ";
            $this->displayBlock('item', $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        $context['item'] = $this->getContext($context, 'currentItem');
        // line 36
        $context['options'] = $this->getContext($context, 'currentOptions');
    }

    // line 39
    public function block_item($context, array $blocks = array())
    {
        // line 40
        if ($this->getAttribute($this->getContext($context, 'item'), "displayed", array(), "any", false)) {
            // line 42
            $context['classes'] = (((!twig_test_empty($this->getAttribute($this->getContext($context, 'item'), "attribute", array("class", ), "method", false)))) ? (array(0 => $this->getAttribute($this->getContext($context, 'item'), "attribute", array("class", ), "method", false))) : (array()));
            // line 43
            if ($this->getAttribute($this->getContext($context, 'item'), "current", array(), "any", false)) {
                // line 44
                $context['classes'] = twig_array_merge($this->getContext($context, 'classes'), array(0 => $this->getAttribute($this->getContext($context, 'options'), "currentClass", array(), "any", false)));
            } elseif ($this->getAttribute($this->getContext($context, 'item'), "currentAncestor", array(), "any", false)) {
                // line 46
                $context['classes'] = twig_array_merge($this->getContext($context, 'classes'), array(0 => $this->getAttribute($this->getContext($context, 'options'), "ancestorClass", array(), "any", false)));
            }
            // line 48
            if ($this->getAttribute($this->getContext($context, 'item'), "actsLikeFirst", array(), "any", false)) {
                // line 49
                $context['classes'] = twig_array_merge($this->getContext($context, 'classes'), array(0 => $this->getAttribute($this->getContext($context, 'options'), "firstClass", array(), "any", false)));
            }
            // line 51
            if ($this->getAttribute($this->getContext($context, 'item'), "actsLikeLast", array(), "any", false)) {
                // line 52
                $context['classes'] = twig_array_merge($this->getContext($context, 'classes'), array(0 => $this->getAttribute($this->getContext($context, 'options'), "lastClass", array(), "any", false)));
            }
            // line 54
            $context['attributes'] = $this->getAttribute($this->getContext($context, 'item'), "attributes", array(), "any", false);
            // line 55
            if ((!twig_test_empty($this->getContext($context, 'classes')))) {
                // line 56
                $context['attributes'] = twig_array_merge($this->getContext($context, 'attributes'), array("class" => twig_join_filter($this->getContext($context, 'classes'), " ")));
            }
            // line 59
            echo "    ";
            // line 60
            echo "    <li>";
            // line 61
            if (((!twig_test_empty($this->getAttribute($this->getContext($context, 'item'), "uri", array(), "any", false))) && ((!$this->getAttribute($this->getContext($context, 'item'), "current", array(), "any", false)) || $this->getAttribute($this->getContext($context, 'options'), "currentAsLink", array(), "any", false)))) {
                // line 62
                echo "        ";
                // line 63
                echo "\t";
                $this->displayBlock('linkElement_jean', $context, $blocks);
            } else {
                // line 65
                echo "        ";
                // line 66
                echo "        ";
                $this->displayBlock('spanElement_jean', $context, $blocks);
            }
            // line 68
            if ((($this->getAttribute($this->getContext($context, 'item'), "hasChildren", array(), "any", false) && (!twig_test_sameas($this->getAttribute($this->getContext($context, 'options'), "depth", array(), "any", false), 0))) && $this->getAttribute($this->getContext($context, 'item'), "displayChildren", array(), "any", false))) {
                // line 69
                $context['childrenClasses'] = (((!twig_test_empty($this->getAttribute($this->getContext($context, 'item'), "childrenAttribute", array("class", ), "method", false)))) ? (array(0 => $this->getAttribute($this->getContext($context, 'item'), "childrenAttribute", array("class", ), "method", false))) : (array()));
                // line 70
                $context['childrenClasses'] = twig_array_merge($this->getContext($context, 'childrenClasses'), array(0 => ("menu_level_" . $this->getAttribute($this->getContext($context, 'item'), "level", array(), "any", false))));
                // line 71
                $context['childrenAttributes'] = twig_array_merge($this->getAttribute($this->getContext($context, 'item'), "childrenAttributes", array(), "any", false), array("class" => twig_join_filter($this->getContext($context, 'childrenClasses'), " ")));
                // line 72
                echo "            <div><ul";
                echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array($this->getContext($context, 'childrenAttributes'), ), "method", false), "html");
                echo ">
                ";
                // line 73
                $this->displayBlock('children', $context, $blocks);
                echo "
            </ul></div>";
            }
            // line 76
            echo "    </li>
";
        }
    }

    // line 80
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "uri", array(), "any", false), "html");
        echo "\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array($this->getAttribute($this->getContext($context, 'item'), "linkAttributes", array(), "any", false), ), "method", false), "html");
        echo ">";
        $this->displayBlock('label', $context, $blocks);
        echo "</a>";
    }

    // line 82
    public function block_linkElement_jean($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "uri", array(), "any", false), "html");
        echo "\" ";
        echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array($this->getContext($context, 'attributes'), ), "method", false), "html");
        echo " ><span>";
        $this->displayBlock('label', $context, $blocks);
        echo "</span></a>";
    }

    // line 84
    public function block_spanElement_jean($context, array $blocks = array())
    {
        echo "<a href=\"#\" ";
        echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array($this->getContext($context, 'attributes'), ), "method", false), "html");
        echo " ><span>";
        $this->displayBlock('label', $context, $blocks);
        echo "</span></a>";
    }

    // line 86
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array($this->getAttribute($this->getContext($context, 'item'), "labelAttributes", array(), "any", false), ), "method", false), "html");
        echo ">";
        $this->displayBlock('label', $context, $blocks);
        echo "</span>";
    }

    // line 88
    public function block_label($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "label", array(), "any", false), "html");
    }

    // line 1
    public function getattributes($attributes = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "attributes" => $attributes,
        ));

        ob_start();
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attributes'));
        foreach ($context['_seq'] as $context['name'] => $context['value']) {
            // line 3
            if (((!twig_test_none($this->getContext($context, 'value'))) && (!twig_test_sameas($this->getContext($context, 'value'), false)))) {
                // line 4
                echo sprintf(" %s=\"%s\"", $this->getContext($context, 'name'), ((twig_test_sameas($this->getContext($context, 'value'), true)) ? (twig_escape_filter($this->env, $this->getContext($context, 'name'))) : (twig_escape_filter($this->env, $this->getContext($context, 'value')))));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
