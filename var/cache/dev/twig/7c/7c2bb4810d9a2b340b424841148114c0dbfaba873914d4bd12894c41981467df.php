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
        $__internal_8c17bb7bef9701318551164b3b948380b5564d0c0c06dcdadb25db3ace6b092b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c17bb7bef9701318551164b3b948380b5564d0c0c06dcdadb25db3ace6b092b->enter($__internal_8c17bb7bef9701318551164b3b948380b5564d0c0c06dcdadb25db3ace6b092b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_24ef6380b5d31a901c87c13c5c2067aed1fff3bd45870524960e67f79d46037d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ef6380b5d31a901c87c13c5c2067aed1fff3bd45870524960e67f79d46037d->enter($__internal_24ef6380b5d31a901c87c13c5c2067aed1fff3bd45870524960e67f79d46037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8c17bb7bef9701318551164b3b948380b5564d0c0c06dcdadb25db3ace6b092b->leave($__internal_8c17bb7bef9701318551164b3b948380b5564d0c0c06dcdadb25db3ace6b092b_prof);

        
        $__internal_24ef6380b5d31a901c87c13c5c2067aed1fff3bd45870524960e67f79d46037d->leave($__internal_24ef6380b5d31a901c87c13c5c2067aed1fff3bd45870524960e67f79d46037d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4de3f4341fab747fdf489629d9f87c0aaa9eb92d7532a14e0e5038915d88d057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de3f4341fab747fdf489629d9f87c0aaa9eb92d7532a14e0e5038915d88d057->enter($__internal_4de3f4341fab747fdf489629d9f87c0aaa9eb92d7532a14e0e5038915d88d057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e447f8704f74e0f23592c83e164c5676223df1f459a042805c85ab2d6f53c793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e447f8704f74e0f23592c83e164c5676223df1f459a042805c85ab2d6f53c793->enter($__internal_e447f8704f74e0f23592c83e164c5676223df1f459a042805c85ab2d6f53c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e447f8704f74e0f23592c83e164c5676223df1f459a042805c85ab2d6f53c793->leave($__internal_e447f8704f74e0f23592c83e164c5676223df1f459a042805c85ab2d6f53c793_prof);

        
        $__internal_4de3f4341fab747fdf489629d9f87c0aaa9eb92d7532a14e0e5038915d88d057->leave($__internal_4de3f4341fab747fdf489629d9f87c0aaa9eb92d7532a14e0e5038915d88d057_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9430edab59145e710e77998656ee774561b57ff03335f23caa0e540e74f997f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9430edab59145e710e77998656ee774561b57ff03335f23caa0e540e74f997f->enter($__internal_f9430edab59145e710e77998656ee774561b57ff03335f23caa0e540e74f997f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c0f329a59440604f4d47f630ed83561e810333753d1770e4e34152c74b22b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0f329a59440604f4d47f630ed83561e810333753d1770e4e34152c74b22b04->enter($__internal_1c0f329a59440604f4d47f630ed83561e810333753d1770e4e34152c74b22b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c0f329a59440604f4d47f630ed83561e810333753d1770e4e34152c74b22b04->leave($__internal_1c0f329a59440604f4d47f630ed83561e810333753d1770e4e34152c74b22b04_prof);

        
        $__internal_f9430edab59145e710e77998656ee774561b57ff03335f23caa0e540e74f997f->leave($__internal_f9430edab59145e710e77998656ee774561b57ff03335f23caa0e540e74f997f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dbd6f4336a8ab26a9d1b04bb562bf06a263802b572a61b8dc02c7d4ae7145fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dbd6f4336a8ab26a9d1b04bb562bf06a263802b572a61b8dc02c7d4ae7145fa->enter($__internal_9dbd6f4336a8ab26a9d1b04bb562bf06a263802b572a61b8dc02c7d4ae7145fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c19cca16d1db60dcb2b1d1406239788f3799503f32038ad5d33e7ea5787f3a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19cca16d1db60dcb2b1d1406239788f3799503f32038ad5d33e7ea5787f3a9e->enter($__internal_c19cca16d1db60dcb2b1d1406239788f3799503f32038ad5d33e7ea5787f3a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c19cca16d1db60dcb2b1d1406239788f3799503f32038ad5d33e7ea5787f3a9e->leave($__internal_c19cca16d1db60dcb2b1d1406239788f3799503f32038ad5d33e7ea5787f3a9e_prof);

        
        $__internal_9dbd6f4336a8ab26a9d1b04bb562bf06a263802b572a61b8dc02c7d4ae7145fa->leave($__internal_9dbd6f4336a8ab26a9d1b04bb562bf06a263802b572a61b8dc02c7d4ae7145fa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fde6fdd7bb3f502b7eccc888b4a925c49836b0e66e40e90219c52d573d090ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fde6fdd7bb3f502b7eccc888b4a925c49836b0e66e40e90219c52d573d090ae->enter($__internal_7fde6fdd7bb3f502b7eccc888b4a925c49836b0e66e40e90219c52d573d090ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_94b8385b1ca8031df4b12124204dd9b6d8aa268ff1bc32c7cf5af92788b5d9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b8385b1ca8031df4b12124204dd9b6d8aa268ff1bc32c7cf5af92788b5d9b5->enter($__internal_94b8385b1ca8031df4b12124204dd9b6d8aa268ff1bc32c7cf5af92788b5d9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_94b8385b1ca8031df4b12124204dd9b6d8aa268ff1bc32c7cf5af92788b5d9b5->leave($__internal_94b8385b1ca8031df4b12124204dd9b6d8aa268ff1bc32c7cf5af92788b5d9b5_prof);

        
        $__internal_7fde6fdd7bb3f502b7eccc888b4a925c49836b0e66e40e90219c52d573d090ae->leave($__internal_7fde6fdd7bb3f502b7eccc888b4a925c49836b0e66e40e90219c52d573d090ae_prof);

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
