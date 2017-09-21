<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ae57863d1fe511f26bb53a7c057dc21cc9570263c7097c474aaa6b85973b3dc7 extends Twig_Template
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
        $__internal_976d3e6392a7dbb5210f9bcb6c103851f207c2409973b00f5acfc3030f6e37dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976d3e6392a7dbb5210f9bcb6c103851f207c2409973b00f5acfc3030f6e37dd->enter($__internal_976d3e6392a7dbb5210f9bcb6c103851f207c2409973b00f5acfc3030f6e37dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b1fe1a3637f791a1bac1c791d0a5314b0dde2ad9bf9b4057894009fa4000ac02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fe1a3637f791a1bac1c791d0a5314b0dde2ad9bf9b4057894009fa4000ac02->enter($__internal_b1fe1a3637f791a1bac1c791d0a5314b0dde2ad9bf9b4057894009fa4000ac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_976d3e6392a7dbb5210f9bcb6c103851f207c2409973b00f5acfc3030f6e37dd->leave($__internal_976d3e6392a7dbb5210f9bcb6c103851f207c2409973b00f5acfc3030f6e37dd_prof);

        
        $__internal_b1fe1a3637f791a1bac1c791d0a5314b0dde2ad9bf9b4057894009fa4000ac02->leave($__internal_b1fe1a3637f791a1bac1c791d0a5314b0dde2ad9bf9b4057894009fa4000ac02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
