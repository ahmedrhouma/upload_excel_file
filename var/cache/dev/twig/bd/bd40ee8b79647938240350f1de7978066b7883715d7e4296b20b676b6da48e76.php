<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_df1fd99b43e5296481d877e949cb736ca8a1792686b6769a4f3f312aea246bee extends Twig_Template
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
        $__internal_2716e6ccedff1011c84f1684fa21696954e77b5b4c382678599dd75bb58cc968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2716e6ccedff1011c84f1684fa21696954e77b5b4c382678599dd75bb58cc968->enter($__internal_2716e6ccedff1011c84f1684fa21696954e77b5b4c382678599dd75bb58cc968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_31d501af82453485b06ba22403c33912a906b0a6d4cbbd58e48db71e204e3438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d501af82453485b06ba22403c33912a906b0a6d4cbbd58e48db71e204e3438->enter($__internal_31d501af82453485b06ba22403c33912a906b0a6d4cbbd58e48db71e204e3438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2716e6ccedff1011c84f1684fa21696954e77b5b4c382678599dd75bb58cc968->leave($__internal_2716e6ccedff1011c84f1684fa21696954e77b5b4c382678599dd75bb58cc968_prof);

        
        $__internal_31d501af82453485b06ba22403c33912a906b0a6d4cbbd58e48db71e204e3438->leave($__internal_31d501af82453485b06ba22403c33912a906b0a6d4cbbd58e48db71e204e3438_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
