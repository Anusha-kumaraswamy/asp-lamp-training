<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_c108bcf393c417fa84fe588f9c3ea5c092a2c0e5ee2b843c5148d826f1d88e1c extends Twig_Template
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
        $__internal_c95877b1cc77ad0d9383209da043a98e27c3b7172b2c31bc87e6b06a6fe806f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95877b1cc77ad0d9383209da043a98e27c3b7172b2c31bc87e6b06a6fe806f8->enter($__internal_c95877b1cc77ad0d9383209da043a98e27c3b7172b2c31bc87e6b06a6fe806f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_28edf47348e8fe9f667d53bd08fef9eca6342a5a1ccb81bdeba8c2d064a5297e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28edf47348e8fe9f667d53bd08fef9eca6342a5a1ccb81bdeba8c2d064a5297e->enter($__internal_28edf47348e8fe9f667d53bd08fef9eca6342a5a1ccb81bdeba8c2d064a5297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_c95877b1cc77ad0d9383209da043a98e27c3b7172b2c31bc87e6b06a6fe806f8->leave($__internal_c95877b1cc77ad0d9383209da043a98e27c3b7172b2c31bc87e6b06a6fe806f8_prof);

        
        $__internal_28edf47348e8fe9f667d53bd08fef9eca6342a5a1ccb81bdeba8c2d064a5297e->leave($__internal_28edf47348e8fe9f667d53bd08fef9eca6342a5a1ccb81bdeba8c2d064a5297e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
