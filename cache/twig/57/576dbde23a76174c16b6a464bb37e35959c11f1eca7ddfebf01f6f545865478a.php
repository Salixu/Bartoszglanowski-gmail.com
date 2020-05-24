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

/* main-template.twig */
class __TwigTemplate_8edc259bc2475fc69d9d2ce31664d9df5dbb89de249c848dbeaf6abf04d3d1a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">

    <title>Konsultacje</title>
    <meta name=\"description\" content=\"The HTML5 Herald\">
    <meta name=\"author\" content=\"SitePoint\">

    <!--Import Google Icon Font-->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/materialize.min.css\"  media=\"screen,projection\"/>

    <link rel=\"stylesheet\" href=\"../css/style.css\">
</head>

<body>
<div class='container'>
    <nav>
        <div class=\"nav-wrapper\">
            <a href=\"/home\" style='margin-left:1em' class=\"brand-logo\">KonsultacjeAPP</a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                <li><a href=\"/consultations\" class='nav-ele'>Umów konsultacje</a></li>
                <li><a href=\"#\" class='nav-ele'>Zarządzaj konsultacjami</a></li>
            </ul>
        </div>
    </nav>
    <div id='content'>
        ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "    </div>
    <div id='footer'>
        <p>Autorzy: Kasprzak Dominik, Bartosz Glanowski</p>
        <p>Github projektu: <a class='footer-link' href='https://github.com/Salixu/Slim-app-project'>tutaj</a></p>
    </div>
</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

<!--JavaScript at end of body for optimized loading-->
<script type=\"text/javascript\" src=\"../js/materialize.min.js\"></script>
</body>
</html>
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main-template.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  70 => 30,  68 => 29,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">

    <title>Konsultacje</title>
    <meta name=\"description\" content=\"The HTML5 Herald\">
    <meta name=\"author\" content=\"SitePoint\">

    <!--Import Google Icon Font-->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/materialize.min.css\"  media=\"screen,projection\"/>

    <link rel=\"stylesheet\" href=\"../css/style.css\">
</head>

<body>
<div class='container'>
    <nav>
        <div class=\"nav-wrapper\">
            <a href=\"/home\" style='margin-left:1em' class=\"brand-logo\">KonsultacjeAPP</a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                <li><a href=\"/consultations\" class='nav-ele'>Umów konsultacje</a></li>
                <li><a href=\"#\" class='nav-ele'>Zarządzaj konsultacjami</a></li>
            </ul>
        </div>
    </nav>
    <div id='content'>
        {% block content %}{% endblock %}
    </div>
    <div id='footer'>
        <p>Autorzy: Kasprzak Dominik, Bartosz Glanowski</p>
        <p>Github projektu: <a class='footer-link' href='https://github.com/Salixu/Slim-app-project'>tutaj</a></p>
    </div>
</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

<!--JavaScript at end of body for optimized loading-->
<script type=\"text/javascript\" src=\"../js/materialize.min.js\"></script>
</body>
</html>
", "main-template.twig", "X:\\Projekty\\slim3-skeleton-master\\slim3-skeleton-master\\app\\templates\\main-template.twig");
    }
}
