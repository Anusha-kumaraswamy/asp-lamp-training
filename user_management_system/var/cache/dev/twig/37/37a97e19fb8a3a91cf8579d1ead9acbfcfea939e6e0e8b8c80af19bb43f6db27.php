<?php

/* UserBundle:User:userProfile.html.twig */
class __TwigTemplate_b565221dea81da4c374f07d9f1675ae9f0cb571fba6f55f04085d78ad486fedf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:userProfile.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'table' => array($this, 'block_table'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1740f7c5392a65175794d01131f2b3e2152b15c73a2e8ab303feca92870f558b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1740f7c5392a65175794d01131f2b3e2152b15c73a2e8ab303feca92870f558b->enter($__internal_1740f7c5392a65175794d01131f2b3e2152b15c73a2e8ab303feca92870f558b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $__internal_66dbad556dc9ae54ad5904f144a6feef8b6fd70668546e967f3642f52f01fd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66dbad556dc9ae54ad5904f144a6feef8b6fd70668546e967f3642f52f01fd12->enter($__internal_66dbad556dc9ae54ad5904f144a6feef8b6fd70668546e967f3642f52f01fd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1740f7c5392a65175794d01131f2b3e2152b15c73a2e8ab303feca92870f558b->leave($__internal_1740f7c5392a65175794d01131f2b3e2152b15c73a2e8ab303feca92870f558b_prof);

        
        $__internal_66dbad556dc9ae54ad5904f144a6feef8b6fd70668546e967f3642f52f01fd12->leave($__internal_66dbad556dc9ae54ad5904f144a6feef8b6fd70668546e967f3642f52f01fd12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_024fce951065821a3c940606e30c8f792776a0290a0dc2690bc2f0043d7ec780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_024fce951065821a3c940606e30c8f792776a0290a0dc2690bc2f0043d7ec780->enter($__internal_024fce951065821a3c940606e30c8f792776a0290a0dc2690bc2f0043d7ec780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_034a4cf66b9f0f578ac1c1e0ef5deeac721a169ee45e8edbd6221743c56c4b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034a4cf66b9f0f578ac1c1e0ef5deeac721a169ee45e8edbd6221743c56c4b0f->enter($__internal_034a4cf66b9f0f578ac1c1e0ef5deeac721a169ee45e8edbd6221743c56c4b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_034a4cf66b9f0f578ac1c1e0ef5deeac721a169ee45e8edbd6221743c56c4b0f->leave($__internal_034a4cf66b9f0f578ac1c1e0ef5deeac721a169ee45e8edbd6221743c56c4b0f_prof);

        
        $__internal_024fce951065821a3c940606e30c8f792776a0290a0dc2690bc2f0043d7ec780->leave($__internal_024fce951065821a3c940606e30c8f792776a0290a0dc2690bc2f0043d7ec780_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3dcab8b0bb4eee74673b6654fb5da7bdb4015a71ec050c3b175925ece61b7a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3dcab8b0bb4eee74673b6654fb5da7bdb4015a71ec050c3b175925ece61b7a9->enter($__internal_f3dcab8b0bb4eee74673b6654fb5da7bdb4015a71ec050c3b175925ece61b7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_22d4b528034a8e77aa21bfd5120a80b6c6c19eb38560bce2e36897f000b9359c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d4b528034a8e77aa21bfd5120a80b6c6c19eb38560bce2e36897f000b9359c->enter($__internal_22d4b528034a8e77aa21bfd5120a80b6c6c19eb38560bce2e36897f000b9359c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_22d4b528034a8e77aa21bfd5120a80b6c6c19eb38560bce2e36897f000b9359c->leave($__internal_22d4b528034a8e77aa21bfd5120a80b6c6c19eb38560bce2e36897f000b9359c_prof);

        
        $__internal_f3dcab8b0bb4eee74673b6654fb5da7bdb4015a71ec050c3b175925ece61b7a9->leave($__internal_f3dcab8b0bb4eee74673b6654fb5da7bdb4015a71ec050c3b175925ece61b7a9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1b02ca51e220db7bb578a14a31452d707e25de41da464fcf3bdfe440d53b10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b02ca51e220db7bb578a14a31452d707e25de41da464fcf3bdfe440d53b10b->enter($__internal_b1b02ca51e220db7bb578a14a31452d707e25de41da464fcf3bdfe440d53b10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a6f5653fd60a758c0aa2866942922a98d2c63e89fa05d9be8bfcc9f73d14db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6f5653fd60a758c0aa2866942922a98d2c63e89fa05d9be8bfcc9f73d14db8->enter($__internal_6a6f5653fd60a758c0aa2866942922a98d2c63e89fa05d9be8bfcc9f73d14db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6a6f5653fd60a758c0aa2866942922a98d2c63e89fa05d9be8bfcc9f73d14db8->leave($__internal_6a6f5653fd60a758c0aa2866942922a98d2c63e89fa05d9be8bfcc9f73d14db8_prof);

        
        $__internal_b1b02ca51e220db7bb578a14a31452d707e25de41da464fcf3bdfe440d53b10b->leave($__internal_b1b02ca51e220db7bb578a14a31452d707e25de41da464fcf3bdfe440d53b10b_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_96b898805e3d9bd36a5c8eca6b73258dded62eafdce9e07bfac92796786e45f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b898805e3d9bd36a5c8eca6b73258dded62eafdce9e07bfac92796786e45f8->enter($__internal_96b898805e3d9bd36a5c8eca6b73258dded62eafdce9e07bfac92796786e45f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_061f305614b2ba65f07b0ba3a12d06afff15e977608912e7d4b9dc4fd97abf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061f305614b2ba65f07b0ba3a12d06afff15e977608912e7d4b9dc4fd97abf8d->enter($__internal_061f305614b2ba65f07b0ba3a12d06afff15e977608912e7d4b9dc4fd97abf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_061f305614b2ba65f07b0ba3a12d06afff15e977608912e7d4b9dc4fd97abf8d->leave($__internal_061f305614b2ba65f07b0ba3a12d06afff15e977608912e7d4b9dc4fd97abf8d_prof);

        
        $__internal_96b898805e3d9bd36a5c8eca6b73258dded62eafdce9e07bfac92796786e45f8->leave($__internal_96b898805e3d9bd36a5c8eca6b73258dded62eafdce9e07bfac92796786e45f8_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_51da3a228f1581e50b4bb0e32416c546b4426ad379d726664fcca2c6c3086b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51da3a228f1581e50b4bb0e32416c546b4426ad379d726664fcca2c6c3086b15->enter($__internal_51da3a228f1581e50b4bb0e32416c546b4426ad379d726664fcca2c6c3086b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_6d52c694979f57d1b971a16a5220feda82d94ab3c94196bb02a9101157942103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d52c694979f57d1b971a16a5220feda82d94ab3c94196bb02a9101157942103->enter($__internal_6d52c694979f57d1b971a16a5220feda82d94ab3c94196bb02a9101157942103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 14
        echo "        <table>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($context["entity"]));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 17
                echo "                    <tr>
                        <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_join_filter(twig_split_filter($this->env, $context["key"], "_"), " ")), "html", null, true);
                echo "</td>
                        <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], $context["key"], array(), "array"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </table>
    ";
        
        $__internal_6d52c694979f57d1b971a16a5220feda82d94ab3c94196bb02a9101157942103->leave($__internal_6d52c694979f57d1b971a16a5220feda82d94ab3c94196bb02a9101157942103_prof);

        
        $__internal_51da3a228f1581e50b4bb0e32416c546b4426ad379d726664fcca2c6c3086b15->leave($__internal_51da3a228f1581e50b4bb0e32416c546b4426ad379d726664fcca2c6c3086b15_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3accb87010661c16d298a1fc7b13c73bea89a428f7e673dbb8c6e2eba62572db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3accb87010661c16d298a1fc7b13c73bea89a428f7e673dbb8c6e2eba62572db->enter($__internal_3accb87010661c16d298a1fc7b13c73bea89a428f7e673dbb8c6e2eba62572db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_12b43a954884dec8c37e3054bf93e312581d050557a24ace5ab647d8ce2474cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b43a954884dec8c37e3054bf93e312581d050557a24ace5ab647d8ce2474cf->enter($__internal_12b43a954884dec8c37e3054bf93e312581d050557a24ace5ab647d8ce2474cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/js/createTable.js"), "html", null, true);
        echo "\">            
        </script>
    ";
        
        $__internal_12b43a954884dec8c37e3054bf93e312581d050557a24ace5ab647d8ce2474cf->leave($__internal_12b43a954884dec8c37e3054bf93e312581d050557a24ace5ab647d8ce2474cf_prof);

        
        $__internal_3accb87010661c16d298a1fc7b13c73bea89a428f7e673dbb8c6e2eba62572db->leave($__internal_3accb87010661c16d298a1fc7b13c73bea89a428f7e673dbb8c6e2eba62572db_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:userProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 26,  188 => 25,  177 => 23,  171 => 22,  162 => 19,  158 => 18,  155 => 17,  150 => 16,  146 => 15,  143 => 14,  134 => 13,  121 => 11,  112 => 10,  101 => 25,  98 => 13,  95 => 10,  86 => 9,  73 => 5,  54 => 4,  45 => 3,  11 => 1,);
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
    {{ parent() }}
    {% endblock %}
{% endblock %}

{% block body %}
    {% block navbar %}
        {{ parent() }}
    {% endblock %}
    {% block table %}
        <table>
            {% for entity in entities %}
                {% for key in entity|keys %}
                    <tr>
                        <td>{{(key|split('_'))|join(' ')|capitalize}}</td>
                        <td>{{entity[key]}}</td>
                    </tr>
                {% endfor %}
            {% endfor %}
        </table>
    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('bundles/user/js/createTable.js') }}\">            
        </script>
    {% endblock %}
{% endblock %}", "UserBundle:User:userProfile.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/userProfile.html.twig");
    }
}
