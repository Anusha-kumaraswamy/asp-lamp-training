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
        $__internal_413864aae486a51e79f1c9079b067ecc7d159ec44625ec2b37e258bcee992516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413864aae486a51e79f1c9079b067ecc7d159ec44625ec2b37e258bcee992516->enter($__internal_413864aae486a51e79f1c9079b067ecc7d159ec44625ec2b37e258bcee992516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c28bd21b387f4a0303085f5eeb896410017844612b90503d00bde42991a42c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28bd21b387f4a0303085f5eeb896410017844612b90503d00bde42991a42c81->enter($__internal_c28bd21b387f4a0303085f5eeb896410017844612b90503d00bde42991a42c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_413864aae486a51e79f1c9079b067ecc7d159ec44625ec2b37e258bcee992516->leave($__internal_413864aae486a51e79f1c9079b067ecc7d159ec44625ec2b37e258bcee992516_prof);

        
        $__internal_c28bd21b387f4a0303085f5eeb896410017844612b90503d00bde42991a42c81->leave($__internal_c28bd21b387f4a0303085f5eeb896410017844612b90503d00bde42991a42c81_prof);

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
