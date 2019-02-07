<?php

/* themes/mytheme/templates/field/field--field-bottom-logo.html.twig */
class __TwigTemplate_59c96e3e3a13813dff0bb309f5cacf27fbf53623cf1771eb03b6906bd7063e0c extends Twig_Template
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
        $tags = array("set" => 3, "if" => 17, "for" => 25);
        $filters = array("clean_class" => 5);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
                array()
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

        // line 3
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 5
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 6
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 7
($context["label_display"] ?? null)));
        // line 11
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 13
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 16
        echo "
";
        // line 17
        if (($context["label_hidden"] ?? null)) {
            // line 18
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 19
                echo "   ";
                // line 24
                echo "  ";
            } else {
                // line 25
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 27
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "  ";
            }
        } else {
            // line 30
            echo "   <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    <div";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</div>
    ";
            // line 32
            if (($context["multiple"] ?? null)) {
                // line 33
                echo "      <div class=\"field__items\">
    ";
            }
            // line 35
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 36
                echo "
      <div";
                // line 37
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 40
                echo "      </div>
    ";
            }
            // line 42
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/field/field--field-bottom-logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  117 => 40,  114 => 39,  104 => 37,  101 => 36,  96 => 35,  92 => 33,  90 => 32,  84 => 31,  79 => 30,  75 => 28,  69 => 27,  64 => 25,  61 => 24,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  49 => 13,  48 => 11,  46 => 7,  45 => 6,  44 => 5,  43 => 3,);
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
{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
  ]
%}
{%
  set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}

{% if label_hidden %}
  {% if multiple %}
   {# <div{{ attributes.addClass(classes, 'field__items') }}>
      {% for item in items %}
        <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
      {% endfor %}
    </div>#}
  {% else %}
    {% for item in items %}
{#      <div{{ attributes.addClass(classes, 'field__item') }}>{{ item.content }}</div>#}
    {% endfor %}
  {% endif %}
{% else %}
   <div{{ attributes.addClass(classes) }}>
    <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
    {% if multiple %}
      <div class=\"field__items\">
    {% endif %}
    {% for item in items %}

      <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
    {% endfor %}
    {% if multiple %}
      </div>
    {% endif %}
  </div>
{% endif %}", "themes/mytheme/templates/field/field--field-bottom-logo.html.twig", "D:\\xampp\\htdocs\\mobilemini\\themes\\mytheme\\templates\\field\\field--field-bottom-logo.html.twig");
    }
}
