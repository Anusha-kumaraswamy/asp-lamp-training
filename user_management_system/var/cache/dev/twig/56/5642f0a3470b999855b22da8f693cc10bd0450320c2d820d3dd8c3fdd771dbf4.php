<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3d3c47cb40a2c4ccefe78d8fdeaa398b8e75971be1b59064e9d8e7b9cee61a13 extends Twig_Template
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
        $__internal_193576dcee593c3a4f4193b1113868aa625c8787b3e257ea628008fd808fab2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193576dcee593c3a4f4193b1113868aa625c8787b3e257ea628008fd808fab2e->enter($__internal_193576dcee593c3a4f4193b1113868aa625c8787b3e257ea628008fd808fab2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7268007a3c30b03d14dc8438b3f7051fb3c598f4a5978752f4e885d924bc39c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7268007a3c30b03d14dc8438b3f7051fb3c598f4a5978752f4e885d924bc39c8->enter($__internal_7268007a3c30b03d14dc8438b3f7051fb3c598f4a5978752f4e885d924bc39c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_193576dcee593c3a4f4193b1113868aa625c8787b3e257ea628008fd808fab2e->leave($__internal_193576dcee593c3a4f4193b1113868aa625c8787b3e257ea628008fd808fab2e_prof);

        
        $__internal_7268007a3c30b03d14dc8438b3f7051fb3c598f4a5978752f4e885d924bc39c8->leave($__internal_7268007a3c30b03d14dc8438b3f7051fb3c598f4a5978752f4e885d924bc39c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
