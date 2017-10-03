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
        $__internal_794cf6b5ad12119d73e1078b2c2759a51b5ec0033c0003a38aa3063ef26ba553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794cf6b5ad12119d73e1078b2c2759a51b5ec0033c0003a38aa3063ef26ba553->enter($__internal_794cf6b5ad12119d73e1078b2c2759a51b5ec0033c0003a38aa3063ef26ba553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_fdf921bbd33c0f3c07814262a562d0c814ebc33edae605d9dd73de6823efde70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf921bbd33c0f3c07814262a562d0c814ebc33edae605d9dd73de6823efde70->enter($__internal_fdf921bbd33c0f3c07814262a562d0c814ebc33edae605d9dd73de6823efde70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_794cf6b5ad12119d73e1078b2c2759a51b5ec0033c0003a38aa3063ef26ba553->leave($__internal_794cf6b5ad12119d73e1078b2c2759a51b5ec0033c0003a38aa3063ef26ba553_prof);

        
        $__internal_fdf921bbd33c0f3c07814262a562d0c814ebc33edae605d9dd73de6823efde70->leave($__internal_fdf921bbd33c0f3c07814262a562d0c814ebc33edae605d9dd73de6823efde70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c86fcc30cb8622f44410e554d8b3ea3567f3bc819293796f1c4f4e1100cedf93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86fcc30cb8622f44410e554d8b3ea3567f3bc819293796f1c4f4e1100cedf93->enter($__internal_c86fcc30cb8622f44410e554d8b3ea3567f3bc819293796f1c4f4e1100cedf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb5da81ecd43a92c933c4142a4e1c847aa6a0ff0c7e4a638467291bc18e3df47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5da81ecd43a92c933c4142a4e1c847aa6a0ff0c7e4a638467291bc18e3df47->enter($__internal_fb5da81ecd43a92c933c4142a4e1c847aa6a0ff0c7e4a638467291bc18e3df47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fb5da81ecd43a92c933c4142a4e1c847aa6a0ff0c7e4a638467291bc18e3df47->leave($__internal_fb5da81ecd43a92c933c4142a4e1c847aa6a0ff0c7e4a638467291bc18e3df47_prof);

        
        $__internal_c86fcc30cb8622f44410e554d8b3ea3567f3bc819293796f1c4f4e1100cedf93->leave($__internal_c86fcc30cb8622f44410e554d8b3ea3567f3bc819293796f1c4f4e1100cedf93_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bb9018f9d40485b4318fc99878b90fd39dd5bdaf6df1a1d397d7fd516c55d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb9018f9d40485b4318fc99878b90fd39dd5bdaf6df1a1d397d7fd516c55d8c->enter($__internal_4bb9018f9d40485b4318fc99878b90fd39dd5bdaf6df1a1d397d7fd516c55d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39b69e9f4b06831a415038e1be4fd6cb9001de7f30ded1d9d3e8595e8ac4825a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b69e9f4b06831a415038e1be4fd6cb9001de7f30ded1d9d3e8595e8ac4825a->enter($__internal_39b69e9f4b06831a415038e1be4fd6cb9001de7f30ded1d9d3e8595e8ac4825a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39b69e9f4b06831a415038e1be4fd6cb9001de7f30ded1d9d3e8595e8ac4825a->leave($__internal_39b69e9f4b06831a415038e1be4fd6cb9001de7f30ded1d9d3e8595e8ac4825a_prof);

        
        $__internal_4bb9018f9d40485b4318fc99878b90fd39dd5bdaf6df1a1d397d7fd516c55d8c->leave($__internal_4bb9018f9d40485b4318fc99878b90fd39dd5bdaf6df1a1d397d7fd516c55d8c_prof);

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
