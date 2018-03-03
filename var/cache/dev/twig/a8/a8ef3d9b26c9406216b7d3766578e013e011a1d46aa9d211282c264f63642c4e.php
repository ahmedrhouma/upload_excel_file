<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ed9fca52ebb831851066ef2bce1cf8e1262e0c89a2d0e9b0eb7581965362cad0 extends Twig_Template
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
        $__internal_861554df51777cbfbecac88b2ae0476487fec7124ae6639b0b69c961b82f5e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861554df51777cbfbecac88b2ae0476487fec7124ae6639b0b69c961b82f5e57->enter($__internal_861554df51777cbfbecac88b2ae0476487fec7124ae6639b0b69c961b82f5e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_642ddc2fcc0827d911799127afc81f90214f9e43b6f2810f88c1e50a756f771d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642ddc2fcc0827d911799127afc81f90214f9e43b6f2810f88c1e50a756f771d->enter($__internal_642ddc2fcc0827d911799127afc81f90214f9e43b6f2810f88c1e50a756f771d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_861554df51777cbfbecac88b2ae0476487fec7124ae6639b0b69c961b82f5e57->leave($__internal_861554df51777cbfbecac88b2ae0476487fec7124ae6639b0b69c961b82f5e57_prof);

        
        $__internal_642ddc2fcc0827d911799127afc81f90214f9e43b6f2810f88c1e50a756f771d->leave($__internal_642ddc2fcc0827d911799127afc81f90214f9e43b6f2810f88c1e50a756f771d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
