<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8a4cae896ad198738e71a23cd7d2ea820adf6ae4a627c16afa37b87f3e5055d1 extends Twig_Template
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
        $__internal_fdbecdb5dc47518fd6c081e7f27cb2f9e65c66491ffbf386fc250540bb561800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbecdb5dc47518fd6c081e7f27cb2f9e65c66491ffbf386fc250540bb561800->enter($__internal_fdbecdb5dc47518fd6c081e7f27cb2f9e65c66491ffbf386fc250540bb561800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e7b052321786dafec2781e28c9cec76586840a52b1d65c28600e2a66ab7eebb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b052321786dafec2781e28c9cec76586840a52b1d65c28600e2a66ab7eebb6->enter($__internal_e7b052321786dafec2781e28c9cec76586840a52b1d65c28600e2a66ab7eebb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fdbecdb5dc47518fd6c081e7f27cb2f9e65c66491ffbf386fc250540bb561800->leave($__internal_fdbecdb5dc47518fd6c081e7f27cb2f9e65c66491ffbf386fc250540bb561800_prof);

        
        $__internal_e7b052321786dafec2781e28c9cec76586840a52b1d65c28600e2a66ab7eebb6->leave($__internal_e7b052321786dafec2781e28c9cec76586840a52b1d65c28600e2a66ab7eebb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
