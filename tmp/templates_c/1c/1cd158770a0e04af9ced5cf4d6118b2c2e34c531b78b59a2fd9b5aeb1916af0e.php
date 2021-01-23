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

/* @Marketplace/macros.twig */
class __TwigTemplate_da6b64511d2af64516a746806a112cd66a6f4971ab1990c4c114a24aaf342b58 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
";
        // line 5
        echo "
";
        // line 12
        echo "
";
    }

    // line 2
    public function getpluginDeveloper($__owner__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "owner" => $__owner__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            if ((("piwik" == ($context["owner"] ?? $this->getContext($context, "owner"))) || ("matomo-org" == ($context["owner"] ?? $this->getContext($context, "owner"))))) {
                echo "<img title=\"Matomo\" alt=\"Matomo\" style=\"padding-bottom:2px;height:12px;\" src=\"plugins/Morpheus/images/logo-dark.svg\"/>";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, ($context["owner"] ?? $this->getContext($context, "owner")), "html", null, true);
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

    // line 6
    public function getfeaturedIcon($__align__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "align" => $__align__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 7
            echo "    <img class=\"featuredIcon\"
         title=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_FeaturedPlugin"]), "html", null, true);
            echo "\"
         src=\"plugins/Marketplace/images/rating_important.png\"
         align=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, ($context["align"] ?? $this->getContext($context, "align")), "html", null, true);
            echo "\" />
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getmissingRequirementsPleaseUpdateNotice($__plugin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "plugin" => $__plugin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 14
            echo "    ";
            if (($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "missingRequirements", []) && (0 < twig_length_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "missingRequirements", []))))) {
                // line 15
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "missingRequirements", []));
                foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                    // line 16
                    echo "<div class=\"alert alert-danger\">
                ";
                    // line 17
                    $context["requirement"] = twig_capitalize_string_filter($this->env, $this->getAttribute($context["req"], "requirement", []));
                    // line 18
                    echo "                ";
                    if (("Php" == ($context["requirement"] ?? $this->getContext($context, "requirement")))) {
                        // line 19
                        echo "                    ";
                        $context["requirement"] = "PHP";
                        // line 20
                        echo "                ";
                    }
                    // line 21
                    echo "                ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_MissingRequirementsNotice", ($context["requirement"] ?? $this->getContext($context, "requirement")), $this->getAttribute($context["req"], "actualVersion", []), $this->getAttribute($context["req"], "requiredVersion", [])]), "html", null, true);
                    echo "
            </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "    ";
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

    public function getTemplateName()
    {
        return "@Marketplace/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 24,  144 => 21,  141 => 20,  138 => 19,  135 => 18,  133 => 17,  130 => 16,  125 => 15,  122 => 14,  110 => 13,  93 => 10,  88 => 8,  85 => 7,  73 => 6,  53 => 3,  41 => 2,  36 => 12,  33 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% macro pluginDeveloper(owner) %}
    {% if 'piwik' == owner or 'matomo-org' == owner %}<img title=\"Matomo\" alt=\"Matomo\" style=\"padding-bottom:2px;height:12px;\" src=\"plugins/Morpheus/images/logo-dark.svg\"/>{% else %}{{ owner }}{% endif %}
{% endmacro %}

{% macro featuredIcon(align='') %}
    <img class=\"featuredIcon\"
         title=\"{{ 'Marketplace_FeaturedPlugin'|translate }}\"
         src=\"plugins/Marketplace/images/rating_important.png\"
         align=\"{{ align }}\" />
{% endmacro %}

{% macro missingRequirementsPleaseUpdateNotice(plugin) %}
    {% if plugin.missingRequirements and 0 < plugin.missingRequirements|length %}
        {% for req in plugin.missingRequirements -%}
            <div class=\"alert alert-danger\">
                {% set requirement = req.requirement|capitalize %}
                {% if 'Php' == requirement %}
                    {% set requirement = 'PHP' %}
                {% endif %}
                {{ 'CorePluginsAdmin_MissingRequirementsNotice'|translate(requirement, req.actualVersion, req.requiredVersion) }}
            </div>
        {%- endfor %}
    {% endif %}
{% endmacro %}
", "@Marketplace/macros.twig", "C:\\xampp\\htdocs\\analytics.piwik\\plugins\\Marketplace\\templates\\macros.twig");
    }
}
