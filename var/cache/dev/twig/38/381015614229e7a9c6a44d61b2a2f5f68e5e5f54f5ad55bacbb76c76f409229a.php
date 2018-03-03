<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8dea0865c27551e81c4769a0f9816a3920b398a75a9924e68acb27b56f2310f5 extends Twig_Template
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
        $__internal_107bd81745e273f207f9253003c069a2e18f6ad36eedf79242c4eec41edc0118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107bd81745e273f207f9253003c069a2e18f6ad36eedf79242c4eec41edc0118->enter($__internal_107bd81745e273f207f9253003c069a2e18f6ad36eedf79242c4eec41edc0118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_da684749b844c1356a23b40ded47141e29fdfbf8da3c83fd20bae702678830ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da684749b844c1356a23b40ded47141e29fdfbf8da3c83fd20bae702678830ad->enter($__internal_da684749b844c1356a23b40ded47141e29fdfbf8da3c83fd20bae702678830ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_107bd81745e273f207f9253003c069a2e18f6ad36eedf79242c4eec41edc0118->leave($__internal_107bd81745e273f207f9253003c069a2e18f6ad36eedf79242c4eec41edc0118_prof);

        
        $__internal_da684749b844c1356a23b40ded47141e29fdfbf8da3c83fd20bae702678830ad->leave($__internal_da684749b844c1356a23b40ded47141e29fdfbf8da3c83fd20bae702678830ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
