<?php

/* UserBundle:User:user.html.twig */
class __TwigTemplate_13a2e657cd507c4c419d447802d64ea6da5003dca1e756d841c4768d78d6a792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:user.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd7a8f6acc00870e4d21931d5c3492d60336ec718ff0e224a060ae3ab4e07be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7a8f6acc00870e4d21931d5c3492d60336ec718ff0e224a060ae3ab4e07be8->enter($__internal_fd7a8f6acc00870e4d21931d5c3492d60336ec718ff0e224a060ae3ab4e07be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $__internal_726b47b79cf7bdf8e7cd1d4d3078c5eef9423ee5326d332519b9854e78ffa7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726b47b79cf7bdf8e7cd1d4d3078c5eef9423ee5326d332519b9854e78ffa7f5->enter($__internal_726b47b79cf7bdf8e7cd1d4d3078c5eef9423ee5326d332519b9854e78ffa7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7a8f6acc00870e4d21931d5c3492d60336ec718ff0e224a060ae3ab4e07be8->leave($__internal_fd7a8f6acc00870e4d21931d5c3492d60336ec718ff0e224a060ae3ab4e07be8_prof);

        
        $__internal_726b47b79cf7bdf8e7cd1d4d3078c5eef9423ee5326d332519b9854e78ffa7f5->leave($__internal_726b47b79cf7bdf8e7cd1d4d3078c5eef9423ee5326d332519b9854e78ffa7f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab7e283c1aba3cfcadc032372955e1f3b7d24cce979d68cb9f9a7bbd0c8bdd3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7e283c1aba3cfcadc032372955e1f3b7d24cce979d68cb9f9a7bbd0c8bdd3b->enter($__internal_ab7e283c1aba3cfcadc032372955e1f3b7d24cce979d68cb9f9a7bbd0c8bdd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb264f02480290d1de2efc8a24ac170e72412a23ffa7aed0404bbae4b9adc0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb264f02480290d1de2efc8a24ac170e72412a23ffa7aed0404bbae4b9adc0d5->enter($__internal_bb264f02480290d1de2efc8a24ac170e72412a23ffa7aed0404bbae4b9adc0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_bb264f02480290d1de2efc8a24ac170e72412a23ffa7aed0404bbae4b9adc0d5->leave($__internal_bb264f02480290d1de2efc8a24ac170e72412a23ffa7aed0404bbae4b9adc0d5_prof);

        
        $__internal_ab7e283c1aba3cfcadc032372955e1f3b7d24cce979d68cb9f9a7bbd0c8bdd3b->leave($__internal_ab7e283c1aba3cfcadc032372955e1f3b7d24cce979d68cb9f9a7bbd0c8bdd3b_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a58c48a4fbf9c1c00cf37c6ebd20d98ba63c387f427ac28dae23bf93760aaf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a58c48a4fbf9c1c00cf37c6ebd20d98ba63c387f427ac28dae23bf93760aaf9->enter($__internal_2a58c48a4fbf9c1c00cf37c6ebd20d98ba63c387f427ac28dae23bf93760aaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_74b8fbae1c84808f137fd9291cd9f8bee75dcd73db00eb2c04fcff3291855ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b8fbae1c84808f137fd9291cd9f8bee75dcd73db00eb2c04fcff3291855ee5->enter($__internal_74b8fbae1c84808f137fd9291cd9f8bee75dcd73db00eb2c04fcff3291855ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_74b8fbae1c84808f137fd9291cd9f8bee75dcd73db00eb2c04fcff3291855ee5->leave($__internal_74b8fbae1c84808f137fd9291cd9f8bee75dcd73db00eb2c04fcff3291855ee5_prof);

        
        $__internal_2a58c48a4fbf9c1c00cf37c6ebd20d98ba63c387f427ac28dae23bf93760aaf9->leave($__internal_2a58c48a4fbf9c1c00cf37c6ebd20d98ba63c387f427ac28dae23bf93760aaf9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1ec07d2e40f9e6a3a739398a28276769c35b53e5718232a915a31034afbf298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ec07d2e40f9e6a3a739398a28276769c35b53e5718232a915a31034afbf298->enter($__internal_f1ec07d2e40f9e6a3a739398a28276769c35b53e5718232a915a31034afbf298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a48a31861d3ac0a0e667cdd499a12171a78e4008587931a78b324604f46f42bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48a31861d3ac0a0e667cdd499a12171a78e4008587931a78b324604f46f42bc->enter($__internal_a48a31861d3ac0a0e667cdd499a12171a78e4008587931a78b324604f46f42bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_a48a31861d3ac0a0e667cdd499a12171a78e4008587931a78b324604f46f42bc->leave($__internal_a48a31861d3ac0a0e667cdd499a12171a78e4008587931a78b324604f46f42bc_prof);

        
        $__internal_f1ec07d2e40f9e6a3a739398a28276769c35b53e5718232a915a31034afbf298->leave($__internal_f1ec07d2e40f9e6a3a739398a28276769c35b53e5718232a915a31034afbf298_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_4e50c5c857862e37583734c541968681b9cf6d36c9fe4f1974198ea1bf5d08d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e50c5c857862e37583734c541968681b9cf6d36c9fe4f1974198ea1bf5d08d1->enter($__internal_4e50c5c857862e37583734c541968681b9cf6d36c9fe4f1974198ea1bf5d08d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_ca8ac5b92072762d14bd258ccb0e1e5ccb2d347a18ff80bab02f0fad98f41935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8ac5b92072762d14bd258ccb0e1e5ccb2d347a18ff80bab02f0fad98f41935->enter($__internal_ca8ac5b92072762d14bd258ccb0e1e5ccb2d347a18ff80bab02f0fad98f41935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_ca8ac5b92072762d14bd258ccb0e1e5ccb2d347a18ff80bab02f0fad98f41935->leave($__internal_ca8ac5b92072762d14bd258ccb0e1e5ccb2d347a18ff80bab02f0fad98f41935_prof);

        
        $__internal_4e50c5c857862e37583734c541968681b9cf6d36c9fe4f1974198ea1bf5d08d1->leave($__internal_4e50c5c857862e37583734c541968681b9cf6d36c9fe4f1974198ea1bf5d08d1_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_dac67cdeaa9482d393286c6ace1aad509653ed542126bd0dfe85515fe746a279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac67cdeaa9482d393286c6ace1aad509653ed542126bd0dfe85515fe746a279->enter($__internal_dac67cdeaa9482d393286c6ace1aad509653ed542126bd0dfe85515fe746a279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_f76ecbd3df2a0e6a35ef4e1c229dfd824bc0fea8c56f7a37a68f93c3a49f0be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76ecbd3df2a0e6a35ef4e1c229dfd824bc0fea8c56f7a37a68f93c3a49f0be4->enter($__internal_f76ecbd3df2a0e6a35ef4e1c229dfd824bc0fea8c56f7a37a68f93c3a49f0be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 14
        echo "        <table border=\"ridge\">
            <tr>
                <td>Id</td>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Login Name</td>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "loginName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "gender", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "dateOfBirth", array()), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "bloodGroup", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <br>
        <table border=\"ridge\">
            <tr>
                <td>Email Address</td>
            </tr>
            
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "emailIds", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emails"]) {
            // line 51
            echo "                    <tr>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["emails"], "email", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emails'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            
        </table>
        <br>
        <table border=\"ridge\">
            <tr>
                <td>Contact Numbers</td>
            </tr>
            
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "mobileNumbers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["numbers"]) {
            // line 64
            echo "                    <tr>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["numbers"], "number", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numbers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            
        </table>
        <br>
        <table border=\"ridge\">
            <tr>
                <td>Area Of Interest</td>
            </tr>
            
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 77
            echo "                    <tr>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["interest"], "areaOfInterest", array()), "name", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            
        </table>
        <br>
        <table border=\"ridge\">
            <tr>
                <td>Graduation</td>
                <td>Institute Name</td>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "education", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gradLevel"]) {
            // line 89
            echo "                <tr>
                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gradLevel"], "graduation", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["gradLevel"], "instituteName", array()), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gradLevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            </tr>
        </table>        
        <br>
        <input type=\"button\" value=\"Edit\" onclick=\"location.href='/users/edit/";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "id", array()), "html", null, true);
        echo "'\">
    ";
        
        $__internal_f76ecbd3df2a0e6a35ef4e1c229dfd824bc0fea8c56f7a37a68f93c3a49f0be4->leave($__internal_f76ecbd3df2a0e6a35ef4e1c229dfd824bc0fea8c56f7a37a68f93c3a49f0be4_prof);

        
        $__internal_dac67cdeaa9482d393286c6ace1aad509653ed542126bd0dfe85515fe746a279->leave($__internal_dac67cdeaa9482d393286c6ace1aad509653ed542126bd0dfe85515fe746a279_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 97,  295 => 94,  286 => 91,  282 => 90,  279 => 89,  275 => 88,  266 => 81,  257 => 78,  254 => 77,  250 => 76,  240 => 68,  231 => 65,  228 => 64,  224 => 63,  214 => 55,  205 => 52,  202 => 51,  198 => 50,  186 => 41,  179 => 37,  172 => 33,  165 => 29,  158 => 25,  151 => 21,  144 => 17,  139 => 14,  130 => 13,  117 => 11,  108 => 10,  97 => 13,  94 => 10,  85 => 9,  72 => 5,  53 => 4,  44 => 3,  11 => 1,);
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
        <table border=\"ridge\">
            <tr>
                <td>Id</td>
                <td>{{ entities.id }}</td>
            </tr>
            <tr>
                <td>Login Name</td>
                <td>{{ entities.loginName }}</td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>{{ entities.firstName }}</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>{{ entities.lastName }}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>{{ entities.gender.name }}</td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td>{{ entities.dateOfBirth|date('d-m-Y') }}</td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>{{ entities.bloodGroup.name }}</td>
            </tr>
        </table>
        <br>
        <table border=\"ridge\">
            <tr>
                <td>Email Address</td>
            </tr>
            
                {% for emails in entities.emailIds %}
                    <tr>
                    <td>{{ emails.email }}</td>
                    </tr>
                {% endfor %}
            
        </table>
        <br>
        <table border=\"ridge\">
            <tr>
                <td>Contact Numbers</td>
            </tr>
            
                {% for numbers in entities.mobileNumbers %}
                    <tr>
                    <td>{{ numbers.number }}</td>
                    </tr>
                {% endfor %}
            
        </table>
        <br>
        <table border=\"ridge\">
            <tr>
                <td>Area Of Interest</td>
            </tr>
            
                {% for interest in entities.interests %}
                    <tr>
                    <td>{{ interest.areaOfInterest.name }}</td>
                    </tr>
                {% endfor %}
            
        </table>
        <br>
        <table border=\"ridge\">
            <tr>
                <td>Graduation</td>
                <td>Institute Name</td>
                {% for gradLevel in entities.education %}
                <tr>
                    <td>{{ gradLevel.graduation.name }}</td>
                    <td>{{ gradLevel.instituteName }}</td>
                </tr>
                {% endfor %}
            </tr>
        </table>        
        <br>
        <input type=\"button\" value=\"Edit\" onclick=\"location.href='/users/edit/{{ entities.id }}'\">
    {% endblock %}
{% endblock %}
", "UserBundle:User:user.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/user.html.twig");
    }
}
