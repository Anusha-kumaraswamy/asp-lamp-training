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
        $__internal_dd809c624762493f5d93061d55e70e4290a0ff36295335a40fb034186ab9b1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd809c624762493f5d93061d55e70e4290a0ff36295335a40fb034186ab9b1fe->enter($__internal_dd809c624762493f5d93061d55e70e4290a0ff36295335a40fb034186ab9b1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $__internal_4cdab5ac3eef736690d8c0cc071443e4a302c2d16fdcbf111d11e157b5b1889f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdab5ac3eef736690d8c0cc071443e4a302c2d16fdcbf111d11e157b5b1889f->enter($__internal_4cdab5ac3eef736690d8c0cc071443e4a302c2d16fdcbf111d11e157b5b1889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd809c624762493f5d93061d55e70e4290a0ff36295335a40fb034186ab9b1fe->leave($__internal_dd809c624762493f5d93061d55e70e4290a0ff36295335a40fb034186ab9b1fe_prof);

        
        $__internal_4cdab5ac3eef736690d8c0cc071443e4a302c2d16fdcbf111d11e157b5b1889f->leave($__internal_4cdab5ac3eef736690d8c0cc071443e4a302c2d16fdcbf111d11e157b5b1889f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18fa9cb948cda56c04f8a21be96e8624faf9e10a39cfcd5d0fc8da8b9bf80aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fa9cb948cda56c04f8a21be96e8624faf9e10a39cfcd5d0fc8da8b9bf80aa7->enter($__internal_18fa9cb948cda56c04f8a21be96e8624faf9e10a39cfcd5d0fc8da8b9bf80aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b00cbbdf311b9c8af503bd0ca81c638ece0a0eba6935d9f29be66f4b9f87886d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00cbbdf311b9c8af503bd0ca81c638ece0a0eba6935d9f29be66f4b9f87886d->enter($__internal_b00cbbdf311b9c8af503bd0ca81c638ece0a0eba6935d9f29be66f4b9f87886d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_b00cbbdf311b9c8af503bd0ca81c638ece0a0eba6935d9f29be66f4b9f87886d->leave($__internal_b00cbbdf311b9c8af503bd0ca81c638ece0a0eba6935d9f29be66f4b9f87886d_prof);

        
        $__internal_18fa9cb948cda56c04f8a21be96e8624faf9e10a39cfcd5d0fc8da8b9bf80aa7->leave($__internal_18fa9cb948cda56c04f8a21be96e8624faf9e10a39cfcd5d0fc8da8b9bf80aa7_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbebdc311b8e08fc54d10fbcb0c29e5553af8d1aed71d24cc7183cd5464750d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbebdc311b8e08fc54d10fbcb0c29e5553af8d1aed71d24cc7183cd5464750d2->enter($__internal_fbebdc311b8e08fc54d10fbcb0c29e5553af8d1aed71d24cc7183cd5464750d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4da5a615403a84b1f7ab67dd6b817131914042986b722900bb1302d7da849ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da5a615403a84b1f7ab67dd6b817131914042986b722900bb1302d7da849ee2->enter($__internal_4da5a615403a84b1f7ab67dd6b817131914042986b722900bb1302d7da849ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_4da5a615403a84b1f7ab67dd6b817131914042986b722900bb1302d7da849ee2->leave($__internal_4da5a615403a84b1f7ab67dd6b817131914042986b722900bb1302d7da849ee2_prof);

        
        $__internal_fbebdc311b8e08fc54d10fbcb0c29e5553af8d1aed71d24cc7183cd5464750d2->leave($__internal_fbebdc311b8e08fc54d10fbcb0c29e5553af8d1aed71d24cc7183cd5464750d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0c4b6aeed32314429ee2e581ec25bf9c2a0f4946714a16c52a6e53b45abed77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c4b6aeed32314429ee2e581ec25bf9c2a0f4946714a16c52a6e53b45abed77->enter($__internal_b0c4b6aeed32314429ee2e581ec25bf9c2a0f4946714a16c52a6e53b45abed77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13acb04110410fd051245f0a38b04fe41f516ee8ada92dc0018ec6c633d677a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13acb04110410fd051245f0a38b04fe41f516ee8ada92dc0018ec6c633d677a5->enter($__internal_13acb04110410fd051245f0a38b04fe41f516ee8ada92dc0018ec6c633d677a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_13acb04110410fd051245f0a38b04fe41f516ee8ada92dc0018ec6c633d677a5->leave($__internal_13acb04110410fd051245f0a38b04fe41f516ee8ada92dc0018ec6c633d677a5_prof);

        
        $__internal_b0c4b6aeed32314429ee2e581ec25bf9c2a0f4946714a16c52a6e53b45abed77->leave($__internal_b0c4b6aeed32314429ee2e581ec25bf9c2a0f4946714a16c52a6e53b45abed77_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_fc03cfd5ef9b1ee66fffea183aae35cb544b739e4403ce564aaec102619b6407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc03cfd5ef9b1ee66fffea183aae35cb544b739e4403ce564aaec102619b6407->enter($__internal_fc03cfd5ef9b1ee66fffea183aae35cb544b739e4403ce564aaec102619b6407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_28aee51e8a4be7d9cfe38408af99967f7e09f7fadb1c7a9555e330afbc5246ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28aee51e8a4be7d9cfe38408af99967f7e09f7fadb1c7a9555e330afbc5246ef->enter($__internal_28aee51e8a4be7d9cfe38408af99967f7e09f7fadb1c7a9555e330afbc5246ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_28aee51e8a4be7d9cfe38408af99967f7e09f7fadb1c7a9555e330afbc5246ef->leave($__internal_28aee51e8a4be7d9cfe38408af99967f7e09f7fadb1c7a9555e330afbc5246ef_prof);

        
        $__internal_fc03cfd5ef9b1ee66fffea183aae35cb544b739e4403ce564aaec102619b6407->leave($__internal_fc03cfd5ef9b1ee66fffea183aae35cb544b739e4403ce564aaec102619b6407_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_f1ce0902385b98ad13254e08603657312f113c32016afcae08ade2cfa7026edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ce0902385b98ad13254e08603657312f113c32016afcae08ade2cfa7026edb->enter($__internal_f1ce0902385b98ad13254e08603657312f113c32016afcae08ade2cfa7026edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_c2a119ac2b53d8b48b1f5953b74648aade842e263f45e16e5a0b4143a6df3e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a119ac2b53d8b48b1f5953b74648aade842e263f45e16e5a0b4143a6df3e1e->enter($__internal_c2a119ac2b53d8b48b1f5953b74648aade842e263f45e16e5a0b4143a6df3e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        
        $__internal_c2a119ac2b53d8b48b1f5953b74648aade842e263f45e16e5a0b4143a6df3e1e->leave($__internal_c2a119ac2b53d8b48b1f5953b74648aade842e263f45e16e5a0b4143a6df3e1e_prof);

        
        $__internal_f1ce0902385b98ad13254e08603657312f113c32016afcae08ade2cfa7026edb->leave($__internal_f1ce0902385b98ad13254e08603657312f113c32016afcae08ade2cfa7026edb_prof);

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
