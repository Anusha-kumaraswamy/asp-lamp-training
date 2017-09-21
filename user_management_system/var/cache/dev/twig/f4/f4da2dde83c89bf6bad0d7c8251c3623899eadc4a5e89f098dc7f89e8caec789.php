<?php

/* User/edit.html.twig */
class __TwigTemplate_8984d62af34b33c95c44d98f66409752991152c64e8e313c9b5337c65bdcdd66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "User/edit.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd55c3ba9f427ea0dc85da86a829c8a8832489c9e46218a3b0e9d8430b711587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd55c3ba9f427ea0dc85da86a829c8a8832489c9e46218a3b0e9d8430b711587->enter($__internal_bd55c3ba9f427ea0dc85da86a829c8a8832489c9e46218a3b0e9d8430b711587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/edit.html.twig"));

        $__internal_076867a3e5fcb7486d702432c6b4c964ee493fea7dc5b4d313b40eb7204582b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076867a3e5fcb7486d702432c6b4c964ee493fea7dc5b4d313b40eb7204582b2->enter($__internal_076867a3e5fcb7486d702432c6b4c964ee493fea7dc5b4d313b40eb7204582b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd55c3ba9f427ea0dc85da86a829c8a8832489c9e46218a3b0e9d8430b711587->leave($__internal_bd55c3ba9f427ea0dc85da86a829c8a8832489c9e46218a3b0e9d8430b711587_prof);

        
        $__internal_076867a3e5fcb7486d702432c6b4c964ee493fea7dc5b4d313b40eb7204582b2->leave($__internal_076867a3e5fcb7486d702432c6b4c964ee493fea7dc5b4d313b40eb7204582b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d54ab8d63bbddc94f80836cc870423900aa2e07c322d7c143c8e82f3c31947e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54ab8d63bbddc94f80836cc870423900aa2e07c322d7c143c8e82f3c31947e9->enter($__internal_d54ab8d63bbddc94f80836cc870423900aa2e07c322d7c143c8e82f3c31947e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_765fe8cfdcfc8d95917fb59d4ac5b5eca1966db98b67a4f62bb6cbdbbfb99b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765fe8cfdcfc8d95917fb59d4ac5b5eca1966db98b67a4f62bb6cbdbbfb99b71->enter($__internal_765fe8cfdcfc8d95917fb59d4ac5b5eca1966db98b67a4f62bb6cbdbbfb99b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "    
";
        
        $__internal_765fe8cfdcfc8d95917fb59d4ac5b5eca1966db98b67a4f62bb6cbdbbfb99b71->leave($__internal_765fe8cfdcfc8d95917fb59d4ac5b5eca1966db98b67a4f62bb6cbdbbfb99b71_prof);

        
        $__internal_d54ab8d63bbddc94f80836cc870423900aa2e07c322d7c143c8e82f3c31947e9->leave($__internal_d54ab8d63bbddc94f80836cc870423900aa2e07c322d7c143c8e82f3c31947e9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_954fb1837812bcb0595a959691cd62b5325adedf078989bb3bf63ce5f375f214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954fb1837812bcb0595a959691cd62b5325adedf078989bb3bf63ce5f375f214->enter($__internal_954fb1837812bcb0595a959691cd62b5325adedf078989bb3bf63ce5f375f214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a436203ed467e31b0711a1d84c3bd0ff2b7149016c14843d3845900a4f2a0c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a436203ed467e31b0711a1d84c3bd0ff2b7149016c14843d3845900a4f2a0c69->enter($__internal_a436203ed467e31b0711a1d84c3bd0ff2b7149016c14843d3845900a4f2a0c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    < link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css\">
    ";
        
        $__internal_a436203ed467e31b0711a1d84c3bd0ff2b7149016c14843d3845900a4f2a0c69->leave($__internal_a436203ed467e31b0711a1d84c3bd0ff2b7149016c14843d3845900a4f2a0c69_prof);

        
        $__internal_954fb1837812bcb0595a959691cd62b5325adedf078989bb3bf63ce5f375f214->leave($__internal_954fb1837812bcb0595a959691cd62b5325adedf078989bb3bf63ce5f375f214_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2457a2dfd7de825e95c7f7d2f3764788017b92012a27945146a5bf4f22cdb630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2457a2dfd7de825e95c7f7d2f3764788017b92012a27945146a5bf4f22cdb630->enter($__internal_2457a2dfd7de825e95c7f7d2f3764788017b92012a27945146a5bf4f22cdb630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71f0d23d085064d9b65a887175a958f34f8c73b93a39937de7838a6f01f71e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f0d23d085064d9b65a887175a958f34f8c73b93a39937de7838a6f01f71e9c->enter($__internal_71f0d23d085064d9b65a887175a958f34f8c73b93a39937de7838a6f01f71e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_71f0d23d085064d9b65a887175a958f34f8c73b93a39937de7838a6f01f71e9c->leave($__internal_71f0d23d085064d9b65a887175a958f34f8c73b93a39937de7838a6f01f71e9c_prof);

        
        $__internal_2457a2dfd7de825e95c7f7d2f3764788017b92012a27945146a5bf4f22cdb630->leave($__internal_2457a2dfd7de825e95c7f7d2f3764788017b92012a27945146a5bf4f22cdb630_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_d4f4b2c034d94f1f7718f4a6124a40433e57ba7362823b9a74845c18cb2c6f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f4b2c034d94f1f7718f4a6124a40433e57ba7362823b9a74845c18cb2c6f48->enter($__internal_d4f4b2c034d94f1f7718f4a6124a40433e57ba7362823b9a74845c18cb2c6f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_801e0bd3b214d4e16fe50865ed8bc16db9d380158b6ea8349838b3b6fc3d6c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801e0bd3b214d4e16fe50865ed8bc16db9d380158b6ea8349838b3b6fc3d6c99->enter($__internal_801e0bd3b214d4e16fe50865ed8bc16db9d380158b6ea8349838b3b6fc3d6c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 11
        echo "<form class=\"form-horizontal\">
  <fieldset>
    <legend>Legend</legend>
    <div class=\"form-group\">
      <label for=\"inputEmail\" class=\"col-lg-2 control-label\">Email</label>
      <div class=\"col-lg-10\">
        <input type=\"text\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Password</label>
      <div class=\"col-lg-10\">
        <input type=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\"> Checkbox
          </label>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"textArea\" class=\"col-lg-2 control-label\">Textarea</label>
      <div class=\"col-lg-10\">
        <textarea class=\"form-control\" rows=\"3\" id=\"textArea\"></textarea>
        <span class=\"help-block\">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-lg-2 control-label\">Radios</label>
      <div class=\"col-lg-10\">
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
            Option one is this
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"select\" class=\"col-lg-2 control-label\">Selects</label>
      <div class=\"col-lg-10\">
        <select class=\"form-control\" id=\"select\">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple=\"\" class=\"form-control\">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-lg-10 col-lg-offset-2\">
        <button type=\"reset\" class=\"btn btn-default\">Cancel</button>
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
";
        
        $__internal_801e0bd3b214d4e16fe50865ed8bc16db9d380158b6ea8349838b3b6fc3d6c99->leave($__internal_801e0bd3b214d4e16fe50865ed8bc16db9d380158b6ea8349838b3b6fc3d6c99_prof);

        
        $__internal_d4f4b2c034d94f1f7718f4a6124a40433e57ba7362823b9a74845c18cb2c6f48->leave($__internal_d4f4b2c034d94f1f7718f4a6124a40433e57ba7362823b9a74845c18cb2c6f48_prof);

    }

    public function getTemplateName()
    {
        return "User/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 11,  95 => 10,  86 => 9,  75 => 5,  66 => 4,  55 => 6,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block head %}
    {% block stylesheets %}
    < link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css\">
    {% endblock %}    
{% endblock %}
    
{% block body %}
    {% block form %}
<form class=\"form-horizontal\">
  <fieldset>
    <legend>Legend</legend>
    <div class=\"form-group\">
      <label for=\"inputEmail\" class=\"col-lg-2 control-label\">Email</label>
      <div class=\"col-lg-10\">
        <input type=\"text\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Password</label>
      <div class=\"col-lg-10\">
        <input type=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\"> Checkbox
          </label>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"textArea\" class=\"col-lg-2 control-label\">Textarea</label>
      <div class=\"col-lg-10\">
        <textarea class=\"form-control\" rows=\"3\" id=\"textArea\"></textarea>
        <span class=\"help-block\">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-lg-2 control-label\">Radios</label>
      <div class=\"col-lg-10\">
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
            Option one is this
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"select\" class=\"col-lg-2 control-label\">Selects</label>
      <div class=\"col-lg-10\">
        <select class=\"form-control\" id=\"select\">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple=\"\" class=\"form-control\">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-lg-10 col-lg-offset-2\">
        <button type=\"reset\" class=\"btn btn-default\">Cancel</button>
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
{% endblock %}
{% endblock %}


", "User/edit.html.twig", "/var/www/html/asp-lamp-training/user_management_system/app/Resources/views/User/edit.html.twig");
    }
}
