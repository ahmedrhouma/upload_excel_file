<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71769263d1e363eaaf23a7cbd2636f2264c54500a7dc8201e45fa87f75afaf53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7176b446e5ef6912e26d421ce1cd74a4234e16afe21ab6818db031ca98ec7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7176b446e5ef6912e26d421ce1cd74a4234e16afe21ab6818db031ca98ec7ea->enter($__internal_a7176b446e5ef6912e26d421ce1cd74a4234e16afe21ab6818db031ca98ec7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_862875f5f011a74f4229e7a2ed290aa3c8cf24535f141a6ff738245d161412f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862875f5f011a74f4229e7a2ed290aa3c8cf24535f141a6ff738245d161412f1->enter($__internal_862875f5f011a74f4229e7a2ed290aa3c8cf24535f141a6ff738245d161412f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7176b446e5ef6912e26d421ce1cd74a4234e16afe21ab6818db031ca98ec7ea->leave($__internal_a7176b446e5ef6912e26d421ce1cd74a4234e16afe21ab6818db031ca98ec7ea_prof);

        
        $__internal_862875f5f011a74f4229e7a2ed290aa3c8cf24535f141a6ff738245d161412f1->leave($__internal_862875f5f011a74f4229e7a2ed290aa3c8cf24535f141a6ff738245d161412f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_796ef6f2ff947858ae2a8738b919164ca29e9ed6800ec112d090e50bf99f3c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796ef6f2ff947858ae2a8738b919164ca29e9ed6800ec112d090e50bf99f3c8f->enter($__internal_796ef6f2ff947858ae2a8738b919164ca29e9ed6800ec112d090e50bf99f3c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ad4e54cf5465000faa0c81f0d92ec8856b2292450c20db4e7873be6c37cee1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4e54cf5465000faa0c81f0d92ec8856b2292450c20db4e7873be6c37cee1de->enter($__internal_ad4e54cf5465000faa0c81f0d92ec8856b2292450c20db4e7873be6c37cee1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad4e54cf5465000faa0c81f0d92ec8856b2292450c20db4e7873be6c37cee1de->leave($__internal_ad4e54cf5465000faa0c81f0d92ec8856b2292450c20db4e7873be6c37cee1de_prof);

        
        $__internal_796ef6f2ff947858ae2a8738b919164ca29e9ed6800ec112d090e50bf99f3c8f->leave($__internal_796ef6f2ff947858ae2a8738b919164ca29e9ed6800ec112d090e50bf99f3c8f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c817711a88d26434d258dce3212c6d7eafba02f9c2c8e4d1018cd191ef1f936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c817711a88d26434d258dce3212c6d7eafba02f9c2c8e4d1018cd191ef1f936->enter($__internal_9c817711a88d26434d258dce3212c6d7eafba02f9c2c8e4d1018cd191ef1f936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f46db15af8a809670ef3da2a1b1eb835f3782d6886f4360a6182989adb88bfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46db15af8a809670ef3da2a1b1eb835f3782d6886f4360a6182989adb88bfb5->enter($__internal_f46db15af8a809670ef3da2a1b1eb835f3782d6886f4360a6182989adb88bfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f46db15af8a809670ef3da2a1b1eb835f3782d6886f4360a6182989adb88bfb5->leave($__internal_f46db15af8a809670ef3da2a1b1eb835f3782d6886f4360a6182989adb88bfb5_prof);

        
        $__internal_9c817711a88d26434d258dce3212c6d7eafba02f9c2c8e4d1018cd191ef1f936->leave($__internal_9c817711a88d26434d258dce3212c6d7eafba02f9c2c8e4d1018cd191ef1f936_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d82081ac88a0a438330c6a5629890efc357e17706e129ce4e616383848138c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82081ac88a0a438330c6a5629890efc357e17706e129ce4e616383848138c8b->enter($__internal_d82081ac88a0a438330c6a5629890efc357e17706e129ce4e616383848138c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc5e2a149e145f911a1142f4bf0b1d223da60113abeab2df330367ed59d911cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5e2a149e145f911a1142f4bf0b1d223da60113abeab2df330367ed59d911cd->enter($__internal_dc5e2a149e145f911a1142f4bf0b1d223da60113abeab2df330367ed59d911cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc5e2a149e145f911a1142f4bf0b1d223da60113abeab2df330367ed59d911cd->leave($__internal_dc5e2a149e145f911a1142f4bf0b1d223da60113abeab2df330367ed59d911cd_prof);

        
        $__internal_d82081ac88a0a438330c6a5629890efc357e17706e129ce4e616383848138c8b->leave($__internal_d82081ac88a0a438330c6a5629890efc357e17706e129ce4e616383848138c8b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
