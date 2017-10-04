<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bbcd4e5f41c89baab2ace1da5b27fdec38c7fd4d92187a301a68246853591083 extends Twig_Template
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
        $__internal_88f54fbadae2f839c4deea623d79cecb56761186bb42e057cf8d0b3064d54888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f54fbadae2f839c4deea623d79cecb56761186bb42e057cf8d0b3064d54888->enter($__internal_88f54fbadae2f839c4deea623d79cecb56761186bb42e057cf8d0b3064d54888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_46e6eb7ec896a6cfe68bf947d0a59e5a22a63f1847b762706a9d2375bf784635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e6eb7ec896a6cfe68bf947d0a59e5a22a63f1847b762706a9d2375bf784635->enter($__internal_46e6eb7ec896a6cfe68bf947d0a59e5a22a63f1847b762706a9d2375bf784635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_88f54fbadae2f839c4deea623d79cecb56761186bb42e057cf8d0b3064d54888->leave($__internal_88f54fbadae2f839c4deea623d79cecb56761186bb42e057cf8d0b3064d54888_prof);

        
        $__internal_46e6eb7ec896a6cfe68bf947d0a59e5a22a63f1847b762706a9d2375bf784635->leave($__internal_46e6eb7ec896a6cfe68bf947d0a59e5a22a63f1847b762706a9d2375bf784635_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
