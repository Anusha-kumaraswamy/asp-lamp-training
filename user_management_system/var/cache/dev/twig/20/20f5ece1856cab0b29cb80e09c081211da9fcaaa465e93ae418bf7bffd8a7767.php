<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_437b0d025b0eb5b0eda6dc55c61ad8cba7dda896b4830799fa93b316a5264ac9 extends Twig_Template
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
        $__internal_8bf6e2a879100521ffba890b21ea58df04b13ff014c4ed37557e5e27a9c8e8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf6e2a879100521ffba890b21ea58df04b13ff014c4ed37557e5e27a9c8e8b5->enter($__internal_8bf6e2a879100521ffba890b21ea58df04b13ff014c4ed37557e5e27a9c8e8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_41f047a1850585d55d2e3b0478146ebfe8188cd2262817bd0d54e978be7ab74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f047a1850585d55d2e3b0478146ebfe8188cd2262817bd0d54e978be7ab74a->enter($__internal_41f047a1850585d55d2e3b0478146ebfe8188cd2262817bd0d54e978be7ab74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8bf6e2a879100521ffba890b21ea58df04b13ff014c4ed37557e5e27a9c8e8b5->leave($__internal_8bf6e2a879100521ffba890b21ea58df04b13ff014c4ed37557e5e27a9c8e8b5_prof);

        
        $__internal_41f047a1850585d55d2e3b0478146ebfe8188cd2262817bd0d54e978be7ab74a->leave($__internal_41f047a1850585d55d2e3b0478146ebfe8188cd2262817bd0d54e978be7ab74a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
