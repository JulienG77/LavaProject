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

/* security/login.html.twig */
class __TwigTemplate_6926915dbbff15cee27bb5d4ff48374f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Page de Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header style=\"margin-top: -20px\"></header>
<form style=\"text-align: center;width: 60%\" method=\"post\">
    <h1 class=\"h3 mb-3 font-weight-normal\"></h1>

    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <div class=\"mb-3\"
             style=\"
             margin-top: 0;
             text-align: center\">
            Vous êtes connecté en tant que:<br>
            <span style=\"color: antiquewhite;text-decoration: underline\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "userIdentifier", [], "any", false, false, false, 16), "html", null, true);
            echo "</span><br>
            <a class=\"btn btn-lg btn-danger\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                Se déconnecter</a>
        </div>
    ";
        }
        // line 21
        echo "    <div class=\"card\"
         style=\"
         padding-left: 3rem;
         padding-right: 3rem;
         padding-bottom: 2rem;
         border: 4px double rgba(0,0,0,0.89);
         min-width: 50%;
         min-height: 50%;
         margin-top: 20%;
         margin-bottom: 30%;
         background-color: #4a5ca8;
         background: linear-gradient(169deg, rgba(74,92,168,1) 0%, rgba(74,92,168,1) 48%, rgba(215,84,64,1) 100%);
         border-radius: 1rem\">

    <label style=\"margin-top: 60px;margin-bottom: 20px\" for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label style=\"margin-top: 20px;margin-bottom: 20px\" for=\"inputPassword\">Mot de Passe</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

    ";
        // line 43
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageKey", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageData", [], "any", false, false, false, 44), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 46
        echo "
    ";
        // line 57
        echo "
    <button style=\"margin-top: 20px;margin-bottom: 30px\" id=\"boutonLogin\" class=\"btn btn-lg btn-primary\" type=\"submit\">
        Connexion
    </button>
    </div>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 57,  152 => 46,  146 => 44,  144 => 43,  139 => 41,  131 => 36,  114 => 21,  107 => 17,  103 => 16,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de Connexion{% endblock %}

{% block body %}
    <header style=\"margin-top: -20px\"></header>
<form style=\"text-align: center;width: 60%\" method=\"post\">
    <h1 class=\"h3 mb-3 font-weight-normal\"></h1>

    {% if app.user %}
        <div class=\"mb-3\"
             style=\"
             margin-top: 0;
             text-align: center\">
            Vous êtes connecté en tant que:<br>
            <span style=\"color: antiquewhite;text-decoration: underline\">{{ app.user.userIdentifier }}</span><br>
            <a class=\"btn btn-lg btn-danger\" href=\"{{ path('app_logout') }}\">
                Se déconnecter</a>
        </div>
    {% endif %}
    <div class=\"card\"
         style=\"
         padding-left: 3rem;
         padding-right: 3rem;
         padding-bottom: 2rem;
         border: 4px double rgba(0,0,0,0.89);
         min-width: 50%;
         min-height: 50%;
         margin-top: 20%;
         margin-bottom: 30%;
         background-color: #4a5ca8;
         background: linear-gradient(169deg, rgba(74,92,168,1) 0%, rgba(74,92,168,1) 48%, rgba(215,84,64,1) 100%);
         border-radius: 1rem\">

    <label style=\"margin-top: 60px;margin-bottom: 20px\" for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label style=\"margin-top: 20px;margin-bottom: 20px\" for=\"inputPassword\">Mot de Passe</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\">

    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}

    <button style=\"margin-top: 20px;margin-bottom: 30px\" id=\"boutonLogin\" class=\"btn btn-lg btn-primary\" type=\"submit\">
        Connexion
    </button>
    </div>
</form>
{% endblock %}
", "security/login.html.twig", "C:\\wamp64\\www\\lavaproject\\templates\\security\\login.html.twig");
    }
}
