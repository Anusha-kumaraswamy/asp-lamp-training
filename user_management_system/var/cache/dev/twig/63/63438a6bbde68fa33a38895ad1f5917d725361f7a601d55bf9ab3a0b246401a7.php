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
        $__internal_5f4ba237becf6d32cfd90675fcaa2d76e5f62d2734642ffefd08ca2bcd54331e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4ba237becf6d32cfd90675fcaa2d76e5f62d2734642ffefd08ca2bcd54331e->enter($__internal_5f4ba237becf6d32cfd90675fcaa2d76e5f62d2734642ffefd08ca2bcd54331e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ddeaab5e2bbcf1fa0e8dbbe5e82aedf559cbc909df3213928ffd65779c4113d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddeaab5e2bbcf1fa0e8dbbe5e82aedf559cbc909df3213928ffd65779c4113d7->enter($__internal_ddeaab5e2bbcf1fa0e8dbbe5e82aedf559cbc909df3213928ffd65779c4113d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5f4ba237becf6d32cfd90675fcaa2d76e5f62d2734642ffefd08ca2bcd54331e->leave($__internal_5f4ba237becf6d32cfd90675fcaa2d76e5f62d2734642ffefd08ca2bcd54331e_prof);

        
        $__internal_ddeaab5e2bbcf1fa0e8dbbe5e82aedf559cbc909df3213928ffd65779c4113d7->leave($__internal_ddeaab5e2bbcf1fa0e8dbbe5e82aedf559cbc909df3213928ffd65779c4113d7_prof);

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
