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
        $__internal_4a9a5e567422453050d18554bdbb2bbd748395d7198d3e86ff1cfaec58f4c4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9a5e567422453050d18554bdbb2bbd748395d7198d3e86ff1cfaec58f4c4b8->enter($__internal_4a9a5e567422453050d18554bdbb2bbd748395d7198d3e86ff1cfaec58f4c4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ac9620a2eafbc205f964d44300d9d03e14934b28ea6140dc75700c1c3dbc10b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9620a2eafbc205f964d44300d9d03e14934b28ea6140dc75700c1c3dbc10b3->enter($__internal_ac9620a2eafbc205f964d44300d9d03e14934b28ea6140dc75700c1c3dbc10b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_4a9a5e567422453050d18554bdbb2bbd748395d7198d3e86ff1cfaec58f4c4b8->leave($__internal_4a9a5e567422453050d18554bdbb2bbd748395d7198d3e86ff1cfaec58f4c4b8_prof);

        
        $__internal_ac9620a2eafbc205f964d44300d9d03e14934b28ea6140dc75700c1c3dbc10b3->leave($__internal_ac9620a2eafbc205f964d44300d9d03e14934b28ea6140dc75700c1c3dbc10b3_prof);

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
