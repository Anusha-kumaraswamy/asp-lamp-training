<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c092baa1e1cf13c92eea4e2b1650a66814a3e2cb9abc43b1f33d4d199c7aa857 extends Twig_Template
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
        $__internal_f39e8224f963e2c4d01d2210b08dd032bb411bb50601d5f70e0ac6aa2ad0af7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39e8224f963e2c4d01d2210b08dd032bb411bb50601d5f70e0ac6aa2ad0af7c->enter($__internal_f39e8224f963e2c4d01d2210b08dd032bb411bb50601d5f70e0ac6aa2ad0af7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4b1be583fe22b43663db78a9f30d1f6a238c84aecf49f5f1de6e95ef4d05a19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1be583fe22b43663db78a9f30d1f6a238c84aecf49f5f1de6e95ef4d05a19c->enter($__internal_4b1be583fe22b43663db78a9f30d1f6a238c84aecf49f5f1de6e95ef4d05a19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f39e8224f963e2c4d01d2210b08dd032bb411bb50601d5f70e0ac6aa2ad0af7c->leave($__internal_f39e8224f963e2c4d01d2210b08dd032bb411bb50601d5f70e0ac6aa2ad0af7c_prof);

        
        $__internal_4b1be583fe22b43663db78a9f30d1f6a238c84aecf49f5f1de6e95ef4d05a19c->leave($__internal_4b1be583fe22b43663db78a9f30d1f6a238c84aecf49f5f1de6e95ef4d05a19c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
