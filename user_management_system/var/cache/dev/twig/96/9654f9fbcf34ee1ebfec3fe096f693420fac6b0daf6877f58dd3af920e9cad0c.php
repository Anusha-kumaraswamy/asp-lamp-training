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
        $__internal_50c5e339eaf9f16c313a35096f2e312026d6321a176c4c068b279a028d45d5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c5e339eaf9f16c313a35096f2e312026d6321a176c4c068b279a028d45d5d3->enter($__internal_50c5e339eaf9f16c313a35096f2e312026d6321a176c4c068b279a028d45d5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        $__internal_8d7ed748874d90324c9d16268abc62b7ed8aee3814a2b5cd8138ad634436be1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7ed748874d90324c9d16268abc62b7ed8aee3814a2b5cd8138ad634436be1e->enter($__internal_8d7ed748874d90324c9d16268abc62b7ed8aee3814a2b5cd8138ad634436be1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        // line 1
        echo "index";
        
        $__internal_50c5e339eaf9f16c313a35096f2e312026d6321a176c4c068b279a028d45d5d3->leave($__internal_50c5e339eaf9f16c313a35096f2e312026d6321a176c4c068b279a028d45d5d3_prof);

        
        $__internal_8d7ed748874d90324c9d16268abc62b7ed8aee3814a2b5cd8138ad634436be1e->leave($__internal_8d7ed748874d90324c9d16268abc62b7ed8aee3814a2b5cd8138ad634436be1e_prof);

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
