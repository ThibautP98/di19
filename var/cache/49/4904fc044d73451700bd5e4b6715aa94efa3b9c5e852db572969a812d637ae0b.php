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

/* Contact/mail.html.twig */
class __TwigTemplate_243055648734a02a3fcac53520a73a564de717a7e5a24ff4ea99407a33c80e1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
<head></head>
<body>
<h1>Sujet : ";
        // line 4
        echo twig_escape_filter($this->env, ($context["sujet"] ?? null), "html", null, true);
        echo "</h1>
<p>
    ";
        // line 6
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "
</p>
<p>Envoyé par ";
        // line 8
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo ")</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Contact/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head></head>
<body>
<h1>Sujet : {{ sujet }}</h1>
<p>
    {{ description }}
</p>
<p>Envoyé par {{ username }} ({{ email }})</p>
</body>
</html>", "Contact/mail.html.twig", "D:\\CESI\\PHP\\tp\\templates\\Contact\\mail.html.twig");
    }
}
