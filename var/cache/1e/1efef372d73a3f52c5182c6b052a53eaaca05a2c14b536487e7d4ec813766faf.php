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

/* User/compte.html.twig */
class __TwigTemplate_22a0c5641c1cf2228eae69127b5cfa3a1defd9871b4cfb47c36360a64ca8a11c extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/compte.html.twig", 1);
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
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <style>
        div#button, h1 {
            padding-top: 7%;
            margin-left: 30%;
        }
    </style>
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"container-fluid mt-2\">
        <h1>Compte</h1>
        <div id=\"button\">
            <a href=\"/User/Login\">
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><i class=\"fas fa-sign-in-alt\"></i>&nbsp;&nbsp;Se
                    connecter
                </button>
            </a>
            <a href=\"/User/Register\">
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><i class=\"fas fa-user-plus\"></i>&nbsp;&nbsp;S'inscrire
                </button>
            </a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "User/compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  70 => 13,  60 => 5,  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Mon espace - {{ parent() }}{% endblock %}

{% block css %}
    <style>
        div#button, h1 {
            padding-top: 7%;
            margin-left: 30%;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid mt-2\">
        <h1>Compte</h1>
        <div id=\"button\">
            <a href=\"/User/Login\">
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><i class=\"fas fa-sign-in-alt\"></i>&nbsp;&nbsp;Se
                    connecter
                </button>
            </a>
            <a href=\"/User/Register\">
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><i class=\"fas fa-user-plus\"></i>&nbsp;&nbsp;S'inscrire
                </button>
            </a>
        </div>
    </div>
{% endblock %}

", "User/compte.html.twig", "C:\\Dev\\tp2\\di19\\templates\\User\\compte.html.twig");
    }
}
