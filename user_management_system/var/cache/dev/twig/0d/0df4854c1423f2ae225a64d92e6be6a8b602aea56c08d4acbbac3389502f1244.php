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
        $__internal_3214e7e18fc7842883b947b15c1e98519ec81a100dde94cfc1ad790e9a0f6dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3214e7e18fc7842883b947b15c1e98519ec81a100dde94cfc1ad790e9a0f6dcc->enter($__internal_3214e7e18fc7842883b947b15c1e98519ec81a100dde94cfc1ad790e9a0f6dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $__internal_20e88da691b186cdec2cbf815650735abb04fef7e86968124edb8a6b39e4adce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e88da691b186cdec2cbf815650735abb04fef7e86968124edb8a6b39e4adce->enter($__internal_20e88da691b186cdec2cbf815650735abb04fef7e86968124edb8a6b39e4adce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3214e7e18fc7842883b947b15c1e98519ec81a100dde94cfc1ad790e9a0f6dcc->leave($__internal_3214e7e18fc7842883b947b15c1e98519ec81a100dde94cfc1ad790e9a0f6dcc_prof);

        
        $__internal_20e88da691b186cdec2cbf815650735abb04fef7e86968124edb8a6b39e4adce->leave($__internal_20e88da691b186cdec2cbf815650735abb04fef7e86968124edb8a6b39e4adce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0990aceba047e9d7cf9b0aa95a5d4a96aa01ca4d8e36aee6e91e37d35534a4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0990aceba047e9d7cf9b0aa95a5d4a96aa01ca4d8e36aee6e91e37d35534a4ea->enter($__internal_0990aceba047e9d7cf9b0aa95a5d4a96aa01ca4d8e36aee6e91e37d35534a4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2e38a405a3352a2b1597898fc2db30a5d738634c9b08f744796909023167e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e38a405a3352a2b1597898fc2db30a5d738634c9b08f744796909023167e07->enter($__internal_e2e38a405a3352a2b1597898fc2db30a5d738634c9b08f744796909023167e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_e2e38a405a3352a2b1597898fc2db30a5d738634c9b08f744796909023167e07->leave($__internal_e2e38a405a3352a2b1597898fc2db30a5d738634c9b08f744796909023167e07_prof);

        
        $__internal_0990aceba047e9d7cf9b0aa95a5d4a96aa01ca4d8e36aee6e91e37d35534a4ea->leave($__internal_0990aceba047e9d7cf9b0aa95a5d4a96aa01ca4d8e36aee6e91e37d35534a4ea_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_640fd0a9312a91db0ceb1832ba85d8ef6cc6077e238f603e6807b393d42deb01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640fd0a9312a91db0ceb1832ba85d8ef6cc6077e238f603e6807b393d42deb01->enter($__internal_640fd0a9312a91db0ceb1832ba85d8ef6cc6077e238f603e6807b393d42deb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8cc51260a9655d9d005eafd84feb4745bba20455c556f5e71d9e4dc4d0687c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc51260a9655d9d005eafd84feb4745bba20455c556f5e71d9e4dc4d0687c3b->enter($__internal_8cc51260a9655d9d005eafd84feb4745bba20455c556f5e71d9e4dc4d0687c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_8cc51260a9655d9d005eafd84feb4745bba20455c556f5e71d9e4dc4d0687c3b->leave($__internal_8cc51260a9655d9d005eafd84feb4745bba20455c556f5e71d9e4dc4d0687c3b_prof);

        
        $__internal_640fd0a9312a91db0ceb1832ba85d8ef6cc6077e238f603e6807b393d42deb01->leave($__internal_640fd0a9312a91db0ceb1832ba85d8ef6cc6077e238f603e6807b393d42deb01_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_15edf3a461bff5a4f8c13e86c2b1d66cae13eb2afe2610343ff4e6522fec83e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15edf3a461bff5a4f8c13e86c2b1d66cae13eb2afe2610343ff4e6522fec83e4->enter($__internal_15edf3a461bff5a4f8c13e86c2b1d66cae13eb2afe2610343ff4e6522fec83e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ac809012e92e29f3cbfe0c86dc611bac8931694d4a87255a1ccdf80eefad7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac809012e92e29f3cbfe0c86dc611bac8931694d4a87255a1ccdf80eefad7c7->enter($__internal_9ac809012e92e29f3cbfe0c86dc611bac8931694d4a87255a1ccdf80eefad7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_9ac809012e92e29f3cbfe0c86dc611bac8931694d4a87255a1ccdf80eefad7c7->leave($__internal_9ac809012e92e29f3cbfe0c86dc611bac8931694d4a87255a1ccdf80eefad7c7_prof);

        
        $__internal_15edf3a461bff5a4f8c13e86c2b1d66cae13eb2afe2610343ff4e6522fec83e4->leave($__internal_15edf3a461bff5a4f8c13e86c2b1d66cae13eb2afe2610343ff4e6522fec83e4_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_a339c11bce8fb1d95766a60de06d4649a392ab9999ea313b0bb0b2159d1ccb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a339c11bce8fb1d95766a60de06d4649a392ab9999ea313b0bb0b2159d1ccb69->enter($__internal_a339c11bce8fb1d95766a60de06d4649a392ab9999ea313b0bb0b2159d1ccb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_39f8f88c89d4ec3a5ace34e827c8f8b3601051650f3e069b91d8ed0dc9fbe5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f8f88c89d4ec3a5ace34e827c8f8b3601051650f3e069b91d8ed0dc9fbe5a6->enter($__internal_39f8f88c89d4ec3a5ace34e827c8f8b3601051650f3e069b91d8ed0dc9fbe5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_39f8f88c89d4ec3a5ace34e827c8f8b3601051650f3e069b91d8ed0dc9fbe5a6->leave($__internal_39f8f88c89d4ec3a5ace34e827c8f8b3601051650f3e069b91d8ed0dc9fbe5a6_prof);

        
        $__internal_a339c11bce8fb1d95766a60de06d4649a392ab9999ea313b0bb0b2159d1ccb69->leave($__internal_a339c11bce8fb1d95766a60de06d4649a392ab9999ea313b0bb0b2159d1ccb69_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_49cc5cca895c259ce2dfb2974aad7097f1fe9517ee1fbc11034558ca8cea9ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cc5cca895c259ce2dfb2974aad7097f1fe9517ee1fbc11034558ca8cea9ea0->enter($__internal_49cc5cca895c259ce2dfb2974aad7097f1fe9517ee1fbc11034558ca8cea9ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_f457b7b0526a6acb98cb320d4a8a30aefe39f3727eadcb53d3e2e1b8562d9eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f457b7b0526a6acb98cb320d4a8a30aefe39f3727eadcb53d3e2e1b8562d9eba->enter($__internal_f457b7b0526a6acb98cb320d4a8a30aefe39f3727eadcb53d3e2e1b8562d9eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 14
        echo "        <table>
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
        <table>
            <tr>
                <td>Area Of Interest</td>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 48
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["interest"], "areaOfInterest", array()), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tr>
        </table>
        <table>
            <tr>
                <td>Graduation</td>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "education", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gradLevel"]) {
            // line 56
            echo "                <tr>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["gradLevel"], "graduation", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["gradLevel"], "instituteName", array()), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gradLevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </tr>
        </table>        
        <input type=\"button\" value=\"Edit\" onclick=\"location.href='/users/edit/";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "id", array()), "html", null, true);
        echo "'\">
    ";
        
        $__internal_f457b7b0526a6acb98cb320d4a8a30aefe39f3727eadcb53d3e2e1b8562d9eba->leave($__internal_f457b7b0526a6acb98cb320d4a8a30aefe39f3727eadcb53d3e2e1b8562d9eba_prof);

        
        $__internal_49cc5cca895c259ce2dfb2974aad7097f1fe9517ee1fbc11034558ca8cea9ea0->leave($__internal_49cc5cca895c259ce2dfb2974aad7097f1fe9517ee1fbc11034558ca8cea9ea0_prof);

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
        return array (  239 => 63,  235 => 61,  226 => 58,  222 => 57,  219 => 56,  215 => 55,  208 => 50,  199 => 48,  195 => 47,  186 => 41,  179 => 37,  172 => 33,  165 => 29,  158 => 25,  151 => 21,  144 => 17,  139 => 14,  130 => 13,  117 => 11,  108 => 10,  97 => 13,  94 => 10,  85 => 9,  72 => 5,  53 => 4,  44 => 3,  11 => 1,);
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
        <table>
            <tr>
                <td>Area Of Interest</td>
                {% for interest in entities.interests %}
                    <td>{{ interest.areaOfInterest }}</td>
                {% endfor %}
            </tr>
        </table>
        <table>
            <tr>
                <td>Graduation</td>
                {% for gradLevel in entities.education %}
                <tr>
                    <td>{{ gradLevel.graduation }}</td>
                    <td>{{ gradLevel.instituteName }}</td>
                </tr>
                {% endfor %}
            </tr>
        </table>        
        <input type=\"button\" value=\"Edit\" onclick=\"location.href='/users/edit/{{ entities.id }}'\">
    {% endblock %}
{% endblock %}
", "UserBundle:User:user.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/user.html.twig");
    }
}
