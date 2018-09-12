<?php

/* todolist/index.html.twig */
class __TwigTemplate_a3703dd5565e8cdf2b31fb03f296c4b2f891d0f61dd1ffb34c9e5c031fe02941 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todolist/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todolist/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todolist/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony 4 To-Do liste ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new Twig_Error_Runtime('Variable "todo" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <table id=\"tasks\" class=\"table table-striped\">
            <thead>
                <tr>
                    <th colspan=\"1\">Task title</th>
                    <th>Actions</th>
                    <th >Status</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new Twig_Error_Runtime('Variable "todo" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 17
                echo "                    <tr>
                        <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"./task/";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-dark\">Show </a>
                            <a href=\"./task/edit/";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-light\">Edit </a>
                            <a href=\"#\" class=\"btn btn-danger delete-task\" data-id=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", array()), "html", null, true);
                echo "\">Delete </a>
                        </td>     
                    ";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, $context["task"], "task_status", array()) > 0)) {
                    // line 25
                    echo "                         <td align=\"right\"><span class=\"badge badge-success \">Done </span></td>
                    ";
                } else {
                    // line 27
                    echo "                        <td align=\"right\">
                            <a href=\"./task/status/";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", array()), "html", null, true);
                    echo "\"  class=\"btn btn-info done-task\"> Finish now </a>
                            
                        </td>
                    ";
                }
                // line 31
                echo "    
                        
                    </tr>                   
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 38
            echo "        <p>No task to display</p>
    ";
        }
        // line 40
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    <script src=\"./js/main.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "todolist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 44,  157 => 43,  146 => 40,  142 => 38,  137 => 35,  128 => 31,  121 => 28,  118 => 27,  114 => 25,  112 => 24,  107 => 22,  103 => 21,  99 => 20,  94 => 18,  91 => 17,  87 => 16,  76 => 7,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'  %}

{% block title %}Symfony 4 To-Do liste {% endblock  %}

{% block body  %}
    {% if todo %}
        <table id=\"tasks\" class=\"table table-striped\">
            <thead>
                <tr>
                    <th colspan=\"1\">Task title</th>
                    <th>Actions</th>
                    <th >Status</th>
                </tr>
            </thead>
            <tbody>
                {% for task in todo %}
                    <tr>
                        <td>{{task.title}}</td>
                        <td>
                            <a href=\"./task/{{task.id}}\" class=\"btn btn-dark\">Show </a>
                            <a href=\"./task/edit/{{task.id}}\" class=\"btn btn-light\">Edit </a>
                            <a href=\"#\" class=\"btn btn-danger delete-task\" data-id=\"{{ task.id }}\">Delete </a>
                        </td>     
                    {% if task.task_status > 0 %}
                         <td align=\"right\"><span class=\"badge badge-success \">Done </span></td>
                    {% else %}
                        <td align=\"right\">
                            <a href=\"./task/status/{{task.id}}\"  class=\"btn btn-info done-task\"> Finish now </a>
                            
                        </td>
                    {% endif %}    
                        
                    </tr>                   
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>No task to display</p>
    {% endif %}
    
{% endblock  %}

{% block javascripts  %}
    <script src=\"./js/main.js\"></script>
{% endblock  %}
", "todolist/index.html.twig", "C:\\projects\\todolist\\templates\\todolist\\index.html.twig");
    }
}
