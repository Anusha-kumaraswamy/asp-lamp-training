<?php

/* UserBundle:User:admin.html.twig */
class __TwigTemplate_961b04d6a8a501187c3788da77a022a6899f63d35d09066a9451de971008f281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:admin.html.twig", 1);
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
        $__internal_c15a00e2311647f69baff2cd6cd9c697d8c1bc20a338e34dcd00a40fc512661c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15a00e2311647f69baff2cd6cd9c697d8c1bc20a338e34dcd00a40fc512661c->enter($__internal_c15a00e2311647f69baff2cd6cd9c697d8c1bc20a338e34dcd00a40fc512661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:admin.html.twig"));

        $__internal_754fc6f7715189f5b337ad9d4b5ab0a2e2b197ed7ef6099e685811461297d3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754fc6f7715189f5b337ad9d4b5ab0a2e2b197ed7ef6099e685811461297d3c4->enter($__internal_754fc6f7715189f5b337ad9d4b5ab0a2e2b197ed7ef6099e685811461297d3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15a00e2311647f69baff2cd6cd9c697d8c1bc20a338e34dcd00a40fc512661c->leave($__internal_c15a00e2311647f69baff2cd6cd9c697d8c1bc20a338e34dcd00a40fc512661c_prof);

        
        $__internal_754fc6f7715189f5b337ad9d4b5ab0a2e2b197ed7ef6099e685811461297d3c4->leave($__internal_754fc6f7715189f5b337ad9d4b5ab0a2e2b197ed7ef6099e685811461297d3c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44d5d8ec79e651323852352ffcc806fb3dd4d3b00887ddad073a66921656081e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d5d8ec79e651323852352ffcc806fb3dd4d3b00887ddad073a66921656081e->enter($__internal_44d5d8ec79e651323852352ffcc806fb3dd4d3b00887ddad073a66921656081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9fa72ca59d2391f2353fbb191c450baa3cd06d2191f5974c90e33d71f4e65ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa72ca59d2391f2353fbb191c450baa3cd06d2191f5974c90e33d71f4e65ebd->enter($__internal_9fa72ca59d2391f2353fbb191c450baa3cd06d2191f5974c90e33d71f4e65ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_9fa72ca59d2391f2353fbb191c450baa3cd06d2191f5974c90e33d71f4e65ebd->leave($__internal_9fa72ca59d2391f2353fbb191c450baa3cd06d2191f5974c90e33d71f4e65ebd_prof);

        
        $__internal_44d5d8ec79e651323852352ffcc806fb3dd4d3b00887ddad073a66921656081e->leave($__internal_44d5d8ec79e651323852352ffcc806fb3dd4d3b00887ddad073a66921656081e_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5148721b2d90453087700628f644e5d08e2f82827df72703926af004defeee76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5148721b2d90453087700628f644e5d08e2f82827df72703926af004defeee76->enter($__internal_5148721b2d90453087700628f644e5d08e2f82827df72703926af004defeee76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e81104db0d3ef573125cca89972a24257985b7e055c44ecc3b156fd93217e525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81104db0d3ef573125cca89972a24257985b7e055c44ecc3b156fd93217e525->enter($__internal_e81104db0d3ef573125cca89972a24257985b7e055c44ecc3b156fd93217e525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_e81104db0d3ef573125cca89972a24257985b7e055c44ecc3b156fd93217e525->leave($__internal_e81104db0d3ef573125cca89972a24257985b7e055c44ecc3b156fd93217e525_prof);

        
        $__internal_5148721b2d90453087700628f644e5d08e2f82827df72703926af004defeee76->leave($__internal_5148721b2d90453087700628f644e5d08e2f82827df72703926af004defeee76_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cb1be50b473b5807a15e763d2c13277424a45b628528831622159428b5e9866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb1be50b473b5807a15e763d2c13277424a45b628528831622159428b5e9866->enter($__internal_9cb1be50b473b5807a15e763d2c13277424a45b628528831622159428b5e9866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58943d26815ab176d269e3eb3061535cff99058c5333134e4ebf8597dc4a63a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58943d26815ab176d269e3eb3061535cff99058c5333134e4ebf8597dc4a63a8->enter($__internal_58943d26815ab176d269e3eb3061535cff99058c5333134e4ebf8597dc4a63a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_58943d26815ab176d269e3eb3061535cff99058c5333134e4ebf8597dc4a63a8->leave($__internal_58943d26815ab176d269e3eb3061535cff99058c5333134e4ebf8597dc4a63a8_prof);

        
        $__internal_9cb1be50b473b5807a15e763d2c13277424a45b628528831622159428b5e9866->leave($__internal_9cb1be50b473b5807a15e763d2c13277424a45b628528831622159428b5e9866_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_70b2eab38c81e1ebe195f208806434f1f6bf036f0877c14c5abf2662f9cce3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b2eab38c81e1ebe195f208806434f1f6bf036f0877c14c5abf2662f9cce3e5->enter($__internal_70b2eab38c81e1ebe195f208806434f1f6bf036f0877c14c5abf2662f9cce3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_d8a476af816824c5d30b09c21d6f51092869d819410d5f9c10f4231d54bc0d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a476af816824c5d30b09c21d6f51092869d819410d5f9c10f4231d54bc0d18->enter($__internal_d8a476af816824c5d30b09c21d6f51092869d819410d5f9c10f4231d54bc0d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_d8a476af816824c5d30b09c21d6f51092869d819410d5f9c10f4231d54bc0d18->leave($__internal_d8a476af816824c5d30b09c21d6f51092869d819410d5f9c10f4231d54bc0d18_prof);

        
        $__internal_70b2eab38c81e1ebe195f208806434f1f6bf036f0877c14c5abf2662f9cce3e5->leave($__internal_70b2eab38c81e1ebe195f208806434f1f6bf036f0877c14c5abf2662f9cce3e5_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_707a7e321ff0d85403270c666223c13adfdb4d4ddcb2f6c3fb468e447414a356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707a7e321ff0d85403270c666223c13adfdb4d4ddcb2f6c3fb468e447414a356->enter($__internal_707a7e321ff0d85403270c666223c13adfdb4d4ddcb2f6c3fb468e447414a356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_5fd2cb87dbc1a19ff3f9432b8e0f4055676222d3c9fcedf40944273b0f958496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd2cb87dbc1a19ff3f9432b8e0f4055676222d3c9fcedf40944273b0f958496->enter($__internal_5fd2cb87dbc1a19ff3f9432b8e0f4055676222d3c9fcedf40944273b0f958496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 17
        echo "        <table border=\"ridge\">
            <tr>
                <th colspan=\"2\">";
        // line 19
        echo "Gender";
        echo "</th>
            </tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genders"]) ? $context["genders"] : $this->getContext($context, "genders")));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["gender"], "name", array()), "html", null, true);
            echo "</td>
                <td><input type=\"button\" value=\"X\" onclick=\"location.href='/admin/remove/gender/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["gender"], "id", array()), "html", null, true);
            echo "';\"></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            <tr>
                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["genderForm"]) ? $context["genderForm"] : $this->getContext($context, "genderForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                    <th>";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["genderForm"]) ? $context["genderForm"] : $this->getContext($context, "genderForm")), "name", array()), 'errors');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["genderForm"]) ? $context["genderForm"] : $this->getContext($context, "genderForm")), "name", array()), 'widget');
        echo "</th>
                    <th>";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["genderForm"]) ? $context["genderForm"] : $this->getContext($context, "genderForm")), "add", array()), 'row');
        echo "</th>
                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["genderForm"]) ? $context["genderForm"] : $this->getContext($context, "genderForm")), 'form_end');
        echo "
            </tr>
        </table>
        <table border=\"ridge\">
            <tr>
                <th colspan=\"2\">";
        // line 36
        echo "Blood Group";
        echo "</th>
            </tr>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bloodGroups"]) ? $context["bloodGroups"] : $this->getContext($context, "bloodGroups")));
        foreach ($context['_seq'] as $context["_key"] => $context["bloodGroup"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["bloodGroup"], "name", array()), "html", null, true);
            echo "</td>
                <td><input type=\"button\" value=\"X\" onclick=\"location.href='/admin/remove/bloodGroup/";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["bloodGroup"], "id", array()), "html", null, true);
            echo "';\"></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bloodGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            <tr>
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["bloodGroupForm"]) ? $context["bloodGroupForm"] : $this->getContext($context, "bloodGroupForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                    <th>";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["bloodGroupForm"]) ? $context["bloodGroupForm"] : $this->getContext($context, "bloodGroupForm")), "name", array()), 'errors');
        echo " ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["bloodGroupForm"]) ? $context["bloodGroupForm"] : $this->getContext($context, "bloodGroupForm")), "name", array()), 'widget');
        echo " </th>
                    <th>";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["bloodGroupForm"]) ? $context["bloodGroupForm"] : $this->getContext($context, "bloodGroupForm")), "add", array()), 'row');
        echo "</th>
                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["bloodGroupForm"]) ? $context["bloodGroupForm"] : $this->getContext($context, "bloodGroupForm")), 'form_end');
        echo "
            </tr>
        </table>
        <table border=\"ridge\">
            <tr>
                <th colspan=\"2\">";
        // line 53
        echo "Graduation Levels";
        echo "</th>
            </tr>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["graduationLevels"]) ? $context["graduationLevels"] : $this->getContext($context, "graduationLevels")));
        foreach ($context['_seq'] as $context["_key"] => $context["graduation"]) {
            // line 56
            echo "            <tr>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["graduation"], "name", array()), "html", null, true);
            echo "</td>
                <td><input type=\"button\" value=\"X\" onclick=\"location.href='/admin/remove/graduation/";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["graduation"], "id", array()), "html", null, true);
            echo "';\"></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['graduation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            <tr>
                ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["graduationForm"]) ? $context["graduationForm"] : $this->getContext($context, "graduationForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                    <th> ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["graduationForm"]) ? $context["graduationForm"] : $this->getContext($context, "graduationForm")), "name", array()), 'errors');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["graduationForm"]) ? $context["graduationForm"] : $this->getContext($context, "graduationForm")), "name", array()), 'widget');
        echo " </th>
                    <th>";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["graduationForm"]) ? $context["graduationForm"] : $this->getContext($context, "graduationForm")), "add", array()), 'row');
        echo "</th>
                ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["graduationForm"]) ? $context["graduationForm"] : $this->getContext($context, "graduationForm")), 'form_end');
        echo "
            </tr>
        </table>
        <table border=\"ridge\">
            <tr>
                <th colspan=\"2\">";
        // line 70
        echo "Area Of Interest";
        echo "</th>
            </tr>
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interests"]) ? $context["interests"] : $this->getContext($context, "interests")));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 73
            echo "            <tr>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["interest"], "name", array()), "html", null, true);
            echo "</td>
                <td><input type=\"button\" value=\"X\" onclick=\"location.href='/admin/remove/areaOfInterest/";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["interest"], "id", array()), "html", null, true);
            echo "';\"></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            <tr>
                ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["interestForm"]) ? $context["interestForm"] : $this->getContext($context, "interestForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                    <th> ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["interestForm"]) ? $context["interestForm"] : $this->getContext($context, "interestForm")), "name", array()), 'errors');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["interestForm"]) ? $context["interestForm"] : $this->getContext($context, "interestForm")), "name", array()), 'widget');
        echo " </th>
                    <th>";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["interestForm"]) ? $context["interestForm"] : $this->getContext($context, "interestForm")), "add", array()), 'row');
        echo "</th>
                ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["interestForm"]) ? $context["interestForm"] : $this->getContext($context, "interestForm")), 'form_end');
        echo "
            </tr>
        </table>
    ";
        
        $__internal_5fd2cb87dbc1a19ff3f9432b8e0f4055676222d3c9fcedf40944273b0f958496->leave($__internal_5fd2cb87dbc1a19ff3f9432b8e0f4055676222d3c9fcedf40944273b0f958496_prof);

        
        $__internal_707a7e321ff0d85403270c666223c13adfdb4d4ddcb2f6c3fb468e447414a356->leave($__internal_707a7e321ff0d85403270c666223c13adfdb4d4ddcb2f6c3fb468e447414a356_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 82,  329 => 81,  324 => 80,  320 => 79,  317 => 78,  308 => 75,  304 => 74,  301 => 73,  297 => 72,  292 => 70,  284 => 65,  280 => 64,  275 => 63,  271 => 62,  268 => 61,  259 => 58,  255 => 57,  252 => 56,  248 => 55,  243 => 53,  235 => 48,  231 => 47,  225 => 46,  221 => 45,  218 => 44,  209 => 41,  205 => 40,  202 => 39,  198 => 38,  193 => 36,  185 => 31,  181 => 30,  176 => 29,  172 => 28,  169 => 27,  160 => 24,  156 => 23,  153 => 22,  149 => 21,  144 => 19,  140 => 17,  131 => 16,  118 => 14,  109 => 13,  98 => 16,  95 => 13,  86 => 12,  72 => 5,  53 => 4,  44 => 3,  11 => 1,);
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
    
    body {
        color : red;
    }
    {% endblock %}
{% endblock %}

{% block body %}
    {% block navbar %}
        {{ parent() }}
    {% endblock %}
    {% block form %}
        <table border=\"ridge\">
            <tr>
                <th colspan=\"2\">{{ \"Gender\" }}</th>
            </tr>
        {% for gender in genders %}
            <tr>
                <td>{{ gender.name }}</td>
                <td><input type=\"button\" value=\"X\" onclick=\"location.href='/admin/remove/gender/{{ gender.id }}';\"></td>
            </tr>
        {% endfor %}
            <tr>
                {{ form_start(genderForm, { 'attr' : { 'novalidate' : 'novalidate' } } ) }}
                    <th>{{ form_errors(genderForm.name) }}{{ form_widget(genderForm.name) }}</th>
                    <th>{{ form_row(genderForm.add) }}</th>
                {{ form_end(genderForm) }}
            </tr>
        </table>
        <table border=\"ridge\">
            <tr>
                <th colspan=\"2\">{{ \"Blood Group\" }}</th>
            </tr>
        {% for bloodGroup in bloodGroups %}
            <tr>
                <td>{{ bloodGroup.name }}</td>
                <td><input type=\"button\" value=\"X\" onclick=\"location.href='/admin/remove/bloodGroup/{{ bloodGroup.id }}';\"></td>
            </tr>
        {% endfor %}
            <tr>
                {{ form_start(bloodGroupForm, { 'attr' : { 'novalidate' : 'novalidate' } } ) }}
                    <th>{{ form_errors(bloodGroupForm.name) }} {{ form_widget(bloodGroupForm.name) }} </th>
                    <th>{{ form_row(bloodGroupForm.add) }}</th>
                {{ form_end(bloodGroupForm) }}
            </tr>
        </table>
        <table border=\"ridge\">
            <tr>
                <th colspan=\"2\">{{ \"Graduation Levels\" }}</th>
            </tr>
        {% for graduation in graduationLevels %}
            <tr>
                <td>{{ graduation.name }}</td>
                <td><input type=\"button\" value=\"X\" onclick=\"location.href='/admin/remove/graduation/{{ graduation.id }}';\"></td>
            </tr>
        {% endfor %}
            <tr>
                {{ form_start(graduationForm, { 'attr' : { 'novalidate' : 'novalidate' } } )}}
                    <th> {{ form_errors(graduationForm.name) }}{{ form_widget(graduationForm.name) }} </th>
                    <th>{{ form_row(graduationForm.add) }}</th>
                {{ form_end(graduationForm) }}
            </tr>
        </table>
        <table border=\"ridge\">
            <tr>
                <th colspan=\"2\">{{ \"Area Of Interest\" }}</th>
            </tr>
        {% for interest in interests %}
            <tr>
                <td>{{ interest.name }}</td>
                <td><input type=\"button\" value=\"X\" onclick=\"location.href='/admin/remove/areaOfInterest/{{ interest.id }}';\"></td>
            </tr>
        {% endfor %}
            <tr>
                {{ form_start(interestForm, { 'attr' : { 'novalidate' : 'novalidate' } } ) }}
                    <th> {{ form_errors(interestForm.name) }}{{ form_widget(interestForm.name) }} </th>
                    <th>{{ form_row(interestForm.add) }}</th>
                {{ form_end(interestForm) }}
            </tr>
        </table>
    {% endblock %}
{% endblock %}", "UserBundle:User:admin.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/admin.html.twig");
    }
}
