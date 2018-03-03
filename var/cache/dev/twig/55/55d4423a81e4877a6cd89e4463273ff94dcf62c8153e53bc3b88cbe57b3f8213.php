<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4e47453afb2bc701fc1166fc368c930d1a9676bf9226c46de278951efaf072bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e5c0a44dbd0c95e36ecd0a48385dd001ccb2c080cd2e66bd4c5e8a00c6a722a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5c0a44dbd0c95e36ecd0a48385dd001ccb2c080cd2e66bd4c5e8a00c6a722a->enter($__internal_1e5c0a44dbd0c95e36ecd0a48385dd001ccb2c080cd2e66bd4c5e8a00c6a722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9b1ef1f528524d9bd653cfe4cc4874aa3e79355d895e60a94c6578a4202d0d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1ef1f528524d9bd653cfe4cc4874aa3e79355d895e60a94c6578a4202d0d07->enter($__internal_9b1ef1f528524d9bd653cfe4cc4874aa3e79355d895e60a94c6578a4202d0d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1e5c0a44dbd0c95e36ecd0a48385dd001ccb2c080cd2e66bd4c5e8a00c6a722a->leave($__internal_1e5c0a44dbd0c95e36ecd0a48385dd001ccb2c080cd2e66bd4c5e8a00c6a722a_prof);

        
        $__internal_9b1ef1f528524d9bd653cfe4cc4874aa3e79355d895e60a94c6578a4202d0d07->leave($__internal_9b1ef1f528524d9bd653cfe4cc4874aa3e79355d895e60a94c6578a4202d0d07_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb46ba60803f3b5ba74fc504c41ce4d2d87bebe9d84ffab2823221e7c313d306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb46ba60803f3b5ba74fc504c41ce4d2d87bebe9d84ffab2823221e7c313d306->enter($__internal_bb46ba60803f3b5ba74fc504c41ce4d2d87bebe9d84ffab2823221e7c313d306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c525d1621147405dc179d579fbd6b7c1eedd88f14962bc1d69eb9d1a9d6abed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c525d1621147405dc179d579fbd6b7c1eedd88f14962bc1d69eb9d1a9d6abed->enter($__internal_1c525d1621147405dc179d579fbd6b7c1eedd88f14962bc1d69eb9d1a9d6abed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1c525d1621147405dc179d579fbd6b7c1eedd88f14962bc1d69eb9d1a9d6abed->leave($__internal_1c525d1621147405dc179d579fbd6b7c1eedd88f14962bc1d69eb9d1a9d6abed_prof);

        
        $__internal_bb46ba60803f3b5ba74fc504c41ce4d2d87bebe9d84ffab2823221e7c313d306->leave($__internal_bb46ba60803f3b5ba74fc504c41ce4d2d87bebe9d84ffab2823221e7c313d306_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
