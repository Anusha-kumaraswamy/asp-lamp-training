<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9a5d046b7527c5ad71b3d48c164b6cf405c75c4d2337b94eca2bb4508aca9ce5 extends Twig_Template
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
        $__internal_d1deec50eca11a5f06241d8de8719f555280a35177891a43cd096cd4fbaed094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1deec50eca11a5f06241d8de8719f555280a35177891a43cd096cd4fbaed094->enter($__internal_d1deec50eca11a5f06241d8de8719f555280a35177891a43cd096cd4fbaed094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_81009d4bf85828db22621a4592531fa344e7b1aef665dd093a8037ae95f5a9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81009d4bf85828db22621a4592531fa344e7b1aef665dd093a8037ae95f5a9f4->enter($__internal_81009d4bf85828db22621a4592531fa344e7b1aef665dd093a8037ae95f5a9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d1deec50eca11a5f06241d8de8719f555280a35177891a43cd096cd4fbaed094->leave($__internal_d1deec50eca11a5f06241d8de8719f555280a35177891a43cd096cd4fbaed094_prof);

        
        $__internal_81009d4bf85828db22621a4592531fa344e7b1aef665dd093a8037ae95f5a9f4->leave($__internal_81009d4bf85828db22621a4592531fa344e7b1aef665dd093a8037ae95f5a9f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
