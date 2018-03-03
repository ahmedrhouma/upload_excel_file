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
        $__internal_0aed030725830b4cd6675f10dae9d4ae4a835a4e3253c0ea83778604d9079b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aed030725830b4cd6675f10dae9d4ae4a835a4e3253c0ea83778604d9079b55->enter($__internal_0aed030725830b4cd6675f10dae9d4ae4a835a4e3253c0ea83778604d9079b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8ba6ee4056fd0dc3a94835a260216d9898c7f28f914ac59a437c76105d4ace83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba6ee4056fd0dc3a94835a260216d9898c7f28f914ac59a437c76105d4ace83->enter($__internal_8ba6ee4056fd0dc3a94835a260216d9898c7f28f914ac59a437c76105d4ace83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0aed030725830b4cd6675f10dae9d4ae4a835a4e3253c0ea83778604d9079b55->leave($__internal_0aed030725830b4cd6675f10dae9d4ae4a835a4e3253c0ea83778604d9079b55_prof);

        
        $__internal_8ba6ee4056fd0dc3a94835a260216d9898c7f28f914ac59a437c76105d4ace83->leave($__internal_8ba6ee4056fd0dc3a94835a260216d9898c7f28f914ac59a437c76105d4ace83_prof);

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
