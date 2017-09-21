<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7871db9a5994c39a5e1f8fdd94727e77c1683ce6ff34cf013ec989ca94670e54 extends Twig_Template
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
        $__internal_d24cdd17b273a58de5b3a4aadf30a53ce3cdf3c7bcbcbad22b453b9411ea8caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24cdd17b273a58de5b3a4aadf30a53ce3cdf3c7bcbcbad22b453b9411ea8caa->enter($__internal_d24cdd17b273a58de5b3a4aadf30a53ce3cdf3c7bcbcbad22b453b9411ea8caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e16fc8ca903a4925cde3c192de924a4636c0270af4d40a63ca525165d23ce33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16fc8ca903a4925cde3c192de924a4636c0270af4d40a63ca525165d23ce33a->enter($__internal_e16fc8ca903a4925cde3c192de924a4636c0270af4d40a63ca525165d23ce33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d24cdd17b273a58de5b3a4aadf30a53ce3cdf3c7bcbcbad22b453b9411ea8caa->leave($__internal_d24cdd17b273a58de5b3a4aadf30a53ce3cdf3c7bcbcbad22b453b9411ea8caa_prof);

        
        $__internal_e16fc8ca903a4925cde3c192de924a4636c0270af4d40a63ca525165d23ce33a->leave($__internal_e16fc8ca903a4925cde3c192de924a4636c0270af4d40a63ca525165d23ce33a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
