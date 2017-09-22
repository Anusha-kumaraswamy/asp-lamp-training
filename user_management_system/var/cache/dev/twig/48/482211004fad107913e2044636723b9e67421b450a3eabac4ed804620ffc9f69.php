<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'table' => array($this, 'block_table'),
            'form' => array($this, 'block_form'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed3a220e220fc9c0d424543f58a628bbfbea3f82a8071b1ce2398cb3c45f88d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3a220e220fc9c0d424543f58a628bbfbea3f82a8071b1ce2398cb3c45f88d3->enter($__internal_ed3a220e220fc9c0d424543f58a628bbfbea3f82a8071b1ce2398cb3c45f88d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2a6d02d093ccc9857ad24580348e66b39f13efbd0998d37c401fe687b3d0d6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6d02d093ccc9857ad24580348e66b39f13efbd0998d37c401fe687b3d0d6ee->enter($__internal_2a6d02d093ccc9857ad24580348e66b39f13efbd0998d37c401fe687b3d0d6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            <link rel = \"stylesheet\" type = \"text/css\" href = \"https://bootswatch.com/cerulean/bootstrap.css\">
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body> 
            ";
        // line 12
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "            ";
        $this->displayBlock('table', $context, $blocks);
        // line 14
        echo "            ";
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>";
        
        $__internal_ed3a220e220fc9c0d424543f58a628bbfbea3f82a8071b1ce2398cb3c45f88d3->leave($__internal_ed3a220e220fc9c0d424543f58a628bbfbea3f82a8071b1ce2398cb3c45f88d3_prof);

        
        $__internal_2a6d02d093ccc9857ad24580348e66b39f13efbd0998d37c401fe687b3d0d6ee->leave($__internal_2a6d02d093ccc9857ad24580348e66b39f13efbd0998d37c401fe687b3d0d6ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9f7f4a913a7ee3512e8a3d81a8e69c687a606068e26757291abbef7cc6a3e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f7f4a913a7ee3512e8a3d81a8e69c687a606068e26757291abbef7cc6a3e4c->enter($__internal_c9f7f4a913a7ee3512e8a3d81a8e69c687a606068e26757291abbef7cc6a3e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ccd914a51f8f91928138208210f7aaffc461fda2d4d42b38c7c8ceb9b970f971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd914a51f8f91928138208210f7aaffc461fda2d4d42b38c7c8ceb9b970f971->enter($__internal_ccd914a51f8f91928138208210f7aaffc461fda2d4d42b38c7c8ceb9b970f971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Management System";
        
        $__internal_ccd914a51f8f91928138208210f7aaffc461fda2d4d42b38c7c8ceb9b970f971->leave($__internal_ccd914a51f8f91928138208210f7aaffc461fda2d4d42b38c7c8ceb9b970f971_prof);

        
        $__internal_c9f7f4a913a7ee3512e8a3d81a8e69c687a606068e26757291abbef7cc6a3e4c->leave($__internal_c9f7f4a913a7ee3512e8a3d81a8e69c687a606068e26757291abbef7cc6a3e4c_prof);

    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_082329b405f516a4ce20f8a002d287b582f8cf5eaa7bbee671e1b433e04ddc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082329b405f516a4ce20f8a002d287b582f8cf5eaa7bbee671e1b433e04ddc01->enter($__internal_082329b405f516a4ce20f8a002d287b582f8cf5eaa7bbee671e1b433e04ddc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6fa45766aa03e2bbdd96f965b9541c8ef58e94026d5bf2e4b1295296640e5347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa45766aa03e2bbdd96f965b9541c8ef58e94026d5bf2e4b1295296640e5347->enter($__internal_6fa45766aa03e2bbdd96f965b9541c8ef58e94026d5bf2e4b1295296640e5347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_6fa45766aa03e2bbdd96f965b9541c8ef58e94026d5bf2e4b1295296640e5347->leave($__internal_6fa45766aa03e2bbdd96f965b9541c8ef58e94026d5bf2e4b1295296640e5347_prof);

        
        $__internal_082329b405f516a4ce20f8a002d287b582f8cf5eaa7bbee671e1b433e04ddc01->leave($__internal_082329b405f516a4ce20f8a002d287b582f8cf5eaa7bbee671e1b433e04ddc01_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_d43d3083ec9144a8eb5d06b339821b734641c22638fa8089ceca72cb90b278b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43d3083ec9144a8eb5d06b339821b734641c22638fa8089ceca72cb90b278b5->enter($__internal_d43d3083ec9144a8eb5d06b339821b734641c22638fa8089ceca72cb90b278b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_10df1bf56c5d7f50a95ffa2b7a35484e5bc5cfee1b7848b192cd995a8a8ea561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10df1bf56c5d7f50a95ffa2b7a35484e5bc5cfee1b7848b192cd995a8a8ea561->enter($__internal_10df1bf56c5d7f50a95ffa2b7a35484e5bc5cfee1b7848b192cd995a8a8ea561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_10df1bf56c5d7f50a95ffa2b7a35484e5bc5cfee1b7848b192cd995a8a8ea561->leave($__internal_10df1bf56c5d7f50a95ffa2b7a35484e5bc5cfee1b7848b192cd995a8a8ea561_prof);

        
        $__internal_d43d3083ec9144a8eb5d06b339821b734641c22638fa8089ceca72cb90b278b5->leave($__internal_d43d3083ec9144a8eb5d06b339821b734641c22638fa8089ceca72cb90b278b5_prof);

    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
        $__internal_0a7006c9e35103ff404c8fb603669346e23b194ed98d72b8970833dd86c55a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7006c9e35103ff404c8fb603669346e23b194ed98d72b8970833dd86c55a38->enter($__internal_0a7006c9e35103ff404c8fb603669346e23b194ed98d72b8970833dd86c55a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_af64f5f16f01721406aeb509aa60ef76c8b8eafa41536dd60bb1230ff68305a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af64f5f16f01721406aeb509aa60ef76c8b8eafa41536dd60bb1230ff68305a8->enter($__internal_af64f5f16f01721406aeb509aa60ef76c8b8eafa41536dd60bb1230ff68305a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_af64f5f16f01721406aeb509aa60ef76c8b8eafa41536dd60bb1230ff68305a8->leave($__internal_af64f5f16f01721406aeb509aa60ef76c8b8eafa41536dd60bb1230ff68305a8_prof);

        
        $__internal_0a7006c9e35103ff404c8fb603669346e23b194ed98d72b8970833dd86c55a38->leave($__internal_0a7006c9e35103ff404c8fb603669346e23b194ed98d72b8970833dd86c55a38_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_202c1cf89c11c9e89066ccc83a2606049ae1cc278861b0f791dde0b89d2b5d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202c1cf89c11c9e89066ccc83a2606049ae1cc278861b0f791dde0b89d2b5d49->enter($__internal_202c1cf89c11c9e89066ccc83a2606049ae1cc278861b0f791dde0b89d2b5d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_de89067bc8a86b419d5fe8d94be07ac9ebbcdf1d208f6d163bd90cdd4abf4099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de89067bc8a86b419d5fe8d94be07ac9ebbcdf1d208f6d163bd90cdd4abf4099->enter($__internal_de89067bc8a86b419d5fe8d94be07ac9ebbcdf1d208f6d163bd90cdd4abf4099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de89067bc8a86b419d5fe8d94be07ac9ebbcdf1d208f6d163bd90cdd4abf4099->leave($__internal_de89067bc8a86b419d5fe8d94be07ac9ebbcdf1d208f6d163bd90cdd4abf4099_prof);

        
        $__internal_202c1cf89c11c9e89066ccc83a2606049ae1cc278861b0f791dde0b89d2b5d49->leave($__internal_202c1cf89c11c9e89066ccc83a2606049ae1cc278861b0f791dde0b89d2b5d49_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 15,  123 => 14,  106 => 13,  89 => 12,  71 => 5,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  49 => 12,  43 => 9,  36 => 5,  30 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}User Management System{% endblock %}</title>
        <style>
            <link rel = \"stylesheet\" type = \"text/css\" href = \"https://bootswatch.com/cerulean/bootstrap.css\">
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body> 
            {% block navbar %}{% endblock %}
            {% block table %}{% endblock %}
            {% block form %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "/var/www/html/asp-lamp-training/user_management_system/app/Resources/views/base.html.twig");
    }
}
