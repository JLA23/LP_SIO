<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_62af93c0e92c1f6e5e9f405840920078e09b2e8079a0d66f1d190ed48fac25cc extends Twig_Template
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
        $__internal_3bd9278d81ced795ab58a1f19ce2b2046bd582d433f672f51861f4371db1c760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd9278d81ced795ab58a1f19ce2b2046bd582d433f672f51861f4371db1c760->enter($__internal_3bd9278d81ced795ab58a1f19ce2b2046bd582d433f672f51861f4371db1c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd9278d81ced795ab58a1f19ce2b2046bd582d433f672f51861f4371db1c760->leave($__internal_3bd9278d81ced795ab58a1f19ce2b2046bd582d433f672f51861f4371db1c760_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b68a25908190d2a7a04636d2550024a0ad49f486c68ea7776f423927a825ce89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68a25908190d2a7a04636d2550024a0ad49f486c68ea7776f423927a825ce89->enter($__internal_b68a25908190d2a7a04636d2550024a0ad49f486c68ea7776f423927a825ce89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b68a25908190d2a7a04636d2550024a0ad49f486c68ea7776f423927a825ce89->leave($__internal_b68a25908190d2a7a04636d2550024a0ad49f486c68ea7776f423927a825ce89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93293a131e9dc7502829e3227d297d9b2e3bb74a52e0707d3f55a84e2f4940d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93293a131e9dc7502829e3227d297d9b2e3bb74a52e0707d3f55a84e2f4940d6->enter($__internal_93293a131e9dc7502829e3227d297d9b2e3bb74a52e0707d3f55a84e2f4940d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93293a131e9dc7502829e3227d297d9b2e3bb74a52e0707d3f55a84e2f4940d6->leave($__internal_93293a131e9dc7502829e3227d297d9b2e3bb74a52e0707d3f55a84e2f4940d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58b01662cf91142abbaf4bafdfac07d60583581b1ff31cb746554f8f44ac69c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b01662cf91142abbaf4bafdfac07d60583581b1ff31cb746554f8f44ac69c1->enter($__internal_58b01662cf91142abbaf4bafdfac07d60583581b1ff31cb746554f8f44ac69c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58b01662cf91142abbaf4bafdfac07d60583581b1ff31cb746554f8f44ac69c1->leave($__internal_58b01662cf91142abbaf4bafdfac07d60583581b1ff31cb746554f8f44ac69c1_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\projets\\LP_SIO\\SiteSIO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
