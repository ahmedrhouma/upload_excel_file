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
        $__internal_9d0ccf5010903a2f1ebc545e72571d3b4b688b07b0b7ffa8885a68bd3d378ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0ccf5010903a2f1ebc545e72571d3b4b688b07b0b7ffa8885a68bd3d378ea3->enter($__internal_9d0ccf5010903a2f1ebc545e72571d3b4b688b07b0b7ffa8885a68bd3d378ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d51816bfbf00007697139d191d7129989c4ebac1a15bf2076815a59fcf86e8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51816bfbf00007697139d191d7129989c4ebac1a15bf2076815a59fcf86e8a6->enter($__internal_d51816bfbf00007697139d191d7129989c4ebac1a15bf2076815a59fcf86e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d0ccf5010903a2f1ebc545e72571d3b4b688b07b0b7ffa8885a68bd3d378ea3->leave($__internal_9d0ccf5010903a2f1ebc545e72571d3b4b688b07b0b7ffa8885a68bd3d378ea3_prof);

        
        $__internal_d51816bfbf00007697139d191d7129989c4ebac1a15bf2076815a59fcf86e8a6->leave($__internal_d51816bfbf00007697139d191d7129989c4ebac1a15bf2076815a59fcf86e8a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5b48bf03305518674fa4f874cbcecc3cf8ec9151c92376ed7af58f68205143a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b48bf03305518674fa4f874cbcecc3cf8ec9151c92376ed7af58f68205143a->enter($__internal_b5b48bf03305518674fa4f874cbcecc3cf8ec9151c92376ed7af58f68205143a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34f0675b378072e623dc93a9c1b311f30d91848f9ae214329a0ccca21db00bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f0675b378072e623dc93a9c1b311f30d91848f9ae214329a0ccca21db00bf5->enter($__internal_34f0675b378072e623dc93a9c1b311f30d91848f9ae214329a0ccca21db00bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_34f0675b378072e623dc93a9c1b311f30d91848f9ae214329a0ccca21db00bf5->leave($__internal_34f0675b378072e623dc93a9c1b311f30d91848f9ae214329a0ccca21db00bf5_prof);

        
        $__internal_b5b48bf03305518674fa4f874cbcecc3cf8ec9151c92376ed7af58f68205143a->leave($__internal_b5b48bf03305518674fa4f874cbcecc3cf8ec9151c92376ed7af58f68205143a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2538a864e75c14eb481bdb77d318f04d123e5051df0395ed3fe6be05a3b3f3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2538a864e75c14eb481bdb77d318f04d123e5051df0395ed3fe6be05a3b3f3c8->enter($__internal_2538a864e75c14eb481bdb77d318f04d123e5051df0395ed3fe6be05a3b3f3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddb6420a0d0de8ad6e0a8592d83d0e8ae07a5886562fcaeeb8021293a2ce8d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb6420a0d0de8ad6e0a8592d83d0e8ae07a5886562fcaeeb8021293a2ce8d5a->enter($__internal_ddb6420a0d0de8ad6e0a8592d83d0e8ae07a5886562fcaeeb8021293a2ce8d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddb6420a0d0de8ad6e0a8592d83d0e8ae07a5886562fcaeeb8021293a2ce8d5a->leave($__internal_ddb6420a0d0de8ad6e0a8592d83d0e8ae07a5886562fcaeeb8021293a2ce8d5a_prof);

        
        $__internal_2538a864e75c14eb481bdb77d318f04d123e5051df0395ed3fe6be05a3b3f3c8->leave($__internal_2538a864e75c14eb481bdb77d318f04d123e5051df0395ed3fe6be05a3b3f3c8_prof);

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
