<?php

/* UserBundle:User:new.html.twig */
class __TwigTemplate_1e0a86ff075f03596d70a1ba400c12ec89553a85893bb1417c26d1e237408bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:new.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e70060ee3f06c590e12e05692d0d72a7a31ed254ae27818f4527929405077668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70060ee3f06c590e12e05692d0d72a7a31ed254ae27818f4527929405077668->enter($__internal_e70060ee3f06c590e12e05692d0d72a7a31ed254ae27818f4527929405077668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $__internal_1e964c729e6ed23126097431936a942cd26a70608a8a08482dd55a4671913f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e964c729e6ed23126097431936a942cd26a70608a8a08482dd55a4671913f19->enter($__internal_1e964c729e6ed23126097431936a942cd26a70608a8a08482dd55a4671913f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e70060ee3f06c590e12e05692d0d72a7a31ed254ae27818f4527929405077668->leave($__internal_e70060ee3f06c590e12e05692d0d72a7a31ed254ae27818f4527929405077668_prof);

        
        $__internal_1e964c729e6ed23126097431936a942cd26a70608a8a08482dd55a4671913f19->leave($__internal_1e964c729e6ed23126097431936a942cd26a70608a8a08482dd55a4671913f19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_463e6f29f732ef530881fc687a826b9bdcd11c2a7006adfedf62e4be708f03b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463e6f29f732ef530881fc687a826b9bdcd11c2a7006adfedf62e4be708f03b1->enter($__internal_463e6f29f732ef530881fc687a826b9bdcd11c2a7006adfedf62e4be708f03b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d210f2ed06739a8f4c4ea16226ee0ae0f54dc4a6f932e745cf6c4dca5b828479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d210f2ed06739a8f4c4ea16226ee0ae0f54dc4a6f932e745cf6c4dca5b828479->enter($__internal_d210f2ed06739a8f4c4ea16226ee0ae0f54dc4a6f932e745cf6c4dca5b828479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_d210f2ed06739a8f4c4ea16226ee0ae0f54dc4a6f932e745cf6c4dca5b828479->leave($__internal_d210f2ed06739a8f4c4ea16226ee0ae0f54dc4a6f932e745cf6c4dca5b828479_prof);

        
        $__internal_463e6f29f732ef530881fc687a826b9bdcd11c2a7006adfedf62e4be708f03b1->leave($__internal_463e6f29f732ef530881fc687a826b9bdcd11c2a7006adfedf62e4be708f03b1_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36cdfef35a0d0d245dfa889d520e0a856cedcef25b6db1bb12faa2a7e107c29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36cdfef35a0d0d245dfa889d520e0a856cedcef25b6db1bb12faa2a7e107c29b->enter($__internal_36cdfef35a0d0d245dfa889d520e0a856cedcef25b6db1bb12faa2a7e107c29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a9b3733204f79b94522f5a7200c3ffbc409de07ff1a1302398fa20affd40e5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b3733204f79b94522f5a7200c3ffbc409de07ff1a1302398fa20affd40e5a5->enter($__internal_a9b3733204f79b94522f5a7200c3ffbc409de07ff1a1302398fa20affd40e5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_a9b3733204f79b94522f5a7200c3ffbc409de07ff1a1302398fa20affd40e5a5->leave($__internal_a9b3733204f79b94522f5a7200c3ffbc409de07ff1a1302398fa20affd40e5a5_prof);

        
        $__internal_36cdfef35a0d0d245dfa889d520e0a856cedcef25b6db1bb12faa2a7e107c29b->leave($__internal_36cdfef35a0d0d245dfa889d520e0a856cedcef25b6db1bb12faa2a7e107c29b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2d883ff564abba099fe80e74d638b8cf324722b6c018dc613c12af7a5673fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d883ff564abba099fe80e74d638b8cf324722b6c018dc613c12af7a5673fc0->enter($__internal_f2d883ff564abba099fe80e74d638b8cf324722b6c018dc613c12af7a5673fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49d5234a5fea7ea90d3a048d79117a214dbb9a649ef5b9458a03a1de68669279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d5234a5fea7ea90d3a048d79117a214dbb9a649ef5b9458a03a1de68669279->enter($__internal_49d5234a5fea7ea90d3a048d79117a214dbb9a649ef5b9458a03a1de68669279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_49d5234a5fea7ea90d3a048d79117a214dbb9a649ef5b9458a03a1de68669279->leave($__internal_49d5234a5fea7ea90d3a048d79117a214dbb9a649ef5b9458a03a1de68669279_prof);

        
        $__internal_f2d883ff564abba099fe80e74d638b8cf324722b6c018dc613c12af7a5673fc0->leave($__internal_f2d883ff564abba099fe80e74d638b8cf324722b6c018dc613c12af7a5673fc0_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_33d101534bd067f5eb4a7d3bf8995089f44bdd406210e4eae00eaa6fa2ca7fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d101534bd067f5eb4a7d3bf8995089f44bdd406210e4eae00eaa6fa2ca7fc4->enter($__internal_33d101534bd067f5eb4a7d3bf8995089f44bdd406210e4eae00eaa6fa2ca7fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_88ae48024d88cc48dea39a7c652f319798ec6c5fdcd565ff638593fdad2ea6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ae48024d88cc48dea39a7c652f319798ec6c5fdcd565ff638593fdad2ea6dc->enter($__internal_88ae48024d88cc48dea39a7c652f319798ec6c5fdcd565ff638593fdad2ea6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_88ae48024d88cc48dea39a7c652f319798ec6c5fdcd565ff638593fdad2ea6dc->leave($__internal_88ae48024d88cc48dea39a7c652f319798ec6c5fdcd565ff638593fdad2ea6dc_prof);

        
        $__internal_33d101534bd067f5eb4a7d3bf8995089f44bdd406210e4eae00eaa6fa2ca7fc4->leave($__internal_33d101534bd067f5eb4a7d3bf8995089f44bdd406210e4eae00eaa6fa2ca7fc4_prof);

    }

    // line 13
    public function block_form($context, array $blocks = array())
    {
        $__internal_c788ad011553587ce540fa8e57bce8f77a401577b461ade37bc8e8b897e2fc03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c788ad011553587ce540fa8e57bce8f77a401577b461ade37bc8e8b897e2fc03->enter($__internal_c788ad011553587ce540fa8e57bce8f77a401577b461ade37bc8e8b897e2fc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_d2be3fc0a4e5279d1d77cdb6df7a97a84735a3aac97053a337198d4b06c5a484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2be3fc0a4e5279d1d77cdb6df7a97a84735a3aac97053a337198d4b06c5a484->enter($__internal_d2be3fc0a4e5279d1d77cdb6df7a97a84735a3aac97053a337198d4b06c5a484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 14
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_d2be3fc0a4e5279d1d77cdb6df7a97a84735a3aac97053a337198d4b06c5a484->leave($__internal_d2be3fc0a4e5279d1d77cdb6df7a97a84735a3aac97053a337198d4b06c5a484_prof);

        
        $__internal_c788ad011553587ce540fa8e57bce8f77a401577b461ade37bc8e8b897e2fc03->leave($__internal_c788ad011553587ce540fa8e57bce8f77a401577b461ade37bc8e8b897e2fc03_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 16,  144 => 15,  139 => 14,  130 => 13,  117 => 11,  108 => 10,  97 => 13,  94 => 10,  85 => 9,  72 => 5,  53 => 4,  44 => 3,  11 => 1,);
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
    {% block stylesheets %}
    {{ parent() }}
    {% endblock %}
{% endblock %}

{% block body %}
    {% block navbar %}
        {{ parent() }}
    {% endblock %}
    {% block form %}
        {{ form_start(form, { 'attr' : { 'novalidate' : 'novalidate' }}) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    {% endblock %}
{% endblock %}", "UserBundle:User:new.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/new.html.twig");
    }
}
