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
        $__internal_ea694094825d06fc2658c998fc7ad89a12ef9b58a9e9fd15bd6192b2641c6162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea694094825d06fc2658c998fc7ad89a12ef9b58a9e9fd15bd6192b2641c6162->enter($__internal_ea694094825d06fc2658c998fc7ad89a12ef9b58a9e9fd15bd6192b2641c6162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_75ac14efa6c05e48dfbed832846e0e31c7c64ffacc9753097fa1f80229cda65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ac14efa6c05e48dfbed832846e0e31c7c64ffacc9753097fa1f80229cda65e->enter($__internal_75ac14efa6c05e48dfbed832846e0e31c7c64ffacc9753097fa1f80229cda65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea694094825d06fc2658c998fc7ad89a12ef9b58a9e9fd15bd6192b2641c6162->leave($__internal_ea694094825d06fc2658c998fc7ad89a12ef9b58a9e9fd15bd6192b2641c6162_prof);

        
        $__internal_75ac14efa6c05e48dfbed832846e0e31c7c64ffacc9753097fa1f80229cda65e->leave($__internal_75ac14efa6c05e48dfbed832846e0e31c7c64ffacc9753097fa1f80229cda65e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9bbd195d36fd5a442d1f10105282b7e0182eb9b926e43264a64446db0533898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bbd195d36fd5a442d1f10105282b7e0182eb9b926e43264a64446db0533898->enter($__internal_e9bbd195d36fd5a442d1f10105282b7e0182eb9b926e43264a64446db0533898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29354420c6e51954108566941eafece1ad8480fa394077269682825ec5a6e3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29354420c6e51954108566941eafece1ad8480fa394077269682825ec5a6e3c5->enter($__internal_29354420c6e51954108566941eafece1ad8480fa394077269682825ec5a6e3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_29354420c6e51954108566941eafece1ad8480fa394077269682825ec5a6e3c5->leave($__internal_29354420c6e51954108566941eafece1ad8480fa394077269682825ec5a6e3c5_prof);

        
        $__internal_e9bbd195d36fd5a442d1f10105282b7e0182eb9b926e43264a64446db0533898->leave($__internal_e9bbd195d36fd5a442d1f10105282b7e0182eb9b926e43264a64446db0533898_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe87b77f83e9ce0ea1d318a1d5054d33dcdcbc90cc0341e20b8a8fcfe93a4b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe87b77f83e9ce0ea1d318a1d5054d33dcdcbc90cc0341e20b8a8fcfe93a4b92->enter($__internal_fe87b77f83e9ce0ea1d318a1d5054d33dcdcbc90cc0341e20b8a8fcfe93a4b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba2a806716d55829648f06be19eba7b61d39c2d4831ba151dbfeb7e2c2407c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2a806716d55829648f06be19eba7b61d39c2d4831ba151dbfeb7e2c2407c8e->enter($__internal_ba2a806716d55829648f06be19eba7b61d39c2d4831ba151dbfeb7e2c2407c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba2a806716d55829648f06be19eba7b61d39c2d4831ba151dbfeb7e2c2407c8e->leave($__internal_ba2a806716d55829648f06be19eba7b61d39c2d4831ba151dbfeb7e2c2407c8e_prof);

        
        $__internal_fe87b77f83e9ce0ea1d318a1d5054d33dcdcbc90cc0341e20b8a8fcfe93a4b92->leave($__internal_fe87b77f83e9ce0ea1d318a1d5054d33dcdcbc90cc0341e20b8a8fcfe93a4b92_prof);

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
