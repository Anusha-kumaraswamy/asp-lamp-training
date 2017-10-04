<?php

/* base.html.twig */
class __TwigTemplate_479d5f3c7c798a8133a423dead28eb43cc304e79120d5008571d0983f51e62f7 extends Twig_Template
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
        $__internal_fd0330efec4b8b503cfb10e174b29481520de9ee44728cf380ab9c93716b18f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0330efec4b8b503cfb10e174b29481520de9ee44728cf380ab9c93716b18f6->enter($__internal_fd0330efec4b8b503cfb10e174b29481520de9ee44728cf380ab9c93716b18f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7c67e31bd23fd650c27e1c862550d0c0e29695bacebd53a1ef5365f45c574316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c67e31bd23fd650c27e1c862550d0c0e29695bacebd53a1ef5365f45c574316->enter($__internal_7c67e31bd23fd650c27e1c862550d0c0e29695bacebd53a1ef5365f45c574316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "            ";
        $this->displayBlock('table', $context, $blocks);
        // line 14
        echo "            ";
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>";
        
        $__internal_fd0330efec4b8b503cfb10e174b29481520de9ee44728cf380ab9c93716b18f6->leave($__internal_fd0330efec4b8b503cfb10e174b29481520de9ee44728cf380ab9c93716b18f6_prof);

        
        $__internal_7c67e31bd23fd650c27e1c862550d0c0e29695bacebd53a1ef5365f45c574316->leave($__internal_7c67e31bd23fd650c27e1c862550d0c0e29695bacebd53a1ef5365f45c574316_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_576164d3a02d4ef1142c29ebca0a1e18c78a5f4d1d8a9217be7d47707ac5a748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576164d3a02d4ef1142c29ebca0a1e18c78a5f4d1d8a9217be7d47707ac5a748->enter($__internal_576164d3a02d4ef1142c29ebca0a1e18c78a5f4d1d8a9217be7d47707ac5a748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72564734ecbaa42388afeff90cd4a4122ed80f06f5b17d50d6977970e3288280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72564734ecbaa42388afeff90cd4a4122ed80f06f5b17d50d6977970e3288280->enter($__internal_72564734ecbaa42388afeff90cd4a4122ed80f06f5b17d50d6977970e3288280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Management System";
        
        $__internal_72564734ecbaa42388afeff90cd4a4122ed80f06f5b17d50d6977970e3288280->leave($__internal_72564734ecbaa42388afeff90cd4a4122ed80f06f5b17d50d6977970e3288280_prof);

        
        $__internal_576164d3a02d4ef1142c29ebca0a1e18c78a5f4d1d8a9217be7d47707ac5a748->leave($__internal_576164d3a02d4ef1142c29ebca0a1e18c78a5f4d1d8a9217be7d47707ac5a748_prof);

    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_5d7c4b20484d81712eadde163dac3da578e1223d93eff41368d721ef026c99df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7c4b20484d81712eadde163dac3da578e1223d93eff41368d721ef026c99df->enter($__internal_5d7c4b20484d81712eadde163dac3da578e1223d93eff41368d721ef026c99df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_4a7d54961dccdc372f6f4bfd590776679d5340f738d7a3d7e67e6a5e0528214a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7d54961dccdc372f6f4bfd590776679d5340f738d7a3d7e67e6a5e0528214a->enter($__internal_4a7d54961dccdc372f6f4bfd590776679d5340f738d7a3d7e67e6a5e0528214a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_4a7d54961dccdc372f6f4bfd590776679d5340f738d7a3d7e67e6a5e0528214a->leave($__internal_4a7d54961dccdc372f6f4bfd590776679d5340f738d7a3d7e67e6a5e0528214a_prof);

        
        $__internal_5d7c4b20484d81712eadde163dac3da578e1223d93eff41368d721ef026c99df->leave($__internal_5d7c4b20484d81712eadde163dac3da578e1223d93eff41368d721ef026c99df_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_c5422903268a72aa7175840a1ad0ea4c7c65e7eacb1a2910e043aa0a49d12f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5422903268a72aa7175840a1ad0ea4c7c65e7eacb1a2910e043aa0a49d12f0b->enter($__internal_c5422903268a72aa7175840a1ad0ea4c7c65e7eacb1a2910e043aa0a49d12f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_1732078ea6db743399af85b250e370a1452ee2e6869e3edc1f27a593f93846d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1732078ea6db743399af85b250e370a1452ee2e6869e3edc1f27a593f93846d4->enter($__internal_1732078ea6db743399af85b250e370a1452ee2e6869e3edc1f27a593f93846d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_1732078ea6db743399af85b250e370a1452ee2e6869e3edc1f27a593f93846d4->leave($__internal_1732078ea6db743399af85b250e370a1452ee2e6869e3edc1f27a593f93846d4_prof);

        
        $__internal_c5422903268a72aa7175840a1ad0ea4c7c65e7eacb1a2910e043aa0a49d12f0b->leave($__internal_c5422903268a72aa7175840a1ad0ea4c7c65e7eacb1a2910e043aa0a49d12f0b_prof);

    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
        $__internal_c74c67de3f04a26849543156eaddda14be7ec5500671574166d428aedab17d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74c67de3f04a26849543156eaddda14be7ec5500671574166d428aedab17d5e->enter($__internal_c74c67de3f04a26849543156eaddda14be7ec5500671574166d428aedab17d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_81447f92b3f8f9e4c5c0cfaecff4722aa0ef2343299c05e05dbe6f5bfd5d8ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81447f92b3f8f9e4c5c0cfaecff4722aa0ef2343299c05e05dbe6f5bfd5d8ba6->enter($__internal_81447f92b3f8f9e4c5c0cfaecff4722aa0ef2343299c05e05dbe6f5bfd5d8ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_81447f92b3f8f9e4c5c0cfaecff4722aa0ef2343299c05e05dbe6f5bfd5d8ba6->leave($__internal_81447f92b3f8f9e4c5c0cfaecff4722aa0ef2343299c05e05dbe6f5bfd5d8ba6_prof);

        
        $__internal_c74c67de3f04a26849543156eaddda14be7ec5500671574166d428aedab17d5e->leave($__internal_c74c67de3f04a26849543156eaddda14be7ec5500671574166d428aedab17d5e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2e3c51a56906324e534ee2dc899b0125c26b317bea896d1ab9eee22adddc1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e3c51a56906324e534ee2dc899b0125c26b317bea896d1ab9eee22adddc1dd->enter($__internal_a2e3c51a56906324e534ee2dc899b0125c26b317bea896d1ab9eee22adddc1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a7d2b5b0324db9b914f7f3350a2352df2eccca3a3dbf05d368cf698995264e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d2b5b0324db9b914f7f3350a2352df2eccca3a3dbf05d368cf698995264e6d->enter($__internal_a7d2b5b0324db9b914f7f3350a2352df2eccca3a3dbf05d368cf698995264e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a7d2b5b0324db9b914f7f3350a2352df2eccca3a3dbf05d368cf698995264e6d->leave($__internal_a7d2b5b0324db9b914f7f3350a2352df2eccca3a3dbf05d368cf698995264e6d_prof);

        
        $__internal_a2e3c51a56906324e534ee2dc899b0125c26b317bea896d1ab9eee22adddc1dd->leave($__internal_a2e3c51a56906324e534ee2dc899b0125c26b317bea896d1ab9eee22adddc1dd_prof);

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
        return array (  140 => 15,  123 => 14,  106 => 13,  89 => 12,  71 => 5,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  49 => 12,  43 => 9,  36 => 5,  30 => 1,);
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
            {% block table %}{% endblock %}
            {% block form %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "/var/www/html/asp-lamp-training/user_management_system/app/Resources/views/base.html.twig");
    }
}
