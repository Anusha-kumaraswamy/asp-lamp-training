<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a5064726d41d06ca221318eef53d7932fef31e2e7fb8fb79fa534dcb2f3af0de extends Twig_Template
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
        $__internal_1ee7b6eb633bb4d7720048cc74c8c804f46b898d3fe9c35915288f18fd8f5292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee7b6eb633bb4d7720048cc74c8c804f46b898d3fe9c35915288f18fd8f5292->enter($__internal_1ee7b6eb633bb4d7720048cc74c8c804f46b898d3fe9c35915288f18fd8f5292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_77bc8f8a573842bac7b53dabf800d8b518dbcfef05ea6cfe6296785f582f2d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bc8f8a573842bac7b53dabf800d8b518dbcfef05ea6cfe6296785f582f2d09->enter($__internal_77bc8f8a573842bac7b53dabf800d8b518dbcfef05ea6cfe6296785f582f2d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1ee7b6eb633bb4d7720048cc74c8c804f46b898d3fe9c35915288f18fd8f5292->leave($__internal_1ee7b6eb633bb4d7720048cc74c8c804f46b898d3fe9c35915288f18fd8f5292_prof);

        
        $__internal_77bc8f8a573842bac7b53dabf800d8b518dbcfef05ea6cfe6296785f582f2d09->leave($__internal_77bc8f8a573842bac7b53dabf800d8b518dbcfef05ea6cfe6296785f582f2d09_prof);

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
