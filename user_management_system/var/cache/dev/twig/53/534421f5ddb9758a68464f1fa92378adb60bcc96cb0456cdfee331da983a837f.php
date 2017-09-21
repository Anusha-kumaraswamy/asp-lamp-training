<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9da11d6220d24485f559c5af8e9ac7f0efd88c63c83dac4dee9820379c40a776 extends Twig_Template
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
        $__internal_308e97714f24c1c777109df29b07091a910965e10d82f36e081cff9c19f389ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308e97714f24c1c777109df29b07091a910965e10d82f36e081cff9c19f389ec->enter($__internal_308e97714f24c1c777109df29b07091a910965e10d82f36e081cff9c19f389ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3e7edf9d8551c61b69260de3fcf006102d85b474308010d6c82e8e4314cdfc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7edf9d8551c61b69260de3fcf006102d85b474308010d6c82e8e4314cdfc22->enter($__internal_3e7edf9d8551c61b69260de3fcf006102d85b474308010d6c82e8e4314cdfc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_308e97714f24c1c777109df29b07091a910965e10d82f36e081cff9c19f389ec->leave($__internal_308e97714f24c1c777109df29b07091a910965e10d82f36e081cff9c19f389ec_prof);

        
        $__internal_3e7edf9d8551c61b69260de3fcf006102d85b474308010d6c82e8e4314cdfc22->leave($__internal_3e7edf9d8551c61b69260de3fcf006102d85b474308010d6c82e8e4314cdfc22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
