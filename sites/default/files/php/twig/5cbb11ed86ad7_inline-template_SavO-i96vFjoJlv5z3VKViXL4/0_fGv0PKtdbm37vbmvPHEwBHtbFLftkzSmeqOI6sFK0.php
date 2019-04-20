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
{% set user_id= user_test.uid.value %}
{% set enrolledstudents = field_students_enrolled_1|split(',') %}
{% if user_id in enrolledstudents %}
     {{ 'Enrolled Already' }}
{% else %}
      {{ views_bulk_operations_bulk_form }}
{% endif %}


 */
class __TwigTemplate_21e758efaa435e6409e44728672f1948e5e1f77c73d4f82c34beea2fed9326b2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 4];
        $filters = ["split" => 3];
        $functions = ["bamboo_load_currentuser" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['split'],
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
        $context["user_id"] = $this->getAttribute($this->getAttribute(($context["user_test"] ?? null), "uid", []), "value", []);
        // line 3
        $context["enrolledstudents"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_students_enrolled_1"] ?? null)), ",");
        // line 4
        if (twig_in_filter(($context["user_id"] ?? null), ($context["enrolledstudents"] ?? null))) {
            // line 5
            echo "     ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Enrolled Already");
            echo "
";
        } else {
            // line 7
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["views_bulk_operations_bulk_form"] ?? null)), "html", null, true);
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
{% set user_id= user_test.uid.value %}
{% set enrolledstudents = field_students_enrolled_1|split(',') %}
{% if user_id in enrolledstudents %}
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
        return array (  85 => 9,  79 => 7,  73 => 5,  71 => 4,  69 => 3,  67 => 2,  65 => 1,);
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
{% set user_id= user_test.uid.value %}
{% set enrolledstudents = field_students_enrolled_1|split(',') %}
{% if user_id in enrolledstudents %}
     {{ 'Enrolled Already' }}
{% else %}
      {{ views_bulk_operations_bulk_form }}
{% endif %}


", "");
    }
}
