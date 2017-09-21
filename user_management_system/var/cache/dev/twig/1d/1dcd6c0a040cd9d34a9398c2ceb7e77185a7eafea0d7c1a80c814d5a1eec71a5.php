<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8e5c82b447fdff23566d6eec0a9b1097112907d973983c6cb81700fa55772fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dacd6ca2e1faa184cf0c5a4aab1b0e45eba6f3dc28bfc9ab075aee8bb5afc3f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacd6ca2e1faa184cf0c5a4aab1b0e45eba6f3dc28bfc9ab075aee8bb5afc3f9->enter($__internal_dacd6ca2e1faa184cf0c5a4aab1b0e45eba6f3dc28bfc9ab075aee8bb5afc3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9ee55d11e73e53cb1cca50665b176459791521f5e45a4f5ca9c85fcd9d13b705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee55d11e73e53cb1cca50665b176459791521f5e45a4f5ca9c85fcd9d13b705->enter($__internal_9ee55d11e73e53cb1cca50665b176459791521f5e45a4f5ca9c85fcd9d13b705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dacd6ca2e1faa184cf0c5a4aab1b0e45eba6f3dc28bfc9ab075aee8bb5afc3f9->leave($__internal_dacd6ca2e1faa184cf0c5a4aab1b0e45eba6f3dc28bfc9ab075aee8bb5afc3f9_prof);

        
        $__internal_9ee55d11e73e53cb1cca50665b176459791521f5e45a4f5ca9c85fcd9d13b705->leave($__internal_9ee55d11e73e53cb1cca50665b176459791521f5e45a4f5ca9c85fcd9d13b705_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_eada72de250213ebfff54dc8f0dec57476fad840010ad3e97bf224c74652556e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eada72de250213ebfff54dc8f0dec57476fad840010ad3e97bf224c74652556e->enter($__internal_eada72de250213ebfff54dc8f0dec57476fad840010ad3e97bf224c74652556e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_22c2670e3983633f54721f5631973b2ca5b9630f3c89bdd262bf2d28447c16ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c2670e3983633f54721f5631973b2ca5b9630f3c89bdd262bf2d28447c16ec->enter($__internal_22c2670e3983633f54721f5631973b2ca5b9630f3c89bdd262bf2d28447c16ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_22c2670e3983633f54721f5631973b2ca5b9630f3c89bdd262bf2d28447c16ec->leave($__internal_22c2670e3983633f54721f5631973b2ca5b9630f3c89bdd262bf2d28447c16ec_prof);

        
        $__internal_eada72de250213ebfff54dc8f0dec57476fad840010ad3e97bf224c74652556e->leave($__internal_eada72de250213ebfff54dc8f0dec57476fad840010ad3e97bf224c74652556e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e89ec917f6d52940ce397266f63f06807b57b5f1f50938a23ac6ffafbf14d87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89ec917f6d52940ce397266f63f06807b57b5f1f50938a23ac6ffafbf14d87e->enter($__internal_e89ec917f6d52940ce397266f63f06807b57b5f1f50938a23ac6ffafbf14d87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0fbec9bd50abaf6e8d93576da06f4831c82085d58db244f06ec458077ebf78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fbec9bd50abaf6e8d93576da06f4831c82085d58db244f06ec458077ebf78f->enter($__internal_c0fbec9bd50abaf6e8d93576da06f4831c82085d58db244f06ec458077ebf78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c0fbec9bd50abaf6e8d93576da06f4831c82085d58db244f06ec458077ebf78f->leave($__internal_c0fbec9bd50abaf6e8d93576da06f4831c82085d58db244f06ec458077ebf78f_prof);

        
        $__internal_e89ec917f6d52940ce397266f63f06807b57b5f1f50938a23ac6ffafbf14d87e->leave($__internal_e89ec917f6d52940ce397266f63f06807b57b5f1f50938a23ac6ffafbf14d87e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
