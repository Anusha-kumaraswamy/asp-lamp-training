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
        $__internal_d8fbb76c39fb00d0e0afa1b1335b62e9dd5b9b625f251768261b4f7c685fec8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fbb76c39fb00d0e0afa1b1335b62e9dd5b9b625f251768261b4f7c685fec8e->enter($__internal_d8fbb76c39fb00d0e0afa1b1335b62e9dd5b9b625f251768261b4f7c685fec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $__internal_7e09b26d3cbfcb3cdc30041fa8f990adf44fdeebaa390fb200900ebf461ef943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e09b26d3cbfcb3cdc30041fa8f990adf44fdeebaa390fb200900ebf461ef943->enter($__internal_7e09b26d3cbfcb3cdc30041fa8f990adf44fdeebaa390fb200900ebf461ef943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8fbb76c39fb00d0e0afa1b1335b62e9dd5b9b625f251768261b4f7c685fec8e->leave($__internal_d8fbb76c39fb00d0e0afa1b1335b62e9dd5b9b625f251768261b4f7c685fec8e_prof);

        
        $__internal_7e09b26d3cbfcb3cdc30041fa8f990adf44fdeebaa390fb200900ebf461ef943->leave($__internal_7e09b26d3cbfcb3cdc30041fa8f990adf44fdeebaa390fb200900ebf461ef943_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0496aad0d3ead00bbaf8c46ec5fce92eec982293e6d0e44169d4b808bc626468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0496aad0d3ead00bbaf8c46ec5fce92eec982293e6d0e44169d4b808bc626468->enter($__internal_0496aad0d3ead00bbaf8c46ec5fce92eec982293e6d0e44169d4b808bc626468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_06f99ebe3789826d2f4a44f3ef288f3d7371b1f813d8621103bd517224b8d76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f99ebe3789826d2f4a44f3ef288f3d7371b1f813d8621103bd517224b8d76f->enter($__internal_06f99ebe3789826d2f4a44f3ef288f3d7371b1f813d8621103bd517224b8d76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_06f99ebe3789826d2f4a44f3ef288f3d7371b1f813d8621103bd517224b8d76f->leave($__internal_06f99ebe3789826d2f4a44f3ef288f3d7371b1f813d8621103bd517224b8d76f_prof);

        
        $__internal_0496aad0d3ead00bbaf8c46ec5fce92eec982293e6d0e44169d4b808bc626468->leave($__internal_0496aad0d3ead00bbaf8c46ec5fce92eec982293e6d0e44169d4b808bc626468_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a70570735269c774432e174c539b85aab92ef5bf7c00a3f991a7aaaf8bfa99a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70570735269c774432e174c539b85aab92ef5bf7c00a3f991a7aaaf8bfa99a3->enter($__internal_a70570735269c774432e174c539b85aab92ef5bf7c00a3f991a7aaaf8bfa99a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_89b199dfa58e39fcb54582f001cedc325c3ff9fe7b3b151f8ab7112472dee0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b199dfa58e39fcb54582f001cedc325c3ff9fe7b3b151f8ab7112472dee0be->enter($__internal_89b199dfa58e39fcb54582f001cedc325c3ff9fe7b3b151f8ab7112472dee0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_89b199dfa58e39fcb54582f001cedc325c3ff9fe7b3b151f8ab7112472dee0be->leave($__internal_89b199dfa58e39fcb54582f001cedc325c3ff9fe7b3b151f8ab7112472dee0be_prof);

        
        $__internal_a70570735269c774432e174c539b85aab92ef5bf7c00a3f991a7aaaf8bfa99a3->leave($__internal_a70570735269c774432e174c539b85aab92ef5bf7c00a3f991a7aaaf8bfa99a3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ca6ba970ad6c95dae1f5285c1639948743d4019b47670c6aea8c5c5717d0691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca6ba970ad6c95dae1f5285c1639948743d4019b47670c6aea8c5c5717d0691->enter($__internal_2ca6ba970ad6c95dae1f5285c1639948743d4019b47670c6aea8c5c5717d0691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2b65b95f47bbb956dd1d0b6c43339471fcbb69865829b3c50cb9ee31186b53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b65b95f47bbb956dd1d0b6c43339471fcbb69865829b3c50cb9ee31186b53d->enter($__internal_e2b65b95f47bbb956dd1d0b6c43339471fcbb69865829b3c50cb9ee31186b53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_e2b65b95f47bbb956dd1d0b6c43339471fcbb69865829b3c50cb9ee31186b53d->leave($__internal_e2b65b95f47bbb956dd1d0b6c43339471fcbb69865829b3c50cb9ee31186b53d_prof);

        
        $__internal_2ca6ba970ad6c95dae1f5285c1639948743d4019b47670c6aea8c5c5717d0691->leave($__internal_2ca6ba970ad6c95dae1f5285c1639948743d4019b47670c6aea8c5c5717d0691_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_2daf98ba3b8c9dc91563c4b37351f39185980b0732037a01e9c3cf6e833d817b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2daf98ba3b8c9dc91563c4b37351f39185980b0732037a01e9c3cf6e833d817b->enter($__internal_2daf98ba3b8c9dc91563c4b37351f39185980b0732037a01e9c3cf6e833d817b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_808cdf76fb2265522866200e4d6de683f94b8b00c2f7590f899579bafcc59290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808cdf76fb2265522866200e4d6de683f94b8b00c2f7590f899579bafcc59290->enter($__internal_808cdf76fb2265522866200e4d6de683f94b8b00c2f7590f899579bafcc59290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_808cdf76fb2265522866200e4d6de683f94b8b00c2f7590f899579bafcc59290->leave($__internal_808cdf76fb2265522866200e4d6de683f94b8b00c2f7590f899579bafcc59290_prof);

        
        $__internal_2daf98ba3b8c9dc91563c4b37351f39185980b0732037a01e9c3cf6e833d817b->leave($__internal_2daf98ba3b8c9dc91563c4b37351f39185980b0732037a01e9c3cf6e833d817b_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_8d789650e4484784218ac659ac96c4767998babe9970457c1da7e30cc5c64ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d789650e4484784218ac659ac96c4767998babe9970457c1da7e30cc5c64ec1->enter($__internal_8d789650e4484784218ac659ac96c4767998babe9970457c1da7e30cc5c64ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_c99d28f7df61bb05d62afee3ce29abea8aa2c5c3f82321220b8e7a97a694c07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99d28f7df61bb05d62afee3ce29abea8aa2c5c3f82321220b8e7a97a694c07a->enter($__internal_c99d28f7df61bb05d62afee3ce29abea8aa2c5c3f82321220b8e7a97a694c07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

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
        
        $__internal_c99d28f7df61bb05d62afee3ce29abea8aa2c5c3f82321220b8e7a97a694c07a->leave($__internal_c99d28f7df61bb05d62afee3ce29abea8aa2c5c3f82321220b8e7a97a694c07a_prof);

        
        $__internal_8d789650e4484784218ac659ac96c4767998babe9970457c1da7e30cc5c64ec1->leave($__internal_8d789650e4484784218ac659ac96c4767998babe9970457c1da7e30cc5c64ec1_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7434a8d07d892725ea2fed8618c2f83cbc8000d7aac3fe1567420460dd0c695a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7434a8d07d892725ea2fed8618c2f83cbc8000d7aac3fe1567420460dd0c695a->enter($__internal_7434a8d07d892725ea2fed8618c2f83cbc8000d7aac3fe1567420460dd0c695a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4ff06e47164c92161463b822e67aae6b70b7afc8a37abefe2dee7e17d5c7bc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff06e47164c92161463b822e67aae6b70b7afc8a37abefe2dee7e17d5c7bc74->enter($__internal_4ff06e47164c92161463b822e67aae6b70b7afc8a37abefe2dee7e17d5c7bc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "        <script>
            function addField(field)
            {
                var newField = field.getAttribute('data-prototype');
                
            }
        ";
        // line 58
        echo "    
        </script>
    ";
        
        $__internal_4ff06e47164c92161463b822e67aae6b70b7afc8a37abefe2dee7e17d5c7bc74->leave($__internal_4ff06e47164c92161463b822e67aae6b70b7afc8a37abefe2dee7e17d5c7bc74_prof);

        
        $__internal_7434a8d07d892725ea2fed8618c2f83cbc8000d7aac3fe1567420460dd0c695a->leave($__internal_7434a8d07d892725ea2fed8618c2f83cbc8000d7aac3fe1567420460dd0c695a_prof);

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
            function addField(field)
            {
                var newField = field.getAttribute('data-prototype');
                
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
