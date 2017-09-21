<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a06e7164368eb0d005de9b00500a9ec1bfbf0d81da7a7c27fe49e8a7b68cb158 extends Twig_Template
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
        $__internal_4e264292e02ad40ef80bcd82ceeb8c300d151a03153391118df09ca51c44d496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e264292e02ad40ef80bcd82ceeb8c300d151a03153391118df09ca51c44d496->enter($__internal_4e264292e02ad40ef80bcd82ceeb8c300d151a03153391118df09ca51c44d496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e159f65c4b287a2d9b14649ca2f35a8a5b0a972e9447a318f265457febb25d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e159f65c4b287a2d9b14649ca2f35a8a5b0a972e9447a318f265457febb25d6d->enter($__internal_e159f65c4b287a2d9b14649ca2f35a8a5b0a972e9447a318f265457febb25d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4e264292e02ad40ef80bcd82ceeb8c300d151a03153391118df09ca51c44d496->leave($__internal_4e264292e02ad40ef80bcd82ceeb8c300d151a03153391118df09ca51c44d496_prof);

        
        $__internal_e159f65c4b287a2d9b14649ca2f35a8a5b0a972e9447a318f265457febb25d6d->leave($__internal_e159f65c4b287a2d9b14649ca2f35a8a5b0a972e9447a318f265457febb25d6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
