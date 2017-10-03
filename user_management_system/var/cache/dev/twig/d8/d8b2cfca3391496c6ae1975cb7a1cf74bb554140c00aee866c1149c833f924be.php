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
        $__internal_c47c035005a6d69acbd616838c431c57f52a60eee8498c82a227b967336c2649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47c035005a6d69acbd616838c431c57f52a60eee8498c82a227b967336c2649->enter($__internal_c47c035005a6d69acbd616838c431c57f52a60eee8498c82a227b967336c2649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $__internal_39e672fdd540a2f27bd83dec6502df17ca3fb0a1dd6c6b9c167ff3e09be05833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e672fdd540a2f27bd83dec6502df17ca3fb0a1dd6c6b9c167ff3e09be05833->enter($__internal_39e672fdd540a2f27bd83dec6502df17ca3fb0a1dd6c6b9c167ff3e09be05833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userProfile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c47c035005a6d69acbd616838c431c57f52a60eee8498c82a227b967336c2649->leave($__internal_c47c035005a6d69acbd616838c431c57f52a60eee8498c82a227b967336c2649_prof);

        
        $__internal_39e672fdd540a2f27bd83dec6502df17ca3fb0a1dd6c6b9c167ff3e09be05833->leave($__internal_39e672fdd540a2f27bd83dec6502df17ca3fb0a1dd6c6b9c167ff3e09be05833_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_02e75a93a612da6acfaac164130324c64f24a605f220747e18a008d5846b96b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e75a93a612da6acfaac164130324c64f24a605f220747e18a008d5846b96b8->enter($__internal_02e75a93a612da6acfaac164130324c64f24a605f220747e18a008d5846b96b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9efdb4e30855ce5efd7a6f620735c509d3a3eab192dc01641d04a570be716b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efdb4e30855ce5efd7a6f620735c509d3a3eab192dc01641d04a570be716b66->enter($__internal_9efdb4e30855ce5efd7a6f620735c509d3a3eab192dc01641d04a570be716b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_9efdb4e30855ce5efd7a6f620735c509d3a3eab192dc01641d04a570be716b66->leave($__internal_9efdb4e30855ce5efd7a6f620735c509d3a3eab192dc01641d04a570be716b66_prof);

        
        $__internal_02e75a93a612da6acfaac164130324c64f24a605f220747e18a008d5846b96b8->leave($__internal_02e75a93a612da6acfaac164130324c64f24a605f220747e18a008d5846b96b8_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75cd83df3013bd386d6ce8316860c61c3541c01e7def234269a22cac00102656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75cd83df3013bd386d6ce8316860c61c3541c01e7def234269a22cac00102656->enter($__internal_75cd83df3013bd386d6ce8316860c61c3541c01e7def234269a22cac00102656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a92e24836674ef67f702d577fea8cd1bd5e57d7440735c8557cb4bb5b72068dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92e24836674ef67f702d577fea8cd1bd5e57d7440735c8557cb4bb5b72068dc->enter($__internal_a92e24836674ef67f702d577fea8cd1bd5e57d7440735c8557cb4bb5b72068dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_a92e24836674ef67f702d577fea8cd1bd5e57d7440735c8557cb4bb5b72068dc->leave($__internal_a92e24836674ef67f702d577fea8cd1bd5e57d7440735c8557cb4bb5b72068dc_prof);

        
        $__internal_75cd83df3013bd386d6ce8316860c61c3541c01e7def234269a22cac00102656->leave($__internal_75cd83df3013bd386d6ce8316860c61c3541c01e7def234269a22cac00102656_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d726867a3cdea8573dc04fc7027974c9852c338b58914890b042069d09c3c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d726867a3cdea8573dc04fc7027974c9852c338b58914890b042069d09c3c65->enter($__internal_4d726867a3cdea8573dc04fc7027974c9852c338b58914890b042069d09c3c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08ca25c87efb1ec57618fac38f55e3580ad19a94e3a51d103c3c922beab92b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ca25c87efb1ec57618fac38f55e3580ad19a94e3a51d103c3c922beab92b65->enter($__internal_08ca25c87efb1ec57618fac38f55e3580ad19a94e3a51d103c3c922beab92b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_08ca25c87efb1ec57618fac38f55e3580ad19a94e3a51d103c3c922beab92b65->leave($__internal_08ca25c87efb1ec57618fac38f55e3580ad19a94e3a51d103c3c922beab92b65_prof);

        
        $__internal_4d726867a3cdea8573dc04fc7027974c9852c338b58914890b042069d09c3c65->leave($__internal_4d726867a3cdea8573dc04fc7027974c9852c338b58914890b042069d09c3c65_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_851a1da561d6c979cff4c48bbf716275c900ed0476a78b862f4b62caaba17717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851a1da561d6c979cff4c48bbf716275c900ed0476a78b862f4b62caaba17717->enter($__internal_851a1da561d6c979cff4c48bbf716275c900ed0476a78b862f4b62caaba17717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_ca3e0404467fbb27416138a068dfa1edfe33ab137b88188c93dc1f1137cab6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3e0404467fbb27416138a068dfa1edfe33ab137b88188c93dc1f1137cab6fc->enter($__internal_ca3e0404467fbb27416138a068dfa1edfe33ab137b88188c93dc1f1137cab6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_ca3e0404467fbb27416138a068dfa1edfe33ab137b88188c93dc1f1137cab6fc->leave($__internal_ca3e0404467fbb27416138a068dfa1edfe33ab137b88188c93dc1f1137cab6fc_prof);

        
        $__internal_851a1da561d6c979cff4c48bbf716275c900ed0476a78b862f4b62caaba17717->leave($__internal_851a1da561d6c979cff4c48bbf716275c900ed0476a78b862f4b62caaba17717_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_8f3e6407bfaf55eb091852f7e617eecc1e0d9ae0dc1b193c423d1e99eebbf4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3e6407bfaf55eb091852f7e617eecc1e0d9ae0dc1b193c423d1e99eebbf4e9->enter($__internal_8f3e6407bfaf55eb091852f7e617eecc1e0d9ae0dc1b193c423d1e99eebbf4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_dc9d5c6347fb0e461fda36bc6b7ff9e7c51d01aec64d4055707160b8d46f0030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9d5c6347fb0e461fda36bc6b7ff9e7c51d01aec64d4055707160b8d46f0030->enter($__internal_dc9d5c6347fb0e461fda36bc6b7ff9e7c51d01aec64d4055707160b8d46f0030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        
        $__internal_dc9d5c6347fb0e461fda36bc6b7ff9e7c51d01aec64d4055707160b8d46f0030->leave($__internal_dc9d5c6347fb0e461fda36bc6b7ff9e7c51d01aec64d4055707160b8d46f0030_prof);

        
        $__internal_8f3e6407bfaf55eb091852f7e617eecc1e0d9ae0dc1b193c423d1e99eebbf4e9->leave($__internal_8f3e6407bfaf55eb091852f7e617eecc1e0d9ae0dc1b193c423d1e99eebbf4e9_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f764bad296f0df1c089ea9410b9a443666d91672a4bae46356c6d4cb52772ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f764bad296f0df1c089ea9410b9a443666d91672a4bae46356c6d4cb52772ba->enter($__internal_1f764bad296f0df1c089ea9410b9a443666d91672a4bae46356c6d4cb52772ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0a4f5b957d3bb7f5cd16768281723a52c04eff381b28e4d68b07959f84fe0bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4f5b957d3bb7f5cd16768281723a52c04eff381b28e4d68b07959f84fe0bf2->enter($__internal_0a4f5b957d3bb7f5cd16768281723a52c04eff381b28e4d68b07959f84fe0bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/js/createTable.js"), "html", null, true);
        echo "\">            
        </script>
    ";
        
        $__internal_0a4f5b957d3bb7f5cd16768281723a52c04eff381b28e4d68b07959f84fe0bf2->leave($__internal_0a4f5b957d3bb7f5cd16768281723a52c04eff381b28e4d68b07959f84fe0bf2_prof);

        
        $__internal_1f764bad296f0df1c089ea9410b9a443666d91672a4bae46356c6d4cb52772ba->leave($__internal_1f764bad296f0df1c089ea9410b9a443666d91672a4bae46356c6d4cb52772ba_prof);

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
