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
        $__internal_6449b683d9819c6a1483efcd04269177c4b54481515af946ef47593460ca5c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6449b683d9819c6a1483efcd04269177c4b54481515af946ef47593460ca5c47->enter($__internal_6449b683d9819c6a1483efcd04269177c4b54481515af946ef47593460ca5c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_570ee0a66a0b5c6476d9152ce26dcfa0c852d497c78d46e51d3f4d6ca7ffa6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570ee0a66a0b5c6476d9152ce26dcfa0c852d497c78d46e51d3f4d6ca7ffa6e3->enter($__internal_570ee0a66a0b5c6476d9152ce26dcfa0c852d497c78d46e51d3f4d6ca7ffa6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6449b683d9819c6a1483efcd04269177c4b54481515af946ef47593460ca5c47->leave($__internal_6449b683d9819c6a1483efcd04269177c4b54481515af946ef47593460ca5c47_prof);

        
        $__internal_570ee0a66a0b5c6476d9152ce26dcfa0c852d497c78d46e51d3f4d6ca7ffa6e3->leave($__internal_570ee0a66a0b5c6476d9152ce26dcfa0c852d497c78d46e51d3f4d6ca7ffa6e3_prof);

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
