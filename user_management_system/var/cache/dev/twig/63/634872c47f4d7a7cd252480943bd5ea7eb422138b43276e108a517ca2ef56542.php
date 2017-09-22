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
        $__internal_2c14ce77f155edb55405826d3957fdb4468bad5765cd16904307157f49cd60b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c14ce77f155edb55405826d3957fdb4468bad5765cd16904307157f49cd60b1->enter($__internal_2c14ce77f155edb55405826d3957fdb4468bad5765cd16904307157f49cd60b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userList.html.twig"));

        $__internal_8b360034d13f893e3577606e51a0ad32834880e47c0a8cdb33672313f895def5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b360034d13f893e3577606e51a0ad32834880e47c0a8cdb33672313f895def5->enter($__internal_8b360034d13f893e3577606e51a0ad32834880e47c0a8cdb33672313f895def5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c14ce77f155edb55405826d3957fdb4468bad5765cd16904307157f49cd60b1->leave($__internal_2c14ce77f155edb55405826d3957fdb4468bad5765cd16904307157f49cd60b1_prof);

        
        $__internal_8b360034d13f893e3577606e51a0ad32834880e47c0a8cdb33672313f895def5->leave($__internal_8b360034d13f893e3577606e51a0ad32834880e47c0a8cdb33672313f895def5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c223fdba63cda07e38c0dcd6e8616a4871842892d84520547ded752bc683e55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c223fdba63cda07e38c0dcd6e8616a4871842892d84520547ded752bc683e55f->enter($__internal_c223fdba63cda07e38c0dcd6e8616a4871842892d84520547ded752bc683e55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f02b071d754dd1b97ab3ebe0fdb055e418c8365d5993e774971e74ea9c382bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02b071d754dd1b97ab3ebe0fdb055e418c8365d5993e774971e74ea9c382bc4->enter($__internal_f02b071d754dd1b97ab3ebe0fdb055e418c8365d5993e774971e74ea9c382bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_f02b071d754dd1b97ab3ebe0fdb055e418c8365d5993e774971e74ea9c382bc4->leave($__internal_f02b071d754dd1b97ab3ebe0fdb055e418c8365d5993e774971e74ea9c382bc4_prof);

        
        $__internal_c223fdba63cda07e38c0dcd6e8616a4871842892d84520547ded752bc683e55f->leave($__internal_c223fdba63cda07e38c0dcd6e8616a4871842892d84520547ded752bc683e55f_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_438861deb32c3d48c21aee1c3bdda3d66add39bc1448494cfce03bb1950969e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438861deb32c3d48c21aee1c3bdda3d66add39bc1448494cfce03bb1950969e2->enter($__internal_438861deb32c3d48c21aee1c3bdda3d66add39bc1448494cfce03bb1950969e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_71620177e16a069d842e053a67eb7860d33c518312c908eab5acdfe67144612d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71620177e16a069d842e053a67eb7860d33c518312c908eab5acdfe67144612d->enter($__internal_71620177e16a069d842e053a67eb7860d33c518312c908eab5acdfe67144612d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_71620177e16a069d842e053a67eb7860d33c518312c908eab5acdfe67144612d->leave($__internal_71620177e16a069d842e053a67eb7860d33c518312c908eab5acdfe67144612d_prof);

        
        $__internal_438861deb32c3d48c21aee1c3bdda3d66add39bc1448494cfce03bb1950969e2->leave($__internal_438861deb32c3d48c21aee1c3bdda3d66add39bc1448494cfce03bb1950969e2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0733d1cc0505d425acad09a8fd705ffc1de5c0fb12b7c1fc58d68dc2437fefcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0733d1cc0505d425acad09a8fd705ffc1de5c0fb12b7c1fc58d68dc2437fefcc->enter($__internal_0733d1cc0505d425acad09a8fd705ffc1de5c0fb12b7c1fc58d68dc2437fefcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9991c463582f0d2bb568b935ca835ee10e269239d3a99b80b2a2cd9254c26bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9991c463582f0d2bb568b935ca835ee10e269239d3a99b80b2a2cd9254c26bd0->enter($__internal_9991c463582f0d2bb568b935ca835ee10e269239d3a99b80b2a2cd9254c26bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_9991c463582f0d2bb568b935ca835ee10e269239d3a99b80b2a2cd9254c26bd0->leave($__internal_9991c463582f0d2bb568b935ca835ee10e269239d3a99b80b2a2cd9254c26bd0_prof);

        
        $__internal_0733d1cc0505d425acad09a8fd705ffc1de5c0fb12b7c1fc58d68dc2437fefcc->leave($__internal_0733d1cc0505d425acad09a8fd705ffc1de5c0fb12b7c1fc58d68dc2437fefcc_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_8f79488c5c2842099aa7dd4283e5d0ada2bf0085babfb0a936fde7eb7808ff2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f79488c5c2842099aa7dd4283e5d0ada2bf0085babfb0a936fde7eb7808ff2e->enter($__internal_8f79488c5c2842099aa7dd4283e5d0ada2bf0085babfb0a936fde7eb7808ff2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_05a0bb593c63c374abc76b4519204758147fcc0dc43401d057c61acfdebbc226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a0bb593c63c374abc76b4519204758147fcc0dc43401d057c61acfdebbc226->enter($__internal_05a0bb593c63c374abc76b4519204758147fcc0dc43401d057c61acfdebbc226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_05a0bb593c63c374abc76b4519204758147fcc0dc43401d057c61acfdebbc226->leave($__internal_05a0bb593c63c374abc76b4519204758147fcc0dc43401d057c61acfdebbc226_prof);

        
        $__internal_8f79488c5c2842099aa7dd4283e5d0ada2bf0085babfb0a936fde7eb7808ff2e->leave($__internal_8f79488c5c2842099aa7dd4283e5d0ada2bf0085babfb0a936fde7eb7808ff2e_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_807a9a509419209bbfe02f29a632fa806ca0372a6c26a0678b667aabd1238aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807a9a509419209bbfe02f29a632fa806ca0372a6c26a0678b667aabd1238aea->enter($__internal_807a9a509419209bbfe02f29a632fa806ca0372a6c26a0678b667aabd1238aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_ed60dd0bb3c006cb3f7961f6addba4150cd6e24d13a831f0a97808c7369fcb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed60dd0bb3c006cb3f7961f6addba4150cd6e24d13a831f0a97808c7369fcb0e->enter($__internal_ed60dd0bb3c006cb3f7961f6addba4150cd6e24d13a831f0a97808c7369fcb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        
        $__internal_ed60dd0bb3c006cb3f7961f6addba4150cd6e24d13a831f0a97808c7369fcb0e->leave($__internal_ed60dd0bb3c006cb3f7961f6addba4150cd6e24d13a831f0a97808c7369fcb0e_prof);

        
        $__internal_807a9a509419209bbfe02f29a632fa806ca0372a6c26a0678b667aabd1238aea->leave($__internal_807a9a509419209bbfe02f29a632fa806ca0372a6c26a0678b667aabd1238aea_prof);

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
