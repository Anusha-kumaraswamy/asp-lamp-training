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
        $__internal_b41aadf75c70844543479e632a3cf059e1467c27af451c123edfff44f43d002a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41aadf75c70844543479e632a3cf059e1467c27af451c123edfff44f43d002a->enter($__internal_b41aadf75c70844543479e632a3cf059e1467c27af451c123edfff44f43d002a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b002f1fd40d7e8f8097112588d64fca061caa115e9666e7f8b57b128b46405ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b002f1fd40d7e8f8097112588d64fca061caa115e9666e7f8b57b128b46405ae->enter($__internal_b002f1fd40d7e8f8097112588d64fca061caa115e9666e7f8b57b128b46405ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b41aadf75c70844543479e632a3cf059e1467c27af451c123edfff44f43d002a->leave($__internal_b41aadf75c70844543479e632a3cf059e1467c27af451c123edfff44f43d002a_prof);

        
        $__internal_b002f1fd40d7e8f8097112588d64fca061caa115e9666e7f8b57b128b46405ae->leave($__internal_b002f1fd40d7e8f8097112588d64fca061caa115e9666e7f8b57b128b46405ae_prof);

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
