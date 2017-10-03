<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_46aae63d60d5cc6dda1439cfb895881240b1038ee43b881bdbf4c311be29310e extends Twig_Template
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
        $__internal_fab97033eddac8ab99ac051b1e1f8f8c81258fe26f31da939d21700b0d4e239e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab97033eddac8ab99ac051b1e1f8f8c81258fe26f31da939d21700b0d4e239e->enter($__internal_fab97033eddac8ab99ac051b1e1f8f8c81258fe26f31da939d21700b0d4e239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_53a0b9a61552d0d1f98d86e81d89c10003dcbea2ef6bc007749b8ac78aaaa71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a0b9a61552d0d1f98d86e81d89c10003dcbea2ef6bc007749b8ac78aaaa71f->enter($__internal_53a0b9a61552d0d1f98d86e81d89c10003dcbea2ef6bc007749b8ac78aaaa71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fab97033eddac8ab99ac051b1e1f8f8c81258fe26f31da939d21700b0d4e239e->leave($__internal_fab97033eddac8ab99ac051b1e1f8f8c81258fe26f31da939d21700b0d4e239e_prof);

        
        $__internal_53a0b9a61552d0d1f98d86e81d89c10003dcbea2ef6bc007749b8ac78aaaa71f->leave($__internal_53a0b9a61552d0d1f98d86e81d89c10003dcbea2ef6bc007749b8ac78aaaa71f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
