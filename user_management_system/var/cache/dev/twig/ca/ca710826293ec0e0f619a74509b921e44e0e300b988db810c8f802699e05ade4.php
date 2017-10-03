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
        $__internal_98903bb3fb7d5d23e43d7e6d72af42fcc53ff141792600bc7cbe1a76d27395e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98903bb3fb7d5d23e43d7e6d72af42fcc53ff141792600bc7cbe1a76d27395e8->enter($__internal_98903bb3fb7d5d23e43d7e6d72af42fcc53ff141792600bc7cbe1a76d27395e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fa2d8daa645080770340a90bc53194a4590992ed4f97fe2447c6495fcc5dbe8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2d8daa645080770340a90bc53194a4590992ed4f97fe2447c6495fcc5dbe8a->enter($__internal_fa2d8daa645080770340a90bc53194a4590992ed4f97fe2447c6495fcc5dbe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_98903bb3fb7d5d23e43d7e6d72af42fcc53ff141792600bc7cbe1a76d27395e8->leave($__internal_98903bb3fb7d5d23e43d7e6d72af42fcc53ff141792600bc7cbe1a76d27395e8_prof);

        
        $__internal_fa2d8daa645080770340a90bc53194a4590992ed4f97fe2447c6495fcc5dbe8a->leave($__internal_fa2d8daa645080770340a90bc53194a4590992ed4f97fe2447c6495fcc5dbe8a_prof);

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
