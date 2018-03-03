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
        $__internal_4702739314ec90826fdc0321e9c0640f1853d53832515fe54b23ef54581da938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4702739314ec90826fdc0321e9c0640f1853d53832515fe54b23ef54581da938->enter($__internal_4702739314ec90826fdc0321e9c0640f1853d53832515fe54b23ef54581da938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_efd267b96e706d5df7a605e7acd3eec97333d62cb3987de3c194d487a34d6c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd267b96e706d5df7a605e7acd3eec97333d62cb3987de3c194d487a34d6c28->enter($__internal_efd267b96e706d5df7a605e7acd3eec97333d62cb3987de3c194d487a34d6c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4702739314ec90826fdc0321e9c0640f1853d53832515fe54b23ef54581da938->leave($__internal_4702739314ec90826fdc0321e9c0640f1853d53832515fe54b23ef54581da938_prof);

        
        $__internal_efd267b96e706d5df7a605e7acd3eec97333d62cb3987de3c194d487a34d6c28->leave($__internal_efd267b96e706d5df7a605e7acd3eec97333d62cb3987de3c194d487a34d6c28_prof);

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
