<?php

/* UserBundle:User:new.html.twig */
class __TwigTemplate_c8b4fd28bb412e1cc7db4535f446694fc10899afc7c8934f72f35706c197747d extends Twig_Template
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
        $__internal_0f441239c3083881e21947c2866d33a97089da7f45cc4e63b31dc5dafa44d68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f441239c3083881e21947c2866d33a97089da7f45cc4e63b31dc5dafa44d68f->enter($__internal_0f441239c3083881e21947c2866d33a97089da7f45cc4e63b31dc5dafa44d68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $__internal_0f52fb293f94e212d0bb11efcf864ca41b43442527fdac609310ce82dd8369a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f52fb293f94e212d0bb11efcf864ca41b43442527fdac609310ce82dd8369a6->enter($__internal_0f52fb293f94e212d0bb11efcf864ca41b43442527fdac609310ce82dd8369a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f441239c3083881e21947c2866d33a97089da7f45cc4e63b31dc5dafa44d68f->leave($__internal_0f441239c3083881e21947c2866d33a97089da7f45cc4e63b31dc5dafa44d68f_prof);

        
        $__internal_0f52fb293f94e212d0bb11efcf864ca41b43442527fdac609310ce82dd8369a6->leave($__internal_0f52fb293f94e212d0bb11efcf864ca41b43442527fdac609310ce82dd8369a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19c87f1ffdcd5bcb26348eb7884bac4939626598ca862b5fe7dec3cfc1b274a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c87f1ffdcd5bcb26348eb7884bac4939626598ca862b5fe7dec3cfc1b274a4->enter($__internal_19c87f1ffdcd5bcb26348eb7884bac4939626598ca862b5fe7dec3cfc1b274a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_21a7f63bc6385a449a026f078f7c9ed98369b19241a70b99c8b150b9f9b472e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a7f63bc6385a449a026f078f7c9ed98369b19241a70b99c8b150b9f9b472e6->enter($__internal_21a7f63bc6385a449a026f078f7c9ed98369b19241a70b99c8b150b9f9b472e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_21a7f63bc6385a449a026f078f7c9ed98369b19241a70b99c8b150b9f9b472e6->leave($__internal_21a7f63bc6385a449a026f078f7c9ed98369b19241a70b99c8b150b9f9b472e6_prof);

        
        $__internal_19c87f1ffdcd5bcb26348eb7884bac4939626598ca862b5fe7dec3cfc1b274a4->leave($__internal_19c87f1ffdcd5bcb26348eb7884bac4939626598ca862b5fe7dec3cfc1b274a4_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8872c7e3a07f9b4f5baffd08b9bc0f637451ca0e86ccecfc6ddb8b093839ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8872c7e3a07f9b4f5baffd08b9bc0f637451ca0e86ccecfc6ddb8b093839ac3->enter($__internal_f8872c7e3a07f9b4f5baffd08b9bc0f637451ca0e86ccecfc6ddb8b093839ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_33fee5777dc9c287f83e56e72c7dbc1eee90a100d82100b77fa21b0d1d045fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fee5777dc9c287f83e56e72c7dbc1eee90a100d82100b77fa21b0d1d045fdb->enter($__internal_33fee5777dc9c287f83e56e72c7dbc1eee90a100d82100b77fa21b0d1d045fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_33fee5777dc9c287f83e56e72c7dbc1eee90a100d82100b77fa21b0d1d045fdb->leave($__internal_33fee5777dc9c287f83e56e72c7dbc1eee90a100d82100b77fa21b0d1d045fdb_prof);

        
        $__internal_f8872c7e3a07f9b4f5baffd08b9bc0f637451ca0e86ccecfc6ddb8b093839ac3->leave($__internal_f8872c7e3a07f9b4f5baffd08b9bc0f637451ca0e86ccecfc6ddb8b093839ac3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7af9c12b357ce69b4760e0d2fbec6034ab5d730fb81d67f73e53c9a32245af8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af9c12b357ce69b4760e0d2fbec6034ab5d730fb81d67f73e53c9a32245af8a->enter($__internal_7af9c12b357ce69b4760e0d2fbec6034ab5d730fb81d67f73e53c9a32245af8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2fb4d91cb6ce6ce27e2264f406f76a596b6f5c9104b17e1466eb091f3e288e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fb4d91cb6ce6ce27e2264f406f76a596b6f5c9104b17e1466eb091f3e288e7->enter($__internal_d2fb4d91cb6ce6ce27e2264f406f76a596b6f5c9104b17e1466eb091f3e288e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2fb4d91cb6ce6ce27e2264f406f76a596b6f5c9104b17e1466eb091f3e288e7->leave($__internal_d2fb4d91cb6ce6ce27e2264f406f76a596b6f5c9104b17e1466eb091f3e288e7_prof);

        
        $__internal_7af9c12b357ce69b4760e0d2fbec6034ab5d730fb81d67f73e53c9a32245af8a->leave($__internal_7af9c12b357ce69b4760e0d2fbec6034ab5d730fb81d67f73e53c9a32245af8a_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_8c347b30cdd50482195beb17376992e0c2c9d3103458ee75e2725b98e3a2f46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c347b30cdd50482195beb17376992e0c2c9d3103458ee75e2725b98e3a2f46e->enter($__internal_8c347b30cdd50482195beb17376992e0c2c9d3103458ee75e2725b98e3a2f46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_c51bc44ebdef610600dcdb6a5a027bcba4aeae2f942993af25ea57fbd9813dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51bc44ebdef610600dcdb6a5a027bcba4aeae2f942993af25ea57fbd9813dfe->enter($__internal_c51bc44ebdef610600dcdb6a5a027bcba4aeae2f942993af25ea57fbd9813dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_c51bc44ebdef610600dcdb6a5a027bcba4aeae2f942993af25ea57fbd9813dfe->leave($__internal_c51bc44ebdef610600dcdb6a5a027bcba4aeae2f942993af25ea57fbd9813dfe_prof);

        
        $__internal_8c347b30cdd50482195beb17376992e0c2c9d3103458ee75e2725b98e3a2f46e->leave($__internal_8c347b30cdd50482195beb17376992e0c2c9d3103458ee75e2725b98e3a2f46e_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_2396ac158b17ae9f15cee74d35a0e8500c96691b60156e550141fcbf6ae43913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2396ac158b17ae9f15cee74d35a0e8500c96691b60156e550141fcbf6ae43913->enter($__internal_2396ac158b17ae9f15cee74d35a0e8500c96691b60156e550141fcbf6ae43913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_6542644dc713dc205786d30a51f0db927ad004562fcf6c48201359892a0c57af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6542644dc713dc205786d30a51f0db927ad004562fcf6c48201359892a0c57af->enter($__internal_6542644dc713dc205786d30a51f0db927ad004562fcf6c48201359892a0c57af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

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
        
        $__internal_6542644dc713dc205786d30a51f0db927ad004562fcf6c48201359892a0c57af->leave($__internal_6542644dc713dc205786d30a51f0db927ad004562fcf6c48201359892a0c57af_prof);

        
        $__internal_2396ac158b17ae9f15cee74d35a0e8500c96691b60156e550141fcbf6ae43913->leave($__internal_2396ac158b17ae9f15cee74d35a0e8500c96691b60156e550141fcbf6ae43913_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d329092f70ab9ecbd9bd6b3722b772a7a2cfea5006022522678708a7b5905e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d329092f70ab9ecbd9bd6b3722b772a7a2cfea5006022522678708a7b5905e7->enter($__internal_3d329092f70ab9ecbd9bd6b3722b772a7a2cfea5006022522678708a7b5905e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c343e432c16587595b7118c0159098ec84e013d19747ff690f55d74539ff1b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c343e432c16587595b7118c0159098ec84e013d19747ff690f55d74539ff1b48->enter($__internal_c343e432c16587595b7118c0159098ec84e013d19747ff690f55d74539ff1b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c343e432c16587595b7118c0159098ec84e013d19747ff690f55d74539ff1b48->leave($__internal_c343e432c16587595b7118c0159098ec84e013d19747ff690f55d74539ff1b48_prof);

        
        $__internal_3d329092f70ab9ecbd9bd6b3722b772a7a2cfea5006022522678708a7b5905e7->leave($__internal_3d329092f70ab9ecbd9bd6b3722b772a7a2cfea5006022522678708a7b5905e7_prof);

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
