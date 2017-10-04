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
        $__internal_e4d80e5cab47af6b07ade3e78bd4f50927fa6dc3a87a95059e96c5d3ae6f5e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d80e5cab47af6b07ade3e78bd4f50927fa6dc3a87a95059e96c5d3ae6f5e0f->enter($__internal_e4d80e5cab47af6b07ade3e78bd4f50927fa6dc3a87a95059e96c5d3ae6f5e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ad26d8d8f54f7dcd085000583b2fcd07b7baa84ce409f94b9393eae8e1acb767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad26d8d8f54f7dcd085000583b2fcd07b7baa84ce409f94b9393eae8e1acb767->enter($__internal_ad26d8d8f54f7dcd085000583b2fcd07b7baa84ce409f94b9393eae8e1acb767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e4d80e5cab47af6b07ade3e78bd4f50927fa6dc3a87a95059e96c5d3ae6f5e0f->leave($__internal_e4d80e5cab47af6b07ade3e78bd4f50927fa6dc3a87a95059e96c5d3ae6f5e0f_prof);

        
        $__internal_ad26d8d8f54f7dcd085000583b2fcd07b7baa84ce409f94b9393eae8e1acb767->leave($__internal_ad26d8d8f54f7dcd085000583b2fcd07b7baa84ce409f94b9393eae8e1acb767_prof);

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
