<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7a489fb230e444a6386a9ac1e4c9d2bcf7b96894d5bcd66abec90856cfb75699 extends Twig_Template
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
        $__internal_a7af7c16b0e948e2397300c10db513ec6c817d8ba20864cfe9dc57934ff8590f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7af7c16b0e948e2397300c10db513ec6c817d8ba20864cfe9dc57934ff8590f->enter($__internal_a7af7c16b0e948e2397300c10db513ec6c817d8ba20864cfe9dc57934ff8590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5ab08c26ff7a9dcd03783a666cf4a14d550a0a8867ad0620263555f6a147a3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab08c26ff7a9dcd03783a666cf4a14d550a0a8867ad0620263555f6a147a3bf->enter($__internal_5ab08c26ff7a9dcd03783a666cf4a14d550a0a8867ad0620263555f6a147a3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a7af7c16b0e948e2397300c10db513ec6c817d8ba20864cfe9dc57934ff8590f->leave($__internal_a7af7c16b0e948e2397300c10db513ec6c817d8ba20864cfe9dc57934ff8590f_prof);

        
        $__internal_5ab08c26ff7a9dcd03783a666cf4a14d550a0a8867ad0620263555f6a147a3bf->leave($__internal_5ab08c26ff7a9dcd03783a666cf4a14d550a0a8867ad0620263555f6a147a3bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
