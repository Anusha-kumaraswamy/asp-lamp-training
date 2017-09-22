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
        $__internal_8c3924f4ddc88e783d8fde46a5751ebe24f5f08d25888388c1c9c38ad7e7a8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3924f4ddc88e783d8fde46a5751ebe24f5f08d25888388c1c9c38ad7e7a8ab->enter($__internal_8c3924f4ddc88e783d8fde46a5751ebe24f5f08d25888388c1c9c38ad7e7a8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $__internal_e73c2dc24b30357e302da40d1844d0786c4bd29eedf4d2ccf595bad3b7a208dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73c2dc24b30357e302da40d1844d0786c4bd29eedf4d2ccf595bad3b7a208dc->enter($__internal_e73c2dc24b30357e302da40d1844d0786c4bd29eedf4d2ccf595bad3b7a208dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c3924f4ddc88e783d8fde46a5751ebe24f5f08d25888388c1c9c38ad7e7a8ab->leave($__internal_8c3924f4ddc88e783d8fde46a5751ebe24f5f08d25888388c1c9c38ad7e7a8ab_prof);

        
        $__internal_e73c2dc24b30357e302da40d1844d0786c4bd29eedf4d2ccf595bad3b7a208dc->leave($__internal_e73c2dc24b30357e302da40d1844d0786c4bd29eedf4d2ccf595bad3b7a208dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_017c2d7c5b2246867a973dbc749ec0b770c1e58e1cc94d763ecae1c4b2717f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017c2d7c5b2246867a973dbc749ec0b770c1e58e1cc94d763ecae1c4b2717f26->enter($__internal_017c2d7c5b2246867a973dbc749ec0b770c1e58e1cc94d763ecae1c4b2717f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a023e0a0d110b34c20698a579e4cb917f2bc3c06c3c3356ff4672d6f8a638c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a023e0a0d110b34c20698a579e4cb917f2bc3c06c3c3356ff4672d6f8a638c15->enter($__internal_a023e0a0d110b34c20698a579e4cb917f2bc3c06c3c3356ff4672d6f8a638c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_a023e0a0d110b34c20698a579e4cb917f2bc3c06c3c3356ff4672d6f8a638c15->leave($__internal_a023e0a0d110b34c20698a579e4cb917f2bc3c06c3c3356ff4672d6f8a638c15_prof);

        
        $__internal_017c2d7c5b2246867a973dbc749ec0b770c1e58e1cc94d763ecae1c4b2717f26->leave($__internal_017c2d7c5b2246867a973dbc749ec0b770c1e58e1cc94d763ecae1c4b2717f26_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d1f7ba768501d31d7a0bad6285d610f91de103d4acecc0e55b631e86d0d661f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1f7ba768501d31d7a0bad6285d610f91de103d4acecc0e55b631e86d0d661f->enter($__internal_5d1f7ba768501d31d7a0bad6285d610f91de103d4acecc0e55b631e86d0d661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b23f24214929980fe0c3e0d6e5dcd69e3fb516d1ae955d7aa48c5ec2b48705fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23f24214929980fe0c3e0d6e5dcd69e3fb516d1ae955d7aa48c5ec2b48705fb->enter($__internal_b23f24214929980fe0c3e0d6e5dcd69e3fb516d1ae955d7aa48c5ec2b48705fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_b23f24214929980fe0c3e0d6e5dcd69e3fb516d1ae955d7aa48c5ec2b48705fb->leave($__internal_b23f24214929980fe0c3e0d6e5dcd69e3fb516d1ae955d7aa48c5ec2b48705fb_prof);

        
        $__internal_5d1f7ba768501d31d7a0bad6285d610f91de103d4acecc0e55b631e86d0d661f->leave($__internal_5d1f7ba768501d31d7a0bad6285d610f91de103d4acecc0e55b631e86d0d661f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a206829d7e69f1ad398a89b5bc07d210f8e2e631ead29d6dac5fc04e76527ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a206829d7e69f1ad398a89b5bc07d210f8e2e631ead29d6dac5fc04e76527ab3->enter($__internal_a206829d7e69f1ad398a89b5bc07d210f8e2e631ead29d6dac5fc04e76527ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_237db7b41efe8b6e6e6b4e87e5eb6e6c2201c8e722a1f38507cdac94567c09dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237db7b41efe8b6e6e6b4e87e5eb6e6c2201c8e722a1f38507cdac94567c09dc->enter($__internal_237db7b41efe8b6e6e6b4e87e5eb6e6c2201c8e722a1f38507cdac94567c09dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_237db7b41efe8b6e6e6b4e87e5eb6e6c2201c8e722a1f38507cdac94567c09dc->leave($__internal_237db7b41efe8b6e6e6b4e87e5eb6e6c2201c8e722a1f38507cdac94567c09dc_prof);

        
        $__internal_a206829d7e69f1ad398a89b5bc07d210f8e2e631ead29d6dac5fc04e76527ab3->leave($__internal_a206829d7e69f1ad398a89b5bc07d210f8e2e631ead29d6dac5fc04e76527ab3_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_62ba033e7b82578bdf4f0f9873c8cb3ac8136b4041d7a72f0973a4f0edbf5682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ba033e7b82578bdf4f0f9873c8cb3ac8136b4041d7a72f0973a4f0edbf5682->enter($__internal_62ba033e7b82578bdf4f0f9873c8cb3ac8136b4041d7a72f0973a4f0edbf5682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_a3aaf597591472283319cf1cec703ad8b95ef9e88dbfd9ed242296437221e32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3aaf597591472283319cf1cec703ad8b95ef9e88dbfd9ed242296437221e32e->enter($__internal_a3aaf597591472283319cf1cec703ad8b95ef9e88dbfd9ed242296437221e32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_a3aaf597591472283319cf1cec703ad8b95ef9e88dbfd9ed242296437221e32e->leave($__internal_a3aaf597591472283319cf1cec703ad8b95ef9e88dbfd9ed242296437221e32e_prof);

        
        $__internal_62ba033e7b82578bdf4f0f9873c8cb3ac8136b4041d7a72f0973a4f0edbf5682->leave($__internal_62ba033e7b82578bdf4f0f9873c8cb3ac8136b4041d7a72f0973a4f0edbf5682_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_63f11010fff35b30a58d0da75e7e1eec27dc3f5bce617781b1fbe7a64e9d3e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f11010fff35b30a58d0da75e7e1eec27dc3f5bce617781b1fbe7a64e9d3e99->enter($__internal_63f11010fff35b30a58d0da75e7e1eec27dc3f5bce617781b1fbe7a64e9d3e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_a9345646eafe7fcbf936d3c5db946c7040f550641ad6904dbad6b264a9f0727c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9345646eafe7fcbf936d3c5db946c7040f550641ad6904dbad6b264a9f0727c->enter($__internal_a9345646eafe7fcbf936d3c5db946c7040f550641ad6904dbad6b264a9f0727c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 17
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()), 'label');
        echo "
        
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
            // line 20
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'widget');
            echo "
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'errors');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <input type='button' id='addEmailId' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
        <input type='button' id='removeEmailId' value='-' onclick='removeField()'>
    ";
        
        $__internal_a9345646eafe7fcbf936d3c5db946c7040f550641ad6904dbad6b264a9f0727c->leave($__internal_a9345646eafe7fcbf936d3c5db946c7040f550641ad6904dbad6b264a9f0727c_prof);

        
        $__internal_63f11010fff35b30a58d0da75e7e1eec27dc3f5bce617781b1fbe7a64e9d3e99->leave($__internal_63f11010fff35b30a58d0da75e7e1eec27dc3f5bce617781b1fbe7a64e9d3e99_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c80338722dd117b288add4a01fc47d93ccd46e0b55dd7185d5b7bbb6b410d670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80338722dd117b288add4a01fc47d93ccd46e0b55dd7185d5b7bbb6b410d670->enter($__internal_c80338722dd117b288add4a01fc47d93ccd46e0b55dd7185d5b7bbb6b410d670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a7fc5376ab6e436b0f12236e45f0a751abea64f98dbbfda6b516ae16c1221e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fc5376ab6e436b0f12236e45f0a751abea64f98dbbfda6b516ae16c1221e44->enter($__internal_a7fc5376ab6e436b0f12236e45f0a751abea64f98dbbfda6b516ae16c1221e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "        <script>
            var emailList = document.getElementById('addEmailId');
            function addField(field)
            {
                alert('field.data-prototype');
            }
        ";
        // line 58
        echo "    
        </script>
    ";
        
        $__internal_a7fc5376ab6e436b0f12236e45f0a751abea64f98dbbfda6b516ae16c1221e44->leave($__internal_a7fc5376ab6e436b0f12236e45f0a751abea64f98dbbfda6b516ae16c1221e44_prof);

        
        $__internal_c80338722dd117b288add4a01fc47d93ccd46e0b55dd7185d5b7bbb6b410d670->leave($__internal_c80338722dd117b288add4a01fc47d93ccd46e0b55dd7185d5b7bbb6b410d670_prof);

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
        return array (  200 => 58,  192 => 28,  183 => 27,  170 => 24,  167 => 23,  159 => 21,  154 => 20,  150 => 19,  144 => 17,  135 => 16,  122 => 14,  113 => 13,  102 => 27,  99 => 16,  96 => 13,  87 => 12,  73 => 5,  54 => 4,  45 => 3,  11 => 1,);
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
        {{ form_label(form.emailIds) }}
        
        {% for emailField in form.emailIds %}
            {{ form_widget(emailField) }}
            {{ form_errors(emailField) }}
        {% endfor %}
        <input type='button' id='addEmailId' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.emailIds.vars.prototype)|e}}\">
        <input type='button' id='removeEmailId' value='-' onclick='removeField()'>
    {% endblock %}
    {% block javascripts %}
        <script>
            var emailList = document.getElementById('addEmailId');
            function addField(field)
            {
                alert('field.data-prototype');
            }
        {# // keep track of how many email fields have been rendered
    var emailCount = '{{ form.emailIds|length }}';

    jQuery(document).ready(function() {
        jQuery('#add-another-email').click(function(e) {
            console.log(e);
            e.preventDefault();
            console.log(emailCount);

            var emailList = jQuery('#email-fields-list');
            console.log(emailList);
            // grab the prototype template
            var newWidget = emailList.attr('data-prototype');
            console.log(newWidget);
            // replace the \"__name__\" used in the id and name of the prototype
            // with a number that's unique to your emails
            // end name attribute looks like name=\"contact[emails][2]\"
            newWidget = newWidget.replace(/__name__/g, emailCount);
            emailCount++;

            // create a new list element and add it to the list
            var newLi = jQuery('<li></li>').html(newWidget);
            newLi.appendTo(emailList);
        });
    })#}    
        </script>
    {% endblock %}
{% endblock %}", "UserBundle:User:new.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/new.html.twig");
    }
}
