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
        $__internal_f0f8f5137156239800791301915ea0b9eb2419a7b4c5f4aa39d80d406a12dedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f8f5137156239800791301915ea0b9eb2419a7b4c5f4aa39d80d406a12dedf->enter($__internal_f0f8f5137156239800791301915ea0b9eb2419a7b4c5f4aa39d80d406a12dedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_38fda812bbc449338046f44cfb51761f01999935d4c459aedf5a900f5bc1579b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fda812bbc449338046f44cfb51761f01999935d4c459aedf5a900f5bc1579b->enter($__internal_38fda812bbc449338046f44cfb51761f01999935d4c459aedf5a900f5bc1579b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f0f8f5137156239800791301915ea0b9eb2419a7b4c5f4aa39d80d406a12dedf->leave($__internal_f0f8f5137156239800791301915ea0b9eb2419a7b4c5f4aa39d80d406a12dedf_prof);

        
        $__internal_38fda812bbc449338046f44cfb51761f01999935d4c459aedf5a900f5bc1579b->leave($__internal_38fda812bbc449338046f44cfb51761f01999935d4c459aedf5a900f5bc1579b_prof);

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
