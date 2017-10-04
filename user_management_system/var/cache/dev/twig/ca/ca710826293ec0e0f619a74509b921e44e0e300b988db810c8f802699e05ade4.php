<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_29fdf652617265e7c9ff41bbfc6844d6575a3a2394d63e0d53b0e9ad2e6ca616 extends Twig_Template
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
        $__internal_5c91437c28db52504851e7a4c24b590ea9c6a308fd849149acf3e1004d3f855c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c91437c28db52504851e7a4c24b590ea9c6a308fd849149acf3e1004d3f855c->enter($__internal_5c91437c28db52504851e7a4c24b590ea9c6a308fd849149acf3e1004d3f855c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6a00d2810fcfba32fed84d4e630b7b7f630dd7a41dcc957510ab3712e990e35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a00d2810fcfba32fed84d4e630b7b7f630dd7a41dcc957510ab3712e990e35a->enter($__internal_6a00d2810fcfba32fed84d4e630b7b7f630dd7a41dcc957510ab3712e990e35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5c91437c28db52504851e7a4c24b590ea9c6a308fd849149acf3e1004d3f855c->leave($__internal_5c91437c28db52504851e7a4c24b590ea9c6a308fd849149acf3e1004d3f855c_prof);

        
        $__internal_6a00d2810fcfba32fed84d4e630b7b7f630dd7a41dcc957510ab3712e990e35a->leave($__internal_6a00d2810fcfba32fed84d4e630b7b7f630dd7a41dcc957510ab3712e990e35a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
