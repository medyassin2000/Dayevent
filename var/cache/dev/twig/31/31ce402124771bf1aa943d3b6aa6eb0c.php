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

/* commentaire_rec/show.html.twig */
class __TwigTemplate_e952c6e7a6900d34ae9ef5ea5e1b9d29 extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire_rec/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire_rec/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "commentaire_rec/show.html.twig", 1);
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

        echo "CommentaireRec";
        
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
        echo "    <h1>CommentaireRec</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdComm</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentaire_rec"]) || array_key_exists("commentaire_rec", $context) ? $context["commentaire_rec"] : (function () { throw new RuntimeError('Variable "commentaire_rec" does not exist.', 12, $this->source); })()), "idComm", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateComm</th>
                <td>";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["commentaire_rec"]) || array_key_exists("commentaire_rec", $context) ? $context["commentaire_rec"] : (function () { throw new RuntimeError('Variable "commentaire_rec" does not exist.', 16, $this->source); })()), "dateComm", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentaire_rec"]) || array_key_exists("commentaire_rec", $context) ? $context["commentaire_rec"] : (function () { throw new RuntimeError('Variable "commentaire_rec" does not exist.', 16, $this->source); })()), "dateComm", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentaire_rec"]) || array_key_exists("commentaire_rec", $context) ? $context["commentaire_rec"] : (function () { throw new RuntimeError('Variable "commentaire_rec" does not exist.', 20, $this->source); })()), "contenu", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>La Reclamation</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentaire_rec"]) || array_key_exists("commentaire_rec", $context) ? $context["commentaire_rec"] : (function () { throw new RuntimeError('Variable "commentaire_rec" does not exist.', 24, $this->source); })()), "idRec", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_rec_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_rec_edit", ["idComm" => twig_get_attribute($this->env, $this->source, (isset($context["commentaire_rec"]) || array_key_exists("commentaire_rec", $context) ? $context["commentaire_rec"] : (function () { throw new RuntimeError('Variable "commentaire_rec" does not exist.', 31, $this->source); })()), "idComm", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 33
        echo twig_include($this->env, $context, "commentaire_rec/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "commentaire_rec/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  130 => 31,  125 => 29,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}CommentaireRec{% endblock %}

{% block body %}
    <h1>CommentaireRec</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdComm</th>
                <td>{{ commentaire_rec.idComm }}</td>
            </tr>
            <tr>
                <th>DateComm</th>
                <td>{{ commentaire_rec.dateComm ? commentaire_rec.dateComm|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ commentaire_rec.contenu }}</td>
            </tr>
             <tr>
                <th>La Reclamation</th>
                <td>{{ commentaire_rec.idRec }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_commentaire_rec_index') }}\">back to list</a>

    <a href=\"{{ path('app_commentaire_rec_edit', {'idComm': commentaire_rec.idComm}) }}\">edit</a>

    {{ include('commentaire_rec/_delete_form.html.twig') }}
{% endblock %}
", "commentaire_rec/show.html.twig", "C:\\Users\\user\\Desktop\\Reclamation\\templates\\commentaire_rec\\show.html.twig");
    }
}
