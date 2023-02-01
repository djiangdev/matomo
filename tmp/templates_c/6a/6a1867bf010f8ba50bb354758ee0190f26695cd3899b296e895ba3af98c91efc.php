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

/* @ProfessionalServices/promoSessionRecordings.twig */
class __TwigTemplate_9a44a70198b454c5d32a1f2ff187dfeeda319d4cafbeea644fccfda319b65948 extends Template
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
        echo "<p class=\"alert-info alert\">Did you know?
    With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/heatmap-session-recording-learn-more/\">Heatmap & Session Recording</a> you can record all clicks, mouse movements, scrolls and form interactions of your visitors and replay them in a video to truly understand your visitors.
</p>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoSessionRecordings.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"alert-info alert\">Did you know?
    With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/heatmap-session-recording-learn-more/\">Heatmap & Session Recording</a> you can record all clicks, mouse movements, scrolls and form interactions of your visitors and replay them in a video to truly understand your visitors.
</p>
", "@ProfessionalServices/promoSessionRecordings.twig", "D:\\laragon\\www\\matomo\\plugins\\ProfessionalServices\\templates\\promoSessionRecordings.twig");
    }
}
