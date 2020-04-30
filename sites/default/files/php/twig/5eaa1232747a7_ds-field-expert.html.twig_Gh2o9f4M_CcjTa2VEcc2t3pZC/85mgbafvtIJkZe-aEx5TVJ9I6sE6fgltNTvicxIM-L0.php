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

/* modules/contrib/ds/templates/ds-field-expert.html.twig */
class __TwigTemplate_eefba307f0db893487647e8801f004b093309e80fd35e9f7aec6ed3221b2f895 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17, "macro" => 32, "set" => 35, "for" => 62];
        $filters = ["raw" => 16, "escape" => 19, "clean_class" => 36, "default" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'macro', 'set', 'for'],
                ['raw', 'escape', 'clean_class', 'default'],
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
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "prefix", [], "array")));
        // line 17
        if ($this->getAttribute(($context["settings"] ?? null), "ow", [])) {
            // line 18
            echo "  ";
            if ($this->getAttribute(($context["settings"] ?? null), "ow-def-at", [], "array")) {
                // line 19
                echo "    <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "ow-el", [], "array")), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["wrapper_attributes"] ?? null), "mergeAttributes", [0 => ($context["attributes"] ?? null)], "method")), "html", null, true);
                echo ">
  ";
            } elseif ($this->getAttribute(            // line 20
($context["settings"] ?? null), "ow-def-cl", [], "array")) {
                // line 21
                echo "    <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "ow-el", [], "array")), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["wrapper_attributes"] ?? null), "mergeAttributes", [0 => $this->getAttribute(($context["attribute_classes"] ?? null), "offsetGet", [0 => "class"], "method")], "method")), "html", null, true);
                echo ">
  ";
            } else {
                // line 23
                echo "    <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "ow-el", [], "array")), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
                echo ">
  ";
            }
            // line 25
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "field", [0 => ($context["items"] ?? null), 1 => ($context["settings"] ?? null), 2 => ($context["label"] ?? null), 3 => ($context["content_attributes"] ?? null), 4 => ($context["field_item_wrapper_attributes"] ?? null), 5 => ($context["field_wrapper_attributes"] ?? null), 6 => ($context["label_attributes"] ?? null), 7 => ($context["label_hidden"] ?? null), 8 => ($context["element"] ?? null)], "method")));
            echo "
    </";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "ow-el", [], "array")), "html", null, true);
            echo ">
";
        } else {
            // line 28
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "field", [0 => ($context["items"] ?? null), 1 => ($context["settings"] ?? null), 2 => ($context["label"] ?? null), 3 => ($context["content_attributes"] ?? null), 4 => ($context["field_item_wrapper_attributes"] ?? null), 5 => ($context["field_wrapper_attributes"] ?? null), 6 => ($context["label_attributes"] ?? null), 7 => ($context["label_hidden"] ?? null), 8 => ($context["element"] ?? null)], "method")));
            echo "
";
        }
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "suffix", [], "array")));
        // line 60
        echo "
";
    }

    // line 32
    public function getfield($__items__ = null, $__settings__ = null, $__label__ = null, $__content_attributes__ = null, $__field_item_wrapper_attributes__ = null, $__field_wrapper_attributes__ = null, $__label_attributes__ = null, $__label_hidden__ = null, $__element__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "settings" => $__settings__,
            "label" => $__label__,
            "content_attributes" => $__content_attributes__,
            "field_item_wrapper_attributes" => $__field_item_wrapper_attributes__,
            "field_wrapper_attributes" => $__field_wrapper_attributes__,
            "label_attributes" => $__label_attributes__,
            "label_hidden" => $__label_hidden__,
            "element" => $__element__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "  ";
            if ( !($context["label_hidden"] ?? null)) {
                // line 34
                echo "    ";
                // line 35
                $context["title_classes"] = [0 => ("field-label-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(                // line 36
($context["element"] ?? null), "#label_display", [], "array"))))];
                // line 39
                if ($this->getAttribute(($context["settings"] ?? null), "lbw-def-at", [], "array")) {
                    // line 40
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute(($context["settings"] ?? null), "lbw-el", [], "array", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "lbw-el", [], "array")), "div")) : ("div")), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["label_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method"), "mergeAttributes", [0 => ($context["title_attributes"] ?? null)], "method")), "html", null, true);
                    echo ">";
                } else {
                    // line 42
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute(($context["settings"] ?? null), "lbw-el", [], "array", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "lbw-el", [], "array")), "div")) : ("div")), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["label_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
                    echo ">";
                }
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                if ($this->getAttribute(($context["settings"] ?? null), "lb-col", [], "array")) {
                    echo ":";
                }
                // line 45
                echo "</";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute(($context["settings"] ?? null), "lbw-el", [], "array", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "lbw-el", [], "array")), "div")) : ("div")), "html", null, true);
                echo ">
  ";
            }
            // line 47
            echo "
  ";
            // line 48
            if ($this->getAttribute(($context["settings"] ?? null), "fis", [])) {
                // line 49
                echo "    ";
                if ($this->getAttribute(($context["settings"] ?? null), "fis-def-at", [], "array")) {
                    // line 50
                    echo "      <";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "fis-el", [], "array")), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["field_wrapper_attributes"] ?? null), "mergeAttributes", [0 => ($context["content_attributes"] ?? null)], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 52
                    echo "      <";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "fis-el", [], "array")), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_wrapper_attributes"] ?? null)), "html", null, true);
                    echo ">
    ";
                }
                // line 54
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "content", [0 => ($context["items"] ?? null), 1 => ($context["settings"] ?? null), 2 => ($context["field_item_wrapper_attributes"] ?? null), 3 => ($context["content_attributes"] ?? null)], "method")));
                echo "
      </";
                // line 55
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "fis-el", [], "array")), "html", null, true);
                echo ">
  ";
            } else {
                // line 57
                echo "    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "content", [0 => ($context["items"] ?? null), 1 => ($context["settings"] ?? null), 2 => ($context["field_item_wrapper_attributes"] ?? null)], "method")));
                echo "
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 61
    public function getcontent($__items__ = null, $__settings__ = null, $__field_item_wrapper_attributes__ = null, $__content_attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "settings" => $__settings__,
            "field_item_wrapper_attributes" => $__field_item_wrapper_attributes__,
            "content_attributes" => $__content_attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 62
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                echo "    ";
                if ($this->getAttribute(($context["settings"] ?? null), "fi", [])) {
                    // line 64
                    echo "      ";
                    if ($this->getAttribute(($context["settings"] ?? null), "fi-def-at", [], "array")) {
                        // line 65
                        echo "        <";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "fi-el", [], "array")), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["field_item_wrapper_attributes"] ?? null), "mergeAttributes", [0 => $this->getAttribute($context["item"], "attributes", [])], "method")), "html", null, true);
                        echo " >
      ";
                    } else {
                        // line 67
                        echo "        <";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "fi-el", [], "array")), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_item_wrapper_attributes"] ?? null)), "html", null, true);
                        echo " >
      ";
                    }
                    // line 69
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    // line 70
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "fi-el", [], "array")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 72
                    echo "      ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "
    ";
                }
                // line 74
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/contrib/ds/templates/ds-field-expert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 74,  268 => 72,  262 => 70,  260 => 69,  252 => 67,  244 => 65,  241 => 64,  238 => 63,  233 => 62,  218 => 61,  199 => 57,  194 => 55,  189 => 54,  181 => 52,  173 => 50,  170 => 49,  168 => 48,  165 => 47,  159 => 45,  154 => 44,  147 => 42,  140 => 40,  138 => 39,  136 => 36,  135 => 35,  133 => 34,  130 => 33,  110 => 32,  105 => 60,  103 => 30,  97 => 28,  92 => 26,  87 => 25,  79 => 23,  71 => 21,  69 => 20,  62 => 19,  59 => 18,  57 => 17,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/ds/templates/ds-field-expert.html.twig", "C:\\xampp\\htdocs\\ladybag\\modules\\contrib\\ds\\templates\\ds-field-expert.html.twig");
    }
}
