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

/* home_page/index.html.twig */
class __TwigTemplate_7bddfea2058702f93cf95b0158413462 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pdf Home";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<style>
    .header-right {
        text-align: right;
        padding: 10px;
    }
    .welcome-title {
        text-align: center;
        margin-top: 50px;
    }
</style>

<h1 class=\"welcome-title\">Bienvenue !</h1>

";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "
<div class=\"container\">
    <div class=\"welcome-message\">
        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "firstname", [], "any", false, false, false, 24)) {
                // line 25
                echo "            <p>Bonjour ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "firstname", [], "any", false, false, false, 25), "html", null, true);
                echo ", vous êtes actuellement connecté sur notre solution de génération de PDF à partir d'URL.</p>
        ";
            } else {
                // line 27
                echo "            <p>Bonjour, vous êtes actuellement connecté sur notre solution de génération de PDF à partir d'URL.</p>
        ";
            }
            // line 29
            echo "        <p>Vous avez l'abonnement : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "getSubscriptionId", [], "method", false, false, false, 29), "getTitle", [], "method", false, false, false, 29), "html", null, true);
            echo ", vous avez le droit à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "getSubscriptionId", [], "method", false, false, false, 29), "getLimitsPdf", [], "method", false, false, false, 29), "html", null, true);
            echo " PDF par jour.</p>
        <p>Vous avez généré ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["pdfCountToday"]) || array_key_exists("pdfCountToday", $context) ? $context["pdfCountToday"] : (function () { throw new RuntimeError('Variable "pdfCountToday" does not exist.', 30, $this->source); })()), "html", null, true);
            echo " PDF(s) aujourd'hui.</p>
        <p>Réinitialisation du nombre de PDF générer dans : <span id=\"countdown\"></span></p>

<script>
        function startCountdown(duration, display) {
            var timer = duration, hours, minutes, seconds;

            setInterval(function () {
                hours = parseInt(timer / 3600, 10);
                minutes = parseInt((timer % 3600) / 60, 10);
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? \"0\" + hours : hours;
                minutes = minutes < 10 ? \"0\" + minutes : minutes;
                seconds = seconds < 10 ? \"0\" + seconds : seconds;

                display.textContent = hours + \"h\" + minutes + \"min\" + seconds + \"s\";

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            var timeLeft = ";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["timeLeft"]) || array_key_exists("timeLeft", $context) ? $context["timeLeft"] : (function () { throw new RuntimeError('Variable "timeLeft" does not exist.', 55, $this->source); })()), "html", null, true);
            echo ";
            var display = document.querySelector('#countdown');
            startCountdown(timeLeft, display);
        };
    </script>
    </div>

    <div class=\"actions\">
        <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pdf_form");
            echo "\" class=\"btn\">Générer un PDF</a>
        <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pdf_history");
            echo "\" class=\"btn\">Historique de vos PDFs</a>
    </div>
</div>

";
        } else {
            // line 69
            echo "
<div class=\"cards-container\">
    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subs"]) || array_key_exists("subs", $context) ? $context["subs"] : (function () { throw new RuntimeError('Variable "subs" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 72
                echo "        <div class=\"card\">
            <h2>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "title", [], "any", false, false, false, 73), "html", null, true);
                echo "</h2>
            <p>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "description", [], "any", false, false, false, 74), "html", null, true);
                echo "</p>
            <p>Limite de ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "limitsPdf", [], "any", false, false, false, 75), "html", null, true);
                echo " PDFs par jour.</p>
            <p>Prix : ";
                // line 76
                (((twig_get_attribute($this->env, $this->source, $context["sub"], "price", [], "any", false, false, false, 76) == 0)) ? (print ("Gratuit")) : (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sub"], "price", [], "any", false, false, false, 76) . "€"), "html", null, true))));
                echo "</p>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "</div>

";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home_page/index.html.twig";
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
        return array (  213 => 79,  204 => 76,  200 => 75,  196 => 74,  192 => 73,  189 => 72,  185 => 71,  181 => 69,  173 => 64,  169 => 63,  158 => 55,  130 => 30,  123 => 29,  119 => 27,  113 => 25,  111 => 24,  106 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pdf Home{% endblock %}

{% block body %}

<style>
    .header-right {
        text-align: right;
        padding: 10px;
    }
    .welcome-title {
        text-align: center;
        margin-top: 50px;
    }
</style>

<h1 class=\"welcome-title\">Bienvenue !</h1>

{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}

<div class=\"container\">
    <div class=\"welcome-message\">
        {% if app.user.firstname %}
            <p>Bonjour {{ app.user.firstname }}, vous êtes actuellement connecté sur notre solution de génération de PDF à partir d'URL.</p>
        {% else %}
            <p>Bonjour, vous êtes actuellement connecté sur notre solution de génération de PDF à partir d'URL.</p>
        {% endif %}
        <p>Vous avez l'abonnement : {{ user.getSubscriptionId().getTitle() }}, vous avez le droit à {{ user.getSubscriptionId().getLimitsPdf() }} PDF par jour.</p>
        <p>Vous avez généré {{ pdfCountToday }} PDF(s) aujourd'hui.</p>
        <p>Réinitialisation du nombre de PDF générer dans : <span id=\"countdown\"></span></p>

<script>
        function startCountdown(duration, display) {
            var timer = duration, hours, minutes, seconds;

            setInterval(function () {
                hours = parseInt(timer / 3600, 10);
                minutes = parseInt((timer % 3600) / 60, 10);
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? \"0\" + hours : hours;
                minutes = minutes < 10 ? \"0\" + minutes : minutes;
                seconds = seconds < 10 ? \"0\" + seconds : seconds;

                display.textContent = hours + \"h\" + minutes + \"min\" + seconds + \"s\";

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            var timeLeft = {{ timeLeft }};
            var display = document.querySelector('#countdown');
            startCountdown(timeLeft, display);
        };
    </script>
    </div>

    <div class=\"actions\">
        <a href=\"{{ path('app_pdf_form') }}\" class=\"btn\">Générer un PDF</a>
        <a href=\"{{ path('app_pdf_history') }}\" class=\"btn\">Historique de vos PDFs</a>
    </div>
</div>

{% else %}

<div class=\"cards-container\">
    {% for sub in subs %}
        <div class=\"card\">
            <h2>{{ sub.title }}</h2>
            <p>{{ sub.description }}</p>
            <p>Limite de {{ sub.limitsPdf }} PDFs par jour.</p>
            <p>Prix : {{ sub.price == 0 ? 'Gratuit' : (sub.price ~ '€') }}</p>
        </div>
    {% endfor %}
</div>

{% endif %}
{% endblock %}
", "home_page/index.html.twig", "/var/www/gotenberg/templates/home_page/index.html.twig");
    }
}
