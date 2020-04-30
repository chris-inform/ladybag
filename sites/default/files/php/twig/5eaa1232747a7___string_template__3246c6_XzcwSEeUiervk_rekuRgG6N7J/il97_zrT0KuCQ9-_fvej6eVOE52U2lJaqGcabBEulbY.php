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

/* __string_template__3246c60aa3c47db5bae3e01af3f0208c37845eafea92920bab43bbed7a594ba2 */
class __TwigTemplate_03d4255932003d091a2bcc6fa169b8c0142efb56770185a2210699eb68630e81 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<div class=\"row\">
\t<div class=\"col-sm-3 left\">
\t\t";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_featured_image"] ?? null)), "html", null, true);
        echo "
\t</div>
\t<div class=\"col-sm-6 mid\">
\t\t<div class=\"top\">
\t\t\t<div class=\"title\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"price\">
\t\t\t\t<strong>PHP</strong> ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unit_price__number"] ?? null)), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"quantity\">
\t\t\t\tQty x ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["quantity"] ?? null)), "html", null, true);
        echo " 
\t\t\t</div>
\t\t\t<div class=\"edit-quantity\">
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["edit_quantity"] ?? null)), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"bot\">
\t\t\t<div class=\"color\">
\t\t\t\tColor: ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_color"] ?? null)), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-sm-3 right align-self-center\">
\t\t<a href=\"#\" title=\"Edit\" class=\"custom-edit-order\"><i class=\"fal fa-pen\"></i></a>
\t\t<a href=\"#\" title=\"Delete\" class=\"custom-delete-order\"><i class=\"far fa-trash-alt\"></i>";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remove_button"] ?? null)), "html", null, true);
        echo "</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3246c60aa3c47db5bae3e01af3f0208c37845eafea92920bab43bbed7a594ba2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  93 => 22,  85 => 17,  79 => 14,  73 => 11,  67 => 8,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3246c60aa3c47db5bae3e01af3f0208c37845eafea92920bab43bbed7a594ba2", "");
    }
}
