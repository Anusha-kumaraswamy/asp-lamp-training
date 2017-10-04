<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bef682f880ceff761e92dca9f9a677161e5bf155fb4d6cee936d248c965ff6e0 extends Twig_Template
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
        $__internal_1405fd4a8ca7ba3722e0a209d7971b84279aa917c57eeec6ab41b3d03bb77f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1405fd4a8ca7ba3722e0a209d7971b84279aa917c57eeec6ab41b3d03bb77f19->enter($__internal_1405fd4a8ca7ba3722e0a209d7971b84279aa917c57eeec6ab41b3d03bb77f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b738e41398a3ac5c6ec769d65bc0ba00b178b1726f92f6dcc55077976a50c37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b738e41398a3ac5c6ec769d65bc0ba00b178b1726f92f6dcc55077976a50c37c->enter($__internal_b738e41398a3ac5c6ec769d65bc0ba00b178b1726f92f6dcc55077976a50c37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1405fd4a8ca7ba3722e0a209d7971b84279aa917c57eeec6ab41b3d03bb77f19->leave($__internal_1405fd4a8ca7ba3722e0a209d7971b84279aa917c57eeec6ab41b3d03bb77f19_prof);

        
        $__internal_b738e41398a3ac5c6ec769d65bc0ba00b178b1726f92f6dcc55077976a50c37c->leave($__internal_b738e41398a3ac5c6ec769d65bc0ba00b178b1726f92f6dcc55077976a50c37c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
