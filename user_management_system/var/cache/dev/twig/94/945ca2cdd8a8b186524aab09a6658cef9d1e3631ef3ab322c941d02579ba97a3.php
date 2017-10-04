<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_58be4ddb476d0ce594edacf1e31742c9b4302b4515fe7ea10521faddde0f94ca extends Twig_Template
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
        $__internal_b09976df418b5ee7969f7cc5df37789d62ec34d0dd8c0e7201f9ed5c7df38ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09976df418b5ee7969f7cc5df37789d62ec34d0dd8c0e7201f9ed5c7df38ecd->enter($__internal_b09976df418b5ee7969f7cc5df37789d62ec34d0dd8c0e7201f9ed5c7df38ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_68de6b7b0d6814601c500474bdd30e3c7d0a5e53976a61ee73a66442aaa49056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68de6b7b0d6814601c500474bdd30e3c7d0a5e53976a61ee73a66442aaa49056->enter($__internal_68de6b7b0d6814601c500474bdd30e3c7d0a5e53976a61ee73a66442aaa49056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b09976df418b5ee7969f7cc5df37789d62ec34d0dd8c0e7201f9ed5c7df38ecd->leave($__internal_b09976df418b5ee7969f7cc5df37789d62ec34d0dd8c0e7201f9ed5c7df38ecd_prof);

        
        $__internal_68de6b7b0d6814601c500474bdd30e3c7d0a5e53976a61ee73a66442aaa49056->leave($__internal_68de6b7b0d6814601c500474bdd30e3c7d0a5e53976a61ee73a66442aaa49056_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
