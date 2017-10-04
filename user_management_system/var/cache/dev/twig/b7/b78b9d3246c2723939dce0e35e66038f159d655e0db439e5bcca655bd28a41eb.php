<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_d67e5279056f2429ca5ee9b553a3ecc0d4fb22a986150299bc65132a0051eddf extends Twig_Template
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
        $__internal_ae4efcd6cdfe85338818f2b1df0f8ed4483f6b2e66fee5978d02859b8eab908f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4efcd6cdfe85338818f2b1df0f8ed4483f6b2e66fee5978d02859b8eab908f->enter($__internal_ae4efcd6cdfe85338818f2b1df0f8ed4483f6b2e66fee5978d02859b8eab908f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d6eb9daab2be77d889ea1cf619e0e81ae4afdb7d3539dfd84b5b8aefd0c83cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6eb9daab2be77d889ea1cf619e0e81ae4afdb7d3539dfd84b5b8aefd0c83cfa->enter($__internal_d6eb9daab2be77d889ea1cf619e0e81ae4afdb7d3539dfd84b5b8aefd0c83cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ae4efcd6cdfe85338818f2b1df0f8ed4483f6b2e66fee5978d02859b8eab908f->leave($__internal_ae4efcd6cdfe85338818f2b1df0f8ed4483f6b2e66fee5978d02859b8eab908f_prof);

        
        $__internal_d6eb9daab2be77d889ea1cf619e0e81ae4afdb7d3539dfd84b5b8aefd0c83cfa->leave($__internal_d6eb9daab2be77d889ea1cf619e0e81ae4afdb7d3539dfd84b5b8aefd0c83cfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
