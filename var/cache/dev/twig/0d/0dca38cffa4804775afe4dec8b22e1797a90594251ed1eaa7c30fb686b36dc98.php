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
        $__internal_5b81296434e89472d6055bd78c7cce19ae619c9a63afc6bf9611762273f9f663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b81296434e89472d6055bd78c7cce19ae619c9a63afc6bf9611762273f9f663->enter($__internal_5b81296434e89472d6055bd78c7cce19ae619c9a63afc6bf9611762273f9f663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_90825a4a2df2c234e8e0fb60847ab6ba69a3d4cf5b671acdd183294d631f3f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90825a4a2df2c234e8e0fb60847ab6ba69a3d4cf5b671acdd183294d631f3f20->enter($__internal_90825a4a2df2c234e8e0fb60847ab6ba69a3d4cf5b671acdd183294d631f3f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5b81296434e89472d6055bd78c7cce19ae619c9a63afc6bf9611762273f9f663->leave($__internal_5b81296434e89472d6055bd78c7cce19ae619c9a63afc6bf9611762273f9f663_prof);

        
        $__internal_90825a4a2df2c234e8e0fb60847ab6ba69a3d4cf5b671acdd183294d631f3f20->leave($__internal_90825a4a2df2c234e8e0fb60847ab6ba69a3d4cf5b671acdd183294d631f3f20_prof);

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
