<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ab0e6f7401a8869bde793c400a564ea08707092c5265379dcd263c01d3883792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_238f9319df33ea0620b6e011923db507acae0223b6d1660294a8e6ad45f9b356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238f9319df33ea0620b6e011923db507acae0223b6d1660294a8e6ad45f9b356->enter($__internal_238f9319df33ea0620b6e011923db507acae0223b6d1660294a8e6ad45f9b356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9d89617f71053c47e5832aa44f5c0d185dfdc03aa3e1620b9e1adc5bd0980c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d89617f71053c47e5832aa44f5c0d185dfdc03aa3e1620b9e1adc5bd0980c11->enter($__internal_9d89617f71053c47e5832aa44f5c0d185dfdc03aa3e1620b9e1adc5bd0980c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_238f9319df33ea0620b6e011923db507acae0223b6d1660294a8e6ad45f9b356->leave($__internal_238f9319df33ea0620b6e011923db507acae0223b6d1660294a8e6ad45f9b356_prof);

        
        $__internal_9d89617f71053c47e5832aa44f5c0d185dfdc03aa3e1620b9e1adc5bd0980c11->leave($__internal_9d89617f71053c47e5832aa44f5c0d185dfdc03aa3e1620b9e1adc5bd0980c11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0358e0f190332f63086f7bc79ddea894155139ee648e67bd6ee45349e699093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0358e0f190332f63086f7bc79ddea894155139ee648e67bd6ee45349e699093->enter($__internal_f0358e0f190332f63086f7bc79ddea894155139ee648e67bd6ee45349e699093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d5ea230a6490ac9aa82779b539077a58ebd5593c41281c4547e52f7aee35f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5ea230a6490ac9aa82779b539077a58ebd5593c41281c4547e52f7aee35f59->enter($__internal_1d5ea230a6490ac9aa82779b539077a58ebd5593c41281c4547e52f7aee35f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d5ea230a6490ac9aa82779b539077a58ebd5593c41281c4547e52f7aee35f59->leave($__internal_1d5ea230a6490ac9aa82779b539077a58ebd5593c41281c4547e52f7aee35f59_prof);

        
        $__internal_f0358e0f190332f63086f7bc79ddea894155139ee648e67bd6ee45349e699093->leave($__internal_f0358e0f190332f63086f7bc79ddea894155139ee648e67bd6ee45349e699093_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c05d7884c3d83f5be95cef2dd235799d26f2614d474ec57e44e34580f10c358d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05d7884c3d83f5be95cef2dd235799d26f2614d474ec57e44e34580f10c358d->enter($__internal_c05d7884c3d83f5be95cef2dd235799d26f2614d474ec57e44e34580f10c358d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9527092eb8990a10408d3457d7ed874c3584a591e79fe85f3dc5d29f323af051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9527092eb8990a10408d3457d7ed874c3584a591e79fe85f3dc5d29f323af051->enter($__internal_9527092eb8990a10408d3457d7ed874c3584a591e79fe85f3dc5d29f323af051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9527092eb8990a10408d3457d7ed874c3584a591e79fe85f3dc5d29f323af051->leave($__internal_9527092eb8990a10408d3457d7ed874c3584a591e79fe85f3dc5d29f323af051_prof);

        
        $__internal_c05d7884c3d83f5be95cef2dd235799d26f2614d474ec57e44e34580f10c358d->leave($__internal_c05d7884c3d83f5be95cef2dd235799d26f2614d474ec57e44e34580f10c358d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69dedbdbd44217e0739bb21767b5a6a434b406799f43839497e5528740b43db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69dedbdbd44217e0739bb21767b5a6a434b406799f43839497e5528740b43db0->enter($__internal_69dedbdbd44217e0739bb21767b5a6a434b406799f43839497e5528740b43db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a19d94c70c148338ba493d66d0fd04f38893d3e230fe951ae6ebb5bb6705a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a19d94c70c148338ba493d66d0fd04f38893d3e230fe951ae6ebb5bb6705a2c->enter($__internal_5a19d94c70c148338ba493d66d0fd04f38893d3e230fe951ae6ebb5bb6705a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a19d94c70c148338ba493d66d0fd04f38893d3e230fe951ae6ebb5bb6705a2c->leave($__internal_5a19d94c70c148338ba493d66d0fd04f38893d3e230fe951ae6ebb5bb6705a2c_prof);

        
        $__internal_69dedbdbd44217e0739bb21767b5a6a434b406799f43839497e5528740b43db0->leave($__internal_69dedbdbd44217e0739bb21767b5a6a434b406799f43839497e5528740b43db0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
