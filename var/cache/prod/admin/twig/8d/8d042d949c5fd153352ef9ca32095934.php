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

/* @PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig */
class __TwigTemplate_24c0fe6f4fa98a209cbe5c3a49049180 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "<meta charset=\"utf-8\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 29), "html", null, true);
        yield "favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 30), "html", null, true);
        yield "app_icon.png\" />

<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">
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
  var token_admin_orders = tokenAdminOrders = '";
        // line 55
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyAdminToken("AdminOrders");
        yield "';
  var token_admin_customers = tokenAdminCustomers = '";
        // line 56
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyAdminToken("AdminCustomers");
        yield "';
  var token_admin_customer_threads = tokenAdminCustomerThreads = '";
        // line 57
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyAdminToken("AdminCustomerThreads");
        yield "';
  var currentIndex = '";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentIndex", [], "any", false, false, false, 58), "html", null, true);
        yield "';
  var employee_token = '";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employeeToken", [], "any", false, false, false, 59), "html", null, true);
        yield "';
  var choose_language_translate = '";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose language:", [], "Admin.Actions"), "html", null, true);
        yield "';
  var default_language = '";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "defaultLanguage", [], "any", false, false, false, 61)), "html", null, true);
        yield "';
  var admin_modules_link = '";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage");
        yield "';
  var admin_notification_get_link = '";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications");
        yield "';
  var admin_notification_push_link = adminNotificationPushLink = '";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications_ack");
        yield "';
  var update_success_msg = '";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Successful update", [], "Admin.Notifications.Success"), "html", null, true);
        yield "';
  var search_product_msg = '";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        yield "';
</script>

";
        // line 70
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@AdminNewTheme/public/preload.html.twig");
        yield "

";
        // line 77
        $context["displayBackOfficeHeaderRendered"] = $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeHeader");
        // line 78
        yield "
";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "cssFiles", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["css_uri"] => $context["css_media"]) {
            // line 80
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
        // line 82
        yield "
";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 83)) {
            // line 84
            yield "  <script type=\"text/javascript\">
    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["k"] => $context["def"]) {
                // line 86
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
            // line 88
            yield "  </script>
";
        }
        // line 90
        yield "
";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "jsFiles", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["js_uri"]) {
            // line 92
            yield "  <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js_uri"], "html", null, true);
            yield "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_uri'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "
";
        // line 96
        yield ($context["displayBackOfficeHeaderRendered"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig";
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
        return array (  265 => 96,  262 => 94,  253 => 92,  249 => 91,  246 => 90,  242 => 88,  231 => 86,  227 => 85,  224 => 84,  222 => 83,  219 => 82,  208 => 80,  204 => 79,  201 => 78,  199 => 77,  194 => 70,  188 => 66,  184 => 65,  180 => 64,  176 => 63,  172 => 62,  168 => 61,  164 => 60,  160 => 59,  156 => 58,  152 => 57,  148 => 56,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  128 => 51,  124 => 50,  120 => 49,  116 => 48,  112 => 47,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  92 => 42,  88 => 41,  84 => 40,  80 => 39,  76 => 38,  72 => 37,  68 => 36,  58 => 33,  52 => 30,  48 => 29,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/head_tag.html.twig");
    }
}
