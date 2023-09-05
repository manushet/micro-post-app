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

/* post/singlePost.html.twig */
class __TwigTemplate_5d00cf9ff589e336fc9fee9885ba2c90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/singlePost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/singlePost.html.twig"));

        // line 1
        echo "<div class=\"d-flex justify-content-between align-items-top border-bottom border-gray mb-0 mt-3\">
    <div class=\"media text-muted\">
        <div>
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/user-avatar.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mr-2 rounded\">
        </div>
            <p class=\"media-body small lh-125\">
                <span class=\"d-block\">
                    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_posts", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\">
                        <strong class=\"text-gray-dark\">@";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "</strong> 
                    </a>
                    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">
                        <small>";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12), "d.m.Y H:i"), "html", null, true);
        echo "</small>
                    </a>
                </span>
                ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "text", [], "any", false, false, false, 15), "html", null, true);
        echo "
            </p>     
    </div>
    <div class=\"d-flex post-actions\">
        ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_post", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">
                <small class=\"d-block text-right\">Edit</small> 
            </a>
        ";
        }
        // line 24
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()))) {
            // line 25
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_post", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">
                <small class=\"d-block text-right text-red\">
                    Delete
                </small>    
            </a>    
        ";
        }
        // line 31
        echo "    </div>
</div>      ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "post/singlePost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  94 => 25,  91 => 24,  83 => 20,  81 => 19,  74 => 15,  68 => 12,  64 => 11,  59 => 9,  55 => 8,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex justify-content-between align-items-top border-bottom border-gray mb-0 mt-3\">
    <div class=\"media text-muted\">
        <div>
            <img src=\"{{ asset('build/images/user-avatar.png') }}\" alt=\"\" class=\"mr-2 rounded\">
        </div>
            <p class=\"media-body small lh-125\">
                <span class=\"d-block\">
                    <a href=\"{{ path('user_posts', {'username': post.user.username}) }}\">
                        <strong class=\"text-gray-dark\">@{{ post.user.username }}</strong> 
                    </a>
                    <a href=\"{{ path('post', {'id': post.id}) }}\">
                        <small>{{ post.createdAt|date(\"d.m.Y H:i\") }}</small>
                    </a>
                </span>
                {{ post. text }}
            </p>     
    </div>
    <div class=\"d-flex post-actions\">
        {% if is_granted('edit', post) %}
            <a href=\"{{ path('edit_post', {'id': post.id}) }}\">
                <small class=\"d-block text-right\">Edit</small> 
            </a>
        {% endif %}
        {% if is_granted('delete', post) %}
            <a href=\"{{ path('remove_post', {'id': post.id}) }}\">
                <small class=\"d-block text-right text-red\">
                    Delete
                </small>    
            </a>    
        {% endif %}
    </div>
</div>      ", "post/singlePost.html.twig", "/app/templates/post/singlePost.html.twig");
    }
}
