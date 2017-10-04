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
        $__internal_bede34e85145a6c3d1d18f7aed573b20bcf73133a6b2aa160306cb23078a9990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bede34e85145a6c3d1d18f7aed573b20bcf73133a6b2aa160306cb23078a9990->enter($__internal_bede34e85145a6c3d1d18f7aed573b20bcf73133a6b2aa160306cb23078a9990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0fc4766c348a0393e55dd9e14b03a7c044368ce35a7c0821a4b10fc1108c5770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc4766c348a0393e55dd9e14b03a7c044368ce35a7c0821a4b10fc1108c5770->enter($__internal_0fc4766c348a0393e55dd9e14b03a7c044368ce35a7c0821a4b10fc1108c5770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bede34e85145a6c3d1d18f7aed573b20bcf73133a6b2aa160306cb23078a9990->leave($__internal_bede34e85145a6c3d1d18f7aed573b20bcf73133a6b2aa160306cb23078a9990_prof);

        
        $__internal_0fc4766c348a0393e55dd9e14b03a7c044368ce35a7c0821a4b10fc1108c5770->leave($__internal_0fc4766c348a0393e55dd9e14b03a7c044368ce35a7c0821a4b10fc1108c5770_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_210b38b23f3c12607a788bea037ef4df3299a23d8ba5637b402427c46ae9ea85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210b38b23f3c12607a788bea037ef4df3299a23d8ba5637b402427c46ae9ea85->enter($__internal_210b38b23f3c12607a788bea037ef4df3299a23d8ba5637b402427c46ae9ea85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f9515060fbe1b3b2cac1ce5e09af176b248d2838fec9d21da3df37a08abc7f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9515060fbe1b3b2cac1ce5e09af176b248d2838fec9d21da3df37a08abc7f25->enter($__internal_f9515060fbe1b3b2cac1ce5e09af176b248d2838fec9d21da3df37a08abc7f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f9515060fbe1b3b2cac1ce5e09af176b248d2838fec9d21da3df37a08abc7f25->leave($__internal_f9515060fbe1b3b2cac1ce5e09af176b248d2838fec9d21da3df37a08abc7f25_prof);

        
        $__internal_210b38b23f3c12607a788bea037ef4df3299a23d8ba5637b402427c46ae9ea85->leave($__internal_210b38b23f3c12607a788bea037ef4df3299a23d8ba5637b402427c46ae9ea85_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_534c8982618880ea7a4d8ce396d6e9a05264341bd724b32043f5bc0ce16d0143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534c8982618880ea7a4d8ce396d6e9a05264341bd724b32043f5bc0ce16d0143->enter($__internal_534c8982618880ea7a4d8ce396d6e9a05264341bd724b32043f5bc0ce16d0143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_61b88392b4cc255dcf6383d9e7869fae277a8be8327ce6a805f9af4ff547c2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b88392b4cc255dcf6383d9e7869fae277a8be8327ce6a805f9af4ff547c2f5->enter($__internal_61b88392b4cc255dcf6383d9e7869fae277a8be8327ce6a805f9af4ff547c2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_61b88392b4cc255dcf6383d9e7869fae277a8be8327ce6a805f9af4ff547c2f5->leave($__internal_61b88392b4cc255dcf6383d9e7869fae277a8be8327ce6a805f9af4ff547c2f5_prof);

        
        $__internal_534c8982618880ea7a4d8ce396d6e9a05264341bd724b32043f5bc0ce16d0143->leave($__internal_534c8982618880ea7a4d8ce396d6e9a05264341bd724b32043f5bc0ce16d0143_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0178d0de9deb4519e71fa5aec480a4e71a31dd70b952f2b8e26f8b9456e6f092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0178d0de9deb4519e71fa5aec480a4e71a31dd70b952f2b8e26f8b9456e6f092->enter($__internal_0178d0de9deb4519e71fa5aec480a4e71a31dd70b952f2b8e26f8b9456e6f092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb35b2b4f68a6a1286269b540929740c8ca94cd411ebbedc6e4f09db8a99bd39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb35b2b4f68a6a1286269b540929740c8ca94cd411ebbedc6e4f09db8a99bd39->enter($__internal_eb35b2b4f68a6a1286269b540929740c8ca94cd411ebbedc6e4f09db8a99bd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eb35b2b4f68a6a1286269b540929740c8ca94cd411ebbedc6e4f09db8a99bd39->leave($__internal_eb35b2b4f68a6a1286269b540929740c8ca94cd411ebbedc6e4f09db8a99bd39_prof);

        
        $__internal_0178d0de9deb4519e71fa5aec480a4e71a31dd70b952f2b8e26f8b9456e6f092->leave($__internal_0178d0de9deb4519e71fa5aec480a4e71a31dd70b952f2b8e26f8b9456e6f092_prof);

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
