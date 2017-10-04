<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a9b4e6e48e66aa2061813bf22adcf12a3456535c980d308f101f6a063215f677 extends Twig_Template
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
        $__internal_ba5ad2eb7c0058b2ede28fd5eddf174db6bad99aca0ebabe9df66df939cf0027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5ad2eb7c0058b2ede28fd5eddf174db6bad99aca0ebabe9df66df939cf0027->enter($__internal_ba5ad2eb7c0058b2ede28fd5eddf174db6bad99aca0ebabe9df66df939cf0027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3411a431c3851cadea153b442050ae99f529121226f9d93e7d7e5329e05c5583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3411a431c3851cadea153b442050ae99f529121226f9d93e7d7e5329e05c5583->enter($__internal_3411a431c3851cadea153b442050ae99f529121226f9d93e7d7e5329e05c5583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ba5ad2eb7c0058b2ede28fd5eddf174db6bad99aca0ebabe9df66df939cf0027->leave($__internal_ba5ad2eb7c0058b2ede28fd5eddf174db6bad99aca0ebabe9df66df939cf0027_prof);

        
        $__internal_3411a431c3851cadea153b442050ae99f529121226f9d93e7d7e5329e05c5583->leave($__internal_3411a431c3851cadea153b442050ae99f529121226f9d93e7d7e5329e05c5583_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
