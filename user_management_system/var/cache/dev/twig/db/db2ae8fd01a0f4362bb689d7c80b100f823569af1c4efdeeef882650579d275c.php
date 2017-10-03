<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_51591ea0baaffc04566270663f238871aa63ff61f7fd980a12ad0298ee484774 extends Twig_Template
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
        $__internal_0a75b449de9600d404bd605fbacd8a58c2dce9af4a5329e8087ac68d2dccd425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a75b449de9600d404bd605fbacd8a58c2dce9af4a5329e8087ac68d2dccd425->enter($__internal_0a75b449de9600d404bd605fbacd8a58c2dce9af4a5329e8087ac68d2dccd425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_db2cbc5cfacb8e1c93b2546b321e5674bd5892721c2d133d75f47f04f9d18f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2cbc5cfacb8e1c93b2546b321e5674bd5892721c2d133d75f47f04f9d18f27->enter($__internal_db2cbc5cfacb8e1c93b2546b321e5674bd5892721c2d133d75f47f04f9d18f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0a75b449de9600d404bd605fbacd8a58c2dce9af4a5329e8087ac68d2dccd425->leave($__internal_0a75b449de9600d404bd605fbacd8a58c2dce9af4a5329e8087ac68d2dccd425_prof);

        
        $__internal_db2cbc5cfacb8e1c93b2546b321e5674bd5892721c2d133d75f47f04f9d18f27->leave($__internal_db2cbc5cfacb8e1c93b2546b321e5674bd5892721c2d133d75f47f04f9d18f27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
