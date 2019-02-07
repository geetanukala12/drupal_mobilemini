<?php

/* core/themes/classy/templates/content-edit/filter-caption.html.twig */
class __TwigTemplate_dba6cc46df9049270a29c0605d8873dacda5fbc9ba338348e0b381dc25a28ac3 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 15
        echo "<figure role=\"group\" class=\"caption caption-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tag"] ?? null), "html", null, true));
        if (($context["classes"] ?? null)) {
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["classes"] ?? null), "html", null, true));
        }
        echo "\">
";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node"] ?? null), "html", null, true));
        echo "
<figcaption>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true));
        echo "</figcaption>
</figure>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/filter-caption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  52 => 16,  43 => 15,);
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
 * Theme override for a filter caption.
 *
 * Returns HTML for a captioned image, audio, video or other tag.
 *
 * Available variables
 * - string node: The complete HTML tag whose contents are being captioned.
 * - string tag: The name of the HTML tag whose contents are being captioned.
 * - string caption: The caption text.
 * - string classes: The classes of the captioned HTML tag.
 */
#}
<figure role=\"group\" class=\"caption caption-{{ tag }}{%- if classes %} {{ classes }}{%- endif %}\">
{{ node }}
<figcaption>{{ caption }}</figcaption>
</figure>
", "core/themes/classy/templates/content-edit/filter-caption.html.twig", "D:\\xampp\\htdocs\\mobilemini\\core\\themes\\classy\\templates\\content-edit\\filter-caption.html.twig");
    }
}
