<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3223e0f9522de4c37d9c7322f662d6ba3b2a2df77596e5c466ef565c34fcf0fc extends Twig_Template
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
        $__internal_14cbfc58e8147e7bdf62313e6a40fd99b7f1cade33c79753c3a8ccbd0fff78b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cbfc58e8147e7bdf62313e6a40fd99b7f1cade33c79753c3a8ccbd0fff78b5->enter($__internal_14cbfc58e8147e7bdf62313e6a40fd99b7f1cade33c79753c3a8ccbd0fff78b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_30781c1b29abe0eb014bf03967ff0b91e24e63ce977474a3db9cf211b751abcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30781c1b29abe0eb014bf03967ff0b91e24e63ce977474a3db9cf211b751abcb->enter($__internal_30781c1b29abe0eb014bf03967ff0b91e24e63ce977474a3db9cf211b751abcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_14cbfc58e8147e7bdf62313e6a40fd99b7f1cade33c79753c3a8ccbd0fff78b5->leave($__internal_14cbfc58e8147e7bdf62313e6a40fd99b7f1cade33c79753c3a8ccbd0fff78b5_prof);

        
        $__internal_30781c1b29abe0eb014bf03967ff0b91e24e63ce977474a3db9cf211b751abcb->leave($__internal_30781c1b29abe0eb014bf03967ff0b91e24e63ce977474a3db9cf211b751abcb_prof);

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
