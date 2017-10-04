<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_0c653edf2bfccfa4ffa0e5bfb6b4e6b9d6ca91fcea362d6ae070c7a59606bfa4 extends Twig_Template
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
        $__internal_f4050481af0cc647fe2b54c8424300d7282291967ed57005da739cd93b695fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4050481af0cc647fe2b54c8424300d7282291967ed57005da739cd93b695fc3->enter($__internal_f4050481af0cc647fe2b54c8424300d7282291967ed57005da739cd93b695fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a09eecf8682ce89c4668f0503e5aa4d183ed20546e9486ed053ea7357fe23290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09eecf8682ce89c4668f0503e5aa4d183ed20546e9486ed053ea7357fe23290->enter($__internal_a09eecf8682ce89c4668f0503e5aa4d183ed20546e9486ed053ea7357fe23290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f4050481af0cc647fe2b54c8424300d7282291967ed57005da739cd93b695fc3->leave($__internal_f4050481af0cc647fe2b54c8424300d7282291967ed57005da739cd93b695fc3_prof);

        
        $__internal_a09eecf8682ce89c4668f0503e5aa4d183ed20546e9486ed053ea7357fe23290->leave($__internal_a09eecf8682ce89c4668f0503e5aa4d183ed20546e9486ed053ea7357fe23290_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
