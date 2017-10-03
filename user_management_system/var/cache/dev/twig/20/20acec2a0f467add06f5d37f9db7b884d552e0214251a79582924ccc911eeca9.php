<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_043e7fbc4bcfd7766dadc180c4dce7d10bddab629834b57bf6d7f4793fcb851b extends Twig_Template
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
        $__internal_9c73e8eabd85f143a967dfd6508310c932069503748a0397540950cddfb0e802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c73e8eabd85f143a967dfd6508310c932069503748a0397540950cddfb0e802->enter($__internal_9c73e8eabd85f143a967dfd6508310c932069503748a0397540950cddfb0e802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_75510c932e69046966b7dc91a7dd6c5f0ac6c18abee62956ff43e29d931d75a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75510c932e69046966b7dc91a7dd6c5f0ac6c18abee62956ff43e29d931d75a4->enter($__internal_75510c932e69046966b7dc91a7dd6c5f0ac6c18abee62956ff43e29d931d75a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9c73e8eabd85f143a967dfd6508310c932069503748a0397540950cddfb0e802->leave($__internal_9c73e8eabd85f143a967dfd6508310c932069503748a0397540950cddfb0e802_prof);

        
        $__internal_75510c932e69046966b7dc91a7dd6c5f0ac6c18abee62956ff43e29d931d75a4->leave($__internal_75510c932e69046966b7dc91a7dd6c5f0ac6c18abee62956ff43e29d931d75a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
