<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/panache/templates/page.html.twig */
class __TwigTemplate_3123b74ec80c13ab73ee285c1a310bb7ceea028b1fbf7d4b9f29c05fcd813df1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "<div id=\"page-wrapper\">
  <header>
    ";
        // line 45
        $this->loadTemplate("@panache/includes/header.html.twig", "themes/contrib/panache/templates/page.html.twig", 45)->display($context);
        // line 46
        echo "
    ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_navigation", [], "any", false, false, true, 47)) {
            // line 48
            echo "      ";
            $this->loadTemplate("@panache/includes/header-navigation.html.twig", "themes/contrib/panache/templates/page.html.twig", 48)->display($context);
            // line 49
            echo "    ";
        }
        // line 50
        echo "  </header>
  <main class=\"main-wrapper\">
    ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_slideshow", [], "any", false, false, true, 52)) {
            // line 53
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_slideshow", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 55
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["panache"] ?? null), "display_sample_blocks", [], "any", false, false, true, 55)) {
            // line 56
            echo "      ";
            if (($context["is_front"] ?? null)) {
                // line 57
                echo "        ";
                $this->loadTemplate("@panache/includes/banner-slideshow.html.twig", "themes/contrib/panache/templates/page.html.twig", 57)->display($context);
                // line 58
                echo "        ";
                $this->loadTemplate("@panache/includes/sample-introductory-block.html.twig", "themes/contrib/panache/templates/page.html.twig", 58)->display($context);
                // line 59
                echo "        ";
                $this->loadTemplate("@panache/includes/testimonials.html.twig", "themes/contrib/panache/templates/page.html.twig", 59)->display($context);
                // line 60
                echo "      ";
            }
            // line 61
            echo "    ";
        }
        // line 62
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 62)) {
            // line 63
            echo "      <section class=\"panache-page-title\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </section>
    ";
        }
        // line 73
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_sidebar", [], "any", false, false, true, 73) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 73))) {
            // line 74
            echo "      <section class=\"container sidebar left-sidebar\">
        <div class=\"row\">
          <div class=\"col-md-5 col-lg-4\">
            ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_sidebar", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-md-7 col-lg-8\">
            ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </section>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 84
($context["page"] ?? null), "right_sidebar", [], "any", false, false, true, 84) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 84))) {
            // line 85
            echo "      <section class=\"container sidebar right-sidebar\">
        <div class=\"row\">
          <div class=\"col-md-7 col-lg-8\">
            ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-md-5 col-lg-4\">
            ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_sidebar", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </section>
    ";
        } else {
            // line 96
            echo "      <section class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </section>
    ";
        }
        // line 104
        echo "  </main>
  <footer>
    ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 106)) {
            // line 107
            echo "      <div class=\"panache-footer\">
        <div class=\"container\">
          ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 113
        echo "    ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 113))) {
            // line 114
            echo "      <div class=\"panache-footer\">
        ";
            // line 115
            $this->loadTemplate("@panache/includes/footer.html.twig", "themes/contrib/panache/templates/page.html.twig", 115)->display($context);
            // line 116
            echo "      </div>
    ";
        }
        // line 118
        echo "  </footer>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/panache/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 118,  187 => 116,  185 => 115,  182 => 114,  179 => 113,  172 => 109,  168 => 107,  166 => 106,  162 => 104,  154 => 99,  149 => 96,  141 => 91,  135 => 88,  130 => 85,  128 => 84,  121 => 80,  115 => 77,  110 => 74,  107 => 73,  98 => 67,  92 => 63,  89 => 62,  86 => 61,  83 => 60,  80 => 59,  77 => 58,  74 => 57,  71 => 56,  68 => 55,  62 => 53,  60 => 52,  56 => 50,  53 => 49,  50 => 48,  48 => 47,  45 => 46,  43 => 45,  39 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
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
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header_left: Items for the header left region.
 * - page.header_center: Items for the header center region.
 * - page.header_right: Items for the header right region.
 * - page.banner_slideshow: Items for the banner slideshow region.
 * - page.page_title: Items for the pagetitle region.
 * - page.content: The main content of the current page.
 * - page.left_sidebar: Items for the left sidebar.
 * - page.right_second: Items for the right sidebar.
 * - page.footer: Items Footer bottom region.
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\">
  <header>
    {% include '@panache/includes/header.html.twig' %}

    {% if page.header_navigation %}
      {% include '@panache/includes/header-navigation.html.twig' %}
    {% endif %}
  </header>
  <main class=\"main-wrapper\">
    {% if page.banner_slideshow %}
      {{ page.banner_slideshow }}
    {% endif %}
    {% if panache.display_sample_blocks %}
      {% if is_front %}
        {% include '@panache/includes/banner-slideshow.html.twig' %}
        {% include '@panache/includes/sample-introductory-block.html.twig' %}
        {% include '@panache/includes/testimonials.html.twig' %}
      {% endif %}
    {% endif %}
    {% if page.page_title %}
      <section class=\"panache-page-title\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ page.page_title }}
            </div>
          </div>
        </div>
      </section>
    {% endif %}
    {% if page.left_sidebar and page.content %}
      <section class=\"container sidebar left-sidebar\">
        <div class=\"row\">
          <div class=\"col-md-5 col-lg-4\">
            {{ page.left_sidebar }}
          </div>
          <div class=\"col-md-7 col-lg-8\">
            {{ page.content }}
          </div>
        </div>
      </section>
    {% elseif page.right_sidebar and page.content %}
      <section class=\"container sidebar right-sidebar\">
        <div class=\"row\">
          <div class=\"col-md-7 col-lg-8\">
            {{ page.content }}
          </div>
          <div class=\"col-md-5 col-lg-4\">
            {{ page.right_sidebar }}
          </div>
        </div>
      </section>
    {% else %}
      <section class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            {{ page.content }}
          </div>
        </div>
      </section>
    {% endif %}
  </main>
  <footer>
    {% if page.footer %}
      <div class=\"panache-footer\">
        <div class=\"container\">
          {{ page.footer }}
        </div>
      </div>
    {% endif %}
    {% if page.footer is empty %}
      <div class=\"panache-footer\">
        {% include '@panache/includes/footer.html.twig' %}
      </div>
    {% endif %}
  </footer>
</div>

", "themes/contrib/panache/templates/page.html.twig", "C:\\xampp\\htdocs\\recettes-du-monde\\themes\\contrib\\panache\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 45, "if" => 47);
        static $filters = array("escape" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
