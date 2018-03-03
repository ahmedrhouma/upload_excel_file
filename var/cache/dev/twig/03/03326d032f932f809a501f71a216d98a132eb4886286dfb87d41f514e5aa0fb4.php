<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f4a32f0b3ff7b50b90b63d9522624d2d113a300240962f606ca2089e3f84dc4c extends Twig_Template
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
        $__internal_a5dcbdd51631c90b611c98ec1149e994d7f9032188f1918074aa1d0891d87e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5dcbdd51631c90b611c98ec1149e994d7f9032188f1918074aa1d0891d87e8b->enter($__internal_a5dcbdd51631c90b611c98ec1149e994d7f9032188f1918074aa1d0891d87e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_166f382b6efc5178b182bb97dc4e691ad600422461812fb6051b38797eac9258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166f382b6efc5178b182bb97dc4e691ad600422461812fb6051b38797eac9258->enter($__internal_166f382b6efc5178b182bb97dc4e691ad600422461812fb6051b38797eac9258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a5dcbdd51631c90b611c98ec1149e994d7f9032188f1918074aa1d0891d87e8b->leave($__internal_a5dcbdd51631c90b611c98ec1149e994d7f9032188f1918074aa1d0891d87e8b_prof);

        
        $__internal_166f382b6efc5178b182bb97dc4e691ad600422461812fb6051b38797eac9258->leave($__internal_166f382b6efc5178b182bb97dc4e691ad600422461812fb6051b38797eac9258_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
