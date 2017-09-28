<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ab692ff92e8766b717083b00603ebe924190c883fdd442435b573d46ad2638d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_825b8bc32e23ac5ddb87f9e1ce76727ca8bd7750107a351aa729f180213a71a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825b8bc32e23ac5ddb87f9e1ce76727ca8bd7750107a351aa729f180213a71a5->enter($__internal_825b8bc32e23ac5ddb87f9e1ce76727ca8bd7750107a351aa729f180213a71a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e091eec64d60c3ab32615ebe775e4f901639b882d68bf93a88e0bdb438f069e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e091eec64d60c3ab32615ebe775e4f901639b882d68bf93a88e0bdb438f069e8->enter($__internal_e091eec64d60c3ab32615ebe775e4f901639b882d68bf93a88e0bdb438f069e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_825b8bc32e23ac5ddb87f9e1ce76727ca8bd7750107a351aa729f180213a71a5->leave($__internal_825b8bc32e23ac5ddb87f9e1ce76727ca8bd7750107a351aa729f180213a71a5_prof);

        
        $__internal_e091eec64d60c3ab32615ebe775e4f901639b882d68bf93a88e0bdb438f069e8->leave($__internal_e091eec64d60c3ab32615ebe775e4f901639b882d68bf93a88e0bdb438f069e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_13120783364c0c9b777e964c777b1616a5369ab756fd363b7ed76f48ffac358b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13120783364c0c9b777e964c777b1616a5369ab756fd363b7ed76f48ffac358b->enter($__internal_13120783364c0c9b777e964c777b1616a5369ab756fd363b7ed76f48ffac358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce3930e2acb4b8b92776e193c871efed649d9d97c16353596589b1e6ed30851e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3930e2acb4b8b92776e193c871efed649d9d97c16353596589b1e6ed30851e->enter($__internal_ce3930e2acb4b8b92776e193c871efed649d9d97c16353596589b1e6ed30851e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ce3930e2acb4b8b92776e193c871efed649d9d97c16353596589b1e6ed30851e->leave($__internal_ce3930e2acb4b8b92776e193c871efed649d9d97c16353596589b1e6ed30851e_prof);

        
        $__internal_13120783364c0c9b777e964c777b1616a5369ab756fd363b7ed76f48ffac358b->leave($__internal_13120783364c0c9b777e964c777b1616a5369ab756fd363b7ed76f48ffac358b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_65bc49be2038be6f9392e43a9e9fff56c7fd01d5a5bc38c017b04623cd49cdca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bc49be2038be6f9392e43a9e9fff56c7fd01d5a5bc38c017b04623cd49cdca->enter($__internal_65bc49be2038be6f9392e43a9e9fff56c7fd01d5a5bc38c017b04623cd49cdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_172d7fb3fb522687ce1fe13cc2942ae4c4b5a6fb1d4ea820df1b3188b18a36a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172d7fb3fb522687ce1fe13cc2942ae4c4b5a6fb1d4ea820df1b3188b18a36a6->enter($__internal_172d7fb3fb522687ce1fe13cc2942ae4c4b5a6fb1d4ea820df1b3188b18a36a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_172d7fb3fb522687ce1fe13cc2942ae4c4b5a6fb1d4ea820df1b3188b18a36a6->leave($__internal_172d7fb3fb522687ce1fe13cc2942ae4c4b5a6fb1d4ea820df1b3188b18a36a6_prof);

        
        $__internal_65bc49be2038be6f9392e43a9e9fff56c7fd01d5a5bc38c017b04623cd49cdca->leave($__internal_65bc49be2038be6f9392e43a9e9fff56c7fd01d5a5bc38c017b04623cd49cdca_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa7068a6baa8d3c4b80c0697bce23b301d7197cc6d134a695ccea73fd5ced02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7068a6baa8d3c4b80c0697bce23b301d7197cc6d134a695ccea73fd5ced02f->enter($__internal_aa7068a6baa8d3c4b80c0697bce23b301d7197cc6d134a695ccea73fd5ced02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a4212cc03463f811433be100a80756475e2aa36778558a704304e5d25d235a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4212cc03463f811433be100a80756475e2aa36778558a704304e5d25d235a6->enter($__internal_0a4212cc03463f811433be100a80756475e2aa36778558a704304e5d25d235a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a4212cc03463f811433be100a80756475e2aa36778558a704304e5d25d235a6->leave($__internal_0a4212cc03463f811433be100a80756475e2aa36778558a704304e5d25d235a6_prof);

        
        $__internal_aa7068a6baa8d3c4b80c0697bce23b301d7197cc6d134a695ccea73fd5ced02f->leave($__internal_aa7068a6baa8d3c4b80c0697bce23b301d7197cc6d134a695ccea73fd5ced02f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
