<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7a1a22da2bebd8c9229250d5ce5cd4da04da93f2b513fe08a988cd33ba038cfc extends Twig_Template
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
        $__internal_83e9e36d0d6ee904c64807dccab7242d7fb72a24e6ba29f6655cd05ff62382e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e9e36d0d6ee904c64807dccab7242d7fb72a24e6ba29f6655cd05ff62382e3->enter($__internal_83e9e36d0d6ee904c64807dccab7242d7fb72a24e6ba29f6655cd05ff62382e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3cc10d29738dc5e53fbdd8897d81aa0e0c679f2aacb877180ced6058ff53c727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc10d29738dc5e53fbdd8897d81aa0e0c679f2aacb877180ced6058ff53c727->enter($__internal_3cc10d29738dc5e53fbdd8897d81aa0e0c679f2aacb877180ced6058ff53c727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_83e9e36d0d6ee904c64807dccab7242d7fb72a24e6ba29f6655cd05ff62382e3->leave($__internal_83e9e36d0d6ee904c64807dccab7242d7fb72a24e6ba29f6655cd05ff62382e3_prof);

        
        $__internal_3cc10d29738dc5e53fbdd8897d81aa0e0c679f2aacb877180ced6058ff53c727->leave($__internal_3cc10d29738dc5e53fbdd8897d81aa0e0c679f2aacb877180ced6058ff53c727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
