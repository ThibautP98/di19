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

/* User/panelAdmin.html.twig */
class __TwigTemplate_a9d74fc1009d29d38279dd4af52d2bcb1d26c07f822f3918743c9e2e89b06144 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/panelAdmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Détail de l'article - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <h1>Administration :</h1>
    <ul>
        <li>
            <a href=\"/User/ListAll\">Liste des utilisateurs</a>
        </li>
        <li>
            <a href=\"/Article/ListAll\">Liste des articles</a>
        </li>
        <li>
            <a href=\"#\">Liste des catégories</a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "User/panelAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Détail de l'article - {{ parent() }}{% endblock %}

{% block body %}

    <h1>Administration :</h1>
    <ul>
        <li>
            <a href=\"/User/ListAll\">Liste des utilisateurs</a>
        </li>
        <li>
            <a href=\"/Article/ListAll\">Liste des articles</a>
        </li>
        <li>
            <a href=\"#\">Liste des catégories</a>
        </li>
    </ul>

{% endblock %}", "User/panelAdmin.html.twig", "D:\\CESI\\PHP\\tp\\templates\\User\\panelAdmin.html.twig");
    }
}
