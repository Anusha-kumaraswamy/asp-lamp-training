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
        $__internal_3d36af6ca6b94556c4d1cef15e2a1ccae25dd27f1140b650d78afd7a325aa6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d36af6ca6b94556c4d1cef15e2a1ccae25dd27f1140b650d78afd7a325aa6af->enter($__internal_3d36af6ca6b94556c4d1cef15e2a1ccae25dd27f1140b650d78afd7a325aa6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_10221bf24efead6e16ac8195f0f9c46eece55fcd9d588cbddca0cdc5506d4f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10221bf24efead6e16ac8195f0f9c46eece55fcd9d588cbddca0cdc5506d4f9d->enter($__internal_10221bf24efead6e16ac8195f0f9c46eece55fcd9d588cbddca0cdc5506d4f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3d36af6ca6b94556c4d1cef15e2a1ccae25dd27f1140b650d78afd7a325aa6af->leave($__internal_3d36af6ca6b94556c4d1cef15e2a1ccae25dd27f1140b650d78afd7a325aa6af_prof);

        
        $__internal_10221bf24efead6e16ac8195f0f9c46eece55fcd9d588cbddca0cdc5506d4f9d->leave($__internal_10221bf24efead6e16ac8195f0f9c46eece55fcd9d588cbddca0cdc5506d4f9d_prof);

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
