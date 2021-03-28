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

/* security/login.html.twig */
class __TwigTemplate_22c95e5984f6fc71c3ff792ca2f1936757bbfef200385163de11b0d8710441d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Iniciar sesión";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div id=\"form_login\" class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-10 ml-md-auto\">
      <div class=\"\">
        <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px;\">
          <div class=\"card-body\">
            <form class=\"form-horizontal\" role=\"form\" method=\"post\">
              ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                <div class=\"alert alert-danger\">
                  ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageKey", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageData", [], "any", false, false, false, 17), "security"), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 19
        echo " 

              ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                  ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 23
                echo "                         
                  ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIBRARIAN")) {
                // line 25
                echo "                         
                  ";
            } else {
                // line 27
                echo "                      
                  ";
            }
            // line 29
            echo "              ";
        }
        // line 30
        echo "
              <div class=\"card-header mb-3  header-dark\">
                <img class=\"\" src=\"https://sumatd.com/wp-content/themes/sumaservices/assets/images/logo.png\">
              </div>
              <div class=\"form-group\">

                <label for=\"inputUsername\" class=\"col-md-4 control-label\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.usuario", [], "messages");
        echo "</label>
                <div class=\"col-md-12\">
                  <input
                    id=\"inputUsername\"
                    type=\"text\"
                    class=\"form-control\"
                    name=\"username\"
                    value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\"
                    required
                    autofocus
                  />
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"inputPassword\" class=\"col-md-4 control-label\">";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.password", [], "messages");
        echo "</label>
                <div class=\"col-md-12\">
                  <input
                    id=\"inputPassword\"
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password\"
                    required
                  />
                </div>
              </div>
              <input
                type=\"hidden\"
                name=\"_csrf_token\"
                value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
              />
              <div class=\"form-group\">
                <div class=\"col-md-12 text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fa fa-btn fa-sign-in\"></i> Entrar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 64,  162 => 50,  152 => 43,  142 => 36,  134 => 30,  131 => 29,  127 => 27,  123 => 25,  119 => 23,  116 => 22,  114 => 21,  110 => 19,  104 => 17,  101 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Iniciar sesión{% endblock %}

{% block body %}


<div id=\"form_login\" class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-10 ml-md-auto\">
      <div class=\"\">
        <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px;\">
          <div class=\"card-body\">
            <form class=\"form-horizontal\" role=\"form\" method=\"post\">
              {% if error %}
                <div class=\"alert alert-danger\">
                  {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
              {% endif %} 

              {% if app.user %}
                  {% if is_granted('ROLE_ADMIN') %}
                         
                  {% elseif is_granted('ROLE_LIBRARIAN') %}
                         
                  {% else %}
                      
                  {% endif %}
              {% endif %}

              <div class=\"card-header mb-3  header-dark\">
                <img class=\"\" src=\"https://sumatd.com/wp-content/themes/sumaservices/assets/images/logo.png\">
              </div>
              <div class=\"form-group\">

                <label for=\"inputUsername\" class=\"col-md-4 control-label\">{% trans %} menu.usuario {% endtrans %}</label>
                <div class=\"col-md-12\">
                  <input
                    id=\"inputUsername\"
                    type=\"text\"
                    class=\"form-control\"
                    name=\"username\"
                    value=\"{{ last_username }}\"
                    required
                    autofocus
                  />
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"inputPassword\" class=\"col-md-4 control-label\">{% trans %} menu.password {% endtrans %}</label>
                <div class=\"col-md-12\">
                  <input
                    id=\"inputPassword\"
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password\"
                    required
                  />
                </div>
              </div>
              <input
                type=\"hidden\"
                name=\"_csrf_token\"
                value=\"{{ csrf_token('authenticate') }}\"
              />
              <div class=\"form-group\">
                <div class=\"col-md-12 text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fa fa-btn fa-sign-in\"></i> Entrar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>

{% endblock %}
", "security/login.html.twig", "/home/julio/book_management/templates/security/login.html.twig");
    }
}
