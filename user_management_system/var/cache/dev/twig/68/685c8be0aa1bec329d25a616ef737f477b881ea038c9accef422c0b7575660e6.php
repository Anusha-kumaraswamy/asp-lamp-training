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
        $__internal_6277db7bffd8b68ca0bb3739a8e99e6bbb11265cd203c3576a203a108e3f3767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6277db7bffd8b68ca0bb3739a8e99e6bbb11265cd203c3576a203a108e3f3767->enter($__internal_6277db7bffd8b68ca0bb3739a8e99e6bbb11265cd203c3576a203a108e3f3767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:users.html.twig"));

        $__internal_38fb08857ef17305697a2045081ac756cd060d453839928dfa9424a6f413af04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fb08857ef17305697a2045081ac756cd060d453839928dfa9424a6f413af04->enter($__internal_38fb08857ef17305697a2045081ac756cd060d453839928dfa9424a6f413af04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6277db7bffd8b68ca0bb3739a8e99e6bbb11265cd203c3576a203a108e3f3767->leave($__internal_6277db7bffd8b68ca0bb3739a8e99e6bbb11265cd203c3576a203a108e3f3767_prof);

        
        $__internal_38fb08857ef17305697a2045081ac756cd060d453839928dfa9424a6f413af04->leave($__internal_38fb08857ef17305697a2045081ac756cd060d453839928dfa9424a6f413af04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a53a37bafa4e65583a6aca1dd35adda5c56e25e89623a36e214164c2d1da250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a53a37bafa4e65583a6aca1dd35adda5c56e25e89623a36e214164c2d1da250->enter($__internal_2a53a37bafa4e65583a6aca1dd35adda5c56e25e89623a36e214164c2d1da250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_045b65ed2a5640bc7dfb3353faed4c02e3cbd46fed7e9d5b50fedef6cbac9df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045b65ed2a5640bc7dfb3353faed4c02e3cbd46fed7e9d5b50fedef6cbac9df6->enter($__internal_045b65ed2a5640bc7dfb3353faed4c02e3cbd46fed7e9d5b50fedef6cbac9df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_045b65ed2a5640bc7dfb3353faed4c02e3cbd46fed7e9d5b50fedef6cbac9df6->leave($__internal_045b65ed2a5640bc7dfb3353faed4c02e3cbd46fed7e9d5b50fedef6cbac9df6_prof);

        
        $__internal_2a53a37bafa4e65583a6aca1dd35adda5c56e25e89623a36e214164c2d1da250->leave($__internal_2a53a37bafa4e65583a6aca1dd35adda5c56e25e89623a36e214164c2d1da250_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_345c17222dacf464342d1d130fb9bb0c0621a23495288f9cd98fef42e4582f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345c17222dacf464342d1d130fb9bb0c0621a23495288f9cd98fef42e4582f69->enter($__internal_345c17222dacf464342d1d130fb9bb0c0621a23495288f9cd98fef42e4582f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c189560c7283abd7ba669637ff8f2a13ff84e34ee1f0d0167b5af285579a240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c189560c7283abd7ba669637ff8f2a13ff84e34ee1f0d0167b5af285579a240->enter($__internal_0c189560c7283abd7ba669637ff8f2a13ff84e34ee1f0d0167b5af285579a240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_0c189560c7283abd7ba669637ff8f2a13ff84e34ee1f0d0167b5af285579a240->leave($__internal_0c189560c7283abd7ba669637ff8f2a13ff84e34ee1f0d0167b5af285579a240_prof);

        
        $__internal_345c17222dacf464342d1d130fb9bb0c0621a23495288f9cd98fef42e4582f69->leave($__internal_345c17222dacf464342d1d130fb9bb0c0621a23495288f9cd98fef42e4582f69_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_993221670140cd53fdb0a31d7fa51316c79dcfc407141fc066b71f77062ca32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993221670140cd53fdb0a31d7fa51316c79dcfc407141fc066b71f77062ca32a->enter($__internal_993221670140cd53fdb0a31d7fa51316c79dcfc407141fc066b71f77062ca32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a24e95b711115d27cad986a7812d241e986e03f0a1001cfccc9447bd07e36e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a24e95b711115d27cad986a7812d241e986e03f0a1001cfccc9447bd07e36e2->enter($__internal_3a24e95b711115d27cad986a7812d241e986e03f0a1001cfccc9447bd07e36e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_3a24e95b711115d27cad986a7812d241e986e03f0a1001cfccc9447bd07e36e2->leave($__internal_3a24e95b711115d27cad986a7812d241e986e03f0a1001cfccc9447bd07e36e2_prof);

        
        $__internal_993221670140cd53fdb0a31d7fa51316c79dcfc407141fc066b71f77062ca32a->leave($__internal_993221670140cd53fdb0a31d7fa51316c79dcfc407141fc066b71f77062ca32a_prof);

    }

    public function block_table($context, array $blocks = array())
    {
        $__internal_5aa03eabb709b66326cc91b553bdcb686d4e55d0229e97e1178f480702bc5917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa03eabb709b66326cc91b553bdcb686d4e55d0229e97e1178f480702bc5917->enter($__internal_5aa03eabb709b66326cc91b553bdcb686d4e55d0229e97e1178f480702bc5917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_344e196f464a2511a12df267047c9bf69a3f5f03169dee249d96fc713926cf99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344e196f464a2511a12df267047c9bf69a3f5f03169dee249d96fc713926cf99->enter($__internal_344e196f464a2511a12df267047c9bf69a3f5f03169dee249d96fc713926cf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        
        $__internal_344e196f464a2511a12df267047c9bf69a3f5f03169dee249d96fc713926cf99->leave($__internal_344e196f464a2511a12df267047c9bf69a3f5f03169dee249d96fc713926cf99_prof);

        
        $__internal_5aa03eabb709b66326cc91b553bdcb686d4e55d0229e97e1178f480702bc5917->leave($__internal_5aa03eabb709b66326cc91b553bdcb686d4e55d0229e97e1178f480702bc5917_prof);

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
