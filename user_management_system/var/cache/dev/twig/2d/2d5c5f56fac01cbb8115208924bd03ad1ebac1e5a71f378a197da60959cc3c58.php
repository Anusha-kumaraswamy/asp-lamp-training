<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6b38662d66d1ce4c34acea89e6af9ad6f67f97b7be7103dee6eabbe5dcb97a49 extends Twig_Template
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
        $__internal_ea94b955ea35b700d66689a231ab4d951ebbfd3a7dc018fa8b9defca37aca187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea94b955ea35b700d66689a231ab4d951ebbfd3a7dc018fa8b9defca37aca187->enter($__internal_ea94b955ea35b700d66689a231ab4d951ebbfd3a7dc018fa8b9defca37aca187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e017e25171b31da9ebb64abb8e537c58cf7a1c5c8e9a946f0c06bf0f2b1960d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e017e25171b31da9ebb64abb8e537c58cf7a1c5c8e9a946f0c06bf0f2b1960d0->enter($__internal_e017e25171b31da9ebb64abb8e537c58cf7a1c5c8e9a946f0c06bf0f2b1960d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ea94b955ea35b700d66689a231ab4d951ebbfd3a7dc018fa8b9defca37aca187->leave($__internal_ea94b955ea35b700d66689a231ab4d951ebbfd3a7dc018fa8b9defca37aca187_prof);

        
        $__internal_e017e25171b31da9ebb64abb8e537c58cf7a1c5c8e9a946f0c06bf0f2b1960d0->leave($__internal_e017e25171b31da9ebb64abb8e537c58cf7a1c5c8e9a946f0c06bf0f2b1960d0_prof);

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
