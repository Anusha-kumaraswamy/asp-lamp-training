<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f868785a084a1c6c4b30a9c5f26099affc56980b4b9fdd36cdf9db78fdc8691b extends Twig_Template
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
        $__internal_6b929e532642b133172f55071e7a9a96bfc336db1fefe027db7b8e4de144cd48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b929e532642b133172f55071e7a9a96bfc336db1fefe027db7b8e4de144cd48->enter($__internal_6b929e532642b133172f55071e7a9a96bfc336db1fefe027db7b8e4de144cd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5591b7133e9384f2a114350c312256fc38b8e768f6024f99c5c707a9aa3d6d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5591b7133e9384f2a114350c312256fc38b8e768f6024f99c5c707a9aa3d6d3b->enter($__internal_5591b7133e9384f2a114350c312256fc38b8e768f6024f99c5c707a9aa3d6d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6b929e532642b133172f55071e7a9a96bfc336db1fefe027db7b8e4de144cd48->leave($__internal_6b929e532642b133172f55071e7a9a96bfc336db1fefe027db7b8e4de144cd48_prof);

        
        $__internal_5591b7133e9384f2a114350c312256fc38b8e768f6024f99c5c707a9aa3d6d3b->leave($__internal_5591b7133e9384f2a114350c312256fc38b8e768f6024f99c5c707a9aa3d6d3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
