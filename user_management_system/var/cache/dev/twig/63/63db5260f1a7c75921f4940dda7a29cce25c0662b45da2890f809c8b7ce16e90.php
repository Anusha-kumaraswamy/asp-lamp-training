<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_39ce5411ba7cfe6a4e4d1371af38b4b84a5d0aa730f5a537a1cd2af74f3bcc07 extends Twig_Template
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
        $__internal_f84fa0bf5a538c869bac0b950662172fc8c200ce30c82fbb46cfc60f757016d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84fa0bf5a538c869bac0b950662172fc8c200ce30c82fbb46cfc60f757016d5->enter($__internal_f84fa0bf5a538c869bac0b950662172fc8c200ce30c82fbb46cfc60f757016d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1df7e87d347d7ef932ca2d76d97e7ea5749df64a9c575e71ea4526b55a5c32e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df7e87d347d7ef932ca2d76d97e7ea5749df64a9c575e71ea4526b55a5c32e3->enter($__internal_1df7e87d347d7ef932ca2d76d97e7ea5749df64a9c575e71ea4526b55a5c32e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f84fa0bf5a538c869bac0b950662172fc8c200ce30c82fbb46cfc60f757016d5->leave($__internal_f84fa0bf5a538c869bac0b950662172fc8c200ce30c82fbb46cfc60f757016d5_prof);

        
        $__internal_1df7e87d347d7ef932ca2d76d97e7ea5749df64a9c575e71ea4526b55a5c32e3->leave($__internal_1df7e87d347d7ef932ca2d76d97e7ea5749df64a9c575e71ea4526b55a5c32e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
