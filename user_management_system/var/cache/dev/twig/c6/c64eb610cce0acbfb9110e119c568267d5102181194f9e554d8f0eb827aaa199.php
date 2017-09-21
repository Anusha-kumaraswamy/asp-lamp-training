<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
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
        $__internal_56f3b7f87fbc3c7e14185806817155706572e65633c6462a54d0d8d193ac5df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f3b7f87fbc3c7e14185806817155706572e65633c6462a54d0d8d193ac5df3->enter($__internal_56f3b7f87fbc3c7e14185806817155706572e65633c6462a54d0d8d193ac5df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_154adfd0dc9916bc1876578fe51b0678e20e72f5ae0343d259074c4d00b5f576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154adfd0dc9916bc1876578fe51b0678e20e72f5ae0343d259074c4d00b5f576->enter($__internal_154adfd0dc9916bc1876578fe51b0678e20e72f5ae0343d259074c4d00b5f576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f3b7f87fbc3c7e14185806817155706572e65633c6462a54d0d8d193ac5df3->leave($__internal_56f3b7f87fbc3c7e14185806817155706572e65633c6462a54d0d8d193ac5df3_prof);

        
        $__internal_154adfd0dc9916bc1876578fe51b0678e20e72f5ae0343d259074c4d00b5f576->leave($__internal_154adfd0dc9916bc1876578fe51b0678e20e72f5ae0343d259074c4d00b5f576_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21a09ec84d3cf67b7839f9cbf83f846bf3d6be8666e8a80e772b736331f6f56a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a09ec84d3cf67b7839f9cbf83f846bf3d6be8666e8a80e772b736331f6f56a->enter($__internal_21a09ec84d3cf67b7839f9cbf83f846bf3d6be8666e8a80e772b736331f6f56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f51815fac67081f31d9a2fda9e5b56029034d179c061189e2b23d3abd82f011d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51815fac67081f31d9a2fda9e5b56029034d179c061189e2b23d3abd82f011d->enter($__internal_f51815fac67081f31d9a2fda9e5b56029034d179c061189e2b23d3abd82f011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f51815fac67081f31d9a2fda9e5b56029034d179c061189e2b23d3abd82f011d->leave($__internal_f51815fac67081f31d9a2fda9e5b56029034d179c061189e2b23d3abd82f011d_prof);

        
        $__internal_21a09ec84d3cf67b7839f9cbf83f846bf3d6be8666e8a80e772b736331f6f56a->leave($__internal_21a09ec84d3cf67b7839f9cbf83f846bf3d6be8666e8a80e772b736331f6f56a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e106c49971e46d0d34d7ad26479631d4f767b618ad735eea94362af0c147f8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e106c49971e46d0d34d7ad26479631d4f767b618ad735eea94362af0c147f8fa->enter($__internal_e106c49971e46d0d34d7ad26479631d4f767b618ad735eea94362af0c147f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d487ed6272b153643e58e6cf4e565e849967362eb9a93fbc5d02fc0552f9eb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d487ed6272b153643e58e6cf4e565e849967362eb9a93fbc5d02fc0552f9eb97->enter($__internal_d487ed6272b153643e58e6cf4e565e849967362eb9a93fbc5d02fc0552f9eb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d487ed6272b153643e58e6cf4e565e849967362eb9a93fbc5d02fc0552f9eb97->leave($__internal_d487ed6272b153643e58e6cf4e565e849967362eb9a93fbc5d02fc0552f9eb97_prof);

        
        $__internal_e106c49971e46d0d34d7ad26479631d4f767b618ad735eea94362af0c147f8fa->leave($__internal_e106c49971e46d0d34d7ad26479631d4f767b618ad735eea94362af0c147f8fa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6df07109ee2d58df13c4ae1d70e621c38be02b890d1796164de2c3400179141d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df07109ee2d58df13c4ae1d70e621c38be02b890d1796164de2c3400179141d->enter($__internal_6df07109ee2d58df13c4ae1d70e621c38be02b890d1796164de2c3400179141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa3863de1f0a7adf40787efbb419a88b295187569c0da6b1540c285abcba0435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3863de1f0a7adf40787efbb419a88b295187569c0da6b1540c285abcba0435->enter($__internal_aa3863de1f0a7adf40787efbb419a88b295187569c0da6b1540c285abcba0435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_aa3863de1f0a7adf40787efbb419a88b295187569c0da6b1540c285abcba0435->leave($__internal_aa3863de1f0a7adf40787efbb419a88b295187569c0da6b1540c285abcba0435_prof);

        
        $__internal_6df07109ee2d58df13c4ae1d70e621c38be02b890d1796164de2c3400179141d->leave($__internal_6df07109ee2d58df13c4ae1d70e621c38be02b890d1796164de2c3400179141d_prof);

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
