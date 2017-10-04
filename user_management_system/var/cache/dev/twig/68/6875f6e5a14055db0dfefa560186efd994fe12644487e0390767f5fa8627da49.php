<?php

/* UserBundle:User:userList.html.twig */
class __TwigTemplate_2376387b6f247c1b8043ce4720de65c197767d9245011932dd7441f7a5ecfd32 extends Twig_Template
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
        $__internal_08f3f96f4a610070f0ce72075ba1c80be84a422c0944322155971a616fb9d35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f3f96f4a610070f0ce72075ba1c80be84a422c0944322155971a616fb9d35b->enter($__internal_08f3f96f4a610070f0ce72075ba1c80be84a422c0944322155971a616fb9d35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userList.html.twig"));

        $__internal_7256b61e1527d43484b453f80800a9bcc8712e7ed13acf03e367766a687adef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7256b61e1527d43484b453f80800a9bcc8712e7ed13acf03e367766a687adef5->enter($__internal_7256b61e1527d43484b453f80800a9bcc8712e7ed13acf03e367766a687adef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f3f96f4a610070f0ce72075ba1c80be84a422c0944322155971a616fb9d35b->leave($__internal_08f3f96f4a610070f0ce72075ba1c80be84a422c0944322155971a616fb9d35b_prof);

        
        $__internal_7256b61e1527d43484b453f80800a9bcc8712e7ed13acf03e367766a687adef5->leave($__internal_7256b61e1527d43484b453f80800a9bcc8712e7ed13acf03e367766a687adef5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57167c1d1505b74e6ab2dfff27482d51361e7f845ab4e2ff11e0adf8705f58b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57167c1d1505b74e6ab2dfff27482d51361e7f845ab4e2ff11e0adf8705f58b5->enter($__internal_57167c1d1505b74e6ab2dfff27482d51361e7f845ab4e2ff11e0adf8705f58b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_00daf08398b861b6651e25e03c83d9327a68a6466ec803706ecf3c1fd12b4851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00daf08398b861b6651e25e03c83d9327a68a6466ec803706ecf3c1fd12b4851->enter($__internal_00daf08398b861b6651e25e03c83d9327a68a6466ec803706ecf3c1fd12b4851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_00daf08398b861b6651e25e03c83d9327a68a6466ec803706ecf3c1fd12b4851->leave($__internal_00daf08398b861b6651e25e03c83d9327a68a6466ec803706ecf3c1fd12b4851_prof);

        
        $__internal_57167c1d1505b74e6ab2dfff27482d51361e7f845ab4e2ff11e0adf8705f58b5->leave($__internal_57167c1d1505b74e6ab2dfff27482d51361e7f845ab4e2ff11e0adf8705f58b5_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c45b0f984e7da3ef6851b5c47c7695c3bd7d16452cc3f88484da365797783f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45b0f984e7da3ef6851b5c47c7695c3bd7d16452cc3f88484da365797783f34->enter($__internal_c45b0f984e7da3ef6851b5c47c7695c3bd7d16452cc3f88484da365797783f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8de7cc2126f12f952b13dd5c1ee3fbca22011a1363b65b96ffc6d27ca8e985d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de7cc2126f12f952b13dd5c1ee3fbca22011a1363b65b96ffc6d27ca8e985d2->enter($__internal_8de7cc2126f12f952b13dd5c1ee3fbca22011a1363b65b96ffc6d27ca8e985d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_8de7cc2126f12f952b13dd5c1ee3fbca22011a1363b65b96ffc6d27ca8e985d2->leave($__internal_8de7cc2126f12f952b13dd5c1ee3fbca22011a1363b65b96ffc6d27ca8e985d2_prof);

        
        $__internal_c45b0f984e7da3ef6851b5c47c7695c3bd7d16452cc3f88484da365797783f34->leave($__internal_c45b0f984e7da3ef6851b5c47c7695c3bd7d16452cc3f88484da365797783f34_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_937b25128c66738397fa3fabf455e7aa8b6c6bca20a5d73af0f7bd82474c29d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937b25128c66738397fa3fabf455e7aa8b6c6bca20a5d73af0f7bd82474c29d6->enter($__internal_937b25128c66738397fa3fabf455e7aa8b6c6bca20a5d73af0f7bd82474c29d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddc38fded657ba5aa123709f67a8279788a5bf28fc2e198d8800c0fda4c6bc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc38fded657ba5aa123709f67a8279788a5bf28fc2e198d8800c0fda4c6bc79->enter($__internal_ddc38fded657ba5aa123709f67a8279788a5bf28fc2e198d8800c0fda4c6bc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_ddc38fded657ba5aa123709f67a8279788a5bf28fc2e198d8800c0fda4c6bc79->leave($__internal_ddc38fded657ba5aa123709f67a8279788a5bf28fc2e198d8800c0fda4c6bc79_prof);

        
        $__internal_937b25128c66738397fa3fabf455e7aa8b6c6bca20a5d73af0f7bd82474c29d6->leave($__internal_937b25128c66738397fa3fabf455e7aa8b6c6bca20a5d73af0f7bd82474c29d6_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_ddbdc552e9162a5f40df3b170f8b69a693f8d36a92bc60de6ba4c646b036e952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddbdc552e9162a5f40df3b170f8b69a693f8d36a92bc60de6ba4c646b036e952->enter($__internal_ddbdc552e9162a5f40df3b170f8b69a693f8d36a92bc60de6ba4c646b036e952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_c0acd8cbb694c723c294436cc38ed6743e120e5d5329f9117592367c501aeb4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0acd8cbb694c723c294436cc38ed6743e120e5d5329f9117592367c501aeb4a->enter($__internal_c0acd8cbb694c723c294436cc38ed6743e120e5d5329f9117592367c501aeb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_c0acd8cbb694c723c294436cc38ed6743e120e5d5329f9117592367c501aeb4a->leave($__internal_c0acd8cbb694c723c294436cc38ed6743e120e5d5329f9117592367c501aeb4a_prof);

        
        $__internal_ddbdc552e9162a5f40df3b170f8b69a693f8d36a92bc60de6ba4c646b036e952->leave($__internal_ddbdc552e9162a5f40df3b170f8b69a693f8d36a92bc60de6ba4c646b036e952_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_fb687a473442e2998975a42cc550d642ca29a411eff94ac85554833a1914757a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb687a473442e2998975a42cc550d642ca29a411eff94ac85554833a1914757a->enter($__internal_fb687a473442e2998975a42cc550d642ca29a411eff94ac85554833a1914757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_8a705b15d791288d153755b79e96c1780ed6eb826b69024145751f9951a3fde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a705b15d791288d153755b79e96c1780ed6eb826b69024145751f9951a3fde4->enter($__internal_8a705b15d791288d153755b79e96c1780ed6eb826b69024145751f9951a3fde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 14
        echo "        <table>
            <tr>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 17
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_join_filter(twig_split_filter($this->env, $context["key"], "_"), " ")), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </tr>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                <tr>
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($context["user"]));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 23
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], $context["key"], array(), "array"), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </table>
    ";
        
        $__internal_8a705b15d791288d153755b79e96c1780ed6eb826b69024145751f9951a3fde4->leave($__internal_8a705b15d791288d153755b79e96c1780ed6eb826b69024145751f9951a3fde4_prof);

        
        $__internal_fb687a473442e2998975a42cc550d642ca29a411eff94ac85554833a1914757a->leave($__internal_fb687a473442e2998975a42cc550d642ca29a411eff94ac85554833a1914757a_prof);

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
        return array (  186 => 27,  179 => 25,  170 => 23,  166 => 22,  163 => 21,  159 => 20,  156 => 19,  147 => 17,  143 => 16,  139 => 14,  130 => 13,  117 => 11,  108 => 10,  97 => 13,  94 => 10,  85 => 9,  72 => 5,  53 => 4,  44 => 3,  11 => 1,);
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
                {% for key in users[0]|keys %}
                    <td>{{(key|split('_'))|join(' ')|capitalize}}</td>
                {% endfor %}
            </tr>
            {% for user in users %}
                <tr>
                    {% for key in user|keys %}
                        <td>{{user[key]}}</td>
                    {% endfor %}
                </tr>
            {% endfor %}
        </table>
    {% endblock %}
{% endblock %}", "UserBundle:User:userList.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/userList.html.twig");
    }
}
