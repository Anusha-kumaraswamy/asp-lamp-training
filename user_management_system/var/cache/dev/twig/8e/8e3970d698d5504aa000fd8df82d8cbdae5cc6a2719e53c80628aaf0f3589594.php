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
        $__internal_f10ec498d6e0d89da35d525a637eea6b5d00f7beda19c91c9cd95b5cec23a265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10ec498d6e0d89da35d525a637eea6b5d00f7beda19c91c9cd95b5cec23a265->enter($__internal_f10ec498d6e0d89da35d525a637eea6b5d00f7beda19c91c9cd95b5cec23a265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_40eb826408271e1ff353675750c4c204e0c30659522e4232afd83744ff68f130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40eb826408271e1ff353675750c4c204e0c30659522e4232afd83744ff68f130->enter($__internal_40eb826408271e1ff353675750c4c204e0c30659522e4232afd83744ff68f130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f10ec498d6e0d89da35d525a637eea6b5d00f7beda19c91c9cd95b5cec23a265->leave($__internal_f10ec498d6e0d89da35d525a637eea6b5d00f7beda19c91c9cd95b5cec23a265_prof);

        
        $__internal_40eb826408271e1ff353675750c4c204e0c30659522e4232afd83744ff68f130->leave($__internal_40eb826408271e1ff353675750c4c204e0c30659522e4232afd83744ff68f130_prof);

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
