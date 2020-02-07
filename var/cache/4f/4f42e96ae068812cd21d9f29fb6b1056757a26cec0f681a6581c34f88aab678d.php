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

/* index.html.twig */
class __TwigTemplate_1cdde113507f695b6e2c3d63c77bb3b8a4777458c5fe62a36993ca34d23e1821 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">

    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "
<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/Article/ListAll\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
            aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Api/Article/Last\">Les 5 derniers articles</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Article/ListAll\">Liste des articles</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/User/listAll\">Liste des utilisateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/User/Compte\">Compte</a>
            </li>
        </ul>

        <form class=\"form-inline\" method=\"get\" action=\"/Article/Search/\">

            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\">
            <input type=\"submit\" onclick=\"Search()\" class=\"btn btn-outline-success my-2 my-sm-0\" value=\"Rechercher\"
                   name=\"searchSubmit\">
        </form>
    </div>

</nav>

";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "
<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>

";
        // line 60
        $this->displayBlock('javascript', $context, $blocks);
        // line 61
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CESI BLOG";
    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 60
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 60,  133 => 51,  127 => 12,  120 => 5,  113 => 61,  111 => 60,  101 => 52,  99 => 51,  59 => 13,  57 => 12,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}CESI BLOG{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">

    {% block css %}{% endblock %}

<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/Article/ListAll\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
            aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Api/Article/Last\">Les 5 derniers articles</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Article/ListAll\">Liste des articles</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/User/listAll\">Liste des utilisateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/User/Compte\">Compte</a>
            </li>
        </ul>

        <form class=\"form-inline\" method=\"get\" action=\"/Article/Search/\">

            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\">
            <input type=\"submit\" onclick=\"Search()\" class=\"btn btn-outline-success my-2 my-sm-0\" value=\"Rechercher\"
                   name=\"searchSubmit\">
        </form>
    </div>

</nav>

{% block body %}{% endblock %}

<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>

{% block javascript %}{% endblock %}

</body>
</html>
", "index.html.twig", "D:\\CESI\\PHP\\tp\\templates\\index.html.twig");
    }
}
