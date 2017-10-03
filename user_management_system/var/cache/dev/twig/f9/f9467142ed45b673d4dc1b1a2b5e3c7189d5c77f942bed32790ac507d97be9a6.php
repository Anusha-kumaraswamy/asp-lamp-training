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
        $__internal_80ddb537b983dd8e4b3990d1f02bf8a62e7eff4fb5d74523450328515abe9713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ddb537b983dd8e4b3990d1f02bf8a62e7eff4fb5d74523450328515abe9713->enter($__internal_80ddb537b983dd8e4b3990d1f02bf8a62e7eff4fb5d74523450328515abe9713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_93c94dda51b1e0db5e03ba352f501f664e1438b712bc84665169508db31e431b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c94dda51b1e0db5e03ba352f501f664e1438b712bc84665169508db31e431b->enter($__internal_93c94dda51b1e0db5e03ba352f501f664e1438b712bc84665169508db31e431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_80ddb537b983dd8e4b3990d1f02bf8a62e7eff4fb5d74523450328515abe9713->leave($__internal_80ddb537b983dd8e4b3990d1f02bf8a62e7eff4fb5d74523450328515abe9713_prof);

        
        $__internal_93c94dda51b1e0db5e03ba352f501f664e1438b712bc84665169508db31e431b->leave($__internal_93c94dda51b1e0db5e03ba352f501f664e1438b712bc84665169508db31e431b_prof);

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
