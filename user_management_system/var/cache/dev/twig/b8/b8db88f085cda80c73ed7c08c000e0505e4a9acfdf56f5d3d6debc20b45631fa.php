<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d7d02b8182bf56680c2dfe75b1dfd6699efab10adbe4d408f58d4a7f6f814b00 extends Twig_Template
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
        $__internal_edc9d8cc8d323149d818dde1338f78850a055ef48f8f55ccb54adb16743a5924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc9d8cc8d323149d818dde1338f78850a055ef48f8f55ccb54adb16743a5924->enter($__internal_edc9d8cc8d323149d818dde1338f78850a055ef48f8f55ccb54adb16743a5924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e800659d6affbcc65708bc30cda2683e4ecce8421de17c9a377595451f1a76d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e800659d6affbcc65708bc30cda2683e4ecce8421de17c9a377595451f1a76d6->enter($__internal_e800659d6affbcc65708bc30cda2683e4ecce8421de17c9a377595451f1a76d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_edc9d8cc8d323149d818dde1338f78850a055ef48f8f55ccb54adb16743a5924->leave($__internal_edc9d8cc8d323149d818dde1338f78850a055ef48f8f55ccb54adb16743a5924_prof);

        
        $__internal_e800659d6affbcc65708bc30cda2683e4ecce8421de17c9a377595451f1a76d6->leave($__internal_e800659d6affbcc65708bc30cda2683e4ecce8421de17c9a377595451f1a76d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
