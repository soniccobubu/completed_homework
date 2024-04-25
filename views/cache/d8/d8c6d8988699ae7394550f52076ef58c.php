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

/* index.twig */
class __TwigTemplate_c7f216a73ce23dc01a0249e549ac0f4e extends Template
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
        yield "

<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>
        ";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["title"] ?? null), "html", null, true);
        yield "
    </title>
</head>
<body>
    ";
        // line 15
        yield from         $this->loadTemplate("nav.twig", "index.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "    ";
        yield from         $this->loadTemplate((("pages/" . ($context["page"] ?? null)) . ".twig"), "index.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "    ";
        yield from         $this->loadTemplate("footer/footer.twig", "index.twig", 17)->unwrap()->yield($context);
        // line 21
        yield "</body>
</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.twig";
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
        return array (  65 => 21,  62 => 17,  59 => 16,  57 => 15,  50 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "D:\\projectie\\views\\index.twig");
    }
}
