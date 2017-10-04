<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_574486bfc027e6259a95ff3c5fc73e81eb88340839b1c49bea12fcb64ae099f7 extends Twig_Template
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
        $__internal_1e231ea6a2db9e418a34046fdaa4eae0043fde357d6217fbb93f8b1b2b78accf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e231ea6a2db9e418a34046fdaa4eae0043fde357d6217fbb93f8b1b2b78accf->enter($__internal_1e231ea6a2db9e418a34046fdaa4eae0043fde357d6217fbb93f8b1b2b78accf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dee94bd687cca0e529c175f74adff373dbbec5bffdb225d7497d4d7760fd03b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee94bd687cca0e529c175f74adff373dbbec5bffdb225d7497d4d7760fd03b8->enter($__internal_dee94bd687cca0e529c175f74adff373dbbec5bffdb225d7497d4d7760fd03b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1e231ea6a2db9e418a34046fdaa4eae0043fde357d6217fbb93f8b1b2b78accf->leave($__internal_1e231ea6a2db9e418a34046fdaa4eae0043fde357d6217fbb93f8b1b2b78accf_prof);

        
        $__internal_dee94bd687cca0e529c175f74adff373dbbec5bffdb225d7497d4d7760fd03b8->leave($__internal_dee94bd687cca0e529c175f74adff373dbbec5bffdb225d7497d4d7760fd03b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
