<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cca71d293092457e2bb3a74c6b6a65191da6d5a94745ee74b5c119b81e6c960c extends Twig_Template
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
        $__internal_34ac897699e2db755aacc62192843c36b7c356d0f738fc356bea82644d618d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ac897699e2db755aacc62192843c36b7c356d0f738fc356bea82644d618d82->enter($__internal_34ac897699e2db755aacc62192843c36b7c356d0f738fc356bea82644d618d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_887a0c1d67c42e8e8009926486f392b0f6dd0ab10962840a7dd894eca5d88472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887a0c1d67c42e8e8009926486f392b0f6dd0ab10962840a7dd894eca5d88472->enter($__internal_887a0c1d67c42e8e8009926486f392b0f6dd0ab10962840a7dd894eca5d88472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_34ac897699e2db755aacc62192843c36b7c356d0f738fc356bea82644d618d82->leave($__internal_34ac897699e2db755aacc62192843c36b7c356d0f738fc356bea82644d618d82_prof);

        
        $__internal_887a0c1d67c42e8e8009926486f392b0f6dd0ab10962840a7dd894eca5d88472->leave($__internal_887a0c1d67c42e8e8009926486f392b0f6dd0ab10962840a7dd894eca5d88472_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
