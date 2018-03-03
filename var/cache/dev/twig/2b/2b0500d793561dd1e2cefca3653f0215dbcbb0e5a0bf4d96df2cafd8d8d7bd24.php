<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ed5155d20c20b51e557c6829acee6bf06d5e27282ac9e783ab65296182fa2813 extends Twig_Template
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
        $__internal_15cfb3b13fb60cc0c6761b10e45726d0349fea714ed21615b77909619712c0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15cfb3b13fb60cc0c6761b10e45726d0349fea714ed21615b77909619712c0f1->enter($__internal_15cfb3b13fb60cc0c6761b10e45726d0349fea714ed21615b77909619712c0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2ed8b33815c39416945a5d749903e1e4559e55da5f023958890e5722074158c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed8b33815c39416945a5d749903e1e4559e55da5f023958890e5722074158c7->enter($__internal_2ed8b33815c39416945a5d749903e1e4559e55da5f023958890e5722074158c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_15cfb3b13fb60cc0c6761b10e45726d0349fea714ed21615b77909619712c0f1->leave($__internal_15cfb3b13fb60cc0c6761b10e45726d0349fea714ed21615b77909619712c0f1_prof);

        
        $__internal_2ed8b33815c39416945a5d749903e1e4559e55da5f023958890e5722074158c7->leave($__internal_2ed8b33815c39416945a5d749903e1e4559e55da5f023958890e5722074158c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
