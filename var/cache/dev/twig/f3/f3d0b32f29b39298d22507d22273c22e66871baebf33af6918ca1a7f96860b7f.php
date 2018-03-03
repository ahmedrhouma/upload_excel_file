<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_79635547a3b3a0544288f4210aea8b1204ea22f8a5b5daf756ddfd0cd49c0c73 extends Twig_Template
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
        $__internal_235bc62fe7bc44cf8129c9c635f330b1beed6b2906edbeebaeba2c0ab50e9f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235bc62fe7bc44cf8129c9c635f330b1beed6b2906edbeebaeba2c0ab50e9f41->enter($__internal_235bc62fe7bc44cf8129c9c635f330b1beed6b2906edbeebaeba2c0ab50e9f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5fd603713c1030c5e172aee23ae7ca36157a2deb26b1634aff8bf750170c699f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd603713c1030c5e172aee23ae7ca36157a2deb26b1634aff8bf750170c699f->enter($__internal_5fd603713c1030c5e172aee23ae7ca36157a2deb26b1634aff8bf750170c699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_235bc62fe7bc44cf8129c9c635f330b1beed6b2906edbeebaeba2c0ab50e9f41->leave($__internal_235bc62fe7bc44cf8129c9c635f330b1beed6b2906edbeebaeba2c0ab50e9f41_prof);

        
        $__internal_5fd603713c1030c5e172aee23ae7ca36157a2deb26b1634aff8bf750170c699f->leave($__internal_5fd603713c1030c5e172aee23ae7ca36157a2deb26b1634aff8bf750170c699f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
