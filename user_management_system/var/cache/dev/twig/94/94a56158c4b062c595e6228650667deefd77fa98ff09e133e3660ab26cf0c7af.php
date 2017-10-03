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
        $__internal_704843a5ddf5422e6a502c2f4c65b4354e3e780b8f52115b0c14885effd9f6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704843a5ddf5422e6a502c2f4c65b4354e3e780b8f52115b0c14885effd9f6b9->enter($__internal_704843a5ddf5422e6a502c2f4c65b4354e3e780b8f52115b0c14885effd9f6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $__internal_158b637d7c91fd54bae15936c9b2735846cd4193aef8fdcfe17da47cbfde0c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158b637d7c91fd54bae15936c9b2735846cd4193aef8fdcfe17da47cbfde0c60->enter($__internal_158b637d7c91fd54bae15936c9b2735846cd4193aef8fdcfe17da47cbfde0c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_704843a5ddf5422e6a502c2f4c65b4354e3e780b8f52115b0c14885effd9f6b9->leave($__internal_704843a5ddf5422e6a502c2f4c65b4354e3e780b8f52115b0c14885effd9f6b9_prof);

        
        $__internal_158b637d7c91fd54bae15936c9b2735846cd4193aef8fdcfe17da47cbfde0c60->leave($__internal_158b637d7c91fd54bae15936c9b2735846cd4193aef8fdcfe17da47cbfde0c60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72c4b268e9ec8b3483c7d783a401ddf7343b235ac3de44bbaa302101ca6f8abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c4b268e9ec8b3483c7d783a401ddf7343b235ac3de44bbaa302101ca6f8abc->enter($__internal_72c4b268e9ec8b3483c7d783a401ddf7343b235ac3de44bbaa302101ca6f8abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15ef1aa9c06f453b459c0e4a668194df75942ea9e7a5510e20637fc3ff5b5d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ef1aa9c06f453b459c0e4a668194df75942ea9e7a5510e20637fc3ff5b5d15->enter($__internal_15ef1aa9c06f453b459c0e4a668194df75942ea9e7a5510e20637fc3ff5b5d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_15ef1aa9c06f453b459c0e4a668194df75942ea9e7a5510e20637fc3ff5b5d15->leave($__internal_15ef1aa9c06f453b459c0e4a668194df75942ea9e7a5510e20637fc3ff5b5d15_prof);

        
        $__internal_72c4b268e9ec8b3483c7d783a401ddf7343b235ac3de44bbaa302101ca6f8abc->leave($__internal_72c4b268e9ec8b3483c7d783a401ddf7343b235ac3de44bbaa302101ca6f8abc_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54575bece15b96bf7dda15e170b4006b572897578e8cb035454df517f6fd5400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54575bece15b96bf7dda15e170b4006b572897578e8cb035454df517f6fd5400->enter($__internal_54575bece15b96bf7dda15e170b4006b572897578e8cb035454df517f6fd5400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_66a77283487403fd3b640147d76a10c85d1a854e2dc476d28052de2e367276be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a77283487403fd3b640147d76a10c85d1a854e2dc476d28052de2e367276be->enter($__internal_66a77283487403fd3b640147d76a10c85d1a854e2dc476d28052de2e367276be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_66a77283487403fd3b640147d76a10c85d1a854e2dc476d28052de2e367276be->leave($__internal_66a77283487403fd3b640147d76a10c85d1a854e2dc476d28052de2e367276be_prof);

        
        $__internal_54575bece15b96bf7dda15e170b4006b572897578e8cb035454df517f6fd5400->leave($__internal_54575bece15b96bf7dda15e170b4006b572897578e8cb035454df517f6fd5400_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a723c8cce08d921517ce265170f2c3ccc356e5b2375acb17bc9682197eeef84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a723c8cce08d921517ce265170f2c3ccc356e5b2375acb17bc9682197eeef84->enter($__internal_0a723c8cce08d921517ce265170f2c3ccc356e5b2375acb17bc9682197eeef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7fb236cf32c355c3ae2b939a22547c21dbbc782d108d18245688d49fc94a5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fb236cf32c355c3ae2b939a22547c21dbbc782d108d18245688d49fc94a5b0->enter($__internal_c7fb236cf32c355c3ae2b939a22547c21dbbc782d108d18245688d49fc94a5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c7fb236cf32c355c3ae2b939a22547c21dbbc782d108d18245688d49fc94a5b0->leave($__internal_c7fb236cf32c355c3ae2b939a22547c21dbbc782d108d18245688d49fc94a5b0_prof);

        
        $__internal_0a723c8cce08d921517ce265170f2c3ccc356e5b2375acb17bc9682197eeef84->leave($__internal_0a723c8cce08d921517ce265170f2c3ccc356e5b2375acb17bc9682197eeef84_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_857c7948e44bb3e8cd5e81b5614edd1f3220e2ef9974b965fab89746f2b2c60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857c7948e44bb3e8cd5e81b5614edd1f3220e2ef9974b965fab89746f2b2c60d->enter($__internal_857c7948e44bb3e8cd5e81b5614edd1f3220e2ef9974b965fab89746f2b2c60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_52deb1e4024698f2baaea758be959d708283708dfc4abf4d1f0777f83446976a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52deb1e4024698f2baaea758be959d708283708dfc4abf4d1f0777f83446976a->enter($__internal_52deb1e4024698f2baaea758be959d708283708dfc4abf4d1f0777f83446976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_52deb1e4024698f2baaea758be959d708283708dfc4abf4d1f0777f83446976a->leave($__internal_52deb1e4024698f2baaea758be959d708283708dfc4abf4d1f0777f83446976a_prof);

        
        $__internal_857c7948e44bb3e8cd5e81b5614edd1f3220e2ef9974b965fab89746f2b2c60d->leave($__internal_857c7948e44bb3e8cd5e81b5614edd1f3220e2ef9974b965fab89746f2b2c60d_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_01201ece52e5071087e8d1afee0abbf8231546a62d1aa6bd97ad6982554b83e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01201ece52e5071087e8d1afee0abbf8231546a62d1aa6bd97ad6982554b83e7->enter($__internal_01201ece52e5071087e8d1afee0abbf8231546a62d1aa6bd97ad6982554b83e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_2e30c363374c785d8a80eb2a0ec223cd838ec603f051b4ede90bc4baec143e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e30c363374c785d8a80eb2a0ec223cd838ec603f051b4ede90bc4baec143e9a->enter($__internal_2e30c363374c785d8a80eb2a0ec223cd838ec603f051b4ede90bc4baec143e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

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
        
        $__internal_2e30c363374c785d8a80eb2a0ec223cd838ec603f051b4ede90bc4baec143e9a->leave($__internal_2e30c363374c785d8a80eb2a0ec223cd838ec603f051b4ede90bc4baec143e9a_prof);

        
        $__internal_01201ece52e5071087e8d1afee0abbf8231546a62d1aa6bd97ad6982554b83e7->leave($__internal_01201ece52e5071087e8d1afee0abbf8231546a62d1aa6bd97ad6982554b83e7_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_930e7c4ba430f3000a746751bbf28b69cfd88c74e44ddaeb8844d51fcfceaa4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930e7c4ba430f3000a746751bbf28b69cfd88c74e44ddaeb8844d51fcfceaa4e->enter($__internal_930e7c4ba430f3000a746751bbf28b69cfd88c74e44ddaeb8844d51fcfceaa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ad8bd7b407294bfaeff094c4e5e1582c66c375b2a624f277b9cf58dda55c2f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8bd7b407294bfaeff094c4e5e1582c66c375b2a624f277b9cf58dda55c2f4e->enter($__internal_ad8bd7b407294bfaeff094c4e5e1582c66c375b2a624f277b9cf58dda55c2f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ad8bd7b407294bfaeff094c4e5e1582c66c375b2a624f277b9cf58dda55c2f4e->leave($__internal_ad8bd7b407294bfaeff094c4e5e1582c66c375b2a624f277b9cf58dda55c2f4e_prof);

        
        $__internal_930e7c4ba430f3000a746751bbf28b69cfd88c74e44ddaeb8844d51fcfceaa4e->leave($__internal_930e7c4ba430f3000a746751bbf28b69cfd88c74e44ddaeb8844d51fcfceaa4e_prof);

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
