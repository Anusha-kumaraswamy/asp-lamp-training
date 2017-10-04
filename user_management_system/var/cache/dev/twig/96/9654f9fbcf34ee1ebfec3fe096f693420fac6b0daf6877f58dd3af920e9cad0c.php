<?php

/* UserBundle:User:index.html.twig */
class __TwigTemplate_1a58594a3521f1b5e473c1362d6cab35f8154f4cfc5ac09794412c1cbd8d150e extends Twig_Template
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
        $__internal_e388c41666222f8ea9dd8195443a393a587dfdcad222e125ed4a49cf61be037b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e388c41666222f8ea9dd8195443a393a587dfdcad222e125ed4a49cf61be037b->enter($__internal_e388c41666222f8ea9dd8195443a393a587dfdcad222e125ed4a49cf61be037b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        $__internal_5cf391a222d5c063717c57800fff0fa14a1406f8db5e4505e7bd922d6b992fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf391a222d5c063717c57800fff0fa14a1406f8db5e4505e7bd922d6b992fa9->enter($__internal_5cf391a222d5c063717c57800fff0fa14a1406f8db5e4505e7bd922d6b992fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        // line 1
        echo "index";
        
        $__internal_e388c41666222f8ea9dd8195443a393a587dfdcad222e125ed4a49cf61be037b->leave($__internal_e388c41666222f8ea9dd8195443a393a587dfdcad222e125ed4a49cf61be037b_prof);

        
        $__internal_5cf391a222d5c063717c57800fff0fa14a1406f8db5e4505e7bd922d6b992fa9->leave($__internal_5cf391a222d5c063717c57800fff0fa14a1406f8db5e4505e7bd922d6b992fa9_prof);

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
        return new Twig_Source("index", "UserBundle:User:index.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/index.html.twig");
    }
}
