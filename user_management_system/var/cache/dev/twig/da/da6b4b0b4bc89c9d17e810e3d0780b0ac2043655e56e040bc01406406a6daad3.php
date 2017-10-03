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
        $__internal_51f80f7d63e3a112100cedd21abaa45f8a8a6d3477de53d42a9a0bff249cd1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f80f7d63e3a112100cedd21abaa45f8a8a6d3477de53d42a9a0bff249cd1da->enter($__internal_51f80f7d63e3a112100cedd21abaa45f8a8a6d3477de53d42a9a0bff249cd1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_942aa13b9d0d0575263868ca30b0e869f12e7b03e54e473fe49fee618ec2f09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942aa13b9d0d0575263868ca30b0e869f12e7b03e54e473fe49fee618ec2f09d->enter($__internal_942aa13b9d0d0575263868ca30b0e869f12e7b03e54e473fe49fee618ec2f09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51f80f7d63e3a112100cedd21abaa45f8a8a6d3477de53d42a9a0bff249cd1da->leave($__internal_51f80f7d63e3a112100cedd21abaa45f8a8a6d3477de53d42a9a0bff249cd1da_prof);

        
        $__internal_942aa13b9d0d0575263868ca30b0e869f12e7b03e54e473fe49fee618ec2f09d->leave($__internal_942aa13b9d0d0575263868ca30b0e869f12e7b03e54e473fe49fee618ec2f09d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_071ab065122309af08edcd602f99b83be2c56173b11b319f0455dd8519e233c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071ab065122309af08edcd602f99b83be2c56173b11b319f0455dd8519e233c9->enter($__internal_071ab065122309af08edcd602f99b83be2c56173b11b319f0455dd8519e233c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d3b1a988933ed445eec9e21f7bc6cc7296e63cea3ed737841d569de7b918873e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b1a988933ed445eec9e21f7bc6cc7296e63cea3ed737841d569de7b918873e->enter($__internal_d3b1a988933ed445eec9e21f7bc6cc7296e63cea3ed737841d569de7b918873e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3b1a988933ed445eec9e21f7bc6cc7296e63cea3ed737841d569de7b918873e->leave($__internal_d3b1a988933ed445eec9e21f7bc6cc7296e63cea3ed737841d569de7b918873e_prof);

        
        $__internal_071ab065122309af08edcd602f99b83be2c56173b11b319f0455dd8519e233c9->leave($__internal_071ab065122309af08edcd602f99b83be2c56173b11b319f0455dd8519e233c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7468f9e0b59e28a7182ef5ef400d5efa74cccfd04611a839f5eecd7cb87f83dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7468f9e0b59e28a7182ef5ef400d5efa74cccfd04611a839f5eecd7cb87f83dd->enter($__internal_7468f9e0b59e28a7182ef5ef400d5efa74cccfd04611a839f5eecd7cb87f83dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9b8e6b71a256178c70c9dd1c58874387df4201117d38662973d5ebc15c83ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b8e6b71a256178c70c9dd1c58874387df4201117d38662973d5ebc15c83ba9->enter($__internal_e9b8e6b71a256178c70c9dd1c58874387df4201117d38662973d5ebc15c83ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9b8e6b71a256178c70c9dd1c58874387df4201117d38662973d5ebc15c83ba9->leave($__internal_e9b8e6b71a256178c70c9dd1c58874387df4201117d38662973d5ebc15c83ba9_prof);

        
        $__internal_7468f9e0b59e28a7182ef5ef400d5efa74cccfd04611a839f5eecd7cb87f83dd->leave($__internal_7468f9e0b59e28a7182ef5ef400d5efa74cccfd04611a839f5eecd7cb87f83dd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ac5d00924ec0ece88306292603a9a8582630eb725beede5d6b5c4ac81362990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac5d00924ec0ece88306292603a9a8582630eb725beede5d6b5c4ac81362990->enter($__internal_1ac5d00924ec0ece88306292603a9a8582630eb725beede5d6b5c4ac81362990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fe6d454098ebc337122e9db24dec2d20b28298774741752175a6c70afd62582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe6d454098ebc337122e9db24dec2d20b28298774741752175a6c70afd62582->enter($__internal_5fe6d454098ebc337122e9db24dec2d20b28298774741752175a6c70afd62582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5fe6d454098ebc337122e9db24dec2d20b28298774741752175a6c70afd62582->leave($__internal_5fe6d454098ebc337122e9db24dec2d20b28298774741752175a6c70afd62582_prof);

        
        $__internal_1ac5d00924ec0ece88306292603a9a8582630eb725beede5d6b5c4ac81362990->leave($__internal_1ac5d00924ec0ece88306292603a9a8582630eb725beede5d6b5c4ac81362990_prof);

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
