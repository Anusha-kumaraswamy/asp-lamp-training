<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_dc0993de0a0535b80f9aec7faafcf8af3815a20cb988c97658c1b6f70e621930 extends Twig_Template
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
        $__internal_78d0907f868f3488b36136e3bd464c383dafd65326ad8fd57d9eeec749d4a341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d0907f868f3488b36136e3bd464c383dafd65326ad8fd57d9eeec749d4a341->enter($__internal_78d0907f868f3488b36136e3bd464c383dafd65326ad8fd57d9eeec749d4a341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ae951678cc740e2e30700ee66c12f5f4f867e6ee41bccdf587abdaa196d850ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae951678cc740e2e30700ee66c12f5f4f867e6ee41bccdf587abdaa196d850ff->enter($__internal_ae951678cc740e2e30700ee66c12f5f4f867e6ee41bccdf587abdaa196d850ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_78d0907f868f3488b36136e3bd464c383dafd65326ad8fd57d9eeec749d4a341->leave($__internal_78d0907f868f3488b36136e3bd464c383dafd65326ad8fd57d9eeec749d4a341_prof);

        
        $__internal_ae951678cc740e2e30700ee66c12f5f4f867e6ee41bccdf587abdaa196d850ff->leave($__internal_ae951678cc740e2e30700ee66c12f5f4f867e6ee41bccdf587abdaa196d850ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
