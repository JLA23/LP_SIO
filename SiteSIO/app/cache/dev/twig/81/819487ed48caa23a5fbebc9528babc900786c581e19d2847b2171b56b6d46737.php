<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c2e3c37847ec2e82147e76ef36099de720d33ef0eb1944f4227b71bacf37c7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e95512240809454f417aa636082429531313a2efe98dde59cf9a9ac9ebc33494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95512240809454f417aa636082429531313a2efe98dde59cf9a9ac9ebc33494->enter($__internal_e95512240809454f417aa636082429531313a2efe98dde59cf9a9ac9ebc33494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e95512240809454f417aa636082429531313a2efe98dde59cf9a9ac9ebc33494->leave($__internal_e95512240809454f417aa636082429531313a2efe98dde59cf9a9ac9ebc33494_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69e4c0db2eed40522eb7cefd51e54b038509b0b64aed09c10a1b9a44f07a5e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e4c0db2eed40522eb7cefd51e54b038509b0b64aed09c10a1b9a44f07a5e41->enter($__internal_69e4c0db2eed40522eb7cefd51e54b038509b0b64aed09c10a1b9a44f07a5e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69e4c0db2eed40522eb7cefd51e54b038509b0b64aed09c10a1b9a44f07a5e41->leave($__internal_69e4c0db2eed40522eb7cefd51e54b038509b0b64aed09c10a1b9a44f07a5e41_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0a3d9656777a511ad5777854cd1bb60795790af33f832913ceca1ee21295ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a3d9656777a511ad5777854cd1bb60795790af33f832913ceca1ee21295ef7->enter($__internal_b0a3d9656777a511ad5777854cd1bb60795790af33f832913ceca1ee21295ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0a3d9656777a511ad5777854cd1bb60795790af33f832913ceca1ee21295ef7->leave($__internal_b0a3d9656777a511ad5777854cd1bb60795790af33f832913ceca1ee21295ef7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_918cf0b66288cc06f22a9c290f26dd31b80129a46069f1dc9ed84d08efe6a427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918cf0b66288cc06f22a9c290f26dd31b80129a46069f1dc9ed84d08efe6a427->enter($__internal_918cf0b66288cc06f22a9c290f26dd31b80129a46069f1dc9ed84d08efe6a427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_918cf0b66288cc06f22a9c290f26dd31b80129a46069f1dc9ed84d08efe6a427->leave($__internal_918cf0b66288cc06f22a9c290f26dd31b80129a46069f1dc9ed84d08efe6a427_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\LP_SIO\\SiteSIO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
