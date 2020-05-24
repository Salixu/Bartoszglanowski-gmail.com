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

/* consultations.twig */
class __TwigTemplate_5188784bf7c9ebacb2622072cb2ed20303c455c8df23bf01a32f441620dda52d extends Template
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
        $this->parent = $this->loadTemplate("main-template.twig", "consultations.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script>
        \$(document).ready(function(){
            \$('.datepicker').datepicker(
                {
                    beforeShowDay: function(d) {
                        var day = d.getDay();
                        return [(day != 0 && day != 3)];
                    }
                });
        });
    </script>
<div class='consultations-container'>
    <div class='row'>
        <div class='col s8 offset-s2'>
            <h1 class='consultations-header'>Umów konsultacje</h1>
        </div>
    </div>
    <form action='' class='consultations-form'>
        <div class='row'>
            <div class='col s3 offset-s3'>
                <div class=\"input-field\">
                    <input class='input-field' id=\"first_name\" type=\"text\" class=\"validate\">
                    <label for=\"first_name\">Imię</label>
                </div>
            </div>
            <div class='col s3'>
                <div class=\"input-field\">
                    <input id=\"last_name\" type=\"text\" class=\"validate\">
                    <label for=\"last_name\">Nazwisko</label>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s6 offset-s3'>
                <div class=\"input-field\">
                    <input id=\"email\" type=\"email\" class=\"validate\">
                    <label for=\"email\">Email</label>
                    <span class=\"helper-text\" data-error=\"Email niepoprawny\" data-success=\"\"></span>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s3 offset-s3'>
                <input placeholder='Wybierz datę' type=\"text\"class=\"datepicker\">
            </div>
            <div class='col s3'>
                <select>
                    <option class='disable' value=\"\" disabled selected>Wybierz przedmiot</option>
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 53
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["subject"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["subject"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    <option value=\"Inne\">Inne</option>
                </select>
            </div>
        </div>
        <div class='row'>
            <div class='col s6 offset-s3'>
                <div class=\"input-field\">
                    <textarea id=\"textarea\" class=\"materialize-textarea\"></textarea>
                    <label for=\"textarea\">Opis konsultacji (nie wymagane)</label>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s2 offset-s7'>
                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Wyślij
                    <i class=\"material-icons right\">send</i>
                </button>
            </div>
        </div>
    </form>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){

        var dates = [\"25/05/2020\", \"17/05/2020\", \"2/04/2020\"];

        function disableDates(date){
            var string = jQuery.datepicker.formatDate('dd/mm/yy', date);
            return [dates.indexOf(string) == -1];
        }

        \$('.datepicker').datepicker(
        {
            beforeShowDay: disableDates
        });

        \$('select').formSelect();

        M.updateTextFields();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "consultations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 55,  104 => 53,  100 => 52,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main-template.twig\" %}

{% block content %}
    <script>
        \$(document).ready(function(){
            \$('.datepicker').datepicker(
                {
                    beforeShowDay: function(d) {
                        var day = d.getDay();
                        return [(day != 0 && day != 3)];
                    }
                });
        });
    </script>
<div class='consultations-container'>
    <div class='row'>
        <div class='col s8 offset-s2'>
            <h1 class='consultations-header'>Umów konsultacje</h1>
        </div>
    </div>
    <form action='' class='consultations-form'>
        <div class='row'>
            <div class='col s3 offset-s3'>
                <div class=\"input-field\">
                    <input class='input-field' id=\"first_name\" type=\"text\" class=\"validate\">
                    <label for=\"first_name\">Imię</label>
                </div>
            </div>
            <div class='col s3'>
                <div class=\"input-field\">
                    <input id=\"last_name\" type=\"text\" class=\"validate\">
                    <label for=\"last_name\">Nazwisko</label>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s6 offset-s3'>
                <div class=\"input-field\">
                    <input id=\"email\" type=\"email\" class=\"validate\">
                    <label for=\"email\">Email</label>
                    <span class=\"helper-text\" data-error=\"Email niepoprawny\" data-success=\"\"></span>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s3 offset-s3'>
                <input placeholder='Wybierz datę' type=\"text\"class=\"datepicker\">
            </div>
            <div class='col s3'>
                <select>
                    <option class='disable' value=\"\" disabled selected>Wybierz przedmiot</option>
                    {% for subject in subjects %}
                        <option value=\"{{ subject }}\">{{ subject }}</option>
                    {% endfor %}
                    <option value=\"Inne\">Inne</option>
                </select>
            </div>
        </div>
        <div class='row'>
            <div class='col s6 offset-s3'>
                <div class=\"input-field\">
                    <textarea id=\"textarea\" class=\"materialize-textarea\"></textarea>
                    <label for=\"textarea\">Opis konsultacji (nie wymagane)</label>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col s2 offset-s7'>
                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Wyślij
                    <i class=\"material-icons right\">send</i>
                </button>
            </div>
        </div>
    </form>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){

        var dates = [\"25/05/2020\", \"17/05/2020\", \"2/04/2020\"];

        function disableDates(date){
            var string = jQuery.datepicker.formatDate('dd/mm/yy', date);
            return [dates.indexOf(string) == -1];
        }

        \$('.datepicker').datepicker(
        {
            beforeShowDay: disableDates
        });

        \$('select').formSelect();

        M.updateTextFields();
    });
</script>
{% endblock content %}", "consultations.twig", "X:\\Projekty\\slim3-skeleton-master\\slim3-skeleton-master\\app\\templates\\consultations.twig");
    }
}
