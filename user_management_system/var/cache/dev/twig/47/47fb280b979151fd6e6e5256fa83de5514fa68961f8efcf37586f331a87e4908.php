<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_732e66af245a0a240c738b7b4338d02be20675d5f7a0edc8a37202c033529bf9 extends Twig_Template
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
        $__internal_c80cf3eb91972b4ba223a54350d9a5583112596bb7ff4bbf677d36a87192b509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80cf3eb91972b4ba223a54350d9a5583112596bb7ff4bbf677d36a87192b509->enter($__internal_c80cf3eb91972b4ba223a54350d9a5583112596bb7ff4bbf677d36a87192b509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6cd2cdae00faa336f97343da10828af3a76adb5e6b2ee4e6c682e8611cf0ff1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd2cdae00faa336f97343da10828af3a76adb5e6b2ee4e6c682e8611cf0ff1a->enter($__internal_6cd2cdae00faa336f97343da10828af3a76adb5e6b2ee4e6c682e8611cf0ff1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c80cf3eb91972b4ba223a54350d9a5583112596bb7ff4bbf677d36a87192b509->leave($__internal_c80cf3eb91972b4ba223a54350d9a5583112596bb7ff4bbf677d36a87192b509_prof);

        
        $__internal_6cd2cdae00faa336f97343da10828af3a76adb5e6b2ee4e6c682e8611cf0ff1a->leave($__internal_6cd2cdae00faa336f97343da10828af3a76adb5e6b2ee4e6c682e8611cf0ff1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
