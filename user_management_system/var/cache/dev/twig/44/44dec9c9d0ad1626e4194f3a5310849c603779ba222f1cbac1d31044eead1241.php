<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8692494de3914a5d4caa54d890651a9dba6723456dae1c9f9b47d1cb6cffdc1c extends Twig_Template
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
        $__internal_6cfc47410fab574e2eb5e990482ee7139749f8288a3dce5c1de57a7d9a056899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cfc47410fab574e2eb5e990482ee7139749f8288a3dce5c1de57a7d9a056899->enter($__internal_6cfc47410fab574e2eb5e990482ee7139749f8288a3dce5c1de57a7d9a056899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4f275db7ba75288a63f9024b728566c10fe221145b4e6246827cb9b52db652eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f275db7ba75288a63f9024b728566c10fe221145b4e6246827cb9b52db652eb->enter($__internal_4f275db7ba75288a63f9024b728566c10fe221145b4e6246827cb9b52db652eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6cfc47410fab574e2eb5e990482ee7139749f8288a3dce5c1de57a7d9a056899->leave($__internal_6cfc47410fab574e2eb5e990482ee7139749f8288a3dce5c1de57a7d9a056899_prof);

        
        $__internal_4f275db7ba75288a63f9024b728566c10fe221145b4e6246827cb9b52db652eb->leave($__internal_4f275db7ba75288a63f9024b728566c10fe221145b4e6246827cb9b52db652eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
