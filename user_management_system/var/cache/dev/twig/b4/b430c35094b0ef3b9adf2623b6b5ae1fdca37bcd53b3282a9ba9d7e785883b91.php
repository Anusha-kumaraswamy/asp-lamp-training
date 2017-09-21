<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_207b7ef03fcc2ad20f6800f9d8566566c59b5353e3cc4511ea2d835d4a0bffba extends Twig_Template
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
        $__internal_b5e6633b75a6cbba2390e2078ed6ce6524e18a41f3e3e7e4e86c6612a8d6fbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e6633b75a6cbba2390e2078ed6ce6524e18a41f3e3e7e4e86c6612a8d6fbe0->enter($__internal_b5e6633b75a6cbba2390e2078ed6ce6524e18a41f3e3e7e4e86c6612a8d6fbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0e86a782d5548f96710c5c9ed658bb88755818cb9973957a397c6ba092d6ef9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e86a782d5548f96710c5c9ed658bb88755818cb9973957a397c6ba092d6ef9e->enter($__internal_0e86a782d5548f96710c5c9ed658bb88755818cb9973957a397c6ba092d6ef9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b5e6633b75a6cbba2390e2078ed6ce6524e18a41f3e3e7e4e86c6612a8d6fbe0->leave($__internal_b5e6633b75a6cbba2390e2078ed6ce6524e18a41f3e3e7e4e86c6612a8d6fbe0_prof);

        
        $__internal_0e86a782d5548f96710c5c9ed658bb88755818cb9973957a397c6ba092d6ef9e->leave($__internal_0e86a782d5548f96710c5c9ed658bb88755818cb9973957a397c6ba092d6ef9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
