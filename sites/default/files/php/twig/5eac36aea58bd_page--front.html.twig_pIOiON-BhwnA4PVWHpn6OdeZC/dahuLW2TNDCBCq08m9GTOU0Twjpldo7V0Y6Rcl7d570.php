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

/* themes/custom/tinycuervo/templates/layout/page--front.html.twig */
class __TwigTemplate_891ca093bfb0dd92feb95ab3e21a49db49f31ee24cd3cab77ac451f051e8efc1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 85];
        $filters = ["escape" => 12, "t" => 42];
        $functions = ["drupal_menu" => 28, "drupal_view" => 34, "drupal_entity" => 43];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['drupal_menu', 'drupal_view', 'drupal_entity']
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

  <header id=\"header\" role=\"banner\" class=\"home\">
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

  <main role=\"main\">
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
        ";
        // line 32
        echo "      <div class=\"site-container\">
        <div id=\"banner\">
          ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("banner", "block_1"), "html", null, true);
        echo "
        </div>
        <div class=\"every-woman\">
          It's every woman's evening <strong>essential.</strong>
        </div>
      </div>
      <div class=\"mutedmoss-section\">
        <div id=\"about_us\" class=\"about-section\">
          <h2>";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Hello"));
        echo "</h2>
          ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block_content", "2"), "html", null, true);
        echo "
        </div>
        ";
        // line 46
        echo "        <div id=\"bestsellers-section\">
          <div class=\"row\">
            <div class=\"col-lg-4 col-sm-4 left align-self-center\">
              ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block_content", "3"), "html", null, true);
        echo "
            </div>
            <div class=\"col-lg-8 col-sm-8 right align-self-center\">
              <div class=\"inner\">
                <h4>";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Our Bestsellers"));
        echo "</h4>
                ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("bestsellers", "block_1"), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
        <div class=\"bg-section\"></div>
      </div>
      <div id=\"our-products-section\">
        <h4>";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Our Products"));
        echo "</h4>
        ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("product_terms_home", "block_1"), "html", null, true);
        echo "
      </div>
      <div id=\"our-clients-section\">
        <div class=\"site-container\">
          <h2>";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Our Clients"));
        echo "</h2>
          ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("clients", "block_1"), "html", null, true);
        echo "
        </div>
      </div>
      <div id=\"models-section\">
        <div class=\"site-container\">
          ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("models", "block_1"), "html", null, true);
        echo "
          <div class=\"instagram-section\">
            <div class=\"ig-logo\"></div>
            <span>Follow us on Instagram</span>
            <div class=\"userhandle\"><a target=\"_blank\" href=\"https://www.instagram.com/ladybag_mnl/\">@ladybag_mnl</a></div>
          </div>
        </div>
      </div>

    </div>";
        // line 83
        echo "  </main>

  ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 86
            echo "    <footer id=\"footer\" role=\"contentinfo\">
      <div class=\"site-container\">
        ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 92
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/tinycuervo/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 92,  196 => 88,  192 => 86,  190 => 85,  186 => 83,  174 => 73,  166 => 68,  162 => 67,  155 => 63,  151 => 62,  140 => 54,  136 => 53,  129 => 49,  124 => 46,  119 => 43,  115 => 42,  104 => 34,  100 => 32,  94 => 28,  90 => 26,  80 => 18,  74 => 15,  68 => 12,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/tinycuervo/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\ladybag\\themes\\custom\\tinycuervo\\templates\\layout\\page--front.html.twig");
    }
}
