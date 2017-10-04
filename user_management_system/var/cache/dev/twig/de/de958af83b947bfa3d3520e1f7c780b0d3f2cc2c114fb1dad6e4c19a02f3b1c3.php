<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_529a4a3bc3131f34286491b14afc19f75f28e1dc6747710d02b6aab2cdb3d002 extends Twig_Template
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
        $__internal_de084975dbc5f547d4552f8aad98b536552a77c7e4b46f3e17b925087d2d275e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de084975dbc5f547d4552f8aad98b536552a77c7e4b46f3e17b925087d2d275e->enter($__internal_de084975dbc5f547d4552f8aad98b536552a77c7e4b46f3e17b925087d2d275e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b5442e2730df0f8a2ebf13d932c3894649481d03e0af20e41e316c1b596ab679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5442e2730df0f8a2ebf13d932c3894649481d03e0af20e41e316c1b596ab679->enter($__internal_b5442e2730df0f8a2ebf13d932c3894649481d03e0af20e41e316c1b596ab679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_de084975dbc5f547d4552f8aad98b536552a77c7e4b46f3e17b925087d2d275e->leave($__internal_de084975dbc5f547d4552f8aad98b536552a77c7e4b46f3e17b925087d2d275e_prof);

        
        $__internal_b5442e2730df0f8a2ebf13d932c3894649481d03e0af20e41e316c1b596ab679->leave($__internal_b5442e2730df0f8a2ebf13d932c3894649481d03e0af20e41e316c1b596ab679_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
