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
        $__internal_09fb7e8361c2a20ddd81654b67dff6d16a3416e71a274fd337079e8414f25271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fb7e8361c2a20ddd81654b67dff6d16a3416e71a274fd337079e8414f25271->enter($__internal_09fb7e8361c2a20ddd81654b67dff6d16a3416e71a274fd337079e8414f25271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        $__internal_83e4c3a92e7ac47dbb45795b16e153f7b85ebd4020cc4c9deca0ee7b1d7b0c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e4c3a92e7ac47dbb45795b16e153f7b85ebd4020cc4c9deca0ee7b1d7b0c94->enter($__internal_83e4c3a92e7ac47dbb45795b16e153f7b85ebd4020cc4c9deca0ee7b1d7b0c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09fb7e8361c2a20ddd81654b67dff6d16a3416e71a274fd337079e8414f25271->leave($__internal_09fb7e8361c2a20ddd81654b67dff6d16a3416e71a274fd337079e8414f25271_prof);

        
        $__internal_83e4c3a92e7ac47dbb45795b16e153f7b85ebd4020cc4c9deca0ee7b1d7b0c94->leave($__internal_83e4c3a92e7ac47dbb45795b16e153f7b85ebd4020cc4c9deca0ee7b1d7b0c94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_585d60ffc651a54495d166e8f47cdad5f3b45a27febbd922073a7f304b566b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585d60ffc651a54495d166e8f47cdad5f3b45a27febbd922073a7f304b566b6c->enter($__internal_585d60ffc651a54495d166e8f47cdad5f3b45a27febbd922073a7f304b566b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20cb30c434ed933895df5b95dd13a254b9410191671bba9b4306369ce7af8138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cb30c434ed933895df5b95dd13a254b9410191671bba9b4306369ce7af8138->enter($__internal_20cb30c434ed933895df5b95dd13a254b9410191671bba9b4306369ce7af8138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_20cb30c434ed933895df5b95dd13a254b9410191671bba9b4306369ce7af8138->leave($__internal_20cb30c434ed933895df5b95dd13a254b9410191671bba9b4306369ce7af8138_prof);

        
        $__internal_585d60ffc651a54495d166e8f47cdad5f3b45a27febbd922073a7f304b566b6c->leave($__internal_585d60ffc651a54495d166e8f47cdad5f3b45a27febbd922073a7f304b566b6c_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d155f49540683525cc45a27d124f1f24b7232b5bdcf93343317da3100304c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d155f49540683525cc45a27d124f1f24b7232b5bdcf93343317da3100304c55->enter($__internal_4d155f49540683525cc45a27d124f1f24b7232b5bdcf93343317da3100304c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e80e4d3b13cf45bd8bc4c72d20f2155136a3a0ba460b5fe5f5928e81db3e9b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80e4d3b13cf45bd8bc4c72d20f2155136a3a0ba460b5fe5f5928e81db3e9b88->enter($__internal_e80e4d3b13cf45bd8bc4c72d20f2155136a3a0ba460b5fe5f5928e81db3e9b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_e80e4d3b13cf45bd8bc4c72d20f2155136a3a0ba460b5fe5f5928e81db3e9b88->leave($__internal_e80e4d3b13cf45bd8bc4c72d20f2155136a3a0ba460b5fe5f5928e81db3e9b88_prof);

        
        $__internal_4d155f49540683525cc45a27d124f1f24b7232b5bdcf93343317da3100304c55->leave($__internal_4d155f49540683525cc45a27d124f1f24b7232b5bdcf93343317da3100304c55_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_732323c340eea08afdfcc4a0f0c1fab86cdd9588b9ca5c3635f7eed2bb3caa95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732323c340eea08afdfcc4a0f0c1fab86cdd9588b9ca5c3635f7eed2bb3caa95->enter($__internal_732323c340eea08afdfcc4a0f0c1fab86cdd9588b9ca5c3635f7eed2bb3caa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53da9c48b58965afd0dcda86c9669b22ccc7ad21e26e2ae5d37209665c4f0238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53da9c48b58965afd0dcda86c9669b22ccc7ad21e26e2ae5d37209665c4f0238->enter($__internal_53da9c48b58965afd0dcda86c9669b22ccc7ad21e26e2ae5d37209665c4f0238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_53da9c48b58965afd0dcda86c9669b22ccc7ad21e26e2ae5d37209665c4f0238->leave($__internal_53da9c48b58965afd0dcda86c9669b22ccc7ad21e26e2ae5d37209665c4f0238_prof);

        
        $__internal_732323c340eea08afdfcc4a0f0c1fab86cdd9588b9ca5c3635f7eed2bb3caa95->leave($__internal_732323c340eea08afdfcc4a0f0c1fab86cdd9588b9ca5c3635f7eed2bb3caa95_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_fcf50f5b25da05065f3362b83dc366320a3d57c1438fd51189e1caaa14201c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf50f5b25da05065f3362b83dc366320a3d57c1438fd51189e1caaa14201c53->enter($__internal_fcf50f5b25da05065f3362b83dc366320a3d57c1438fd51189e1caaa14201c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_2f7c31530e7b30173b60505aeb1ed776c1709e0f9598a9b6e8e3f9803552bae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7c31530e7b30173b60505aeb1ed776c1709e0f9598a9b6e8e3f9803552bae6->enter($__internal_2f7c31530e7b30173b60505aeb1ed776c1709e0f9598a9b6e8e3f9803552bae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_2f7c31530e7b30173b60505aeb1ed776c1709e0f9598a9b6e8e3f9803552bae6->leave($__internal_2f7c31530e7b30173b60505aeb1ed776c1709e0f9598a9b6e8e3f9803552bae6_prof);

        
        $__internal_fcf50f5b25da05065f3362b83dc366320a3d57c1438fd51189e1caaa14201c53->leave($__internal_fcf50f5b25da05065f3362b83dc366320a3d57c1438fd51189e1caaa14201c53_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_3960958732a1ed0411dc9f7b8d94d3fb889014fc95ce52e88b0b6af654fe02c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3960958732a1ed0411dc9f7b8d94d3fb889014fc95ce52e88b0b6af654fe02c2->enter($__internal_3960958732a1ed0411dc9f7b8d94d3fb889014fc95ce52e88b0b6af654fe02c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_d3c560f5926133ff0112e37f11c4edfc0be3d97c02d1862888aa6b3f31b85a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c560f5926133ff0112e37f11c4edfc0be3d97c02d1862888aa6b3f31b85a7f->enter($__internal_d3c560f5926133ff0112e37f11c4edfc0be3d97c02d1862888aa6b3f31b85a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

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
        
        $__internal_d3c560f5926133ff0112e37f11c4edfc0be3d97c02d1862888aa6b3f31b85a7f->leave($__internal_d3c560f5926133ff0112e37f11c4edfc0be3d97c02d1862888aa6b3f31b85a7f_prof);

        
        $__internal_3960958732a1ed0411dc9f7b8d94d3fb889014fc95ce52e88b0b6af654fe02c2->leave($__internal_3960958732a1ed0411dc9f7b8d94d3fb889014fc95ce52e88b0b6af654fe02c2_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04dde7c65b6dac3715fe3bebfedcbc236e7c6d262fabdf3fe1f84f149d7763ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04dde7c65b6dac3715fe3bebfedcbc236e7c6d262fabdf3fe1f84f149d7763ab->enter($__internal_04dde7c65b6dac3715fe3bebfedcbc236e7c6d262fabdf3fe1f84f149d7763ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f3b302d7f1cc5fa6bb16b4b6c1493e71ec17f58097eb9afc2d6089fe2f368ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b302d7f1cc5fa6bb16b4b6c1493e71ec17f58097eb9afc2d6089fe2f368ff2->enter($__internal_f3b302d7f1cc5fa6bb16b4b6c1493e71ec17f58097eb9afc2d6089fe2f368ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                ";
        // line 215
        echo "                    field.parentElement.remove();
                ";
        // line 217
        echo "            }
        </script>   
    ";
        
        $__internal_f3b302d7f1cc5fa6bb16b4b6c1493e71ec17f58097eb9afc2d6089fe2f368ff2->leave($__internal_f3b302d7f1cc5fa6bb16b4b6c1493e71ec17f58097eb9afc2d6089fe2f368ff2_prof);

        
        $__internal_04dde7c65b6dac3715fe3bebfedcbc236e7c6d262fabdf3fe1f84f149d7763ab->leave($__internal_04dde7c65b6dac3715fe3bebfedcbc236e7c6d262fabdf3fe1f84f149d7763ab_prof);

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
        return array (  524 => 217,  521 => 215,  490 => 185,  481 => 184,  468 => 180,  464 => 179,  459 => 177,  454 => 174,  444 => 170,  438 => 167,  432 => 164,  428 => 162,  424 => 161,  417 => 157,  412 => 154,  402 => 150,  396 => 147,  390 => 144,  382 => 139,  376 => 136,  370 => 133,  366 => 131,  362 => 130,  355 => 126,  350 => 123,  340 => 119,  334 => 116,  328 => 113,  324 => 111,  320 => 110,  313 => 106,  307 => 102,  297 => 98,  291 => 95,  285 => 92,  281 => 90,  277 => 89,  267 => 82,  261 => 79,  255 => 76,  247 => 71,  241 => 68,  235 => 65,  227 => 60,  221 => 57,  215 => 54,  207 => 49,  201 => 46,  195 => 43,  187 => 38,  181 => 35,  175 => 32,  167 => 27,  161 => 24,  155 => 21,  149 => 18,  146 => 17,  137 => 16,  124 => 14,  115 => 13,  105 => 184,  102 => 183,  99 => 16,  96 => 13,  87 => 12,  73 => 5,  54 => 4,  45 => 3,  11 => 1,);
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
                {#if(field.parentElement.parentElement.querySelectorAll(\"p\").length>1) {#}
                    field.parentElement.remove();
                {#}#}
            }
        </script>   
    {% endblock %}
{% endblock %}", "UserBundle:User:form.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/form.html.twig");
    }
}
