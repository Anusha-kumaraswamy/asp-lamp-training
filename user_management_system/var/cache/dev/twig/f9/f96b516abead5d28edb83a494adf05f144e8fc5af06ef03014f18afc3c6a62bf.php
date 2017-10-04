<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c917be369ba8222380bcddc8671ee1c43d27e7b213035ca32d49ab76103d46d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fadd7a4fefe0565e9128a0b55b3e67e93ff686d875c264877562c6c18db254b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadd7a4fefe0565e9128a0b55b3e67e93ff686d875c264877562c6c18db254b8->enter($__internal_fadd7a4fefe0565e9128a0b55b3e67e93ff686d875c264877562c6c18db254b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3cce46f60ac4c1bda78c897ffe8928374722519729dfcc6cd2f98727f013324b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cce46f60ac4c1bda78c897ffe8928374722519729dfcc6cd2f98727f013324b->enter($__internal_3cce46f60ac4c1bda78c897ffe8928374722519729dfcc6cd2f98727f013324b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fadd7a4fefe0565e9128a0b55b3e67e93ff686d875c264877562c6c18db254b8->leave($__internal_fadd7a4fefe0565e9128a0b55b3e67e93ff686d875c264877562c6c18db254b8_prof);

        
        $__internal_3cce46f60ac4c1bda78c897ffe8928374722519729dfcc6cd2f98727f013324b->leave($__internal_3cce46f60ac4c1bda78c897ffe8928374722519729dfcc6cd2f98727f013324b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_983f063eddf81e928270701aace152bfafd04d25913a765d0b0c6ab2e22320b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983f063eddf81e928270701aace152bfafd04d25913a765d0b0c6ab2e22320b5->enter($__internal_983f063eddf81e928270701aace152bfafd04d25913a765d0b0c6ab2e22320b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9af07ec05f0009f8e4d79f245dec5d16b9223a13874217f8a7d9dfbd44b807a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9af07ec05f0009f8e4d79f245dec5d16b9223a13874217f8a7d9dfbd44b807a->enter($__internal_d9af07ec05f0009f8e4d79f245dec5d16b9223a13874217f8a7d9dfbd44b807a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d9af07ec05f0009f8e4d79f245dec5d16b9223a13874217f8a7d9dfbd44b807a->leave($__internal_d9af07ec05f0009f8e4d79f245dec5d16b9223a13874217f8a7d9dfbd44b807a_prof);

        
        $__internal_983f063eddf81e928270701aace152bfafd04d25913a765d0b0c6ab2e22320b5->leave($__internal_983f063eddf81e928270701aace152bfafd04d25913a765d0b0c6ab2e22320b5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_17abf6007fca4301e301b3c53c6ce65f2399dfae555cbd4f560c4b86fbbdb2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17abf6007fca4301e301b3c53c6ce65f2399dfae555cbd4f560c4b86fbbdb2c8->enter($__internal_17abf6007fca4301e301b3c53c6ce65f2399dfae555cbd4f560c4b86fbbdb2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f44da46a31705f4e8a66504c1b478cdbc7476ac1a5faaa059da1bee9e32cbbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44da46a31705f4e8a66504c1b478cdbc7476ac1a5faaa059da1bee9e32cbbfa->enter($__internal_f44da46a31705f4e8a66504c1b478cdbc7476ac1a5faaa059da1bee9e32cbbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_f44da46a31705f4e8a66504c1b478cdbc7476ac1a5faaa059da1bee9e32cbbfa->leave($__internal_f44da46a31705f4e8a66504c1b478cdbc7476ac1a5faaa059da1bee9e32cbbfa_prof);

        
        $__internal_17abf6007fca4301e301b3c53c6ce65f2399dfae555cbd4f560c4b86fbbdb2c8->leave($__internal_17abf6007fca4301e301b3c53c6ce65f2399dfae555cbd4f560c4b86fbbdb2c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
