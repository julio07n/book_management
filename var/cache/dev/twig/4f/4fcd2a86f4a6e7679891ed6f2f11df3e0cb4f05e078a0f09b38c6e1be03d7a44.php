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

/* user/index.html.twig */
class __TwigTemplate_26888d652f3980129c3c453db9d9014f303fe43bbac3ab729324415b5fbb776d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "user/index.html.twig", 1);
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
 
      function addUser()
      {
          location.href = \"/user/new\";
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
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_data_list");
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
                      title: \"Usuario\",
                      render: function ( data, type, row ) {
                          return  data.username;
                      }
                  },
                  { 
                      data: null,
                      title: \"Roles\",
                      render: function ( data, type, row ) {
                          return  data.roles;
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
 
                         return \"<a href='/user/\" + data.id + \"/edit'>Editar</a>\";
                      }
                  },
                  {
                      data: null,
                      orderable: false,
                      render: function ( data, type, row ) {
 
                         return \"<a href='/user/\" + data.id + \"/delete'>Eliminar</a>\";
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

    // line 91
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 92
        echo "    <legend>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.usuarios", [], "messages");
        echo "</legend>
    <table id=\"list\" class=\"display\" style=\"width:100%\">
    </table>

    <div class=\"row\">
       <div class=\"col-sm-12\" >
           <button type=\"button\" class=\"btn btn-primary\" style=\"display: flow-root; margin: 0 auto;\" onclick=\"addUser()\">";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new", [], "messages");
        echo "</button>
       </div>
    </div>
 

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 98,  179 => 92,  169 => 91,  100 => 30,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% extends 'layout.html.twig' %}

  {% block javascripts %}

    {{ parent() }}

    <script type=\"text/javascript\">
 
      function addUser()
      {
          location.href = \"/user/new\";
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
              \"ajax\": \"{{ url('user_data_list') }}\",
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
                      title: \"Usuario\",
                      render: function ( data, type, row ) {
                          return  data.username;
                      }
                  },
                  { 
                      data: null,
                      title: \"Roles\",
                      render: function ( data, type, row ) {
                          return  data.roles;
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
 
                         return \"<a href='/user/\" + data.id + \"/edit'>Editar</a>\";
                      }
                  },
                  {
                      data: null,
                      orderable: false,
                      render: function ( data, type, row ) {
 
                         return \"<a href='/user/\" + data.id + \"/delete'>Eliminar</a>\";
                      }
                  } 
              ],
          });
 
      } );
    </script>
  {% endblock %}

 
  {% block content %}
    <legend>{% trans %} menu.usuarios {% endtrans %}</legend>
    <table id=\"list\" class=\"display\" style=\"width:100%\">
    </table>

    <div class=\"row\">
       <div class=\"col-sm-12\" >
           <button type=\"button\" class=\"btn btn-primary\" style=\"display: flow-root; margin: 0 auto;\" onclick=\"addUser()\">{% trans %} new {% endtrans %}</button>
       </div>
    </div>
 

  {% endblock %}", "user/index.html.twig", "/home/julio/book_management/templates/user/index.html.twig");
    }
}
