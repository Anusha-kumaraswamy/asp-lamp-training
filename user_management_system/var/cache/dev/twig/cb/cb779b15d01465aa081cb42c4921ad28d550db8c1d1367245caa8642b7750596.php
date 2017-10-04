<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d9da532eb166bf1d93940a4c54734f5788623feb1b5a951463b09f11647fd323 extends Twig_Template
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
        $__internal_9194086a0d21b33a091419e4fa2409d67a2e9106e83774d34dba055be29b350d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9194086a0d21b33a091419e4fa2409d67a2e9106e83774d34dba055be29b350d->enter($__internal_9194086a0d21b33a091419e4fa2409d67a2e9106e83774d34dba055be29b350d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d772963828f20a90d4ae26cd028d9810821b7d46fce8ddd5c01a0d3c9b918382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d772963828f20a90d4ae26cd028d9810821b7d46fce8ddd5c01a0d3c9b918382->enter($__internal_d772963828f20a90d4ae26cd028d9810821b7d46fce8ddd5c01a0d3c9b918382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9194086a0d21b33a091419e4fa2409d67a2e9106e83774d34dba055be29b350d->leave($__internal_9194086a0d21b33a091419e4fa2409d67a2e9106e83774d34dba055be29b350d_prof);

        
        $__internal_d772963828f20a90d4ae26cd028d9810821b7d46fce8ddd5c01a0d3c9b918382->leave($__internal_d772963828f20a90d4ae26cd028d9810821b7d46fce8ddd5c01a0d3c9b918382_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
