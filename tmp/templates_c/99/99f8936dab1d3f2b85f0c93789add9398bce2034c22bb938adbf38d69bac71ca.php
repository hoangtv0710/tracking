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

/* @CoreHome/_applePinnedTabIcon.twig */
class __TwigTemplate_dc99085b6c1aa12aa3d2c8c593319e53ee26daa82de3fa2235a4bf9f98cde398 extends \Twig\Template
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
        if (((($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo")) && (isset($context["customFavicon"]) || array_key_exists("customFavicon", $context))) && ($context["customFavicon"] ?? $this->getContext($context, "customFavicon")))) {
        } else {
            // line 3
            echo "\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#3450A3\">
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_applePinnedTabIcon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if isCustomLogo and customFavicon is defined and customFavicon %}
{% else %}
\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#3450A3\">
{% endif %}
", "@CoreHome/_applePinnedTabIcon.twig", "C:\\xampp\\htdocs\\analytics.piwik\\plugins\\CoreHome\\templates\\_applePinnedTabIcon.twig");
    }
}
