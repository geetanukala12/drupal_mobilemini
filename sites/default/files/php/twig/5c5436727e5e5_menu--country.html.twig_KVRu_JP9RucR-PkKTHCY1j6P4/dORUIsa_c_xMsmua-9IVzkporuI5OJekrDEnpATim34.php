<?php

/* themes/mytheme/templates/navigation/menu--country.html.twig */
class __TwigTemplate_f0e3bc05eef04d1a569fcb0942910add10767b31db0aa189d6a246140cc8c310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("import" => 21, "set" => 32, "for" => 35, "if" => 45);
        $filters = array("replace" => 37);
        $functions = array("simplify_menu" => 32);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'set', 'for', 'if'),
                array('replace'),
                array('simplify_menu')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo "


<!------------------------------multiple menus------------------->

";
        // line 32
        $context["menu3"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), array("country"));
        echo " 
<select id=\"country\">
        <option value=''>Select Country</option>
      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["menu3"] ?? null), "menu_tree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 36
            echo "          ";
            // line 37
            echo "     <option value=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["menu_item"], "text", array()), array(" " => "")), "html", null, true));
            echo ">  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["menu_item"], "text", array()), "html", null, true));
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " </select>
 
 ";
        // line 42
        echo " <select id=\"state\">  ";
        // line 43
        echo "    <option value=''>Select State</option>
 ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["menu3"] ?? null), "menu_tree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 45
            echo "     ";
            if ($this->getAttribute($context["menu_item"], "submenu", array())) {
                // line 46
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "submenu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                    // line 47
                    echo "        ";
                    // line 48
                    echo "   <option value=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["submenu"], "text", array()), array(" " => "")), "html", null, true));
                    echo " parent-country=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["menu_item"], "text", array()), array(" " => "")), "html", null, true));
                    echo ">  ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["submenu"], "text", array()), "html", null, true));
                    echo "</option>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "      ";
            }
            // line 51
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</select>

 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ";
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/navigation/menu--country.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 52,  117 => 51,  114 => 50,  101 => 48,  99 => 47,  94 => 46,  91 => 45,  87 => 44,  84 => 43,  82 => 42,  78 => 39,  67 => 37,  65 => 36,  61 => 35,  55 => 32,  48 => 27,  45 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}



<!------------------------------multiple menus------------------->

{% set menu3 = simplify_menu('country') %} 
<select id=\"country\">
        <option value=''>Select Country</option>
      {% for menu_item in menu3.menu_tree %}
          {# loop country dropdown and remove white spaces from string #}
     <option value={{ menu_item.text|replace({' ': ''}) }}>  {{ menu_item.text }}</option>
      {% endfor %}
 </select>
 
 {# state dropdown based on selected country value #}
 <select id=\"state\">  {#Add country name to custom attribute#}
    <option value=''>Select State</option>
 {% for menu_item in menu3.menu_tree %}
     {% if (menu_item.submenu) %}
    {% for submenu in menu_item.submenu %}
        {# loop states dropdown and remove white spaces from string #}
   <option value={{ submenu.text|replace({' ': ''}) }} parent-country={{ menu_item.text|replace({' ': ''}) }}>  {{  submenu.text  }}</option>
    {% endfor %}
      {% endif %}
     {% endfor %}
</select>

 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    {#<ul  class=\"mobile-menu nav-collapse collapse\">
    {% set menu3 = simplify_menu('mobile-menu') %}
      {% for menu_item in menu3.menu_tree if menu_item.text != \"Inaccessible\" %}
        <li class=\"\">
          <a href=\"{{ menu_item.url }}\">{{ menu_item.text }}</a>
          {% if (menu_item.submenu) %}
            <ul class=\"dropdown-menu\">
            {% for submenu in menu_item %}
                {% for items in submenu %}
                  <li><a href=\"{{ items.url }}\">{{ items.text }}</a>
                    {% if (items.submenu) %}
                      <ul class=\"dropdown-submenu\">
                        {% for item in items.submenu %}
                            <li><a href=\"{{ item.url }}\">{{ item.text }}</a></li>
                        {% endfor %}
                      </ul>
                    {% endif %}
                  </li>
                {% endfor %}
            {% endfor %}
            </ul>
          {% endif %}
        </li>
      {% endfor %}
    </ul>#}", "themes/mytheme/templates/navigation/menu--country.html.twig", "D:\\xampp\\htdocs\\mobilemini\\themes\\mytheme\\templates\\navigation\\menu--country.html.twig");
    }
}
