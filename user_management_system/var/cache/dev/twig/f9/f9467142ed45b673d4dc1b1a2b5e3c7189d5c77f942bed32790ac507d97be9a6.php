<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1f61bf7573fc8718934132765c072286c64537eea189d2cce3661024eba34f6e extends Twig_Template
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
        $__internal_5724ad9f6cc42414079f5655cf55645d80e2f5039f6b00ea17b85597a6858600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5724ad9f6cc42414079f5655cf55645d80e2f5039f6b00ea17b85597a6858600->enter($__internal_5724ad9f6cc42414079f5655cf55645d80e2f5039f6b00ea17b85597a6858600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_117500a00da5ed1a4e18c026221525150956393e1d7ee4017052af6d33bae03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117500a00da5ed1a4e18c026221525150956393e1d7ee4017052af6d33bae03c->enter($__internal_117500a00da5ed1a4e18c026221525150956393e1d7ee4017052af6d33bae03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5724ad9f6cc42414079f5655cf55645d80e2f5039f6b00ea17b85597a6858600->leave($__internal_5724ad9f6cc42414079f5655cf55645d80e2f5039f6b00ea17b85597a6858600_prof);

        
        $__internal_117500a00da5ed1a4e18c026221525150956393e1d7ee4017052af6d33bae03c->leave($__internal_117500a00da5ed1a4e18c026221525150956393e1d7ee4017052af6d33bae03c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
