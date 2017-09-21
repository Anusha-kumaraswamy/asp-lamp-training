<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_40bc516a5fa62333c44f5a9b218b6061a194371a9380388db3d5503a836cd349 extends Twig_Template
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
        $__internal_ad64dfea73a60d4d5dd0a12c949dba0712d5fcc9b7f6adcd52522e237e10fb96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad64dfea73a60d4d5dd0a12c949dba0712d5fcc9b7f6adcd52522e237e10fb96->enter($__internal_ad64dfea73a60d4d5dd0a12c949dba0712d5fcc9b7f6adcd52522e237e10fb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f9ff50de1df315eb1a52c85d2ab62ddb28119f5064c784b9ff50caaeba5ddb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ff50de1df315eb1a52c85d2ab62ddb28119f5064c784b9ff50caaeba5ddb58->enter($__internal_f9ff50de1df315eb1a52c85d2ab62ddb28119f5064c784b9ff50caaeba5ddb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ad64dfea73a60d4d5dd0a12c949dba0712d5fcc9b7f6adcd52522e237e10fb96->leave($__internal_ad64dfea73a60d4d5dd0a12c949dba0712d5fcc9b7f6adcd52522e237e10fb96_prof);

        
        $__internal_f9ff50de1df315eb1a52c85d2ab62ddb28119f5064c784b9ff50caaeba5ddb58->leave($__internal_f9ff50de1df315eb1a52c85d2ab62ddb28119f5064c784b9ff50caaeba5ddb58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
