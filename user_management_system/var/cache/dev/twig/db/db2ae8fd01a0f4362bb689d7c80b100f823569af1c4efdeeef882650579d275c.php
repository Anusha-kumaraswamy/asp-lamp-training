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
        $__internal_28430b65a1d1f0fb8db69a397c3aefb4dc43f696a7a2717c22e7d99f0e3d1fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28430b65a1d1f0fb8db69a397c3aefb4dc43f696a7a2717c22e7d99f0e3d1fb0->enter($__internal_28430b65a1d1f0fb8db69a397c3aefb4dc43f696a7a2717c22e7d99f0e3d1fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_66f3d7bd3f8208cae14452e0fdc6c64815b7069499eab7269eebdf63d4bf37be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f3d7bd3f8208cae14452e0fdc6c64815b7069499eab7269eebdf63d4bf37be->enter($__internal_66f3d7bd3f8208cae14452e0fdc6c64815b7069499eab7269eebdf63d4bf37be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_28430b65a1d1f0fb8db69a397c3aefb4dc43f696a7a2717c22e7d99f0e3d1fb0->leave($__internal_28430b65a1d1f0fb8db69a397c3aefb4dc43f696a7a2717c22e7d99f0e3d1fb0_prof);

        
        $__internal_66f3d7bd3f8208cae14452e0fdc6c64815b7069499eab7269eebdf63d4bf37be->leave($__internal_66f3d7bd3f8208cae14452e0fdc6c64815b7069499eab7269eebdf63d4bf37be_prof);

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
