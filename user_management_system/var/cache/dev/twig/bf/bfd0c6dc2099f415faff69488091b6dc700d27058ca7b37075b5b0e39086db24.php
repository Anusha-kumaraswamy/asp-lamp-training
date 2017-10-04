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
        $__internal_13edb2aa7d3d46169780b26deaf4b3e37653745ea35183939b171f62d86b4d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13edb2aa7d3d46169780b26deaf4b3e37653745ea35183939b171f62d86b4d03->enter($__internal_13edb2aa7d3d46169780b26deaf4b3e37653745ea35183939b171f62d86b4d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fb07f7e837a1cc59c9a98c496cbbea05e9a2b3b90d859e952737311f76192901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb07f7e837a1cc59c9a98c496cbbea05e9a2b3b90d859e952737311f76192901->enter($__internal_fb07f7e837a1cc59c9a98c496cbbea05e9a2b3b90d859e952737311f76192901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_13edb2aa7d3d46169780b26deaf4b3e37653745ea35183939b171f62d86b4d03->leave($__internal_13edb2aa7d3d46169780b26deaf4b3e37653745ea35183939b171f62d86b4d03_prof);

        
        $__internal_fb07f7e837a1cc59c9a98c496cbbea05e9a2b3b90d859e952737311f76192901->leave($__internal_fb07f7e837a1cc59c9a98c496cbbea05e9a2b3b90d859e952737311f76192901_prof);

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
