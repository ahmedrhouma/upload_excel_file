<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_68db0d7f77d2b55457d8796baece793a5e04c23c27e49a96ac4e36c34b9dd3fa extends Twig_Template
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
        $__internal_843134099a0a89acc809b554c18a03ebc89074d616b7c49f97f222d122f89ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843134099a0a89acc809b554c18a03ebc89074d616b7c49f97f222d122f89ca3->enter($__internal_843134099a0a89acc809b554c18a03ebc89074d616b7c49f97f222d122f89ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0fd72df0fbe713b2963b159d0b0582aca863b5d249e59e52f4e6db755147366f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd72df0fbe713b2963b159d0b0582aca863b5d249e59e52f4e6db755147366f->enter($__internal_0fd72df0fbe713b2963b159d0b0582aca863b5d249e59e52f4e6db755147366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_843134099a0a89acc809b554c18a03ebc89074d616b7c49f97f222d122f89ca3->leave($__internal_843134099a0a89acc809b554c18a03ebc89074d616b7c49f97f222d122f89ca3_prof);

        
        $__internal_0fd72df0fbe713b2963b159d0b0582aca863b5d249e59e52f4e6db755147366f->leave($__internal_0fd72df0fbe713b2963b159d0b0582aca863b5d249e59e52f4e6db755147366f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
