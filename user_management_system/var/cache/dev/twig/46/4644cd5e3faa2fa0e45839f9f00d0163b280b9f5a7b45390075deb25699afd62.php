<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_dd849ae1d47c982ecd3e45cebf78e5220c9aea768b3f3e48ad797e8d2246b5a4 extends Twig_Template
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
        $__internal_f937facb1dfa8a08ceae0bf18175eca6676dc07793213009d07fbfba4755a45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f937facb1dfa8a08ceae0bf18175eca6676dc07793213009d07fbfba4755a45b->enter($__internal_f937facb1dfa8a08ceae0bf18175eca6676dc07793213009d07fbfba4755a45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5826bf943a147b784f96d417a65e432f00cbef5650fc27c9d2e0ee8538b1fcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5826bf943a147b784f96d417a65e432f00cbef5650fc27c9d2e0ee8538b1fcb1->enter($__internal_5826bf943a147b784f96d417a65e432f00cbef5650fc27c9d2e0ee8538b1fcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f937facb1dfa8a08ceae0bf18175eca6676dc07793213009d07fbfba4755a45b->leave($__internal_f937facb1dfa8a08ceae0bf18175eca6676dc07793213009d07fbfba4755a45b_prof);

        
        $__internal_5826bf943a147b784f96d417a65e432f00cbef5650fc27c9d2e0ee8538b1fcb1->leave($__internal_5826bf943a147b784f96d417a65e432f00cbef5650fc27c9d2e0ee8538b1fcb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
