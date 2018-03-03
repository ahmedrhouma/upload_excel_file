<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f2cfaf93cf1747007754abab807482dc78664994954ac17f563ab24f3a8573b1 extends Twig_Template
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
        $__internal_4f4ca4b2a8f1b0a77d2b311dd42eefa0fac31b0c2d66effccc33ac2c4f32f55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4ca4b2a8f1b0a77d2b311dd42eefa0fac31b0c2d66effccc33ac2c4f32f55f->enter($__internal_4f4ca4b2a8f1b0a77d2b311dd42eefa0fac31b0c2d66effccc33ac2c4f32f55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1f9dd08ab80b29930a99d6902ec493777f6222eff904e39213aa3b97bbc071ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9dd08ab80b29930a99d6902ec493777f6222eff904e39213aa3b97bbc071ec->enter($__internal_1f9dd08ab80b29930a99d6902ec493777f6222eff904e39213aa3b97bbc071ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4f4ca4b2a8f1b0a77d2b311dd42eefa0fac31b0c2d66effccc33ac2c4f32f55f->leave($__internal_4f4ca4b2a8f1b0a77d2b311dd42eefa0fac31b0c2d66effccc33ac2c4f32f55f_prof);

        
        $__internal_1f9dd08ab80b29930a99d6902ec493777f6222eff904e39213aa3b97bbc071ec->leave($__internal_1f9dd08ab80b29930a99d6902ec493777f6222eff904e39213aa3b97bbc071ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
