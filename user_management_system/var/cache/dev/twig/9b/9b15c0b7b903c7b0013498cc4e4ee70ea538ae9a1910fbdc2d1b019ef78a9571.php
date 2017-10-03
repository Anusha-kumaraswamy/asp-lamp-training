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
        $__internal_be3f5d17fe5a31146ca74269ece9ba83e6053675f9d05dc4e844bcca11b5287b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3f5d17fe5a31146ca74269ece9ba83e6053675f9d05dc4e844bcca11b5287b->enter($__internal_be3f5d17fe5a31146ca74269ece9ba83e6053675f9d05dc4e844bcca11b5287b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_31690e0444cb8414297539aecb850e2426021709c7e4224bd7ff865eb651e4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31690e0444cb8414297539aecb850e2426021709c7e4224bd7ff865eb651e4b8->enter($__internal_31690e0444cb8414297539aecb850e2426021709c7e4224bd7ff865eb651e4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_be3f5d17fe5a31146ca74269ece9ba83e6053675f9d05dc4e844bcca11b5287b->leave($__internal_be3f5d17fe5a31146ca74269ece9ba83e6053675f9d05dc4e844bcca11b5287b_prof);

        
        $__internal_31690e0444cb8414297539aecb850e2426021709c7e4224bd7ff865eb651e4b8->leave($__internal_31690e0444cb8414297539aecb850e2426021709c7e4224bd7ff865eb651e4b8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_32a7bf0d3027007df4c05132aef7174fb1e3527f362794b90453dad85eb34731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a7bf0d3027007df4c05132aef7174fb1e3527f362794b90453dad85eb34731->enter($__internal_32a7bf0d3027007df4c05132aef7174fb1e3527f362794b90453dad85eb34731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44640c57bfaddc91b95e605266cb35459157c8ed37ba55f2bdbb91f47022bbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44640c57bfaddc91b95e605266cb35459157c8ed37ba55f2bdbb91f47022bbf5->enter($__internal_44640c57bfaddc91b95e605266cb35459157c8ed37ba55f2bdbb91f47022bbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_44640c57bfaddc91b95e605266cb35459157c8ed37ba55f2bdbb91f47022bbf5->leave($__internal_44640c57bfaddc91b95e605266cb35459157c8ed37ba55f2bdbb91f47022bbf5_prof);

        
        $__internal_32a7bf0d3027007df4c05132aef7174fb1e3527f362794b90453dad85eb34731->leave($__internal_32a7bf0d3027007df4c05132aef7174fb1e3527f362794b90453dad85eb34731_prof);

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
