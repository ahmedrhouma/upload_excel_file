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
        $__internal_a358acb8c9e5d00465570b593f5c0be3920281b7135ea819fe53dcb38486c290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a358acb8c9e5d00465570b593f5c0be3920281b7135ea819fe53dcb38486c290->enter($__internal_a358acb8c9e5d00465570b593f5c0be3920281b7135ea819fe53dcb38486c290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_4ce061548e080a66a7c6b3b6ac0450177e91f84b12c52ba05f702b564bc06ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce061548e080a66a7c6b3b6ac0450177e91f84b12c52ba05f702b564bc06ebd->enter($__internal_4ce061548e080a66a7c6b3b6ac0450177e91f84b12c52ba05f702b564bc06ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_a358acb8c9e5d00465570b593f5c0be3920281b7135ea819fe53dcb38486c290->leave($__internal_a358acb8c9e5d00465570b593f5c0be3920281b7135ea819fe53dcb38486c290_prof);

        
        $__internal_4ce061548e080a66a7c6b3b6ac0450177e91f84b12c52ba05f702b564bc06ebd->leave($__internal_4ce061548e080a66a7c6b3b6ac0450177e91f84b12c52ba05f702b564bc06ebd_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_79cacbe60f555cd0a2bbcc98d1abc47bfb590ee6a5e2205d285102b45b89e6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cacbe60f555cd0a2bbcc98d1abc47bfb590ee6a5e2205d285102b45b89e6ad->enter($__internal_79cacbe60f555cd0a2bbcc98d1abc47bfb590ee6a5e2205d285102b45b89e6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e6c1aae06baca8280ea2de41ac06f35b8af57fe6bb41e2e3c797c52e0e6319e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c1aae06baca8280ea2de41ac06f35b8af57fe6bb41e2e3c797c52e0e6319e0->enter($__internal_e6c1aae06baca8280ea2de41ac06f35b8af57fe6bb41e2e3c797c52e0e6319e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_e6c1aae06baca8280ea2de41ac06f35b8af57fe6bb41e2e3c797c52e0e6319e0->leave($__internal_e6c1aae06baca8280ea2de41ac06f35b8af57fe6bb41e2e3c797c52e0e6319e0_prof);

        
        $__internal_79cacbe60f555cd0a2bbcc98d1abc47bfb590ee6a5e2205d285102b45b89e6ad->leave($__internal_79cacbe60f555cd0a2bbcc98d1abc47bfb590ee6a5e2205d285102b45b89e6ad_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_bd8a975fbed1126930b387e4da337b66eb83644986369aeee6d26f0cf6039965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8a975fbed1126930b387e4da337b66eb83644986369aeee6d26f0cf6039965->enter($__internal_bd8a975fbed1126930b387e4da337b66eb83644986369aeee6d26f0cf6039965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_0b2fe998faab555f1feffbd01a87736e5c19fa89d4dc3524fc684e1318057a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2fe998faab555f1feffbd01a87736e5c19fa89d4dc3524fc684e1318057a5e->enter($__internal_0b2fe998faab555f1feffbd01a87736e5c19fa89d4dc3524fc684e1318057a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_0b2fe998faab555f1feffbd01a87736e5c19fa89d4dc3524fc684e1318057a5e->leave($__internal_0b2fe998faab555f1feffbd01a87736e5c19fa89d4dc3524fc684e1318057a5e_prof);

        
        $__internal_bd8a975fbed1126930b387e4da337b66eb83644986369aeee6d26f0cf6039965->leave($__internal_bd8a975fbed1126930b387e4da337b66eb83644986369aeee6d26f0cf6039965_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bbb476431e5c1ee5c4afcb2c94bd82407897a8fa698970d069a271c1839d7126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb476431e5c1ee5c4afcb2c94bd82407897a8fa698970d069a271c1839d7126->enter($__internal_bbb476431e5c1ee5c4afcb2c94bd82407897a8fa698970d069a271c1839d7126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_640d564fea67283fad448b4a8d744db0f27343bf2c479d337b0b61113c12b3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640d564fea67283fad448b4a8d744db0f27343bf2c479d337b0b61113c12b3a1->enter($__internal_640d564fea67283fad448b4a8d744db0f27343bf2c479d337b0b61113c12b3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_640d564fea67283fad448b4a8d744db0f27343bf2c479d337b0b61113c12b3a1->leave($__internal_640d564fea67283fad448b4a8d744db0f27343bf2c479d337b0b61113c12b3a1_prof);

        
        $__internal_bbb476431e5c1ee5c4afcb2c94bd82407897a8fa698970d069a271c1839d7126->leave($__internal_bbb476431e5c1ee5c4afcb2c94bd82407897a8fa698970d069a271c1839d7126_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_f75f727f398cc295dce85efbf75dabe140dd896d0ffdbd82425a73b701068560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75f727f398cc295dce85efbf75dabe140dd896d0ffdbd82425a73b701068560->enter($__internal_f75f727f398cc295dce85efbf75dabe140dd896d0ffdbd82425a73b701068560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_da4db98bc6b351ef91b5b07a1a99cf615d48263a7b8c727947f4d476145d32a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4db98bc6b351ef91b5b07a1a99cf615d48263a7b8c727947f4d476145d32a4->enter($__internal_da4db98bc6b351ef91b5b07a1a99cf615d48263a7b8c727947f4d476145d32a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_da4db98bc6b351ef91b5b07a1a99cf615d48263a7b8c727947f4d476145d32a4->leave($__internal_da4db98bc6b351ef91b5b07a1a99cf615d48263a7b8c727947f4d476145d32a4_prof);

        
        $__internal_f75f727f398cc295dce85efbf75dabe140dd896d0ffdbd82425a73b701068560->leave($__internal_f75f727f398cc295dce85efbf75dabe140dd896d0ffdbd82425a73b701068560_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_6311a320b45fb99b83350f615a95a01693a9a95247e847eaf36a5892e8a39275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6311a320b45fb99b83350f615a95a01693a9a95247e847eaf36a5892e8a39275->enter($__internal_6311a320b45fb99b83350f615a95a01693a9a95247e847eaf36a5892e8a39275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d9f3ee4f5de980155c117f6d21b82de79726742cc6ee7e1242d53ee79ac086a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f3ee4f5de980155c117f6d21b82de79726742cc6ee7e1242d53ee79ac086a6->enter($__internal_d9f3ee4f5de980155c117f6d21b82de79726742cc6ee7e1242d53ee79ac086a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_d9f3ee4f5de980155c117f6d21b82de79726742cc6ee7e1242d53ee79ac086a6->leave($__internal_d9f3ee4f5de980155c117f6d21b82de79726742cc6ee7e1242d53ee79ac086a6_prof);

        
        $__internal_6311a320b45fb99b83350f615a95a01693a9a95247e847eaf36a5892e8a39275->leave($__internal_6311a320b45fb99b83350f615a95a01693a9a95247e847eaf36a5892e8a39275_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_81050c85a2c816f1d358935f1c2448ec55ec73d5000c9972d33f22855fe9ff8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81050c85a2c816f1d358935f1c2448ec55ec73d5000c9972d33f22855fe9ff8c->enter($__internal_81050c85a2c816f1d358935f1c2448ec55ec73d5000c9972d33f22855fe9ff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a6c979512dd77ffbbdb54fee6b27cb50eb5291de748c4c021c4e99f0c032b319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c979512dd77ffbbdb54fee6b27cb50eb5291de748c4c021c4e99f0c032b319->enter($__internal_a6c979512dd77ffbbdb54fee6b27cb50eb5291de748c4c021c4e99f0c032b319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_a6c979512dd77ffbbdb54fee6b27cb50eb5291de748c4c021c4e99f0c032b319->leave($__internal_a6c979512dd77ffbbdb54fee6b27cb50eb5291de748c4c021c4e99f0c032b319_prof);

        
        $__internal_81050c85a2c816f1d358935f1c2448ec55ec73d5000c9972d33f22855fe9ff8c->leave($__internal_81050c85a2c816f1d358935f1c2448ec55ec73d5000c9972d33f22855fe9ff8c_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_37b6f32a7ee002dae8e55dd5fa252e6b55878ad604d0952219ff2fd13379c6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b6f32a7ee002dae8e55dd5fa252e6b55878ad604d0952219ff2fd13379c6c4->enter($__internal_37b6f32a7ee002dae8e55dd5fa252e6b55878ad604d0952219ff2fd13379c6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_695725166d476ffa126e6f5cd7a7d9536423331ba8b031aa89c8ef41addc8d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695725166d476ffa126e6f5cd7a7d9536423331ba8b031aa89c8ef41addc8d16->enter($__internal_695725166d476ffa126e6f5cd7a7d9536423331ba8b031aa89c8ef41addc8d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_695725166d476ffa126e6f5cd7a7d9536423331ba8b031aa89c8ef41addc8d16->leave($__internal_695725166d476ffa126e6f5cd7a7d9536423331ba8b031aa89c8ef41addc8d16_prof);

        
        $__internal_37b6f32a7ee002dae8e55dd5fa252e6b55878ad604d0952219ff2fd13379c6c4->leave($__internal_37b6f32a7ee002dae8e55dd5fa252e6b55878ad604d0952219ff2fd13379c6c4_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_edf97caea5130b2ed102d2e53d839509b600381d02b729782e2634327ea0ee01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf97caea5130b2ed102d2e53d839509b600381d02b729782e2634327ea0ee01->enter($__internal_edf97caea5130b2ed102d2e53d839509b600381d02b729782e2634327ea0ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8a63f164eb46cb5591bb74d091e700e24716a68984155873c88b3908dcc62cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a63f164eb46cb5591bb74d091e700e24716a68984155873c88b3908dcc62cfd->enter($__internal_8a63f164eb46cb5591bb74d091e700e24716a68984155873c88b3908dcc62cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_8a63f164eb46cb5591bb74d091e700e24716a68984155873c88b3908dcc62cfd->leave($__internal_8a63f164eb46cb5591bb74d091e700e24716a68984155873c88b3908dcc62cfd_prof);

        
        $__internal_edf97caea5130b2ed102d2e53d839509b600381d02b729782e2634327ea0ee01->leave($__internal_edf97caea5130b2ed102d2e53d839509b600381d02b729782e2634327ea0ee01_prof);

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
