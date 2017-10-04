<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_e3632c70a1fe696336c0f30327c1f1b6b2d420f8ee31b8c9fcd94cb555bc2198 extends Twig_Template
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
        $__internal_9f2faf65167c7111c09db7d16df1afe9b0448b9ae0544be0e0f16bf6f28f8dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2faf65167c7111c09db7d16df1afe9b0448b9ae0544be0e0f16bf6f28f8dae->enter($__internal_9f2faf65167c7111c09db7d16df1afe9b0448b9ae0544be0e0f16bf6f28f8dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_be3c45c1e85444dc61ac0ea2a3f110151e09360c23b5b98836ac9a7f1262a2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3c45c1e85444dc61ac0ea2a3f110151e09360c23b5b98836ac9a7f1262a2e4->enter($__internal_be3c45c1e85444dc61ac0ea2a3f110151e09360c23b5b98836ac9a7f1262a2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_9f2faf65167c7111c09db7d16df1afe9b0448b9ae0544be0e0f16bf6f28f8dae->leave($__internal_9f2faf65167c7111c09db7d16df1afe9b0448b9ae0544be0e0f16bf6f28f8dae_prof);

        
        $__internal_be3c45c1e85444dc61ac0ea2a3f110151e09360c23b5b98836ac9a7f1262a2e4->leave($__internal_be3c45c1e85444dc61ac0ea2a3f110151e09360c23b5b98836ac9a7f1262a2e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
