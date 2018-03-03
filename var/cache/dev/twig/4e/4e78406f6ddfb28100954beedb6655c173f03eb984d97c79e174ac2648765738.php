<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_97f4735a53bd2e4919cc22427a4b7aece52c598fc98e7feb1d1f67cc9ff5ade0 extends Twig_Template
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
        $__internal_41285219f4fcc680f2a4d373ae86989b7cc178c793a5d96bb3f3c83c125bf825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41285219f4fcc680f2a4d373ae86989b7cc178c793a5d96bb3f3c83c125bf825->enter($__internal_41285219f4fcc680f2a4d373ae86989b7cc178c793a5d96bb3f3c83c125bf825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e6509b3d450ed35765f34e8b6f989744e0988a6769c321016432a8d08a78b3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6509b3d450ed35765f34e8b6f989744e0988a6769c321016432a8d08a78b3c0->enter($__internal_e6509b3d450ed35765f34e8b6f989744e0988a6769c321016432a8d08a78b3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_41285219f4fcc680f2a4d373ae86989b7cc178c793a5d96bb3f3c83c125bf825->leave($__internal_41285219f4fcc680f2a4d373ae86989b7cc178c793a5d96bb3f3c83c125bf825_prof);

        
        $__internal_e6509b3d450ed35765f34e8b6f989744e0988a6769c321016432a8d08a78b3c0->leave($__internal_e6509b3d450ed35765f34e8b6f989744e0988a6769c321016432a8d08a78b3c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
