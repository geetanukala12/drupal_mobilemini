<?php

/* themes/mytheme/templates/layout/page.html.twig */
class __TwigTemplate_e1f2c9b44e098370d86d00ed5fa7422bfd9c0f9e449ec2ed31c807c944a07476 extends Twig_Template
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
        $tags = array("if" => 93);
        $filters = array("t" => 55);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 53
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
        <div class=\"section layout-container clearfix\" id=\"header\">
            <div class=\"row\">
                    <div class=\"col-md-6\">
                      ";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_side_menu", array()), "html", null, true));
        echo "
                    </div>
                    <div class=\"col-md-6\">
                      ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_side_menu", array()), "html", null, true));
        echo "
                    </div>                    
            </div>
        </div>
      ";
        // line 79
        echo "    </header>
    ";
        // line 93
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 94
            echo "      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 100
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 101
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 107
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            <div class=\"section layout-container clearfix\" id=\"content\">
                    <div class=\"row\">
                            <div class=\"col-md-8\">
                              ";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                            </div>
                            <div class=\"col-md-4\">
                              ";
        // line 119
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_side_content", array()), "html", null, true));
        echo "
                            </div>                    
                    </div>
            </div>
          </section>
        </main>
        ";
        // line 125
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 126
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 128
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 132
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 133
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 139
        echo "      </div>
    </div>
    ";
        // line 141
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()))) {
            // line 142
            echo "      <div class=\"featured-bottom\">
        <aside class=\"layout-container clearfix\" role=\"complementary\">
          ";
            // line 144
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()), "html", null, true));
            echo "
          ";
            // line 145
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array()), "html", null, true));
            echo "
          ";
            // line 146
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 150
        echo "    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        ";
        // line 152
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 153
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 154
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
            ";
            // line 155
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
            ";
            // line 156
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
            ";
            // line 157
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 160
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
            // line 161
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 162
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 165
        echo "      </div>
    </footer>
  </div>
</div>

    
      
      
      
      
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
        return array (  218 => 165,  212 => 162,  209 => 161,  206 => 160,  200 => 157,  196 => 156,  192 => 155,  188 => 154,  185 => 153,  183 => 152,  179 => 150,  172 => 146,  168 => 145,  164 => 144,  160 => 142,  158 => 141,  154 => 139,  147 => 135,  143 => 133,  140 => 132,  133 => 128,  129 => 126,  127 => 125,  118 => 119,  112 => 116,  102 => 109,  98 => 107,  91 => 103,  87 => 101,  84 => 100,  77 => 96,  73 => 94,  70 => 93,  67 => 79,  60 => 62,  54 => 59,  47 => 55,  43 => 53,);
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
 * Bartik's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
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
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t }}\">
        <div class=\"section layout-container clearfix\" id=\"header\">
            <div class=\"row\">
                    <div class=\"col-md-6\">
                      {{ page.right_side_menu }}
                    </div>
                    <div class=\"col-md-6\">
                      {{ page.left_side_menu }}
                    </div>                    
            </div>
        </div>
      {#<div class=\"section layout-container clearfix\">
          <div class=\"row\">
                    <div class=\"col-md-6\">
                      {{ page.right_side_menu }}
                    </div>
                    <div class=\"col-md-6\">
                      {{ page.left_side_menu }}
                    </div>
                    <div class=\"section layout-container clearfix\">
                                    {{ page.primary_menu }}
                    </div>
            </div>
      </div>#}
    </header>
    {#<div class=\"section layout-container clearfix\" id=\"content\">
            <div class=\"row\">
                    <div class=\"col-md-3\">
                      {{ page.right_side_content }}
                    </div>
                    <div class=\"col-md-5\">
                      {{ page.content }}
                    </div>
                    <div class=\"col-md-4\">
                      {{ page.left_side_content }}
                    </div>                    
            </div>
    </div>#}
    {% if page.highlighted %}
      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          {{ page.highlighted }}
        </aside>
      </div>
    {% endif %}
    {% if page.featured_top %}
      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          {{ page.featured_top }}
        </aside>
      </div>
    {% endif %}
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        {{ page.breadcrumb }}
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            <div class=\"section layout-container clearfix\" id=\"content\">
                    <div class=\"row\">
                            <div class=\"col-md-8\">
                              {{ page.content }}
                            </div>
                            <div class=\"col-md-4\">
                              {{ page.left_side_content }}
                            </div>                    
                    </div>
            </div>
          </section>
        </main>
        {% if page.sidebar_first %}
          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_first }}
            </aside>
          </div>
        {% endif %}
        {% if page.sidebar_second %}
          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_second }}
            </aside>
          </div>
        {% endif %}
      </div>
    </div>
    {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
      <div class=\"featured-bottom\">
        <aside class=\"layout-container clearfix\" role=\"complementary\">
          {{ page.featured_bottom_first }}
          {{ page.featured_bottom_second }}
          {{ page.featured_bottom_third }}
        </aside>
      </div>
    {% endif %}
    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
          <div class=\"site-footer__top clearfix\">
            {{ page.footer_first }}
            {{ page.footer_second }}
            {{ page.footer_third }}
            {{ page.footer_fourth }}
          </div>
        {% endif %}
        {% if page.footer_fifth %}
          <div class=\"site-footer__bottom\">
            {{ page.footer_fifth }}
          </div>
        {% endif %}
      </div>
    </footer>
  </div>
</div>

    
      
      
      
      
{#<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Business Frontpage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"css/business-frontpage.css\" rel=\"stylesheet\">

  </head>

  <body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header with Background Image -->
    <header class=\"business-header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h1 class=\"display-3 text-center text-white mt-4\">Business Name or Tagline</h1>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

      <div class=\"row\">
        <div class=\"col-sm-8\">
          <h2 class=\"mt-4\">What We Do</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
          <p>
            <a class=\"btn btn-primary btn-lg\" href=\"#\">Call to Action &raquo;</a>
          </p>
        </div>
        <div class=\"col-sm-4\">
          <h2 class=\"mt-4\">Contact Us</h2>
          <address>
            <strong>Start Bootstrap</strong>
            <br>3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </address>
          <address>
            <abbr title=\"Phone\">P:</abbr>
            (123) 456-7890
            <br>
            <abbr title=\"Email\">E:</abbr>
            <a href=\"mailto:#\">name@example.com</a>
          </address>
        </div>
      </div>
      <!-- /.row -->

      <div class=\"row\">
        <div class=\"col-sm-4 my-4\">
          <div class=\"card\">
            <img class=\"card-img-top\" src=\"http://placehold.it/300x200\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Card title</h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 my-4\">
          <div class=\"card\">
            <img class=\"card-img-top\" src=\"http://placehold.it/300x200\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Card title</h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 my-4\">
          <div class=\"card\">
            <img class=\"card-img-top\" src=\"http://placehold.it/300x200\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Card title</h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  </body>

</html>#}
", "themes/mytheme/templates/layout/page.html.twig", "D:\\xampp\\htdocs\\mobilemini\\themes\\mytheme\\templates\\layout\\page.html.twig");
    }
}
