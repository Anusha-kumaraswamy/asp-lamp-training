<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8adbbb672375a5b9b13f4211de61ea5aba7a844d41552c826a190920e0966e56 extends Twig_Template
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
        $__internal_e562e2d9fb57a5fb0ebaaaa9a3ff8e202ec1bc387784b6a2aa70f0bc4d1149e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e562e2d9fb57a5fb0ebaaaa9a3ff8e202ec1bc387784b6a2aa70f0bc4d1149e1->enter($__internal_e562e2d9fb57a5fb0ebaaaa9a3ff8e202ec1bc387784b6a2aa70f0bc4d1149e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_eee1c592374b1a0cb2577e782df30970563cc5c9f0e4e4b0bb08c3f15cc77f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee1c592374b1a0cb2577e782df30970563cc5c9f0e4e4b0bb08c3f15cc77f2e->enter($__internal_eee1c592374b1a0cb2577e782df30970563cc5c9f0e4e4b0bb08c3f15cc77f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e562e2d9fb57a5fb0ebaaaa9a3ff8e202ec1bc387784b6a2aa70f0bc4d1149e1->leave($__internal_e562e2d9fb57a5fb0ebaaaa9a3ff8e202ec1bc387784b6a2aa70f0bc4d1149e1_prof);

        
        $__internal_eee1c592374b1a0cb2577e782df30970563cc5c9f0e4e4b0bb08c3f15cc77f2e->leave($__internal_eee1c592374b1a0cb2577e782df30970563cc5c9f0e4e4b0bb08c3f15cc77f2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
