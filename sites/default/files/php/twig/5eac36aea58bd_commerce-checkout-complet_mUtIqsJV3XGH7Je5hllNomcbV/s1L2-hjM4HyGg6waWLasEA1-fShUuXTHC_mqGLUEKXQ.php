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

/* themes/custom/tinycuervo/templates/commerce/commerce-checkout-completion-message.html.twig */
class __TwigTemplate_0f8ec1b3084fe6eec4243451728437f5d19b82229e8c1e72a221fb5a952f9724 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 24];
        $filters = ["escape" => 33];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 13
        echo "<div class=\"checkout-complete\">
\t";
        // line 15
        echo "
\t";
        // line 17
        echo "\t

\t<div class=\"top\">
\t\t<div class=\"order-success-icon\">
\t\t  <i class=\"fal fa-check-circle\"></i>
\t\t  Order Successful
\t\t</div>
\t\t";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["order_entity"] ?? null), "payment_gateway", []), 0, [], "array"), "value", []), "target_id", [], "array") != "bank_transfer")) {
            // line 25
            echo "\t\t\t<div class=\"order-success-msg\">
\t\t\t  Email your proof of payment to <a href=\"mailto:shop@ladybagmnl.com\">shop@ladybagmnl.com</a> along with your name as the subject
\t\t\t</div>
\t\t";
        }
        // line 29
        echo "\t</div>
  ";
        // line 30
        if (($context["payment_instructions"] ?? null)) {
            // line 31
            echo "    <div class=\"checkout-complete__payment-instructions\">
      <!-- <h2>";
            // line 32
            echo "</h2> -->
      ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["payment_instructions"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 36
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/tinycuervo/templates/commerce/commerce-checkout-completion-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  89 => 33,  86 => 32,  83 => 31,  81 => 30,  78 => 29,  72 => 25,  70 => 24,  61 => 17,  58 => 15,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/tinycuervo/templates/commerce/commerce-checkout-completion-message.html.twig", "C:\\xampp\\htdocs\\ladybag\\themes\\custom\\tinycuervo\\templates\\commerce\\commerce-checkout-completion-message.html.twig");
    }
}
