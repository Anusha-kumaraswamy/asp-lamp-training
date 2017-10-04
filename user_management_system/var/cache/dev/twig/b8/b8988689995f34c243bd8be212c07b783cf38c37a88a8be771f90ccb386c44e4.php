<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_46aae63d60d5cc6dda1439cfb895881240b1038ee43b881bdbf4c311be29310e extends Twig_Template
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
        $__internal_297f9f46b828e704c0c350ecbdcd587a942efcb738375c7a732b2a892efa66ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297f9f46b828e704c0c350ecbdcd587a942efcb738375c7a732b2a892efa66ac->enter($__internal_297f9f46b828e704c0c350ecbdcd587a942efcb738375c7a732b2a892efa66ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_20478ba3f082c461faf180cff7af8902a54ac57a7022a2f336902790a92889a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20478ba3f082c461faf180cff7af8902a54ac57a7022a2f336902790a92889a4->enter($__internal_20478ba3f082c461faf180cff7af8902a54ac57a7022a2f336902790a92889a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_297f9f46b828e704c0c350ecbdcd587a942efcb738375c7a732b2a892efa66ac->leave($__internal_297f9f46b828e704c0c350ecbdcd587a942efcb738375c7a732b2a892efa66ac_prof);

        
        $__internal_20478ba3f082c461faf180cff7af8902a54ac57a7022a2f336902790a92889a4->leave($__internal_20478ba3f082c461faf180cff7af8902a54ac57a7022a2f336902790a92889a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
