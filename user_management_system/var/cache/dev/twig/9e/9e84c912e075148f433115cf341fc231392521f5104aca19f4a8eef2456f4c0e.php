<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6eacc0aae9acfac5a48013bcc1b1b67ef20e84fbda1fe446bf5e155a5b07145d extends Twig_Template
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
        $__internal_bdc8ef7827fca67d3d46c084a782aa78592871b02f4309c84fb123c69934197c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc8ef7827fca67d3d46c084a782aa78592871b02f4309c84fb123c69934197c->enter($__internal_bdc8ef7827fca67d3d46c084a782aa78592871b02f4309c84fb123c69934197c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a72ff2c22a23680910789959cffed6b5177fde2afec8cb29b7cfc06c765c64b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72ff2c22a23680910789959cffed6b5177fde2afec8cb29b7cfc06c765c64b0->enter($__internal_a72ff2c22a23680910789959cffed6b5177fde2afec8cb29b7cfc06c765c64b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_bdc8ef7827fca67d3d46c084a782aa78592871b02f4309c84fb123c69934197c->leave($__internal_bdc8ef7827fca67d3d46c084a782aa78592871b02f4309c84fb123c69934197c_prof);

        
        $__internal_a72ff2c22a23680910789959cffed6b5177fde2afec8cb29b7cfc06c765c64b0->leave($__internal_a72ff2c22a23680910789959cffed6b5177fde2afec8cb29b7cfc06c765c64b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
