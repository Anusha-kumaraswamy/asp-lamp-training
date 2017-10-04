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
        $__internal_ae490b14543adc7d5519848fdd8324e8a79b3dc6e7fcfc6fb11f4ca4810d2927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae490b14543adc7d5519848fdd8324e8a79b3dc6e7fcfc6fb11f4ca4810d2927->enter($__internal_ae490b14543adc7d5519848fdd8324e8a79b3dc6e7fcfc6fb11f4ca4810d2927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2978bc586aa687169dd92f8330eff8ba56b8ac458027052ad3d8a0eac080b6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2978bc586aa687169dd92f8330eff8ba56b8ac458027052ad3d8a0eac080b6da->enter($__internal_2978bc586aa687169dd92f8330eff8ba56b8ac458027052ad3d8a0eac080b6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae490b14543adc7d5519848fdd8324e8a79b3dc6e7fcfc6fb11f4ca4810d2927->leave($__internal_ae490b14543adc7d5519848fdd8324e8a79b3dc6e7fcfc6fb11f4ca4810d2927_prof);

        
        $__internal_2978bc586aa687169dd92f8330eff8ba56b8ac458027052ad3d8a0eac080b6da->leave($__internal_2978bc586aa687169dd92f8330eff8ba56b8ac458027052ad3d8a0eac080b6da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46b50c351a673260d6bb769160ce26fe8cd205d808eda355cabd3637631e7706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b50c351a673260d6bb769160ce26fe8cd205d808eda355cabd3637631e7706->enter($__internal_46b50c351a673260d6bb769160ce26fe8cd205d808eda355cabd3637631e7706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5d2242d74143a4b1a8472451170b75354a0e44c23a2d09abefb5571be6fc3874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2242d74143a4b1a8472451170b75354a0e44c23a2d09abefb5571be6fc3874->enter($__internal_5d2242d74143a4b1a8472451170b75354a0e44c23a2d09abefb5571be6fc3874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d2242d74143a4b1a8472451170b75354a0e44c23a2d09abefb5571be6fc3874->leave($__internal_5d2242d74143a4b1a8472451170b75354a0e44c23a2d09abefb5571be6fc3874_prof);

        
        $__internal_46b50c351a673260d6bb769160ce26fe8cd205d808eda355cabd3637631e7706->leave($__internal_46b50c351a673260d6bb769160ce26fe8cd205d808eda355cabd3637631e7706_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fdefb5fd8c86a0b93447f1c2aa33b2a379dc77d9e43352870078a9dc13314a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdefb5fd8c86a0b93447f1c2aa33b2a379dc77d9e43352870078a9dc13314a1->enter($__internal_0fdefb5fd8c86a0b93447f1c2aa33b2a379dc77d9e43352870078a9dc13314a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa1ab1f71cc99c8a565713892c16605eedd62a7e166b00d737b6503f23bf22d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1ab1f71cc99c8a565713892c16605eedd62a7e166b00d737b6503f23bf22d5->enter($__internal_aa1ab1f71cc99c8a565713892c16605eedd62a7e166b00d737b6503f23bf22d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa1ab1f71cc99c8a565713892c16605eedd62a7e166b00d737b6503f23bf22d5->leave($__internal_aa1ab1f71cc99c8a565713892c16605eedd62a7e166b00d737b6503f23bf22d5_prof);

        
        $__internal_0fdefb5fd8c86a0b93447f1c2aa33b2a379dc77d9e43352870078a9dc13314a1->leave($__internal_0fdefb5fd8c86a0b93447f1c2aa33b2a379dc77d9e43352870078a9dc13314a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4069974f87fb2888cc94d0f37588b0fa04b5e16d1b098013b75bb3611f918eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4069974f87fb2888cc94d0f37588b0fa04b5e16d1b098013b75bb3611f918eab->enter($__internal_4069974f87fb2888cc94d0f37588b0fa04b5e16d1b098013b75bb3611f918eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_828d8d793db91650f3c89e74cdc455c5199ff5ec3604e16c5b392f80691d3c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828d8d793db91650f3c89e74cdc455c5199ff5ec3604e16c5b392f80691d3c06->enter($__internal_828d8d793db91650f3c89e74cdc455c5199ff5ec3604e16c5b392f80691d3c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_828d8d793db91650f3c89e74cdc455c5199ff5ec3604e16c5b392f80691d3c06->leave($__internal_828d8d793db91650f3c89e74cdc455c5199ff5ec3604e16c5b392f80691d3c06_prof);

        
        $__internal_4069974f87fb2888cc94d0f37588b0fa04b5e16d1b098013b75bb3611f918eab->leave($__internal_4069974f87fb2888cc94d0f37588b0fa04b5e16d1b098013b75bb3611f918eab_prof);

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
