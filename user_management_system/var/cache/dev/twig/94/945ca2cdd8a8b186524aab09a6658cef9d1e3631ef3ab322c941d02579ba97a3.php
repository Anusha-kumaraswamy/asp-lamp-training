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
        $__internal_883c23017499527d5efa45c9f3d4b02ce9866d0f8147e5604b7fe92b1eda0d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883c23017499527d5efa45c9f3d4b02ce9866d0f8147e5604b7fe92b1eda0d33->enter($__internal_883c23017499527d5efa45c9f3d4b02ce9866d0f8147e5604b7fe92b1eda0d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_061ea0fe92fc75b9a063f7e28cb936af6267de978ae6c3cb7c66e0155b1251fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061ea0fe92fc75b9a063f7e28cb936af6267de978ae6c3cb7c66e0155b1251fa->enter($__internal_061ea0fe92fc75b9a063f7e28cb936af6267de978ae6c3cb7c66e0155b1251fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_883c23017499527d5efa45c9f3d4b02ce9866d0f8147e5604b7fe92b1eda0d33->leave($__internal_883c23017499527d5efa45c9f3d4b02ce9866d0f8147e5604b7fe92b1eda0d33_prof);

        
        $__internal_061ea0fe92fc75b9a063f7e28cb936af6267de978ae6c3cb7c66e0155b1251fa->leave($__internal_061ea0fe92fc75b9a063f7e28cb936af6267de978ae6c3cb7c66e0155b1251fa_prof);

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
