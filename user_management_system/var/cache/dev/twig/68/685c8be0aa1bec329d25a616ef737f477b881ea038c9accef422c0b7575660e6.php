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
        $__internal_255e9f1b1d8efce03e7c620c61ac75d9b6d823e308e8710cedcf161d02852077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255e9f1b1d8efce03e7c620c61ac75d9b6d823e308e8710cedcf161d02852077->enter($__internal_255e9f1b1d8efce03e7c620c61ac75d9b6d823e308e8710cedcf161d02852077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:users.html.twig"));

        $__internal_ca9412ae14a460ff491be17c7724eba6f1513d0b0f5e193113f378edf1c2dbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9412ae14a460ff491be17c7724eba6f1513d0b0f5e193113f378edf1c2dbbb->enter($__internal_ca9412ae14a460ff491be17c7724eba6f1513d0b0f5e193113f378edf1c2dbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_255e9f1b1d8efce03e7c620c61ac75d9b6d823e308e8710cedcf161d02852077->leave($__internal_255e9f1b1d8efce03e7c620c61ac75d9b6d823e308e8710cedcf161d02852077_prof);

        
        $__internal_ca9412ae14a460ff491be17c7724eba6f1513d0b0f5e193113f378edf1c2dbbb->leave($__internal_ca9412ae14a460ff491be17c7724eba6f1513d0b0f5e193113f378edf1c2dbbb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e920e4a92d4790af1731baabaced6f7edeb8adaaddb3df72b216884c6d7463df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e920e4a92d4790af1731baabaced6f7edeb8adaaddb3df72b216884c6d7463df->enter($__internal_e920e4a92d4790af1731baabaced6f7edeb8adaaddb3df72b216884c6d7463df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3b61bc8bf273242bd585078248a94f35cc7feaadd2b3376b53e5b49b8fa98ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b61bc8bf273242bd585078248a94f35cc7feaadd2b3376b53e5b49b8fa98ca7->enter($__internal_3b61bc8bf273242bd585078248a94f35cc7feaadd2b3376b53e5b49b8fa98ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_3b61bc8bf273242bd585078248a94f35cc7feaadd2b3376b53e5b49b8fa98ca7->leave($__internal_3b61bc8bf273242bd585078248a94f35cc7feaadd2b3376b53e5b49b8fa98ca7_prof);

        
        $__internal_e920e4a92d4790af1731baabaced6f7edeb8adaaddb3df72b216884c6d7463df->leave($__internal_e920e4a92d4790af1731baabaced6f7edeb8adaaddb3df72b216884c6d7463df_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc55521d45a89533b08e114793466357ca02699bc2f1a68e5c6463187156ce08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc55521d45a89533b08e114793466357ca02699bc2f1a68e5c6463187156ce08->enter($__internal_cc55521d45a89533b08e114793466357ca02699bc2f1a68e5c6463187156ce08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7175a008400c939ae620e5536ef401239eea5dcc9f2ee1f4f6200ab1bb5398ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7175a008400c939ae620e5536ef401239eea5dcc9f2ee1f4f6200ab1bb5398ad->enter($__internal_7175a008400c939ae620e5536ef401239eea5dcc9f2ee1f4f6200ab1bb5398ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_7175a008400c939ae620e5536ef401239eea5dcc9f2ee1f4f6200ab1bb5398ad->leave($__internal_7175a008400c939ae620e5536ef401239eea5dcc9f2ee1f4f6200ab1bb5398ad_prof);

        
        $__internal_cc55521d45a89533b08e114793466357ca02699bc2f1a68e5c6463187156ce08->leave($__internal_cc55521d45a89533b08e114793466357ca02699bc2f1a68e5c6463187156ce08_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_adba1d445f8812a4e7324bc2c95152498be7fb519541df379381f85facb68d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adba1d445f8812a4e7324bc2c95152498be7fb519541df379381f85facb68d94->enter($__internal_adba1d445f8812a4e7324bc2c95152498be7fb519541df379381f85facb68d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0f295053ebd19021724334aecd0970d38bf27b32c9b8600841a508046bdf59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f295053ebd19021724334aecd0970d38bf27b32c9b8600841a508046bdf59e->enter($__internal_e0f295053ebd19021724334aecd0970d38bf27b32c9b8600841a508046bdf59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_e0f295053ebd19021724334aecd0970d38bf27b32c9b8600841a508046bdf59e->leave($__internal_e0f295053ebd19021724334aecd0970d38bf27b32c9b8600841a508046bdf59e_prof);

        
        $__internal_adba1d445f8812a4e7324bc2c95152498be7fb519541df379381f85facb68d94->leave($__internal_adba1d445f8812a4e7324bc2c95152498be7fb519541df379381f85facb68d94_prof);

    }

    public function block_table($context, array $blocks = array())
    {
        $__internal_2771743df03671dea87361211d1406d2566e95909301392052c67a70705088c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2771743df03671dea87361211d1406d2566e95909301392052c67a70705088c1->enter($__internal_2771743df03671dea87361211d1406d2566e95909301392052c67a70705088c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_8412c2104069c5e890d7389013ad6e5ecc22506afa4f4baa4d8aa7d5ec55affc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8412c2104069c5e890d7389013ad6e5ecc22506afa4f4baa4d8aa7d5ec55affc->enter($__internal_8412c2104069c5e890d7389013ad6e5ecc22506afa4f4baa4d8aa7d5ec55affc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 11
        echo "        <input type=\"button\" value=\"Add User\" onclick=\"location.href='/users/new'\">
        <table>
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
        
        $__internal_8412c2104069c5e890d7389013ad6e5ecc22506afa4f4baa4d8aa7d5ec55affc->leave($__internal_8412c2104069c5e890d7389013ad6e5ecc22506afa4f4baa4d8aa7d5ec55affc_prof);

        
        $__internal_2771743df03671dea87361211d1406d2566e95909301392052c67a70705088c1->leave($__internal_2771743df03671dea87361211d1406d2566e95909301392052c67a70705088c1_prof);

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
        <table>
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
