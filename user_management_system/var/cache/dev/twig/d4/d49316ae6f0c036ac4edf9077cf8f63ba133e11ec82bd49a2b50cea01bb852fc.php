<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_93ac1c59203d3a005aba363929b5b5a12f6768175e19a26a2f7172091bca9d34 extends Twig_Template
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
        $__internal_a7952ade8b493c8036a5e31c0b6e31ab1f9485073accf3684d38e275ad955620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7952ade8b493c8036a5e31c0b6e31ab1f9485073accf3684d38e275ad955620->enter($__internal_a7952ade8b493c8036a5e31c0b6e31ab1f9485073accf3684d38e275ad955620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5b6cae8badad90ec0f1d16f5062ed11f8285294003e2f0d171fac03c05b877bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6cae8badad90ec0f1d16f5062ed11f8285294003e2f0d171fac03c05b877bf->enter($__internal_5b6cae8badad90ec0f1d16f5062ed11f8285294003e2f0d171fac03c05b877bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a7952ade8b493c8036a5e31c0b6e31ab1f9485073accf3684d38e275ad955620->leave($__internal_a7952ade8b493c8036a5e31c0b6e31ab1f9485073accf3684d38e275ad955620_prof);

        
        $__internal_5b6cae8badad90ec0f1d16f5062ed11f8285294003e2f0d171fac03c05b877bf->leave($__internal_5b6cae8badad90ec0f1d16f5062ed11f8285294003e2f0d171fac03c05b877bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
