<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @AdvancedParameters/memcache_servers.html.twig */
class __TwigTemplate_0ad3314b5434656ac5310bd8b0db312c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'perfs_memcache_servers' => [$this, 'block_perfs_memcache_servers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('perfs_memcache_servers', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_memcache_servers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add server", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Test Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        yield "</span></th>
                <th><span class=\"title_box\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IP Address", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Port", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Weight", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["servers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 63
            yield "                <tr id=\"row_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 63), "html", null, true);
            yield "\">
                    <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                    <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                    <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                    <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "weight", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 69
            $context["removeMsg"] = json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Do you really want to remove the server %serverIp%:%serverPort% ?", ["%serverIp%" => CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 69), "%serverPort%" => CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 69)], "Admin.Advparameters.Notification"));
            // line 70
            yield "                        <a class=\"btn btn-default\" href=\"\"
                           onclick=\"app.removeServer(";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 71), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["removeMsg"] ?? null), "html", null, true);
            yield ");\">
                          <i class=\"material-icons\">remove_circle</i> ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove", [], "Admin.Actions"), "html", null, true);
            yield "
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "            </tbody>
        </table>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@AdvancedParameters/memcache_servers.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  165 => 77,  154 => 72,  148 => 71,  145 => 70,  143 => 69,  138 => 67,  134 => 66,  130 => 65,  126 => 64,  121 => 63,  117 => 62,  109 => 57,  105 => 56,  101 => 55,  97 => 54,  84 => 44,  80 => 43,  73 => 39,  66 => 35,  57 => 28,  46 => 27,  43 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@AdvancedParameters/memcache_servers.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/memcache_servers.html.twig");
    }
}
