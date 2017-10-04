<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6512776d6cbc35221a774488b19fbb05b4a54a3e82eb196190a2843dbf3d95fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6da7be17272732da60bd23f53c93c637c7aa8fec6716b926a600c0a1bd72a19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da7be17272732da60bd23f53c93c637c7aa8fec6716b926a600c0a1bd72a19c->enter($__internal_6da7be17272732da60bd23f53c93c637c7aa8fec6716b926a600c0a1bd72a19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_fdce21e56633e7629fba16e947632673a43ef911f605b4dd98d21cf4437fef7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdce21e56633e7629fba16e947632673a43ef911f605b4dd98d21cf4437fef7f->enter($__internal_fdce21e56633e7629fba16e947632673a43ef911f605b4dd98d21cf4437fef7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da7be17272732da60bd23f53c93c637c7aa8fec6716b926a600c0a1bd72a19c->leave($__internal_6da7be17272732da60bd23f53c93c637c7aa8fec6716b926a600c0a1bd72a19c_prof);

        
        $__internal_fdce21e56633e7629fba16e947632673a43ef911f605b4dd98d21cf4437fef7f->leave($__internal_fdce21e56633e7629fba16e947632673a43ef911f605b4dd98d21cf4437fef7f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4be3f71dac9e1edfdfdfa6041edb8c7efb716cca4f88fe73cb71e839d5ed6f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be3f71dac9e1edfdfdfa6041edb8c7efb716cca4f88fe73cb71e839d5ed6f1e->enter($__internal_4be3f71dac9e1edfdfdfa6041edb8c7efb716cca4f88fe73cb71e839d5ed6f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c6c54ed297f68463a35e98c70e501ecb99f58b1abaa9881217c181f69b4e11e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c54ed297f68463a35e98c70e501ecb99f58b1abaa9881217c181f69b4e11e5->enter($__internal_c6c54ed297f68463a35e98c70e501ecb99f58b1abaa9881217c181f69b4e11e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c6c54ed297f68463a35e98c70e501ecb99f58b1abaa9881217c181f69b4e11e5->leave($__internal_c6c54ed297f68463a35e98c70e501ecb99f58b1abaa9881217c181f69b4e11e5_prof);

        
        $__internal_4be3f71dac9e1edfdfdfa6041edb8c7efb716cca4f88fe73cb71e839d5ed6f1e->leave($__internal_4be3f71dac9e1edfdfdfa6041edb8c7efb716cca4f88fe73cb71e839d5ed6f1e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_028b5b84d7e4037c57273065db587484ddf7a20bbaa0c766f268cc8d9d421253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028b5b84d7e4037c57273065db587484ddf7a20bbaa0c766f268cc8d9d421253->enter($__internal_028b5b84d7e4037c57273065db587484ddf7a20bbaa0c766f268cc8d9d421253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3276eb8680ce69af1aed96012170375b4fbcc14959fbd5ba1398d56b25c72501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3276eb8680ce69af1aed96012170375b4fbcc14959fbd5ba1398d56b25c72501->enter($__internal_3276eb8680ce69af1aed96012170375b4fbcc14959fbd5ba1398d56b25c72501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3276eb8680ce69af1aed96012170375b4fbcc14959fbd5ba1398d56b25c72501->leave($__internal_3276eb8680ce69af1aed96012170375b4fbcc14959fbd5ba1398d56b25c72501_prof);

        
        $__internal_028b5b84d7e4037c57273065db587484ddf7a20bbaa0c766f268cc8d9d421253->leave($__internal_028b5b84d7e4037c57273065db587484ddf7a20bbaa0c766f268cc8d9d421253_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
