<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8c541c304c422916d6b116b854deae4e714d832c84bab9a00aa18381b24f4f4a extends Twig_Template
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
        $__internal_fc6b230373ebe1e42e9b7ff3619b60adeea64c82fafb1632f516afe601fc207a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6b230373ebe1e42e9b7ff3619b60adeea64c82fafb1632f516afe601fc207a->enter($__internal_fc6b230373ebe1e42e9b7ff3619b60adeea64c82fafb1632f516afe601fc207a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f504f422d5ed9822cdb42f6deeec9644035ff9ef0cb4cbcf5d3f31573d61eb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f504f422d5ed9822cdb42f6deeec9644035ff9ef0cb4cbcf5d3f31573d61eb20->enter($__internal_f504f422d5ed9822cdb42f6deeec9644035ff9ef0cb4cbcf5d3f31573d61eb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fc6b230373ebe1e42e9b7ff3619b60adeea64c82fafb1632f516afe601fc207a->leave($__internal_fc6b230373ebe1e42e9b7ff3619b60adeea64c82fafb1632f516afe601fc207a_prof);

        
        $__internal_f504f422d5ed9822cdb42f6deeec9644035ff9ef0cb4cbcf5d3f31573d61eb20->leave($__internal_f504f422d5ed9822cdb42f6deeec9644035ff9ef0cb4cbcf5d3f31573d61eb20_prof);

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
