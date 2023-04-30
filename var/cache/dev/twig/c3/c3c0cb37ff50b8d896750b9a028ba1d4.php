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

/* commentaire_rec/_delete_form.html.twig */
class __TwigTemplate_2a18a408edda7be2cc4f57c14811d500 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire_rec/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire_rec/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_rec_delete", ["idComm" => twig_get_attribute($this->env, $this->source, (isset($context["commentaire_rec"]) || array_key_exists("commentaire_rec", $context) ? $context["commentaire_rec"] : (function () { throw new RuntimeError('Variable "commentaire_rec" does not exist.', 1, $this->source); })()), "idComm", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["commentaire_rec"]) || array_key_exists("commentaire_rec", $context) ? $context["commentaire_rec"] : (function () { throw new RuntimeError('Variable "commentaire_rec" does not exist.', 2, $this->source); })()), "idComm", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
  
  <button type=\"submit\" class=\"btn btn-save\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 4, $this->source); })()), "Delete")) : ("Delete")), "html", null, true);
        echo "</button>
    <style>
.btn-save {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 1.2rem;
  cursor: pointer;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

.btn-save:hover {
  background-color: #0069d9;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  transform: translateY(-2px);
}
</style>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "commentaire_rec/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_commentaire_rec_delete', {'idComm': commentaire_rec.idComm}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ commentaire_rec.idComm) }}\">
  
  <button type=\"submit\" class=\"btn btn-save\">{{ button_label|default('Delete') }}</button>
    <style>
.btn-save {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 1.2rem;
  cursor: pointer;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

.btn-save:hover {
  background-color: #0069d9;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  transform: translateY(-2px);
}
</style>
</form>
", "commentaire_rec/_delete_form.html.twig", "C:\\Users\\user\\Desktop\\slimweb\\templates\\commentaire_rec\\_delete_form.html.twig");
    }
}
