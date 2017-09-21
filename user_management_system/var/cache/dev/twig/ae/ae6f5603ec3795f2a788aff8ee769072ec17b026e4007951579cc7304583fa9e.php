<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_608d077a45db74815e9cfe15a07f61cee5cc96ff34105f8115b0417467fdebad extends Twig_Template
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
        $__internal_edbbfce6ffb96b603cac48573d77c5d409c423ebc1631930c844ca5ea2d9789d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbbfce6ffb96b603cac48573d77c5d409c423ebc1631930c844ca5ea2d9789d->enter($__internal_edbbfce6ffb96b603cac48573d77c5d409c423ebc1631930c844ca5ea2d9789d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_52e579e8567429af8a120451ad1065b380ebf446b8e7ffcbfd93837bc8a3e2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e579e8567429af8a120451ad1065b380ebf446b8e7ffcbfd93837bc8a3e2ca->enter($__internal_52e579e8567429af8a120451ad1065b380ebf446b8e7ffcbfd93837bc8a3e2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_edbbfce6ffb96b603cac48573d77c5d409c423ebc1631930c844ca5ea2d9789d->leave($__internal_edbbfce6ffb96b603cac48573d77c5d409c423ebc1631930c844ca5ea2d9789d_prof);

        
        $__internal_52e579e8567429af8a120451ad1065b380ebf446b8e7ffcbfd93837bc8a3e2ca->leave($__internal_52e579e8567429af8a120451ad1065b380ebf446b8e7ffcbfd93837bc8a3e2ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
