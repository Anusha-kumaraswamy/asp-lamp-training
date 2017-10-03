<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a9b4e6e48e66aa2061813bf22adcf12a3456535c980d308f101f6a063215f677 extends Twig_Template
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
        $__internal_3f13f83bd5a8673d4cb288af87b95a4a2d323e66ab29682101000dcd1c584b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f13f83bd5a8673d4cb288af87b95a4a2d323e66ab29682101000dcd1c584b65->enter($__internal_3f13f83bd5a8673d4cb288af87b95a4a2d323e66ab29682101000dcd1c584b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2332665d4dfae486a3d9d6ef72d655c487d09cdcd59644af4cbfb2993c0e94b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2332665d4dfae486a3d9d6ef72d655c487d09cdcd59644af4cbfb2993c0e94b8->enter($__internal_2332665d4dfae486a3d9d6ef72d655c487d09cdcd59644af4cbfb2993c0e94b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3f13f83bd5a8673d4cb288af87b95a4a2d323e66ab29682101000dcd1c584b65->leave($__internal_3f13f83bd5a8673d4cb288af87b95a4a2d323e66ab29682101000dcd1c584b65_prof);

        
        $__internal_2332665d4dfae486a3d9d6ef72d655c487d09cdcd59644af4cbfb2993c0e94b8->leave($__internal_2332665d4dfae486a3d9d6ef72d655c487d09cdcd59644af4cbfb2993c0e94b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
