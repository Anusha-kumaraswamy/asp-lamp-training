<?php

/* UserBundle:User:base.html.twig */
class __TwigTemplate_4ca699c7c9024d7dcfbaab84291064ad9ac9e1b4d365437c29982410313e962d extends Twig_Template
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
        $__internal_ebd3475d6fc7fe2cfb633111843c835441694ef59f281dd2786dfe0844c7973c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd3475d6fc7fe2cfb633111843c835441694ef59f281dd2786dfe0844c7973c->enter($__internal_ebd3475d6fc7fe2cfb633111843c835441694ef59f281dd2786dfe0844c7973c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:base.html.twig"));

        $__internal_9a3388ccb9c4d85161ca40ad7787b50b922abecc90031ae52f2c838f9b93e05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3388ccb9c4d85161ca40ad7787b50b922abecc90031ae52f2c838f9b93e05f->enter($__internal_9a3388ccb9c4d85161ca40ad7787b50b922abecc90031ae52f2c838f9b93e05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:base.html.twig"));

        
        $__internal_ebd3475d6fc7fe2cfb633111843c835441694ef59f281dd2786dfe0844c7973c->leave($__internal_ebd3475d6fc7fe2cfb633111843c835441694ef59f281dd2786dfe0844c7973c_prof);

        
        $__internal_9a3388ccb9c4d85161ca40ad7787b50b922abecc90031ae52f2c838f9b93e05f->leave($__internal_9a3388ccb9c4d85161ca40ad7787b50b922abecc90031ae52f2c838f9b93e05f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:User:base.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/base.html.twig");
    }
}
