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

/* reclamation/statistique.html.twig */
class __TwigTemplate_4c42b00937e0c15642ed16061f97d5cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/statistique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/statistique.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reclamation/statistique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    <h1>Statistiques :</h1>
<div class=\"row-stat\">
  <div class=\"cell-stat\">
    <h2>Line Chart</h2>
    <div id=\"chart1\"></div>
  </div>
  <div class=\"cell-stat\">
    <h2>Bar Chart</h2>
    <div id=\"chart2\"></div>
  </div>
  
  <div class=\"cell-stat\">
    <h2>Area Chart</h2>
    <div id=\"chart3\"></div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo " <script src=\"https://unpkg.com/singledivui/dist/singledivui.min.js\"></script>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) { 
 const { Chart } = SingleDivUI;
 
const options = {
  data: {
    labels: ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 33, $this->source); })()), "html", null, true);
        echo ",
    series: {
      points: ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "
    }
  },
  height: 200,
  width: 400
};

new Chart('#chart1',  {
    type: 'line',
    ...options  
});

new Chart('#chart2',  {
    type: 'bar',
    ...options
});

new Chart('#chart3',  {
    type: 'area',
    ...options
});
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/statistique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  114 => 33,  105 => 26,  95 => 25,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}



{% block body %}
    <h1>Statistiques :</h1>
<div class=\"row-stat\">
  <div class=\"cell-stat\">
    <h2>Line Chart</h2>
    <div id=\"chart1\"></div>
  </div>
  <div class=\"cell-stat\">
    <h2>Bar Chart</h2>
    <div id=\"chart2\"></div>
  </div>
  
  <div class=\"cell-stat\">
    <h2>Area Chart</h2>
    <div id=\"chart3\"></div>
  </div>
</div>
{% endblock %}    


{% block javascripts %}
 <script src=\"https://unpkg.com/singledivui/dist/singledivui.min.js\"></script>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) { 
 const { Chart } = SingleDivUI;
 
const options = {
  data: {
    labels: {{years}},
    series: {
      points: {{data}}
    }
  },
  height: 200,
  width: 400
};

new Chart('#chart1',  {
    type: 'line',
    ...options  
});

new Chart('#chart2',  {
    type: 'bar',
    ...options
});

new Chart('#chart3',  {
    type: 'area',
    ...options
});
});
</script>
{% endblock %}
   
", "reclamation/statistique.html.twig", "C:\\Users\\user\\Desktop\\Reclamation\\templates\\reclamation\\statistique.html.twig");
    }
}
