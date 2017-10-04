<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d091df6ec6aee21bd3271d4e954a5cd37606366b708eb5225e4a9ea2e74822d0 extends Twig_Template
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
        $__internal_c95e99e20b27f290be4f0f2c1d4a7adc9a5fb727c6b3530f8e5a75c24d314050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95e99e20b27f290be4f0f2c1d4a7adc9a5fb727c6b3530f8e5a75c24d314050->enter($__internal_c95e99e20b27f290be4f0f2c1d4a7adc9a5fb727c6b3530f8e5a75c24d314050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5d23c323346c5a70441ec01d88d39aaf9b81165baed735ba912b68b6add20ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d23c323346c5a70441ec01d88d39aaf9b81165baed735ba912b68b6add20ff5->enter($__internal_5d23c323346c5a70441ec01d88d39aaf9b81165baed735ba912b68b6add20ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c95e99e20b27f290be4f0f2c1d4a7adc9a5fb727c6b3530f8e5a75c24d314050->leave($__internal_c95e99e20b27f290be4f0f2c1d4a7adc9a5fb727c6b3530f8e5a75c24d314050_prof);

        
        $__internal_5d23c323346c5a70441ec01d88d39aaf9b81165baed735ba912b68b6add20ff5->leave($__internal_5d23c323346c5a70441ec01d88d39aaf9b81165baed735ba912b68b6add20ff5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
