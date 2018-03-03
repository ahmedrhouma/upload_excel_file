<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_df15fc03a1559d218b07721f1d1c297d8a9c1f826c38a1dc910393dd7417e99c extends Twig_Template
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
        $__internal_797eefb0089b9c0fc051484c51b752612a8e97f1c1324e8bb732f711cb6ac88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797eefb0089b9c0fc051484c51b752612a8e97f1c1324e8bb732f711cb6ac88a->enter($__internal_797eefb0089b9c0fc051484c51b752612a8e97f1c1324e8bb732f711cb6ac88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c4a72e8e29ed79ece646a2a6445d1318613d48da9588f0ff5e72f5df3b10c0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a72e8e29ed79ece646a2a6445d1318613d48da9588f0ff5e72f5df3b10c0e4->enter($__internal_c4a72e8e29ed79ece646a2a6445d1318613d48da9588f0ff5e72f5df3b10c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_797eefb0089b9c0fc051484c51b752612a8e97f1c1324e8bb732f711cb6ac88a->leave($__internal_797eefb0089b9c0fc051484c51b752612a8e97f1c1324e8bb732f711cb6ac88a_prof);

        
        $__internal_c4a72e8e29ed79ece646a2a6445d1318613d48da9588f0ff5e72f5df3b10c0e4->leave($__internal_c4a72e8e29ed79ece646a2a6445d1318613d48da9588f0ff5e72f5df3b10c0e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
