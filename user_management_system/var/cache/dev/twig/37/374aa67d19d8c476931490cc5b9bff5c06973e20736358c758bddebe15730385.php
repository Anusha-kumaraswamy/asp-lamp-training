<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
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
        $__internal_0bfd7d214b6e9028a88be9b78612521f2a20ac89e39feb11e07b54f7273a1376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfd7d214b6e9028a88be9b78612521f2a20ac89e39feb11e07b54f7273a1376->enter($__internal_0bfd7d214b6e9028a88be9b78612521f2a20ac89e39feb11e07b54f7273a1376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d9c9cb51ee223a0c3d3afe09db2982528b9e0ab2504d49cd749f242154fd7b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c9cb51ee223a0c3d3afe09db2982528b9e0ab2504d49cd749f242154fd7b7b->enter($__internal_d9c9cb51ee223a0c3d3afe09db2982528b9e0ab2504d49cd749f242154fd7b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bfd7d214b6e9028a88be9b78612521f2a20ac89e39feb11e07b54f7273a1376->leave($__internal_0bfd7d214b6e9028a88be9b78612521f2a20ac89e39feb11e07b54f7273a1376_prof);

        
        $__internal_d9c9cb51ee223a0c3d3afe09db2982528b9e0ab2504d49cd749f242154fd7b7b->leave($__internal_d9c9cb51ee223a0c3d3afe09db2982528b9e0ab2504d49cd749f242154fd7b7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f012014b4676c89573ce69ca9e3b5bc6dcec7449dae6678baf6ccdee7585ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f012014b4676c89573ce69ca9e3b5bc6dcec7449dae6678baf6ccdee7585ab4->enter($__internal_8f012014b4676c89573ce69ca9e3b5bc6dcec7449dae6678baf6ccdee7585ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4397b102617798ceb82966abd1f9988f51e7a23576fa9a2ef52e8f2d39095d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4397b102617798ceb82966abd1f9988f51e7a23576fa9a2ef52e8f2d39095d27->enter($__internal_4397b102617798ceb82966abd1f9988f51e7a23576fa9a2ef52e8f2d39095d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4397b102617798ceb82966abd1f9988f51e7a23576fa9a2ef52e8f2d39095d27->leave($__internal_4397b102617798ceb82966abd1f9988f51e7a23576fa9a2ef52e8f2d39095d27_prof);

        
        $__internal_8f012014b4676c89573ce69ca9e3b5bc6dcec7449dae6678baf6ccdee7585ab4->leave($__internal_8f012014b4676c89573ce69ca9e3b5bc6dcec7449dae6678baf6ccdee7585ab4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d86db8ec89309c9f9ebab5207e1d2cbff3696c51aaacc412db764930797e18fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86db8ec89309c9f9ebab5207e1d2cbff3696c51aaacc412db764930797e18fd->enter($__internal_d86db8ec89309c9f9ebab5207e1d2cbff3696c51aaacc412db764930797e18fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c7954924578ab78c59437cfb64d23add88f5c06b9321fadccf780354c31b6d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7954924578ab78c59437cfb64d23add88f5c06b9321fadccf780354c31b6d8c->enter($__internal_c7954924578ab78c59437cfb64d23add88f5c06b9321fadccf780354c31b6d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7954924578ab78c59437cfb64d23add88f5c06b9321fadccf780354c31b6d8c->leave($__internal_c7954924578ab78c59437cfb64d23add88f5c06b9321fadccf780354c31b6d8c_prof);

        
        $__internal_d86db8ec89309c9f9ebab5207e1d2cbff3696c51aaacc412db764930797e18fd->leave($__internal_d86db8ec89309c9f9ebab5207e1d2cbff3696c51aaacc412db764930797e18fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b14e62fc013eb1e545d222ebf259a3a80cc15db9ea815dafdb1619bda0cdabde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14e62fc013eb1e545d222ebf259a3a80cc15db9ea815dafdb1619bda0cdabde->enter($__internal_b14e62fc013eb1e545d222ebf259a3a80cc15db9ea815dafdb1619bda0cdabde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2632ae9df443dbdc0dbbd5e35ad16cb5d770f1223c1ede4e7294973b702ad8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2632ae9df443dbdc0dbbd5e35ad16cb5d770f1223c1ede4e7294973b702ad8c9->enter($__internal_2632ae9df443dbdc0dbbd5e35ad16cb5d770f1223c1ede4e7294973b702ad8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2632ae9df443dbdc0dbbd5e35ad16cb5d770f1223c1ede4e7294973b702ad8c9->leave($__internal_2632ae9df443dbdc0dbbd5e35ad16cb5d770f1223c1ede4e7294973b702ad8c9_prof);

        
        $__internal_b14e62fc013eb1e545d222ebf259a3a80cc15db9ea815dafdb1619bda0cdabde->leave($__internal_b14e62fc013eb1e545d222ebf259a3a80cc15db9ea815dafdb1619bda0cdabde_prof);

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
