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

/* core/themes/seven/templates/entity-add-list.html.twig */
class __TwigTemplate_05d69b9cbaf3df3ab9f864e568aba03955723cf450fdfb08a7d52242726b58cc extends \Twig\Template
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
        // line 17
        if ( !twig_test_empty(($context["bundles"] ?? null))) {
            // line 18
            echo "  <ul class=\"admin-list\">
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bundles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
                // line 20
                echo "      <li class=\"clearfix\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 20), "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\"><span class=\"label\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["bundle"], "label", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</span><div class=\"description\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</div></a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  </ul>
";
        } elseif ( !twig_test_empty(        // line 23
($context["add_bundle_message"] ?? null))) {
            // line 24
            echo "  <p>
    ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["add_bundle_message"] ?? null), 25, $this->source), "html", null, true);
            echo "
  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/entity-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  66 => 24,  64 => 23,  61 => 22,  48 => 20,  44 => 19,  41 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to present a list of available bundles.
 *
 * Available variables:
 *   - bundles: A list of bundles, each with the following properties:
 *     - label: Bundle label.
 *     - description: Bundle description.
 *     - add_link: Link to create an entity of this bundle.
 *   - add_bundle_message: The message shown when there are no bundles. Only
 *                         available if the entity type uses bundle entities.
 *
 * @see template_preprocess_entity_add_list()
 */
#}
{% if bundles is not empty %}
  <ul class=\"admin-list\">
    {% for bundle in bundles %}
      <li class=\"clearfix\"><a href=\"{{ bundle.add_link.url }}\"><span class=\"label\">{{ bundle.label }}</span><div class=\"description\">{{ bundle.description }}</div></a></li>
    {% endfor %}
  </ul>
{% elseif add_bundle_message is not empty %}
  <p>
    {{ add_bundle_message }}
  </p>
{% endif %}
", "core/themes/seven/templates/entity-add-list.html.twig", "C:\\xampp\\htdocs\\recettes-du-monde\\core\\themes\\seven\\templates\\entity-add-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "for" => 19);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
