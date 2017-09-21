<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_904f72b347b2e0b6567378e3d2660436a066a12f97bb8927c5077708092dc48b extends Twig_Template
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
        $__internal_13eb531a791b87f84fc1ef9ae48c14672c369d21e581e8388563842f114c685f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13eb531a791b87f84fc1ef9ae48c14672c369d21e581e8388563842f114c685f->enter($__internal_13eb531a791b87f84fc1ef9ae48c14672c369d21e581e8388563842f114c685f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_437f131cf663d1e8f8fa5c890879c626966ea027beb37f4e94415ee925d03208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437f131cf663d1e8f8fa5c890879c626966ea027beb37f4e94415ee925d03208->enter($__internal_437f131cf663d1e8f8fa5c890879c626966ea027beb37f4e94415ee925d03208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13eb531a791b87f84fc1ef9ae48c14672c369d21e581e8388563842f114c685f->leave($__internal_13eb531a791b87f84fc1ef9ae48c14672c369d21e581e8388563842f114c685f_prof);

        
        $__internal_437f131cf663d1e8f8fa5c890879c626966ea027beb37f4e94415ee925d03208->leave($__internal_437f131cf663d1e8f8fa5c890879c626966ea027beb37f4e94415ee925d03208_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5999f8a01725bfe20009c857e92e60fbdf4e8c48dcfd5d18e92c1a6c2a0aadab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5999f8a01725bfe20009c857e92e60fbdf4e8c48dcfd5d18e92c1a6c2a0aadab->enter($__internal_5999f8a01725bfe20009c857e92e60fbdf4e8c48dcfd5d18e92c1a6c2a0aadab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81569a4da1892868bf77119e76bbe32a3f406b0ee58532194b152500f0342802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81569a4da1892868bf77119e76bbe32a3f406b0ee58532194b152500f0342802->enter($__internal_81569a4da1892868bf77119e76bbe32a3f406b0ee58532194b152500f0342802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_81569a4da1892868bf77119e76bbe32a3f406b0ee58532194b152500f0342802->leave($__internal_81569a4da1892868bf77119e76bbe32a3f406b0ee58532194b152500f0342802_prof);

        
        $__internal_5999f8a01725bfe20009c857e92e60fbdf4e8c48dcfd5d18e92c1a6c2a0aadab->leave($__internal_5999f8a01725bfe20009c857e92e60fbdf4e8c48dcfd5d18e92c1a6c2a0aadab_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee35a9505193e98b9de38901066c8c0917ecca6dde88a7c421c2662753547b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee35a9505193e98b9de38901066c8c0917ecca6dde88a7c421c2662753547b32->enter($__internal_ee35a9505193e98b9de38901066c8c0917ecca6dde88a7c421c2662753547b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efbb9b09b97b2243010d9d55c9cfd1efd0850043ce64491114d79ea4cb46126f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbb9b09b97b2243010d9d55c9cfd1efd0850043ce64491114d79ea4cb46126f->enter($__internal_efbb9b09b97b2243010d9d55c9cfd1efd0850043ce64491114d79ea4cb46126f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efbb9b09b97b2243010d9d55c9cfd1efd0850043ce64491114d79ea4cb46126f->leave($__internal_efbb9b09b97b2243010d9d55c9cfd1efd0850043ce64491114d79ea4cb46126f_prof);

        
        $__internal_ee35a9505193e98b9de38901066c8c0917ecca6dde88a7c421c2662753547b32->leave($__internal_ee35a9505193e98b9de38901066c8c0917ecca6dde88a7c421c2662753547b32_prof);

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
