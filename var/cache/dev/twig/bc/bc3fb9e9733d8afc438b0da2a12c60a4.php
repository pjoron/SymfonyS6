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

/* manage_profil/index.html.twig */
class __TwigTemplate_cb1cd2ba85a4b33a34cd1ab80f42b1ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manage_profil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manage_profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manage_profil/index.html.twig", 1);
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

        echo "Mise à jour du profil";
        
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
        echo "<div class=\"container_profil\">
    <h1>Mise à jour du profil</h1>

    <form method=\"post\">
        <div class=\"mb-3\">
            <label for=\"firstname\" class=\"form-label\">Prénom</label>
            <input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
        </div>
        <div class=\"mb-3\">
            <label for=\"lastname\" class=\"form-label\">Nom</label>
            <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "lastname", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
        </div>



        <div class=\"mb-3\">
            <label for=\"subscriptionId\" class=\"form-label\">Abonnement</label>
            <select class=\"form-control\" id=\"subscriptionId\" name=\"subscriptionId\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 25
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "subscriptionId", [], "any", false, false, false, 25) == $context["subscription"])) {
                echo "selected";
            }
            echo ">
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </select>
        </div>

        
        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "manage_profil/index.html.twig";
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
        return array (  136 => 29,  127 => 26,  118 => 25,  114 => 24,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mise à jour du profil{% endblock %}

{% block body %}
<div class=\"container_profil\">
    <h1>Mise à jour du profil</h1>

    <form method=\"post\">
        <div class=\"mb-3\">
            <label for=\"firstname\" class=\"form-label\">Prénom</label>
            <input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\" value=\"{{ user.firstname }}\">
        </div>
        <div class=\"mb-3\">
            <label for=\"lastname\" class=\"form-label\">Nom</label>
            <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" value=\"{{ user.lastname }}\">
        </div>



        <div class=\"mb-3\">
            <label for=\"subscriptionId\" class=\"form-label\">Abonnement</label>
            <select class=\"form-control\" id=\"subscriptionId\" name=\"subscriptionId\">
                {% for subscription in subscriptions %}
                    <option value=\"{{ subscription.id }}\" {% if user.subscriptionId == subscription %}selected{% endif %}>
                        {{ subscription.title }}
                    </option>
                {% endfor %}
            </select>
        </div>

        
        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
    </form>
</div>
{% endblock %}
", "manage_profil/index.html.twig", "/var/www/gotenberg/templates/manage_profil/index.html.twig");
    }
}
