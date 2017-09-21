<?php

/* User/userProfile.html.twig */
class __TwigTemplate_cfb9abbca687cea70418eb856d57fd1865ecf8f717e6fdf93eca2e1afb2a449b extends Twig_Template
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
        $__internal_160a3dce1b43368ce6dcf6c040cd03eb6985d7a605bb3691e6c3ef29e0942ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160a3dce1b43368ce6dcf6c040cd03eb6985d7a605bb3691e6c3ef29e0942ea9->enter($__internal_160a3dce1b43368ce6dcf6c040cd03eb6985d7a605bb3691e6c3ef29e0942ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/userProfile.html.twig"));

        $__internal_0bf11de06ccafb89cc715b8b9cf90eea7fa45b65ea504e0f1c508babf8dcf2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf11de06ccafb89cc715b8b9cf90eea7fa45b65ea504e0f1c508babf8dcf2db->enter($__internal_0bf11de06ccafb89cc715b8b9cf90eea7fa45b65ea504e0f1c508babf8dcf2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/userProfile.html.twig"));

        // line 1
        echo "profile";
        
        $__internal_160a3dce1b43368ce6dcf6c040cd03eb6985d7a605bb3691e6c3ef29e0942ea9->leave($__internal_160a3dce1b43368ce6dcf6c040cd03eb6985d7a605bb3691e6c3ef29e0942ea9_prof);

        
        $__internal_0bf11de06ccafb89cc715b8b9cf90eea7fa45b65ea504e0f1c508babf8dcf2db->leave($__internal_0bf11de06ccafb89cc715b8b9cf90eea7fa45b65ea504e0f1c508babf8dcf2db_prof);

    }

    public function getTemplateName()
    {
        return "User/userProfile.html.twig";
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
        return new Twig_Source("profile", "User/userProfile.html.twig", "/var/www/html/asp-lamp-training/user_management_system/app/Resources/views/User/userProfile.html.twig");
    }
}
