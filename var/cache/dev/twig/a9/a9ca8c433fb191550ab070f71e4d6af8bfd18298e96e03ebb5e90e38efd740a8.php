<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f7111a4b80c610e18f6fb234b3538edf567fab6021af97eface8de44d63a453e extends Twig_Template
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
        $__internal_b536ef216e2c54e26e4b6700980fba2f3860ee749ee92385664450093591c54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b536ef216e2c54e26e4b6700980fba2f3860ee749ee92385664450093591c54f->enter($__internal_b536ef216e2c54e26e4b6700980fba2f3860ee749ee92385664450093591c54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_df6f3dc58d65e10defbc9a11f20385a22b6fc7150b8091e276579ef17c49036d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6f3dc58d65e10defbc9a11f20385a22b6fc7150b8091e276579ef17c49036d->enter($__internal_df6f3dc58d65e10defbc9a11f20385a22b6fc7150b8091e276579ef17c49036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b536ef216e2c54e26e4b6700980fba2f3860ee749ee92385664450093591c54f->leave($__internal_b536ef216e2c54e26e4b6700980fba2f3860ee749ee92385664450093591c54f_prof);

        
        $__internal_df6f3dc58d65e10defbc9a11f20385a22b6fc7150b8091e276579ef17c49036d->leave($__internal_df6f3dc58d65e10defbc9a11f20385a22b6fc7150b8091e276579ef17c49036d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
