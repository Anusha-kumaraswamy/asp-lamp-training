<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_864c6df068dfe2c6904d1708dd9cc92cef4bab2f77f1def5e43a66ffc431efd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfae4236f164847f43e343647038b805ff73c5795bf90971b1fc8e1d9fa21ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfae4236f164847f43e343647038b805ff73c5795bf90971b1fc8e1d9fa21ad4->enter($__internal_dfae4236f164847f43e343647038b805ff73c5795bf90971b1fc8e1d9fa21ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c4cc0cf2b9cc43d605514634f291b6bb1d9dd99e1d63e58f2a92e4b36bd755ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cc0cf2b9cc43d605514634f291b6bb1d9dd99e1d63e58f2a92e4b36bd755ab->enter($__internal_c4cc0cf2b9cc43d605514634f291b6bb1d9dd99e1d63e58f2a92e4b36bd755ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfae4236f164847f43e343647038b805ff73c5795bf90971b1fc8e1d9fa21ad4->leave($__internal_dfae4236f164847f43e343647038b805ff73c5795bf90971b1fc8e1d9fa21ad4_prof);

        
        $__internal_c4cc0cf2b9cc43d605514634f291b6bb1d9dd99e1d63e58f2a92e4b36bd755ab->leave($__internal_c4cc0cf2b9cc43d605514634f291b6bb1d9dd99e1d63e58f2a92e4b36bd755ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b8e29811a45c28075084f885b3972b2a313ba700e156583bd2342dd7453f618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8e29811a45c28075084f885b3972b2a313ba700e156583bd2342dd7453f618->enter($__internal_8b8e29811a45c28075084f885b3972b2a313ba700e156583bd2342dd7453f618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4dd5d99aa0fe17ca60a1526bc239fb3c28129ffaebc163c9eefa8fef1ab65d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd5d99aa0fe17ca60a1526bc239fb3c28129ffaebc163c9eefa8fef1ab65d39->enter($__internal_4dd5d99aa0fe17ca60a1526bc239fb3c28129ffaebc163c9eefa8fef1ab65d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4dd5d99aa0fe17ca60a1526bc239fb3c28129ffaebc163c9eefa8fef1ab65d39->leave($__internal_4dd5d99aa0fe17ca60a1526bc239fb3c28129ffaebc163c9eefa8fef1ab65d39_prof);

        
        $__internal_8b8e29811a45c28075084f885b3972b2a313ba700e156583bd2342dd7453f618->leave($__internal_8b8e29811a45c28075084f885b3972b2a313ba700e156583bd2342dd7453f618_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
