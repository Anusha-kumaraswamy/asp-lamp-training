<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b3bb63c7082a68e9bcfc9f7cde438627e90e4be392ecb72c37cace2680eca902 extends Twig_Template
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
        $__internal_ad680ed5b7a8304fd0d78a59c983e4e7d9cd85eccc96e42752095e1826c47349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad680ed5b7a8304fd0d78a59c983e4e7d9cd85eccc96e42752095e1826c47349->enter($__internal_ad680ed5b7a8304fd0d78a59c983e4e7d9cd85eccc96e42752095e1826c47349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6c9524d5bef92718dacb2bb71d510236cc7c0a719fc1b620d3d5ea1f9dc6a1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9524d5bef92718dacb2bb71d510236cc7c0a719fc1b620d3d5ea1f9dc6a1b6->enter($__internal_6c9524d5bef92718dacb2bb71d510236cc7c0a719fc1b620d3d5ea1f9dc6a1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ad680ed5b7a8304fd0d78a59c983e4e7d9cd85eccc96e42752095e1826c47349->leave($__internal_ad680ed5b7a8304fd0d78a59c983e4e7d9cd85eccc96e42752095e1826c47349_prof);

        
        $__internal_6c9524d5bef92718dacb2bb71d510236cc7c0a719fc1b620d3d5ea1f9dc6a1b6->leave($__internal_6c9524d5bef92718dacb2bb71d510236cc7c0a719fc1b620d3d5ea1f9dc6a1b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
