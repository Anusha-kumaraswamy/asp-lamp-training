<?php

/* UserBundle:User:index.html.twig */
class __TwigTemplate_fe14a46a278686fb951a939e10008b1902207441e2f6f2f7be73f261682ee4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a5575726d58b6d0a85a4665fa0480be96e72e16473926e7eb02343397f995c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5575726d58b6d0a85a4665fa0480be96e72e16473926e7eb02343397f995c5->enter($__internal_3a5575726d58b6d0a85a4665fa0480be96e72e16473926e7eb02343397f995c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        $__internal_ae0aa5c641f7027220c3dc5308d40e1585152ebf2be5538affeaf44221e7b640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0aa5c641f7027220c3dc5308d40e1585152ebf2be5538affeaf44221e7b640->enter($__internal_ae0aa5c641f7027220c3dc5308d40e1585152ebf2be5538affeaf44221e7b640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        // line 1
        echo "hi";
        
        $__internal_3a5575726d58b6d0a85a4665fa0480be96e72e16473926e7eb02343397f995c5->leave($__internal_3a5575726d58b6d0a85a4665fa0480be96e72e16473926e7eb02343397f995c5_prof);

        
        $__internal_ae0aa5c641f7027220c3dc5308d40e1585152ebf2be5538affeaf44221e7b640->leave($__internal_ae0aa5c641f7027220c3dc5308d40e1585152ebf2be5538affeaf44221e7b640_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("hi", "UserBundle:User:index.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/index.html.twig");
    }
}
