<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e4ea56bab3502f3da936ffd9a103a86239b82b19856d93c74d0c3c27071128c6 extends Twig_Template
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
        $__internal_cd869bb46b3476552b63bd98f96a68f058081c4f59fca5fcb48e90086de42efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd869bb46b3476552b63bd98f96a68f058081c4f59fca5fcb48e90086de42efd->enter($__internal_cd869bb46b3476552b63bd98f96a68f058081c4f59fca5fcb48e90086de42efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ef4f3197f093aa667c8b7533413209f8108fa400f46a25b53cc6ae2b92823eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4f3197f093aa667c8b7533413209f8108fa400f46a25b53cc6ae2b92823eb5->enter($__internal_ef4f3197f093aa667c8b7533413209f8108fa400f46a25b53cc6ae2b92823eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cd869bb46b3476552b63bd98f96a68f058081c4f59fca5fcb48e90086de42efd->leave($__internal_cd869bb46b3476552b63bd98f96a68f058081c4f59fca5fcb48e90086de42efd_prof);

        
        $__internal_ef4f3197f093aa667c8b7533413209f8108fa400f46a25b53cc6ae2b92823eb5->leave($__internal_ef4f3197f093aa667c8b7533413209f8108fa400f46a25b53cc6ae2b92823eb5_prof);

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
