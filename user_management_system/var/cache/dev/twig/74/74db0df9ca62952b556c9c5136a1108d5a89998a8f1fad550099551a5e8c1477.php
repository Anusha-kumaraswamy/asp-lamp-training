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
        $__internal_429026b0573a4ac7ebfe0fc7190e9f45171119c951a30a4caaad72a6f6b58b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429026b0573a4ac7ebfe0fc7190e9f45171119c951a30a4caaad72a6f6b58b43->enter($__internal_429026b0573a4ac7ebfe0fc7190e9f45171119c951a30a4caaad72a6f6b58b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b9e549c2fd689fb5ebdcdcfb9a00251920a305bd76b8e4dc84a22008f0e7173a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e549c2fd689fb5ebdcdcfb9a00251920a305bd76b8e4dc84a22008f0e7173a->enter($__internal_b9e549c2fd689fb5ebdcdcfb9a00251920a305bd76b8e4dc84a22008f0e7173a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_429026b0573a4ac7ebfe0fc7190e9f45171119c951a30a4caaad72a6f6b58b43->leave($__internal_429026b0573a4ac7ebfe0fc7190e9f45171119c951a30a4caaad72a6f6b58b43_prof);

        
        $__internal_b9e549c2fd689fb5ebdcdcfb9a00251920a305bd76b8e4dc84a22008f0e7173a->leave($__internal_b9e549c2fd689fb5ebdcdcfb9a00251920a305bd76b8e4dc84a22008f0e7173a_prof);

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
