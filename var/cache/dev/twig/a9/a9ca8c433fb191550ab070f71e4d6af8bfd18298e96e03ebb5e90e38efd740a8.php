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
        $__internal_a96e8a46be0574801ef82bd35430646ac07c5a0fae306a8c4d25817174c5bd47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96e8a46be0574801ef82bd35430646ac07c5a0fae306a8c4d25817174c5bd47->enter($__internal_a96e8a46be0574801ef82bd35430646ac07c5a0fae306a8c4d25817174c5bd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_438abbf1ed3ff99f5928a12b171b7be835b878de568d3820da30172cfbef9900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438abbf1ed3ff99f5928a12b171b7be835b878de568d3820da30172cfbef9900->enter($__internal_438abbf1ed3ff99f5928a12b171b7be835b878de568d3820da30172cfbef9900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a96e8a46be0574801ef82bd35430646ac07c5a0fae306a8c4d25817174c5bd47->leave($__internal_a96e8a46be0574801ef82bd35430646ac07c5a0fae306a8c4d25817174c5bd47_prof);

        
        $__internal_438abbf1ed3ff99f5928a12b171b7be835b878de568d3820da30172cfbef9900->leave($__internal_438abbf1ed3ff99f5928a12b171b7be835b878de568d3820da30172cfbef9900_prof);

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
