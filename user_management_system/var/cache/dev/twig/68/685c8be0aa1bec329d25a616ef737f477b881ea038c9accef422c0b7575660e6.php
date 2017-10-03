<?php

/* UserBundle:User:users.html.twig */
class __TwigTemplate_099e422b87e0f565b6661196179b859211651b79251d4a436c69ad356b7e7b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:users.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87faa6c7682cb7ae3a1a4fb9b1061e5045e412430676ad51dc633e26a83df5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87faa6c7682cb7ae3a1a4fb9b1061e5045e412430676ad51dc633e26a83df5e1->enter($__internal_87faa6c7682cb7ae3a1a4fb9b1061e5045e412430676ad51dc633e26a83df5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:users.html.twig"));

        $__internal_5610c0c8e1cbc8380f98ca6ad873e24085c28a12b19f74b1a2e9eb79de419193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5610c0c8e1cbc8380f98ca6ad873e24085c28a12b19f74b1a2e9eb79de419193->enter($__internal_5610c0c8e1cbc8380f98ca6ad873e24085c28a12b19f74b1a2e9eb79de419193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87faa6c7682cb7ae3a1a4fb9b1061e5045e412430676ad51dc633e26a83df5e1->leave($__internal_87faa6c7682cb7ae3a1a4fb9b1061e5045e412430676ad51dc633e26a83df5e1_prof);

        
        $__internal_5610c0c8e1cbc8380f98ca6ad873e24085c28a12b19f74b1a2e9eb79de419193->leave($__internal_5610c0c8e1cbc8380f98ca6ad873e24085c28a12b19f74b1a2e9eb79de419193_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a66a7bf3f3ac2240fdd85312bf51e16a5e5ce4695267bc283c1fa8721df250f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a66a7bf3f3ac2240fdd85312bf51e16a5e5ce4695267bc283c1fa8721df250f->enter($__internal_5a66a7bf3f3ac2240fdd85312bf51e16a5e5ce4695267bc283c1fa8721df250f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a285c40c8f425b0e738c8a194fa765a33a06e6d689c50e2591ab046e6f71675e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a285c40c8f425b0e738c8a194fa765a33a06e6d689c50e2591ab046e6f71675e->enter($__internal_a285c40c8f425b0e738c8a194fa765a33a06e6d689c50e2591ab046e6f71675e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_a285c40c8f425b0e738c8a194fa765a33a06e6d689c50e2591ab046e6f71675e->leave($__internal_a285c40c8f425b0e738c8a194fa765a33a06e6d689c50e2591ab046e6f71675e_prof);

        
        $__internal_5a66a7bf3f3ac2240fdd85312bf51e16a5e5ce4695267bc283c1fa8721df250f->leave($__internal_5a66a7bf3f3ac2240fdd85312bf51e16a5e5ce4695267bc283c1fa8721df250f_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed5123052ec5ca8bc17bba7a441cdc0b9394ec8597b0c225312dd79ed9f0c849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5123052ec5ca8bc17bba7a441cdc0b9394ec8597b0c225312dd79ed9f0c849->enter($__internal_ed5123052ec5ca8bc17bba7a441cdc0b9394ec8597b0c225312dd79ed9f0c849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8406d55fe3680855efc7676078a2e0dc385889913fadfadb5be0a33dd0019377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8406d55fe3680855efc7676078a2e0dc385889913fadfadb5be0a33dd0019377->enter($__internal_8406d55fe3680855efc7676078a2e0dc385889913fadfadb5be0a33dd0019377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_8406d55fe3680855efc7676078a2e0dc385889913fadfadb5be0a33dd0019377->leave($__internal_8406d55fe3680855efc7676078a2e0dc385889913fadfadb5be0a33dd0019377_prof);

        
        $__internal_ed5123052ec5ca8bc17bba7a441cdc0b9394ec8597b0c225312dd79ed9f0c849->leave($__internal_ed5123052ec5ca8bc17bba7a441cdc0b9394ec8597b0c225312dd79ed9f0c849_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1c52be147b7c67f8ebfad6a4a935fcc01fb5dca91bf745d4c00c06adf3629ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c52be147b7c67f8ebfad6a4a935fcc01fb5dca91bf745d4c00c06adf3629ec->enter($__internal_e1c52be147b7c67f8ebfad6a4a935fcc01fb5dca91bf745d4c00c06adf3629ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e554458ed46ffdda5c274e983a3ac7828ae3e609c21e649d861c4c39301dfaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e554458ed46ffdda5c274e983a3ac7828ae3e609c21e649d861c4c39301dfaa7->enter($__internal_e554458ed46ffdda5c274e983a3ac7828ae3e609c21e649d861c4c39301dfaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_e554458ed46ffdda5c274e983a3ac7828ae3e609c21e649d861c4c39301dfaa7->leave($__internal_e554458ed46ffdda5c274e983a3ac7828ae3e609c21e649d861c4c39301dfaa7_prof);

        
        $__internal_e1c52be147b7c67f8ebfad6a4a935fcc01fb5dca91bf745d4c00c06adf3629ec->leave($__internal_e1c52be147b7c67f8ebfad6a4a935fcc01fb5dca91bf745d4c00c06adf3629ec_prof);

    }

    public function block_table($context, array $blocks = array())
    {
        $__internal_72122147d2500b4c880b6c1933d58e375a115dcda697759ff8269aca5b210332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72122147d2500b4c880b6c1933d58e375a115dcda697759ff8269aca5b210332->enter($__internal_72122147d2500b4c880b6c1933d58e375a115dcda697759ff8269aca5b210332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_c07df4a0531bda93c087d82eb6ca2296350abc66d8f56814d786132ffa4129d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07df4a0531bda93c087d82eb6ca2296350abc66d8f56814d786132ffa4129d1->enter($__internal_c07df4a0531bda93c087d82eb6ca2296350abc66d8f56814d786132ffa4129d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 11
        echo "        <input type=\"button\" value=\"Add User\" onclick=\"location.href='/users/new'\">
        <table border=\"ridge\">
            <tr>
                <th>Id</th>
                <th>Login Name</th>
                <th>View</th>
            </tr>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limitedUsers"]) ? $context["limitedUsers"] : $this->getContext($context, "limitedUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "loginName", array()), "html", null, true);
            echo "</td>
                <td><input type=\"button\" onclick=\"location.href='/users/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "'\"></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </table>
        <div class=\"navigation\">
            ";
        // line 27
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["limitedUsers"]) ? $context["limitedUsers"] : $this->getContext($context, "limitedUsers")));
        echo "
        </div>
    ";
        
        $__internal_c07df4a0531bda93c087d82eb6ca2296350abc66d8f56814d786132ffa4129d1->leave($__internal_c07df4a0531bda93c087d82eb6ca2296350abc66d8f56814d786132ffa4129d1_prof);

        
        $__internal_72122147d2500b4c880b6c1933d58e375a115dcda697759ff8269aca5b210332->leave($__internal_72122147d2500b4c880b6c1933d58e375a115dcda697759ff8269aca5b210332_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 27,  145 => 25,  136 => 22,  132 => 21,  128 => 20,  125 => 19,  121 => 18,  112 => 11,  93 => 10,  84 => 9,  71 => 5,  52 => 4,  43 => 3,  11 => 1,);
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
    {% block table %}
        <input type=\"button\" value=\"Add User\" onclick=\"location.href='/users/new'\">
        <table border=\"ridge\">
            <tr>
                <th>Id</th>
                <th>Login Name</th>
                <th>View</th>
            </tr>
            {% for user in limitedUsers %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.loginName }}</td>
                <td><input type=\"button\" onclick=\"location.href='/users/{{ user.id }}'\"></td>
            </tr>
            {% endfor %}
        </table>
        <div class=\"navigation\">
            {{ knp_pagination_render(limitedUsers) }}
        </div>
    {% endblock %}
{% endblock %}

", "UserBundle:User:users.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/users.html.twig");
    }
}
