<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c76adee60e9b892c79c0befedcb286f53047660fd56bce84fee629c91b6055c9 extends Twig_Template
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
        $__internal_63b5112ee667ac8b0fba6c49f55946d8c33c4907672464e0b45d5d16c17003bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b5112ee667ac8b0fba6c49f55946d8c33c4907672464e0b45d5d16c17003bb->enter($__internal_63b5112ee667ac8b0fba6c49f55946d8c33c4907672464e0b45d5d16c17003bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_24618ef30aba791b095ad4b5e215f7df8c80450ad589c613538ca6ce6893fbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24618ef30aba791b095ad4b5e215f7df8c80450ad589c613538ca6ce6893fbda->enter($__internal_24618ef30aba791b095ad4b5e215f7df8c80450ad589c613538ca6ce6893fbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_63b5112ee667ac8b0fba6c49f55946d8c33c4907672464e0b45d5d16c17003bb->leave($__internal_63b5112ee667ac8b0fba6c49f55946d8c33c4907672464e0b45d5d16c17003bb_prof);

        
        $__internal_24618ef30aba791b095ad4b5e215f7df8c80450ad589c613538ca6ce6893fbda->leave($__internal_24618ef30aba791b095ad4b5e215f7df8c80450ad589c613538ca6ce6893fbda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
