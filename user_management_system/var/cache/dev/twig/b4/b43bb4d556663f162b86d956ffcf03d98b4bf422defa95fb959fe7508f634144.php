<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_24aae50fd630924aa0c740f541663080abe6f7feb634545e24f3549b8751a99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6ae885badcb1fe5c7104bbfd861f1ff79781a2d2344240dffac9ac9c32d04114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae885badcb1fe5c7104bbfd861f1ff79781a2d2344240dffac9ac9c32d04114->enter($__internal_6ae885badcb1fe5c7104bbfd861f1ff79781a2d2344240dffac9ac9c32d04114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1fea441197cb12d78e8da15b0a30aa3f317b6f128c3f3ff3e5d99b99377d1414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fea441197cb12d78e8da15b0a30aa3f317b6f128c3f3ff3e5d99b99377d1414->enter($__internal_1fea441197cb12d78e8da15b0a30aa3f317b6f128c3f3ff3e5d99b99377d1414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae885badcb1fe5c7104bbfd861f1ff79781a2d2344240dffac9ac9c32d04114->leave($__internal_6ae885badcb1fe5c7104bbfd861f1ff79781a2d2344240dffac9ac9c32d04114_prof);

        
        $__internal_1fea441197cb12d78e8da15b0a30aa3f317b6f128c3f3ff3e5d99b99377d1414->leave($__internal_1fea441197cb12d78e8da15b0a30aa3f317b6f128c3f3ff3e5d99b99377d1414_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ba0951a670f12f4298c134a4d9a44593f514607a52c0ce148547eec4d1bee40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba0951a670f12f4298c134a4d9a44593f514607a52c0ce148547eec4d1bee40->enter($__internal_6ba0951a670f12f4298c134a4d9a44593f514607a52c0ce148547eec4d1bee40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb008ebe5d7f9a970295f1a7e4245e16798a5b361c06c89ef67fb58e83228d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb008ebe5d7f9a970295f1a7e4245e16798a5b361c06c89ef67fb58e83228d94->enter($__internal_fb008ebe5d7f9a970295f1a7e4245e16798a5b361c06c89ef67fb58e83228d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fb008ebe5d7f9a970295f1a7e4245e16798a5b361c06c89ef67fb58e83228d94->leave($__internal_fb008ebe5d7f9a970295f1a7e4245e16798a5b361c06c89ef67fb58e83228d94_prof);

        
        $__internal_6ba0951a670f12f4298c134a4d9a44593f514607a52c0ce148547eec4d1bee40->leave($__internal_6ba0951a670f12f4298c134a4d9a44593f514607a52c0ce148547eec4d1bee40_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53418cc281c074a1807d026256c1e6dbdc2551f32d26366a3b758c0603deeb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53418cc281c074a1807d026256c1e6dbdc2551f32d26366a3b758c0603deeb3a->enter($__internal_53418cc281c074a1807d026256c1e6dbdc2551f32d26366a3b758c0603deeb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2426c5ce9660a1a09c22d8ad1b449d85a9855b561cd07233682733319bf7b165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2426c5ce9660a1a09c22d8ad1b449d85a9855b561cd07233682733319bf7b165->enter($__internal_2426c5ce9660a1a09c22d8ad1b449d85a9855b561cd07233682733319bf7b165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2426c5ce9660a1a09c22d8ad1b449d85a9855b561cd07233682733319bf7b165->leave($__internal_2426c5ce9660a1a09c22d8ad1b449d85a9855b561cd07233682733319bf7b165_prof);

        
        $__internal_53418cc281c074a1807d026256c1e6dbdc2551f32d26366a3b758c0603deeb3a->leave($__internal_53418cc281c074a1807d026256c1e6dbdc2551f32d26366a3b758c0603deeb3a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acc2b959bd2ae4cedb93976f9454fa055d808c2542cef474225bdb20a87e0f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc2b959bd2ae4cedb93976f9454fa055d808c2542cef474225bdb20a87e0f28->enter($__internal_acc2b959bd2ae4cedb93976f9454fa055d808c2542cef474225bdb20a87e0f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef719477837d12374bf22ab96149e69c54acc9b7a6ff979ae92a04e33d80fd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef719477837d12374bf22ab96149e69c54acc9b7a6ff979ae92a04e33d80fd93->enter($__internal_ef719477837d12374bf22ab96149e69c54acc9b7a6ff979ae92a04e33d80fd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ef719477837d12374bf22ab96149e69c54acc9b7a6ff979ae92a04e33d80fd93->leave($__internal_ef719477837d12374bf22ab96149e69c54acc9b7a6ff979ae92a04e33d80fd93_prof);

        
        $__internal_acc2b959bd2ae4cedb93976f9454fa055d808c2542cef474225bdb20a87e0f28->leave($__internal_acc2b959bd2ae4cedb93976f9454fa055d808c2542cef474225bdb20a87e0f28_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
