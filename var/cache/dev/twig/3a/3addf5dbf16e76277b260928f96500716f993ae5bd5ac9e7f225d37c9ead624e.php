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

/* admin/index.html.twig */
class __TwigTemplate_1af52d8981a376d33176b15acfe94b01b1abd451c1d2a4d25885dabbe23a0b56 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "admin/index.html.twig", 1);
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

        \$( '#loan_save' ).click(function() {
    
            \$('div.error').remove();
            
            \$( \".required\" ).each(function( index ) {            
               if( \$( this ).val()=='' )
                 \$( this ).parent().append('<div class=\"error\">Campo requerido</div>');
            });

            
            if(\$('div.error').length==0 && re.test(email))       
              \$('form[name=\"loan\"]').submit();

            return false;  
        });


        \$( '#loan_library' ).change(function(){

            var select_book = \$('#loan_book');
            var options = '<option value=\"\">Seleccionar</option>';

            select_book.attr('disabled', 'disabled').find('option[value!=\"\"]').remove();


           if(\$( this ).val()!='')
           {
                \$.ajax({     
                    url: \"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("book_list");
        echo "\",
                    type:\"POST\",
                    data : { lib_id: \$(this).val() },
                    success:function(data) {
        
                      \$.each(data, function( index, value ) {
                          options+='<option value=\"' + value.id + '\">' + value.title + '</option>';
                      });

                      select_book.html(options).removeAttr('disabled');                                         
                    },
                });
           }
           else
              select_book.html(options);
        })


      });  


    </script>


  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 66
        echo "        <legend>Reservar libro</legend>
 
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 66,  144 => 65,  109 => 39,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

  {% block javascripts %}

    {{ parent() }}

    <script type=\"text/javascript\">

      \$(document).ready(function() {

        \$( '#loan_save' ).click(function() {
    
            \$('div.error').remove();
            
            \$( \".required\" ).each(function( index ) {            
               if( \$( this ).val()=='' )
                 \$( this ).parent().append('<div class=\"error\">Campo requerido</div>');
            });

            
            if(\$('div.error').length==0 && re.test(email))       
              \$('form[name=\"loan\"]').submit();

            return false;  
        });


        \$( '#loan_library' ).change(function(){

            var select_book = \$('#loan_book');
            var options = '<option value=\"\">Seleccionar</option>';

            select_book.attr('disabled', 'disabled').find('option[value!=\"\"]').remove();


           if(\$( this ).val()!='')
           {
                \$.ajax({     
                    url: \"{{ url('book_list') }}\",
                    type:\"POST\",
                    data : { lib_id: \$(this).val() },
                    success:function(data) {
        
                      \$.each(data, function( index, value ) {
                          options+='<option value=\"' + value.id + '\">' + value.title + '</option>';
                      });

                      select_book.html(options).removeAttr('disabled');                                         
                    },
                });
           }
           else
              select_book.html(options);
        })


      });  


    </script>


  {% endblock %}

  {% block content %}
        <legend>Reservar libro</legend>
 
  {% endblock %}", "admin/index.html.twig", "/home/julio/book_management/templates/admin/index.html.twig");
    }
}
