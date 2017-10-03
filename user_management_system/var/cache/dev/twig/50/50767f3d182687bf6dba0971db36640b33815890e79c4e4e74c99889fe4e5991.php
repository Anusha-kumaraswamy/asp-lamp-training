<?php

/* UserBundle:User:form.html.twig */
class __TwigTemplate_08f0ef584083aaf54e3000ce6db9d48bd74340a81a82b31bbb2cf4543de158f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:form.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'form' => array($this, 'block_form'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8599d289c4c8066751d74bc0174a00463c0d52144867214b6a7241097d4a8949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8599d289c4c8066751d74bc0174a00463c0d52144867214b6a7241097d4a8949->enter($__internal_8599d289c4c8066751d74bc0174a00463c0d52144867214b6a7241097d4a8949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        $__internal_43cfbf9fb2ff4eee997bba0d18e8705dd6e8ade51cf3dc9cd6651f9f2d737685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cfbf9fb2ff4eee997bba0d18e8705dd6e8ade51cf3dc9cd6651f9f2d737685->enter($__internal_43cfbf9fb2ff4eee997bba0d18e8705dd6e8ade51cf3dc9cd6651f9f2d737685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8599d289c4c8066751d74bc0174a00463c0d52144867214b6a7241097d4a8949->leave($__internal_8599d289c4c8066751d74bc0174a00463c0d52144867214b6a7241097d4a8949_prof);

        
        $__internal_43cfbf9fb2ff4eee997bba0d18e8705dd6e8ade51cf3dc9cd6651f9f2d737685->leave($__internal_43cfbf9fb2ff4eee997bba0d18e8705dd6e8ade51cf3dc9cd6651f9f2d737685_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ad4609f9ef6743f074786ae0e9684b0566852d0203dcc24e0cdb418680972c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad4609f9ef6743f074786ae0e9684b0566852d0203dcc24e0cdb418680972c5->enter($__internal_0ad4609f9ef6743f074786ae0e9684b0566852d0203dcc24e0cdb418680972c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa5fc821097965049a471905ca9535b5167958eb18588662e519967cc1b33068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5fc821097965049a471905ca9535b5167958eb18588662e519967cc1b33068->enter($__internal_fa5fc821097965049a471905ca9535b5167958eb18588662e519967cc1b33068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_fa5fc821097965049a471905ca9535b5167958eb18588662e519967cc1b33068->leave($__internal_fa5fc821097965049a471905ca9535b5167958eb18588662e519967cc1b33068_prof);

        
        $__internal_0ad4609f9ef6743f074786ae0e9684b0566852d0203dcc24e0cdb418680972c5->leave($__internal_0ad4609f9ef6743f074786ae0e9684b0566852d0203dcc24e0cdb418680972c5_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db3c2cd8380de2e6098acf929c8b360616d4a001102f31c03b6ae2d5f64ce434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3c2cd8380de2e6098acf929c8b360616d4a001102f31c03b6ae2d5f64ce434->enter($__internal_db3c2cd8380de2e6098acf929c8b360616d4a001102f31c03b6ae2d5f64ce434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3ad908b35b49cb5573acda5997756df139755398ac84a58268c17d0c9251d3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad908b35b49cb5573acda5997756df139755398ac84a58268c17d0c9251d3b4->enter($__internal_3ad908b35b49cb5573acda5997756df139755398ac84a58268c17d0c9251d3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_3ad908b35b49cb5573acda5997756df139755398ac84a58268c17d0c9251d3b4->leave($__internal_3ad908b35b49cb5573acda5997756df139755398ac84a58268c17d0c9251d3b4_prof);

        
        $__internal_db3c2cd8380de2e6098acf929c8b360616d4a001102f31c03b6ae2d5f64ce434->leave($__internal_db3c2cd8380de2e6098acf929c8b360616d4a001102f31c03b6ae2d5f64ce434_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e901db4ea0671c4a014e60ddea5c74faee2f10f8b3344fde60db88852adf7e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e901db4ea0671c4a014e60ddea5c74faee2f10f8b3344fde60db88852adf7e78->enter($__internal_e901db4ea0671c4a014e60ddea5c74faee2f10f8b3344fde60db88852adf7e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae4f00bd69b44f3b80ab785625c59e0ef3260e16589a376c856d531aefde16e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4f00bd69b44f3b80ab785625c59e0ef3260e16589a376c856d531aefde16e8->enter($__internal_ae4f00bd69b44f3b80ab785625c59e0ef3260e16589a376c856d531aefde16e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 183
        echo "        
    ";
        // line 184
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_ae4f00bd69b44f3b80ab785625c59e0ef3260e16589a376c856d531aefde16e8->leave($__internal_ae4f00bd69b44f3b80ab785625c59e0ef3260e16589a376c856d531aefde16e8_prof);

        
        $__internal_e901db4ea0671c4a014e60ddea5c74faee2f10f8b3344fde60db88852adf7e78->leave($__internal_e901db4ea0671c4a014e60ddea5c74faee2f10f8b3344fde60db88852adf7e78_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_5118815bbb739fea1febf580da951c0533331d07810f90d35454b30e5bb7937f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5118815bbb739fea1febf580da951c0533331d07810f90d35454b30e5bb7937f->enter($__internal_5118815bbb739fea1febf580da951c0533331d07810f90d35454b30e5bb7937f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_b7dbdd5bf3b1c007c4b1f65b90f44629b63250c7c5f79d1a384b49ec21607c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dbdd5bf3b1c007c4b1f65b90f44629b63250c7c5f79d1a384b49ec21607c9d->enter($__internal_b7dbdd5bf3b1c007c4b1f65b90f44629b63250c7c5f79d1a384b49ec21607c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_b7dbdd5bf3b1c007c4b1f65b90f44629b63250c7c5f79d1a384b49ec21607c9d->leave($__internal_b7dbdd5bf3b1c007c4b1f65b90f44629b63250c7c5f79d1a384b49ec21607c9d_prof);

        
        $__internal_5118815bbb739fea1febf580da951c0533331d07810f90d35454b30e5bb7937f->leave($__internal_5118815bbb739fea1febf580da951c0533331d07810f90d35454b30e5bb7937f_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_111d96120fc1ff6a6798ca431d9ce4cc22b9e559e44fcecd02313e74bf9a6acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111d96120fc1ff6a6798ca431d9ce4cc22b9e559e44fcecd02313e74bf9a6acd->enter($__internal_111d96120fc1ff6a6798ca431d9ce4cc22b9e559e44fcecd02313e74bf9a6acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_e5f19f2293ace345d13f35e3b225aad92d019c203876ebe2d131cd809c718f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f19f2293ace345d13f35e3b225aad92d019c203876ebe2d131cd809c718f1e->enter($__internal_e5f19f2293ace345d13f35e3b225aad92d019c203876ebe2d131cd809c718f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 17
        echo "        <table>
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            <tr>
                <td>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loginName", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loginName", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loginName", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'errors');
        echo "
                </td>
            </tr>
            </table>
            
            <div>
                <table>
            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
            // line 90
            echo "                <tr>
                <td>
                ";
            // line 92
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'label');
            echo "
                </td>
                <td>
                ";
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'widget');
            echo "
                </td>
                <td>
                ";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'errors');
            echo "
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                </table>
            </div>
            
            <input type='button' id='addEmailId' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            
            <div>
                <table>
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobileNumbers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 111
            echo "                <tr>
                <td>
                ";
            // line 113
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'label');
            echo "
                </td>
                <td>
                ";
            // line 116
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'widget');
            echo "
                </td>
                <td>
                ";
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'errors');
            echo "
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                </table>
            </div>
            <input type='button' id='addMobileNumber' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobileNumbers", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">            
            
            <div>
                <table border=\"ridge\">
            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "education", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["graduationLevel"]) {
            // line 131
            echo "                <tr>
                <td>
                ";
            // line 133
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "graduation", array()), 'label');
            echo "
                </td>
                <td>
                ";
            // line 136
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "graduation", array()), 'widget');
            echo "
                </td>
                <td>
                ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "graduation", array()), 'errors');
            echo "
                </td>
                </tr>
                <tr>
                <td>
                ";
            // line 144
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "instituteName", array()), 'label');
            echo "
                </td>
                <td>
                ";
            // line 147
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "instituteName", array()), 'widget');
            echo "
                </td>
                <td>
                ";
            // line 150
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "instituteName", array()), 'errors');
            echo "
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['graduationLevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "            </table>
            </div>
            <input type='button' id='addGraduation' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "education", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">  
            
            <div>
                <table border=\"ridge\" >
            ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["areaOfInterest"]) {
            // line 162
            echo "                <tr>
                <td>
                ";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'label');
            echo "
                </td>
                <td>
                ";
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'widget');
            echo "
                </td>
                <td>
                ";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'errors');
            echo "
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['areaOfInterest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                </table>
            </div>
            <input type='button' id='addAreaOfInterest' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interests", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            
            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "register", array()), 'row');
        echo "
        ";
        // line 180
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        
    ";
        
        $__internal_e5f19f2293ace345d13f35e3b225aad92d019c203876ebe2d131cd809c718f1e->leave($__internal_e5f19f2293ace345d13f35e3b225aad92d019c203876ebe2d131cd809c718f1e_prof);

        
        $__internal_111d96120fc1ff6a6798ca431d9ce4cc22b9e559e44fcecd02313e74bf9a6acd->leave($__internal_111d96120fc1ff6a6798ca431d9ce4cc22b9e559e44fcecd02313e74bf9a6acd_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_431ffa4cc85eeebf3b4b14b9fd7c5fb0b0c01ea4a0d01ee2724a5fc438fa5f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431ffa4cc85eeebf3b4b14b9fd7c5fb0b0c01ea4a0d01ee2724a5fc438fa5f46->enter($__internal_431ffa4cc85eeebf3b4b14b9fd7c5fb0b0c01ea4a0d01ee2724a5fc438fa5f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e4f1befd9b3d9cde6f627fb008ec652d4bd7af1c38b14a2fe09a3ef17e01d0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f1befd9b3d9cde6f627fb008ec652d4bd7af1c38b14a2fe09a3ef17e01d0b9->enter($__internal_e4f1befd9b3d9cde6f627fb008ec652d4bd7af1c38b14a2fe09a3ef17e01d0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\">       
        </script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\">
        </script>
        <script>
            \$(document).ready(function() {      
                \$('.js-datepicker').datepicker({
                    format: 'yyyy-mm-dd'
                });
            });
        </script>    
        <script>
            function addField(field)
            {
                var newField = field.getAttribute('data-prototype');
                var prevElement = field.previousElementSibling;               
                var newFieldId = prevElement.querySelectorAll(\"p\").length;
                var removeButton = document.createElement(\"input\");
                removeButton.setAttribute(\"type\",\"button\");
                removeButton.setAttribute(\"onclick\",\"removeField(this)\");
                removeButton.setAttribute(\"value\", \"-\");
                newField = newField.replace(/__name__/g,newFieldId);                
                var newPTag = document.createElement(\"p\");        
                newPTag.innerHTML= newField;
                newPTag.appendChild(removeButton);
                prevElement.appendChild(newPTag);
            }
            function removeField(field)
            {
                if(field.parentElement.parentElement.querySelectorAll(\"p\").length>1) {
                    field.parentElement.remove();
                }
            }
        </script>   
    ";
        
        $__internal_e4f1befd9b3d9cde6f627fb008ec652d4bd7af1c38b14a2fe09a3ef17e01d0b9->leave($__internal_e4f1befd9b3d9cde6f627fb008ec652d4bd7af1c38b14a2fe09a3ef17e01d0b9_prof);

        
        $__internal_431ffa4cc85eeebf3b4b14b9fd7c5fb0b0c01ea4a0d01ee2724a5fc438fa5f46->leave($__internal_431ffa4cc85eeebf3b4b14b9fd7c5fb0b0c01ea4a0d01ee2724a5fc438fa5f46_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 185,  481 => 184,  468 => 180,  464 => 179,  459 => 177,  454 => 174,  444 => 170,  438 => 167,  432 => 164,  428 => 162,  424 => 161,  417 => 157,  412 => 154,  402 => 150,  396 => 147,  390 => 144,  382 => 139,  376 => 136,  370 => 133,  366 => 131,  362 => 130,  355 => 126,  350 => 123,  340 => 119,  334 => 116,  328 => 113,  324 => 111,  320 => 110,  313 => 106,  307 => 102,  297 => 98,  291 => 95,  285 => 92,  281 => 90,  277 => 89,  267 => 82,  261 => 79,  255 => 76,  247 => 71,  241 => 68,  235 => 65,  227 => 60,  221 => 57,  215 => 54,  207 => 49,  201 => 46,  195 => 43,  187 => 38,  181 => 35,  175 => 32,  167 => 27,  161 => 24,  155 => 21,  149 => 18,  146 => 17,  137 => 16,  124 => 14,  115 => 13,  105 => 184,  102 => 183,  99 => 16,  96 => 13,  87 => 12,  73 => 5,  54 => 4,  45 => 3,  11 => 1,);
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
        <table>
        {{ form_start(form, { 'attr' : { 'novalidate' : 'novalidate' }}) }}
            <tr>
                <td>
                {{ form_label(form.loginName)  }}
                </td>
                <td>
                {{ form_widget(form.loginName) }}
                </td>
                <td>
                {{ form_errors(form.loginName) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.firstName)  }}
                </td>
                <td>
                {{ form_widget(form.firstName) }}
                </td>
                <td>
                {{ form_errors(form.firstName) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.lastName)  }}
                </td>
                <td>
                {{ form_widget(form.lastName) }}
                </td>
                <td>
                {{ form_errors(form.lastName) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.dateOfBirth)  }}
                </td>
                <td>
                {{ form_widget(form.dateOfBirth) }}
                </td>
                <td>
                {{ form_errors(form.dateOfBirth) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.gender)  }}
                </td>
                <td>
                {{ form_widget(form.gender) }}
                </td>
                <td>
                {{ form_errors(form.gender) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.bloodGroup)  }}
                </td>
                <td>
                {{ form_widget(form.bloodGroup) }}
                </td>
                <td>
                {{ form_errors(form.bloodGroup) }}
                </td>
            </tr>
            </table>
            
            <div>
                <table>
            {% for emailField in form.emailIds %}
                <tr>
                <td>
                {{ form_label(emailField)  }}
                </td>
                <td>
                {{ form_widget(emailField) }}
                </td>
                <td>
                {{ form_errors(emailField) }}
                </td>
                </tr>
            {% endfor %}
                </table>
            </div>
            
            <input type='button' id='addEmailId' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.emailIds.vars.prototype)|e}}\">
            
            <div>
                <table>
            {% for number in form.mobileNumbers %}
                <tr>
                <td>
                {{ form_label(number)  }}
                </td>
                <td>
                {{ form_widget(number) }}
                </td>
                <td>
                {{ form_errors(number) }}
                </td>
                </tr>
            {% endfor %}
                </table>
            </div>
            <input type='button' id='addMobileNumber' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.mobileNumbers.vars.prototype)|e}}\">            
            
            <div>
                <table border=\"ridge\">
            {% for graduationLevel in form.education %}
                <tr>
                <td>
                {{ form_label(graduationLevel.graduation)  }}
                </td>
                <td>
                {{ form_widget(graduationLevel.graduation) }}
                </td>
                <td>
                {{ form_errors(graduationLevel.graduation) }}
                </td>
                </tr>
                <tr>
                <td>
                {{ form_label(graduationLevel.instituteName)  }}
                </td>
                <td>
                {{ form_widget(graduationLevel.instituteName) }}
                </td>
                <td>
                {{ form_errors(graduationLevel.instituteName) }}
                </td>
                </tr>
            {% endfor %}
            </table>
            </div>
            <input type='button' id='addGraduation' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.education.vars.prototype)|e}}\">  
            
            <div>
                <table border=\"ridge\" >
            {% for areaOfInterest in form.interests %}
                <tr>
                <td>
                {{ form_label(areaOfInterest)  }}
                </td>
                <td>
                {{ form_widget(areaOfInterest) }}
                </td>
                <td>
                {{ form_errors(areaOfInterest) }}
                </td>
                </tr>
            {% endfor %}
                </table>
            </div>
            <input type='button' id='addAreaOfInterest' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.interests.vars.prototype)|e}}\">
            
            {{ form_row(form.register) }}
        {{ form_end(form) }}
        
    {% endblock %}
        
    {% block javascripts %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\">       
        </script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\">
        </script>
        <script>
            \$(document).ready(function() {      
                \$('.js-datepicker').datepicker({
                    format: 'yyyy-mm-dd'
                });
            });
        </script>    
        <script>
            function addField(field)
            {
                var newField = field.getAttribute('data-prototype');
                var prevElement = field.previousElementSibling;               
                var newFieldId = prevElement.querySelectorAll(\"p\").length;
                var removeButton = document.createElement(\"input\");
                removeButton.setAttribute(\"type\",\"button\");
                removeButton.setAttribute(\"onclick\",\"removeField(this)\");
                removeButton.setAttribute(\"value\", \"-\");
                newField = newField.replace(/__name__/g,newFieldId);                
                var newPTag = document.createElement(\"p\");        
                newPTag.innerHTML= newField;
                newPTag.appendChild(removeButton);
                prevElement.appendChild(newPTag);
            }
            function removeField(field)
            {
                if(field.parentElement.parentElement.querySelectorAll(\"p\").length>1) {
                    field.parentElement.remove();
                }
            }
        </script>   
    {% endblock %}
{% endblock %}", "UserBundle:User:form.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/form.html.twig");
    }
}
