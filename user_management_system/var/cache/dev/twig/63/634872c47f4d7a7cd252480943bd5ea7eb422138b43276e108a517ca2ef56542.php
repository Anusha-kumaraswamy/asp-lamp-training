<?php

/* UserBundle:User:userList.html.twig */
class __TwigTemplate_0f22177e4a32b2df102559c33350b7198d1f309fbd3bee65f24688c20576e117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:userList.html.twig", 1);
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
        $__internal_b948904356a59540917340ec0b5219b847e42fc3cf6bc5c51d3325b79931bd50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b948904356a59540917340ec0b5219b847e42fc3cf6bc5c51d3325b79931bd50->enter($__internal_b948904356a59540917340ec0b5219b847e42fc3cf6bc5c51d3325b79931bd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userList.html.twig"));

        $__internal_a710e6ad14a95c59913f13260d7ce1e6f7a1593fbf57ea33b358de9cae3614cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a710e6ad14a95c59913f13260d7ce1e6f7a1593fbf57ea33b358de9cae3614cc->enter($__internal_a710e6ad14a95c59913f13260d7ce1e6f7a1593fbf57ea33b358de9cae3614cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b948904356a59540917340ec0b5219b847e42fc3cf6bc5c51d3325b79931bd50->leave($__internal_b948904356a59540917340ec0b5219b847e42fc3cf6bc5c51d3325b79931bd50_prof);

        
        $__internal_a710e6ad14a95c59913f13260d7ce1e6f7a1593fbf57ea33b358de9cae3614cc->leave($__internal_a710e6ad14a95c59913f13260d7ce1e6f7a1593fbf57ea33b358de9cae3614cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c66851781b59704d4eab6bbce700db54d89ea97587a80cbaf424d4aad0bce90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66851781b59704d4eab6bbce700db54d89ea97587a80cbaf424d4aad0bce90d->enter($__internal_c66851781b59704d4eab6bbce700db54d89ea97587a80cbaf424d4aad0bce90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dc0c5285acf1e5adc62a9854cebafca2dd45ff09ecb4dc1a332cbdefe63e1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc0c5285acf1e5adc62a9854cebafca2dd45ff09ecb4dc1a332cbdefe63e1be->enter($__internal_2dc0c5285acf1e5adc62a9854cebafca2dd45ff09ecb4dc1a332cbdefe63e1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_2dc0c5285acf1e5adc62a9854cebafca2dd45ff09ecb4dc1a332cbdefe63e1be->leave($__internal_2dc0c5285acf1e5adc62a9854cebafca2dd45ff09ecb4dc1a332cbdefe63e1be_prof);

        
        $__internal_c66851781b59704d4eab6bbce700db54d89ea97587a80cbaf424d4aad0bce90d->leave($__internal_c66851781b59704d4eab6bbce700db54d89ea97587a80cbaf424d4aad0bce90d_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2db00f1edd55326cd5e63c49d6f31de134d5ac3344861fae3f1a7cd000b4575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2db00f1edd55326cd5e63c49d6f31de134d5ac3344861fae3f1a7cd000b4575->enter($__internal_c2db00f1edd55326cd5e63c49d6f31de134d5ac3344861fae3f1a7cd000b4575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_29265a6248c89a07d14f45c48ec897a9a60beb576f89a713ca094a2dada83cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29265a6248c89a07d14f45c48ec897a9a60beb576f89a713ca094a2dada83cf6->enter($__internal_29265a6248c89a07d14f45c48ec897a9a60beb576f89a713ca094a2dada83cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_29265a6248c89a07d14f45c48ec897a9a60beb576f89a713ca094a2dada83cf6->leave($__internal_29265a6248c89a07d14f45c48ec897a9a60beb576f89a713ca094a2dada83cf6_prof);

        
        $__internal_c2db00f1edd55326cd5e63c49d6f31de134d5ac3344861fae3f1a7cd000b4575->leave($__internal_c2db00f1edd55326cd5e63c49d6f31de134d5ac3344861fae3f1a7cd000b4575_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_328a6cb128d744d4c310a5b195fd9a56491e943c22db25374a8fe8c412fae7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328a6cb128d744d4c310a5b195fd9a56491e943c22db25374a8fe8c412fae7f1->enter($__internal_328a6cb128d744d4c310a5b195fd9a56491e943c22db25374a8fe8c412fae7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c5d3c9ad1048f691aaaeebf839bfd30648fa83075364b8766988f7a76968286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5d3c9ad1048f691aaaeebf839bfd30648fa83075364b8766988f7a76968286->enter($__internal_2c5d3c9ad1048f691aaaeebf839bfd30648fa83075364b8766988f7a76968286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_2c5d3c9ad1048f691aaaeebf839bfd30648fa83075364b8766988f7a76968286->leave($__internal_2c5d3c9ad1048f691aaaeebf839bfd30648fa83075364b8766988f7a76968286_prof);

        
        $__internal_328a6cb128d744d4c310a5b195fd9a56491e943c22db25374a8fe8c412fae7f1->leave($__internal_328a6cb128d744d4c310a5b195fd9a56491e943c22db25374a8fe8c412fae7f1_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_6525756f72396abc2042628bcbdf97d73b6cd5a49e6ea6ff6f40e329b9fb1c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6525756f72396abc2042628bcbdf97d73b6cd5a49e6ea6ff6f40e329b9fb1c6c->enter($__internal_6525756f72396abc2042628bcbdf97d73b6cd5a49e6ea6ff6f40e329b9fb1c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_608b0086bf563231ef728fe97296616e89bd127cb39b8cf163005296be75435f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608b0086bf563231ef728fe97296616e89bd127cb39b8cf163005296be75435f->enter($__internal_608b0086bf563231ef728fe97296616e89bd127cb39b8cf163005296be75435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_608b0086bf563231ef728fe97296616e89bd127cb39b8cf163005296be75435f->leave($__internal_608b0086bf563231ef728fe97296616e89bd127cb39b8cf163005296be75435f_prof);

        
        $__internal_6525756f72396abc2042628bcbdf97d73b6cd5a49e6ea6ff6f40e329b9fb1c6c->leave($__internal_6525756f72396abc2042628bcbdf97d73b6cd5a49e6ea6ff6f40e329b9fb1c6c_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_efe7f5143b72d2e8546e7263758eef5e79e3246414699d254d74692222e587c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe7f5143b72d2e8546e7263758eef5e79e3246414699d254d74692222e587c0->enter($__internal_efe7f5143b72d2e8546e7263758eef5e79e3246414699d254d74692222e587c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_71916fef14aa5cf3b77251cafd6f5afcfc822f6cf17a09b303e56b613dab0f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71916fef14aa5cf3b77251cafd6f5afcfc822f6cf17a09b303e56b613dab0f3b->enter($__internal_71916fef14aa5cf3b77251cafd6f5afcfc822f6cf17a09b303e56b613dab0f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "loginName", array()), "html", null, true);
            echo "</td>
                <td><a href=\"users/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">View</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        
        $__internal_71916fef14aa5cf3b77251cafd6f5afcfc822f6cf17a09b303e56b613dab0f3b->leave($__internal_71916fef14aa5cf3b77251cafd6f5afcfc822f6cf17a09b303e56b613dab0f3b_prof);

        
        $__internal_efe7f5143b72d2e8546e7263758eef5e79e3246414699d254d74692222e587c0->leave($__internal_efe7f5143b72d2e8546e7263758eef5e79e3246414699d254d74692222e587c0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:userList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 21,  155 => 18,  151 => 17,  147 => 16,  144 => 15,  139 => 14,  130 => 13,  117 => 11,  108 => 10,  97 => 13,  94 => 10,  85 => 9,  72 => 5,  53 => 4,  44 => 3,  11 => 1,);
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
        {% for user in users %}
            <tr>
                <td>{{user.id}}</td>
                <td>{{user.loginName}}</td>
                <td><a href=\"users/{{user.id}}\">View</a></td>
            </tr>
        {% endfor %}
    {% endblock %}
{% endblock %}", "UserBundle:User:userList.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/userList.html.twig");
    }
}
