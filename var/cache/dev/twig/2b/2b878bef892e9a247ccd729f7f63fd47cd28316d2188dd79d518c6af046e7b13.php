<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_162b75f44439cd1a0cc6021ec044e282e31ec3311ec38d9a999238fd00546597 extends Twig_Template
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
        $__internal_85bff388ecc5b3cc22412a2235ba57722b74bd3ebe9d1d0845ab5503e096b896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85bff388ecc5b3cc22412a2235ba57722b74bd3ebe9d1d0845ab5503e096b896->enter($__internal_85bff388ecc5b3cc22412a2235ba57722b74bd3ebe9d1d0845ab5503e096b896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_536ec2801b69ecd206fbfcb3ce7eae3cfee36269b8f3a714662e0d6746885bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536ec2801b69ecd206fbfcb3ce7eae3cfee36269b8f3a714662e0d6746885bf6->enter($__internal_536ec2801b69ecd206fbfcb3ce7eae3cfee36269b8f3a714662e0d6746885bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_85bff388ecc5b3cc22412a2235ba57722b74bd3ebe9d1d0845ab5503e096b896->leave($__internal_85bff388ecc5b3cc22412a2235ba57722b74bd3ebe9d1d0845ab5503e096b896_prof);

        
        $__internal_536ec2801b69ecd206fbfcb3ce7eae3cfee36269b8f3a714662e0d6746885bf6->leave($__internal_536ec2801b69ecd206fbfcb3ce7eae3cfee36269b8f3a714662e0d6746885bf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
