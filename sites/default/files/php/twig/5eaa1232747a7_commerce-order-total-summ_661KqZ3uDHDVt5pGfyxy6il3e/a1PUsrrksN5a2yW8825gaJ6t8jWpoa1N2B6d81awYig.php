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

/* themes/custom/tinycuervo/templates/commerce/commerce-order-total-summary.html.twig */
class __TwigTemplate_129a1e9abdd7a68145fc3aafa8f584332a3a65a399b573943c80437d7e8bc633 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 27];
        $filters = ["escape" => 21, "t" => 25, "commerce_price_format" => 25, "clean_class" => 28];
        $functions = ["attach_library" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 't', 'commerce_price_format', 'clean_class'],
                ['attach_library']
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
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("commerce_order/total_summary"), "html", null, true);
        echo "
<div class=\"summary-wrap\">
  <div";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    <div class=\"order-total-line order-total-line__subtotal\">
      <span class=\"order-total-line-label\">";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Subtotal"));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["totals"] ?? null), "subtotal", []))), "html", null, true);
        echo "</span>
    </div>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["totals"] ?? null), "adjustments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 28
            echo "      <div class=\"order-total-line order-total-line__adjustment order-total-line__adjustment--";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "type", []))), "html", null, true);
            echo "\">
        <span class=\"order-total-line-label\">";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "label", [])), "html", null, true);
            echo " </span><span class=\"order-total-line-value\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "amount", []))), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    <div class=\"order-total-line order-total-line__total\">
      <span class=\"order-total-line-label\">";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total"));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["totals"] ?? null), "total", []))), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/tinycuervo/templates/commerce/commerce-order-total-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  92 => 32,  81 => 29,  76 => 28,  72 => 27,  65 => 25,  60 => 23,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/tinycuervo/templates/commerce/commerce-order-total-summary.html.twig", "C:\\xampp\\htdocs\\ladybag\\themes\\custom\\tinycuervo\\templates\\commerce\\commerce-order-total-summary.html.twig");
    }
}
