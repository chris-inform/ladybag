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

/* modules/contrib/views_jump_menu/templates/views-jump-menu.html.twig */
class __TwigTemplate_c2646f0f6ae6e7049d19e0786696fbe78cece11e9a5a81d5ea90cd12b1e85048 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 22, "for" => 28];
        $filters = ["escape" => 21, "striptags" => 29];
        $functions = ["attach_library" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'striptags'],
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("views_jump_menu/views-jump-menu"), "html", null, true);
        echo "
";
        // line 22
        if (($context["attributes"] ?? null)) {
            // line 23
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
";
        }
        // line 25
        echo "  ";
        if (($context["title"] ?? null)) {
            echo "<h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>";
        }
        // line 26
        echo "  <select";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["select"] ?? null), "attributes", [])), "html", null, true);
        if ($this->getAttribute(($context["select"] ?? null), "select_label", [])) {
            echo " aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["select"] ?? null), "select_label", [])), "html", null, true);
            echo "\"";
        }
        echo ">
    <option data-url=\"\">";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["select"] ?? null), "select_text", [])), "html", null, true);
        echo "</option>
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["select"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 29
            echo "    <option data-url=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["option"], "url", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($context["option"], "label", []))), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </select>
";
        // line 32
        if (($context["attributes"] ?? null)) {
            // line 33
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_jump_menu/templates/views-jump-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  106 => 32,  103 => 31,  92 => 29,  88 => 28,  84 => 27,  74 => 26,  67 => 25,  61 => 23,  59 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/views_jump_menu/templates/views-jump-menu.html.twig", "C:\\xampp\\htdocs\\ladybag\\modules\\contrib\\views_jump_menu\\templates\\views-jump-menu.html.twig");
    }
}
