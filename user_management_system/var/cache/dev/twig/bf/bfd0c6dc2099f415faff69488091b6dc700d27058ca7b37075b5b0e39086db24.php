<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c71700d67e1b5a2f506169597544ae95f2227eefea88b93f00204011cae4fed4 extends Twig_Template
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
        $__internal_67ee681d14371ac559e64b53542450fe979db045c6d1f70a040a8f74a8a171f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ee681d14371ac559e64b53542450fe979db045c6d1f70a040a8f74a8a171f7->enter($__internal_67ee681d14371ac559e64b53542450fe979db045c6d1f70a040a8f74a8a171f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2ee8ecdb93c39f26742b4d69c7046ffa3081c784307354c0d9ef31de72680332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee8ecdb93c39f26742b4d69c7046ffa3081c784307354c0d9ef31de72680332->enter($__internal_2ee8ecdb93c39f26742b4d69c7046ffa3081c784307354c0d9ef31de72680332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_67ee681d14371ac559e64b53542450fe979db045c6d1f70a040a8f74a8a171f7->leave($__internal_67ee681d14371ac559e64b53542450fe979db045c6d1f70a040a8f74a8a171f7_prof);

        
        $__internal_2ee8ecdb93c39f26742b4d69c7046ffa3081c784307354c0d9ef31de72680332->leave($__internal_2ee8ecdb93c39f26742b4d69c7046ffa3081c784307354c0d9ef31de72680332_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
