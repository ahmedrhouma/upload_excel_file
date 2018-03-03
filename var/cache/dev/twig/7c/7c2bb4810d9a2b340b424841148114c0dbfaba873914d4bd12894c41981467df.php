<?php

/* base.html.twig */
class __TwigTemplate_6f06a2e167898936c970ccaddd03ba9d16b2a83ee7c92efba12230c1ad962997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6a2dc1309eba8a9825fde61ba2614b0fff8db156aee0e0e495a5f07d9e33410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a2dc1309eba8a9825fde61ba2614b0fff8db156aee0e0e495a5f07d9e33410->enter($__internal_b6a2dc1309eba8a9825fde61ba2614b0fff8db156aee0e0e495a5f07d9e33410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_236dc918fa0dd4a93879f2c0f7ee0fc38ff1941abe59c27547c85e302bebc2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236dc918fa0dd4a93879f2c0f7ee0fc38ff1941abe59c27547c85e302bebc2c0->enter($__internal_236dc918fa0dd4a93879f2c0f7ee0fc38ff1941abe59c27547c85e302bebc2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b6a2dc1309eba8a9825fde61ba2614b0fff8db156aee0e0e495a5f07d9e33410->leave($__internal_b6a2dc1309eba8a9825fde61ba2614b0fff8db156aee0e0e495a5f07d9e33410_prof);

        
        $__internal_236dc918fa0dd4a93879f2c0f7ee0fc38ff1941abe59c27547c85e302bebc2c0->leave($__internal_236dc918fa0dd4a93879f2c0f7ee0fc38ff1941abe59c27547c85e302bebc2c0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b33f419d415a3918b4bb21b7ad8d815aa40e370d025cf702648412ab8a0e52d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33f419d415a3918b4bb21b7ad8d815aa40e370d025cf702648412ab8a0e52d0->enter($__internal_b33f419d415a3918b4bb21b7ad8d815aa40e370d025cf702648412ab8a0e52d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b90206b229b287e97137b40c6b42a569928ad9b1ca462d5033bafd99eb16875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b90206b229b287e97137b40c6b42a569928ad9b1ca462d5033bafd99eb16875->enter($__internal_1b90206b229b287e97137b40c6b42a569928ad9b1ca462d5033bafd99eb16875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1b90206b229b287e97137b40c6b42a569928ad9b1ca462d5033bafd99eb16875->leave($__internal_1b90206b229b287e97137b40c6b42a569928ad9b1ca462d5033bafd99eb16875_prof);

        
        $__internal_b33f419d415a3918b4bb21b7ad8d815aa40e370d025cf702648412ab8a0e52d0->leave($__internal_b33f419d415a3918b4bb21b7ad8d815aa40e370d025cf702648412ab8a0e52d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e8c4df3e4451166ab0b9a1f6e639b993f7b52694b870be2578d89855743acef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8c4df3e4451166ab0b9a1f6e639b993f7b52694b870be2578d89855743acef->enter($__internal_8e8c4df3e4451166ab0b9a1f6e639b993f7b52694b870be2578d89855743acef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec7effa8d46e6f2abbf23b1fbf7593ca3e38b9aea227c82419c70ff3339747d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7effa8d46e6f2abbf23b1fbf7593ca3e38b9aea227c82419c70ff3339747d0->enter($__internal_ec7effa8d46e6f2abbf23b1fbf7593ca3e38b9aea227c82419c70ff3339747d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ec7effa8d46e6f2abbf23b1fbf7593ca3e38b9aea227c82419c70ff3339747d0->leave($__internal_ec7effa8d46e6f2abbf23b1fbf7593ca3e38b9aea227c82419c70ff3339747d0_prof);

        
        $__internal_8e8c4df3e4451166ab0b9a1f6e639b993f7b52694b870be2578d89855743acef->leave($__internal_8e8c4df3e4451166ab0b9a1f6e639b993f7b52694b870be2578d89855743acef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5229e676e0503ca0a4420f018deb570fcd0c06db3a63c165eaff3bc6db0b150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5229e676e0503ca0a4420f018deb570fcd0c06db3a63c165eaff3bc6db0b150->enter($__internal_f5229e676e0503ca0a4420f018deb570fcd0c06db3a63c165eaff3bc6db0b150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ad2e95383fd65ab0ce28fde31d01f821d78a0ad454cf136e1e7746597250a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad2e95383fd65ab0ce28fde31d01f821d78a0ad454cf136e1e7746597250a6b->enter($__internal_6ad2e95383fd65ab0ce28fde31d01f821d78a0ad454cf136e1e7746597250a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ad2e95383fd65ab0ce28fde31d01f821d78a0ad454cf136e1e7746597250a6b->leave($__internal_6ad2e95383fd65ab0ce28fde31d01f821d78a0ad454cf136e1e7746597250a6b_prof);

        
        $__internal_f5229e676e0503ca0a4420f018deb570fcd0c06db3a63c165eaff3bc6db0b150->leave($__internal_f5229e676e0503ca0a4420f018deb570fcd0c06db3a63c165eaff3bc6db0b150_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_882618034b94623933ae5804d7ad401dc63f58a22205d38485415e6a2ada1e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882618034b94623933ae5804d7ad401dc63f58a22205d38485415e6a2ada1e56->enter($__internal_882618034b94623933ae5804d7ad401dc63f58a22205d38485415e6a2ada1e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9e17d247f684e19d9d312a1d2909a25ef5411cb4bd96475408e2485a9da7aaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e17d247f684e19d9d312a1d2909a25ef5411cb4bd96475408e2485a9da7aaaf->enter($__internal_9e17d247f684e19d9d312a1d2909a25ef5411cb4bd96475408e2485a9da7aaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9e17d247f684e19d9d312a1d2909a25ef5411cb4bd96475408e2485a9da7aaaf->leave($__internal_9e17d247f684e19d9d312a1d2909a25ef5411cb4bd96475408e2485a9da7aaaf_prof);

        
        $__internal_882618034b94623933ae5804d7ad401dc63f58a22205d38485415e6a2ada1e56->leave($__internal_882618034b94623933ae5804d7ad401dc63f58a22205d38485415e6a2ada1e56_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\test\\projet\\app\\Resources\\views\\base.html.twig");
    }
}
