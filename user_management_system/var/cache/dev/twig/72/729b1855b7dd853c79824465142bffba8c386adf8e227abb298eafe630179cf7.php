<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_7aa501ad6b0a0d7e7655522c03c5daa8398ca3e05320f682231e133fec82c448 extends Twig_Template
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
        $__internal_d94b9abd4797d1bf9c0c67d8229bb514ab5e3e6fc28931a76edfc30e644f08e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94b9abd4797d1bf9c0c67d8229bb514ab5e3e6fc28931a76edfc30e644f08e6->enter($__internal_d94b9abd4797d1bf9c0c67d8229bb514ab5e3e6fc28931a76edfc30e644f08e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8c082737c08ce21870776ff8f830e722c8421cb00cd79c7e1b2ca17f69e024f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c082737c08ce21870776ff8f830e722c8421cb00cd79c7e1b2ca17f69e024f5->enter($__internal_8c082737c08ce21870776ff8f830e722c8421cb00cd79c7e1b2ca17f69e024f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d94b9abd4797d1bf9c0c67d8229bb514ab5e3e6fc28931a76edfc30e644f08e6->leave($__internal_d94b9abd4797d1bf9c0c67d8229bb514ab5e3e6fc28931a76edfc30e644f08e6_prof);

        
        $__internal_8c082737c08ce21870776ff8f830e722c8421cb00cd79c7e1b2ca17f69e024f5->leave($__internal_8c082737c08ce21870776ff8f830e722c8421cb00cd79c7e1b2ca17f69e024f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
