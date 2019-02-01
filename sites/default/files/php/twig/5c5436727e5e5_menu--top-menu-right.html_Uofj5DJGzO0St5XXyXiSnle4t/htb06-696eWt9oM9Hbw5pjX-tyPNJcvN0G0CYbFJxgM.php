<?php

/* themes/mytheme/templates/navigation/menu--top-menu-right.html.twig */
class __TwigTemplate_fb63b1ebd0522cc9964209068db2d5077a9af3568dc4f2b06b23786b0789cad8 extends Twig_Template
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
        $tags = array("set" => 2, "for" => 4);
        $filters = array("replace" => 11);
        $functions = array("simplify_menu" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for'),
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

        // line 2
        $context["menu3"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), array("top-menu-right"));
        echo " 
";
        // line 4
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["menu3"] ?? null), "menu_tree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 6
            echo "          ";
            // line 7
            echo "          <span class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["menu_item"], "text", array()), "html", null, true));
            echo "<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "submenu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["resource_item"]) {
                // line 11
                echo "                  <li value=";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["resource_item"], "text", array()), array(" " => "")), "html", null, true));
                echo "><a href=\"#\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["resource_item"], "text", array()), "html", null, true));
                echo "</a></li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                </ul>
           </span> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                 
";
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/navigation/menu--top-menu-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  77 => 13,  66 => 11,  62 => 10,  57 => 8,  54 => 7,  52 => 6,  47 => 4,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% set menu3 = simplify_menu('top-menu-right') %} 
{#{{ kint(menu3.menu_tree[0].submenu) }}#}
      {% for menu_item in menu3.menu_tree %}
{#          {{ kint(menu_item) }}#}
          {# loop country dropdown and remove white spaces from string #}
          <span class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">{{ menu_item.text }}<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for resource_item in menu_item.submenu %}
                  <li value={{ resource_item.text|replace({' ': ''}) }}><a href=\"#\">{{ resource_item.text }}</a></li>
                  {% endfor %}
                </ul>
           </span> 
        {% endfor %}
                 
{#             <div class=\"container\">

  <li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">My account     <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li><a href=\"#\">Action</a></li>
      <li><a href=\"#\">Another action</a></li>
      <li><a href=\"#\">Something else here</a></li>
      <li class=\"divider\"></li>
      <li><a href=\"#\">Separated link</a></li>
    </ul>
  </li>

</div>
             <div class=\"container\">

  <li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">My account     <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li><a href=\"#\">Action</a></li>
      <li><a href=\"#\">Another action</a></li>
      <li><a href=\"#\">Something else here</a></li>
      <li class=\"divider\"></li>
      <li><a href=\"#\">Separated link</a></li>
    </ul>
  </li>

</div>
             <div class=\"container\">

  <li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">My account     <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li><a href=\"#\">Action</a></li>
      <li><a href=\"#\">Another action</a></li>
      <li><a href=\"#\">Something else here</a></li>
      <li class=\"divider\"></li>
      <li><a href=\"#\">Separated link</a></li>
    </ul>
  </li>

</div>
             <div class=\"container\">

  <li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">My account     <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li><a href=\"#\">Action</a></li>
      <li><a href=\"#\">Another action</a></li>
      <li><a href=\"#\">Something else here</a></li>
      <li class=\"divider\"></li>
      <li><a href=\"#\">Separated link</a></li>
    </ul>
  </li>

</div>#}", "themes/mytheme/templates/navigation/menu--top-menu-right.html.twig", "D:\\xampp\\htdocs\\mobilemini\\themes\\mytheme\\templates\\navigation\\menu--top-menu-right.html.twig");
    }
}
