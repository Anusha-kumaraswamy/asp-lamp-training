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
        $__internal_c035b2675e921b8dc800323b8da1ad25014f2b2c2cc125b3de593fff1136aac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c035b2675e921b8dc800323b8da1ad25014f2b2c2cc125b3de593fff1136aac4->enter($__internal_c035b2675e921b8dc800323b8da1ad25014f2b2c2cc125b3de593fff1136aac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userList.html.twig"));

        $__internal_79902654d65339e4a7f1912169213ce3466d094154434bf139d7522b32738a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79902654d65339e4a7f1912169213ce3466d094154434bf139d7522b32738a70->enter($__internal_79902654d65339e4a7f1912169213ce3466d094154434bf139d7522b32738a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c035b2675e921b8dc800323b8da1ad25014f2b2c2cc125b3de593fff1136aac4->leave($__internal_c035b2675e921b8dc800323b8da1ad25014f2b2c2cc125b3de593fff1136aac4_prof);

        
        $__internal_79902654d65339e4a7f1912169213ce3466d094154434bf139d7522b32738a70->leave($__internal_79902654d65339e4a7f1912169213ce3466d094154434bf139d7522b32738a70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b373bc644f46d4c48b024f868799d1917294ee84054dc7f68e9b0192e918677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b373bc644f46d4c48b024f868799d1917294ee84054dc7f68e9b0192e918677->enter($__internal_1b373bc644f46d4c48b024f868799d1917294ee84054dc7f68e9b0192e918677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1e2f498b789fc746ce2a18647c2e826434ffe0d8acd9455789bf5fcfc8c1b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e2f498b789fc746ce2a18647c2e826434ffe0d8acd9455789bf5fcfc8c1b80->enter($__internal_d1e2f498b789fc746ce2a18647c2e826434ffe0d8acd9455789bf5fcfc8c1b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_d1e2f498b789fc746ce2a18647c2e826434ffe0d8acd9455789bf5fcfc8c1b80->leave($__internal_d1e2f498b789fc746ce2a18647c2e826434ffe0d8acd9455789bf5fcfc8c1b80_prof);

        
        $__internal_1b373bc644f46d4c48b024f868799d1917294ee84054dc7f68e9b0192e918677->leave($__internal_1b373bc644f46d4c48b024f868799d1917294ee84054dc7f68e9b0192e918677_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c1e6ccd758ab6982a48f8e1a3d115395827cc33f8dd3d689bfc2edacce46c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1e6ccd758ab6982a48f8e1a3d115395827cc33f8dd3d689bfc2edacce46c49->enter($__internal_3c1e6ccd758ab6982a48f8e1a3d115395827cc33f8dd3d689bfc2edacce46c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ff183b697d89ac86892261c889cf308d238e2f59b6415eb1157f6b7cef76eaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff183b697d89ac86892261c889cf308d238e2f59b6415eb1157f6b7cef76eaa5->enter($__internal_ff183b697d89ac86892261c889cf308d238e2f59b6415eb1157f6b7cef76eaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_ff183b697d89ac86892261c889cf308d238e2f59b6415eb1157f6b7cef76eaa5->leave($__internal_ff183b697d89ac86892261c889cf308d238e2f59b6415eb1157f6b7cef76eaa5_prof);

        
        $__internal_3c1e6ccd758ab6982a48f8e1a3d115395827cc33f8dd3d689bfc2edacce46c49->leave($__internal_3c1e6ccd758ab6982a48f8e1a3d115395827cc33f8dd3d689bfc2edacce46c49_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_494b9b93596f2d1e150464c27c080bb8f4f4b0ebb23eeab2beb35f7c349b2dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494b9b93596f2d1e150464c27c080bb8f4f4b0ebb23eeab2beb35f7c349b2dff->enter($__internal_494b9b93596f2d1e150464c27c080bb8f4f4b0ebb23eeab2beb35f7c349b2dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df0b860d57c9ef3d3edf2a61dee377a1f4286e56986e39a5faa02647111dd370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0b860d57c9ef3d3edf2a61dee377a1f4286e56986e39a5faa02647111dd370->enter($__internal_df0b860d57c9ef3d3edf2a61dee377a1f4286e56986e39a5faa02647111dd370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_df0b860d57c9ef3d3edf2a61dee377a1f4286e56986e39a5faa02647111dd370->leave($__internal_df0b860d57c9ef3d3edf2a61dee377a1f4286e56986e39a5faa02647111dd370_prof);

        
        $__internal_494b9b93596f2d1e150464c27c080bb8f4f4b0ebb23eeab2beb35f7c349b2dff->leave($__internal_494b9b93596f2d1e150464c27c080bb8f4f4b0ebb23eeab2beb35f7c349b2dff_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_557ff1a8e2ed9edacb3dbe82268e67124b83c722bbdcd0ccaddc8854d54e323b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557ff1a8e2ed9edacb3dbe82268e67124b83c722bbdcd0ccaddc8854d54e323b->enter($__internal_557ff1a8e2ed9edacb3dbe82268e67124b83c722bbdcd0ccaddc8854d54e323b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_34569523d67604cb20f99a228ba3344e8d3ac481c8f4ff78f4e2881f028fcbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34569523d67604cb20f99a228ba3344e8d3ac481c8f4ff78f4e2881f028fcbe2->enter($__internal_34569523d67604cb20f99a228ba3344e8d3ac481c8f4ff78f4e2881f028fcbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_34569523d67604cb20f99a228ba3344e8d3ac481c8f4ff78f4e2881f028fcbe2->leave($__internal_34569523d67604cb20f99a228ba3344e8d3ac481c8f4ff78f4e2881f028fcbe2_prof);

        
        $__internal_557ff1a8e2ed9edacb3dbe82268e67124b83c722bbdcd0ccaddc8854d54e323b->leave($__internal_557ff1a8e2ed9edacb3dbe82268e67124b83c722bbdcd0ccaddc8854d54e323b_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_1e43a55ec80fe90d50358cbe2b1d9238ffac90b0eee20503acba50c407b3038b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e43a55ec80fe90d50358cbe2b1d9238ffac90b0eee20503acba50c407b3038b->enter($__internal_1e43a55ec80fe90d50358cbe2b1d9238ffac90b0eee20503acba50c407b3038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_9967438a1d1a311fbb120b655bc4ffc7d32a13b7d813f0875a8f52b39c390afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9967438a1d1a311fbb120b655bc4ffc7d32a13b7d813f0875a8f52b39c390afb->enter($__internal_9967438a1d1a311fbb120b655bc4ffc7d32a13b7d813f0875a8f52b39c390afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        
        $__internal_9967438a1d1a311fbb120b655bc4ffc7d32a13b7d813f0875a8f52b39c390afb->leave($__internal_9967438a1d1a311fbb120b655bc4ffc7d32a13b7d813f0875a8f52b39c390afb_prof);

        
        $__internal_1e43a55ec80fe90d50358cbe2b1d9238ffac90b0eee20503acba50c407b3038b->leave($__internal_1e43a55ec80fe90d50358cbe2b1d9238ffac90b0eee20503acba50c407b3038b_prof);

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
