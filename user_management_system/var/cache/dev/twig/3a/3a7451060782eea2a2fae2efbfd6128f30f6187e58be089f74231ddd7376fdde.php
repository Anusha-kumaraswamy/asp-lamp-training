<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_31120c1833cf7490632a8a8ee3fde613ecc3e866a0da60c93ff2f05340a45e73 extends Twig_Template
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
        $__internal_0f261d57764f4e75e7a5dcc3ae1b47b224962601ebce79a4e952463b8c0f7732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f261d57764f4e75e7a5dcc3ae1b47b224962601ebce79a4e952463b8c0f7732->enter($__internal_0f261d57764f4e75e7a5dcc3ae1b47b224962601ebce79a4e952463b8c0f7732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ca24540c32ca65a879b82c78b19b7e2070a6d4e945d61e2f4a173cfa6018383e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca24540c32ca65a879b82c78b19b7e2070a6d4e945d61e2f4a173cfa6018383e->enter($__internal_ca24540c32ca65a879b82c78b19b7e2070a6d4e945d61e2f4a173cfa6018383e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0f261d57764f4e75e7a5dcc3ae1b47b224962601ebce79a4e952463b8c0f7732->leave($__internal_0f261d57764f4e75e7a5dcc3ae1b47b224962601ebce79a4e952463b8c0f7732_prof);

        
        $__internal_ca24540c32ca65a879b82c78b19b7e2070a6d4e945d61e2f4a173cfa6018383e->leave($__internal_ca24540c32ca65a879b82c78b19b7e2070a6d4e945d61e2f4a173cfa6018383e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
