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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee01d86d5eaf9bb7dd59f231b8d2e867094b851145203ff9f6651df9d6331e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee01d86d5eaf9bb7dd59f231b8d2e867094b851145203ff9f6651df9d6331e56->enter($__internal_ee01d86d5eaf9bb7dd59f231b8d2e867094b851145203ff9f6651df9d6331e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $__internal_9a69cc40594bd3d4079def428b9764ab9ee4a7f15c8f0035fbcb8b8ace2c9cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a69cc40594bd3d4079def428b9764ab9ee4a7f15c8f0035fbcb8b8ace2c9cd8->enter($__internal_9a69cc40594bd3d4079def428b9764ab9ee4a7f15c8f0035fbcb8b8ace2c9cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee01d86d5eaf9bb7dd59f231b8d2e867094b851145203ff9f6651df9d6331e56->leave($__internal_ee01d86d5eaf9bb7dd59f231b8d2e867094b851145203ff9f6651df9d6331e56_prof);

        
        $__internal_9a69cc40594bd3d4079def428b9764ab9ee4a7f15c8f0035fbcb8b8ace2c9cd8->leave($__internal_9a69cc40594bd3d4079def428b9764ab9ee4a7f15c8f0035fbcb8b8ace2c9cd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97b887424a574fa26006e59064f5aa1d580a8bf072ede4e3194027486d815200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b887424a574fa26006e59064f5aa1d580a8bf072ede4e3194027486d815200->enter($__internal_97b887424a574fa26006e59064f5aa1d580a8bf072ede4e3194027486d815200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c51a8a4235b6cd0914d47f252a6c9324adfbb742f4237ca039389e19f2a746a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c51a8a4235b6cd0914d47f252a6c9324adfbb742f4237ca039389e19f2a746a->enter($__internal_9c51a8a4235b6cd0914d47f252a6c9324adfbb742f4237ca039389e19f2a746a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_9c51a8a4235b6cd0914d47f252a6c9324adfbb742f4237ca039389e19f2a746a->leave($__internal_9c51a8a4235b6cd0914d47f252a6c9324adfbb742f4237ca039389e19f2a746a_prof);

        
        $__internal_97b887424a574fa26006e59064f5aa1d580a8bf072ede4e3194027486d815200->leave($__internal_97b887424a574fa26006e59064f5aa1d580a8bf072ede4e3194027486d815200_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_779495342c3e8c25f155d2f8791d34fdf13eabc2cf874ede8759d43dcdba6787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779495342c3e8c25f155d2f8791d34fdf13eabc2cf874ede8759d43dcdba6787->enter($__internal_779495342c3e8c25f155d2f8791d34fdf13eabc2cf874ede8759d43dcdba6787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7367402a04bd8331ed72d06a3a4ed447217f39fa2fb3ebf1cec397e3d0be6c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7367402a04bd8331ed72d06a3a4ed447217f39fa2fb3ebf1cec397e3d0be6c96->enter($__internal_7367402a04bd8331ed72d06a3a4ed447217f39fa2fb3ebf1cec397e3d0be6c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_7367402a04bd8331ed72d06a3a4ed447217f39fa2fb3ebf1cec397e3d0be6c96->leave($__internal_7367402a04bd8331ed72d06a3a4ed447217f39fa2fb3ebf1cec397e3d0be6c96_prof);

        
        $__internal_779495342c3e8c25f155d2f8791d34fdf13eabc2cf874ede8759d43dcdba6787->leave($__internal_779495342c3e8c25f155d2f8791d34fdf13eabc2cf874ede8759d43dcdba6787_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_49bdc4c78bfb5d5542f41bd0627984ec2481fdbb70f28f356eb0de2e83a3979b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49bdc4c78bfb5d5542f41bd0627984ec2481fdbb70f28f356eb0de2e83a3979b->enter($__internal_49bdc4c78bfb5d5542f41bd0627984ec2481fdbb70f28f356eb0de2e83a3979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5b06efceb774fe61b0203a341706a40777c181b3453fa6e5c85e4a43f8994bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b06efceb774fe61b0203a341706a40777c181b3453fa6e5c85e4a43f8994bd->enter($__internal_a5b06efceb774fe61b0203a341706a40777c181b3453fa6e5c85e4a43f8994bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 68
        echo "
        
    ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_a5b06efceb774fe61b0203a341706a40777c181b3453fa6e5c85e4a43f8994bd->leave($__internal_a5b06efceb774fe61b0203a341706a40777c181b3453fa6e5c85e4a43f8994bd_prof);

        
        $__internal_49bdc4c78bfb5d5542f41bd0627984ec2481fdbb70f28f356eb0de2e83a3979b->leave($__internal_49bdc4c78bfb5d5542f41bd0627984ec2481fdbb70f28f356eb0de2e83a3979b_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_ea6122492724d5665ff559da21b63db0496e62b6f232c5756e63d090b42b9774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6122492724d5665ff559da21b63db0496e62b6f232c5756e63d090b42b9774->enter($__internal_ea6122492724d5665ff559da21b63db0496e62b6f232c5756e63d090b42b9774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_94779495c472613367c831d243b2f9bb41968b041554b46055df8e27cf208d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94779495c472613367c831d243b2f9bb41968b041554b46055df8e27cf208d11->enter($__internal_94779495c472613367c831d243b2f9bb41968b041554b46055df8e27cf208d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_94779495c472613367c831d243b2f9bb41968b041554b46055df8e27cf208d11->leave($__internal_94779495c472613367c831d243b2f9bb41968b041554b46055df8e27cf208d11_prof);

        
        $__internal_ea6122492724d5665ff559da21b63db0496e62b6f232c5756e63d090b42b9774->leave($__internal_ea6122492724d5665ff559da21b63db0496e62b6f232c5756e63d090b42b9774_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_2af4a76503c447cd34e6dcf237c2c5c704ef6a4427ea5972c2902f54fcc79d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af4a76503c447cd34e6dcf237c2c5c704ef6a4427ea5972c2902f54fcc79d20->enter($__internal_2af4a76503c447cd34e6dcf237c2c5c704ef6a4427ea5972c2902f54fcc79d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_b9d3028fde13e35caa15484f60a76a952321f3b73ec6f316057d664b7c9d42f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d3028fde13e35caa15484f60a76a952321f3b73ec6f316057d664b7c9d42f8->enter($__internal_b9d3028fde13e35caa15484f60a76a952321f3b73ec6f316057d664b7c9d42f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 17
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loginName", array()), 'row');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'row');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'row');
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'row');
        echo "
            <div>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
            // line 27
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'label');
            echo "
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'widget');
            echo "
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>
            <input type='button' id='addEmailId' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            
            <div>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobileNumbers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 37
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'label');
            echo "
                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'widget');
            echo "
                ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
            <input type='button' id='addMobileNumber' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobileNumbers", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">            
            
            <div>
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "education", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["graduationLevel"]) {
            // line 47
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["graduationLevel"], "graduation", array()), "name", array()), 'label');
            echo "
                ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["graduationLevel"], "graduation", array()), "name", array()), 'widget');
            echo "
                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["graduationLevel"], "graduation", array()), "name", array()), 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['graduationLevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </div>
            <input type='button' id='addGraduation' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "education", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">  
            
            <div>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["areaOfnterest"]) {
            // line 57
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["areaOfInterest"]) ? $context["areaOfInterest"] : $this->getContext($context, "areaOfInterest")), 'label');
            echo "
                ";
            // line 58
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["areaOfInterest"]) ? $context["areaOfInterest"] : $this->getContext($context, "areaOfInterest")), 'widget');
            echo "
                ";
            // line 59
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["areaOfInterest"]) ? $context["areaOfInterest"] : $this->getContext($context, "areaOfInterest")), 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['areaOfnterest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </div>
            <input type='button' id='addAreaOfInterest' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interests", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "register", array()), 'row');
        echo "
        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_b9d3028fde13e35caa15484f60a76a952321f3b73ec6f316057d664b7c9d42f8->leave($__internal_b9d3028fde13e35caa15484f60a76a952321f3b73ec6f316057d664b7c9d42f8_prof);

        
        $__internal_2af4a76503c447cd34e6dcf237c2c5c704ef6a4427ea5972c2902f54fcc79d20->leave($__internal_2af4a76503c447cd34e6dcf237c2c5c704ef6a4427ea5972c2902f54fcc79d20_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39c073dce4929e2ccaacc205804143b408459c015b4c048f7a37b4d81b17cc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c073dce4929e2ccaacc205804143b408459c015b4c048f7a37b4d81b17cc8b->enter($__internal_39c073dce4929e2ccaacc205804143b408459c015b4c048f7a37b4d81b17cc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1078d31c5f37e9ffd9c95edfa39b311ae2ea76150890f8880215ed477bb45217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1078d31c5f37e9ffd9c95edfa39b311ae2ea76150890f8880215ed477bb45217->enter($__internal_1078d31c5f37e9ffd9c95edfa39b311ae2ea76150890f8880215ed477bb45217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "        <script>
            window.onload = displayFields;
            function displayFields()
            {
                addField(document.getElementById(\"addEmailId\"));
                addField(document.getElementById(\"addMobileNumber\"));
                addField(document.getElementById(\"addGraduation\"));
                addField(document.getElementById(\"addAreaOfInterest\"));

            }
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
        
        $__internal_1078d31c5f37e9ffd9c95edfa39b311ae2ea76150890f8880215ed477bb45217->leave($__internal_1078d31c5f37e9ffd9c95edfa39b311ae2ea76150890f8880215ed477bb45217_prof);

        
        $__internal_39c073dce4929e2ccaacc205804143b408459c015b4c048f7a37b4d81b17cc8b->leave($__internal_39c073dce4929e2ccaacc205804143b408459c015b4c048f7a37b4d81b17cc8b_prof);

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
        return array (  326 => 71,  317 => 70,  305 => 66,  301 => 65,  296 => 63,  292 => 61,  284 => 59,  280 => 58,  275 => 57,  271 => 56,  265 => 53,  261 => 51,  253 => 49,  249 => 48,  244 => 47,  240 => 46,  234 => 43,  230 => 41,  222 => 39,  218 => 38,  213 => 37,  209 => 36,  203 => 33,  199 => 31,  191 => 29,  187 => 28,  182 => 27,  178 => 26,  173 => 24,  169 => 23,  165 => 22,  161 => 21,  157 => 20,  153 => 19,  147 => 17,  138 => 16,  125 => 14,  116 => 13,  106 => 70,  102 => 68,  99 => 16,  96 => 13,  87 => 12,  73 => 5,  54 => 4,  45 => 3,  11 => 1,);
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
        {{ form_start(form, { 'attr' : { 'novalidate' : 'novalidate' }}) }}
    
            {{ form_row(form.loginName) }}
            {{ form_row(form.firstName) }}
            {{ form_row(form.lastName) }}
            {{ form_row(form.dateOfBirth) }}
            {{ form_row(form.gender) }}
            {{ form_row(form.bloodGroup) }}
            <div>
            {% for emailField in form.emailIds %}
                {{ form_label(emailField)  }}
                {{ form_widget(emailField) }}
                {{ form_errors(emailField) }}
            {% endfor %}
            </div>
            <input type='button' id='addEmailId' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.emailIds.vars.prototype)|e}}\">
            
            <div>
            {% for number in form.mobileNumbers %}
                {{ form_label(number)  }}
                {{ form_widget(number) }}
                {{ form_errors(number) }}
            {% endfor %}
            </div>
            <input type='button' id='addMobileNumber' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.mobileNumbers.vars.prototype)|e}}\">            
            
            <div>
            {% for graduationLevel in form.education %}
                {{ form_label(graduationLevel.graduation.name)  }}
                {{ form_widget(graduationLevel.graduation.name) }}
                {{ form_errors(graduationLevel.graduation.name) }}
            {% endfor %}
            </div>
            <input type='button' id='addGraduation' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.education.vars.prototype)|e}}\">  
            
            <div>
            {% for areaOfnterest in form.interests %}
                {{ form_label(areaOfInterest)  }}
                {{ form_widget(areaOfInterest) }}
                {{ form_errors(areaOfInterest) }}
            {% endfor %}
            </div>
            <input type='button' id='addAreaOfInterest' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.interests.vars.prototype)|e}}\">
            
            {{ form_row(form.register) }}
        {{ form_end(form) }}
    {% endblock %}

        
    {% block javascripts %}
        <script>
            window.onload = displayFields;
            function displayFields()
            {
                addField(document.getElementById(\"addEmailId\"));
                addField(document.getElementById(\"addMobileNumber\"));
                addField(document.getElementById(\"addGraduation\"));
                addField(document.getElementById(\"addAreaOfInterest\"));

            }
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
{% endblock %}", "UserBundle:User:new.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/new.html.twig");
    }
}
