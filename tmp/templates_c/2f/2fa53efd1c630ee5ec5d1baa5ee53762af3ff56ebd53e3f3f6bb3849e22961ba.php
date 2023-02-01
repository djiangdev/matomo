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

/* @Feedback/feedbackQuestionBanner.twig */
class __TwigTemplate_9cccc22d987f15899507a6509777c5da8f5faef7e8d658671e29913466af7440 extends Template
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
        echo "<div piwik-feedback-question show-question-banner=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["showQuestionBanner"]) || array_key_exists("showQuestionBanner", $context) ? $context["showQuestionBanner"] : (function () { throw new RuntimeError('Variable "showQuestionBanner" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\"></div>";
    }

    public function getTemplateName()
    {
        return "@Feedback/feedbackQuestionBanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-feedback-question show-question-banner=\"{{ showQuestionBanner }}\"></div>", "@Feedback/feedbackQuestionBanner.twig", "D:\\laragon\\www\\matomo\\plugins\\Feedback\\templates\\feedbackQuestionBanner.twig");
    }
}
