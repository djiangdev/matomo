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

/* @Live/ajaxTotalVisitors.twig */
class __TwigTemplate_1e21f412b64bb82316fbbf872e69a41ec65b5dbe1e1fec759d03f1afe2a4de7f extends Template
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
        $this->loadTemplate("@Live/_totalVisitors.twig", "@Live/ajaxTotalVisitors.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@Live/ajaxTotalVisitors.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"@Live/_totalVisitors.twig\" %}", "@Live/ajaxTotalVisitors.twig", "D:\\laragon\\www\\matomo\\plugins\\Live\\templates\\ajaxTotalVisitors.twig");
    }
}
