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

/* library/index.html.twig */
class __TwigTemplate_7c3a6e49b09ce4ba4b98d48c1197cabc6f1bf1e06ea19dae69d27cff802d264a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "library/index.html.twig", 1);
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
 
      function addLibrary()
      {
          location.href = \"/library/new\";
      }
      
      function downloadCsv()
      {
          location.href = \"/library/csv\";
      }


      \$(document).ready(function() {

          \$('#list').DataTable({
              \"searching\": true,
              \"language\": {
                  \"lengthMenu\": \"Mostrar _MENU_ registros por página\",
                  \"zeroRecords\": \"Sin registros que mostrar\",
                  \"info\": \"Mostrando página _PAGE_ de _PAGES_\",
                  \"infoEmpty\": \"No hay registros disponibles\",
                  \"paginate\": {
                      \"previous\": \"Anterior\",
                      \"next\": \"Siguiente\",
                  },
                  \"search\": \"Buscar\"
              },
              \"lengthMenu\": [[10, 20, 30, -1], [10, 20, 30, \"All\"]],
              \"ajax\": \"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("library_data_list");
        echo "\",
              \"columns\": [
                  { 
                      data: null,
                      title: \"Nombre\",
                      render: function ( data, type, row ) {
                          return  data.name;
                      }
                  },
                  { 
                      data: null,
                      title: \"Fecha creación\",
                      render: function ( data, type, row ) {
                          return  data.createdAt;
                      }
                  },
                  { 
                      data: null,
                      title: \"Fecha actualización\",
                      render: function ( data, type, row ) {
                          return  data.updatedAt;
                      }
                  },
                  {
                      data: null,
                      orderable: false,
                      render: function ( data, type, row ) {
 
                         return \"<a href='/library/\" + data.id + \"/edit'>Editar</a>\";
                      }
                  },
                  {
                      data: null,
                      orderable: false,
                      render: function ( data, type, row ) {
 
                         return \"<a href='/library/\" + data.id + \"/delete'>Eliminar</a>\";
                      }
                  } 
              ],
          });
 
      } );
    </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 84
        echo "    <legend>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.bibliotecas", [], "messages");
        echo "</legend>
    <table id=\"list\" class=\"display\" style=\"width:100%\">
    </table>

    <div class=\"row\">
       <div class=\"col-sm-12\" >
          <center>
              <button type=\"button\" class=\"btn btn-primary\" style=\"\" onclick=\"addLibrary()\">";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new", [], "messages");
        echo "</button>
              <button type=\"button\" class=\"btn btn-primary\" style=\"\" onclick=\"downloadCsv()\">";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.csv", [], "messages");
        echo "</button>
          </center>            
       </div>
    </div>
 

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "library/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 92,  182 => 91,  171 => 84,  161 => 83,  106 => 36,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% extends 'layout.html.twig' %}

  {% block javascripts %}

    {{ parent() }}

    <script type=\"text/javascript\">
 
      function addLibrary()
      {
          location.href = \"/library/new\";
      }
      
      function downloadCsv()
      {
          location.href = \"/library/csv\";
      }


      \$(document).ready(function() {

          \$('#list').DataTable({
              \"searching\": true,
              \"language\": {
                  \"lengthMenu\": \"Mostrar _MENU_ registros por página\",
                  \"zeroRecords\": \"Sin registros que mostrar\",
                  \"info\": \"Mostrando página _PAGE_ de _PAGES_\",
                  \"infoEmpty\": \"No hay registros disponibles\",
                  \"paginate\": {
                      \"previous\": \"Anterior\",
                      \"next\": \"Siguiente\",
                  },
                  \"search\": \"Buscar\"
              },
              \"lengthMenu\": [[10, 20, 30, -1], [10, 20, 30, \"All\"]],
              \"ajax\": \"{{ url('library_data_list') }}\",
              \"columns\": [
                  { 
                      data: null,
                      title: \"Nombre\",
                      render: function ( data, type, row ) {
                          return  data.name;
                      }
                  },
                  { 
                      data: null,
                      title: \"Fecha creación\",
                      render: function ( data, type, row ) {
                          return  data.createdAt;
                      }
                  },
                  { 
                      data: null,
                      title: \"Fecha actualización\",
                      render: function ( data, type, row ) {
                          return  data.updatedAt;
                      }
                  },
                  {
                      data: null,
                      orderable: false,
                      render: function ( data, type, row ) {
 
                         return \"<a href='/library/\" + data.id + \"/edit'>Editar</a>\";
                      }
                  },
                  {
                      data: null,
                      orderable: false,
                      render: function ( data, type, row ) {
 
                         return \"<a href='/library/\" + data.id + \"/delete'>Eliminar</a>\";
                      }
                  } 
              ],
          });
 
      } );
    </script>
  {% endblock %}

 
  {% block content %}
    <legend>{% trans %} menu.bibliotecas {% endtrans %}</legend>
    <table id=\"list\" class=\"display\" style=\"width:100%\">
    </table>

    <div class=\"row\">
       <div class=\"col-sm-12\" >
          <center>
              <button type=\"button\" class=\"btn btn-primary\" style=\"\" onclick=\"addLibrary()\">{% trans %} new {% endtrans %}</button>
              <button type=\"button\" class=\"btn btn-primary\" style=\"\" onclick=\"downloadCsv()\">{% trans %} admin.csv {% endtrans %}</button>
          </center>            
       </div>
    </div>
 

  {% endblock %}", "library/index.html.twig", "/home/julio/book_management/templates/library/index.html.twig");
    }
}
