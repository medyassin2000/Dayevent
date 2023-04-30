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

/* contact.html.twig */
class __TwigTemplate_f34a6977238f49bdf731f6bd3db8db9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        // line 1
        echo "



<!DOCTYPE html>
<html lang=\"zxx\">
   <head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"DJoz Template\">
    <meta name=\"keywords\" content=\"DJoz, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Day Event | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

     ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
</head>
<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Header Section Begin -->
    <header class=\"header header--normal\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2\">
                    <div class=\"header__logo\">
                        <a href=\"./index.html\"><img src=\"fontend/img/log1.png\" alt=\"\"width=\"55\" height=\"55\"></a>
                        <span style=\"font-size: 20px; color: white;\">Day Event</span>
                    </div>
                </div>
                
                <div class=\"col-lg-10 col-md-10\">
                    <div class=\"header__nav\">
                        <nav class=\"header__menu mobile-menu\">
                            <ul>
                                <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_frontend");
        echo "\">Home</a></li>
                                
                                <li class=\"active\"><a href=\"./contact.html\">Contact</a></li>
                            </ul>
                        </nav>
                        <div class=\"header__right__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"mobile-menu-wrap\"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class=\"breadcrumb-option\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb__links\">
                        <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_frontend");
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Map Begin -->
    <div class=\"map\">
        <div class=\"container\">
            <iframe
               src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12884.28976873909!2d10.206727578190395!3d36.86034842044272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1301edc6d5b6a28d%3A0xeaa833e6a5a6c943!2sLa%20Soukra%2C%20Tunis%2C%20Tunisia!5e0!3m2!1sen!2sus!4v1650011422086!5m2!1sen!2sus\"
                height=\"585\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class=\"contact spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"contact__address\">
                        <div class=\"section-title\">
                            <h2>Contact info</h2>
                        </div>
                        
                        <ul>
                            <li>
                                <i class=\"fa fa-map-marker\"></i>
                                <h5>Address</h5>
                                <p>Ariana ,La Soukra</p>
                            </li>
                            <li>
                                <i class=\"fa fa-phone\"></i>
                                <h5>Hotline</h5>
                                <span>96506632</span>
                                <span>26382407</span>
                            </li>
                            <li>
                                <i class=\"fa fa-envelope\"></i>
                                <h5>Email</h5>
                                <p>pidevpidev612@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"contact__form\">
                        <div class=\"section-title\">
                            <h2>Get in touch</h2>
                        </div>
                        
                        
                       ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'widget');
        echo "
    
    <button type=\"submit\" class=\"btn btn-save\">";
        // line 140
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 140, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
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

";
        // line 163
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), 'form_end');
        echo "

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class=\"footer footer--normal spad set-bg\" data-setbg=\"img/footer-bg.png\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer__address\">
                        <ul>
                            <li>
                                <i class=\"fa fa-phone\"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class=\"fa fa-envelope\"></i>
                                <p>Email</p>
                                <h6>DJ.Music@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 offset-lg-1 col-md-6\">
                    <div class=\"footer__social\">
                        <h2>DJoz</h2>
                        <div class=\"footer__social__links\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 offset-lg-1 col-md-6\">
                    <div class=\"footer__newslatter\">
                        <h4>Stay With me</h4>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Email\">
                            <button type=\"submit\"><i class=\"fa fa-send-o\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
";
        // line 218
        $this->displayBlock('javascripts', $context, $blocks);
        // line 234
        echo "</body>



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    <!-- Google Font -->
     <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap"), "html", null, true);
        echo "\"rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/barfiller.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/nowfont.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/rockville.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 218
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 219
        echo "    <!-- Js Plugins -->
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.barfiller.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/main.js"), "html", null, true);
        echo "\"></script>

    <!-- Music Plugin -->
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.jplayer.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jplayerInit.js"), "html", null, true);
        echo "\"></script>
       ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 232,  401 => 231,  395 => 228,  391 => 227,  387 => 226,  383 => 225,  379 => 224,  375 => 223,  371 => 222,  367 => 221,  363 => 220,  360 => 219,  350 => 218,  338 => 31,  334 => 30,  330 => 29,  326 => 28,  322 => 27,  318 => 26,  314 => 25,  310 => 24,  306 => 23,  300 => 20,  297 => 19,  287 => 18,  273 => 234,  271 => 218,  213 => 163,  187 => 140,  182 => 138,  178 => 137,  119 => 81,  91 => 56,  66 => 33,  64 => 18,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



<!DOCTYPE html>
<html lang=\"zxx\">
   <head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"DJoz Template\">
    <meta name=\"keywords\" content=\"DJoz, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Day Event | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

     {% block stylesheets %}
    <!-- Google Font -->
     <link href=\"{{ asset ('https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap')}}\"rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/bootstrap.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/font-awesome.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/barfiller.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/nowfont.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/rockville.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/magnific-popup.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/owl.carousel.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/slicknav.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/style.css')}}\" type=\"text/css\">
  {% endblock %}

</head>
<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Header Section Begin -->
    <header class=\"header header--normal\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2\">
                    <div class=\"header__logo\">
                        <a href=\"./index.html\"><img src=\"fontend/img/log1.png\" alt=\"\"width=\"55\" height=\"55\"></a>
                        <span style=\"font-size: 20px; color: white;\">Day Event</span>
                    </div>
                </div>
                
                <div class=\"col-lg-10 col-md-10\">
                    <div class=\"header__nav\">
                        <nav class=\"header__menu mobile-menu\">
                            <ul>
                                <li><a href=\"{{path('app_reclamation_frontend')}}\">Home</a></li>
                                
                                <li class=\"active\"><a href=\"./contact.html\">Contact</a></li>
                            </ul>
                        </nav>
                        <div class=\"header__right__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"mobile-menu-wrap\"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class=\"breadcrumb-option\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb__links\">
                        <a href=\"{{path('app_reclamation_frontend')}}\"><i class=\"fa fa-home\"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Map Begin -->
    <div class=\"map\">
        <div class=\"container\">
            <iframe
               src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12884.28976873909!2d10.206727578190395!3d36.86034842044272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1301edc6d5b6a28d%3A0xeaa833e6a5a6c943!2sLa%20Soukra%2C%20Tunis%2C%20Tunisia!5e0!3m2!1sen!2sus!4v1650011422086!5m2!1sen!2sus\"
                height=\"585\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class=\"contact spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"contact__address\">
                        <div class=\"section-title\">
                            <h2>Contact info</h2>
                        </div>
                        
                        <ul>
                            <li>
                                <i class=\"fa fa-map-marker\"></i>
                                <h5>Address</h5>
                                <p>Ariana ,La Soukra</p>
                            </li>
                            <li>
                                <i class=\"fa fa-phone\"></i>
                                <h5>Hotline</h5>
                                <span>96506632</span>
                                <span>26382407</span>
                            </li>
                            <li>
                                <i class=\"fa fa-envelope\"></i>
                                <h5>Email</h5>
                                <p>pidevpidev612@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"contact__form\">
                        <div class=\"section-title\">
                            <h2>Get in touch</h2>
                        </div>
                        
                        
                       {{ form_start(form, {'attr': {'novalidate':'novalidate'}}) }}
    {{ form_widget(form) }}
    
    <button type=\"submit\" class=\"btn btn-save\">{{ button_label|default('Envoyer') }}</button>
    

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

{{ form_end(form) }}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class=\"footer footer--normal spad set-bg\" data-setbg=\"img/footer-bg.png\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer__address\">
                        <ul>
                            <li>
                                <i class=\"fa fa-phone\"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class=\"fa fa-envelope\"></i>
                                <p>Email</p>
                                <h6>DJ.Music@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 offset-lg-1 col-md-6\">
                    <div class=\"footer__social\">
                        <h2>DJoz</h2>
                        <div class=\"footer__social__links\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 offset-lg-1 col-md-6\">
                    <div class=\"footer__newslatter\">
                        <h4>Stay With me</h4>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Email\">
                            <button type=\"submit\"><i class=\"fa fa-send-o\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
{% block javascripts %}
    <!-- Js Plugins -->
    <script src=\"{{ asset ('frontend/js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.nicescroll.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.barfiller.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.countdown.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.slicknav.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/main.js')}}\"></script>

    <!-- Music Plugin -->
    <script src=\"{{ asset ('frontend/js/jquery.jplayer.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jplayerInit.js')}}\"></script>
       {% endblock %}
</body>



", "contact.html.twig", "C:\\Users\\user\\Desktop\\Reclamation\\templates\\contact.html.twig");
    }
}
