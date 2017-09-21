<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b7441d40556439ae44c86cf370b3fb71b670e2902210fe00f869841f173cba88 extends Twig_Template
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
        $__internal_d730b8021f04f026c2013d08d45a81ffe6a884d5843227376368c3c48ee00801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d730b8021f04f026c2013d08d45a81ffe6a884d5843227376368c3c48ee00801->enter($__internal_d730b8021f04f026c2013d08d45a81ffe6a884d5843227376368c3c48ee00801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_7b0185bc14cdca3b2c10fb113b8f0a2b3ce46eebdad31c7d3705a641670a16d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0185bc14cdca3b2c10fb113b8f0a2b3ce46eebdad31c7d3705a641670a16d9->enter($__internal_7b0185bc14cdca3b2c10fb113b8f0a2b3ce46eebdad31c7d3705a641670a16d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d730b8021f04f026c2013d08d45a81ffe6a884d5843227376368c3c48ee00801->leave($__internal_d730b8021f04f026c2013d08d45a81ffe6a884d5843227376368c3c48ee00801_prof);

        
        $__internal_7b0185bc14cdca3b2c10fb113b8f0a2b3ce46eebdad31c7d3705a641670a16d9->leave($__internal_7b0185bc14cdca3b2c10fb113b8f0a2b3ce46eebdad31c7d3705a641670a16d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
