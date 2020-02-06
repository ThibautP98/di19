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

/* /User/update.html.twig */
class __TwigTemplate_4679b3bb6cdd7ff0636e03df10c8e4846f0da85f286b4af8d27ce5d8a3478e14 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "/User/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscrivez vous ";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"container-fluid mt-2\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", true, true, false, 6)) {
            // line 7
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", false, false, false, 7), "html", null, true);
            echo "</div>
        ";
        }
        // line 9
        echo "        ";
        echo twig_var_dump($this->env, $context, ...[0 => twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 9)]);
        echo "
        <form method=\"post\" action=\"/User/Update/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
            <p>Nom d'utilisateur :</p>
            <input type=\"text\" name=\"username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
            <p>Adresse e-mail :</p>
            <input type=\"email\" name=\"email\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
            <p>Rôle :</p>

            ";
        // line 17
        if (twig_in_filter("admin", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 17), "role", [], "any", false, false, false, 17))) {
            // line 18
            echo "                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\" checked disabled>Administrateur<br>
            ";
        } else {
            // line 20
            echo "                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\" disabled>Administrateur<br>
            ";
        }
        // line 22
        echo "            ";
        if (twig_in_filter("redacteur", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 22), "role", [], "any", false, false, false, 22))) {
            // line 23
            echo "                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\" checked disabled>Rédacteur
            ";
        } else {
            // line 25
            echo "                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\" disabled>Rédacteur
            ";
        }
        // line 27
        echo "            <br>
            <input type=\"submit\">
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "/User/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  109 => 25,  105 => 23,  102 => 22,  98 => 20,  94 => 18,  92 => 17,  86 => 14,  81 => 12,  76 => 10,  71 => 9,  65 => 7,  63 => 6,  59 => 4,  55 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Inscrivez vous {% endblock %}
{% block body %}

    <div class=\"container-fluid mt-2\">
        {% if session.errorlogin is defined %}
            <div class=\"alert alert-danger\">{{ session.errorlogin }}</div>
        {% endif %}
        {{ dump(session.login) }}
        <form method=\"post\" action=\"/User/Update/{{ user.id }}\">
            <p>Nom d'utilisateur :</p>
            <input type=\"text\" name=\"username\" value=\"{{ user.username }}\">
            <p>Adresse e-mail :</p>
            <input type=\"email\" name=\"email\" value=\"{{ user.mail }}\">
            <p>Rôle :</p>

            {% if 'admin' in session.login.role %}
                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\" checked disabled>Administrateur<br>
            {% else %}
                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\" disabled>Administrateur<br>
            {% endif %}
            {% if 'redacteur' in session.login.role %}
                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\" checked disabled>Rédacteur
            {% else %}
                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\" disabled>Rédacteur
            {% endif %}
            <br>
            <input type=\"submit\">
        </form>
    </div>

{% endblock %}", "/User/update.html.twig", "D:\\CESI\\PHP\\tp\\templates\\User\\update.html.twig");
    }
}
