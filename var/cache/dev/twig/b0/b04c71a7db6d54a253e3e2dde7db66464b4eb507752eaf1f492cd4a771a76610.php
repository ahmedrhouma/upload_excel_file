<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_2c016b964084a2ac1aaa73e7df107db7464f04616aa548c8ecd6a2ee44dc49d5 extends Twig_Template
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
        $__internal_b6d34db1156e70c9ff73a70792d51d7e3cef4ccbdf113f784e0052f606bcb0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d34db1156e70c9ff73a70792d51d7e3cef4ccbdf113f784e0052f606bcb0e8->enter($__internal_b6d34db1156e70c9ff73a70792d51d7e3cef4ccbdf113f784e0052f606bcb0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_754faad4cba952078de0a312f1f1f70ffe5ce283f1c41893b7006a160952bdd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754faad4cba952078de0a312f1f1f70ffe5ce283f1c41893b7006a160952bdd4->enter($__internal_754faad4cba952078de0a312f1f1f70ffe5ce283f1c41893b7006a160952bdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b6d34db1156e70c9ff73a70792d51d7e3cef4ccbdf113f784e0052f606bcb0e8->leave($__internal_b6d34db1156e70c9ff73a70792d51d7e3cef4ccbdf113f784e0052f606bcb0e8_prof);

        
        $__internal_754faad4cba952078de0a312f1f1f70ffe5ce283f1c41893b7006a160952bdd4->leave($__internal_754faad4cba952078de0a312f1f1f70ffe5ce283f1c41893b7006a160952bdd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
