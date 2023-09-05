<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* notifications/notifications.html.twig */
class __TwigTemplate_f9b44a07e8c64cb5c8842868bb181fe9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notifications/notifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notifications/notifications.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "notifications/notifications.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"card\">
        ";
        // line 5
        if (twig_length_filter($this->env, (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "            <div class=\"card-body\">
                <h5>New notifications</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">
                    <a class=\"btn btn-light\" href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_mark_all");
            echo "\">
                        Mark all as read
                    </a>
                </li>
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 16
                echo "                    <li class=\"list-group-item\">
                        <div class=\"d-flex justify-content-between\">
                            ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["notification"], "likedBy", [], "any", true, true, false, 18)) {
                    // line 19
                    echo "                                <div>
                                    <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_posts", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "likedBy", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20)]), "html", null, true);
                    echo "\">
                                        ";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "likedBy", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
                    echo "
                                    </a>
                                    likes your 
                                    <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "post", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
                    echo "\">
                                        post
                                    </a>
                                </div>
                            ";
                }
                // line 29
                echo "                            <a class=\"btn btn-sm btn-primary float-right\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_mark", ["id" => twig_get_attribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">
                                Ok
                            </a>                            
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </ul>
        ";
        } else {
            // line 37
            echo "        <div class=\"card-body\">
            <h5>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notifications.none"), "html", null, true);
            echo "</h5>
        </div>            
        ";
        }
        // line 41
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "notifications/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 41,  138 => 38,  135 => 37,  131 => 35,  118 => 29,  110 => 24,  104 => 21,  100 => 20,  97 => 19,  95 => 18,  91 => 16,  87 => 15,  80 => 11,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card\">
        {% if notifications|length %}
            <div class=\"card-body\">
                <h5>New notifications</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">
                    <a class=\"btn btn-light\" href=\"{{ path('notification_mark_all') }}\">
                        Mark all as read
                    </a>
                </li>
                {% for notification in notifications %}
                    <li class=\"list-group-item\">
                        <div class=\"d-flex justify-content-between\">
                            {% if notification.likedBy is defined %}
                                <div>
                                    <a href=\"{{ path('user_posts', {'username': notification.likedBy.username}) }}\">
                                        {{ notification.likedBy.username }}
                                    </a>
                                    likes your 
                                    <a href=\"{{ path('post', {'id': notification.post.id}) }}\">
                                        post
                                    </a>
                                </div>
                            {% endif %}
                            <a class=\"btn btn-sm btn-primary float-right\" href=\"{{ path('notification_mark', {'id': notification.id}) }}\">
                                Ok
                            </a>                            
                        </div>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
        <div class=\"card-body\">
            <h5>{{ 'notifications.none'|trans }}</h5>
        </div>            
        {% endif %}
    </div>
{% endblock %}", "notifications/notifications.html.twig", "/app/templates/notifications/notifications.html.twig");
    }
}
