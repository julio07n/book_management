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

/* reserve/list.html.twig */
class __TwigTemplate_cca10ab79142733381ae63c1f279e9a0235cbe1334e777a26b0a7b78e00b9173 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve/list.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "reserve/list.html.twig", 1);
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

          \$('#list').DataTable({
              \"searching\": false,
              \"language\": {
                  \"lengthMenu\": \"Mostrar _MENU_ registros por página\",
                  \"zeroRecords\": \"Sin registros que mostrar\",
                  \"info\": \"Mostrando página _PAGE_ de _PAGES_\",
                  \"infoEmpty\": \"No hay registros disponibles\",
                  \"paginate\": {
                      \"previous\": \"Anterior\",
                      \"next\": \"Siguiente\",
                  }
              },
              \"lengthMenu\": [[5, 10, -1], [5, 10, \"All\"]],
              //\"data\": dataSet,
              \"ajax\": \"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("reserve_data_list");
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
                      title: \"Email\",
                      render: function ( data, type, row ) {
                          return  data.email;
                      }
                  },
                  { 
                      data: null,
                      title: \"Categoría\",
                      render: function ( data, type, row ) {
                          return  data.library_name;
                      }
                  },
                  { 
                      data: null,
                      title: \"Libro\",
                      render: function ( data, type, row ) {
                          return  data.title_book;
                      }
                  },
                  { 
                      data: null,
                      title: \"Fecha\",
                      render: function  (data, type, row ) {

                          return  data.date;
                      }
                  },
                  {
                      data: null,
                      // className: \"dt-center\",
                      //defaultContent: \"<a href=''></a>\",
                      orderable: false,
                      render: function ( data, type, row ) {
 
                         return \"<a href='/reserve/delete/\" + data.id + \"'>Eliminar</a>\";
                      }
                  } 
              ],
              // dom: 'Bfrtip',
              // buttons: [
              //   'excelHtml5',                   
              // ]
          });
 
      } );
    </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 85
        echo "    <legend>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.mis_reservas", [], "messages");
        echo "</legend>
    <table id=\"list\" class=\"display\" style=\"width:100%\">
    </table>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reserve/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 85,  163 => 84,  95 => 25,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% extends 'layout.html.twig' %}

  {% block javascripts %}

    {{ parent() }}

    <script type=\"text/javascript\">
 
      \$(document).ready(function() {

          \$('#list').DataTable({
              \"searching\": false,
              \"language\": {
                  \"lengthMenu\": \"Mostrar _MENU_ registros por página\",
                  \"zeroRecords\": \"Sin registros que mostrar\",
                  \"info\": \"Mostrando página _PAGE_ de _PAGES_\",
                  \"infoEmpty\": \"No hay registros disponibles\",
                  \"paginate\": {
                      \"previous\": \"Anterior\",
                      \"next\": \"Siguiente\",
                  }
              },
              \"lengthMenu\": [[5, 10, -1], [5, 10, \"All\"]],
              //\"data\": dataSet,
              \"ajax\": \"{{ url('reserve_data_list') }}\",
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
                      title: \"Email\",
                      render: function ( data, type, row ) {
                          return  data.email;
                      }
                  },
                  { 
                      data: null,
                      title: \"Categoría\",
                      render: function ( data, type, row ) {
                          return  data.library_name;
                      }
                  },
                  { 
                      data: null,
                      title: \"Libro\",
                      render: function ( data, type, row ) {
                          return  data.title_book;
                      }
                  },
                  { 
                      data: null,
                      title: \"Fecha\",
                      render: function  (data, type, row ) {

                          return  data.date;
                      }
                  },
                  {
                      data: null,
                      // className: \"dt-center\",
                      //defaultContent: \"<a href=''></a>\",
                      orderable: false,
                      render: function ( data, type, row ) {
 
                         return \"<a href='/reserve/delete/\" + data.id + \"'>Eliminar</a>\";
                      }
                  } 
              ],
              // dom: 'Bfrtip',
              // buttons: [
              //   'excelHtml5',                   
              // ]
          });
 
      } );
    </script>
  {% endblock %}

  {% block content %}
    <legend>{% trans %} menu.mis_reservas {% endtrans %}</legend>
    <table id=\"list\" class=\"display\" style=\"width:100%\">
    </table>

  {% endblock %}
", "reserve/list.html.twig", "/home/julio/book_management/templates/reserve/list.html.twig");
    }
}
