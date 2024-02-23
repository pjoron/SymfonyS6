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

/* history/index.html.twig */
class __TwigTemplate_fc561a68e4569b814a1664ca0cbf1763 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "history/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


<div class=\"container_history\">
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["pdfs"]) || array_key_exists("pdfs", $context) ? $context["pdfs"] : (function () { throw new RuntimeError('Variable "pdfs" does not exist.', 7, $this->source); })())) > 0)) {
            // line 8
            echo "
        <h1>Historique des PDF</h1>
            
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Titre</th>
                    <th scope=\"col\">Date de création</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pdfs"]) || array_key_exists("pdfs", $context) ? $context["pdfs"] : (function () { throw new RuntimeError('Variable "pdfs" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pdf"]) {
                // line 21
                echo "                    <tr>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pdf"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pdf"], "createdAt", [], "any", false, false, false, 23), "d/m/Y H:i:s"), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pdf_view", ["id" => twig_get_attribute($this->env, $this->source, $context["pdf"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Visualiser</a>
                            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pdf_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["pdf"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce PDF ?');\">Supprimer</a>

                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 34
            echo "        <div class=\"alert alert-warning\">Vous n'avez pas de PDFs enregistrés.</div>
    ";
        }
        // line 36
        echo "
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
        return "history/index.html.twig";
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
        return array (  130 => 36,  126 => 34,  121 => 31,  110 => 26,  106 => 25,  101 => 23,  97 => 22,  94 => 21,  90 => 20,  76 => 8,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}



<div class=\"container_history\">
    {% if pdfs|length > 0 %}

        <h1>Historique des PDF</h1>
            
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Titre</th>
                    <th scope=\"col\">Date de création</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for pdf in pdfs %}
                    <tr>
                        <td>{{ pdf.title }}</td>
                        <td>{{ pdf.createdAt|date('d/m/Y H:i:s') }}</td>
                        <td>
                            <a href=\"{{ path('app_pdf_view', {'id': pdf.id}) }}\" class=\"btn btn-primary\">Visualiser</a>
                            <a href=\"{{ path('app_pdf_delete', {'id': pdf.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce PDF ?');\">Supprimer</a>

                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"alert alert-warning\">Vous n'avez pas de PDFs enregistrés.</div>
    {% endif %}

</div>
{% endblock %}", "history/index.html.twig", "/var/www/gotenberg/templates/history/index.html.twig");
    }
}
