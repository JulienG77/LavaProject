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

/* accueil/gmap.html.twig */
class __TwigTemplate_2af23c94fa267d566be91d73334792ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/gmap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/gmap.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>

<body>
<div class=\"container\">
<div style=\"position: relative; width: 100%; height: 0; padding-top: 75.0000%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;\">
    <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"
            src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFbTl242t0&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">
    </iframe>
</div>
<a href=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFbTl242t0&#x2F;view?utm_content=DAFbTl242t0&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link\" target=\"_blank\" rel=\"noopener\"></a>
</div>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "accueil/gmap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>

<body>
<div class=\"container\">
<div style=\"position: relative; width: 100%; height: 0; padding-top: 75.0000%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;\">
    <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"
            src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFbTl242t0&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">
    </iframe>
</div>
<a href=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFbTl242t0&#x2F;view?utm_content=DAFbTl242t0&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link\" target=\"_blank\" rel=\"noopener\"></a>
</div>
</body>

</html>", "accueil/gmap.html.twig", "C:\\wamp64\\www\\lavaproject\\templates\\accueil\\gmap.html.twig");
    }
}
