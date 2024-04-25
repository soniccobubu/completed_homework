<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/about.twig */
class __TwigTemplate_200b6106f1d3c5d64b211aefde512f46 extends Template
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
<h1>About</h1>
";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["info"] ?? null), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/about.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/about.twig", "D:\\projectie\\views\\pages\\about.twig");
    }
}
