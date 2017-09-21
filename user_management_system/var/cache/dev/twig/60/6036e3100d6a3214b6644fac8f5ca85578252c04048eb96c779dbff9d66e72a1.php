<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_090a497550a3d612f9916fc406230fcf0d812ebee7cdbc3338ec3eefb3137a41 extends Twig_Template
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
        $__internal_34185902d981b4e1cdd6e00d16fc666244e0a6f546483944960d6de35c954691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34185902d981b4e1cdd6e00d16fc666244e0a6f546483944960d6de35c954691->enter($__internal_34185902d981b4e1cdd6e00d16fc666244e0a6f546483944960d6de35c954691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_1e247a41ab7c81351b8c5cb761c6e931c7554e075ccabbc9b67d2df113c460cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e247a41ab7c81351b8c5cb761c6e931c7554e075ccabbc9b67d2df113c460cc->enter($__internal_1e247a41ab7c81351b8c5cb761c6e931c7554e075ccabbc9b67d2df113c460cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_34185902d981b4e1cdd6e00d16fc666244e0a6f546483944960d6de35c954691->leave($__internal_34185902d981b4e1cdd6e00d16fc666244e0a6f546483944960d6de35c954691_prof);

        
        $__internal_1e247a41ab7c81351b8c5cb761c6e931c7554e075ccabbc9b67d2df113c460cc->leave($__internal_1e247a41ab7c81351b8c5cb761c6e931c7554e075ccabbc9b67d2df113c460cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
