<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_61696f70f68026af1faecf22090ad0a3689f7245697f3a9752f89c38be9e1a32 extends Twig_Template
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
        $__internal_44977bc03714b04585d3caa8ec828ae61ffda4e0ba6fdea450ac8e00b0919d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44977bc03714b04585d3caa8ec828ae61ffda4e0ba6fdea450ac8e00b0919d59->enter($__internal_44977bc03714b04585d3caa8ec828ae61ffda4e0ba6fdea450ac8e00b0919d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e13dfec1de130982d7af71ba7f382601a4a776789e7fe59cad95cc018e54f757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13dfec1de130982d7af71ba7f382601a4a776789e7fe59cad95cc018e54f757->enter($__internal_e13dfec1de130982d7af71ba7f382601a4a776789e7fe59cad95cc018e54f757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_44977bc03714b04585d3caa8ec828ae61ffda4e0ba6fdea450ac8e00b0919d59->leave($__internal_44977bc03714b04585d3caa8ec828ae61ffda4e0ba6fdea450ac8e00b0919d59_prof);

        
        $__internal_e13dfec1de130982d7af71ba7f382601a4a776789e7fe59cad95cc018e54f757->leave($__internal_e13dfec1de130982d7af71ba7f382601a4a776789e7fe59cad95cc018e54f757_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
