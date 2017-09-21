<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1eec25b079a05787991f241f9ec132524debb47d43bae92c9371ea37a41cd434 extends Twig_Template
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
        $__internal_7dbc0aefffcc627879a99dcdfbcfe0dd559785745594db77195aabaf964ac475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dbc0aefffcc627879a99dcdfbcfe0dd559785745594db77195aabaf964ac475->enter($__internal_7dbc0aefffcc627879a99dcdfbcfe0dd559785745594db77195aabaf964ac475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_23ae993805182c7f9e5b00ea80b7cbe9bbb609a9a09e8323514a0a57473add6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ae993805182c7f9e5b00ea80b7cbe9bbb609a9a09e8323514a0a57473add6d->enter($__internal_23ae993805182c7f9e5b00ea80b7cbe9bbb609a9a09e8323514a0a57473add6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7dbc0aefffcc627879a99dcdfbcfe0dd559785745594db77195aabaf964ac475->leave($__internal_7dbc0aefffcc627879a99dcdfbcfe0dd559785745594db77195aabaf964ac475_prof);

        
        $__internal_23ae993805182c7f9e5b00ea80b7cbe9bbb609a9a09e8323514a0a57473add6d->leave($__internal_23ae993805182c7f9e5b00ea80b7cbe9bbb609a9a09e8323514a0a57473add6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
