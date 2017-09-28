<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9f5ecfcf0d074bbf2af56ccb27e32b82ff68a88c146b460e0df366e137c63755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7528b9cc1b5596319e417cc737dc299384a1b1b63732ad073050b1f5dfb62e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7528b9cc1b5596319e417cc737dc299384a1b1b63732ad073050b1f5dfb62e8->enter($__internal_f7528b9cc1b5596319e417cc737dc299384a1b1b63732ad073050b1f5dfb62e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d8ef1339d549d20dcb6834c57b8054f3e8a38348d19ffee225b150126e13b81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ef1339d549d20dcb6834c57b8054f3e8a38348d19ffee225b150126e13b81f->enter($__internal_d8ef1339d549d20dcb6834c57b8054f3e8a38348d19ffee225b150126e13b81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7528b9cc1b5596319e417cc737dc299384a1b1b63732ad073050b1f5dfb62e8->leave($__internal_f7528b9cc1b5596319e417cc737dc299384a1b1b63732ad073050b1f5dfb62e8_prof);

        
        $__internal_d8ef1339d549d20dcb6834c57b8054f3e8a38348d19ffee225b150126e13b81f->leave($__internal_d8ef1339d549d20dcb6834c57b8054f3e8a38348d19ffee225b150126e13b81f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e875701db726dfba3a32a88bfa59a77efb9427f263f6cac5dc5d807f27fd945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e875701db726dfba3a32a88bfa59a77efb9427f263f6cac5dc5d807f27fd945->enter($__internal_6e875701db726dfba3a32a88bfa59a77efb9427f263f6cac5dc5d807f27fd945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19a71c4236535bce9d155f681e880e848c79a4d90408b8231439019abd8681cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a71c4236535bce9d155f681e880e848c79a4d90408b8231439019abd8681cc->enter($__internal_19a71c4236535bce9d155f681e880e848c79a4d90408b8231439019abd8681cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_19a71c4236535bce9d155f681e880e848c79a4d90408b8231439019abd8681cc->leave($__internal_19a71c4236535bce9d155f681e880e848c79a4d90408b8231439019abd8681cc_prof);

        
        $__internal_6e875701db726dfba3a32a88bfa59a77efb9427f263f6cac5dc5d807f27fd945->leave($__internal_6e875701db726dfba3a32a88bfa59a77efb9427f263f6cac5dc5d807f27fd945_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_374dd5da8712b96d0e4a9c6da8ad40b8063fe648b7d90553aa8ba9e4bdc93d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374dd5da8712b96d0e4a9c6da8ad40b8063fe648b7d90553aa8ba9e4bdc93d35->enter($__internal_374dd5da8712b96d0e4a9c6da8ad40b8063fe648b7d90553aa8ba9e4bdc93d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f298136cde1da03b21f55e847ae38eda03414ec8897d53c531f5f82b28ce32eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f298136cde1da03b21f55e847ae38eda03414ec8897d53c531f5f82b28ce32eb->enter($__internal_f298136cde1da03b21f55e847ae38eda03414ec8897d53c531f5f82b28ce32eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f298136cde1da03b21f55e847ae38eda03414ec8897d53c531f5f82b28ce32eb->leave($__internal_f298136cde1da03b21f55e847ae38eda03414ec8897d53c531f5f82b28ce32eb_prof);

        
        $__internal_374dd5da8712b96d0e4a9c6da8ad40b8063fe648b7d90553aa8ba9e4bdc93d35->leave($__internal_374dd5da8712b96d0e4a9c6da8ad40b8063fe648b7d90553aa8ba9e4bdc93d35_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_601927da012f85232fc47ff3f9942f71b737cd65b849aa2a9a8e4daed5739e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601927da012f85232fc47ff3f9942f71b737cd65b849aa2a9a8e4daed5739e9a->enter($__internal_601927da012f85232fc47ff3f9942f71b737cd65b849aa2a9a8e4daed5739e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_107fb7dcb58767b6c0f8aa68f2c8414cd727d9b84464be5e5346907c78eacb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107fb7dcb58767b6c0f8aa68f2c8414cd727d9b84464be5e5346907c78eacb56->enter($__internal_107fb7dcb58767b6c0f8aa68f2c8414cd727d9b84464be5e5346907c78eacb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_107fb7dcb58767b6c0f8aa68f2c8414cd727d9b84464be5e5346907c78eacb56->leave($__internal_107fb7dcb58767b6c0f8aa68f2c8414cd727d9b84464be5e5346907c78eacb56_prof);

        
        $__internal_601927da012f85232fc47ff3f9942f71b737cd65b849aa2a9a8e4daed5739e9a->leave($__internal_601927da012f85232fc47ff3f9942f71b737cd65b849aa2a9a8e4daed5739e9a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
