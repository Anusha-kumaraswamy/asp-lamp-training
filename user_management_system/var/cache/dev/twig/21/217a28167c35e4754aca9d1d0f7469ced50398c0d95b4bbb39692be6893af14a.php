<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1f67c4614a28c3358029898a25a6b0b412de591e5d9498f80549f16a3b04d62d extends Twig_Template
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
        $__internal_ca43e327055c658fa0dc7208a5e9e5d1a8ee9f2404001c5e9c66c19fe23f6dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca43e327055c658fa0dc7208a5e9e5d1a8ee9f2404001c5e9c66c19fe23f6dd2->enter($__internal_ca43e327055c658fa0dc7208a5e9e5d1a8ee9f2404001c5e9c66c19fe23f6dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b4aa99e7244e9406a8924f8525034f159c31289a42a5588a800889bc4bc82503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4aa99e7244e9406a8924f8525034f159c31289a42a5588a800889bc4bc82503->enter($__internal_b4aa99e7244e9406a8924f8525034f159c31289a42a5588a800889bc4bc82503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ca43e327055c658fa0dc7208a5e9e5d1a8ee9f2404001c5e9c66c19fe23f6dd2->leave($__internal_ca43e327055c658fa0dc7208a5e9e5d1a8ee9f2404001c5e9c66c19fe23f6dd2_prof);

        
        $__internal_b4aa99e7244e9406a8924f8525034f159c31289a42a5588a800889bc4bc82503->leave($__internal_b4aa99e7244e9406a8924f8525034f159c31289a42a5588a800889bc4bc82503_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
