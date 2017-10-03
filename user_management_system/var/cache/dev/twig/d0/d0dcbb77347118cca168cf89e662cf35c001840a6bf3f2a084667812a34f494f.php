<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6512776d6cbc35221a774488b19fbb05b4a54a3e82eb196190a2843dbf3d95fd extends Twig_Template
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
        $__internal_ce46e0f67a49afef49ede783f9823f322738f1cd1c76507f04e1027e78e2e7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce46e0f67a49afef49ede783f9823f322738f1cd1c76507f04e1027e78e2e7d7->enter($__internal_ce46e0f67a49afef49ede783f9823f322738f1cd1c76507f04e1027e78e2e7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_27fe04a5f59bea2806dbcca09cc811c85c9537edb25f6c19eafad3f84e723cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fe04a5f59bea2806dbcca09cc811c85c9537edb25f6c19eafad3f84e723cc6->enter($__internal_27fe04a5f59bea2806dbcca09cc811c85c9537edb25f6c19eafad3f84e723cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce46e0f67a49afef49ede783f9823f322738f1cd1c76507f04e1027e78e2e7d7->leave($__internal_ce46e0f67a49afef49ede783f9823f322738f1cd1c76507f04e1027e78e2e7d7_prof);

        
        $__internal_27fe04a5f59bea2806dbcca09cc811c85c9537edb25f6c19eafad3f84e723cc6->leave($__internal_27fe04a5f59bea2806dbcca09cc811c85c9537edb25f6c19eafad3f84e723cc6_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_657a511a3bd0ca75802191adb49e1188281919c2cae073e92f4bcc7e2bec9480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657a511a3bd0ca75802191adb49e1188281919c2cae073e92f4bcc7e2bec9480->enter($__internal_657a511a3bd0ca75802191adb49e1188281919c2cae073e92f4bcc7e2bec9480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8d7fc0cf44f65842ebcb566b0fc71cb99713f4bd6330384a57f3d4b4d066072b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7fc0cf44f65842ebcb566b0fc71cb99713f4bd6330384a57f3d4b4d066072b->enter($__internal_8d7fc0cf44f65842ebcb566b0fc71cb99713f4bd6330384a57f3d4b4d066072b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8d7fc0cf44f65842ebcb566b0fc71cb99713f4bd6330384a57f3d4b4d066072b->leave($__internal_8d7fc0cf44f65842ebcb566b0fc71cb99713f4bd6330384a57f3d4b4d066072b_prof);

        
        $__internal_657a511a3bd0ca75802191adb49e1188281919c2cae073e92f4bcc7e2bec9480->leave($__internal_657a511a3bd0ca75802191adb49e1188281919c2cae073e92f4bcc7e2bec9480_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e36799e4a27c7fe09d53b2cc99f7d70b2959b121fb04d4432f19941691dcff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e36799e4a27c7fe09d53b2cc99f7d70b2959b121fb04d4432f19941691dcff8->enter($__internal_1e36799e4a27c7fe09d53b2cc99f7d70b2959b121fb04d4432f19941691dcff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b6c302299e66b8abe37acf29d4aaf9afa49ae9846474a2e163928b711538cbc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c302299e66b8abe37acf29d4aaf9afa49ae9846474a2e163928b711538cbc6->enter($__internal_b6c302299e66b8abe37acf29d4aaf9afa49ae9846474a2e163928b711538cbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b6c302299e66b8abe37acf29d4aaf9afa49ae9846474a2e163928b711538cbc6->leave($__internal_b6c302299e66b8abe37acf29d4aaf9afa49ae9846474a2e163928b711538cbc6_prof);

        
        $__internal_1e36799e4a27c7fe09d53b2cc99f7d70b2959b121fb04d4432f19941691dcff8->leave($__internal_1e36799e4a27c7fe09d53b2cc99f7d70b2959b121fb04d4432f19941691dcff8_prof);

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
