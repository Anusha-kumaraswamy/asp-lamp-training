<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37954d791f212663cc8c9eb709d239e704c996105fc02b8db6cc8f4336933274 extends Twig_Template
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
        $__internal_96714c1025858efb804247ec0f1c92ca8021625c9b6543ad285c0f25ce02dc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96714c1025858efb804247ec0f1c92ca8021625c9b6543ad285c0f25ce02dc81->enter($__internal_96714c1025858efb804247ec0f1c92ca8021625c9b6543ad285c0f25ce02dc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c17bc327c43c7dd0f6c0352a257c53b898988a4e850950e4784fa8fd7f5d6ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17bc327c43c7dd0f6c0352a257c53b898988a4e850950e4784fa8fd7f5d6ac8->enter($__internal_c17bc327c43c7dd0f6c0352a257c53b898988a4e850950e4784fa8fd7f5d6ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_96714c1025858efb804247ec0f1c92ca8021625c9b6543ad285c0f25ce02dc81->leave($__internal_96714c1025858efb804247ec0f1c92ca8021625c9b6543ad285c0f25ce02dc81_prof);

        
        $__internal_c17bc327c43c7dd0f6c0352a257c53b898988a4e850950e4784fa8fd7f5d6ac8->leave($__internal_c17bc327c43c7dd0f6c0352a257c53b898988a4e850950e4784fa8fd7f5d6ac8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
