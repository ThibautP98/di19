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

/* User/list.html.twig */
class __TwigTemplate_bc48e3cda9b66d8c03fa7441ff88239e3755b3c254814488adc5e548c50534ac extends Template
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
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "User/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Mon espace - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <h1>Mon espace :</h1>
    <table>
        <thead>
        <tr>
            <th>Username</th>
            <th>E-mail</th>
            <th>Rôle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "User/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  77 => 18,  73 => 17,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Mon espace - {{ parent() }}{% endblock %}

{% block body %}

    <h1>Mon espace :</h1>
    <table>
        <thead>
        <tr>
            <th>Username</th>
            <th>E-mail</th>
            <th>Rôle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ user.username }}</td>
            <td>{{ user.mail }}</td>
            <td>{{ user.role }}</td>
        </tr>
        </tbody>
    </table>

{% endblock %}", "User/list.html.twig", "D:\\CESI\\PHP\\tp\\templates\\User\\list.html.twig");
    }
}
