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
        $__internal_9c80993a48927af4c35fef32d8870f61b6a1de786e254feb8fee1742d8ae7bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c80993a48927af4c35fef32d8870f61b6a1de786e254feb8fee1742d8ae7bc0->enter($__internal_9c80993a48927af4c35fef32d8870f61b6a1de786e254feb8fee1742d8ae7bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8427e2f6cd6e2f5ae3062d47bb0f5cdbc21bd76f86716abc3e3962b5efe97de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8427e2f6cd6e2f5ae3062d47bb0f5cdbc21bd76f86716abc3e3962b5efe97de4->enter($__internal_8427e2f6cd6e2f5ae3062d47bb0f5cdbc21bd76f86716abc3e3962b5efe97de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_9c80993a48927af4c35fef32d8870f61b6a1de786e254feb8fee1742d8ae7bc0->leave($__internal_9c80993a48927af4c35fef32d8870f61b6a1de786e254feb8fee1742d8ae7bc0_prof);

        
        $__internal_8427e2f6cd6e2f5ae3062d47bb0f5cdbc21bd76f86716abc3e3962b5efe97de4->leave($__internal_8427e2f6cd6e2f5ae3062d47bb0f5cdbc21bd76f86716abc3e3962b5efe97de4_prof);

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