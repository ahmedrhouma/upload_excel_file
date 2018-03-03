<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_7a89753894f9548eefdabcdf5dcf6c29a7c7bcab2c73702bdefdfe1d01fb1669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd75904993dd780991a46df3636ab3b6aab0bc0e6e29439615e976dc95e139eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd75904993dd780991a46df3636ab3b6aab0bc0e6e29439615e976dc95e139eb->enter($__internal_cd75904993dd780991a46df3636ab3b6aab0bc0e6e29439615e976dc95e139eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_f3509dd2238faf00af71f0abec9f95f8d1f108cb7e3d0d794a6e64e195f99b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3509dd2238faf00af71f0abec9f95f8d1f108cb7e3d0d794a6e64e195f99b2e->enter($__internal_f3509dd2238faf00af71f0abec9f95f8d1f108cb7e3d0d794a6e64e195f99b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_cd75904993dd780991a46df3636ab3b6aab0bc0e6e29439615e976dc95e139eb->leave($__internal_cd75904993dd780991a46df3636ab3b6aab0bc0e6e29439615e976dc95e139eb_prof);

        
        $__internal_f3509dd2238faf00af71f0abec9f95f8d1f108cb7e3d0d794a6e64e195f99b2e->leave($__internal_f3509dd2238faf00af71f0abec9f95f8d1f108cb7e3d0d794a6e64e195f99b2e_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c832f5b50a244afa915b7130570b9a4d974345d0e719d8b82cd5c55ecf56c37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c832f5b50a244afa915b7130570b9a4d974345d0e719d8b82cd5c55ecf56c37b->enter($__internal_c832f5b50a244afa915b7130570b9a4d974345d0e719d8b82cd5c55ecf56c37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a3fbb59110ce8e511860f247fefe60bba4fc20257e52ac1382531d5d73d11016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fbb59110ce8e511860f247fefe60bba4fc20257e52ac1382531d5d73d11016->enter($__internal_a3fbb59110ce8e511860f247fefe60bba4fc20257e52ac1382531d5d73d11016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_a3fbb59110ce8e511860f247fefe60bba4fc20257e52ac1382531d5d73d11016->leave($__internal_a3fbb59110ce8e511860f247fefe60bba4fc20257e52ac1382531d5d73d11016_prof);

        
        $__internal_c832f5b50a244afa915b7130570b9a4d974345d0e719d8b82cd5c55ecf56c37b->leave($__internal_c832f5b50a244afa915b7130570b9a4d974345d0e719d8b82cd5c55ecf56c37b_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ca99797aefa4fb42fad407378365cede7bfb73743d4649cc7b0b443ca4b107c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca99797aefa4fb42fad407378365cede7bfb73743d4649cc7b0b443ca4b107c6->enter($__internal_ca99797aefa4fb42fad407378365cede7bfb73743d4649cc7b0b443ca4b107c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_eba1b512dffeb6947e8be08df29c3444631d650fe77983a217d896b28d8cb375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba1b512dffeb6947e8be08df29c3444631d650fe77983a217d896b28d8cb375->enter($__internal_eba1b512dffeb6947e8be08df29c3444631d650fe77983a217d896b28d8cb375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_eba1b512dffeb6947e8be08df29c3444631d650fe77983a217d896b28d8cb375->leave($__internal_eba1b512dffeb6947e8be08df29c3444631d650fe77983a217d896b28d8cb375_prof);

        
        $__internal_ca99797aefa4fb42fad407378365cede7bfb73743d4649cc7b0b443ca4b107c6->leave($__internal_ca99797aefa4fb42fad407378365cede7bfb73743d4649cc7b0b443ca4b107c6_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8e27af36478711c36659b18d87515e3877ecc751c22d69d67ffcf48b25266f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e27af36478711c36659b18d87515e3877ecc751c22d69d67ffcf48b25266f48->enter($__internal_8e27af36478711c36659b18d87515e3877ecc751c22d69d67ffcf48b25266f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ec864f9942a400daa5177532ba4040a41f80857cbaf20357af5231782e48b562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec864f9942a400daa5177532ba4040a41f80857cbaf20357af5231782e48b562->enter($__internal_ec864f9942a400daa5177532ba4040a41f80857cbaf20357af5231782e48b562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_ec864f9942a400daa5177532ba4040a41f80857cbaf20357af5231782e48b562->leave($__internal_ec864f9942a400daa5177532ba4040a41f80857cbaf20357af5231782e48b562_prof);

        
        $__internal_8e27af36478711c36659b18d87515e3877ecc751c22d69d67ffcf48b25266f48->leave($__internal_8e27af36478711c36659b18d87515e3877ecc751c22d69d67ffcf48b25266f48_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_714909c199f23e5a6e096613c307b75366648e40609406c10d7a3f540038ba54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714909c199f23e5a6e096613c307b75366648e40609406c10d7a3f540038ba54->enter($__internal_714909c199f23e5a6e096613c307b75366648e40609406c10d7a3f540038ba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_e3da531ae461c4cc94d53d6102a6b6566169d1fcfa3e92eef63b68de8f7d6036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3da531ae461c4cc94d53d6102a6b6566169d1fcfa3e92eef63b68de8f7d6036->enter($__internal_e3da531ae461c4cc94d53d6102a6b6566169d1fcfa3e92eef63b68de8f7d6036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_e3da531ae461c4cc94d53d6102a6b6566169d1fcfa3e92eef63b68de8f7d6036->leave($__internal_e3da531ae461c4cc94d53d6102a6b6566169d1fcfa3e92eef63b68de8f7d6036_prof);

        
        $__internal_714909c199f23e5a6e096613c307b75366648e40609406c10d7a3f540038ba54->leave($__internal_714909c199f23e5a6e096613c307b75366648e40609406c10d7a3f540038ba54_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0241831a9541e35ed023ab985106024b6a1e161a5ca191d8aa9781d97b7f9866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0241831a9541e35ed023ab985106024b6a1e161a5ca191d8aa9781d97b7f9866->enter($__internal_0241831a9541e35ed023ab985106024b6a1e161a5ca191d8aa9781d97b7f9866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_33b094d44db4562e9eb8f848510951dc6920a09ccb825f169e458b4b55b5b6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b094d44db4562e9eb8f848510951dc6920a09ccb825f169e458b4b55b5b6c6->enter($__internal_33b094d44db4562e9eb8f848510951dc6920a09ccb825f169e458b4b55b5b6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_33b094d44db4562e9eb8f848510951dc6920a09ccb825f169e458b4b55b5b6c6->leave($__internal_33b094d44db4562e9eb8f848510951dc6920a09ccb825f169e458b4b55b5b6c6_prof);

        
        $__internal_0241831a9541e35ed023ab985106024b6a1e161a5ca191d8aa9781d97b7f9866->leave($__internal_0241831a9541e35ed023ab985106024b6a1e161a5ca191d8aa9781d97b7f9866_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_92266f78ba5e4d4fa27849bcd78f0fd637927aa33c7b161687e80da5406ce1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92266f78ba5e4d4fa27849bcd78f0fd637927aa33c7b161687e80da5406ce1e6->enter($__internal_92266f78ba5e4d4fa27849bcd78f0fd637927aa33c7b161687e80da5406ce1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_60923bea1672a5994c4ca04c1cf39c52c26d9f3421b3b692f0e032d34add38fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60923bea1672a5994c4ca04c1cf39c52c26d9f3421b3b692f0e032d34add38fd->enter($__internal_60923bea1672a5994c4ca04c1cf39c52c26d9f3421b3b692f0e032d34add38fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_60923bea1672a5994c4ca04c1cf39c52c26d9f3421b3b692f0e032d34add38fd->leave($__internal_60923bea1672a5994c4ca04c1cf39c52c26d9f3421b3b692f0e032d34add38fd_prof);

        
        $__internal_92266f78ba5e4d4fa27849bcd78f0fd637927aa33c7b161687e80da5406ce1e6->leave($__internal_92266f78ba5e4d4fa27849bcd78f0fd637927aa33c7b161687e80da5406ce1e6_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a69c35287817fea364787ba31ecbaaa1fbc0cdc7b6ca4cc6007d54f696bf09d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69c35287817fea364787ba31ecbaaa1fbc0cdc7b6ca4cc6007d54f696bf09d5->enter($__internal_a69c35287817fea364787ba31ecbaaa1fbc0cdc7b6ca4cc6007d54f696bf09d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_0447ebff409856c6d27774f78403c648570211da033662c3b27e58fb6b025459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0447ebff409856c6d27774f78403c648570211da033662c3b27e58fb6b025459->enter($__internal_0447ebff409856c6d27774f78403c648570211da033662c3b27e58fb6b025459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_0447ebff409856c6d27774f78403c648570211da033662c3b27e58fb6b025459->leave($__internal_0447ebff409856c6d27774f78403c648570211da033662c3b27e58fb6b025459_prof);

        
        $__internal_a69c35287817fea364787ba31ecbaaa1fbc0cdc7b6ca4cc6007d54f696bf09d5->leave($__internal_a69c35287817fea364787ba31ecbaaa1fbc0cdc7b6ca4cc6007d54f696bf09d5_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1b41529233f28b90696c336183e338e6e750a2960dc5d44af4f25b65ea9b7790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b41529233f28b90696c336183e338e6e750a2960dc5d44af4f25b65ea9b7790->enter($__internal_1b41529233f28b90696c336183e338e6e750a2960dc5d44af4f25b65ea9b7790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c33a0671bd2a6c2ea21121b3af992dd4fc5b57fdcec126edbd9e4076b4430666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33a0671bd2a6c2ea21121b3af992dd4fc5b57fdcec126edbd9e4076b4430666->enter($__internal_c33a0671bd2a6c2ea21121b3af992dd4fc5b57fdcec126edbd9e4076b4430666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_c33a0671bd2a6c2ea21121b3af992dd4fc5b57fdcec126edbd9e4076b4430666->leave($__internal_c33a0671bd2a6c2ea21121b3af992dd4fc5b57fdcec126edbd9e4076b4430666_prof);

        
        $__internal_1b41529233f28b90696c336183e338e6e750a2960dc5d44af4f25b65ea9b7790->leave($__internal_1b41529233f28b90696c336183e338e6e750a2960dc5d44af4f25b65ea9b7790_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
