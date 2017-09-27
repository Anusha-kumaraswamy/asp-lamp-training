<?php

/* UserBundle:User:user.html.twig */
class __TwigTemplate_24fd237e5a9d337db1371618c879af196a08ca2e79c0dd548e7effdb5849024c extends Twig_Template
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
        $__internal_0843b9c3166ad3dfbe20fcca5a291e06fd772e072d40d8157df2aa8c9edf0602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0843b9c3166ad3dfbe20fcca5a291e06fd772e072d40d8157df2aa8c9edf0602->enter($__internal_0843b9c3166ad3dfbe20fcca5a291e06fd772e072d40d8157df2aa8c9edf0602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $__internal_3d880bdb27c324439bec5537e5fc70b971ed6459570933cc1122c1aab1c1e9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d880bdb27c324439bec5537e5fc70b971ed6459570933cc1122c1aab1c1e9e8->enter($__internal_3d880bdb27c324439bec5537e5fc70b971ed6459570933cc1122c1aab1c1e9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0843b9c3166ad3dfbe20fcca5a291e06fd772e072d40d8157df2aa8c9edf0602->leave($__internal_0843b9c3166ad3dfbe20fcca5a291e06fd772e072d40d8157df2aa8c9edf0602_prof);

        
        $__internal_3d880bdb27c324439bec5537e5fc70b971ed6459570933cc1122c1aab1c1e9e8->leave($__internal_3d880bdb27c324439bec5537e5fc70b971ed6459570933cc1122c1aab1c1e9e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53f484735163b933d466eb9a23f0c70496b5e85bb9bd5b2154d5c3b5be97903d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f484735163b933d466eb9a23f0c70496b5e85bb9bd5b2154d5c3b5be97903d->enter($__internal_53f484735163b933d466eb9a23f0c70496b5e85bb9bd5b2154d5c3b5be97903d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7bacf6c08657910c0b29636679f241fd04e6a5944aa73cc37b6fe237ccea55bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bacf6c08657910c0b29636679f241fd04e6a5944aa73cc37b6fe237ccea55bd->enter($__internal_7bacf6c08657910c0b29636679f241fd04e6a5944aa73cc37b6fe237ccea55bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_7bacf6c08657910c0b29636679f241fd04e6a5944aa73cc37b6fe237ccea55bd->leave($__internal_7bacf6c08657910c0b29636679f241fd04e6a5944aa73cc37b6fe237ccea55bd_prof);

        
        $__internal_53f484735163b933d466eb9a23f0c70496b5e85bb9bd5b2154d5c3b5be97903d->leave($__internal_53f484735163b933d466eb9a23f0c70496b5e85bb9bd5b2154d5c3b5be97903d_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32c9918f7320df88e4b4ed3094d825535420ba116c5d9c1c89ce78fcec1fe231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c9918f7320df88e4b4ed3094d825535420ba116c5d9c1c89ce78fcec1fe231->enter($__internal_32c9918f7320df88e4b4ed3094d825535420ba116c5d9c1c89ce78fcec1fe231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7e89e7080919106518db4cd9357eb0a9ab0d5f92e05ef074defbf999025422df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e89e7080919106518db4cd9357eb0a9ab0d5f92e05ef074defbf999025422df->enter($__internal_7e89e7080919106518db4cd9357eb0a9ab0d5f92e05ef074defbf999025422df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_7e89e7080919106518db4cd9357eb0a9ab0d5f92e05ef074defbf999025422df->leave($__internal_7e89e7080919106518db4cd9357eb0a9ab0d5f92e05ef074defbf999025422df_prof);

        
        $__internal_32c9918f7320df88e4b4ed3094d825535420ba116c5d9c1c89ce78fcec1fe231->leave($__internal_32c9918f7320df88e4b4ed3094d825535420ba116c5d9c1c89ce78fcec1fe231_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9017c0798524b1beacb36a0d8185d18279a26573ffe3f504f1c4906bd81ac885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9017c0798524b1beacb36a0d8185d18279a26573ffe3f504f1c4906bd81ac885->enter($__internal_9017c0798524b1beacb36a0d8185d18279a26573ffe3f504f1c4906bd81ac885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e32d5d214300d59c0aed41e327cac5236969ae7e230eb31464a6e57a56d8c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e32d5d214300d59c0aed41e327cac5236969ae7e230eb31464a6e57a56d8c65->enter($__internal_9e32d5d214300d59c0aed41e327cac5236969ae7e230eb31464a6e57a56d8c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_9e32d5d214300d59c0aed41e327cac5236969ae7e230eb31464a6e57a56d8c65->leave($__internal_9e32d5d214300d59c0aed41e327cac5236969ae7e230eb31464a6e57a56d8c65_prof);

        
        $__internal_9017c0798524b1beacb36a0d8185d18279a26573ffe3f504f1c4906bd81ac885->leave($__internal_9017c0798524b1beacb36a0d8185d18279a26573ffe3f504f1c4906bd81ac885_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_0d9d21bc41135c25970a9a4586ea2245eba9a2c6d8bbaafad3836c56a29a2bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9d21bc41135c25970a9a4586ea2245eba9a2c6d8bbaafad3836c56a29a2bf9->enter($__internal_0d9d21bc41135c25970a9a4586ea2245eba9a2c6d8bbaafad3836c56a29a2bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_30bd9e15928dd40ccdb5a50ed6209158fab84c60a2b3e58a34fad9fb18578e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bd9e15928dd40ccdb5a50ed6209158fab84c60a2b3e58a34fad9fb18578e4d->enter($__internal_30bd9e15928dd40ccdb5a50ed6209158fab84c60a2b3e58a34fad9fb18578e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_30bd9e15928dd40ccdb5a50ed6209158fab84c60a2b3e58a34fad9fb18578e4d->leave($__internal_30bd9e15928dd40ccdb5a50ed6209158fab84c60a2b3e58a34fad9fb18578e4d_prof);

        
        $__internal_0d9d21bc41135c25970a9a4586ea2245eba9a2c6d8bbaafad3836c56a29a2bf9->leave($__internal_0d9d21bc41135c25970a9a4586ea2245eba9a2c6d8bbaafad3836c56a29a2bf9_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_24675f9cc6175756113bac0d426afe394a1d36e3228f2e00eaacde867b51c723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24675f9cc6175756113bac0d426afe394a1d36e3228f2e00eaacde867b51c723->enter($__internal_24675f9cc6175756113bac0d426afe394a1d36e3228f2e00eaacde867b51c723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_7dd0ff1f3c6f66d536b162b179e81238fdff4b3e327a808bc7cf2d0056459e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd0ff1f3c6f66d536b162b179e81238fdff4b3e327a808bc7cf2d0056459e74->enter($__internal_7dd0ff1f3c6f66d536b162b179e81238fdff4b3e327a808bc7cf2d0056459e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        
        $__internal_7dd0ff1f3c6f66d536b162b179e81238fdff4b3e327a808bc7cf2d0056459e74->leave($__internal_7dd0ff1f3c6f66d536b162b179e81238fdff4b3e327a808bc7cf2d0056459e74_prof);

        
        $__internal_24675f9cc6175756113bac0d426afe394a1d36e3228f2e00eaacde867b51c723->leave($__internal_24675f9cc6175756113bac0d426afe394a1d36e3228f2e00eaacde867b51c723_prof);

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
