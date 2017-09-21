<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e4355484f57b3dee029e3bad8e495b78644825105a5cf98ea3a4a261fb105bc1 extends Twig_Template
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
        $__internal_21a422a8ce13a0903d39a7af4b78c6adce61aa93b796d5a3b0e864076f8125be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a422a8ce13a0903d39a7af4b78c6adce61aa93b796d5a3b0e864076f8125be->enter($__internal_21a422a8ce13a0903d39a7af4b78c6adce61aa93b796d5a3b0e864076f8125be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9c339da939a15909c5da1a36d9ece5056dbea1d85a6d5aa85cb4158a677cb3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c339da939a15909c5da1a36d9ece5056dbea1d85a6d5aa85cb4158a677cb3b2->enter($__internal_9c339da939a15909c5da1a36d9ece5056dbea1d85a6d5aa85cb4158a677cb3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_21a422a8ce13a0903d39a7af4b78c6adce61aa93b796d5a3b0e864076f8125be->leave($__internal_21a422a8ce13a0903d39a7af4b78c6adce61aa93b796d5a3b0e864076f8125be_prof);

        
        $__internal_9c339da939a15909c5da1a36d9ece5056dbea1d85a6d5aa85cb4158a677cb3b2->leave($__internal_9c339da939a15909c5da1a36d9ece5056dbea1d85a6d5aa85cb4158a677cb3b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
