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

/* registration/register.html.twig */
class __TwigTemplate_935239c32f4d0edb9b281ff7c5062c75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header style=\"margin-top: -20%\"></header>
    <div class=\"containerR\">
    <section id=\"regist\" class=\"container-general mb-3\"
             style=\"
             margin-top: 20%;
             width: 75%;
             text-align: center;\">
     ";
        // line 15
        echo "                <h1 style=\"font-family: 'Shantell Sans',
                cursive;font-size:3.5rem;
                font-weight: 700\">
                    Formulaire d'inscription</h1>
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "

                <fieldset style=\"
                                padding-left: 3rem;
                                padding-right: 3rem;
                                padding-bottom: 2rem;
                                border-top-left-radius: 3rem;
                                border-top-right-radius: 3rem;
                                background: rgb(74,92,168);
                                background: radial-gradient(circle, rgba(74,92,168,1) 14%, rgba(93,113,185,1) 90%);
                                border: 4px double rgba(0,0,0,0.89);\">

                    <h2 style=\"font-weight: 600\">Votre Identité:</h2>
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "lastname", [], "any", false, false, false, 32), 'row');
        echo "<br>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "firstname", [], "any", false, false, false, 33), 'row');
        echo "<br>
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'row');
        echo "<br>
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), 'row', ["label" => "Password"]);
        // line 37
        echo "<br>
                </fieldset>

                <fieldset class=\"mb-3\"
                          style=\"
                                padding-left: 3rem;
                                padding-right: 3rem;
                                padding-bottom: 50px;
                                border-bottom-left-radius: 3rem;
                                border-bottom-right-radius: 3rem;
                                background: rgb(74,92,168);
                                background: radial-gradient(circle, rgba(74,92,168,1) 0%, rgba(88,107,177,1) 100%);
                                border: 4px double rgba(0,0,0,0.89);\">

                    <h2 style=\"font-weight: 600\"> Vos coordonnées:</h2>
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "adress", [], "any", false, false, false, 52), 'row');
        echo "<br>
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "zipcode", [], "any", false, false, false, 53), 'row');
        echo "<br>
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "city", [], "any", false, false, false, 54), 'row');
        echo "<br>
                </fieldset>
                <br>
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "agreeTerms", [], "any", false, false, false, 57), 'row');
        echo "

                <button type=\"submit\" class=\"btn btn-primary\"style=\"margin-bottom: 20px;margin-top: 20px\">Valider</button>
                ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
    </section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  164 => 57,  158 => 54,  154 => 53,  150 => 52,  133 => 37,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  103 => 19,  97 => 15,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Inscription{% endblock %}

{% block body %}
    <header style=\"margin-top: -20%\"></header>
    <div class=\"containerR\">
    <section id=\"regist\" class=\"container-general mb-3\"
             style=\"
             margin-top: 20%;
             width: 75%;
             text-align: center;\">
     {#    <img src=\"{{ asset('assets/img/inscrpt.jpg') }}\" style=\"width: 100%;height: 100%;z-index: 0;position: relative\"> #}
                <h1 style=\"font-family: 'Shantell Sans',
                cursive;font-size:3.5rem;
                font-weight: 700\">
                    Formulaire d'inscription</h1>
                {{ form_start(registrationForm) }}

                <fieldset style=\"
                                padding-left: 3rem;
                                padding-right: 3rem;
                                padding-bottom: 2rem;
                                border-top-left-radius: 3rem;
                                border-top-right-radius: 3rem;
                                background: rgb(74,92,168);
                                background: radial-gradient(circle, rgba(74,92,168,1) 14%, rgba(93,113,185,1) 90%);
                                border: 4px double rgba(0,0,0,0.89);\">

                    <h2 style=\"font-weight: 600\">Votre Identité:</h2>
                    {{ form_row(registrationForm.lastname) }}<br>
                    {{ form_row(registrationForm.firstname) }}<br>
                    {{ form_row(registrationForm.email) }}<br>
                    {{ form_row(registrationForm.plainPassword, {
                        label: 'Password'
                    }) }}<br>
                </fieldset>

                <fieldset class=\"mb-3\"
                          style=\"
                                padding-left: 3rem;
                                padding-right: 3rem;
                                padding-bottom: 50px;
                                border-bottom-left-radius: 3rem;
                                border-bottom-right-radius: 3rem;
                                background: rgb(74,92,168);
                                background: radial-gradient(circle, rgba(74,92,168,1) 0%, rgba(88,107,177,1) 100%);
                                border: 4px double rgba(0,0,0,0.89);\">

                    <h2 style=\"font-weight: 600\"> Vos coordonnées:</h2>
                    {{ form_row(registrationForm.adress) }}<br>
                    {{ form_row(registrationForm.zipcode) }}<br>
                    {{ form_row(registrationForm.city) }}<br>
                </fieldset>
                <br>
                {{ form_row(registrationForm.agreeTerms) }}

                <button type=\"submit\" class=\"btn btn-primary\"style=\"margin-bottom: 20px;margin-top: 20px\">Valider</button>
                {{ form_end(registrationForm) }}
    </section>
    </div>
{% endblock %}
", "registration/register.html.twig", "C:\\wamp64\\www\\lavaproject\\templates\\registration\\register.html.twig");
    }
}
