<?php

/* UserBundle:User:userProfile.html.twig */
class __TwigTemplate_bdd03b341a60626a2ee319a05ee1963e498cec172340751bb6990e1f03c6abe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:userProfile.html.twig", 1);
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
        $__internal_5c741b94e03a80f6b77c2f0f521bfd23270e558c40a60e95201680e0659a1686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c741b94e03a80f6b77c2f0f521bfd23270e558c40a60e95201680e0659a1686->enter($__internal_5c741b94e03a80f6b77c2f0f521bfd23270e558c40a60e95201680e0659a1686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $__internal_046121c8e53f126b3e6b9d7d125567995cb797fcf86b039969f65e327ffaed20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046121c8e53f126b3e6b9d7d125567995cb797fcf86b039969f65e327ffaed20->enter($__internal_046121c8e53f126b3e6b9d7d125567995cb797fcf86b039969f65e327ffaed20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c741b94e03a80f6b77c2f0f521bfd23270e558c40a60e95201680e0659a1686->leave($__internal_5c741b94e03a80f6b77c2f0f521bfd23270e558c40a60e95201680e0659a1686_prof);

        
        $__internal_046121c8e53f126b3e6b9d7d125567995cb797fcf86b039969f65e327ffaed20->leave($__internal_046121c8e53f126b3e6b9d7d125567995cb797fcf86b039969f65e327ffaed20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a78bdc8039bb1a4d36fdd549947bd41ecb35e65a5293a6100e70c1e29d55d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a78bdc8039bb1a4d36fdd549947bd41ecb35e65a5293a6100e70c1e29d55d94->enter($__internal_0a78bdc8039bb1a4d36fdd549947bd41ecb35e65a5293a6100e70c1e29d55d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9eff6ea9a424b5ab9ff202a3c90e3ab012beac3776d80533f7ac0b1592f0c29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eff6ea9a424b5ab9ff202a3c90e3ab012beac3776d80533f7ac0b1592f0c29e->enter($__internal_9eff6ea9a424b5ab9ff202a3c90e3ab012beac3776d80533f7ac0b1592f0c29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_9eff6ea9a424b5ab9ff202a3c90e3ab012beac3776d80533f7ac0b1592f0c29e->leave($__internal_9eff6ea9a424b5ab9ff202a3c90e3ab012beac3776d80533f7ac0b1592f0c29e_prof);

        
        $__internal_0a78bdc8039bb1a4d36fdd549947bd41ecb35e65a5293a6100e70c1e29d55d94->leave($__internal_0a78bdc8039bb1a4d36fdd549947bd41ecb35e65a5293a6100e70c1e29d55d94_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f4d4518c80f82fb3c9e688e535cc22ab0b0f5c3cf146c0d5ee37d6b96a0907d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4d4518c80f82fb3c9e688e535cc22ab0b0f5c3cf146c0d5ee37d6b96a0907d->enter($__internal_8f4d4518c80f82fb3c9e688e535cc22ab0b0f5c3cf146c0d5ee37d6b96a0907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f6d64d19be38ca20c7dcd1067982426dcf8cec3c56c82721037a333da8d7b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6d64d19be38ca20c7dcd1067982426dcf8cec3c56c82721037a333da8d7b9d->enter($__internal_8f6d64d19be38ca20c7dcd1067982426dcf8cec3c56c82721037a333da8d7b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_8f6d64d19be38ca20c7dcd1067982426dcf8cec3c56c82721037a333da8d7b9d->leave($__internal_8f6d64d19be38ca20c7dcd1067982426dcf8cec3c56c82721037a333da8d7b9d_prof);

        
        $__internal_8f4d4518c80f82fb3c9e688e535cc22ab0b0f5c3cf146c0d5ee37d6b96a0907d->leave($__internal_8f4d4518c80f82fb3c9e688e535cc22ab0b0f5c3cf146c0d5ee37d6b96a0907d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e0135a2323509dcee4698f128c67e6fe95c6d0c6169daf7843b55694f91af88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0135a2323509dcee4698f128c67e6fe95c6d0c6169daf7843b55694f91af88->enter($__internal_5e0135a2323509dcee4698f128c67e6fe95c6d0c6169daf7843b55694f91af88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8421d43dc6b3a58d51450f0b8adaad15d567ccd43cee7b3cff4957766dde2fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8421d43dc6b3a58d51450f0b8adaad15d567ccd43cee7b3cff4957766dde2fdc->enter($__internal_8421d43dc6b3a58d51450f0b8adaad15d567ccd43cee7b3cff4957766dde2fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_8421d43dc6b3a58d51450f0b8adaad15d567ccd43cee7b3cff4957766dde2fdc->leave($__internal_8421d43dc6b3a58d51450f0b8adaad15d567ccd43cee7b3cff4957766dde2fdc_prof);

        
        $__internal_5e0135a2323509dcee4698f128c67e6fe95c6d0c6169daf7843b55694f91af88->leave($__internal_5e0135a2323509dcee4698f128c67e6fe95c6d0c6169daf7843b55694f91af88_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_87c6ca0a5bbb760fdb035199f3f20bd759f9fa1437bc93d8949d33148c3c3e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c6ca0a5bbb760fdb035199f3f20bd759f9fa1437bc93d8949d33148c3c3e5e->enter($__internal_87c6ca0a5bbb760fdb035199f3f20bd759f9fa1437bc93d8949d33148c3c3e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_e9686867723a5827a9bbd014c4eb6968d3807230bc74081c42b4e46b05596191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9686867723a5827a9bbd014c4eb6968d3807230bc74081c42b4e46b05596191->enter($__internal_e9686867723a5827a9bbd014c4eb6968d3807230bc74081c42b4e46b05596191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_e9686867723a5827a9bbd014c4eb6968d3807230bc74081c42b4e46b05596191->leave($__internal_e9686867723a5827a9bbd014c4eb6968d3807230bc74081c42b4e46b05596191_prof);

        
        $__internal_87c6ca0a5bbb760fdb035199f3f20bd759f9fa1437bc93d8949d33148c3c3e5e->leave($__internal_87c6ca0a5bbb760fdb035199f3f20bd759f9fa1437bc93d8949d33148c3c3e5e_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_2093f4579de732cc83f0d3640854230c1a6bfb6819d3c4d800fbc62c3ea32e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2093f4579de732cc83f0d3640854230c1a6bfb6819d3c4d800fbc62c3ea32e7b->enter($__internal_2093f4579de732cc83f0d3640854230c1a6bfb6819d3c4d800fbc62c3ea32e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_61f23e81b3ac8769c741003e969cac2d5903466e66fb4569d965082a553e1074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f23e81b3ac8769c741003e969cac2d5903466e66fb4569d965082a553e1074->enter($__internal_61f23e81b3ac8769c741003e969cac2d5903466e66fb4569d965082a553e1074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 14
        echo "        <table>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 17
                echo "                    <tr>
                        <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_join_filter(twig_split_filter($this->env, $context["key"], "_"), " ")), "html", null, true);
                echo "</td>
                        <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], $context["key"], array(), "array"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </table>
    ";
        
        $__internal_61f23e81b3ac8769c741003e969cac2d5903466e66fb4569d965082a553e1074->leave($__internal_61f23e81b3ac8769c741003e969cac2d5903466e66fb4569d965082a553e1074_prof);

        
        $__internal_2093f4579de732cc83f0d3640854230c1a6bfb6819d3c4d800fbc62c3ea32e7b->leave($__internal_2093f4579de732cc83f0d3640854230c1a6bfb6819d3c4d800fbc62c3ea32e7b_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90619db5e85e7bcf37f1e9dd8648519f48200daaa00bb39c88736f7a07f7ee29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90619db5e85e7bcf37f1e9dd8648519f48200daaa00bb39c88736f7a07f7ee29->enter($__internal_90619db5e85e7bcf37f1e9dd8648519f48200daaa00bb39c88736f7a07f7ee29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fe05125e94a2a8012d24991ee63e7e7bf5a1977cfdd06b2cea3d17aa3c79b500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe05125e94a2a8012d24991ee63e7e7bf5a1977cfdd06b2cea3d17aa3c79b500->enter($__internal_fe05125e94a2a8012d24991ee63e7e7bf5a1977cfdd06b2cea3d17aa3c79b500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/js/createTable.js"), "html", null, true);
        echo "\">            
        </script>
    ";
        
        $__internal_fe05125e94a2a8012d24991ee63e7e7bf5a1977cfdd06b2cea3d17aa3c79b500->leave($__internal_fe05125e94a2a8012d24991ee63e7e7bf5a1977cfdd06b2cea3d17aa3c79b500_prof);

        
        $__internal_90619db5e85e7bcf37f1e9dd8648519f48200daaa00bb39c88736f7a07f7ee29->leave($__internal_90619db5e85e7bcf37f1e9dd8648519f48200daaa00bb39c88736f7a07f7ee29_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:userProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 26,  188 => 25,  177 => 23,  171 => 22,  162 => 19,  158 => 18,  155 => 17,  150 => 16,  146 => 15,  143 => 14,  134 => 13,  121 => 11,  112 => 10,  101 => 25,  98 => 13,  95 => 10,  86 => 9,  73 => 5,  54 => 4,  45 => 3,  11 => 1,);
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
            {% for entity in entities %}
                {% for key in entities|keys %}
                    <tr>
                        <td>{{(key|split('_'))|join(' ')|capitalize}}</td>
                        <td>{{entity[key]}}</td>
                    </tr>
                {% endfor %}
            {% endfor %}
        </table>
    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('bundles/user/js/createTable.js') }}\">            
        </script>
    {% endblock %}
{% endblock %}", "UserBundle:User:userProfile.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/userProfile.html.twig");
    }
}
