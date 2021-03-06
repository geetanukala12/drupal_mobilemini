<?php

/* themes/mytheme/templates/layout/page.html.twig */
class __TwigTemplate_e1f2c9b44e098370d86d00ed5fa7422bfd9c0f9e449ec2ed31c807c944a07476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "block" => 79, "if" => 95);
        $filters = array("t" => 55);
        $functions = array("path" => 54);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('t'),
                array('path')
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

        // line 54
        $context["current_page"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>");
        // line 55
        echo "<header id=\"header\" class=\"header container-fluid\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
    <div class=\"section layout-container container clearfix\" id=\"header\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                ";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_side_menu", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-md-7\">
                ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_side_menu", array()), "html", null, true));
        echo "
            </div>                    
        </div>
    </div>

</header>
<div class=\"section layout-container container clearfix header-main-menu\" >
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo", array()), "html", null, true));
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()), "html", null, true));
        echo "
        </div>                    
    </div>
</div>
";
        // line 79
        $this->displayBlock('main', $context, $blocks);
        // line 107
        echo "
<div class=\"section layout-container  container clearfix\" >
       ";
        // line 109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
        echo "                  
</div>


";
        // line 113
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 79
    public function block_main($context, array $blocks = array())
    {
        // line 80
        echo "    <div role=\"main\" class=\"main-container container\">
        <section";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">
            ";
        // line 83
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 104
        echo "        </section>
    </div>
";
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
        // line 84
        echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                        </div>
                        <div class=\"col-md-3\">
";
        // line 94
        echo " testetetetete ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_side_content", array()), "html", null, true));
        echo "
                            ";
        // line 95
        if (twig_in_filter("standard_width_containers", ($context["current_page"] ?? null))) {
            // line 97
            echo "                              
                            ";
        }
        // line 99
        echo "                        </div>                    
                    </div>  
                </div>

            ";
    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        // line 114
        echo "    <footer class=\"footer container-fluid bg-dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_left", array()), "html", null, true));
        echo "
                </div>
                <div class=\"col-md-2\">
                    ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu1", array()), "html", null, true));
        echo "
                </div> 
                <div class=\"col-md-2\">
                    ";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu2", array()), "html", null, true));
        echo "
                </div> 
                <div class=\"col-md-2\">
                    ";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu3", array()), "html", null, true));
        echo "
                </div> 
                <div class=\"col-md-3\">
                    ";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_right", array()), "html", null, true));
        echo "
                </div> 
            </div>


            ";
        // line 135
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "

        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 135,  189 => 130,  183 => 127,  177 => 124,  171 => 121,  165 => 118,  159 => 114,  156 => 113,  148 => 99,  144 => 97,  142 => 95,  137 => 94,  131 => 87,  126 => 84,  123 => 83,  117 => 104,  114 => 83,  110 => 81,  107 => 80,  104 => 79,  100 => 113,  93 => 109,  89 => 107,  87 => 79,  80 => 74,  74 => 71,  62 => 62,  56 => 59,  48 => 55,  46 => 54,);
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
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set current_page = path('<current>') %}
<header id=\"header\" class=\"header container-fluid\" role=\"banner\" aria-label=\"{{ 'Site header'|t }}\">
    <div class=\"section layout-container container clearfix\" id=\"header\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                {{ page.right_side_menu }}
            </div>
            <div class=\"col-md-7\">
                {{ page.left_side_menu }}
            </div>                    
        </div>
    </div>

</header>
<div class=\"section layout-container container clearfix header-main-menu\" >
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ page.logo }}
        </div>
        <div class=\"col-md-6\">
            {{ page.menu }}
        </div>                    
    </div>
</div>
{# Main #}
{% block main %}
    <div role=\"main\" class=\"main-container container\">
        <section{{ content_attributes.addClass(content_classes) }}>
            {# Main Content  #}
            {% block content %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            {{ page.content }}
                        </div>
                        <div class=\"col-md-3\">
{#                         {{ kint(page.left_side_content) }}#}
{#                         {{ page.left_side_content['views_block__content_recent_block_1_2']}}#}
{#                         {{ page.left_side_content }}#}
{#                                {{ page.left_side_content }}#}
{#    {{ kint(current_page) }} #} testetetetete {{ page.left_side_content }}
                            {% if ('standard_width_containers' in current_page) %}
{#                                {{ kint(page.left_side_content) }}#}
                              
                            {% endif %}
                        </div>                    
                    </div>  
                </div>

            {% endblock %}
        </section>
    </div>
{% endblock %}

<div class=\"section layout-container  container clearfix\" >
       {{ page.featured_bottom }}                  
</div>


{% block footer %}
    <footer class=\"footer container-fluid bg-dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    {{ page.footer_left }}
                </div>
                <div class=\"col-md-2\">
                    {{ page.footer_menu1 }}
                </div> 
                <div class=\"col-md-2\">
                    {{ page.footer_menu2 }}
                </div> 
                <div class=\"col-md-2\">
                    {{ page.footer_menu3 }}
                </div> 
                <div class=\"col-md-3\">
                    {{ page.footer_right }}
                </div> 
            </div>


            {{ page.footer }}

        </div>
    </footer>
{% endblock %}", "themes/mytheme/templates/layout/page.html.twig", "D:\\xampp\\htdocs\\mobilemini\\themes\\mytheme\\templates\\layout\\page.html.twig");
    }
}
