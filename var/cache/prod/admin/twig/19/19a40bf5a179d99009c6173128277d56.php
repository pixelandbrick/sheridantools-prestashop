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

/* @PrestaShop/Admin/Component/Layout/head_tag.html.twig */
class __TwigTemplate_e9a5254535a2c0311f54090f2632e365 extends Template
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
            'headJavascripts' => [$this, 'block_headJavascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 30), "html", null, true);
        yield "favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 31), "html", null, true);
        yield "app_icon.png\" />

<title>";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "metaTitle", [], "any", false, false, false, 33)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "metaTitle", [], "any", false, false, false, 33), "html", null, true);
            yield " • ";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "shopName", [], "any", false, false, false, 33), "html", null, true);
        yield "</title>

<script type=\"text/javascript\">
  var help_class_name = '";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "controllerName", [], "any", false, false, false, 36), "html", null, true);
        yield "';
  var iso_user = '";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isoUser", [], "any", false, false, false, 37), "html", null, true);
        yield "';
  var lang_is_rtl = '";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "langIsRtl", [], "any", false, false, false, 38)), "html", null, true);
        yield "';
  var full_language_code = '";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "fullLanguageCode", [], "any", false, false, false, 39), "html", null, true);
        yield "';
  var full_cldr_language_code = '";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "fullCldrLanguageCode", [], "any", false, false, false, 40), "html", null, true);
        yield "';
  var country_iso_code = '";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "countryIsoCode", [], "any", false, false, false, 41), "html", null, true);
        yield "';
  var _PS_VERSION_ = '";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "psVersion", [], "any", false, false, false, 42), "html", null, true);
        yield "';
  var roundMode = ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "roundMode", [], "any", false, false, false, 43)), "html", null, true);
        yield ";
  var youEditFieldFor = '";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "editForLabel", [], "any", false, false, false, 44), "html", null, true);
        yield "';
  var new_order_msg = '";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new order has been placed on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "';
  var order_number_msg = '";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order number:", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ';
  var total_msg = '";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total:", [], "Admin.Global"), "html", null, true);
        yield " ';
  var from_msg = '";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From:", [], "Admin.Global"), "html", null, true);
        yield " ';
  var see_order_msg = '";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View this order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        yield "';
  var new_customer_msg = '";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new customer registered on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "';
  var customer_name_msg = '";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer name:", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ';
  var new_msg = '";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new message was posted on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "';
  var see_msg = '";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read this message", [], "Admin.Navigation.Header"), "html", null, true);
        yield "';
  var token = '";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "legacyToken", [], "any", false, false, false, 54), "html", null, true);
        yield "';
  var currentIndex = '";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentIndex", [], "any", false, false, false, 55), "html", null, true);
        yield "';
  var employee_token = '";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employeeToken", [], "any", false, false, false, 56), "html", null, true);
        yield "';
  var choose_language_translate = '";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose language:", [], "Admin.Actions"), "html", null, true);
        yield "';
  var default_language = '";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "defaultLanguage", [], "any", false, false, false, 58)), "html", null, true);
        yield "';
  var admin_modules_link = '";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage");
        yield "';
  var admin_notification_get_link = '";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications");
        yield "';
  var admin_notification_push_link = adminNotificationPushLink = '";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications_ack");
        yield "';
  var update_success_msg = '";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update successful", [], "Admin.Notifications.Success"), "html", null, true);
        yield "';
  var search_product_msg = '";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        yield "';
</script>

";
        // line 66
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@AdminNewTheme/public/preload.html.twig");
        yield "

";
        // line 73
        $context["displayBackOfficeHeaderRendered"] = $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeHeader");
        // line 74
        yield "
";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "cssFiles", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["css_uri"] => $context["css_media"]) {
            // line 76
            yield "  <link href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css_uri"], "html", null, true);
            yield "\" rel=\"stylesheet\" type=\"text/css\" media=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css_media"], "html", null, true);
            yield "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['css_uri'], $context['css_media'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "
";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 79)) {
            // line 80
            yield "  <script type=\"text/javascript\">
    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["k"] => $context["def"]) {
                // line 82
                yield "    var ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield " = ";
                yield json_encode($context["def"]);
                yield ";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['def'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "  </script>
";
        }
        // line 86
        yield "
";
        // line 87
        yield from $this->unwrap()->yieldBlock('headJavascripts', $context, $blocks);
        // line 88
        yield "
";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "jsFiles", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["js_uri"]) {
            // line 90
            yield "  <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js_uri"], "html", null, true);
            yield "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_uri'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "
";
        // line 94
        yield ($context["displayBackOfficeHeaderRendered"] ?? null);
        yield "
";
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headJavascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/head_tag.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  266 => 87,  259 => 94,  256 => 92,  247 => 90,  243 => 89,  240 => 88,  238 => 87,  235 => 86,  231 => 84,  220 => 82,  216 => 81,  213 => 80,  211 => 79,  208 => 78,  197 => 76,  193 => 75,  190 => 74,  188 => 73,  183 => 66,  177 => 63,  173 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  149 => 56,  145 => 55,  141 => 54,  137 => 53,  133 => 52,  129 => 51,  125 => 50,  121 => 49,  117 => 48,  113 => 47,  109 => 46,  105 => 45,  101 => 44,  97 => 43,  93 => 42,  89 => 41,  85 => 40,  81 => 39,  77 => 38,  73 => 37,  69 => 36,  59 => 33,  54 => 31,  50 => 30,  43 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/head_tag.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/head_tag.html.twig");
    }
}
