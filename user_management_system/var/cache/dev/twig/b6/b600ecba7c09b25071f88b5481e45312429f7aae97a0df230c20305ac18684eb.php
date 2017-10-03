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
        $__internal_b98ae528f45a33b1bf431df28e8e1a1e77684e7753be640cf564f0ad20ad95ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98ae528f45a33b1bf431df28e8e1a1e77684e7753be640cf564f0ad20ad95ce->enter($__internal_b98ae528f45a33b1bf431df28e8e1a1e77684e7753be640cf564f0ad20ad95ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bc0818c5f0a1a3896fbba1b9b69129dd452d93229aefa5803de1a524b23ef3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0818c5f0a1a3896fbba1b9b69129dd452d93229aefa5803de1a524b23ef3f9->enter($__internal_bc0818c5f0a1a3896fbba1b9b69129dd452d93229aefa5803de1a524b23ef3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b98ae528f45a33b1bf431df28e8e1a1e77684e7753be640cf564f0ad20ad95ce->leave($__internal_b98ae528f45a33b1bf431df28e8e1a1e77684e7753be640cf564f0ad20ad95ce_prof);

        
        $__internal_bc0818c5f0a1a3896fbba1b9b69129dd452d93229aefa5803de1a524b23ef3f9->leave($__internal_bc0818c5f0a1a3896fbba1b9b69129dd452d93229aefa5803de1a524b23ef3f9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_45bd49ee8a8485201018fa7e173a18f8bd5003e811a956f82555daf248f73c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bd49ee8a8485201018fa7e173a18f8bd5003e811a956f82555daf248f73c54->enter($__internal_45bd49ee8a8485201018fa7e173a18f8bd5003e811a956f82555daf248f73c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9790336ab905f3e2ce261ce907733db6e7a76fdbc0b9754a06bf544e7d4b87fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9790336ab905f3e2ce261ce907733db6e7a76fdbc0b9754a06bf544e7d4b87fa->enter($__internal_9790336ab905f3e2ce261ce907733db6e7a76fdbc0b9754a06bf544e7d4b87fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9790336ab905f3e2ce261ce907733db6e7a76fdbc0b9754a06bf544e7d4b87fa->leave($__internal_9790336ab905f3e2ce261ce907733db6e7a76fdbc0b9754a06bf544e7d4b87fa_prof);

        
        $__internal_45bd49ee8a8485201018fa7e173a18f8bd5003e811a956f82555daf248f73c54->leave($__internal_45bd49ee8a8485201018fa7e173a18f8bd5003e811a956f82555daf248f73c54_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_005e76a8fa5ccd709590c532d0af24720f343a19c24fa06053872b7667ff6eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005e76a8fa5ccd709590c532d0af24720f343a19c24fa06053872b7667ff6eba->enter($__internal_005e76a8fa5ccd709590c532d0af24720f343a19c24fa06053872b7667ff6eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f5688757544760a9e635c419bd2acc0633c009128e5807ada44e4440524e1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5688757544760a9e635c419bd2acc0633c009128e5807ada44e4440524e1a3->enter($__internal_6f5688757544760a9e635c419bd2acc0633c009128e5807ada44e4440524e1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f5688757544760a9e635c419bd2acc0633c009128e5807ada44e4440524e1a3->leave($__internal_6f5688757544760a9e635c419bd2acc0633c009128e5807ada44e4440524e1a3_prof);

        
        $__internal_005e76a8fa5ccd709590c532d0af24720f343a19c24fa06053872b7667ff6eba->leave($__internal_005e76a8fa5ccd709590c532d0af24720f343a19c24fa06053872b7667ff6eba_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_41a7f8ab501ff04be9db064a80df37c24685670a5cbf84aed00ff0b82ba829df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a7f8ab501ff04be9db064a80df37c24685670a5cbf84aed00ff0b82ba829df->enter($__internal_41a7f8ab501ff04be9db064a80df37c24685670a5cbf84aed00ff0b82ba829df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4971beff26351c9c2b479b2e298ad24028754a8cf484a5ebc11dc89b271a3efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4971beff26351c9c2b479b2e298ad24028754a8cf484a5ebc11dc89b271a3efb->enter($__internal_4971beff26351c9c2b479b2e298ad24028754a8cf484a5ebc11dc89b271a3efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4971beff26351c9c2b479b2e298ad24028754a8cf484a5ebc11dc89b271a3efb->leave($__internal_4971beff26351c9c2b479b2e298ad24028754a8cf484a5ebc11dc89b271a3efb_prof);

        
        $__internal_41a7f8ab501ff04be9db064a80df37c24685670a5cbf84aed00ff0b82ba829df->leave($__internal_41a7f8ab501ff04be9db064a80df37c24685670a5cbf84aed00ff0b82ba829df_prof);

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
