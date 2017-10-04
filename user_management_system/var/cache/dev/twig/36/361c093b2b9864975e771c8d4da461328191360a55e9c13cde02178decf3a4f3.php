<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_60bab7b3b8e71f38b5203737037fbd370af748ad30eb8473700e0bb6bb827cff extends Twig_Template
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
        $__internal_4e7d46917014ebdcb7ae5e74b58f9586e4e0cd1f773fced739453d75e7257c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7d46917014ebdcb7ae5e74b58f9586e4e0cd1f773fced739453d75e7257c0d->enter($__internal_4e7d46917014ebdcb7ae5e74b58f9586e4e0cd1f773fced739453d75e7257c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_99fa6e2e284179604e7ce3d6cc94dcb490538f5a2326052a53743ac77be58753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fa6e2e284179604e7ce3d6cc94dcb490538f5a2326052a53743ac77be58753->enter($__internal_99fa6e2e284179604e7ce3d6cc94dcb490538f5a2326052a53743ac77be58753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4e7d46917014ebdcb7ae5e74b58f9586e4e0cd1f773fced739453d75e7257c0d->leave($__internal_4e7d46917014ebdcb7ae5e74b58f9586e4e0cd1f773fced739453d75e7257c0d_prof);

        
        $__internal_99fa6e2e284179604e7ce3d6cc94dcb490538f5a2326052a53743ac77be58753->leave($__internal_99fa6e2e284179604e7ce3d6cc94dcb490538f5a2326052a53743ac77be58753_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
