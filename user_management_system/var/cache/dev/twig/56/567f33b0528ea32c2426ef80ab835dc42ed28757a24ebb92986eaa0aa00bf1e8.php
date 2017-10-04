<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_6214940f2e6e69f2e0a4883fdc9099a4d6e063b24d975ff9bb3b05797d467a3d extends Twig_Template
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
        $__internal_d7adbedfdfab999df47c85a350c7e21a2f8d4fcba9af84ec212832dd30cb6862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7adbedfdfab999df47c85a350c7e21a2f8d4fcba9af84ec212832dd30cb6862->enter($__internal_d7adbedfdfab999df47c85a350c7e21a2f8d4fcba9af84ec212832dd30cb6862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_a332a5af3f97f778bfe4474d86c490aff88a94d71e1098edadc9547649ae1c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a332a5af3f97f778bfe4474d86c490aff88a94d71e1098edadc9547649ae1c9d->enter($__internal_a332a5af3f97f778bfe4474d86c490aff88a94d71e1098edadc9547649ae1c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d7adbedfdfab999df47c85a350c7e21a2f8d4fcba9af84ec212832dd30cb6862->leave($__internal_d7adbedfdfab999df47c85a350c7e21a2f8d4fcba9af84ec212832dd30cb6862_prof);

        
        $__internal_a332a5af3f97f778bfe4474d86c490aff88a94d71e1098edadc9547649ae1c9d->leave($__internal_a332a5af3f97f778bfe4474d86c490aff88a94d71e1098edadc9547649ae1c9d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "UserBundle:Default:index.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
