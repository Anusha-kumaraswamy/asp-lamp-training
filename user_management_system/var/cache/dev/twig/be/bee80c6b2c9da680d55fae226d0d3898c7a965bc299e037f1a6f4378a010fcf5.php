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
        $__internal_fece9e23181e5d3f3f7cac365648c718dd63ab43cd5715e955198d92755a26ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fece9e23181e5d3f3f7cac365648c718dd63ab43cd5715e955198d92755a26ea->enter($__internal_fece9e23181e5d3f3f7cac365648c718dd63ab43cd5715e955198d92755a26ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $__internal_1e09a217aba432931f8320a81e3238b68b977c9d7f16c4ea0af753f2d86feb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e09a217aba432931f8320a81e3238b68b977c9d7f16c4ea0af753f2d86feb44->enter($__internal_1e09a217aba432931f8320a81e3238b68b977c9d7f16c4ea0af753f2d86feb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fece9e23181e5d3f3f7cac365648c718dd63ab43cd5715e955198d92755a26ea->leave($__internal_fece9e23181e5d3f3f7cac365648c718dd63ab43cd5715e955198d92755a26ea_prof);

        
        $__internal_1e09a217aba432931f8320a81e3238b68b977c9d7f16c4ea0af753f2d86feb44->leave($__internal_1e09a217aba432931f8320a81e3238b68b977c9d7f16c4ea0af753f2d86feb44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ea572583c9ec5b6d1f737ed94f1c09350fce7b76cce48a425c1d0ced43cf17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea572583c9ec5b6d1f737ed94f1c09350fce7b76cce48a425c1d0ced43cf17e->enter($__internal_9ea572583c9ec5b6d1f737ed94f1c09350fce7b76cce48a425c1d0ced43cf17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_174453338a0d6cc630bc365dcabefaac69e817ec351bad3f65fed64864aedd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174453338a0d6cc630bc365dcabefaac69e817ec351bad3f65fed64864aedd92->enter($__internal_174453338a0d6cc630bc365dcabefaac69e817ec351bad3f65fed64864aedd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_174453338a0d6cc630bc365dcabefaac69e817ec351bad3f65fed64864aedd92->leave($__internal_174453338a0d6cc630bc365dcabefaac69e817ec351bad3f65fed64864aedd92_prof);

        
        $__internal_9ea572583c9ec5b6d1f737ed94f1c09350fce7b76cce48a425c1d0ced43cf17e->leave($__internal_9ea572583c9ec5b6d1f737ed94f1c09350fce7b76cce48a425c1d0ced43cf17e_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c33716c8af2b5c11578298873b20f6a68cfa2c93f02462834bb67aea92737037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33716c8af2b5c11578298873b20f6a68cfa2c93f02462834bb67aea92737037->enter($__internal_c33716c8af2b5c11578298873b20f6a68cfa2c93f02462834bb67aea92737037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_42bf8058e0157ace9356467523558741ed5dd478dca9dca6c4a6015abdfd92e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bf8058e0157ace9356467523558741ed5dd478dca9dca6c4a6015abdfd92e7->enter($__internal_42bf8058e0157ace9356467523558741ed5dd478dca9dca6c4a6015abdfd92e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_42bf8058e0157ace9356467523558741ed5dd478dca9dca6c4a6015abdfd92e7->leave($__internal_42bf8058e0157ace9356467523558741ed5dd478dca9dca6c4a6015abdfd92e7_prof);

        
        $__internal_c33716c8af2b5c11578298873b20f6a68cfa2c93f02462834bb67aea92737037->leave($__internal_c33716c8af2b5c11578298873b20f6a68cfa2c93f02462834bb67aea92737037_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_95f2f426cb6fc4e9ed0260b5757aa40ccbabbc3ceb8406043808b8c0ba10196d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f2f426cb6fc4e9ed0260b5757aa40ccbabbc3ceb8406043808b8c0ba10196d->enter($__internal_95f2f426cb6fc4e9ed0260b5757aa40ccbabbc3ceb8406043808b8c0ba10196d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6df7816a7b65292dd4c49e75b857e612ddc2f841f685a99a7c4c942e0ff8608c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df7816a7b65292dd4c49e75b857e612ddc2f841f685a99a7c4c942e0ff8608c->enter($__internal_6df7816a7b65292dd4c49e75b857e612ddc2f841f685a99a7c4c942e0ff8608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6df7816a7b65292dd4c49e75b857e612ddc2f841f685a99a7c4c942e0ff8608c->leave($__internal_6df7816a7b65292dd4c49e75b857e612ddc2f841f685a99a7c4c942e0ff8608c_prof);

        
        $__internal_95f2f426cb6fc4e9ed0260b5757aa40ccbabbc3ceb8406043808b8c0ba10196d->leave($__internal_95f2f426cb6fc4e9ed0260b5757aa40ccbabbc3ceb8406043808b8c0ba10196d_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_1dab978c39dbbe4aa0ddb560aaf4524b2d8fc792b2cc28312a5911a72de647d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dab978c39dbbe4aa0ddb560aaf4524b2d8fc792b2cc28312a5911a72de647d4->enter($__internal_1dab978c39dbbe4aa0ddb560aaf4524b2d8fc792b2cc28312a5911a72de647d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_1994a4d241cd6865fc25d575252464173eb5eeb073cc3f4db530d54ecf321b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1994a4d241cd6865fc25d575252464173eb5eeb073cc3f4db530d54ecf321b3b->enter($__internal_1994a4d241cd6865fc25d575252464173eb5eeb073cc3f4db530d54ecf321b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_1994a4d241cd6865fc25d575252464173eb5eeb073cc3f4db530d54ecf321b3b->leave($__internal_1994a4d241cd6865fc25d575252464173eb5eeb073cc3f4db530d54ecf321b3b_prof);

        
        $__internal_1dab978c39dbbe4aa0ddb560aaf4524b2d8fc792b2cc28312a5911a72de647d4->leave($__internal_1dab978c39dbbe4aa0ddb560aaf4524b2d8fc792b2cc28312a5911a72de647d4_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_af358989fdadca80e83fdf57dc715aa446b0ddee11a3aaf6b0fe2dc7bde917b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af358989fdadca80e83fdf57dc715aa446b0ddee11a3aaf6b0fe2dc7bde917b7->enter($__internal_af358989fdadca80e83fdf57dc715aa446b0ddee11a3aaf6b0fe2dc7bde917b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_b9e4ea0a13ecf5cbf4e950a8f7b43f44c5b2727e8f6abf81dbb3bf50334103a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e4ea0a13ecf5cbf4e950a8f7b43f44c5b2727e8f6abf81dbb3bf50334103a5->enter($__internal_b9e4ea0a13ecf5cbf4e950a8f7b43f44c5b2727e8f6abf81dbb3bf50334103a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

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
        foreach ($context['_seq'] as $context["_key"] => $context["areaOfInterest"]) {
            // line 57
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'label');
            echo "
                ";
            // line 58
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'widget');
            echo "
                ";
            // line 59
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['areaOfInterest'], $context['_parent'], $context['loop']);
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
        
        $__internal_b9e4ea0a13ecf5cbf4e950a8f7b43f44c5b2727e8f6abf81dbb3bf50334103a5->leave($__internal_b9e4ea0a13ecf5cbf4e950a8f7b43f44c5b2727e8f6abf81dbb3bf50334103a5_prof);

        
        $__internal_af358989fdadca80e83fdf57dc715aa446b0ddee11a3aaf6b0fe2dc7bde917b7->leave($__internal_af358989fdadca80e83fdf57dc715aa446b0ddee11a3aaf6b0fe2dc7bde917b7_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe44fba7b3b52dad19625678ef841d65443638e19625c39c6652b98cd9a92e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe44fba7b3b52dad19625678ef841d65443638e19625c39c6652b98cd9a92e42->enter($__internal_fe44fba7b3b52dad19625678ef841d65443638e19625c39c6652b98cd9a92e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc1f9abe519d73c08fa8f21371f09a30e697fc3baa34255718d57da12da335c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1f9abe519d73c08fa8f21371f09a30e697fc3baa34255718d57da12da335c3->enter($__internal_bc1f9abe519d73c08fa8f21371f09a30e697fc3baa34255718d57da12da335c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bc1f9abe519d73c08fa8f21371f09a30e697fc3baa34255718d57da12da335c3->leave($__internal_bc1f9abe519d73c08fa8f21371f09a30e697fc3baa34255718d57da12da335c3_prof);

        
        $__internal_fe44fba7b3b52dad19625678ef841d65443638e19625c39c6652b98cd9a92e42->leave($__internal_fe44fba7b3b52dad19625678ef841d65443638e19625c39c6652b98cd9a92e42_prof);

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
            {% for areaOfInterest in form.interests %}
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
