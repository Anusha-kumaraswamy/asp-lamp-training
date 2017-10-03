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
        $__internal_412460ead969788c2f66fe6729123c2534f7df80139ae0f2a00e511a6289dfc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412460ead969788c2f66fe6729123c2534f7df80139ae0f2a00e511a6289dfc0->enter($__internal_412460ead969788c2f66fe6729123c2534f7df80139ae0f2a00e511a6289dfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_53d5e377a6eaa927790bc0ce7e925eabb195281f1d1a6fbc453a94d550491c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d5e377a6eaa927790bc0ce7e925eabb195281f1d1a6fbc453a94d550491c8e->enter($__internal_53d5e377a6eaa927790bc0ce7e925eabb195281f1d1a6fbc453a94d550491c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_412460ead969788c2f66fe6729123c2534f7df80139ae0f2a00e511a6289dfc0->leave($__internal_412460ead969788c2f66fe6729123c2534f7df80139ae0f2a00e511a6289dfc0_prof);

        
        $__internal_53d5e377a6eaa927790bc0ce7e925eabb195281f1d1a6fbc453a94d550491c8e->leave($__internal_53d5e377a6eaa927790bc0ce7e925eabb195281f1d1a6fbc453a94d550491c8e_prof);

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
