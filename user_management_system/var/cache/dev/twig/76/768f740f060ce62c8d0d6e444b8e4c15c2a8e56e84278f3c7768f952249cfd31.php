<?php

/* base.html.twig */
class __TwigTemplate_479d5f3c7c798a8133a423dead28eb43cc304e79120d5008571d0983f51e62f7 extends Twig_Template
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
        $__internal_a07b2c5297a13ef6d020c941772551e41a95dea578b4e65a8e346b08ea1af166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07b2c5297a13ef6d020c941772551e41a95dea578b4e65a8e346b08ea1af166->enter($__internal_a07b2c5297a13ef6d020c941772551e41a95dea578b4e65a8e346b08ea1af166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4ce69d602c435840c3ab43027d721fdeb1fa5519df99c4ca38e301988c200c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce69d602c435840c3ab43027d721fdeb1fa5519df99c4ca38e301988c200c37->enter($__internal_4ce69d602c435840c3ab43027d721fdeb1fa5519df99c4ca38e301988c200c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a07b2c5297a13ef6d020c941772551e41a95dea578b4e65a8e346b08ea1af166->leave($__internal_a07b2c5297a13ef6d020c941772551e41a95dea578b4e65a8e346b08ea1af166_prof);

        
        $__internal_4ce69d602c435840c3ab43027d721fdeb1fa5519df99c4ca38e301988c200c37->leave($__internal_4ce69d602c435840c3ab43027d721fdeb1fa5519df99c4ca38e301988c200c37_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59b8e3f911b82d865b91721a9e38ea3b0c86e18bf3ad5f5f24909650878d891c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b8e3f911b82d865b91721a9e38ea3b0c86e18bf3ad5f5f24909650878d891c->enter($__internal_59b8e3f911b82d865b91721a9e38ea3b0c86e18bf3ad5f5f24909650878d891c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdbfb83c37879d2657fdd67b2bcdd2243f33ddea47fc55b3ef3fcde3c347ee0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbfb83c37879d2657fdd67b2bcdd2243f33ddea47fc55b3ef3fcde3c347ee0d->enter($__internal_bdbfb83c37879d2657fdd67b2bcdd2243f33ddea47fc55b3ef3fcde3c347ee0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Management System";
        
        $__internal_bdbfb83c37879d2657fdd67b2bcdd2243f33ddea47fc55b3ef3fcde3c347ee0d->leave($__internal_bdbfb83c37879d2657fdd67b2bcdd2243f33ddea47fc55b3ef3fcde3c347ee0d_prof);

        
        $__internal_59b8e3f911b82d865b91721a9e38ea3b0c86e18bf3ad5f5f24909650878d891c->leave($__internal_59b8e3f911b82d865b91721a9e38ea3b0c86e18bf3ad5f5f24909650878d891c_prof);

    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_e3785f190f27ab2379ac2c39f76168f7d737fc5d5b21ccf85e426c9f488bcac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3785f190f27ab2379ac2c39f76168f7d737fc5d5b21ccf85e426c9f488bcac3->enter($__internal_e3785f190f27ab2379ac2c39f76168f7d737fc5d5b21ccf85e426c9f488bcac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_73466985b18cc3f6ff57dbf48ae373cc0278c20d5c38f60123e6adca8d70aaf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73466985b18cc3f6ff57dbf48ae373cc0278c20d5c38f60123e6adca8d70aaf1->enter($__internal_73466985b18cc3f6ff57dbf48ae373cc0278c20d5c38f60123e6adca8d70aaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_73466985b18cc3f6ff57dbf48ae373cc0278c20d5c38f60123e6adca8d70aaf1->leave($__internal_73466985b18cc3f6ff57dbf48ae373cc0278c20d5c38f60123e6adca8d70aaf1_prof);

        
        $__internal_e3785f190f27ab2379ac2c39f76168f7d737fc5d5b21ccf85e426c9f488bcac3->leave($__internal_e3785f190f27ab2379ac2c39f76168f7d737fc5d5b21ccf85e426c9f488bcac3_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_1b73dc4f15ea0ebd5187551c1dd45edf990096b3a070102a5e3f298a44d11853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b73dc4f15ea0ebd5187551c1dd45edf990096b3a070102a5e3f298a44d11853->enter($__internal_1b73dc4f15ea0ebd5187551c1dd45edf990096b3a070102a5e3f298a44d11853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_4d60464cc3a02d0aff10e415ada4c6062e965bcc5235e3d5d585680bc94727e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d60464cc3a02d0aff10e415ada4c6062e965bcc5235e3d5d585680bc94727e3->enter($__internal_4d60464cc3a02d0aff10e415ada4c6062e965bcc5235e3d5d585680bc94727e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_4d60464cc3a02d0aff10e415ada4c6062e965bcc5235e3d5d585680bc94727e3->leave($__internal_4d60464cc3a02d0aff10e415ada4c6062e965bcc5235e3d5d585680bc94727e3_prof);

        
        $__internal_1b73dc4f15ea0ebd5187551c1dd45edf990096b3a070102a5e3f298a44d11853->leave($__internal_1b73dc4f15ea0ebd5187551c1dd45edf990096b3a070102a5e3f298a44d11853_prof);

    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
        $__internal_51d47523fdfd6972ce27f0df93e2f43e434985fedd47a91ef8a3cc388b0ab4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d47523fdfd6972ce27f0df93e2f43e434985fedd47a91ef8a3cc388b0ab4af->enter($__internal_51d47523fdfd6972ce27f0df93e2f43e434985fedd47a91ef8a3cc388b0ab4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_5f8fdf9156358927f4333547a1d3b4fa77c58e611f8d202dc55668649795c46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8fdf9156358927f4333547a1d3b4fa77c58e611f8d202dc55668649795c46b->enter($__internal_5f8fdf9156358927f4333547a1d3b4fa77c58e611f8d202dc55668649795c46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_5f8fdf9156358927f4333547a1d3b4fa77c58e611f8d202dc55668649795c46b->leave($__internal_5f8fdf9156358927f4333547a1d3b4fa77c58e611f8d202dc55668649795c46b_prof);

        
        $__internal_51d47523fdfd6972ce27f0df93e2f43e434985fedd47a91ef8a3cc388b0ab4af->leave($__internal_51d47523fdfd6972ce27f0df93e2f43e434985fedd47a91ef8a3cc388b0ab4af_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4aa40499aa83c16f396db471b18ef525d33518bb4ba9a767bcabd0b73f51965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4aa40499aa83c16f396db471b18ef525d33518bb4ba9a767bcabd0b73f51965->enter($__internal_d4aa40499aa83c16f396db471b18ef525d33518bb4ba9a767bcabd0b73f51965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06c488304d966108c259c4df073aada5d8852d5d24329112e9d833e2d128b375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c488304d966108c259c4df073aada5d8852d5d24329112e9d833e2d128b375->enter($__internal_06c488304d966108c259c4df073aada5d8852d5d24329112e9d833e2d128b375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06c488304d966108c259c4df073aada5d8852d5d24329112e9d833e2d128b375->leave($__internal_06c488304d966108c259c4df073aada5d8852d5d24329112e9d833e2d128b375_prof);

        
        $__internal_d4aa40499aa83c16f396db471b18ef525d33518bb4ba9a767bcabd0b73f51965->leave($__internal_d4aa40499aa83c16f396db471b18ef525d33518bb4ba9a767bcabd0b73f51965_prof);

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
