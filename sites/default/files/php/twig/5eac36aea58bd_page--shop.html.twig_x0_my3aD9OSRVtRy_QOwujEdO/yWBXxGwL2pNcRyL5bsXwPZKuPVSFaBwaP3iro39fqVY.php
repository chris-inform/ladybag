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

/* themes/custom/tinycuervo/templates/layout/page--shop.html.twig */
class __TwigTemplate_813508f8da2886125439ab9459e4d008555b2c4bca6cf2ff747d8d2236eaf69a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 38];
        $filters = ["escape" => 12];
        $functions = ["drupal_menu" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['drupal_menu']
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
        echo "<div class=\"layout-container\">

  <header id=\"header\" role=\"banner\">
    <div class=\"site-container h-100\">
      <div class=\"row h-100\">
        <div class=\"col-sm-4 col-3 align-self-center\">
          <div id=\"mobile-burg-menu\">
            <span></span>
            <span></span>
            <span></span>
          </div>
          ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_left", [])), "html", null, true);
        echo "
        </div>
        <div class=\"col-sm-4 col-6 align-self-center\">
          ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_mid", [])), "html", null, true);
        echo "
        </div>
        <div class=\"col-sm-4 col-3 align-self-center\">
          ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_right", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </header>

  <main role=\"main\" class=\"product-page\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 26
        echo "    <div id=\"mobile-sidebar\">
      <span>Menu</span>
      ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalMenu("mobile", 1, 3), "html", null, true);
        echo "
    </div>
    <div class=\"layout-content\">
      <div class=\"prod-banner\"></div>
      <div class=\"site-container\">
        ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </div>
    </div>";
        // line 36
        echo "  </main>

  ";
        // line 38
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 39
            echo "    <footer id=\"footer\" role=\"contentinfo\">
      <div class=\"site-container\">
        ";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 45
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/tinycuervo/templates/layout/page--shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 45,  117 => 41,  113 => 39,  111 => 38,  107 => 36,  102 => 33,  94 => 28,  90 => 26,  80 => 18,  74 => 15,  68 => 12,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/tinycuervo/templates/layout/page--shop.html.twig", "C:\\xampp\\htdocs\\ladybag\\themes\\custom\\tinycuervo\\templates\\layout\\page--shop.html.twig");
    }
}