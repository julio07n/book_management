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

/* layout.html.twig */
class __TwigTemplate_fcade69f384080b5a49de62b3a7b590d5ea9712f1720c00a12143078ab823c23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "            
        ";
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css\"></style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "              
        ";
        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 
\t    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t    <script src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js\"></script>

\t\t<script src=\"https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
\t\t<script src=\"https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "\t    <div class=\"container-fluid\">      

\t        <div class=\"row header-dark\" id=\"header\">
\t          <div class=\"col-sm-12\">             
\t                  <nav  class=\"navbar navbar-expand-lg\">
\t                    <div class=\" mb-3\">
\t                      <img class=\"\" src=\"https://sumatd.com/wp-content/themes/sumaservices/assets/images/logo.png\">
\t                    </div>
\t                    <div class=\"collapse navbar-collapse\"></div>
\t                    <ul class=\"nav navbar-nav navbar-right\">
\t                      <li><a class=\"nav-link\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.cerrar_sesion", [], "messages");
        echo "</a></li>     
\t                    </ul>
\t                  </nav>          
\t          </div>      
\t        </div>

\t        <div class=\"row\">
\t           <div class=\"col-sm-2\" id=\"vertical-menu\">
\t           \t\t<ul class=\"nav flex-column\">

\t           \t\t  ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "\t\t                  ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 48
                echo "\t\t               \t\t    <li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link active\" href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.usuarios", [], "messages");
                echo "</a>
\t\t\t\t\t\t\t  \t</li>
\t\t\t\t\t\t\t  \t<li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link\" href=\"";
                // line 52
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library_index");
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.bibliotecas", [], "messages");
                echo "</a>
\t\t\t\t\t\t\t  \t</li>
\t\t\t\t\t\t\t    <li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link\" href=\"";
                // line 55
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_index");
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.libros", [], "messages");
                echo "</a>
\t\t\t\t\t\t\t  \t</li>\t\t          
\t\t                  ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIBRARIAN")) {
                // line 58
                echo "\t\t                   \t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link active\" href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_new");
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.reservar", [], "messages");
                echo "</a>
\t\t\t\t\t\t\t  \t</li>
\t\t\t\t\t\t\t  \t<li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link\" href=\"";
                // line 62
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_list");
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.mis_reservas", [], "messages");
                echo "</a>
\t\t\t\t\t\t\t  \t</li>\t      
\t\t                  ";
            } else {
                // line 65
                echo "\t\t                      
\t\t                  ";
            }
            // line 67
            echo "\t\t              ";
        }
        // line 68
        echo "
\t\t\t\t  \t</ul>
\t           </div>
\t           <div class=\"col-sm-10\" id=\"content\">
\t           \t\t<div class=\"row\">
\t\t\t           <div class=\"col-sm-12\">
\t\t\t\t\t        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 75
            echo "\t\t\t\t\t            <div class=\"alert alert-success\">
\t\t\t\t\t                ";
            // line 76
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t            </div>
\t\t\t\t        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
\t\t\t\t        \t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 81
            echo "\t\t\t\t\t            <div class=\"alert alert-danger\">
\t\t\t\t\t                ";
            // line 82
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t            </div>
\t\t\t\t        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t           </div>
\t\t\t        </div>   
\t\t\t        <div class=\"row\">
\t\t\t           <div class=\"col-sm-12\">
\t\t\t           \t\t";
        // line 89
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "\t           \t\t\t</div>
\t\t\t        </div>  
\t           </div>
\t        </div>
\t   
\t    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 90
        echo "
\t\t\t           \t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 90,  285 => 89,  268 => 92,  266 => 89,  260 => 85,  251 => 82,  248 => 81,  244 => 80,  241 => 79,  232 => 76,  229 => 75,  225 => 74,  217 => 68,  214 => 67,  210 => 65,  202 => 62,  194 => 59,  191 => 58,  183 => 55,  175 => 52,  167 => 49,  164 => 48,  161 => 47,  159 => 46,  144 => 36,  132 => 26,  122 => 25,  98 => 9,  86 => 8,  73 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

  \t{% block stylesheets %}            
        {{ parent() }}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css\"></style>
    {% endblock %}

    {% block javascripts %}              
        {{ parent() }}
 
\t    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t    <script src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js\"></script>

\t\t<script src=\"https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
\t\t<script src=\"https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js\"></script>

    {% endblock %}


    {% block body %}
\t    <div class=\"container-fluid\">      

\t        <div class=\"row header-dark\" id=\"header\">
\t          <div class=\"col-sm-12\">             
\t                  <nav  class=\"navbar navbar-expand-lg\">
\t                    <div class=\" mb-3\">
\t                      <img class=\"\" src=\"https://sumatd.com/wp-content/themes/sumaservices/assets/images/logo.png\">
\t                    </div>
\t                    <div class=\"collapse navbar-collapse\"></div>
\t                    <ul class=\"nav navbar-nav navbar-right\">
\t                      <li><a class=\"nav-link\" href=\"{{logout_path()}}\">{% trans %} menu.cerrar_sesion {% endtrans %}</a></li>     
\t                    </ul>
\t                  </nav>          
\t          </div>      
\t        </div>

\t        <div class=\"row\">
\t           <div class=\"col-sm-2\" id=\"vertical-menu\">
\t           \t\t<ul class=\"nav flex-column\">

\t           \t\t  {% if app.user %}
\t\t                  {% if is_granted('ROLE_ADMIN') %}
\t\t               \t\t    <li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link active\" href=\"{{ path('user_index') }}\">{% trans %} menu.usuarios {% endtrans %}</a>
\t\t\t\t\t\t\t  \t</li>
\t\t\t\t\t\t\t  \t<li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link\" href=\"{{ path('library_index') }}\">{% trans %} menu.bibliotecas {% endtrans %}</a>
\t\t\t\t\t\t\t  \t</li>
\t\t\t\t\t\t\t    <li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link\" href=\"{{ path('book_index') }}\">{% trans %} menu.libros {% endtrans %}</a>
\t\t\t\t\t\t\t  \t</li>\t\t          
\t\t                  {% elseif is_granted('ROLE_LIBRARIAN') %}
\t\t                   \t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link active\" href=\"{{ path('reserve_new') }}\">{% trans %} menu.reservar {% endtrans %}</a>
\t\t\t\t\t\t\t  \t</li>
\t\t\t\t\t\t\t  \t<li class=\"nav-item\">
\t\t\t\t\t\t\t    \t<a class=\"nav-link\" href=\"{{ path('reserve_list') }}\">{% trans %} menu.mis_reservas {% endtrans %}</a>
\t\t\t\t\t\t\t  \t</li>\t      
\t\t                  {% else %}
\t\t                      
\t\t                  {% endif %}
\t\t              {% endif %}

\t\t\t\t  \t</ul>
\t           </div>
\t           <div class=\"col-sm-10\" id=\"content\">
\t           \t\t<div class=\"row\">
\t\t\t           <div class=\"col-sm-12\">
\t\t\t\t\t        {% for message in app.flashes('success') %}
\t\t\t\t\t            <div class=\"alert alert-success\">
\t\t\t\t\t                {{ message }}
\t\t\t\t\t            </div>
\t\t\t\t        \t{% endfor %}

\t\t\t\t        \t{% for message in app.flashes('error') %}
\t\t\t\t\t            <div class=\"alert alert-danger\">
\t\t\t\t\t                {{ message }}
\t\t\t\t\t            </div>
\t\t\t\t        \t{% endfor %}
\t\t\t           </div>
\t\t\t        </div>   
\t\t\t        <div class=\"row\">
\t\t\t           <div class=\"col-sm-12\">
\t\t\t           \t\t{% block content %}

\t\t\t           \t\t{% endblock %}
\t           \t\t\t</div>
\t\t\t        </div>  
\t           </div>
\t        </div>
\t   
\t    </div>

    {% endblock %}", "layout.html.twig", "/home/julio/book_management/templates/layout.html.twig");
    }
}
