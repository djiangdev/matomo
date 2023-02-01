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

/* _jsCssIncludes.twig */
class __TwigTemplate_7fd01cfb344556f1f9a92a237ec71ef8bddf0daf1191f02a186327c7d4e4d40f extends Template
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
        // line 2
        echo "    ";
        echo $this->env->getFunction('includeAssets')->getCallable()(["type" => "css"]);
        echo "
    ";
        // line 3
        echo $this->env->getFunction('includeAssets')->getCallable()(["type" => "js"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "_jsCssIncludes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
    {{ includeAssets({\"type\": \"css\"}) }}
    {{ includeAssets({\"type\":\"js\"}) }}
{% endautoescape %}
", "_jsCssIncludes.twig", "D:\\laragon\\www\\matomo\\plugins\\Morpheus\\templates\\_jsCssIncludes.twig");
    }
}
