<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_5a9aed02b93250ded06bc5e9e0cdadf24e1c2e0dd054b82b300c2afdd1bc5186 extends Twig_Template
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
        $__internal_1efa0c0bf16a428497f0ea2806dd91bf2533a7a08522afc96b56163aa25b0024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efa0c0bf16a428497f0ea2806dd91bf2533a7a08522afc96b56163aa25b0024->enter($__internal_1efa0c0bf16a428497f0ea2806dd91bf2533a7a08522afc96b56163aa25b0024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_94a10f3e3a7b2f6c32c23ecf8b1e82ff92b9b3989de38aeee555e51322b3b455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a10f3e3a7b2f6c32c23ecf8b1e82ff92b9b3989de38aeee555e51322b3b455->enter($__internal_94a10f3e3a7b2f6c32c23ecf8b1e82ff92b9b3989de38aeee555e51322b3b455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1efa0c0bf16a428497f0ea2806dd91bf2533a7a08522afc96b56163aa25b0024->leave($__internal_1efa0c0bf16a428497f0ea2806dd91bf2533a7a08522afc96b56163aa25b0024_prof);

        
        $__internal_94a10f3e3a7b2f6c32c23ecf8b1e82ff92b9b3989de38aeee555e51322b3b455->leave($__internal_94a10f3e3a7b2f6c32c23ecf8b1e82ff92b9b3989de38aeee555e51322b3b455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
