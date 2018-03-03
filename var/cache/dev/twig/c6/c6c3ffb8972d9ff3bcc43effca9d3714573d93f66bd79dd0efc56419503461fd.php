<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2adeeb42e9053edc95cf33420bb6310e3f335dd5c96486485a63d60bfd08c071 extends Twig_Template
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
        $__internal_254acdafdff7e029d3d84f23435b02c1c8e3a536c7896838260e5c3a4d3fd785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254acdafdff7e029d3d84f23435b02c1c8e3a536c7896838260e5c3a4d3fd785->enter($__internal_254acdafdff7e029d3d84f23435b02c1c8e3a536c7896838260e5c3a4d3fd785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3c242163ccd3fefccdc4562856adc7dce3598745c1f98add236f1932d3a00c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c242163ccd3fefccdc4562856adc7dce3598745c1f98add236f1932d3a00c5b->enter($__internal_3c242163ccd3fefccdc4562856adc7dce3598745c1f98add236f1932d3a00c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_254acdafdff7e029d3d84f23435b02c1c8e3a536c7896838260e5c3a4d3fd785->leave($__internal_254acdafdff7e029d3d84f23435b02c1c8e3a536c7896838260e5c3a4d3fd785_prof);

        
        $__internal_3c242163ccd3fefccdc4562856adc7dce3598745c1f98add236f1932d3a00c5b->leave($__internal_3c242163ccd3fefccdc4562856adc7dce3598745c1f98add236f1932d3a00c5b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
