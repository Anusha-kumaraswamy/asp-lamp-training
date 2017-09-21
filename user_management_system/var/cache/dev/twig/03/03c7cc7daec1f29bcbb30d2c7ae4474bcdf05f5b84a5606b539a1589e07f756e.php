<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_c8a3caf5e971399959454d823fa86e38a7dc393014704b8580cbf1b7c515b2c4 extends Twig_Template
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
        $__internal_d805f09fc1a16520dd32719ad1cd90eba79a985ec19389a19ea464a2d181b037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d805f09fc1a16520dd32719ad1cd90eba79a985ec19389a19ea464a2d181b037->enter($__internal_d805f09fc1a16520dd32719ad1cd90eba79a985ec19389a19ea464a2d181b037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_e18843ba55b88a9067753755a0620b6654c68c281ff16ef4743ac29767be79df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18843ba55b88a9067753755a0620b6654c68c281ff16ef4743ac29767be79df->enter($__internal_e18843ba55b88a9067753755a0620b6654c68c281ff16ef4743ac29767be79df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d805f09fc1a16520dd32719ad1cd90eba79a985ec19389a19ea464a2d181b037->leave($__internal_d805f09fc1a16520dd32719ad1cd90eba79a985ec19389a19ea464a2d181b037_prof);

        
        $__internal_e18843ba55b88a9067753755a0620b6654c68c281ff16ef4743ac29767be79df->leave($__internal_e18843ba55b88a9067753755a0620b6654c68c281ff16ef4743ac29767be79df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
