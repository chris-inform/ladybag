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

/* themes/custom/tinycuervo/templates/commerce/commerce-cart-flyout-offcanvas.html.twig */
class __TwigTemplate_69e03c26fd9fab9cb5a67ba3f99ec69a32471d3d7847380d9233ad7e52ccd7a4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["t" => 3, "escape" => 17];
        $functions = ["url" => 23];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t', 'escape'],
                ['url']
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
        echo "<div class=\"cart--cart-offcanvas\">
  <div class=\"cart--cart-offcanvas__close\">
    <button class=\"button btn\"><i class=\"fal fa-times\"></i><span class=\"visually-hidden\"> ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close cart"));
        echo "</span> </button>
  </div>
<% if (count > 0) { %>
  <div class=\"cart-block--offcanvas-contents\">
    <div class=\"cart-block--offcanvas-contents__inner\">
      <div class=\"cart-block--offcanvas-contents__items\"></div>
      <div class=\"cart-block--offcanvas-contents__links\">
        <%= links %>
      </div>
    </div>
  </div>
<% } else { %>
  <div class=\"cart-empty-page\">
    <div class=\"cart-icon\">
      <img src=\"";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/ico_cart.svg\" alt=\"Cart Icon\">
    </div>
    <div class=\"desc\">
        ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Your cart is empty"));
        echo "
    </div>
      <div class=\"cta\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "shop\" class=\"btn btn-secondary\">Continue Shopping</a>
      </div>
  </div>
<% } %>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/tinycuervo/templates/commerce/commerce-cart-flyout-offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  82 => 20,  76 => 17,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/tinycuervo/templates/commerce/commerce-cart-flyout-offcanvas.html.twig", "C:\\xampp\\htdocs\\ladybag\\themes\\custom\\tinycuervo\\templates\\commerce\\commerce-cart-flyout-offcanvas.html.twig");
    }
}
