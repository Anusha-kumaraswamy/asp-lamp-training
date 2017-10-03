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
        $__internal_b6e8b7f5fdb242709d2d912b74095f868e538534a26dd081cfaa06647c0045da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e8b7f5fdb242709d2d912b74095f868e538534a26dd081cfaa06647c0045da->enter($__internal_b6e8b7f5fdb242709d2d912b74095f868e538534a26dd081cfaa06647c0045da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f0c054c1109ab01c781d013bcf0dd540f09bf6afd2213a35934b1c0c545a96a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c054c1109ab01c781d013bcf0dd540f09bf6afd2213a35934b1c0c545a96a4->enter($__internal_f0c054c1109ab01c781d013bcf0dd540f09bf6afd2213a35934b1c0c545a96a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b6e8b7f5fdb242709d2d912b74095f868e538534a26dd081cfaa06647c0045da->leave($__internal_b6e8b7f5fdb242709d2d912b74095f868e538534a26dd081cfaa06647c0045da_prof);

        
        $__internal_f0c054c1109ab01c781d013bcf0dd540f09bf6afd2213a35934b1c0c545a96a4->leave($__internal_f0c054c1109ab01c781d013bcf0dd540f09bf6afd2213a35934b1c0c545a96a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_012a5e6e0510f7d6be61f3d2fc0e4112b4951e5ddc1dc50d1fd178954ea968fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012a5e6e0510f7d6be61f3d2fc0e4112b4951e5ddc1dc50d1fd178954ea968fd->enter($__internal_012a5e6e0510f7d6be61f3d2fc0e4112b4951e5ddc1dc50d1fd178954ea968fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90bfc828729a350dfc30d99cef3198ba7f6ba52420e16adfcf54da7a35ce4728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bfc828729a350dfc30d99cef3198ba7f6ba52420e16adfcf54da7a35ce4728->enter($__internal_90bfc828729a350dfc30d99cef3198ba7f6ba52420e16adfcf54da7a35ce4728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Management System";
        
        $__internal_90bfc828729a350dfc30d99cef3198ba7f6ba52420e16adfcf54da7a35ce4728->leave($__internal_90bfc828729a350dfc30d99cef3198ba7f6ba52420e16adfcf54da7a35ce4728_prof);

        
        $__internal_012a5e6e0510f7d6be61f3d2fc0e4112b4951e5ddc1dc50d1fd178954ea968fd->leave($__internal_012a5e6e0510f7d6be61f3d2fc0e4112b4951e5ddc1dc50d1fd178954ea968fd_prof);

    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_391e125aa438e3758a61686991cd4649f59bd2ca3cfb961079a059805eb249ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391e125aa438e3758a61686991cd4649f59bd2ca3cfb961079a059805eb249ef->enter($__internal_391e125aa438e3758a61686991cd4649f59bd2ca3cfb961079a059805eb249ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_33747c5d02dccfc871aa0ced2db16ffc6d8e526b80f30a0422d87636ab3a0c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33747c5d02dccfc871aa0ced2db16ffc6d8e526b80f30a0422d87636ab3a0c19->enter($__internal_33747c5d02dccfc871aa0ced2db16ffc6d8e526b80f30a0422d87636ab3a0c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_33747c5d02dccfc871aa0ced2db16ffc6d8e526b80f30a0422d87636ab3a0c19->leave($__internal_33747c5d02dccfc871aa0ced2db16ffc6d8e526b80f30a0422d87636ab3a0c19_prof);

        
        $__internal_391e125aa438e3758a61686991cd4649f59bd2ca3cfb961079a059805eb249ef->leave($__internal_391e125aa438e3758a61686991cd4649f59bd2ca3cfb961079a059805eb249ef_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_b07991f6e391b2b41d2ad228555b308d35ad2b604febe774494775c9bfa9c9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07991f6e391b2b41d2ad228555b308d35ad2b604febe774494775c9bfa9c9bf->enter($__internal_b07991f6e391b2b41d2ad228555b308d35ad2b604febe774494775c9bfa9c9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_c01ad18d05fa4b22114018efc1ef4f39c9d2d5f8b7cf3f530fcd4026db4f2b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01ad18d05fa4b22114018efc1ef4f39c9d2d5f8b7cf3f530fcd4026db4f2b02->enter($__internal_c01ad18d05fa4b22114018efc1ef4f39c9d2d5f8b7cf3f530fcd4026db4f2b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_c01ad18d05fa4b22114018efc1ef4f39c9d2d5f8b7cf3f530fcd4026db4f2b02->leave($__internal_c01ad18d05fa4b22114018efc1ef4f39c9d2d5f8b7cf3f530fcd4026db4f2b02_prof);

        
        $__internal_b07991f6e391b2b41d2ad228555b308d35ad2b604febe774494775c9bfa9c9bf->leave($__internal_b07991f6e391b2b41d2ad228555b308d35ad2b604febe774494775c9bfa9c9bf_prof);

    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
        $__internal_7900c236a2de0a5e62c86ce0cd9558df42550afb0523ab78916f28339f8873c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7900c236a2de0a5e62c86ce0cd9558df42550afb0523ab78916f28339f8873c6->enter($__internal_7900c236a2de0a5e62c86ce0cd9558df42550afb0523ab78916f28339f8873c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_845228c506cc372203b3fb388f3f3e92a9c9dc5adc94350142e58a34a8ed4a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845228c506cc372203b3fb388f3f3e92a9c9dc5adc94350142e58a34a8ed4a0c->enter($__internal_845228c506cc372203b3fb388f3f3e92a9c9dc5adc94350142e58a34a8ed4a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_845228c506cc372203b3fb388f3f3e92a9c9dc5adc94350142e58a34a8ed4a0c->leave($__internal_845228c506cc372203b3fb388f3f3e92a9c9dc5adc94350142e58a34a8ed4a0c_prof);

        
        $__internal_7900c236a2de0a5e62c86ce0cd9558df42550afb0523ab78916f28339f8873c6->leave($__internal_7900c236a2de0a5e62c86ce0cd9558df42550afb0523ab78916f28339f8873c6_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e4c59bc64a15b48dcafd830a859487f3baae37083a19af8450144685d283304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4c59bc64a15b48dcafd830a859487f3baae37083a19af8450144685d283304->enter($__internal_8e4c59bc64a15b48dcafd830a859487f3baae37083a19af8450144685d283304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e6ecdcb3a2578274e92e7d081b2b211fbf5e148eeae8a05616f0080aa65003e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6ecdcb3a2578274e92e7d081b2b211fbf5e148eeae8a05616f0080aa65003e->enter($__internal_3e6ecdcb3a2578274e92e7d081b2b211fbf5e148eeae8a05616f0080aa65003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e6ecdcb3a2578274e92e7d081b2b211fbf5e148eeae8a05616f0080aa65003e->leave($__internal_3e6ecdcb3a2578274e92e7d081b2b211fbf5e148eeae8a05616f0080aa65003e_prof);

        
        $__internal_8e4c59bc64a15b48dcafd830a859487f3baae37083a19af8450144685d283304->leave($__internal_8e4c59bc64a15b48dcafd830a859487f3baae37083a19af8450144685d283304_prof);

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
