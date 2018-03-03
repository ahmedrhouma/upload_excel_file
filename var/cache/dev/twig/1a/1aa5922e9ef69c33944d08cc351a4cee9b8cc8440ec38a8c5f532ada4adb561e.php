<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6e6cd9b6897479cb2710be5a7e5a9306cc53baa2e305d440e64148f0f6b0505d extends Twig_Template
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
        $__internal_53a132ffd86072d39d76299ae1b85a52b075cc454486da721fb381a1b85badce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a132ffd86072d39d76299ae1b85a52b075cc454486da721fb381a1b85badce->enter($__internal_53a132ffd86072d39d76299ae1b85a52b075cc454486da721fb381a1b85badce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_bf2591a1c94848f9d470833f9d517043672905a6f41ee0b9db6c101d37989832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2591a1c94848f9d470833f9d517043672905a6f41ee0b9db6c101d37989832->enter($__internal_bf2591a1c94848f9d470833f9d517043672905a6f41ee0b9db6c101d37989832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_53a132ffd86072d39d76299ae1b85a52b075cc454486da721fb381a1b85badce->leave($__internal_53a132ffd86072d39d76299ae1b85a52b075cc454486da721fb381a1b85badce_prof);

        
        $__internal_bf2591a1c94848f9d470833f9d517043672905a6f41ee0b9db6c101d37989832->leave($__internal_bf2591a1c94848f9d470833f9d517043672905a6f41ee0b9db6c101d37989832_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
