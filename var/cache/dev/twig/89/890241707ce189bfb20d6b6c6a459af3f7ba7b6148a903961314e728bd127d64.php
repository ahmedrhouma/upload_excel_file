<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7111eec6f13c6b6b15d978c0cddfe0a7b1aedea0d3bae9464c381d445537fb19 extends Twig_Template
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
        $__internal_b692a627d4e18f9343d5e3a958ef93ea2c00ba523c77ded01fe62886ec396c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b692a627d4e18f9343d5e3a958ef93ea2c00ba523c77ded01fe62886ec396c1b->enter($__internal_b692a627d4e18f9343d5e3a958ef93ea2c00ba523c77ded01fe62886ec396c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1c6e11c74b1c05a0ca80eade2de50612a77a93766202550d249d040f84d500eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6e11c74b1c05a0ca80eade2de50612a77a93766202550d249d040f84d500eb->enter($__internal_1c6e11c74b1c05a0ca80eade2de50612a77a93766202550d249d040f84d500eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b692a627d4e18f9343d5e3a958ef93ea2c00ba523c77ded01fe62886ec396c1b->leave($__internal_b692a627d4e18f9343d5e3a958ef93ea2c00ba523c77ded01fe62886ec396c1b_prof);

        
        $__internal_1c6e11c74b1c05a0ca80eade2de50612a77a93766202550d249d040f84d500eb->leave($__internal_1c6e11c74b1c05a0ca80eade2de50612a77a93766202550d249d040f84d500eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
