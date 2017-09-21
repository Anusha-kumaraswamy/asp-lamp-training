<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_91aed4adf6a951bc483dd424056c191baf3e416cacbba8e82613c7d2704f25ba extends Twig_Template
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
        $__internal_46fb466d3119c55b9935b127b13f97aaf4441ee35c3f911712d208d608f26ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fb466d3119c55b9935b127b13f97aaf4441ee35c3f911712d208d608f26ad7->enter($__internal_46fb466d3119c55b9935b127b13f97aaf4441ee35c3f911712d208d608f26ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5d8f807392006242b125dfff001115f8dc39b7a00cbc513033e7a56594b406d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8f807392006242b125dfff001115f8dc39b7a00cbc513033e7a56594b406d9->enter($__internal_5d8f807392006242b125dfff001115f8dc39b7a00cbc513033e7a56594b406d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_46fb466d3119c55b9935b127b13f97aaf4441ee35c3f911712d208d608f26ad7->leave($__internal_46fb466d3119c55b9935b127b13f97aaf4441ee35c3f911712d208d608f26ad7_prof);

        
        $__internal_5d8f807392006242b125dfff001115f8dc39b7a00cbc513033e7a56594b406d9->leave($__internal_5d8f807392006242b125dfff001115f8dc39b7a00cbc513033e7a56594b406d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
