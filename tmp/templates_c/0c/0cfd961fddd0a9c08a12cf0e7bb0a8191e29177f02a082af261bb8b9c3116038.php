<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @ProfessionalServices/promoServicesWidget.twig */
class __TwigTemplate_a9a5f80aacc68f187e627ec506a1f3df8a84503c41a9ee630c8d9090bbd544af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"promoWidget\">
    <div class=\"promo\">
        <a href=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaLinkUrl"]) || array_key_exists("ctaLinkUrl", $context) ? $context["ctaLinkUrl"] : (function () { throw new RuntimeError('Variable "ctaLinkUrl" does not exist.', 3, $this->source); })()), "html_attr");
        echo "\" target=\"_blank\" rel=\"noreferrer noopener\"><img class=\"icon\" src=\"plugins/ProfessionalServices/images/promo.png\"></a>
        <h2>";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaTitle"]) || array_key_exists("ctaTitle", $context) ? $context["ctaTitle"] : (function () { throw new RuntimeError('Variable "ctaTitle" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</h2>
        <p class=\"text\">
            <span>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaText"]) || array_key_exists("ctaText", $context) ? $context["ctaText"] : (function () { throw new RuntimeError('Variable "ctaText" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</span>
            <br /><br />
            <a class=\"btn\" href=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaLinkUrl"]) || array_key_exists("ctaLinkUrl", $context) ? $context["ctaLinkUrl"] : (function () { throw new RuntimeError('Variable "ctaLinkUrl" does not exist.', 8, $this->source); })()), "html_attr");
        echo "\" target=\"_blank\" rel=\"noreferrer noopener\">
                ";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaLinkTitle"]) || array_key_exists("ctaLinkTitle", $context) ? $context["ctaLinkTitle"] : (function () { throw new RuntimeError('Variable "ctaLinkTitle" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "
            </a>
        </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoServicesWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"promoWidget\">
    <div class=\"promo\">
        <a href=\"{{ ctaLinkUrl|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\"><img class=\"icon\" src=\"plugins/ProfessionalServices/images/promo.png\"></a>
        <h2>{{ ctaTitle }}</h2>
        <p class=\"text\">
            <span>{{ ctaText }}</span>
            <br /><br />
            <a class=\"btn\" href=\"{{ ctaLinkUrl|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                {{ ctaLinkTitle }}
            </a>
        </p>
    </div>
</div>
", "@ProfessionalServices/promoServicesWidget.twig", "D:\\laragon\\www\\matomo\\plugins\\ProfessionalServices\\templates\\promoServicesWidget.twig");
    }
}
