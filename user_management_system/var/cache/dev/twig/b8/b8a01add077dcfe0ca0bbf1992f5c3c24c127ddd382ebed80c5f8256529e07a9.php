<?php

/* UserBundle:User:users.html.twig */
class __TwigTemplate_f6b847675db3d98c0d81cc62307cad36f930978f39cdda758b2e546cb243550c extends Twig_Template
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
        $__internal_e4bdcef6a09e25f883c26ac9bbd7599a90210dbad8424d2c2a128382d04b90d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bdcef6a09e25f883c26ac9bbd7599a90210dbad8424d2c2a128382d04b90d3->enter($__internal_e4bdcef6a09e25f883c26ac9bbd7599a90210dbad8424d2c2a128382d04b90d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:users.html.twig"));

        $__internal_7e986fcadeb33523329bec76ccbf0edf9a34d2bbfab3de22df1f9b9375ec14e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e986fcadeb33523329bec76ccbf0edf9a34d2bbfab3de22df1f9b9375ec14e0->enter($__internal_7e986fcadeb33523329bec76ccbf0edf9a34d2bbfab3de22df1f9b9375ec14e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4bdcef6a09e25f883c26ac9bbd7599a90210dbad8424d2c2a128382d04b90d3->leave($__internal_e4bdcef6a09e25f883c26ac9bbd7599a90210dbad8424d2c2a128382d04b90d3_prof);

        
        $__internal_7e986fcadeb33523329bec76ccbf0edf9a34d2bbfab3de22df1f9b9375ec14e0->leave($__internal_7e986fcadeb33523329bec76ccbf0edf9a34d2bbfab3de22df1f9b9375ec14e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ae2e20455e435d7dab46c6888917f699ebf482377fc799570b0044756f65dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae2e20455e435d7dab46c6888917f699ebf482377fc799570b0044756f65dec->enter($__internal_6ae2e20455e435d7dab46c6888917f699ebf482377fc799570b0044756f65dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7bdb4e9600ad087bc0742fede53799b48b2c5317a133c3badd0f4d0be695321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bdb4e9600ad087bc0742fede53799b48b2c5317a133c3badd0f4d0be695321->enter($__internal_d7bdb4e9600ad087bc0742fede53799b48b2c5317a133c3badd0f4d0be695321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_d7bdb4e9600ad087bc0742fede53799b48b2c5317a133c3badd0f4d0be695321->leave($__internal_d7bdb4e9600ad087bc0742fede53799b48b2c5317a133c3badd0f4d0be695321_prof);

        
        $__internal_6ae2e20455e435d7dab46c6888917f699ebf482377fc799570b0044756f65dec->leave($__internal_6ae2e20455e435d7dab46c6888917f699ebf482377fc799570b0044756f65dec_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_219f8279b1cdea4c898e0afd964191e3a4a86a391eb76d9cd746ac24bfeecf57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219f8279b1cdea4c898e0afd964191e3a4a86a391eb76d9cd746ac24bfeecf57->enter($__internal_219f8279b1cdea4c898e0afd964191e3a4a86a391eb76d9cd746ac24bfeecf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0ca81546e5715d864042c78d6250fa9a8bf59fbcb8d6eac805832c36b5b3a73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca81546e5715d864042c78d6250fa9a8bf59fbcb8d6eac805832c36b5b3a73b->enter($__internal_0ca81546e5715d864042c78d6250fa9a8bf59fbcb8d6eac805832c36b5b3a73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_0ca81546e5715d864042c78d6250fa9a8bf59fbcb8d6eac805832c36b5b3a73b->leave($__internal_0ca81546e5715d864042c78d6250fa9a8bf59fbcb8d6eac805832c36b5b3a73b_prof);

        
        $__internal_219f8279b1cdea4c898e0afd964191e3a4a86a391eb76d9cd746ac24bfeecf57->leave($__internal_219f8279b1cdea4c898e0afd964191e3a4a86a391eb76d9cd746ac24bfeecf57_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dda84fdcfa3e1cea52d0dab40ed8845883ea7d18b7a9f82d63bc92eb0992d0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda84fdcfa3e1cea52d0dab40ed8845883ea7d18b7a9f82d63bc92eb0992d0c1->enter($__internal_dda84fdcfa3e1cea52d0dab40ed8845883ea7d18b7a9f82d63bc92eb0992d0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccc139a6df23474c2f816b101671ad0266719b9b6629d8919f596d7cf0deece8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc139a6df23474c2f816b101671ad0266719b9b6629d8919f596d7cf0deece8->enter($__internal_ccc139a6df23474c2f816b101671ad0266719b9b6629d8919f596d7cf0deece8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_ccc139a6df23474c2f816b101671ad0266719b9b6629d8919f596d7cf0deece8->leave($__internal_ccc139a6df23474c2f816b101671ad0266719b9b6629d8919f596d7cf0deece8_prof);

        
        $__internal_dda84fdcfa3e1cea52d0dab40ed8845883ea7d18b7a9f82d63bc92eb0992d0c1->leave($__internal_dda84fdcfa3e1cea52d0dab40ed8845883ea7d18b7a9f82d63bc92eb0992d0c1_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_7bc1e65b1ab48721b5a8da90c6c115967d47bc7476df3ed16e321aa947c52f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc1e65b1ab48721b5a8da90c6c115967d47bc7476df3ed16e321aa947c52f98->enter($__internal_7bc1e65b1ab48721b5a8da90c6c115967d47bc7476df3ed16e321aa947c52f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_024403d8e4e3bcdd27c0446b27f05db1658f1338c7a025c6e675dfe2b76eafd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024403d8e4e3bcdd27c0446b27f05db1658f1338c7a025c6e675dfe2b76eafd0->enter($__internal_024403d8e4e3bcdd27c0446b27f05db1658f1338c7a025c6e675dfe2b76eafd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_024403d8e4e3bcdd27c0446b27f05db1658f1338c7a025c6e675dfe2b76eafd0->leave($__internal_024403d8e4e3bcdd27c0446b27f05db1658f1338c7a025c6e675dfe2b76eafd0_prof);

        
        $__internal_7bc1e65b1ab48721b5a8da90c6c115967d47bc7476df3ed16e321aa947c52f98->leave($__internal_7bc1e65b1ab48721b5a8da90c6c115967d47bc7476df3ed16e321aa947c52f98_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_f4b5537b69abc6de44c80f499a9e0e5c006dc54641e11ff0500a1e52c969fe25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b5537b69abc6de44c80f499a9e0e5c006dc54641e11ff0500a1e52c969fe25->enter($__internal_f4b5537b69abc6de44c80f499a9e0e5c006dc54641e11ff0500a1e52c969fe25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_5e9e1b36da8d4ad8bf94a939d8a4d530936c568b58823e6aaf3b638b380aa5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9e1b36da8d4ad8bf94a939d8a4d530936c568b58823e6aaf3b638b380aa5e0->enter($__internal_5e9e1b36da8d4ad8bf94a939d8a4d530936c568b58823e6aaf3b638b380aa5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 14
        echo "        <table>
            <tr>
                <td>Id</td>
                <td>Login Name</td>
            </tr>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "loginName", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </table>
    ";
        
        $__internal_5e9e1b36da8d4ad8bf94a939d8a4d530936c568b58823e6aaf3b638b380aa5e0->leave($__internal_5e9e1b36da8d4ad8bf94a939d8a4d530936c568b58823e6aaf3b638b380aa5e0_prof);

        
        $__internal_f4b5537b69abc6de44c80f499a9e0e5c006dc54641e11ff0500a1e52c969fe25->leave($__internal_f4b5537b69abc6de44c80f499a9e0e5c006dc54641e11ff0500a1e52c969fe25_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3bb731c28e0cc28897f3b20045353cbebd2c29966e5aca0b6d6220a5e32268e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bb731c28e0cc28897f3b20045353cbebd2c29966e5aca0b6d6220a5e32268e->enter($__internal_c3bb731c28e0cc28897f3b20045353cbebd2c29966e5aca0b6d6220a5e32268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_16cb1afdba0938077fd6a06b55818d05257f068cb8c928679439c2ac67ea4278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cb1afdba0938077fd6a06b55818d05257f068cb8c928679439c2ac67ea4278->enter($__internal_16cb1afdba0938077fd6a06b55818d05257f068cb8c928679439c2ac67ea4278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/js/createTable.js"), "html", null, true);
        echo "\">            
        </script>
    ";
        
        $__internal_16cb1afdba0938077fd6a06b55818d05257f068cb8c928679439c2ac67ea4278->leave($__internal_16cb1afdba0938077fd6a06b55818d05257f068cb8c928679439c2ac67ea4278_prof);

        
        $__internal_c3bb731c28e0cc28897f3b20045353cbebd2c29966e5aca0b6d6220a5e32268e->leave($__internal_c3bb731c28e0cc28897f3b20045353cbebd2c29966e5aca0b6d6220a5e32268e_prof);

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
        return array (  190 => 28,  181 => 27,  170 => 25,  161 => 22,  157 => 21,  154 => 20,  150 => 19,  143 => 14,  134 => 13,  121 => 11,  112 => 10,  101 => 27,  98 => 13,  95 => 10,  86 => 9,  73 => 5,  54 => 4,  45 => 3,  11 => 1,);
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
                <td>Login Name</td>
            </tr>
            {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.loginName }}</td>
            </tr>
            {% endfor %}
        </table>
    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('bundles/user/js/createTable.js') }}\">            
        </script>
    {% endblock %}
{% endblock %}

", "UserBundle:User:users.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/users.html.twig");
    }
}
