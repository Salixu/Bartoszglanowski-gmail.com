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

/* main-tmpl.twig */
class __TwigTemplate_3e4b773b68bdaaadffa2185a42fe202288c6664e0fbc20223e15e614bc48ec5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"The HTML5 Herald\">
    <meta name=\"author\" content=\"SitePoint\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <link rel=\"stylesheet\" href=\"../css/style.css\">

</head>

<body>
    <div class='container'>
        <div class='row'>
            <div class='col s6'>
                <a href='#'>Strona główna</a>
            </div>
            <div class='col s6'>
                <a href='#'>Zarządzaj konsultacjami</a>
            </div>
        </div>
        <div id='content'>
            ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "        </div>
    </div>
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "            ";
    }

    public function getTemplateName()
    {
        return "main-tmpl.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  84 => 26,  78 => 6,  71 => 28,  69 => 26,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main-tmpl.twig", "C:\\xampp\\htdocs\\Slim-app-project\\resources\\views\\main-tmpl.twig");
    }
}
