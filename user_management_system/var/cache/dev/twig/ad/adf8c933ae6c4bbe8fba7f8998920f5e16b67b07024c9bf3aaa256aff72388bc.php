<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ab578389d785e534159c05ad1d917640e65f2209ccbcd4fd1589793e033e07c0 extends Twig_Template
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
        $__internal_f5a3879a572e4c4fa6bc700d9d9120e5fba2b1b4d27b9f377f4b5d0387fbcf09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a3879a572e4c4fa6bc700d9d9120e5fba2b1b4d27b9f377f4b5d0387fbcf09->enter($__internal_f5a3879a572e4c4fa6bc700d9d9120e5fba2b1b4d27b9f377f4b5d0387fbcf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_849ee43b6d419e225bc1566b44e144a4b70490eb1d5837c7850e1c19927a553f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849ee43b6d419e225bc1566b44e144a4b70490eb1d5837c7850e1c19927a553f->enter($__internal_849ee43b6d419e225bc1566b44e144a4b70490eb1d5837c7850e1c19927a553f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f5a3879a572e4c4fa6bc700d9d9120e5fba2b1b4d27b9f377f4b5d0387fbcf09->leave($__internal_f5a3879a572e4c4fa6bc700d9d9120e5fba2b1b4d27b9f377f4b5d0387fbcf09_prof);

        
        $__internal_849ee43b6d419e225bc1566b44e144a4b70490eb1d5837c7850e1c19927a553f->leave($__internal_849ee43b6d419e225bc1566b44e144a4b70490eb1d5837c7850e1c19927a553f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}