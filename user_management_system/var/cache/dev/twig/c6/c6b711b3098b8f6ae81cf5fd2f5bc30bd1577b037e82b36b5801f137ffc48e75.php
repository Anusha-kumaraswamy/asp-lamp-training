<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bb4249dc71239c0410b8b8cee29b4ca713f1cd099a70b93709c74f909653baf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2d23560fc851f293611c6c707d1ba50f852302fd82b45688255ca1e61e9cb16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d23560fc851f293611c6c707d1ba50f852302fd82b45688255ca1e61e9cb16->enter($__internal_e2d23560fc851f293611c6c707d1ba50f852302fd82b45688255ca1e61e9cb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b69de03b962c7ce86978829d82660a2bceb3458a2212dd1719f906962c96c3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69de03b962c7ce86978829d82660a2bceb3458a2212dd1719f906962c96c3bf->enter($__internal_b69de03b962c7ce86978829d82660a2bceb3458a2212dd1719f906962c96c3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e2d23560fc851f293611c6c707d1ba50f852302fd82b45688255ca1e61e9cb16->leave($__internal_e2d23560fc851f293611c6c707d1ba50f852302fd82b45688255ca1e61e9cb16_prof);

        
        $__internal_b69de03b962c7ce86978829d82660a2bceb3458a2212dd1719f906962c96c3bf->leave($__internal_b69de03b962c7ce86978829d82660a2bceb3458a2212dd1719f906962c96c3bf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d177146032e702ede39d394427ce9e7cb2b913c46835381e55973c630b05062a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d177146032e702ede39d394427ce9e7cb2b913c46835381e55973c630b05062a->enter($__internal_d177146032e702ede39d394427ce9e7cb2b913c46835381e55973c630b05062a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7eab38665c6091fe81e25f50becd0d9809e129b92602cf317cb0da6414bc26f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eab38665c6091fe81e25f50becd0d9809e129b92602cf317cb0da6414bc26f5->enter($__internal_7eab38665c6091fe81e25f50becd0d9809e129b92602cf317cb0da6414bc26f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7eab38665c6091fe81e25f50becd0d9809e129b92602cf317cb0da6414bc26f5->leave($__internal_7eab38665c6091fe81e25f50becd0d9809e129b92602cf317cb0da6414bc26f5_prof);

        
        $__internal_d177146032e702ede39d394427ce9e7cb2b913c46835381e55973c630b05062a->leave($__internal_d177146032e702ede39d394427ce9e7cb2b913c46835381e55973c630b05062a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
