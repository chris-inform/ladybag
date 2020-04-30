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

/* themes/custom/tinycuervo/templates/misc/status-messages.html.twig */
class __TwigTemplate_c4cf15eebaace8e85ce5bd4a90c35478606b0507374a9fa4bc83d78a7256b650 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 23, "set" => 25, "if" => 31];
        $filters = ["escape" => 30, "without" => 30, "length" => 37, "first" => 44];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
        // line 22
        echo "<div data-drupal-messages>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 24
            echo "  ";
            // line 25
            $context["classes"] = [0 => "alert", 1 => ("alert-" . $this->sandbox->ensureToStringAllowed(            // line 27
$context["type"]))];
            // line 30
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 31
            if (($context["type"] == "error")) {
                // line 32
                echo "      <div role=\"alert\">
    ";
            }
            // line 34
            echo "      ";
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 35
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</h2>
      ";
            }
            // line 37
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 38
                echo "        <ul>
          ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 40
                    echo "            <li>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "        </ul>
      ";
            } else {
                // line 44
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "
      ";
            }
            // line 46
            echo "    ";
            if (($context["type"] == "error")) {
                // line 47
                echo "      </div>
    ";
            }
            // line 49
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/tinycuervo/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 51,  125 => 49,  121 => 47,  118 => 46,  112 => 44,  108 => 42,  99 => 40,  95 => 39,  92 => 38,  89 => 37,  83 => 35,  80 => 34,  76 => 32,  74 => 31,  67 => 30,  65 => 27,  64 => 25,  62 => 24,  58 => 23,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/tinycuervo/templates/misc/status-messages.html.twig", "C:\\xampp\\htdocs\\ladybag\\themes\\custom\\tinycuervo\\templates\\misc\\status-messages.html.twig");
    }
}
