<?php

/* test.html.twig */
class __TwigTemplate_5415a2a9267ae74bd2d440c6cfaaced2beedf376527f51ce19f9083494d0c5d1 extends Twig_Template
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
        $__internal_a04979263e4150e4215cec6bb8df0fdd9868cdf647f9aefe75975d4ef80bd39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04979263e4150e4215cec6bb8df0fdd9868cdf647f9aefe75975d4ef80bd39c->enter($__internal_a04979263e4150e4215cec6bb8df0fdd9868cdf647f9aefe75975d4ef80bd39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_2769c6ec4c0d0ae5cd4022967bfaa334ac3ea9597da9a560f83c7a67feb11da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2769c6ec4c0d0ae5cd4022967bfaa334ac3ea9597da9a560f83c7a67feb11da0->enter($__internal_2769c6ec4c0d0ae5cd4022967bfaa334ac3ea9597da9a560f83c7a67feb11da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
\t<title>import fichier</title>
</head>
<body>
\t<h1>import fichier </h1>
\t<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"file\" name=\"excelFile\"/><input type=\"submit\" name=\"btnInport\" value=\"Import Data form Excel\"/>
   
</body>
</html>
";
        
        $__internal_a04979263e4150e4215cec6bb8df0fdd9868cdf647f9aefe75975d4ef80bd39c->leave($__internal_a04979263e4150e4215cec6bb8df0fdd9868cdf647f9aefe75975d4ef80bd39c_prof);

        
        $__internal_2769c6ec4c0d0ae5cd4022967bfaa334ac3ea9597da9a560f83c7a67feb11da0->leave($__internal_2769c6ec4c0d0ae5cd4022967bfaa334ac3ea9597da9a560f83c7a67feb11da0_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
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
        return new Twig_Source("
<!DOCTYPE html>
<html>
<head>
\t<title>import fichier</title>
</head>
<body>
\t<h1>import fichier </h1>
\t<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"file\" name=\"excelFile\"/><input type=\"submit\" name=\"btnInport\" value=\"Import Data form Excel\"/>
   
</body>
</html>
", "test.html.twig", "C:\\wamp\\www\\test\\projet\\app\\Resources\\views\\test.html.twig");
    }
}
