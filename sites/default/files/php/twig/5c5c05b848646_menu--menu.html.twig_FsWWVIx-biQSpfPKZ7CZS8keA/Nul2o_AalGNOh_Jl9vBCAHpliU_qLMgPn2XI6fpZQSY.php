<?php

/* themes/mytheme/templates/navigation/menu--menu.html.twig */
class __TwigTemplate_6b3de1a8fec3f8e0f28e8e782c815fcab784410b25a82274eb8eba3f1915ff62 extends Twig_Template
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
        $tags = array("import" => 22, "set" => 32, "for" => 33);
        $filters = array("replace" => 39);
        $functions = array("simplify_menu" => 32);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'set', 'for'),
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
        echo "
";
        // line 22
        $context["menus"] = $this;
        // line 23
        echo "
";
        // line 28
        echo "


<!------------------------------multiple menus------------------->
";
        // line 32
        $context["menu3"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), array("menu"));
        echo " 
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["menu3"] ?? null), "menu_tree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 34
            echo "          ";
            // line 35
            echo "          <span class=\"dropdown dropdown_submenu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["menu_item"], "text", array()), "html", null, true));
            echo "<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "submenu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["resource_item"]) {
                // line 39
                echo "                  <li value=";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["resource_item"], "text", array()), array(" " => "")), "html", null, true));
                echo "><a href=\"#\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["resource_item"], "text", array()), "html", null, true));
                echo "</a>
                            <table>
                                ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["resource_item"], "submenu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["resource_sub_menu"]) {
                    // line 42
                    echo "                                     <tr>
                                    <td value=";
                    // line 43
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["resource_sub_menu"], "text", array()), array(" " => "")), "html", null, true));
                    echo "><a href=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["resource_sub_menu"], "url", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["resource_sub_menu"], "text", array()), "html", null, true));
                    echo "</a>
                                    </td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource_sub_menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                            </table>
                  </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </ul>
           </span> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                 ";
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/navigation/menu--menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  116 => 50,  108 => 47,  94 => 43,  91 => 42,  87 => 41,  79 => 39,  75 => 38,  70 => 36,  67 => 35,  65 => 34,  61 => 33,  57 => 32,  51 => 28,  48 => 23,  46 => 22,  43 => 21,);
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
{% set menu3 = simplify_menu('menu') %} 
      {% for menu_item in menu3.menu_tree %}
          {# loop product dropdown and remove white spaces from string #}
          <span class=\"dropdown dropdown_submenu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">{{ menu_item.text }}<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for resource_item in menu_item.submenu %}
                  <li value={{ resource_item.text|replace({' ': ''}) }}><a href=\"#\">{{ resource_item.text }}</a>
                            <table>
                                {% for resource_sub_menu in resource_item.submenu %}
                                     <tr>
                                    <td value={{ resource_sub_menu.text|replace({' ': ''}) }}><a href={{ resource_sub_menu.url }}>{{ resource_sub_menu.text }}</a>
                                    </td>
                                    </tr>
                                {% endfor %}
                            </table>
                  </li>
                  {% endfor %}
                </ul>
           </span> 
        {% endfor %}
                 ", "themes/mytheme/templates/navigation/menu--menu.html.twig", "D:\\xampp\\htdocs\\mobilemini\\themes\\mytheme\\templates\\navigation\\menu--menu.html.twig");
    }
}
