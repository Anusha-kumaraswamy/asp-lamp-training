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
            'body' => array($this, 'block_body'),
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
        $__internal_26069520d0749a8924b0d6d1e3e8fac0efa5af02ae45e6aa5a140edf785d5b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26069520d0749a8924b0d6d1e3e8fac0efa5af02ae45e6aa5a140edf785d5b13->enter($__internal_26069520d0749a8924b0d6d1e3e8fac0efa5af02ae45e6aa5a140edf785d5b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:edit.html.twig"));

        $__internal_53f21f3c7ee99f7a0256f13963e9d544344f3d32b2953b79f3736fcb484261f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f21f3c7ee99f7a0256f13963e9d544344f3d32b2953b79f3736fcb484261f7->enter($__internal_53f21f3c7ee99f7a0256f13963e9d544344f3d32b2953b79f3736fcb484261f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26069520d0749a8924b0d6d1e3e8fac0efa5af02ae45e6aa5a140edf785d5b13->leave($__internal_26069520d0749a8924b0d6d1e3e8fac0efa5af02ae45e6aa5a140edf785d5b13_prof);

        
        $__internal_53f21f3c7ee99f7a0256f13963e9d544344f3d32b2953b79f3736fcb484261f7->leave($__internal_53f21f3c7ee99f7a0256f13963e9d544344f3d32b2953b79f3736fcb484261f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3394ee0938986ce1477b1c7dff9329397372aef722605ed227be3626c4e9b471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3394ee0938986ce1477b1c7dff9329397372aef722605ed227be3626c4e9b471->enter($__internal_3394ee0938986ce1477b1c7dff9329397372aef722605ed227be3626c4e9b471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5985b64fd8b011cda1c0a1efcd8758c536047d9c94f7a15cd6e472d95ff5da40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5985b64fd8b011cda1c0a1efcd8758c536047d9c94f7a15cd6e472d95ff5da40->enter($__internal_5985b64fd8b011cda1c0a1efcd8758c536047d9c94f7a15cd6e472d95ff5da40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5985b64fd8b011cda1c0a1efcd8758c536047d9c94f7a15cd6e472d95ff5da40->leave($__internal_5985b64fd8b011cda1c0a1efcd8758c536047d9c94f7a15cd6e472d95ff5da40_prof);

        
        $__internal_3394ee0938986ce1477b1c7dff9329397372aef722605ed227be3626c4e9b471->leave($__internal_3394ee0938986ce1477b1c7dff9329397372aef722605ed227be3626c4e9b471_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b271fa41a96aae7473298a18abfba5bae8103af9a865038a0577a0179044a9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b271fa41a96aae7473298a18abfba5bae8103af9a865038a0577a0179044a9c8->enter($__internal_b271fa41a96aae7473298a18abfba5bae8103af9a865038a0577a0179044a9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_284bce3ba1f1862c447a5470908bf83a65363297cf74a7c4e4ce36bc832c0577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284bce3ba1f1862c447a5470908bf83a65363297cf74a7c4e4ce36bc832c0577->enter($__internal_284bce3ba1f1862c447a5470908bf83a65363297cf74a7c4e4ce36bc832c0577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 59
        echo "
        
    ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_284bce3ba1f1862c447a5470908bf83a65363297cf74a7c4e4ce36bc832c0577->leave($__internal_284bce3ba1f1862c447a5470908bf83a65363297cf74a7c4e4ce36bc832c0577_prof);

        
        $__internal_b271fa41a96aae7473298a18abfba5bae8103af9a865038a0577a0179044a9c8->leave($__internal_b271fa41a96aae7473298a18abfba5bae8103af9a865038a0577a0179044a9c8_prof);

    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        $__internal_4dbf34fb24670e9707c72246e4eb1b5bc3139ccca88e79475cf96ce7cf92ed82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbf34fb24670e9707c72246e4eb1b5bc3139ccca88e79475cf96ce7cf92ed82->enter($__internal_4dbf34fb24670e9707c72246e4eb1b5bc3139ccca88e79475cf96ce7cf92ed82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_0452a043133b923b2d922dc33998dd3eb5ff5ba3e6d1204a7948a8297333efe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0452a043133b923b2d922dc33998dd3eb5ff5ba3e6d1204a7948a8297333efe8->enter($__internal_0452a043133b923b2d922dc33998dd3eb5ff5ba3e6d1204a7948a8297333efe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 8
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loginName", array()), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'row');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'row');
        echo "
            <div>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
            // line 18
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'label');
            echo "
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'widget');
            echo "
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
            <input type='button' id='addEmailId' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            
            <div>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobileNumbers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 28
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'label');
            echo "
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'widget');
            echo "
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
            <input type='button' id='addMobileNumber' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobileNumbers", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">            
            
            <div>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "education", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["graduationLevel"]) {
            // line 38
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["graduationLevel"], "graduation", array()), "name", array()), 'label');
            echo "
                ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["graduationLevel"], "graduation", array()), "name", array()), 'widget');
            echo "
                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["graduationLevel"], "graduation", array()), "name", array()), 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['graduationLevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
            <input type='button' id='addGraduation' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "education", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">  
            
            <div>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["areaOfInterest"]) {
            // line 48
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'label');
            echo "
                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'widget');
            echo "
                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['areaOfInterest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
            <input type='button' id='addAreaOfInterest' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interests", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "register", array()), 'row');
        echo "
        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_0452a043133b923b2d922dc33998dd3eb5ff5ba3e6d1204a7948a8297333efe8->leave($__internal_0452a043133b923b2d922dc33998dd3eb5ff5ba3e6d1204a7948a8297333efe8_prof);

        
        $__internal_4dbf34fb24670e9707c72246e4eb1b5bc3139ccca88e79475cf96ce7cf92ed82->leave($__internal_4dbf34fb24670e9707c72246e4eb1b5bc3139ccca88e79475cf96ce7cf92ed82_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b2aad2fb22847dffca0c05b624a22a9a224b4075ad3e00e9cca1af466d8d666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2aad2fb22847dffca0c05b624a22a9a224b4075ad3e00e9cca1af466d8d666->enter($__internal_5b2aad2fb22847dffca0c05b624a22a9a224b4075ad3e00e9cca1af466d8d666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8d7a56f9e27bc8f981de06cb3fe96ccd4a3c7dd29454eb6bf61976127e5d90b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7a56f9e27bc8f981de06cb3fe96ccd4a3c7dd29454eb6bf61976127e5d90b9->enter($__internal_8d7a56f9e27bc8f981de06cb3fe96ccd4a3c7dd29454eb6bf61976127e5d90b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
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
        
        $__internal_8d7a56f9e27bc8f981de06cb3fe96ccd4a3c7dd29454eb6bf61976127e5d90b9->leave($__internal_8d7a56f9e27bc8f981de06cb3fe96ccd4a3c7dd29454eb6bf61976127e5d90b9_prof);

        
        $__internal_5b2aad2fb22847dffca0c05b624a22a9a224b4075ad3e00e9cca1af466d8d666->leave($__internal_5b2aad2fb22847dffca0c05b624a22a9a224b4075ad3e00e9cca1af466d8d666_prof);

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
        return array (  274 => 62,  265 => 61,  253 => 57,  249 => 56,  244 => 54,  240 => 52,  232 => 50,  228 => 49,  223 => 48,  219 => 47,  213 => 44,  209 => 42,  201 => 40,  197 => 39,  192 => 38,  188 => 37,  182 => 34,  178 => 32,  170 => 30,  166 => 29,  161 => 28,  157 => 27,  151 => 24,  147 => 22,  139 => 20,  135 => 19,  130 => 18,  126 => 17,  121 => 15,  117 => 14,  113 => 13,  109 => 12,  105 => 11,  101 => 10,  95 => 8,  86 => 7,  76 => 61,  72 => 59,  69 => 7,  60 => 6,  43 => 3,  11 => 1,);
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

{% block body %}
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
{% endblock %}", "UserBundle:User:edit.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/edit.html.twig");
    }
}
