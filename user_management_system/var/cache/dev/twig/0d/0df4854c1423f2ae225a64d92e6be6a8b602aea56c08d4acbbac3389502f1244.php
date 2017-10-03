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
        $__internal_528ec9d614598eb6927c2f1c09afc60f75a438343429f7dcf6e8ab097f3cd6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528ec9d614598eb6927c2f1c09afc60f75a438343429f7dcf6e8ab097f3cd6e1->enter($__internal_528ec9d614598eb6927c2f1c09afc60f75a438343429f7dcf6e8ab097f3cd6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $__internal_038780ecdeb83fcbf0d0e9e721302f2f7cc52d493476e5bfd3ad6331858dccf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038780ecdeb83fcbf0d0e9e721302f2f7cc52d493476e5bfd3ad6331858dccf3->enter($__internal_038780ecdeb83fcbf0d0e9e721302f2f7cc52d493476e5bfd3ad6331858dccf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_528ec9d614598eb6927c2f1c09afc60f75a438343429f7dcf6e8ab097f3cd6e1->leave($__internal_528ec9d614598eb6927c2f1c09afc60f75a438343429f7dcf6e8ab097f3cd6e1_prof);

        
        $__internal_038780ecdeb83fcbf0d0e9e721302f2f7cc52d493476e5bfd3ad6331858dccf3->leave($__internal_038780ecdeb83fcbf0d0e9e721302f2f7cc52d493476e5bfd3ad6331858dccf3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e405da0bbe4c0e90c8b72f6b9d9baad59929bba24ffe32587910902cd67cf274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e405da0bbe4c0e90c8b72f6b9d9baad59929bba24ffe32587910902cd67cf274->enter($__internal_e405da0bbe4c0e90c8b72f6b9d9baad59929bba24ffe32587910902cd67cf274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe1cbe2ab67e7555fe3b330666e6903685aa39825980b273a12587936e111253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1cbe2ab67e7555fe3b330666e6903685aa39825980b273a12587936e111253->enter($__internal_fe1cbe2ab67e7555fe3b330666e6903685aa39825980b273a12587936e111253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_fe1cbe2ab67e7555fe3b330666e6903685aa39825980b273a12587936e111253->leave($__internal_fe1cbe2ab67e7555fe3b330666e6903685aa39825980b273a12587936e111253_prof);

        
        $__internal_e405da0bbe4c0e90c8b72f6b9d9baad59929bba24ffe32587910902cd67cf274->leave($__internal_e405da0bbe4c0e90c8b72f6b9d9baad59929bba24ffe32587910902cd67cf274_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8dcc9a4d7240b7728051bc2b7ff1027c678a6c9e7ab309f47c75c537d8fd6a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcc9a4d7240b7728051bc2b7ff1027c678a6c9e7ab309f47c75c537d8fd6a77->enter($__internal_8dcc9a4d7240b7728051bc2b7ff1027c678a6c9e7ab309f47c75c537d8fd6a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cd681b4e7748d8fa9d5eb3d761fc3e07b5a06c3f5c800d2c7ea514df209502f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd681b4e7748d8fa9d5eb3d761fc3e07b5a06c3f5c800d2c7ea514df209502f3->enter($__internal_cd681b4e7748d8fa9d5eb3d761fc3e07b5a06c3f5c800d2c7ea514df209502f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_cd681b4e7748d8fa9d5eb3d761fc3e07b5a06c3f5c800d2c7ea514df209502f3->leave($__internal_cd681b4e7748d8fa9d5eb3d761fc3e07b5a06c3f5c800d2c7ea514df209502f3_prof);

        
        $__internal_8dcc9a4d7240b7728051bc2b7ff1027c678a6c9e7ab309f47c75c537d8fd6a77->leave($__internal_8dcc9a4d7240b7728051bc2b7ff1027c678a6c9e7ab309f47c75c537d8fd6a77_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_78e2206d40fe58b0194e670210829ae17ffb61dbc975189e189a591cf280b571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e2206d40fe58b0194e670210829ae17ffb61dbc975189e189a591cf280b571->enter($__internal_78e2206d40fe58b0194e670210829ae17ffb61dbc975189e189a591cf280b571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc9129153e7455c02f080f2e75411d32903d61468a170bb598e31127a2ddbb9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9129153e7455c02f080f2e75411d32903d61468a170bb598e31127a2ddbb9c->enter($__internal_dc9129153e7455c02f080f2e75411d32903d61468a170bb598e31127a2ddbb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_dc9129153e7455c02f080f2e75411d32903d61468a170bb598e31127a2ddbb9c->leave($__internal_dc9129153e7455c02f080f2e75411d32903d61468a170bb598e31127a2ddbb9c_prof);

        
        $__internal_78e2206d40fe58b0194e670210829ae17ffb61dbc975189e189a591cf280b571->leave($__internal_78e2206d40fe58b0194e670210829ae17ffb61dbc975189e189a591cf280b571_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_bbac7ef42e91a948ee44b762e04c32b16290f1a22b1768ec4230df7b8b17f641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbac7ef42e91a948ee44b762e04c32b16290f1a22b1768ec4230df7b8b17f641->enter($__internal_bbac7ef42e91a948ee44b762e04c32b16290f1a22b1768ec4230df7b8b17f641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_9ed0d2ebb98fe07652a1b95210b121e3d265cad1ccdb62bf2d958ef5c6ac50dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed0d2ebb98fe07652a1b95210b121e3d265cad1ccdb62bf2d958ef5c6ac50dd->enter($__internal_9ed0d2ebb98fe07652a1b95210b121e3d265cad1ccdb62bf2d958ef5c6ac50dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_9ed0d2ebb98fe07652a1b95210b121e3d265cad1ccdb62bf2d958ef5c6ac50dd->leave($__internal_9ed0d2ebb98fe07652a1b95210b121e3d265cad1ccdb62bf2d958ef5c6ac50dd_prof);

        
        $__internal_bbac7ef42e91a948ee44b762e04c32b16290f1a22b1768ec4230df7b8b17f641->leave($__internal_bbac7ef42e91a948ee44b762e04c32b16290f1a22b1768ec4230df7b8b17f641_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_67700acc343a2e6764472f5d83e0a59eedc296981360c4a9d961d1acae0f93b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67700acc343a2e6764472f5d83e0a59eedc296981360c4a9d961d1acae0f93b2->enter($__internal_67700acc343a2e6764472f5d83e0a59eedc296981360c4a9d961d1acae0f93b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_d1c9ba35762135e1a554874dad85e968cc28e8309a506332f4cdf7b4aa5205a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c9ba35762135e1a554874dad85e968cc28e8309a506332f4cdf7b4aa5205a1->enter($__internal_d1c9ba35762135e1a554874dad85e968cc28e8309a506332f4cdf7b4aa5205a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "gender", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "bloodGroup", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["interest"], "areaOfInterest", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["gradLevel"], "graduation", array()), "html", null, true);
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
        
        $__internal_d1c9ba35762135e1a554874dad85e968cc28e8309a506332f4cdf7b4aa5205a1->leave($__internal_d1c9ba35762135e1a554874dad85e968cc28e8309a506332f4cdf7b4aa5205a1_prof);

        
        $__internal_67700acc343a2e6764472f5d83e0a59eedc296981360c4a9d961d1acae0f93b2->leave($__internal_67700acc343a2e6764472f5d83e0a59eedc296981360c4a9d961d1acae0f93b2_prof);

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
                <td>{{ entities.gender }}</td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td>{{ entities.dateOfBirth|date('d-m-Y') }}</td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>{{ entities.bloodGroup }}</td>
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
                    <td>{{ interest.areaOfInterest }}</td>
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
                    <td>{{ gradLevel.graduation }}</td>
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
