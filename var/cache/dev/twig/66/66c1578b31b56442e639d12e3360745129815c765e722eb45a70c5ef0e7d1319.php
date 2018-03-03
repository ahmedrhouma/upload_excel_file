<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f9691b9214c46e6771c06bdac24581b3ab7715c06447c2b04a5e25d59b8cf6ad extends Twig_Template
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
        $__internal_ec6aca50c31f3206bcd1057d61e54b7e1ba15d70750134462634a18d77a710be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6aca50c31f3206bcd1057d61e54b7e1ba15d70750134462634a18d77a710be->enter($__internal_ec6aca50c31f3206bcd1057d61e54b7e1ba15d70750134462634a18d77a710be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7a36057660815777e26dad95931c6ddd22279ff4c9267eb7e26cb0b864d4b43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a36057660815777e26dad95931c6ddd22279ff4c9267eb7e26cb0b864d4b43a->enter($__internal_7a36057660815777e26dad95931c6ddd22279ff4c9267eb7e26cb0b864d4b43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ec6aca50c31f3206bcd1057d61e54b7e1ba15d70750134462634a18d77a710be->leave($__internal_ec6aca50c31f3206bcd1057d61e54b7e1ba15d70750134462634a18d77a710be_prof);

        
        $__internal_7a36057660815777e26dad95931c6ddd22279ff4c9267eb7e26cb0b864d4b43a->leave($__internal_7a36057660815777e26dad95931c6ddd22279ff4c9267eb7e26cb0b864d4b43a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
