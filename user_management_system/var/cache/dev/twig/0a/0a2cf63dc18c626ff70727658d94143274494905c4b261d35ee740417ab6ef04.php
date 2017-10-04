<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_637cd189c4f81492ba914f97fcb353ec105564bd2cebbb42663286e5b1c938f3 extends Twig_Template
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
        $__internal_94b966c5327031f787d67f6d1ae2e2c836e90af1ccdac6abbbc55edba268527b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b966c5327031f787d67f6d1ae2e2c836e90af1ccdac6abbbc55edba268527b->enter($__internal_94b966c5327031f787d67f6d1ae2e2c836e90af1ccdac6abbbc55edba268527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bf0807d439fbea8c759f7e5cee00beb4b2e242bcbf1b42607d50cde664b47220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0807d439fbea8c759f7e5cee00beb4b2e242bcbf1b42607d50cde664b47220->enter($__internal_bf0807d439fbea8c759f7e5cee00beb4b2e242bcbf1b42607d50cde664b47220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_94b966c5327031f787d67f6d1ae2e2c836e90af1ccdac6abbbc55edba268527b->leave($__internal_94b966c5327031f787d67f6d1ae2e2c836e90af1ccdac6abbbc55edba268527b_prof);

        
        $__internal_bf0807d439fbea8c759f7e5cee00beb4b2e242bcbf1b42607d50cde664b47220->leave($__internal_bf0807d439fbea8c759f7e5cee00beb4b2e242bcbf1b42607d50cde664b47220_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
