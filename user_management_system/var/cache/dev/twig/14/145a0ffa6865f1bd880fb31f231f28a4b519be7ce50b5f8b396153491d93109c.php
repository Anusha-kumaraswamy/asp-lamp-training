<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9f5ecfcf0d074bbf2af56ccb27e32b82ff68a88c146b460e0df366e137c63755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_dd647ca28b825dd9bc8178115255a44aa9d9585e81957e2b77c8a32be4a7675d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd647ca28b825dd9bc8178115255a44aa9d9585e81957e2b77c8a32be4a7675d->enter($__internal_dd647ca28b825dd9bc8178115255a44aa9d9585e81957e2b77c8a32be4a7675d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_3ed21425d296adb92ac4c28e153b9c55c53d2c6200c9ea5b02a2b173e025c1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed21425d296adb92ac4c28e153b9c55c53d2c6200c9ea5b02a2b173e025c1f6->enter($__internal_3ed21425d296adb92ac4c28e153b9c55c53d2c6200c9ea5b02a2b173e025c1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd647ca28b825dd9bc8178115255a44aa9d9585e81957e2b77c8a32be4a7675d->leave($__internal_dd647ca28b825dd9bc8178115255a44aa9d9585e81957e2b77c8a32be4a7675d_prof);

        
        $__internal_3ed21425d296adb92ac4c28e153b9c55c53d2c6200c9ea5b02a2b173e025c1f6->leave($__internal_3ed21425d296adb92ac4c28e153b9c55c53d2c6200c9ea5b02a2b173e025c1f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7cf03f9617851cfd758cd59a4c17186acab857e22136d527ecc4a84fd0729f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf03f9617851cfd758cd59a4c17186acab857e22136d527ecc4a84fd0729f8d->enter($__internal_7cf03f9617851cfd758cd59a4c17186acab857e22136d527ecc4a84fd0729f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0dd69ed5aa54ab04242fe2b29837d0ace3286b4e7365129984d4f9c630977eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd69ed5aa54ab04242fe2b29837d0ace3286b4e7365129984d4f9c630977eca->enter($__internal_0dd69ed5aa54ab04242fe2b29837d0ace3286b4e7365129984d4f9c630977eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0dd69ed5aa54ab04242fe2b29837d0ace3286b4e7365129984d4f9c630977eca->leave($__internal_0dd69ed5aa54ab04242fe2b29837d0ace3286b4e7365129984d4f9c630977eca_prof);

        
        $__internal_7cf03f9617851cfd758cd59a4c17186acab857e22136d527ecc4a84fd0729f8d->leave($__internal_7cf03f9617851cfd758cd59a4c17186acab857e22136d527ecc4a84fd0729f8d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ad6973548978509515b40f7f51efeb5a8499ca81ee90494566260e38ca29db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad6973548978509515b40f7f51efeb5a8499ca81ee90494566260e38ca29db0->enter($__internal_7ad6973548978509515b40f7f51efeb5a8499ca81ee90494566260e38ca29db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ce5f05dd504a5b0e1a74f6aeb68d34edaa7944ebe1b93ff79f984247a94015b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce5f05dd504a5b0e1a74f6aeb68d34edaa7944ebe1b93ff79f984247a94015b->enter($__internal_1ce5f05dd504a5b0e1a74f6aeb68d34edaa7944ebe1b93ff79f984247a94015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1ce5f05dd504a5b0e1a74f6aeb68d34edaa7944ebe1b93ff79f984247a94015b->leave($__internal_1ce5f05dd504a5b0e1a74f6aeb68d34edaa7944ebe1b93ff79f984247a94015b_prof);

        
        $__internal_7ad6973548978509515b40f7f51efeb5a8499ca81ee90494566260e38ca29db0->leave($__internal_7ad6973548978509515b40f7f51efeb5a8499ca81ee90494566260e38ca29db0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b22d68419feeced909a2ac718088c0ae2255f0a318a200c226ec0f1ae887d871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22d68419feeced909a2ac718088c0ae2255f0a318a200c226ec0f1ae887d871->enter($__internal_b22d68419feeced909a2ac718088c0ae2255f0a318a200c226ec0f1ae887d871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7a5ce230fa2dc1c715d22cff813a618ecd7a60e98d3e33242fa2c0040df07aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a5ce230fa2dc1c715d22cff813a618ecd7a60e98d3e33242fa2c0040df07aa->enter($__internal_b7a5ce230fa2dc1c715d22cff813a618ecd7a60e98d3e33242fa2c0040df07aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b7a5ce230fa2dc1c715d22cff813a618ecd7a60e98d3e33242fa2c0040df07aa->leave($__internal_b7a5ce230fa2dc1c715d22cff813a618ecd7a60e98d3e33242fa2c0040df07aa_prof);

        
        $__internal_b22d68419feeced909a2ac718088c0ae2255f0a318a200c226ec0f1ae887d871->leave($__internal_b22d68419feeced909a2ac718088c0ae2255f0a318a200c226ec0f1ae887d871_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
