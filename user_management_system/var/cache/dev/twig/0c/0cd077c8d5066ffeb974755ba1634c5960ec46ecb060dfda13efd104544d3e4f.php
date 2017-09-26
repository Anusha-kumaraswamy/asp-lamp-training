<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_904f72b347b2e0b6567378e3d2660436a066a12f97bb8927c5077708092dc48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_d044f474e0f2b80642eb0ba92d4b34ddcdb664d8f7a45c4b84aed31ae6f32ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d044f474e0f2b80642eb0ba92d4b34ddcdb664d8f7a45c4b84aed31ae6f32ef3->enter($__internal_d044f474e0f2b80642eb0ba92d4b34ddcdb664d8f7a45c4b84aed31ae6f32ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9efcd53de2b34f2f954b1493a0da4e34b5f9822824b79956527b29cb5bd50306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efcd53de2b34f2f954b1493a0da4e34b5f9822824b79956527b29cb5bd50306->enter($__internal_9efcd53de2b34f2f954b1493a0da4e34b5f9822824b79956527b29cb5bd50306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d044f474e0f2b80642eb0ba92d4b34ddcdb664d8f7a45c4b84aed31ae6f32ef3->leave($__internal_d044f474e0f2b80642eb0ba92d4b34ddcdb664d8f7a45c4b84aed31ae6f32ef3_prof);

        
        $__internal_9efcd53de2b34f2f954b1493a0da4e34b5f9822824b79956527b29cb5bd50306->leave($__internal_9efcd53de2b34f2f954b1493a0da4e34b5f9822824b79956527b29cb5bd50306_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb6a5dcc867ab24218dbd81f23eebd7d855e761ebe20b95fece1f57a264a4990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6a5dcc867ab24218dbd81f23eebd7d855e761ebe20b95fece1f57a264a4990->enter($__internal_fb6a5dcc867ab24218dbd81f23eebd7d855e761ebe20b95fece1f57a264a4990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d6cab5bfd7a5b6d6abf6f759c3b621ffb7ccc4f26312fc79cad7a9cdc7d84d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6cab5bfd7a5b6d6abf6f759c3b621ffb7ccc4f26312fc79cad7a9cdc7d84d0->enter($__internal_4d6cab5bfd7a5b6d6abf6f759c3b621ffb7ccc4f26312fc79cad7a9cdc7d84d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4d6cab5bfd7a5b6d6abf6f759c3b621ffb7ccc4f26312fc79cad7a9cdc7d84d0->leave($__internal_4d6cab5bfd7a5b6d6abf6f759c3b621ffb7ccc4f26312fc79cad7a9cdc7d84d0_prof);

        
        $__internal_fb6a5dcc867ab24218dbd81f23eebd7d855e761ebe20b95fece1f57a264a4990->leave($__internal_fb6a5dcc867ab24218dbd81f23eebd7d855e761ebe20b95fece1f57a264a4990_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_858e514edab8a504ea28ebfd6831fdfd7d9050c72ca4492f3d38e43424aba7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858e514edab8a504ea28ebfd6831fdfd7d9050c72ca4492f3d38e43424aba7cc->enter($__internal_858e514edab8a504ea28ebfd6831fdfd7d9050c72ca4492f3d38e43424aba7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49f483db4e9d309065259bdc3f5310bb52adad3a653d81ea402fc2e07ab3edc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f483db4e9d309065259bdc3f5310bb52adad3a653d81ea402fc2e07ab3edc7->enter($__internal_49f483db4e9d309065259bdc3f5310bb52adad3a653d81ea402fc2e07ab3edc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49f483db4e9d309065259bdc3f5310bb52adad3a653d81ea402fc2e07ab3edc7->leave($__internal_49f483db4e9d309065259bdc3f5310bb52adad3a653d81ea402fc2e07ab3edc7_prof);

        
        $__internal_858e514edab8a504ea28ebfd6831fdfd7d9050c72ca4492f3d38e43424aba7cc->leave($__internal_858e514edab8a504ea28ebfd6831fdfd7d9050c72ca4492f3d38e43424aba7cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
