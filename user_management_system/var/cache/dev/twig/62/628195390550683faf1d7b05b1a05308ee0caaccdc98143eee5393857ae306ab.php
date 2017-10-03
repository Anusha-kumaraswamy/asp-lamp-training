<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_80d6079bf9299a14add01447eae16501d9552de14d871dde01a729dc8f28d5dc extends Twig_Template
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
        $__internal_06b5689c3eefefc5d3da967c51b168d47da4debcfbf2bde9a2680210992df260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b5689c3eefefc5d3da967c51b168d47da4debcfbf2bde9a2680210992df260->enter($__internal_06b5689c3eefefc5d3da967c51b168d47da4debcfbf2bde9a2680210992df260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8da5815b6ae3604912f65ff2d5848ad0b2a3d6d66d3f77f1856140daa683be27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da5815b6ae3604912f65ff2d5848ad0b2a3d6d66d3f77f1856140daa683be27->enter($__internal_8da5815b6ae3604912f65ff2d5848ad0b2a3d6d66d3f77f1856140daa683be27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_06b5689c3eefefc5d3da967c51b168d47da4debcfbf2bde9a2680210992df260->leave($__internal_06b5689c3eefefc5d3da967c51b168d47da4debcfbf2bde9a2680210992df260_prof);

        
        $__internal_8da5815b6ae3604912f65ff2d5848ad0b2a3d6d66d3f77f1856140daa683be27->leave($__internal_8da5815b6ae3604912f65ff2d5848ad0b2a3d6d66d3f77f1856140daa683be27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
