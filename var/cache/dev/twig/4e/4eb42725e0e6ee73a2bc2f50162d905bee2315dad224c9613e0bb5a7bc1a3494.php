<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_934560b0375711eb1e847faeb146bebac50f419a17101cced1f7bea531a1ad80 extends Twig_Template
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
        $__internal_307444b22b344b2371051f138cd6a3beda08b7a95ad8c5a6e4f8cbce63b3d1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307444b22b344b2371051f138cd6a3beda08b7a95ad8c5a6e4f8cbce63b3d1da->enter($__internal_307444b22b344b2371051f138cd6a3beda08b7a95ad8c5a6e4f8cbce63b3d1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_64aeb46f3f9e893f732fec1fb9db333a09cd557ce9fa6ac297812553cd9a647a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64aeb46f3f9e893f732fec1fb9db333a09cd557ce9fa6ac297812553cd9a647a->enter($__internal_64aeb46f3f9e893f732fec1fb9db333a09cd557ce9fa6ac297812553cd9a647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_307444b22b344b2371051f138cd6a3beda08b7a95ad8c5a6e4f8cbce63b3d1da->leave($__internal_307444b22b344b2371051f138cd6a3beda08b7a95ad8c5a6e4f8cbce63b3d1da_prof);

        
        $__internal_64aeb46f3f9e893f732fec1fb9db333a09cd557ce9fa6ac297812553cd9a647a->leave($__internal_64aeb46f3f9e893f732fec1fb9db333a09cd557ce9fa6ac297812553cd9a647a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
