<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_c34ee60308cfc4e4a7d48f817ccb50442622b253acd2419d4feacd209376f320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41f29964a8ef4b22d6169822549c70f4d672acb71c72c4ff8f05f921fdd03d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f29964a8ef4b22d6169822549c70f4d672acb71c72c4ff8f05f921fdd03d6f->enter($__internal_41f29964a8ef4b22d6169822549c70f4d672acb71c72c4ff8f05f921fdd03d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c087b760a194bf9678c98e0ad63cfe24e512b05f19289cff7f4745a2e0e76ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c087b760a194bf9678c98e0ad63cfe24e512b05f19289cff7f4745a2e0e76ad1->enter($__internal_c087b760a194bf9678c98e0ad63cfe24e512b05f19289cff7f4745a2e0e76ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f29964a8ef4b22d6169822549c70f4d672acb71c72c4ff8f05f921fdd03d6f->leave($__internal_41f29964a8ef4b22d6169822549c70f4d672acb71c72c4ff8f05f921fdd03d6f_prof);

        
        $__internal_c087b760a194bf9678c98e0ad63cfe24e512b05f19289cff7f4745a2e0e76ad1->leave($__internal_c087b760a194bf9678c98e0ad63cfe24e512b05f19289cff7f4745a2e0e76ad1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbe515bebb4dd74e070ed99ef9136932036d8e8c6b6543b309dce8fed7ed09e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe515bebb4dd74e070ed99ef9136932036d8e8c6b6543b309dce8fed7ed09e2->enter($__internal_cbe515bebb4dd74e070ed99ef9136932036d8e8c6b6543b309dce8fed7ed09e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_737516616d8c14b602512c4fd839cad1a9b35aa4ed78c1f245d994b75197620c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737516616d8c14b602512c4fd839cad1a9b35aa4ed78c1f245d994b75197620c->enter($__internal_737516616d8c14b602512c4fd839cad1a9b35aa4ed78c1f245d994b75197620c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_737516616d8c14b602512c4fd839cad1a9b35aa4ed78c1f245d994b75197620c->leave($__internal_737516616d8c14b602512c4fd839cad1a9b35aa4ed78c1f245d994b75197620c_prof);

        
        $__internal_cbe515bebb4dd74e070ed99ef9136932036d8e8c6b6543b309dce8fed7ed09e2->leave($__internal_cbe515bebb4dd74e070ed99ef9136932036d8e8c6b6543b309dce8fed7ed09e2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c201939aff1569ca62eb18122af9003eb9c8530b70819fa05d8ec6d71d4aa953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c201939aff1569ca62eb18122af9003eb9c8530b70819fa05d8ec6d71d4aa953->enter($__internal_c201939aff1569ca62eb18122af9003eb9c8530b70819fa05d8ec6d71d4aa953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_081ea57e34c6b1c0d3f9ab8c03bb7434de654d0319be854a96737fd0a33a1347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081ea57e34c6b1c0d3f9ab8c03bb7434de654d0319be854a96737fd0a33a1347->enter($__internal_081ea57e34c6b1c0d3f9ab8c03bb7434de654d0319be854a96737fd0a33a1347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_081ea57e34c6b1c0d3f9ab8c03bb7434de654d0319be854a96737fd0a33a1347->leave($__internal_081ea57e34c6b1c0d3f9ab8c03bb7434de654d0319be854a96737fd0a33a1347_prof);

        
        $__internal_c201939aff1569ca62eb18122af9003eb9c8530b70819fa05d8ec6d71d4aa953->leave($__internal_c201939aff1569ca62eb18122af9003eb9c8530b70819fa05d8ec6d71d4aa953_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
