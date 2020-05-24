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

/* home.twig */
class __TwigTemplate_3b76759a094e62a5639b38cdfc605942501689d76bc640dcb587258026f916dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main-template.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("main-template.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class='home-content'>
    <h1 class='home-header'>Witaj!</h1>
    <p class='home-paragraph'>
        Na naszej stronie umówisz się na konsultacje! Aby przejść do podstrony i umówić się na rozmowę, przejdź do zakładki umów konsultacje, aby zarządzać propozycjami konsultacji wysłanych przez uczniów należy zalogować się na konto administratora przechodząc do podstrony /login i przejść do zakładki zarządzaj konsultacjami.
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main-template.twig\" %}

{% block content %}
<div class='home-content'>
    <h1 class='home-header'>Witaj!</h1>
    <p class='home-paragraph'>
        Na naszej stronie umówisz się na konsultacje! Aby przejść do podstrony i umówić się na rozmowę, przejdź do zakładki umów konsultacje, aby zarządzać propozycjami konsultacji wysłanych przez uczniów należy zalogować się na konto administratora przechodząc do podstrony /login i przejść do zakładki zarządzaj konsultacjami.
    </p>
</div>
{% endblock %}", "home.twig", "X:\\Projekty\\slim3-skeleton-master\\slim3-skeleton-master\\app\\templates\\home.twig");
    }
}
