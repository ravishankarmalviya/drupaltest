<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* {# inline_template_start #}{% set user_test= bamboo_load_currentuser() %}
{{ field_students_enrolled_1 }}
<div>{{ user_test.uid.value }}</div>
{% if field_students_enrolled == 0 %}
      {{ views_bulk_operations_bulk_form }}
{% else %}
      {{ 'Enrolled Already' }}
{% endif %}


 */
class __TwigTemplate_798fabb99998b345347d60e704007ef13a320226c036d649c1f23ba594ffd5f5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 4];
        $filters = [];
        $functions = ["bamboo_load_currentuser" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['bamboo_load_currentuser']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["user_test"] = $this->env->getExtension('Drupal\bamboo_twig_loader\TwigExtension\Loader')->loadCurrentUser();
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_students_enrolled_1"] ?? null)), "html", null, true);
        echo "
<div>";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["user_test"] ?? null), "uid", []), "value", [])), "html", null, true);
        echo "</div>
";
        // line 4
        if ((($context["field_students_enrolled"] ?? null) == 0)) {
            // line 5
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["views_bulk_operations_bulk_form"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 7
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Enrolled Already");
            echo "
";
        }
        // line 9
        echo "

";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% set user_test= bamboo_load_currentuser() %}
{{ field_students_enrolled_1 }}
<div>{{ user_test.uid.value }}</div>
{% if field_students_enrolled == 0 %}
      {{ views_bulk_operations_bulk_form }}
{% else %}
      {{ 'Enrolled Already' }}
{% endif %}


";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 9,  83 => 7,  77 => 5,  75 => 4,  71 => 3,  67 => 2,  65 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "{# inline_template_start #}{% set user_test= bamboo_load_currentuser() %}
{{ field_students_enrolled_1 }}
<div>{{ user_test.uid.value }}</div>
{% if field_students_enrolled == 0 %}
      {{ views_bulk_operations_bulk_form }}
{% else %}
      {{ 'Enrolled Already' }}
{% endif %}


", "");
    }
}
