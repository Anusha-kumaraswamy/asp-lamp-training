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
        $__internal_57a686a26da5ab85766c3e4e2d67ce0dfa795847770edd64f9355452e1ca5e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a686a26da5ab85766c3e4e2d67ce0dfa795847770edd64f9355452e1ca5e25->enter($__internal_57a686a26da5ab85766c3e4e2d67ce0dfa795847770edd64f9355452e1ca5e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9b83983093793a735ec32238053c029eca90cdc94844dbaf95fa9dcb9acc39b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b83983093793a735ec32238053c029eca90cdc94844dbaf95fa9dcb9acc39b5->enter($__internal_9b83983093793a735ec32238053c029eca90cdc94844dbaf95fa9dcb9acc39b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57a686a26da5ab85766c3e4e2d67ce0dfa795847770edd64f9355452e1ca5e25->leave($__internal_57a686a26da5ab85766c3e4e2d67ce0dfa795847770edd64f9355452e1ca5e25_prof);

        
        $__internal_9b83983093793a735ec32238053c029eca90cdc94844dbaf95fa9dcb9acc39b5->leave($__internal_9b83983093793a735ec32238053c029eca90cdc94844dbaf95fa9dcb9acc39b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1a08266cfaefb007fe8febb26ca46c389f117cf23adb4315dc1243da5d5dd04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a08266cfaefb007fe8febb26ca46c389f117cf23adb4315dc1243da5d5dd04->enter($__internal_a1a08266cfaefb007fe8febb26ca46c389f117cf23adb4315dc1243da5d5dd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dda3389369e1e5b1facf55b42ef1559372229bffeee3584d8b158134d3e61930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda3389369e1e5b1facf55b42ef1559372229bffeee3584d8b158134d3e61930->enter($__internal_dda3389369e1e5b1facf55b42ef1559372229bffeee3584d8b158134d3e61930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dda3389369e1e5b1facf55b42ef1559372229bffeee3584d8b158134d3e61930->leave($__internal_dda3389369e1e5b1facf55b42ef1559372229bffeee3584d8b158134d3e61930_prof);

        
        $__internal_a1a08266cfaefb007fe8febb26ca46c389f117cf23adb4315dc1243da5d5dd04->leave($__internal_a1a08266cfaefb007fe8febb26ca46c389f117cf23adb4315dc1243da5d5dd04_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87cd53d18c3b99d8124b7f0c29649073d3c1fd1125549da96a5de1be286648f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cd53d18c3b99d8124b7f0c29649073d3c1fd1125549da96a5de1be286648f4->enter($__internal_87cd53d18c3b99d8124b7f0c29649073d3c1fd1125549da96a5de1be286648f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54c72eec5343cd0eb9dbd32e625aa890188e1477ab9d1a425b56081eb8865c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c72eec5343cd0eb9dbd32e625aa890188e1477ab9d1a425b56081eb8865c0d->enter($__internal_54c72eec5343cd0eb9dbd32e625aa890188e1477ab9d1a425b56081eb8865c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_54c72eec5343cd0eb9dbd32e625aa890188e1477ab9d1a425b56081eb8865c0d->leave($__internal_54c72eec5343cd0eb9dbd32e625aa890188e1477ab9d1a425b56081eb8865c0d_prof);

        
        $__internal_87cd53d18c3b99d8124b7f0c29649073d3c1fd1125549da96a5de1be286648f4->leave($__internal_87cd53d18c3b99d8124b7f0c29649073d3c1fd1125549da96a5de1be286648f4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1233987e5b4a4aa00efef9b8371eda2dea1d859a5b799e8138f8237c772489e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1233987e5b4a4aa00efef9b8371eda2dea1d859a5b799e8138f8237c772489e->enter($__internal_b1233987e5b4a4aa00efef9b8371eda2dea1d859a5b799e8138f8237c772489e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68895742bef639ad280987f88351e1fef3f4d3a4d60a7f851b2557fb820539fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68895742bef639ad280987f88351e1fef3f4d3a4d60a7f851b2557fb820539fb->enter($__internal_68895742bef639ad280987f88351e1fef3f4d3a4d60a7f851b2557fb820539fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_68895742bef639ad280987f88351e1fef3f4d3a4d60a7f851b2557fb820539fb->leave($__internal_68895742bef639ad280987f88351e1fef3f4d3a4d60a7f851b2557fb820539fb_prof);

        
        $__internal_b1233987e5b4a4aa00efef9b8371eda2dea1d859a5b799e8138f8237c772489e->leave($__internal_b1233987e5b4a4aa00efef9b8371eda2dea1d859a5b799e8138f8237c772489e_prof);

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
