<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_2e17b6fd180e1813a8734960921620a8f8e51329635cf07b02bda48e87db1626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_651cbf7d4b0d5394e66e237efe9f7e1db6ebb95ddad470c1a044aeb9bedc9afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651cbf7d4b0d5394e66e237efe9f7e1db6ebb95ddad470c1a044aeb9bedc9afd->enter($__internal_651cbf7d4b0d5394e66e237efe9f7e1db6ebb95ddad470c1a044aeb9bedc9afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ed9442175300c50c451a25cdcf0b2b2d50eb5e7805a9031e0fb2f5c655559c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9442175300c50c451a25cdcf0b2b2d50eb5e7805a9031e0fb2f5c655559c66->enter($__internal_ed9442175300c50c451a25cdcf0b2b2d50eb5e7805a9031e0fb2f5c655559c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651cbf7d4b0d5394e66e237efe9f7e1db6ebb95ddad470c1a044aeb9bedc9afd->leave($__internal_651cbf7d4b0d5394e66e237efe9f7e1db6ebb95ddad470c1a044aeb9bedc9afd_prof);

        
        $__internal_ed9442175300c50c451a25cdcf0b2b2d50eb5e7805a9031e0fb2f5c655559c66->leave($__internal_ed9442175300c50c451a25cdcf0b2b2d50eb5e7805a9031e0fb2f5c655559c66_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9e96e7ef1135f187fb557da93698d8a466ce08cb99323033e0c257639feb2ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e96e7ef1135f187fb557da93698d8a466ce08cb99323033e0c257639feb2ea0->enter($__internal_9e96e7ef1135f187fb557da93698d8a466ce08cb99323033e0c257639feb2ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_81209097519931474a9f72a51098e967687f3a3d5b7d597d3b3a290932b2353b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81209097519931474a9f72a51098e967687f3a3d5b7d597d3b3a290932b2353b->enter($__internal_81209097519931474a9f72a51098e967687f3a3d5b7d597d3b3a290932b2353b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_81209097519931474a9f72a51098e967687f3a3d5b7d597d3b3a290932b2353b->leave($__internal_81209097519931474a9f72a51098e967687f3a3d5b7d597d3b3a290932b2353b_prof);

        
        $__internal_9e96e7ef1135f187fb557da93698d8a466ce08cb99323033e0c257639feb2ea0->leave($__internal_9e96e7ef1135f187fb557da93698d8a466ce08cb99323033e0c257639feb2ea0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9054ceabfbe2f4a5fbcdc433cbcd3cdc32aa03ae074c197336fd3522b3c33188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9054ceabfbe2f4a5fbcdc433cbcd3cdc32aa03ae074c197336fd3522b3c33188->enter($__internal_9054ceabfbe2f4a5fbcdc433cbcd3cdc32aa03ae074c197336fd3522b3c33188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04d987b799a4b1ff298d7c9503638e1aae7ce70ea693a1d71b3f2910639130f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d987b799a4b1ff298d7c9503638e1aae7ce70ea693a1d71b3f2910639130f5->enter($__internal_04d987b799a4b1ff298d7c9503638e1aae7ce70ea693a1d71b3f2910639130f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_04d987b799a4b1ff298d7c9503638e1aae7ce70ea693a1d71b3f2910639130f5->leave($__internal_04d987b799a4b1ff298d7c9503638e1aae7ce70ea693a1d71b3f2910639130f5_prof);

        
        $__internal_9054ceabfbe2f4a5fbcdc433cbcd3cdc32aa03ae074c197336fd3522b3c33188->leave($__internal_9054ceabfbe2f4a5fbcdc433cbcd3cdc32aa03ae074c197336fd3522b3c33188_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
