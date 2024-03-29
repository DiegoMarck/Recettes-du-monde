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

/* core/themes/classy/templates/media-library/media--media-library.html.twig */
class __TwigTemplate_37296203051ec68b7421ff25f135ad82f96de98c5064c93606d8cb7e22e5f3b7 extends \Twig\Template
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
        // line 41
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 41, $this->source), "html", null, true);
        echo ">
  ";
        // line 42
        if (($context["content"] ?? null)) {
            // line 43
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["preview_attributes"] ?? null), "addClass", [0 => "media-library-item__preview js-media-library-item-preview"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
            echo ">
      ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 44, $this->source), "name"), "html", null, true);
            echo "
    </div>
    ";
            // line 46
            if ( !($context["status"] ?? null)) {
                // line 47
                echo "      <div class=\"media-library-item__status\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("unpublished"));
                echo "</div>
    ";
            }
            // line 49
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["metadata_attributes"] ?? null), "addClass", [0 => "media-library-item__attributes"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
            echo ">
      <div class=\"media-library-item__name\">
        ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 51, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 55
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/media-library/media--media-library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 55,  70 => 51,  64 => 49,  58 => 47,  56 => 46,  51 => 44,  46 => 43,  44 => 42,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override of a media item in the media library.
 *
 * This is used for media that the user can select from the grid of media
 * items. It is not used for items that have already been selected in the
 * corresponding field widget, or for items that have been previously selected
 * before adding new media to the library.
 *
 * Available variables:
 * - media: The entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - entity.getEntityTypeId() will return the entity type ID.
 *   - entity.hasField('field_example') returns TRUE if the entity includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   Calling other methods, such as entity.delete(), will result in an exception.
 *   See \\Drupal\\Core\\Entity\\EntityInterface for a full list of methods.
 * - name: Name of the media.
 * - content: Media content.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - attributes: HTML attributes for the containing element.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - url: Direct URL of the media.
 * - preview_attributes: HTML attributes for the preview wrapper.
 * - metadata_attributes: HTML attributes for the expandable metadata area.
 * - status: Whether or not the Media is published.
 *
 * @see template_preprocess_media()
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  {% if content %}
    <div{{ preview_attributes.addClass('media-library-item__preview js-media-library-item-preview') }}>
      {{ content|without('name') }}
    </div>
    {% if not status %}
      <div class=\"media-library-item__status\">{{ \"unpublished\" | t }}</div>
    {% endif %}
    <div{{ metadata_attributes.addClass('media-library-item__attributes') }}>
      <div class=\"media-library-item__name\">
        {{ name }}
      </div>
    </div>
  {% endif %}
</article>
", "core/themes/classy/templates/media-library/media--media-library.html.twig", "C:\\xampp\\htdocs\\recettes-du-monde\\core\\themes\\classy\\templates\\media-library\\media--media-library.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 42);
        static $filters = array("escape" => 41, "without" => 44, "t" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 't'],
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
