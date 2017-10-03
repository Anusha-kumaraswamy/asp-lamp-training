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
        $__internal_9ccf6777b97b86dd6fda1d4beeb46b6e824334cbb90df65f6733c8a77eb3b52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccf6777b97b86dd6fda1d4beeb46b6e824334cbb90df65f6733c8a77eb3b52c->enter($__internal_9ccf6777b97b86dd6fda1d4beeb46b6e824334cbb90df65f6733c8a77eb3b52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f408cf6eb15089e6b3c84755b997558492f2be66b44ea12fcdd805064a506ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f408cf6eb15089e6b3c84755b997558492f2be66b44ea12fcdd805064a506ad8->enter($__internal_f408cf6eb15089e6b3c84755b997558492f2be66b44ea12fcdd805064a506ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9ccf6777b97b86dd6fda1d4beeb46b6e824334cbb90df65f6733c8a77eb3b52c->leave($__internal_9ccf6777b97b86dd6fda1d4beeb46b6e824334cbb90df65f6733c8a77eb3b52c_prof);

        
        $__internal_f408cf6eb15089e6b3c84755b997558492f2be66b44ea12fcdd805064a506ad8->leave($__internal_f408cf6eb15089e6b3c84755b997558492f2be66b44ea12fcdd805064a506ad8_prof);

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
