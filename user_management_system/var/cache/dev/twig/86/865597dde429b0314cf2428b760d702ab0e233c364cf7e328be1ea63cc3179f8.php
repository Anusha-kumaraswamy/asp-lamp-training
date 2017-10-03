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
        $__internal_4b589cb8cdfdbf9bbf8ec294b33eaf9996b7717bbd1c4b5abd77c948ec805693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b589cb8cdfdbf9bbf8ec294b33eaf9996b7717bbd1c4b5abd77c948ec805693->enter($__internal_4b589cb8cdfdbf9bbf8ec294b33eaf9996b7717bbd1c4b5abd77c948ec805693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_08aa854a6a90ada90a9a929c170d0e831c7783c6510f59a055d09013dc79ea21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08aa854a6a90ada90a9a929c170d0e831c7783c6510f59a055d09013dc79ea21->enter($__internal_08aa854a6a90ada90a9a929c170d0e831c7783c6510f59a055d09013dc79ea21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4b589cb8cdfdbf9bbf8ec294b33eaf9996b7717bbd1c4b5abd77c948ec805693->leave($__internal_4b589cb8cdfdbf9bbf8ec294b33eaf9996b7717bbd1c4b5abd77c948ec805693_prof);

        
        $__internal_08aa854a6a90ada90a9a929c170d0e831c7783c6510f59a055d09013dc79ea21->leave($__internal_08aa854a6a90ada90a9a929c170d0e831c7783c6510f59a055d09013dc79ea21_prof);

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
