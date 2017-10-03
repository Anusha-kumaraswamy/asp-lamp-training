<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_0af2cdc185874ba9ce4bb7fd21ed2a643d27682f3e34ec3a1c1fc42868e53826 extends Twig_Template
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
        $__internal_844b12c11a5f510b3fd549ac2e8e3f5a994d262c450e9e95283e18da6efa9b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844b12c11a5f510b3fd549ac2e8e3f5a994d262c450e9e95283e18da6efa9b37->enter($__internal_844b12c11a5f510b3fd549ac2e8e3f5a994d262c450e9e95283e18da6efa9b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_68f368eef49fac61c0312865ba787a5b22b306cfde3661ff76e9ed392721f71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f368eef49fac61c0312865ba787a5b22b306cfde3661ff76e9ed392721f71b->enter($__internal_68f368eef49fac61c0312865ba787a5b22b306cfde3661ff76e9ed392721f71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_844b12c11a5f510b3fd549ac2e8e3f5a994d262c450e9e95283e18da6efa9b37->leave($__internal_844b12c11a5f510b3fd549ac2e8e3f5a994d262c450e9e95283e18da6efa9b37_prof);

        
        $__internal_68f368eef49fac61c0312865ba787a5b22b306cfde3661ff76e9ed392721f71b->leave($__internal_68f368eef49fac61c0312865ba787a5b22b306cfde3661ff76e9ed392721f71b_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
