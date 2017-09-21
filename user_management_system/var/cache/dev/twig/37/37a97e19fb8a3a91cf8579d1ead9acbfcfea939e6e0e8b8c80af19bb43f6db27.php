<?php

/* UserBundle:User:userProfile.html.twig */
class __TwigTemplate_b565221dea81da4c374f07d9f1675ae9f0cb571fba6f55f04085d78ad486fedf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:userProfile.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94a29e78b7445b2d20529f77606858564d3e408db6ede67e2c81771136b20f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a29e78b7445b2d20529f77606858564d3e408db6ede67e2c81771136b20f56->enter($__internal_94a29e78b7445b2d20529f77606858564d3e408db6ede67e2c81771136b20f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $__internal_041b8e53bff9e1711f17589511791c15aab74bf74024d91e27dba36989db48c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041b8e53bff9e1711f17589511791c15aab74bf74024d91e27dba36989db48c6->enter($__internal_041b8e53bff9e1711f17589511791c15aab74bf74024d91e27dba36989db48c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a29e78b7445b2d20529f77606858564d3e408db6ede67e2c81771136b20f56->leave($__internal_94a29e78b7445b2d20529f77606858564d3e408db6ede67e2c81771136b20f56_prof);

        
        $__internal_041b8e53bff9e1711f17589511791c15aab74bf74024d91e27dba36989db48c6->leave($__internal_041b8e53bff9e1711f17589511791c15aab74bf74024d91e27dba36989db48c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6788807c4cf38f862253cbe82bdeabe0d17ed8dbfe491a83380181009f4de7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6788807c4cf38f862253cbe82bdeabe0d17ed8dbfe491a83380181009f4de7b2->enter($__internal_6788807c4cf38f862253cbe82bdeabe0d17ed8dbfe491a83380181009f4de7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e42510f5a39869a4f9129d5be0965a3cc8b5663d050fc9165832c367ec1a588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e42510f5a39869a4f9129d5be0965a3cc8b5663d050fc9165832c367ec1a588->enter($__internal_6e42510f5a39869a4f9129d5be0965a3cc8b5663d050fc9165832c367ec1a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_6e42510f5a39869a4f9129d5be0965a3cc8b5663d050fc9165832c367ec1a588->leave($__internal_6e42510f5a39869a4f9129d5be0965a3cc8b5663d050fc9165832c367ec1a588_prof);

        
        $__internal_6788807c4cf38f862253cbe82bdeabe0d17ed8dbfe491a83380181009f4de7b2->leave($__internal_6788807c4cf38f862253cbe82bdeabe0d17ed8dbfe491a83380181009f4de7b2_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e84f4aeda4466d7a00ac4f45e210a01de01e140f3785ef86e977eb14665f88ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84f4aeda4466d7a00ac4f45e210a01de01e140f3785ef86e977eb14665f88ad->enter($__internal_e84f4aeda4466d7a00ac4f45e210a01de01e140f3785ef86e977eb14665f88ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73619516796d2277bed6df9f0c7cf6542220ad354e7dcdb1a47785ab95c83811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73619516796d2277bed6df9f0c7cf6542220ad354e7dcdb1a47785ab95c83811->enter($__internal_73619516796d2277bed6df9f0c7cf6542220ad354e7dcdb1a47785ab95c83811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_73619516796d2277bed6df9f0c7cf6542220ad354e7dcdb1a47785ab95c83811->leave($__internal_73619516796d2277bed6df9f0c7cf6542220ad354e7dcdb1a47785ab95c83811_prof);

        
        $__internal_e84f4aeda4466d7a00ac4f45e210a01de01e140f3785ef86e977eb14665f88ad->leave($__internal_e84f4aeda4466d7a00ac4f45e210a01de01e140f3785ef86e977eb14665f88ad_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e50db8eb8efac607fb702caeadc96ffbde6a38830c38d4c864785053507acf04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50db8eb8efac607fb702caeadc96ffbde6a38830c38d4c864785053507acf04->enter($__internal_e50db8eb8efac607fb702caeadc96ffbde6a38830c38d4c864785053507acf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9ac9e5ba59cc57dfbb5d1df852589348051581dc4e8b183bb6f07dbfb8fcc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ac9e5ba59cc57dfbb5d1df852589348051581dc4e8b183bb6f07dbfb8fcc35->enter($__internal_f9ac9e5ba59cc57dfbb5d1df852589348051581dc4e8b183bb6f07dbfb8fcc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_f9ac9e5ba59cc57dfbb5d1df852589348051581dc4e8b183bb6f07dbfb8fcc35->leave($__internal_f9ac9e5ba59cc57dfbb5d1df852589348051581dc4e8b183bb6f07dbfb8fcc35_prof);

        
        $__internal_e50db8eb8efac607fb702caeadc96ffbde6a38830c38d4c864785053507acf04->leave($__internal_e50db8eb8efac607fb702caeadc96ffbde6a38830c38d4c864785053507acf04_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_c721859dd51112b86bb5e2304a9679542ba283a63c0513aa4ab52015bb7cea67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c721859dd51112b86bb5e2304a9679542ba283a63c0513aa4ab52015bb7cea67->enter($__internal_c721859dd51112b86bb5e2304a9679542ba283a63c0513aa4ab52015bb7cea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_a09defaeaffad1f664f3152f607dd8a7c8b96166283b4ba9277139da58aec0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09defaeaffad1f664f3152f607dd8a7c8b96166283b4ba9277139da58aec0e4->enter($__internal_a09defaeaffad1f664f3152f607dd8a7c8b96166283b4ba9277139da58aec0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_a09defaeaffad1f664f3152f607dd8a7c8b96166283b4ba9277139da58aec0e4->leave($__internal_a09defaeaffad1f664f3152f607dd8a7c8b96166283b4ba9277139da58aec0e4_prof);

        
        $__internal_c721859dd51112b86bb5e2304a9679542ba283a63c0513aa4ab52015bb7cea67->leave($__internal_c721859dd51112b86bb5e2304a9679542ba283a63c0513aa4ab52015bb7cea67_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_f61880cee9d83591182fc3481c796437aabfa224d7f23f3b694a41b9b97c5158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61880cee9d83591182fc3481c796437aabfa224d7f23f3b694a41b9b97c5158->enter($__internal_f61880cee9d83591182fc3481c796437aabfa224d7f23f3b694a41b9b97c5158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_3f4930a41bb1a6a85c43d34151e9f64776d6b9d0a52131f649db481f2786a603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4930a41bb1a6a85c43d34151e9f64776d6b9d0a52131f649db481f2786a603->enter($__internal_3f4930a41bb1a6a85c43d34151e9f64776d6b9d0a52131f649db481f2786a603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    ";
        
        $__internal_3f4930a41bb1a6a85c43d34151e9f64776d6b9d0a52131f649db481f2786a603->leave($__internal_3f4930a41bb1a6a85c43d34151e9f64776d6b9d0a52131f649db481f2786a603_prof);

        
        $__internal_f61880cee9d83591182fc3481c796437aabfa224d7f23f3b694a41b9b97c5158->leave($__internal_f61880cee9d83591182fc3481c796437aabfa224d7f23f3b694a41b9b97c5158_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:userProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 19,  147 => 16,  144 => 15,  139 => 14,  130 => 13,  117 => 11,  108 => 10,  97 => 13,  94 => 10,  85 => 9,  72 => 5,  53 => 4,  44 => 3,  11 => 1,);
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
    {% block table %}
        {% for entity in entities %}
            <tr>
                <td>{{entity}}</td>
            </tr>
        {% endfor %}
    {% endblock %}
{% endblock %}", "UserBundle:User:userProfile.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/userProfile.html.twig");
    }
}
