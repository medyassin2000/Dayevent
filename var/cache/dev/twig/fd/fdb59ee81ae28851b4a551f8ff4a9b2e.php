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

/* pdf_template.html.twig */
class __TwigTemplate_f8d967adf69e5514ed49b73d1c13d013 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</title>
\t<style>
\t\tbody {
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tline-height: 1.4;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t}
\t\ttable {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t}
\t\tth, td {
\t\t\tpadding: 8px;
\t\t\tborder: 1px solid #ccc;
\t\t\ttext-align: left;
\t\t}
\t\tth {
\t\t\tbackground-color: #f2f2f2;
\t\t}
\t</style>
</head>
<body>
\t<h1>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</h1>
\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Tel</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 42
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "idRec", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "tel", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t</tbody>
\t</table>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pdf_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 50,  114 => 47,  110 => 46,  106 => 45,  102 => 44,  98 => 43,  95 => 42,  91 => 41,  76 => 29,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>{{ title }}</title>
\t<style>
\t\tbody {
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tline-height: 1.4;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t}
\t\ttable {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t}
\t\tth, td {
\t\t\tpadding: 8px;
\t\t\tborder: 1px solid #ccc;
\t\t\ttext-align: left;
\t\t}
\t\tth {
\t\t\tbackground-color: #f2f2f2;
\t\t}
\t</style>
</head>
<body>
\t<h1>{{ title }}</h1>
\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Tel</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for reclamation in reclamations %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ reclamation.idRec }}</td>
\t\t\t\t\t<td>{{ reclamation.dateRec|date('Y-m-d') }}</td>
\t\t\t\t\t<td>{{ reclamation.titre }}</td>
\t\t\t\t\t<td>{{ reclamation.description }}</td>
\t\t\t\t\t<td>{{ reclamation.tel }}</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</body>
</html>
", "pdf_template.html.twig", "C:\\Users\\user\\Desktop\\slimweb\\templates\\pdf_template.html.twig");
    }
}
