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

/* base-navbar.html.twig */
class __TwigTemplate_eda27963d70fad9e66d0094e39ed607f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
    <a class=\"navbar-brand col-sm-3 col-md-2 me-0 ms-4\"
       href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("posts");
        echo "\">Micro Post App</a>
    <div class=\"w-100 order-1 order-md-0\">
        <ul class=\"navbar-nav px-3\">
            ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 7
            echo "                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_post");
            echo "\">+ ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.add_post"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 11
        echo "        </ul>
    </div>

    <div class=\"order-2 order-md-1\">
        <ul class=\"navbar-nav px-3\">
            ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 17
            echo "                <li class=\"nav-item text-nowrap border-right border-secondary\">
                    <a class=\"nav-link\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_view");
            echo "\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.notifications"), "html", null, true);
            echo "
                        <span class=\"badge bg-light ms-1\" id=\"notification-count\">
                            <span class=\"spinner-border spinner-border-sm text-dark\"></span>
                        </span>
                    </a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"#\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "fullName", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.signout"), "html", null, true);
            echo "</a>
                </li>
            ";
        } else {
            // line 32
            echo "                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.signin"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 36
        echo "        </ul>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base-navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  109 => 33,  106 => 32,  98 => 29,  92 => 26,  82 => 19,  78 => 18,  75 => 17,  73 => 16,  66 => 11,  58 => 8,  55 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
    <a class=\"navbar-brand col-sm-3 col-md-2 me-0 ms-4\"
       href=\"{{ path('posts') }}\">Micro Post App</a>
    <div class=\"w-100 order-1 order-md-0\">
        <ul class=\"navbar-nav px-3\">
            {% if is_granted('ROLE_USER') %}
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"{{ path('add_post') }}\">+ {{ 'menu.add_post'|trans }}</a>
                </li>
            {% endif %}
        </ul>
    </div>

    <div class=\"order-2 order-md-1\">
        <ul class=\"navbar-nav px-3\">
            {% if is_granted('ROLE_USER') %}
                <li class=\"nav-item text-nowrap border-right border-secondary\">
                    <a class=\"nav-link\" href=\"{{ path('notification_view') }}\">
                        {{ 'menu.notifications'|trans }}
                        <span class=\"badge bg-light ms-1\" id=\"notification-count\">
                            <span class=\"spinner-border spinner-border-sm text-dark\"></span>
                        </span>
                    </a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"#\">{{ app.user.fullName }}</a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"{{ path('logout') }}\">{{ 'menu.signout'|trans }}</a>
                </li>
            {% else %}
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"{{ path('login') }}\">{{ 'menu.signin'|trans }}</a>
                </li>
            {% endif %}
        </ul>
    </div>
</nav>", "base-navbar.html.twig", "/app/templates/base-navbar.html.twig");
    }
}
