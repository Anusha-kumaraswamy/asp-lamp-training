<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_070f2d3065f4b92876c66a08da4e2f23868d2c9c2d74902616ea8edb1a5d8477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d1fdd557626027f2470e938bcc0d52995d380ebf8c58cb5633c5851891b1727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1fdd557626027f2470e938bcc0d52995d380ebf8c58cb5633c5851891b1727->enter($__internal_7d1fdd557626027f2470e938bcc0d52995d380ebf8c58cb5633c5851891b1727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_01dc429129890186bb677572f158a7d52e93c48a22fd4af8801ae434e4c684a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dc429129890186bb677572f158a7d52e93c48a22fd4af8801ae434e4c684a2->enter($__internal_01dc429129890186bb677572f158a7d52e93c48a22fd4af8801ae434e4c684a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7d1fdd557626027f2470e938bcc0d52995d380ebf8c58cb5633c5851891b1727->leave($__internal_7d1fdd557626027f2470e938bcc0d52995d380ebf8c58cb5633c5851891b1727_prof);

        
        $__internal_01dc429129890186bb677572f158a7d52e93c48a22fd4af8801ae434e4c684a2->leave($__internal_01dc429129890186bb677572f158a7d52e93c48a22fd4af8801ae434e4c684a2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a6a9b2a75bf5c788d843a09468548b804f734de2e46dd680fa811e7032a97aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6a9b2a75bf5c788d843a09468548b804f734de2e46dd680fa811e7032a97aa->enter($__internal_2a6a9b2a75bf5c788d843a09468548b804f734de2e46dd680fa811e7032a97aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e5700bed47d756cc105d2190fdc5c3f41b019ab4b4e5b8ca830a928e7c2779f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5700bed47d756cc105d2190fdc5c3f41b019ab4b4e5b8ca830a928e7c2779f->enter($__internal_6e5700bed47d756cc105d2190fdc5c3f41b019ab4b4e5b8ca830a928e7c2779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e5700bed47d756cc105d2190fdc5c3f41b019ab4b4e5b8ca830a928e7c2779f->leave($__internal_6e5700bed47d756cc105d2190fdc5c3f41b019ab4b4e5b8ca830a928e7c2779f_prof);

        
        $__internal_2a6a9b2a75bf5c788d843a09468548b804f734de2e46dd680fa811e7032a97aa->leave($__internal_2a6a9b2a75bf5c788d843a09468548b804f734de2e46dd680fa811e7032a97aa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
