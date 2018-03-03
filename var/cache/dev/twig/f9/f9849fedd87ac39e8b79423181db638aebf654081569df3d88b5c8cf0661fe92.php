<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1fb2842fbe8af6049bef4f479aee86f91f8af77f5f3cba8b38344c3a002a98ad extends Twig_Template
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
        $__internal_e11b39f0bb8842d26ca75c0e1af654197a34b1d5b19fff10b6dedffdb3eb0d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11b39f0bb8842d26ca75c0e1af654197a34b1d5b19fff10b6dedffdb3eb0d43->enter($__internal_e11b39f0bb8842d26ca75c0e1af654197a34b1d5b19fff10b6dedffdb3eb0d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_028efe2a282b56fe8742c2d385ecf7adf0a57a97a74351bcbddd5a7bc2260893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028efe2a282b56fe8742c2d385ecf7adf0a57a97a74351bcbddd5a7bc2260893->enter($__internal_028efe2a282b56fe8742c2d385ecf7adf0a57a97a74351bcbddd5a7bc2260893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e11b39f0bb8842d26ca75c0e1af654197a34b1d5b19fff10b6dedffdb3eb0d43->leave($__internal_e11b39f0bb8842d26ca75c0e1af654197a34b1d5b19fff10b6dedffdb3eb0d43_prof);

        
        $__internal_028efe2a282b56fe8742c2d385ecf7adf0a57a97a74351bcbddd5a7bc2260893->leave($__internal_028efe2a282b56fe8742c2d385ecf7adf0a57a97a74351bcbddd5a7bc2260893_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
