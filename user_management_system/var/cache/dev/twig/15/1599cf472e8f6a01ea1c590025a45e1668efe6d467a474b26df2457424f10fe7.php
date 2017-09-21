<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7db6f492e97e61dbf64944fbcecd37bdda859fc6789e5bb4c8a68e9edb70f1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42adfb856b95f2203778d54d3368c48b81bd985a621707834918ee5c36fc300e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42adfb856b95f2203778d54d3368c48b81bd985a621707834918ee5c36fc300e->enter($__internal_42adfb856b95f2203778d54d3368c48b81bd985a621707834918ee5c36fc300e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_513f513e4204dba668f6109c868d82239f2c840255ddc478128816b8b871239a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513f513e4204dba668f6109c868d82239f2c840255ddc478128816b8b871239a->enter($__internal_513f513e4204dba668f6109c868d82239f2c840255ddc478128816b8b871239a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42adfb856b95f2203778d54d3368c48b81bd985a621707834918ee5c36fc300e->leave($__internal_42adfb856b95f2203778d54d3368c48b81bd985a621707834918ee5c36fc300e_prof);

        
        $__internal_513f513e4204dba668f6109c868d82239f2c840255ddc478128816b8b871239a->leave($__internal_513f513e4204dba668f6109c868d82239f2c840255ddc478128816b8b871239a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa4b70f6897ae76fc221fc77f36b55db2dd50ede2a6f40bb7ae546179a8e1117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4b70f6897ae76fc221fc77f36b55db2dd50ede2a6f40bb7ae546179a8e1117->enter($__internal_aa4b70f6897ae76fc221fc77f36b55db2dd50ede2a6f40bb7ae546179a8e1117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f3720b9cc1e11395f318e44abab24cc484e232762fbd274b1438bfcf2fa8f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3720b9cc1e11395f318e44abab24cc484e232762fbd274b1438bfcf2fa8f12->enter($__internal_9f3720b9cc1e11395f318e44abab24cc484e232762fbd274b1438bfcf2fa8f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9f3720b9cc1e11395f318e44abab24cc484e232762fbd274b1438bfcf2fa8f12->leave($__internal_9f3720b9cc1e11395f318e44abab24cc484e232762fbd274b1438bfcf2fa8f12_prof);

        
        $__internal_aa4b70f6897ae76fc221fc77f36b55db2dd50ede2a6f40bb7ae546179a8e1117->leave($__internal_aa4b70f6897ae76fc221fc77f36b55db2dd50ede2a6f40bb7ae546179a8e1117_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d2e55cf0b5cf392f970e1f2b0747daae4a7b8738037033c7b0b9cb20cc0f8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2e55cf0b5cf392f970e1f2b0747daae4a7b8738037033c7b0b9cb20cc0f8dc->enter($__internal_4d2e55cf0b5cf392f970e1f2b0747daae4a7b8738037033c7b0b9cb20cc0f8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b2a90ffd2f951f9c7df029061c6743fb600b1b33c8d93893a8f8f29cb187627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2a90ffd2f951f9c7df029061c6743fb600b1b33c8d93893a8f8f29cb187627->enter($__internal_5b2a90ffd2f951f9c7df029061c6743fb600b1b33c8d93893a8f8f29cb187627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5b2a90ffd2f951f9c7df029061c6743fb600b1b33c8d93893a8f8f29cb187627->leave($__internal_5b2a90ffd2f951f9c7df029061c6743fb600b1b33c8d93893a8f8f29cb187627_prof);

        
        $__internal_4d2e55cf0b5cf392f970e1f2b0747daae4a7b8738037033c7b0b9cb20cc0f8dc->leave($__internal_4d2e55cf0b5cf392f970e1f2b0747daae4a7b8738037033c7b0b9cb20cc0f8dc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
