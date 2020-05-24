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

/* login.twig */
class __TwigTemplate_649579ef45daaa01036d06883ccfa7d2fb1eae10ad6e178bafbe134a30e4c241 extends Template
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
        $this->parent = $this->loadTemplate("main-template.twig", "login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class='login-container'>
    <div class='row'>
        <div class='col s8 offset-s2'>
            <h1 class='login-header'>Zaloguj się</h1>
        </div>
    </div>
    <form class='login-form'>
        <div class='row'>
            <div class='col s4 offset-s4'>
                <div class=\"input-field\">
                    <input class=\"input-field\" id=\"login\" type=\"text\" class=\"validate\">
                    <label for=\"login\">Login</label>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s4 offset-s4'>
                <div class=\"input-field\">
                    <input id=\"password\" type=\"password\" class=\"validate\">
                    <label for=\"password\">Hasło</label>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s4 offset-s4'>
                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Zaloguj
                </button>
            </div>
        </div>
    </form>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$('.datepicker').datepicker();
    });
    \$(document).ready(function(){
        \$('select').formSelect();
    });
    \$(document).ready(function() {
        M.updateTextFields();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
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
<div class='login-container'>
    <div class='row'>
        <div class='col s8 offset-s2'>
            <h1 class='login-header'>Zaloguj się</h1>
        </div>
    </div>
    <form class='login-form'>
        <div class='row'>
            <div class='col s4 offset-s4'>
                <div class=\"input-field\">
                    <input class=\"input-field\" id=\"login\" type=\"text\" class=\"validate\">
                    <label for=\"login\">Login</label>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s4 offset-s4'>
                <div class=\"input-field\">
                    <input id=\"password\" type=\"password\" class=\"validate\">
                    <label for=\"password\">Hasło</label>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s4 offset-s4'>
                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Zaloguj
                </button>
            </div>
        </div>
    </form>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$('.datepicker').datepicker();
    });
    \$(document).ready(function(){
        \$('select').formSelect();
    });
    \$(document).ready(function() {
        M.updateTextFields();
    });
</script>
{% endblock %}", "login.twig", "X:\\Projekty\\slim3-skeleton-master\\slim3-skeleton-master\\app\\templates\\login.twig");
    }
}
