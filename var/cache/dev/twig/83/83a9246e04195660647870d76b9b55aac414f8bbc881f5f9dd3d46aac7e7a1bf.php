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
        $__internal_4ce2709694aba9467be385dc3c77616f0af8cbf421db2ec99f1814822b0bc970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce2709694aba9467be385dc3c77616f0af8cbf421db2ec99f1814822b0bc970->enter($__internal_4ce2709694aba9467be385dc3c77616f0af8cbf421db2ec99f1814822b0bc970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_0f45da6684e8a04d557aa2b2a8833d54d176687644f00ab87210f9a7a9089250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f45da6684e8a04d557aa2b2a8833d54d176687644f00ab87210f9a7a9089250->enter($__internal_0f45da6684e8a04d557aa2b2a8833d54d176687644f00ab87210f9a7a9089250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

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
        
        $__internal_4ce2709694aba9467be385dc3c77616f0af8cbf421db2ec99f1814822b0bc970->leave($__internal_4ce2709694aba9467be385dc3c77616f0af8cbf421db2ec99f1814822b0bc970_prof);

        
        $__internal_0f45da6684e8a04d557aa2b2a8833d54d176687644f00ab87210f9a7a9089250->leave($__internal_0f45da6684e8a04d557aa2b2a8833d54d176687644f00ab87210f9a7a9089250_prof);

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
