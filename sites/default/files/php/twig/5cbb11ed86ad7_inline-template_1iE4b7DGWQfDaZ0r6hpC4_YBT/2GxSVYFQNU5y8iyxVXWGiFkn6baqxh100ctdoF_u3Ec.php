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
{% set enrolledstudents = field_students_enrolled_1|split(',') %}
{{user_test.name.value}}
{{ enrolledstudents|join('|') }}
{% if (enrolledstudents is not empty) and (user_test.name.value in enrolledstudents|keys) %}
     {{ 'Enrolled Already' }}
{% else %}
      {{ views_bulk_operations_bulk_form }}
{% endif %}


 */
class __TwigTemplate_7269e9ad26068255c008ab17585a243c9ef560dd6da171a73939f16ccd963baa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 5];
        $filters = ["split" => 2, "join" => 4, "keys" => 5];
        $functions = ["bamboo_load_currentuser" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['split', 'join', 'keys'],
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
        $context["enrolledstudents"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_students_enrolled_1"] ?? null)), ",");
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["user_test"] ?? null), "name", []), "value", [])), "html", null, true);
        echo "
";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["enrolledstudents"] ?? null)), "|"), "html", null, true);
        echo "
";
        // line 5
        if (( !twig_test_empty(($context["enrolledstudents"] ?? null)) && twig_in_filter($this->getAttribute($this->getAttribute(($context["user_test"] ?? null), "name", []), "value", []), twig_get_array_keys_filter(($context["enrolledstudents"] ?? null))))) {
            // line 6
            echo "     ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Enrolled Already");
            echo "
";
        } else {
            // line 8
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["views_bulk_operations_bulk_form"] ?? null)), "html", null, true);
            echo "
";
        }
        // line 10
        echo "

";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% set user_test= bamboo_load_currentuser() %}
{% set enrolledstudents = field_students_enrolled_1|split(',') %}
{{user_test.name.value}}
{{ enrolledstudents|join('|') }}
{% if (enrolledstudents is not empty) and (user_test.name.value in enrolledstudents|keys) %}
     {{ 'Enrolled Already' }}
{% else %}
      {{ views_bulk_operations_bulk_form }}
{% endif %}


";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 10,  86 => 8,  80 => 6,  78 => 5,  74 => 4,  70 => 3,  68 => 2,  66 => 1,);
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
{% set enrolledstudents = field_students_enrolled_1|split(',') %}
{{user_test.name.value}}
{{ enrolledstudents|join('|') }}
{% if (enrolledstudents is not empty) and (user_test.name.value in enrolledstudents|keys) %}
     {{ 'Enrolled Already' }}
{% else %}
      {{ views_bulk_operations_bulk_form }}
{% endif %}


", "");
    }
}
