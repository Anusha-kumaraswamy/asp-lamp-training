<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81f4f9786c986438eed02a815145f5888175182f7f378b27aa524f263d7b89f9 extends Twig_Template
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
        $__internal_d6f3bae68442efe7bc0c423b096f1be4eee37e0d614a1ab4c02d74202c241e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f3bae68442efe7bc0c423b096f1be4eee37e0d614a1ab4c02d74202c241e62->enter($__internal_d6f3bae68442efe7bc0c423b096f1be4eee37e0d614a1ab4c02d74202c241e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c34fecc51185251b639312c3de3cc61d27231f58bfeafab52b4cbb3173d92648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34fecc51185251b639312c3de3cc61d27231f58bfeafab52b4cbb3173d92648->enter($__internal_c34fecc51185251b639312c3de3cc61d27231f58bfeafab52b4cbb3173d92648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d6f3bae68442efe7bc0c423b096f1be4eee37e0d614a1ab4c02d74202c241e62->leave($__internal_d6f3bae68442efe7bc0c423b096f1be4eee37e0d614a1ab4c02d74202c241e62_prof);

        
        $__internal_c34fecc51185251b639312c3de3cc61d27231f58bfeafab52b4cbb3173d92648->leave($__internal_c34fecc51185251b639312c3de3cc61d27231f58bfeafab52b4cbb3173d92648_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
