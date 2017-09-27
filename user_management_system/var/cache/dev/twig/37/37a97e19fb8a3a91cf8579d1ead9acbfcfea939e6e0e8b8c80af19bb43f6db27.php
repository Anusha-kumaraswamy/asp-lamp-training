<?php

/* UserBundle:User:userProfile.html.twig */
class __TwigTemplate_b565221dea81da4c374f07d9f1675ae9f0cb571fba6f55f04085d78ad486fedf extends Twig_Template
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
        $__internal_52e11a470e65ceec597daa1f4534606a674895043c8640820bd599f73c4b7a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e11a470e65ceec597daa1f4534606a674895043c8640820bd599f73c4b7a0b->enter($__internal_52e11a470e65ceec597daa1f4534606a674895043c8640820bd599f73c4b7a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $__internal_f0afac85085184bed6b928de315facec71e3c389c3f5c0dcbae3c150942d06c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0afac85085184bed6b928de315facec71e3c389c3f5c0dcbae3c150942d06c9->enter($__internal_f0afac85085184bed6b928de315facec71e3c389c3f5c0dcbae3c150942d06c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52e11a470e65ceec597daa1f4534606a674895043c8640820bd599f73c4b7a0b->leave($__internal_52e11a470e65ceec597daa1f4534606a674895043c8640820bd599f73c4b7a0b_prof);

        
        $__internal_f0afac85085184bed6b928de315facec71e3c389c3f5c0dcbae3c150942d06c9->leave($__internal_f0afac85085184bed6b928de315facec71e3c389c3f5c0dcbae3c150942d06c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34c9af759e20ce9e7ec5d32848e18a6f88b694e1f337f8a4482efd95ebedd806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c9af759e20ce9e7ec5d32848e18a6f88b694e1f337f8a4482efd95ebedd806->enter($__internal_34c9af759e20ce9e7ec5d32848e18a6f88b694e1f337f8a4482efd95ebedd806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4e2dac494b8bd056863aa81f7a4876681e4a7df3b750fa13bfbf6c9248f7f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e2dac494b8bd056863aa81f7a4876681e4a7df3b750fa13bfbf6c9248f7f27->enter($__internal_a4e2dac494b8bd056863aa81f7a4876681e4a7df3b750fa13bfbf6c9248f7f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_a4e2dac494b8bd056863aa81f7a4876681e4a7df3b750fa13bfbf6c9248f7f27->leave($__internal_a4e2dac494b8bd056863aa81f7a4876681e4a7df3b750fa13bfbf6c9248f7f27_prof);

        
        $__internal_34c9af759e20ce9e7ec5d32848e18a6f88b694e1f337f8a4482efd95ebedd806->leave($__internal_34c9af759e20ce9e7ec5d32848e18a6f88b694e1f337f8a4482efd95ebedd806_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7e463e082a8c659a0204dfd0d90cdaef35f8b6c7c5e45f446a37114598937c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e463e082a8c659a0204dfd0d90cdaef35f8b6c7c5e45f446a37114598937c4->enter($__internal_c7e463e082a8c659a0204dfd0d90cdaef35f8b6c7c5e45f446a37114598937c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3a35229a200f5cd7a644f2d7f3a688046229c6eb80dd7b4322981771270f211c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a35229a200f5cd7a644f2d7f3a688046229c6eb80dd7b4322981771270f211c->enter($__internal_3a35229a200f5cd7a644f2d7f3a688046229c6eb80dd7b4322981771270f211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_3a35229a200f5cd7a644f2d7f3a688046229c6eb80dd7b4322981771270f211c->leave($__internal_3a35229a200f5cd7a644f2d7f3a688046229c6eb80dd7b4322981771270f211c_prof);

        
        $__internal_c7e463e082a8c659a0204dfd0d90cdaef35f8b6c7c5e45f446a37114598937c4->leave($__internal_c7e463e082a8c659a0204dfd0d90cdaef35f8b6c7c5e45f446a37114598937c4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_910335b71083134878604b732b7c3b674d7d0af95d43897544062c962367f735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910335b71083134878604b732b7c3b674d7d0af95d43897544062c962367f735->enter($__internal_910335b71083134878604b732b7c3b674d7d0af95d43897544062c962367f735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af96334e6bc06cd62b5d34b04ca3d7baa59c2bdc72ccaff3ab5877adfa5cca14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af96334e6bc06cd62b5d34b04ca3d7baa59c2bdc72ccaff3ab5877adfa5cca14->enter($__internal_af96334e6bc06cd62b5d34b04ca3d7baa59c2bdc72ccaff3ab5877adfa5cca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_af96334e6bc06cd62b5d34b04ca3d7baa59c2bdc72ccaff3ab5877adfa5cca14->leave($__internal_af96334e6bc06cd62b5d34b04ca3d7baa59c2bdc72ccaff3ab5877adfa5cca14_prof);

        
        $__internal_910335b71083134878604b732b7c3b674d7d0af95d43897544062c962367f735->leave($__internal_910335b71083134878604b732b7c3b674d7d0af95d43897544062c962367f735_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_f41135cf9e052e5767b073b0d52e4943499717e8063f6d350033740f9146cf25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41135cf9e052e5767b073b0d52e4943499717e8063f6d350033740f9146cf25->enter($__internal_f41135cf9e052e5767b073b0d52e4943499717e8063f6d350033740f9146cf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6345ffb237bb77f8c9977378fb377bc4a954f6be2c6aa0aa8e8a864e8b040b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6345ffb237bb77f8c9977378fb377bc4a954f6be2c6aa0aa8e8a864e8b040b0d->enter($__internal_6345ffb237bb77f8c9977378fb377bc4a954f6be2c6aa0aa8e8a864e8b040b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_6345ffb237bb77f8c9977378fb377bc4a954f6be2c6aa0aa8e8a864e8b040b0d->leave($__internal_6345ffb237bb77f8c9977378fb377bc4a954f6be2c6aa0aa8e8a864e8b040b0d_prof);

        
        $__internal_f41135cf9e052e5767b073b0d52e4943499717e8063f6d350033740f9146cf25->leave($__internal_f41135cf9e052e5767b073b0d52e4943499717e8063f6d350033740f9146cf25_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_73873beb9876aa1a92001533e8f170f4a1df88c01f876fb9475726247d39f3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73873beb9876aa1a92001533e8f170f4a1df88c01f876fb9475726247d39f3c1->enter($__internal_73873beb9876aa1a92001533e8f170f4a1df88c01f876fb9475726247d39f3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_f5ed992c41b7324131b49e51018e24dda1ff6762d17f92dfa9059fb8ce55dd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ed992c41b7324131b49e51018e24dda1ff6762d17f92dfa9059fb8ce55dd19->enter($__internal_f5ed992c41b7324131b49e51018e24dda1ff6762d17f92dfa9059fb8ce55dd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 14
        echo "        <table>
            ";
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $context["key"], array(), "array"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            ";
        // line 23
        echo "        </table>
    ";
        
        $__internal_f5ed992c41b7324131b49e51018e24dda1ff6762d17f92dfa9059fb8ce55dd19->leave($__internal_f5ed992c41b7324131b49e51018e24dda1ff6762d17f92dfa9059fb8ce55dd19_prof);

        
        $__internal_73873beb9876aa1a92001533e8f170f4a1df88c01f876fb9475726247d39f3c1->leave($__internal_73873beb9876aa1a92001533e8f170f4a1df88c01f876fb9475726247d39f3c1_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f75991f0dedfe80c69ebc7373b3ac0f94a725a5f0bdb8ad844df3877e68f5192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75991f0dedfe80c69ebc7373b3ac0f94a725a5f0bdb8ad844df3877e68f5192->enter($__internal_f75991f0dedfe80c69ebc7373b3ac0f94a725a5f0bdb8ad844df3877e68f5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f45a8ea463bbb875f72a9efe80dfcb24e53df5eb446e795d66686fefa2595b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45a8ea463bbb875f72a9efe80dfcb24e53df5eb446e795d66686fefa2595b9e->enter($__internal_f45a8ea463bbb875f72a9efe80dfcb24e53df5eb446e795d66686fefa2595b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/js/createTable.js"), "html", null, true);
        echo "\">            
        </script>
    ";
        
        $__internal_f45a8ea463bbb875f72a9efe80dfcb24e53df5eb446e795d66686fefa2595b9e->leave($__internal_f45a8ea463bbb875f72a9efe80dfcb24e53df5eb446e795d66686fefa2595b9e_prof);

        
        $__internal_f75991f0dedfe80c69ebc7373b3ac0f94a725a5f0bdb8ad844df3877e68f5192->leave($__internal_f75991f0dedfe80c69ebc7373b3ac0f94a725a5f0bdb8ad844df3877e68f5192_prof);

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
        return array (  189 => 26,  180 => 25,  169 => 23,  167 => 22,  158 => 19,  154 => 18,  151 => 17,  146 => 16,  143 => 14,  134 => 13,  121 => 11,  112 => 10,  101 => 25,  98 => 13,  95 => 10,  86 => 9,  73 => 5,  54 => 4,  45 => 3,  11 => 1,);
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
            {#{% for entity in entities %}#}
                {% for key in entities|keys %}
                    <tr>
                        <td>{{(key|split('_'))|join(' ')|capitalize}}</td>
                        <td>{{entity[key]}}</td>
                    </tr>
                {% endfor %}
            {#{% endfor %}#}
        </table>
    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('bundles/user/js/createTable.js') }}\">            
        </script>
    {% endblock %}
{% endblock %}", "UserBundle:User:userProfile.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/userProfile.html.twig");
    }
}
