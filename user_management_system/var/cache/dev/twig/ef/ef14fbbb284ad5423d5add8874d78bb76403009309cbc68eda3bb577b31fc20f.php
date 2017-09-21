<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5390b84b48348256ff891d4fbe3d59406dc5309f04a6400df6cb7f05609d507f extends Twig_Template
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
        $__internal_eac794cb38c87986e75957f5a1d1464d7b71e9c43a9594af7adf87d581284371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac794cb38c87986e75957f5a1d1464d7b71e9c43a9594af7adf87d581284371->enter($__internal_eac794cb38c87986e75957f5a1d1464d7b71e9c43a9594af7adf87d581284371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_79c92aca9ec98c241d684956f9e59125f1567a7b040662ef35ecff977e758cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c92aca9ec98c241d684956f9e59125f1567a7b040662ef35ecff977e758cb5->enter($__internal_79c92aca9ec98c241d684956f9e59125f1567a7b040662ef35ecff977e758cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_eac794cb38c87986e75957f5a1d1464d7b71e9c43a9594af7adf87d581284371->leave($__internal_eac794cb38c87986e75957f5a1d1464d7b71e9c43a9594af7adf87d581284371_prof);

        
        $__internal_79c92aca9ec98c241d684956f9e59125f1567a7b040662ef35ecff977e758cb5->leave($__internal_79c92aca9ec98c241d684956f9e59125f1567a7b040662ef35ecff977e758cb5_prof);

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
