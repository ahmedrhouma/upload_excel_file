<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0770684ad520da83b7c5c87b35879e7dfb61b808398443db1c7e1f6be412ea38 extends Twig_Template
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
        $__internal_52157ec9db7f556ade14e9d830885ad515516e42fd36bc963f94f4d21e7a8ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52157ec9db7f556ade14e9d830885ad515516e42fd36bc963f94f4d21e7a8ddf->enter($__internal_52157ec9db7f556ade14e9d830885ad515516e42fd36bc963f94f4d21e7a8ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_80967d2e88027dfa7c5653b02ef0bc5e306d339935c40c91d3dda1519953840c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80967d2e88027dfa7c5653b02ef0bc5e306d339935c40c91d3dda1519953840c->enter($__internal_80967d2e88027dfa7c5653b02ef0bc5e306d339935c40c91d3dda1519953840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_52157ec9db7f556ade14e9d830885ad515516e42fd36bc963f94f4d21e7a8ddf->leave($__internal_52157ec9db7f556ade14e9d830885ad515516e42fd36bc963f94f4d21e7a8ddf_prof);

        
        $__internal_80967d2e88027dfa7c5653b02ef0bc5e306d339935c40c91d3dda1519953840c->leave($__internal_80967d2e88027dfa7c5653b02ef0bc5e306d339935c40c91d3dda1519953840c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
