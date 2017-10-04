<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3646bff322ce6f6b78d4841223e05884d1a25fe4cb937c1f9985c11c00dd4070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fa494dc4de3ee9115403dabd3d41e3aa8b3b5137ed4744b4df6e698fc968261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa494dc4de3ee9115403dabd3d41e3aa8b3b5137ed4744b4df6e698fc968261->enter($__internal_1fa494dc4de3ee9115403dabd3d41e3aa8b3b5137ed4744b4df6e698fc968261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a641462e7457ae06ac681fb6785f5ad47a0407b602c4042e95318e27b47183c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a641462e7457ae06ac681fb6785f5ad47a0407b602c4042e95318e27b47183c0->enter($__internal_a641462e7457ae06ac681fb6785f5ad47a0407b602c4042e95318e27b47183c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fa494dc4de3ee9115403dabd3d41e3aa8b3b5137ed4744b4df6e698fc968261->leave($__internal_1fa494dc4de3ee9115403dabd3d41e3aa8b3b5137ed4744b4df6e698fc968261_prof);

        
        $__internal_a641462e7457ae06ac681fb6785f5ad47a0407b602c4042e95318e27b47183c0->leave($__internal_a641462e7457ae06ac681fb6785f5ad47a0407b602c4042e95318e27b47183c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_311194f4b2f66cb513907b2ae63f5a61afb71066af59a84efb71b3533218444a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311194f4b2f66cb513907b2ae63f5a61afb71066af59a84efb71b3533218444a->enter($__internal_311194f4b2f66cb513907b2ae63f5a61afb71066af59a84efb71b3533218444a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_971f3aa0843ee7cea8a13c88241a98b16f4b40e01a87d5eac541f41e9a738238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971f3aa0843ee7cea8a13c88241a98b16f4b40e01a87d5eac541f41e9a738238->enter($__internal_971f3aa0843ee7cea8a13c88241a98b16f4b40e01a87d5eac541f41e9a738238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_971f3aa0843ee7cea8a13c88241a98b16f4b40e01a87d5eac541f41e9a738238->leave($__internal_971f3aa0843ee7cea8a13c88241a98b16f4b40e01a87d5eac541f41e9a738238_prof);

        
        $__internal_311194f4b2f66cb513907b2ae63f5a61afb71066af59a84efb71b3533218444a->leave($__internal_311194f4b2f66cb513907b2ae63f5a61afb71066af59a84efb71b3533218444a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80148623364b9b6072e2cca6a036b28e85abc376aebdd6fa10f5ceff0224b977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80148623364b9b6072e2cca6a036b28e85abc376aebdd6fa10f5ceff0224b977->enter($__internal_80148623364b9b6072e2cca6a036b28e85abc376aebdd6fa10f5ceff0224b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_655b8e92f49750c85280019faf85ed9d76ce005f9cbf3c2e5b97cb29c40488fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655b8e92f49750c85280019faf85ed9d76ce005f9cbf3c2e5b97cb29c40488fd->enter($__internal_655b8e92f49750c85280019faf85ed9d76ce005f9cbf3c2e5b97cb29c40488fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_655b8e92f49750c85280019faf85ed9d76ce005f9cbf3c2e5b97cb29c40488fd->leave($__internal_655b8e92f49750c85280019faf85ed9d76ce005f9cbf3c2e5b97cb29c40488fd_prof);

        
        $__internal_80148623364b9b6072e2cca6a036b28e85abc376aebdd6fa10f5ceff0224b977->leave($__internal_80148623364b9b6072e2cca6a036b28e85abc376aebdd6fa10f5ceff0224b977_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
