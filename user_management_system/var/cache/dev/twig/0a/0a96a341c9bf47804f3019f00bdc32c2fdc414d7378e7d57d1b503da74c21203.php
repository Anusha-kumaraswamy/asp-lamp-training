<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d89c4191ac98f411cc2970513796e0df2d7487183baa7b27441312b77d02ec2 extends Twig_Template
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
        $__internal_974c4cd4fbd82ab1ce4b3577c55bfbdbc981f31b0a9d728c18b26aaf46d607b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974c4cd4fbd82ab1ce4b3577c55bfbdbc981f31b0a9d728c18b26aaf46d607b0->enter($__internal_974c4cd4fbd82ab1ce4b3577c55bfbdbc981f31b0a9d728c18b26aaf46d607b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_122aa3196b4dd1ac8629d7f5d5ef2bfdbb402b0209af1bcca9c74e16c02e8110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122aa3196b4dd1ac8629d7f5d5ef2bfdbb402b0209af1bcca9c74e16c02e8110->enter($__internal_122aa3196b4dd1ac8629d7f5d5ef2bfdbb402b0209af1bcca9c74e16c02e8110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_974c4cd4fbd82ab1ce4b3577c55bfbdbc981f31b0a9d728c18b26aaf46d607b0->leave($__internal_974c4cd4fbd82ab1ce4b3577c55bfbdbc981f31b0a9d728c18b26aaf46d607b0_prof);

        
        $__internal_122aa3196b4dd1ac8629d7f5d5ef2bfdbb402b0209af1bcca9c74e16c02e8110->leave($__internal_122aa3196b4dd1ac8629d7f5d5ef2bfdbb402b0209af1bcca9c74e16c02e8110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
