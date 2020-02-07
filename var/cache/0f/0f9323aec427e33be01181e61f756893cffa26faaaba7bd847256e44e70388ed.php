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

/* User/listAll.html.twig */
class __TwigTemplate_8ca57e2aef56396baed0cddf0d72a82c470c9e2ef317ecdfce3a44c3f2ec5971 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "User/listAll.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Utilisateurs - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <style>
        h1 {
            text-align: center;
        }
    </style>
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <h1>Utilisateurs</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">Nom d'utilisateur</th>
            <th scope=\"col\">Adresse mail</th>
            <th scope=\"col\">Rôle</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "mail", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-warning\" href=\"/User/Update/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/User/Delete/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\"><i class=\"fas fa-trash\"></i></a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
        </tbody>
    </table>


";
        // line 66
        echo "
";
    }

    public function getTemplateName()
    {
        return "User/listAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 66,  129 => 41,  118 => 36,  114 => 35,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  93 => 28,  89 => 27,  73 => 13,  69 => 12,  60 => 5,  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Utilisateurs - {{ parent() }}{% endblock %}

{% block css %}
    <style>
        h1 {
            text-align: center;
        }
    </style>
{% endblock %}

{% block body %}

    <h1>Utilisateurs</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">Nom d'utilisateur</th>
            <th scope=\"col\">Adresse mail</th>
            <th scope=\"col\">Rôle</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for user in userList %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.username }}</td>
                <td>{{ user.mail }}</td>
                <td>{{ user.role }}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-warning\" href=\"/User/Update/{{ user.id }}\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/User/Delete/{{ user.id }}\"><i class=\"fas fa-trash\"></i></a>
                    </div>
                </td>
            </tr>
        {% endfor %}

        </tbody>
    </table>


{#    <table>#}
{#        <thead>#}
{#        <tr>#}
{#            <th>ID</th>#}
{#            <th>Username</th>#}
{#            <th>E-mail</th>#}
{#            <th>Rôle</th>#}
{#        </tr>#}
{#        </thead>#}
{#        <tbody>#}
{#        {% for user in userList %}#}
{#            <tr>#}
{#                <td>{{ user.id }}</td>#}
{#                <td>{{ user.username }}</td>#}
{#                <td>{{ user.mail }}</td>#}
{#                <td>{{ user.role }}</td>#}
{#            </tr>#}
{#        {% endfor %}#}
{#        </tbody>#}
{#    </table>#}

{% endblock %}", "User/listAll.html.twig", "C:\\Dev\\tp2\\di19\\templates\\User\\listAll.html.twig");
    }
}
