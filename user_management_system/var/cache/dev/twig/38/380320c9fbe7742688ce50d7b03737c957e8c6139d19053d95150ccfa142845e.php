<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a024dafbc5674a8ba25deb5c4217d1e2ec04411af345cbad092b266948505bbd extends Twig_Template
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
        $__internal_f797e9fb4d8a91612639ddd519e206f1f9f06b3ad0e6a44a19d38e6382997606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f797e9fb4d8a91612639ddd519e206f1f9f06b3ad0e6a44a19d38e6382997606->enter($__internal_f797e9fb4d8a91612639ddd519e206f1f9f06b3ad0e6a44a19d38e6382997606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b3957d7cae3430a0d9acb982b74f1a3760965ecbda6c54f75b4e6e3c61fc5192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3957d7cae3430a0d9acb982b74f1a3760965ecbda6c54f75b4e6e3c61fc5192->enter($__internal_b3957d7cae3430a0d9acb982b74f1a3760965ecbda6c54f75b4e6e3c61fc5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f797e9fb4d8a91612639ddd519e206f1f9f06b3ad0e6a44a19d38e6382997606->leave($__internal_f797e9fb4d8a91612639ddd519e206f1f9f06b3ad0e6a44a19d38e6382997606_prof);

        
        $__internal_b3957d7cae3430a0d9acb982b74f1a3760965ecbda6c54f75b4e6e3c61fc5192->leave($__internal_b3957d7cae3430a0d9acb982b74f1a3760965ecbda6c54f75b4e6e3c61fc5192_prof);

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
