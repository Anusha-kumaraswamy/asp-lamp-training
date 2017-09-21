<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'table' => array($this, 'block_table'),
            'form' => array($this, 'block_form'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d187a4c21744601cf4cf26ef2522fbbe57056ef70ba03e306039b394a05e3e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d187a4c21744601cf4cf26ef2522fbbe57056ef70ba03e306039b394a05e3e89->enter($__internal_d187a4c21744601cf4cf26ef2522fbbe57056ef70ba03e306039b394a05e3e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f6d45810fef0785e30a56f4c80d09faf5a5fbbcd327183c8db9078fb95562eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d45810fef0785e30a56f4c80d09faf5a5fbbcd327183c8db9078fb95562eed->enter($__internal_f6d45810fef0785e30a56f4c80d09faf5a5fbbcd327183c8db9078fb95562eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            <link rel = \"stylesheet\" type = \"text/css\" href = \"https://bootswatch.com/cerulean/bootstrap.css\">
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body> 
            ";
        // line 12
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "            <table>";
        $this->displayBlock('table', $context, $blocks);
        echo "</table>
            ";
        // line 14
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>";
        
        $__internal_d187a4c21744601cf4cf26ef2522fbbe57056ef70ba03e306039b394a05e3e89->leave($__internal_d187a4c21744601cf4cf26ef2522fbbe57056ef70ba03e306039b394a05e3e89_prof);

        
        $__internal_f6d45810fef0785e30a56f4c80d09faf5a5fbbcd327183c8db9078fb95562eed->leave($__internal_f6d45810fef0785e30a56f4c80d09faf5a5fbbcd327183c8db9078fb95562eed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34857a620633d70c7e93ef6919bc7e6f1c2749a6a364ae4b9f30b6e482657ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34857a620633d70c7e93ef6919bc7e6f1c2749a6a364ae4b9f30b6e482657ee0->enter($__internal_34857a620633d70c7e93ef6919bc7e6f1c2749a6a364ae4b9f30b6e482657ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d863a16c39de5bf6f43fa9a623c1a3a8511648190efadf2bded2434a12df6909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d863a16c39de5bf6f43fa9a623c1a3a8511648190efadf2bded2434a12df6909->enter($__internal_d863a16c39de5bf6f43fa9a623c1a3a8511648190efadf2bded2434a12df6909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Management System";
        
        $__internal_d863a16c39de5bf6f43fa9a623c1a3a8511648190efadf2bded2434a12df6909->leave($__internal_d863a16c39de5bf6f43fa9a623c1a3a8511648190efadf2bded2434a12df6909_prof);

        
        $__internal_34857a620633d70c7e93ef6919bc7e6f1c2749a6a364ae4b9f30b6e482657ee0->leave($__internal_34857a620633d70c7e93ef6919bc7e6f1c2749a6a364ae4b9f30b6e482657ee0_prof);

    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_f5ae7bb067edc7a2657c7c6dc22822ec23ab92b18f43f709bb53c80ae2e96f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ae7bb067edc7a2657c7c6dc22822ec23ab92b18f43f709bb53c80ae2e96f57->enter($__internal_f5ae7bb067edc7a2657c7c6dc22822ec23ab92b18f43f709bb53c80ae2e96f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_b77ff60535ba98c68a489f9819d4c7b0d0e0955c280cbfa0b188acbd0b56a23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77ff60535ba98c68a489f9819d4c7b0d0e0955c280cbfa0b188acbd0b56a23f->enter($__internal_b77ff60535ba98c68a489f9819d4c7b0d0e0955c280cbfa0b188acbd0b56a23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_b77ff60535ba98c68a489f9819d4c7b0d0e0955c280cbfa0b188acbd0b56a23f->leave($__internal_b77ff60535ba98c68a489f9819d4c7b0d0e0955c280cbfa0b188acbd0b56a23f_prof);

        
        $__internal_f5ae7bb067edc7a2657c7c6dc22822ec23ab92b18f43f709bb53c80ae2e96f57->leave($__internal_f5ae7bb067edc7a2657c7c6dc22822ec23ab92b18f43f709bb53c80ae2e96f57_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_03c5e71a0656b5bf86e0cf18fa0a52caefd04e2a3dd3d626cf66987ec43793b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c5e71a0656b5bf86e0cf18fa0a52caefd04e2a3dd3d626cf66987ec43793b3->enter($__internal_03c5e71a0656b5bf86e0cf18fa0a52caefd04e2a3dd3d626cf66987ec43793b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_3a0e46af5b6a2f952cf53c7f9cc31c1c58535a7a894a1819a7a05624199f3c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0e46af5b6a2f952cf53c7f9cc31c1c58535a7a894a1819a7a05624199f3c27->enter($__internal_3a0e46af5b6a2f952cf53c7f9cc31c1c58535a7a894a1819a7a05624199f3c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_3a0e46af5b6a2f952cf53c7f9cc31c1c58535a7a894a1819a7a05624199f3c27->leave($__internal_3a0e46af5b6a2f952cf53c7f9cc31c1c58535a7a894a1819a7a05624199f3c27_prof);

        
        $__internal_03c5e71a0656b5bf86e0cf18fa0a52caefd04e2a3dd3d626cf66987ec43793b3->leave($__internal_03c5e71a0656b5bf86e0cf18fa0a52caefd04e2a3dd3d626cf66987ec43793b3_prof);

    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
        $__internal_490dcee414b2dc17b1f878095d040911120ce1bd5e7ae32b65c46ddf78c3aef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490dcee414b2dc17b1f878095d040911120ce1bd5e7ae32b65c46ddf78c3aef9->enter($__internal_490dcee414b2dc17b1f878095d040911120ce1bd5e7ae32b65c46ddf78c3aef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f0934a8deef6c630f53bc984e69b4a531e86ce2b5e1b1a58c64c69f0d37e17cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0934a8deef6c630f53bc984e69b4a531e86ce2b5e1b1a58c64c69f0d37e17cf->enter($__internal_f0934a8deef6c630f53bc984e69b4a531e86ce2b5e1b1a58c64c69f0d37e17cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_f0934a8deef6c630f53bc984e69b4a531e86ce2b5e1b1a58c64c69f0d37e17cf->leave($__internal_f0934a8deef6c630f53bc984e69b4a531e86ce2b5e1b1a58c64c69f0d37e17cf_prof);

        
        $__internal_490dcee414b2dc17b1f878095d040911120ce1bd5e7ae32b65c46ddf78c3aef9->leave($__internal_490dcee414b2dc17b1f878095d040911120ce1bd5e7ae32b65c46ddf78c3aef9_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dbf3cb0c7680436ae7c1669fd4a8acd0bb89c77ae683858f9e6e3ac84b4cb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dbf3cb0c7680436ae7c1669fd4a8acd0bb89c77ae683858f9e6e3ac84b4cb78->enter($__internal_8dbf3cb0c7680436ae7c1669fd4a8acd0bb89c77ae683858f9e6e3ac84b4cb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_71ca9a02c0cfd78bfc1525bb172abce074d71fcbddde5f6818ea8204e2786b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ca9a02c0cfd78bfc1525bb172abce074d71fcbddde5f6818ea8204e2786b46->enter($__internal_71ca9a02c0cfd78bfc1525bb172abce074d71fcbddde5f6818ea8204e2786b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_71ca9a02c0cfd78bfc1525bb172abce074d71fcbddde5f6818ea8204e2786b46->leave($__internal_71ca9a02c0cfd78bfc1525bb172abce074d71fcbddde5f6818ea8204e2786b46_prof);

        
        $__internal_8dbf3cb0c7680436ae7c1669fd4a8acd0bb89c77ae683858f9e6e3ac84b4cb78->leave($__internal_8dbf3cb0c7680436ae7c1669fd4a8acd0bb89c77ae683858f9e6e3ac84b4cb78_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 15,  124 => 14,  107 => 13,  90 => 12,  72 => 5,  61 => 16,  58 => 15,  56 => 14,  51 => 13,  49 => 12,  43 => 9,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}User Management System{% endblock %}</title>
        <style>
            <link rel = \"stylesheet\" type = \"text/css\" href = \"https://bootswatch.com/cerulean/bootstrap.css\">
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body> 
            {% block navbar %}{% endblock %}
            <table>{% block table %}{% endblock %}</table>
            {% block form %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "/var/www/html/asp-lamp-training/user_management_system/app/Resources/views/base.html.twig");
    }
}
