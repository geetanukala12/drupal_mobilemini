<?php

/* themes/mytheme/templates/block/block--footerfeaturedbottom.html.twig */
class __TwigTemplate_113e0a183a8781c682aae1de6ea31bffb38b8e9cee3ee5f87dd897d4bd9ce0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 29, "if" => 38, "block" => 43);
        $filters = array("clean_class" => 31);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 29
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 31
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 32
($context["plugin_id"] ?? null))), 3 => "container-fluid");
        // line 36
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " >
  ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 38
        if (($context["label"] ?? null)) {
            // line 39
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 41
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
";
        // line 43
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "</div>
";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "      <div class=\"row content-div\">
          <div class=\"col-md-6\">
               ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_bottom_logo", array()), "html", null, true));
        echo "
          </div>
          <div class=\"col-md-6\">    
            <div class='row'>
                <div class='col-md-6'>
                    <h3> ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_title", array()), "html", null, true));
        echo " </h3>
                </div>
                <div class='col-md-6'>
                        <button type=\"button\" class=\"btn btn-primary btn-large\">
                            ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_quote_link", array()), "html", null, true));
        echo "
                        </button>
                </div>
            </div>
          </div>
      </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/block/block--footerfeaturedbottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 55,  95 => 51,  87 => 46,  83 => 44,  80 => 43,  75 => 62,  72 => 43,  67 => 41,  59 => 39,  57 => 38,  53 => 37,  48 => 36,  46 => 32,  45 => 31,  44 => 29,);
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
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'container-fluid'
  ]
%}
<div{{ attributes.addClass(classes)}} >
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
{#   {{ kint(content) }}#}
  {% block content %}
      <div class=\"row content-div\">
          <div class=\"col-md-6\">
               {{ content.field_bottom_logo }}
          </div>
          <div class=\"col-md-6\">    
            <div class='row'>
                <div class='col-md-6'>
                    <h3> {{ content.field_title }} </h3>
                </div>
                <div class='col-md-6'>
                        <button type=\"button\" class=\"btn btn-primary btn-large\">
                            {{ content.field_quote_link }}
                        </button>
                </div>
            </div>
          </div>
      </div>
  {% endblock %}
</div>
", "themes/mytheme/templates/block/block--footerfeaturedbottom.html.twig", "D:\\xampp\\htdocs\\mobilemini\\themes\\mytheme\\templates\\block\\block--footerfeaturedbottom.html.twig");
    }
}
