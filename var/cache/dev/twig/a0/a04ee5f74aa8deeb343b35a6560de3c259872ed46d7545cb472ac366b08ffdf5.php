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

/* book/new.html.twig */
class __TwigTemplate_038cba285c14e614bbd15f1bca62046c1320e739664f0fff3c49bc277cb9d9fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/new.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "book/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">

      \$(document).ready(function() {

        \$( '#book_save' ).click(function() {
    
            \$('div.error').remove();
            
            \$( \".required\" ).each(function( index ) {            
               if( \$( this ).val()=='' )
                 \$( this ).parent().append('<div class=\"error\">Campo requerido</div>');
            });

            
            if(\$('div.error').length==0)       
              \$('form[name=\"book\"]').submit();

            return false;  
            });

       });

   </script>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "        <div class=\"row\">\t
\t\t\t<div class=\"col-sm-12\"> 
\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_index");
        echo "\" style=\"font-size: 12px;\"><< ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back", [], "messages");
        echo "</a>
\t\t\t</div>\t\t\t
\t\t</div>
  \t\t<legend>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.create_book", [], "messages");
        echo "</legend>

\t    <div class=\"row\">
\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t<div class=\"col-sm-8\">";
        // line 43
        echo twig_include($this->env, $context, "book/_form.html.twig");
        echo "</div>
\t\t\t<div class=\"col-sm-2\"></div>
\t    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "book/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  131 => 39,  123 => 36,  119 => 34,  109 => 33,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

  {% block javascripts %}

    {{ parent() }}

    <script type=\"text/javascript\">

      \$(document).ready(function() {

        \$( '#book_save' ).click(function() {
    
            \$('div.error').remove();
            
            \$( \".required\" ).each(function( index ) {            
               if( \$( this ).val()=='' )
                 \$( this ).parent().append('<div class=\"error\">Campo requerido</div>');
            });

            
            if(\$('div.error').length==0)       
              \$('form[name=\"book\"]').submit();

            return false;  
            });

       });

   </script>

  {% endblock %}

  {% block content %}
        <div class=\"row\">\t
\t\t\t<div class=\"col-sm-12\"> 
\t\t\t\t<a href=\"{{ path('book_index') }}\" style=\"font-size: 12px;\"><< {% trans %} back {% endtrans %}</a>
\t\t\t</div>\t\t\t
\t\t</div>
  \t\t<legend>{% trans %} admin.create_book {% endtrans %}</legend>

\t    <div class=\"row\">
\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t<div class=\"col-sm-8\">{{ include('book/_form.html.twig') }}</div>
\t\t\t<div class=\"col-sm-2\"></div>
\t    </div>
  {% endblock %}", "book/new.html.twig", "/home/julio/book_management/templates/book/new.html.twig");
    }
}
