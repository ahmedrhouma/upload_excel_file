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
        $__internal_f64aa809a9463a02e7b685d2e2f18a60502605657c720012bbe1e8eb00019e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64aa809a9463a02e7b685d2e2f18a60502605657c720012bbe1e8eb00019e27->enter($__internal_f64aa809a9463a02e7b685d2e2f18a60502605657c720012bbe1e8eb00019e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c3673780e5ef9f65476a2936050e4a9f15d0a5e4e3ee03ab96e322aa41b9982c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3673780e5ef9f65476a2936050e4a9f15d0a5e4e3ee03ab96e322aa41b9982c->enter($__internal_c3673780e5ef9f65476a2936050e4a9f15d0a5e4e3ee03ab96e322aa41b9982c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f64aa809a9463a02e7b685d2e2f18a60502605657c720012bbe1e8eb00019e27->leave($__internal_f64aa809a9463a02e7b685d2e2f18a60502605657c720012bbe1e8eb00019e27_prof);

        
        $__internal_c3673780e5ef9f65476a2936050e4a9f15d0a5e4e3ee03ab96e322aa41b9982c->leave($__internal_c3673780e5ef9f65476a2936050e4a9f15d0a5e4e3ee03ab96e322aa41b9982c_prof);

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
