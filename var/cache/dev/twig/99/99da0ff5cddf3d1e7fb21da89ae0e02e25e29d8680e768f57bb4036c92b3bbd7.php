<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_dc30f7deaee4831afc19e0332a8a432e5ed08ef0f119f119595e696cc9f9c8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_090cdd7a288a2fbf0459f6725711b32c13dd8141c81904d6c2c67047d92b4161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090cdd7a288a2fbf0459f6725711b32c13dd8141c81904d6c2c67047d92b4161->enter($__internal_090cdd7a288a2fbf0459f6725711b32c13dd8141c81904d6c2c67047d92b4161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_976cc1bdef0756c270f48fe1915364adae922d351f0b07f00f25e0c3e4a60951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976cc1bdef0756c270f48fe1915364adae922d351f0b07f00f25e0c3e4a60951->enter($__internal_976cc1bdef0756c270f48fe1915364adae922d351f0b07f00f25e0c3e4a60951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090cdd7a288a2fbf0459f6725711b32c13dd8141c81904d6c2c67047d92b4161->leave($__internal_090cdd7a288a2fbf0459f6725711b32c13dd8141c81904d6c2c67047d92b4161_prof);

        
        $__internal_976cc1bdef0756c270f48fe1915364adae922d351f0b07f00f25e0c3e4a60951->leave($__internal_976cc1bdef0756c270f48fe1915364adae922d351f0b07f00f25e0c3e4a60951_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4e3555cc68b6e3dd690af5830aa0bb2a5ad07d827aa88423be968672237c185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e3555cc68b6e3dd690af5830aa0bb2a5ad07d827aa88423be968672237c185->enter($__internal_d4e3555cc68b6e3dd690af5830aa0bb2a5ad07d827aa88423be968672237c185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_07d90a8fb7bafd3a33c954d7d8fa004305a1fd56b035d317d4802f9495dc181e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d90a8fb7bafd3a33c954d7d8fa004305a1fd56b035d317d4802f9495dc181e->enter($__internal_07d90a8fb7bafd3a33c954d7d8fa004305a1fd56b035d317d4802f9495dc181e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_07d90a8fb7bafd3a33c954d7d8fa004305a1fd56b035d317d4802f9495dc181e->leave($__internal_07d90a8fb7bafd3a33c954d7d8fa004305a1fd56b035d317d4802f9495dc181e_prof);

        
        $__internal_d4e3555cc68b6e3dd690af5830aa0bb2a5ad07d827aa88423be968672237c185->leave($__internal_d4e3555cc68b6e3dd690af5830aa0bb2a5ad07d827aa88423be968672237c185_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
