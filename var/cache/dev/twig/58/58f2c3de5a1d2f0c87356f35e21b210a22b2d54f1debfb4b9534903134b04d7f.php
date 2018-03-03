<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2a862d58f14ad41c145156b63f095b68df2c07b2dc16616c29ce979083c8c8c7 extends Twig_Template
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
        $__internal_affa8fa6e53c7f6b1c05505d833512ae8e1f3e9e7374f42a1fd27c15bd0fc6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affa8fa6e53c7f6b1c05505d833512ae8e1f3e9e7374f42a1fd27c15bd0fc6a6->enter($__internal_affa8fa6e53c7f6b1c05505d833512ae8e1f3e9e7374f42a1fd27c15bd0fc6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c4fbf2ba8844d5c08a1ee908d241b0d45e8c030fb89779be94b49a001eeee036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fbf2ba8844d5c08a1ee908d241b0d45e8c030fb89779be94b49a001eeee036->enter($__internal_c4fbf2ba8844d5c08a1ee908d241b0d45e8c030fb89779be94b49a001eeee036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_affa8fa6e53c7f6b1c05505d833512ae8e1f3e9e7374f42a1fd27c15bd0fc6a6->leave($__internal_affa8fa6e53c7f6b1c05505d833512ae8e1f3e9e7374f42a1fd27c15bd0fc6a6_prof);

        
        $__internal_c4fbf2ba8844d5c08a1ee908d241b0d45e8c030fb89779be94b49a001eeee036->leave($__internal_c4fbf2ba8844d5c08a1ee908d241b0d45e8c030fb89779be94b49a001eeee036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
