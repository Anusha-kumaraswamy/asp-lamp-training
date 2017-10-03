<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c440aed5ec6587e0f03ec25da2b4bfa22d4f6179984d0a36fcf0281e0b13ff33 extends Twig_Template
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
        $__internal_2ed19960328e09fc18eb216e605cfa9483e8534bdd0525afe5f6c0b2dc3ad443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed19960328e09fc18eb216e605cfa9483e8534bdd0525afe5f6c0b2dc3ad443->enter($__internal_2ed19960328e09fc18eb216e605cfa9483e8534bdd0525afe5f6c0b2dc3ad443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_30e59ff2af01793f84c4cc768ad8a486bc651ba1ce205fc850f27e88a098fad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e59ff2af01793f84c4cc768ad8a486bc651ba1ce205fc850f27e88a098fad7->enter($__internal_30e59ff2af01793f84c4cc768ad8a486bc651ba1ce205fc850f27e88a098fad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2ed19960328e09fc18eb216e605cfa9483e8534bdd0525afe5f6c0b2dc3ad443->leave($__internal_2ed19960328e09fc18eb216e605cfa9483e8534bdd0525afe5f6c0b2dc3ad443_prof);

        
        $__internal_30e59ff2af01793f84c4cc768ad8a486bc651ba1ce205fc850f27e88a098fad7->leave($__internal_30e59ff2af01793f84c4cc768ad8a486bc651ba1ce205fc850f27e88a098fad7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
