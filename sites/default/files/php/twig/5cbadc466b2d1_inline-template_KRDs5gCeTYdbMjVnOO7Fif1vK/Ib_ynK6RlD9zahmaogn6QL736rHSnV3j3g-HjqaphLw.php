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

/* {# inline_template_start #}{% if field_students_enrolled == 0 %}
      {{ views_bulk_operations_bulk_form }}
{% else %}
      {{ 'Enrolled Already' }}
{% endif %}


 */
class __TwigTemplate_3879772cef51596d87e62ed4e62f31c24a7cc31f35eff4aed62105c6be5938d5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
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
        if ((($context["field_students_enrolled"] ?? null) == 0)) {
            // line 2
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["views_bulk_operations_bulk_form"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Enrolled Already");
            echo "
";
        }
        // line 6
        echo "

";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% if field_students_enrolled == 0 %}
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
        return array (  76 => 6,  70 => 4,  64 => 2,  62 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "{# inline_template_start #}{% if field_students_enrolled == 0 %}
      {{ views_bulk_operations_bulk_form }}
{% else %}
      {{ 'Enrolled Already' }}
{% endif %}


", "");
    }
}
