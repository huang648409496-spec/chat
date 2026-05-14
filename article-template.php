<?php
/**
 * =============================================================================
 *  premier-cables.com — Article Template (article-template.php)
 *
 *  USAGE:
 *    Populate the $article array, then include this file from your route:
 *
 *      $article = [
 *        'title'           => 'What is Automotive Ethernet?',
 *        'slug'            => 'what-is-automotive-ethernet',
 *        'meta_description'=> 'Automotive Ethernet replaces CAN/LVDS...',
 *        'hero_tag'        => 'Pillar Guide',
 *        'hero_desc'       => 'Long description (80-120 words)...',
 *        'tldr'            => ['Point 1', 'Point 2', ...],
 *        'definition'      => 'Automotive Ethernet is ...',
 *        'toc'             => [['id'=>'sec1','label'=>'What is...'], ...],
 *        'sections'        => ['<section ...>...</section>', ...],
 *        'related_articles'=> [['url'=>'...','title'=>'...'], ...],
 *        'faqs'            => [['question'=>'...','answer'=>'...'], ...],
 *        'cta_title'       => 'Need a Custom Cable?',
 *        'cta_text'        => 'Send us your specs ...',
 *        'cta_button_text' => 'Get a Quote',
 *        'cta_button_url'  => '/contact-us',
 *        'author_name'     => 'David Chen',
 *        'author_linkedin' => 'https://linkedin.com/in/davidchen',
 *        'reviewed_by'     => 'Senior Engineer',
 *        'last_updated'    => '2026-05-14',
 *        'published_date'  => '2026-05-01',
 *        'hero_image'      => '/uploads/hero.webp',
 *        'breadcrumb'      => [['url'=>'/','label'=>'Home'], ...],
 *        'category'        => 'Automotive Ethernet',
 *      ];
 *      include 'article-template.php';
 *
 *  AUTO-INJECTED:
 *    - Article (TechArticle) Schema JSON-LD
 *    - FAQPage Schema JSON-LD
 *    - BreadcrumbList Schema JSON-LD
 *    - Open Graph + Twitter Card tags
 *    - Canonical URL
 *    - article.css with cache-busting query string
 *
 *  SAFETY:
 *    - All scalar output escaped via h()
 *    - JSON-LD encoded with JSON_UNESCAPED_SLASHES + JSON_UNESCAPED_UNICODE
 *    - $article['sections'] is rendered as raw HTML — caller MUST sanitize
 *      any user-supplied data before passing it.
 * =============================================================================
 */

// ---- helpers ---------------------------------------------------------------
if (!function_exists('h')) {
    function h($v): string { return htmlspecialchars((string)$v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
}
if (!function_exists('jsonh')) {
    function jsonh($data): string {
        return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}

// ---- site constants --------------------------------------------------------
$site_name  = 'Premier Cables';
$site_url   = 'https://www.premier-cables.com';
$logo_url   = $site_url . '/assets/logo.png';
$twitter_at = '@premier_cables';

// ---- normalize $article ----------------------------------------------------
$article          = $article ?? [];
$title            = $article['title']            ?? 'Untitled';
$slug             = $article['slug']             ?? '';
$meta_description = $article['meta_description'] ?? '';
$canonical        = $site_url . '/news/' . $slug . '/';
$hero_tag         = $article['hero_tag']         ?? '';
$hero_desc        = $article['hero_desc']        ?? '';
$hero_image       = $article['hero_image']       ?? '';
$hero_image_full  = $hero_image ? ($site_url . $hero_image) : '';
$tldr             = $article['tldr']             ?? [];
$definition       = $article['definition']       ?? '';
$toc              = $article['toc']              ?? [];
$sections         = $article['sections']         ?? [];
$related_articles = $article['related_articles'] ?? [];
$faqs             = $article['faqs']             ?? [];
$cta_title        = $article['cta_title']        ?? 'Get in Touch';
$cta_text         = $article['cta_text']         ?? '';
$cta_button_text  = $article['cta_button_text']  ?? 'Contact Us';
$cta_button_url   = $article['cta_button_url']   ?? '/contact-us';
$author_name      = $article['author_name']      ?? '';
$author_linkedin  = $article['author_linkedin']  ?? '';
$reviewed_by      = $article['reviewed_by']      ?? '';
$last_updated     = $article['last_updated']     ?? date('Y-m-d');
$published_date   = $article['published_date']   ?? $last_updated;
$breadcrumb       = $article['breadcrumb']       ?? [];
$category         = $article['category']         ?? '';

// ---- CSS cache-busting -----------------------------------------------------
$css_path = __DIR__ . '/assets/article.css';
$css_ver  = is_file($css_path) ? filemtime($css_path) : '1';

// ---- Schema: Article -------------------------------------------------------
$article_schema = [
    '@context'         => 'https://schema.org',
    '@type'            => 'TechArticle',
    'headline'         => $title,
    'description'      => $meta_description,
    'image'            => $hero_image_full ?: ($site_url . '/assets/og-default.png'),
    'datePublished'    => date('c', strtotime($published_date)),
    'dateModified'     => date('c', strtotime($last_updated)),
    'author'           => [
        '@type' => 'Person',
        'name'  => $author_name ?: $site_name,
        'url'   => $author_linkedin ?: null,
    ],
    'publisher'        => [
        '@type' => 'Organization',
        'name'  => $site_name,
        'logo'  => ['@type' => 'ImageObject', 'url' => $logo_url],
    ],
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $canonical],
    'articleSection'   => $category,
];

// ---- Schema: FAQPage -------------------------------------------------------
$faq_schema = null;
if (!empty($faqs)) {
    $faq_schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => array_map(function ($f) {
            return [
                '@type'          => 'Question',
                'name'           => $f['question'] ?? '',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text'  => $f['answer'] ?? '',
                ],
            ];
        }, $faqs),
    ];
}

// ---- Schema: BreadcrumbList -----------------------------------------------
$breadcrumb_schema = null;
if (!empty($breadcrumb)) {
    $items = [];
    foreach ($breadcrumb as $i => $crumb) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['label'] ?? '',
            'item'     => isset($crumb['url']) ? $site_url . $crumb['url'] : null,
        ];
    }
    $breadcrumb_schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= h($title) ?> | <?= h($site_name) ?></title>
<meta name="description" content="<?= h($meta_description) ?>">
<link rel="canonical" href="<?= h($canonical) ?>">

<!-- Open Graph -->
<meta property="og:type" content="article">
<meta property="og:url" content="<?= h($canonical) ?>">
<meta property="og:title" content="<?= h($title) ?>">
<meta property="og:description" content="<?= h($meta_description) ?>">
<meta property="og:image" content="<?= h($hero_image_full) ?>">
<meta property="og:site_name" content="<?= h($site_name) ?>">
<meta property="article:published_time" content="<?= h(date('c', strtotime($published_date))) ?>">
<meta property="article:modified_time" content="<?= h(date('c', strtotime($last_updated))) ?>">
<?php if ($author_name): ?>
<meta property="article:author" content="<?= h($author_name) ?>">
<?php endif; ?>
<?php if ($category): ?>
<meta property="article:section" content="<?= h($category) ?>">
<?php endif; ?>

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?= h($twitter_at) ?>">
<meta name="twitter:title" content="<?= h($title) ?>">
<meta name="twitter:description" content="<?= h($meta_description) ?>">
<meta name="twitter:image" content="<?= h($hero_image_full) ?>">

<!-- JSON-LD: TechArticle -->
<script type="application/ld+json"><?= jsonh($article_schema) ?></script>

<?php if ($faq_schema): ?>
<!-- JSON-LD: FAQPage -->
<script type="application/ld+json"><?= jsonh($faq_schema) ?></script>
<?php endif; ?>

<?php if ($breadcrumb_schema): ?>
<!-- JSON-LD: BreadcrumbList -->
<script type="application/ld+json"><?= jsonh($breadcrumb_schema) ?></script>
<?php endif; ?>

<link rel="stylesheet" href="/assets/article.css?v=<?= h($css_ver) ?>">
</head>
<body>

<article class="pcm-article">

  <?php if (!empty($breadcrumb)): ?>
  <nav class="pcm-breadcrumb" aria-label="Breadcrumb">
    <ol>
      <?php foreach ($breadcrumb as $i => $crumb): ?>
        <li>
          <?php if ($i < count($breadcrumb) - 1 && !empty($crumb['url'])): ?>
            <a href="<?= h($crumb['url']) ?>"><?= h($crumb['label']) ?></a>
          <?php else: ?>
            <span aria-current="page"><?= h($crumb['label']) ?></span>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ol>
  </nav>
  <?php endif; ?>

  <header class="pcm-hero">
    <?php if ($hero_tag): ?>
      <span class="pcm-hero-tag"><?= h($hero_tag) ?></span>
    <?php endif; ?>
    <h1><?= h($title) ?></h1>
    <?php if ($hero_desc): ?>
      <p class="pcm-hero-desc"><?= h($hero_desc) ?></p>
    <?php endif; ?>
  </header>

  <?php if (!empty($tldr)): ?>
  <aside class="pcm-tldr" aria-label="Key takeaways">
    <h2 class="pcm-tldr-title">TL;DR — Key Takeaways</h2>
    <ul>
      <?php foreach ($tldr as $point): ?>
        <li><?= h($point) ?></li>
      <?php endforeach; ?>
    </ul>
  </aside>
  <?php endif; ?>

  <?php if ($definition): ?>
  <aside class="pcm-definition" aria-label="Definition">
    <p><strong>Definition:</strong> <?= h($definition) ?></p>
  </aside>
  <?php endif; ?>

  <?php if (!empty($toc)): ?>
  <nav class="pcm-toc" aria-label="Table of contents">
    <h2 class="pcm-toc-title">Contents</h2>
    <ol>
      <?php foreach ($toc as $item): ?>
        <li><a href="#<?= h($item['id']) ?>"><?= h($item['label']) ?></a></li>
      <?php endforeach; ?>
    </ol>
  </nav>
  <?php endif; ?>

  <?php
  // Sections are pre-rendered HTML — caller must sanitize any user content.
  foreach ($sections as $section_html) {
      echo $section_html;
  }
  ?>

  <?php if (!empty($faqs)): ?>
  <section class="pcm-faq" id="faq" aria-label="Frequently asked questions">
    <h2>Frequently Asked Questions</h2>
    <?php foreach ($faqs as $faq): ?>
      <details>
        <summary><?= h($faq['question'] ?? '') ?></summary>
        <p><?= h($faq['answer'] ?? '') ?></p>
      </details>
    <?php endforeach; ?>
  </section>
  <?php endif; ?>

  <?php if (!empty($related_articles)): ?>
  <aside class="pcm-related" aria-label="Related articles">
    <h2>Related Articles</h2>
    <ul>
      <?php foreach ($related_articles as $rel): ?>
        <li><a href="<?= h($rel['url']) ?>"><?= h($rel['title']) ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
  <?php endif; ?>

  <section class="pcm-cta" aria-label="Call to action">
    <h2><?= h($cta_title) ?></h2>
    <?php if ($cta_text): ?>
      <p><?= h($cta_text) ?></p>
    <?php endif; ?>
    <a class="pcm-cta-btn" href="<?= h($cta_button_url) ?>"><?= h($cta_button_text) ?> →</a>
  </section>

  <footer class="pcm-meta">
    <?php if ($author_name): ?>
      <p>
        <strong>Author:</strong> <?= h($author_name) ?>
        <?php if ($author_linkedin): ?>
          — <a href="<?= h($author_linkedin) ?>" rel="author noopener" target="_blank">LinkedIn</a>
        <?php endif; ?>
      </p>
    <?php endif; ?>
    <?php if ($reviewed_by): ?>
      <p><strong>Reviewed by:</strong> <?= h($reviewed_by) ?></p>
    <?php endif; ?>
    <p><strong>Published:</strong> <time datetime="<?= h($published_date) ?>"><?= h(date('F j, Y', strtotime($published_date))) ?></time></p>
    <p><strong>Last Updated:</strong> <time datetime="<?= h($last_updated) ?>"><?= h(date('F j, Y', strtotime($last_updated))) ?></time></p>
  </footer>

</article>

</body>
</html>
