<?php

/* UserBundle:User:edit.html.twig */
class __TwigTemplate_31891c11783963b241d210f3849667bee98b10b53d6ff1c1a1d5b86cb5423f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:edit.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83513b5de46acff0e23b81d987fac3ccd7feba7701b4f2706341aa07859b17f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83513b5de46acff0e23b81d987fac3ccd7feba7701b4f2706341aa07859b17f7->enter($__internal_83513b5de46acff0e23b81d987fac3ccd7feba7701b4f2706341aa07859b17f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:edit.html.twig"));

        $__internal_318aacd45492b5c23073522825288f8c454fbe5f3436fd25285018551e3e0275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318aacd45492b5c23073522825288f8c454fbe5f3436fd25285018551e3e0275->enter($__internal_318aacd45492b5c23073522825288f8c454fbe5f3436fd25285018551e3e0275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83513b5de46acff0e23b81d987fac3ccd7feba7701b4f2706341aa07859b17f7->leave($__internal_83513b5de46acff0e23b81d987fac3ccd7feba7701b4f2706341aa07859b17f7_prof);

        
        $__internal_318aacd45492b5c23073522825288f8c454fbe5f3436fd25285018551e3e0275->leave($__internal_318aacd45492b5c23073522825288f8c454fbe5f3436fd25285018551e3e0275_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08cebad31c7b2665e08e95314cb0692aa50403a0bc11e4bbc4d50e3866752646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08cebad31c7b2665e08e95314cb0692aa50403a0bc11e4bbc4d50e3866752646->enter($__internal_08cebad31c7b2665e08e95314cb0692aa50403a0bc11e4bbc4d50e3866752646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e5bad057c6fea3d230f1e35607b16335790da87f25da7a6c0406cd9d347a419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5bad057c6fea3d230f1e35607b16335790da87f25da7a6c0406cd9d347a419->enter($__internal_2e5bad057c6fea3d230f1e35607b16335790da87f25da7a6c0406cd9d347a419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    
";
        
        $__internal_2e5bad057c6fea3d230f1e35607b16335790da87f25da7a6c0406cd9d347a419->leave($__internal_2e5bad057c6fea3d230f1e35607b16335790da87f25da7a6c0406cd9d347a419_prof);

        
        $__internal_08cebad31c7b2665e08e95314cb0692aa50403a0bc11e4bbc4d50e3866752646->leave($__internal_08cebad31c7b2665e08e95314cb0692aa50403a0bc11e4bbc4d50e3866752646_prof);

    }

    // line 7
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_36afaa07341e7a805855db8e9fd72675f79880a66a42f7c98e346976e1a46c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36afaa07341e7a805855db8e9fd72675f79880a66a42f7c98e346976e1a46c67->enter($__internal_36afaa07341e7a805855db8e9fd72675f79880a66a42f7c98e346976e1a46c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_fb122bc16284c2ea62db175e93d821ee4173d98ef2e06b7bdcb5f3e59d9dda7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb122bc16284c2ea62db175e93d821ee4173d98ef2e06b7bdcb5f3e59d9dda7a->enter($__internal_fb122bc16284c2ea62db175e93d821ee4173d98ef2e06b7bdcb5f3e59d9dda7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 8
        echo "    ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
";
        
        $__internal_fb122bc16284c2ea62db175e93d821ee4173d98ef2e06b7bdcb5f3e59d9dda7a->leave($__internal_fb122bc16284c2ea62db175e93d821ee4173d98ef2e06b7bdcb5f3e59d9dda7a_prof);

        
        $__internal_36afaa07341e7a805855db8e9fd72675f79880a66a42f7c98e346976e1a46c67->leave($__internal_36afaa07341e7a805855db8e9fd72675f79880a66a42f7c98e346976e1a46c67_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block head %}
    
{% endblock %}

{% block navbar %}
    {{ parent() }}
{% endblock %}", "UserBundle:User:edit.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/edit.html.twig");
    }
}
