# Premier-Cables.com 车载线集群 — 33 篇文章标准化 Brief

> 适用：premier-cables.com 全新车载线网站
> 技术栈：PHP + 外部 CSS（class-based）
> 内容总量：33 篇文章 / 12 周完成 / 4 个产品集群
> 文档版本：v1.0 / 2026-05-14

---

## 📌 第 0 节：使用说明

### 0.1 本文档是什么
- 33 篇文章的完整规划清单
- 每篇含：标题、关键词、字数、H2 大纲、内链表、表格要求、FAQ 主题
- 写手 / 团队成员可直接按 Brief 产出文章

### 0.2 阅读顺序
1. 先读 §1（写作规范）+ §2（代码与样式规范）
2. 按集群顺序读 §3-§6
3. 写作前打开对应文章的 Brief，按字段填空

### 0.3 文章类型代号
- **Pillar**: 集群核心支柱页（每集群 1 篇）
- **Sub-Pillar**: 产品深度文章（每个具体产品 1 篇）
- **Comparison**: A vs B 对比型
- **Procurement**: 采购/OEM 询盘导向
- **Application**: 行业/案例应用
- **Troubleshooting**: 故障排错

---

## 📌 第 1 节：通用写作规范

### 1.1 内容禁用词
严禁出现：best / world-leading / perfect / 100% reliable / No.1 manufacturer
禁用开头："In today's industrial world..." 类套话

### 1.2 必含 9 块结构
1. **Hero Section** —— 含分类标签 + H1 + 描述段
2. **TL;DR** 顶部摘要 3-5 行
3. **Definition Box** 纯定义段 ≤40 词
4. **Table of Contents** 目录锚链接
5. **Main Content** 主体（含至少 1 个对比表）
6. **FAQ** 5 条（Q ≤15 词，A 40-60 词）
7. **Related Articles** 内链区（≥5 个）
8. **CTA** 含资源下载 / 询盘按钮
9. **Footer Meta** Author + LinkedIn + Last Updated

### 1.3 SEO 字段
| 字段 | 要求 |
|------|------|
| Title Tag | ≤60 字符，主关键词在前 60 字符 |
| Meta Description | ≤155 字符 |
| URL slug | 全小写连字符 |
| 主关键词位置 | H1 / Title / Meta / 首段 / URL 必须出现 |
| 关键词密度 | 0.8% – 1.5% |
| 内链 | ≥5 个 |
| 外链 | ≥1 个权威源（IEEE / Open Alliance / IATF / USCAR） |

### 1.4 EEAT 要求
- 每篇至少 1 张真实工厂/产品/装车实拍图（非渲染）
- 作者署名带工程师 LinkedIn
- 引用 IEEE 802.3bp/ch、Open Alliance、IATF 16949、USCAR 等标准
- 提供 Datasheet / Pinout PDF 下载
- 写明 Last Updated 日期

### 1.5 AI Search 优化（ChatGPT/Perplexity/SGE）
- TL;DR + Definition Box 必装
- 用 markdown 表格（不用图片表）
- FAQ Schema + Article Schema 必装（PHP 后端注入 JSON-LD）

### 1.6 写作风格
- 段落 ≤4 行
- 每个 H2 开头一句总结
- 引用具体数字（频率 / 电流 / 温度 / IP / 长度 / MOQ / Lead Time）
- 不写营销话术

### 1.7 标题撰写原则
1. 一个标题只主打 1 个核心关键词
2. 优先用问题词开头（What / How / Why / Which）
3. 加具体数字（"7 Requirements"、"6 Causes"、"2026 Guide"）
4. 主关键词出现在前 60 字符
5. Pillar 文章可加年份；Pinout/对比/速查类不加

### 1.8 图片规范
- Pillar ≥6 张，Sub-Pillar ≥4 张，其它 ≥3 张
- 命名：`[primary-keyword].webp` 全小写连字符
- Alt ≤125 字符，含主关键词
- 真实图占比 ≥50%
- 文件大小 < 200KB，优先 WebP

---

## 📌 第 2 节：代码与样式规范

### 2.1 技术栈
- 前端：语义化 HTML5 + 外部 CSS
- 后端：PHP（用于 include CSS、注入 Schema、生成面包屑）
- CSS 命名约定：BEM-like，所有 class 以 `pcm-` 前缀（避免与主题冲突）

### 2.2 HTML 骨架（每篇文章统一结构）

```html
<article class="pcm-article">
  <!-- Hero -->
  <header class="pcm-hero">
    <span class="pcm-hero-tag">Pillar Guide</span>
    <h1>[标题]</h1>
    <p class="pcm-hero-desc">[描述段]</p>
  </header>

  <!-- TL;DR -->
  <aside class="pcm-tldr">
    <h2 class="pcm-tldr-title">TL;DR</h2>
    <ul>...</ul>
  </aside>

  <!-- Definition Box -->
  <aside class="pcm-definition">
    <p><strong>Definition:</strong> ...</p>
  </aside>

  <!-- TOC -->
  <nav class="pcm-toc">
    <h2 class="pcm-toc-title">Contents</h2>
    <ol>...</ol>
  </nav>

  <!-- Main Content -->
  <section class="pcm-section" id="sec1">
    <h2>...</h2>
    <p>...</p>
    <div class="pcm-table-wrap">
      <table>...</table>
    </div>
    <aside class="pcm-warning">⚠️ Warning: ...</aside>
    <aside class="pcm-tip">💡 Pro Tip: ...</aside>
  </section>

  <!-- FAQ -->
  <section class="pcm-faq">
    <h2>FAQ</h2>
    <details>
      <summary>Q: ...</summary>
      <p>A: ...</p>
    </details>
  </section>

  <!-- Related Articles -->
  <aside class="pcm-related">
    <h2>Related Articles</h2>
    <ul>...</ul>
  </aside>

  <!-- CTA -->
  <section class="pcm-cta">
    <h2>...</h2>
    <a href="..." class="pcm-cta-btn">Send RFQ →</a>
  </section>

  <!-- Footer Meta -->
  <footer class="pcm-meta">
    <p><strong>Author:</strong> ... <a href="linkedin">LinkedIn</a></p>
    <p><strong>Last Updated:</strong> ...</p>
  </footer>
</article>
```

### 2.3 CSS 基础变量（建议 article.css 顶部）

```css
:root {
  --pcm-primary: #0f766e;     /* 主品牌色 (teal) */
  --pcm-secondary: #1e3a8a;   /* 辅色 (navy) */
  --pcm-text: #1f2937;
  --pcm-heading: #111827;
  --pcm-muted: #4b5563;
  --pcm-border: #e5e7eb;
  --pcm-bg-tldr: #f0fdf4;
  --pcm-bg-warn: #fff7ed;
  --pcm-bg-def: #eff6ff;
  --pcm-radius: 8px;
  --pcm-content-max: 800px;
  --pcm-container-max: 1200px;
}
```

### 2.4 PHP 集成建议
- `<head>` 引入：`<link rel="stylesheet" href="/assets/article.css?v=<?= filemtime('/path/article.css') ?>">`
- Schema 注入：用 PHP 模板生成 Article Schema + FAQPage Schema 的 JSON-LD，自动从文章数据库取值
- 面包屑：PHP 根据当前 URL 自动生成 `<nav class="pcm-breadcrumb">`

### 2.5 必装 Schema（每篇）
- **Article Schema**: 含 headline / author / datePublished / dateModified / image
- **FAQPage Schema**: 5 条 FAQ 全部映射
- **BreadcrumbList Schema**: 自动生成

---

## 📌 第 3 节：集群 A — Automotive Ethernet Connectors（14 篇）

### A1: What is Automotive Ethernet? Complete Guide from CAN to 10GBASE-T1

| 字段 | 内容 |
|------|------|
| Type | Pillar |
| Primary KW | what is automotive ethernet |
| Secondary KW | automotive ethernet protocol, 100base-t1, 1000base-t1, automotive networking |
| URL Slug | `/news/what-is-automotive-ethernet` |
| Title Tag | What is Automotive Ethernet? Complete Guide (2026) |
| Meta Description | Automotive Ethernet replaces CAN/LVDS in modern vehicles. Learn 100BASE-T1, 1000BASE-T1, connectors, applications and OEM standards in this complete guide. |
| Word Count | 3000 |
| Audience | Engineer + Decision Maker |
| Search Intent | What is（认知层）+ 行业认知 |

**H2 大纲**:
1. What is Automotive Ethernet? (Definition + 1 sentence summary)
2. Why CAN Bus and LVDS Are Not Enough Anymore
3. Automotive Ethernet Standards: 100BASE-T1, 1000BASE-T1, MultiGBASE-T1
4. The 9 Connector Families: FAKRA / Mini FAKRA / HSD / H-MTD / MATEnet / GEMnet / NETBridge / IX / HSAutoLink
5. OPEN Alliance and IEEE 802.3 Standards Compliance
6. Typical Applications: ADAS, Infotainment, Camera, Powertrain
7. How to Choose Cables for Automotive Ethernet (Selection Criteria)
8. Future Outlook: 25 Gbps and 50 Gbps Automotive Ethernet
9. FAQ

**必含表格**:
- Standards comparison: 100BASE-T1 vs 1000BASE-T1 vs MultiGBASE-T1（速率、距离、应用）
- Connector family overview（9 个连接器对比矩阵）
- Bandwidth vs Application matrix（每个应用需要什么速率）

**FAQ 主题（5 条）**:
1. Is automotive ethernet the same as office ethernet?
2. Can I use Cat5e/Cat6 cable for automotive ethernet?
3. Why is FAKRA not used for high-speed automotive ethernet anymore?
4. What is the difference between 100BASE-T1 and 100BASE-TX?
5. Does automotive ethernet support PoE?

**内链规则**:
- ✅ Down → A2 FAKRA / A3 Mini FAKRA / A4 HSD / A5 H-MTD（Sub-Pillars）
- ✅ Down → A10 Comparison
- ✅ Down → A11 ADAS / A12 Robotaxi / A13 Failure
- ✅ Down → 产品分类页 `/automotive-ethernet-connectors/`
- ✅ Cross → 集群 D 的 D1（线束总览）

**外链权威源**:
- IEEE 802.3bp 标准官方页
- OPEN Alliance TC8/TC9 测试规范
- 1 个汽车行业白皮书

**图片清单**（≥6 张）:
1. `automotive-ethernet-evolution-timeline.webp` —— 从 CAN 到 10G 演进图
2. `automotive-ethernet-connector-family.webp` —— 9 款连接器合影
3. `automotive-ethernet-vehicle-architecture.webp` —— 车辆电气架构图
4. `100base-t1-cable-cross-section.webp` —— 单对差分线截面
5. `automotive-ethernet-adas-camera-system.webp` —— ADAS 应用实拍
6. `automotive-ethernet-test-laboratory.webp` —— 工厂实拍

**CTA**: 下载 "Automotive Ethernet Cable Selection Guide PDF" + 联系工程师

**Author 建议**: Senior Engineer（高资历）

---

### A2: FAKRA Connector Color Codes and Pinout: Full Reference Chart

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | fakra connector pinout |
| Secondary KW | fakra color code, fakra connector chart, fakra coding |
| URL Slug | `/news/fakra-connector-pinout` |
| Title Tag | FAKRA Connector Color Codes and Pinout: Full Reference |
| Meta Description | Complete FAKRA connector color code chart from A to Z, with pinout reference, frequency range and typical automotive applications. Free PDF download. |
| Word Count | 2000 |
| Audience | Engineer（速查） |
| Search Intent | Pinout / Reference（速查型） |

**H2 大纲**:
1. What is FAKRA Connector?（Definition + 应用速述）
2. FAKRA Color Code Chart: A to Z Complete Reference（**核心表格**）
3. FAKRA Pinout: Standard Pin Configuration
4. FAKRA Frequency Range and Bandwidth
5. FAKRA Cable Types: RG174, RG316, Dacar 302
6. How to Identify FAKRA Color Codes in Field
7. Common FAKRA Applications by Color
8. FAKRA vs Mini FAKRA: When to Upgrade
9. FAQ

**必含表格**:
- **FAKRA 完整色卡**（约 13 行：A/B/C/D/E/F/G/H/I/K/Z 等）—— 含 Color / Application / Frequency / Cable Type
- FAKRA Cable comparison（RG174 vs RG316 vs Dacar 302）
- FAKRA pin assignment table

**FAQ 主题（5 条）**:
1. What does FAKRA stand for?
2. How do I read FAKRA color codes?
3. What is the difference between FAKRA Code A and Code Z?
4. Can FAKRA carry power?
5. Is FAKRA still used in new vehicle designs?

**内链规则**:
- ✅ Up → A1 Pillar
- ✅ Side → A3 Mini FAKRA / A10 Comparison
- ✅ Down → 产品页 `/fakra-connectors-cable-assemblies/`
- ✅ Resource → "Download FAKRA Color Code PDF"

**外链**: SMI / Rosenberger / Tyco FAKRA 标准白皮书

**图片清单**（≥4 张）:
1. `fakra-connector-pinout-diagram.webp` —— 引脚示意图
2. `fakra-color-code-chart.webp` —— 完整色卡图（实物）
3. `fakra-cable-cross-section.webp` —— 同轴电缆截面
4. `fakra-installation-vehicle.webp` —— 装车实拍

**CTA**: "Download Full FAKRA Color Code PDF (Free)" + 询盘

---

### A3: Mini FAKRA Explained: 4-in-1 Connector for ADAS Cameras

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | mini fakra connector |
| Secondary KW | mini fakra hfm, mini fakra pinout, 4-in-1 fakra |
| URL Slug | `/news/mini-fakra-connector-guide` |
| Title Tag | Mini FAKRA: 4-in-1 Connector for ADAS Camera Systems |
| Meta Description | Mini FAKRA (HFM) replaces standard FAKRA in space-constrained vehicles. Learn pinout, applications in ADAS and infotainment, and how it differs from FAKRA. |
| Word Count | 1800 |
| Audience | Engineer |
| Search Intent | What is + Comparison |

**H2 大纲**:
1. What is Mini FAKRA? (Definition)
2. Why Mini FAKRA Replaces Standard FAKRA in Modern Vehicles
3. Mini FAKRA Pinout and 4-Channel Configuration
4. Mini FAKRA Standards: HFM and ISO/IEC Compliance
5. Typical Applications: ADAS, Surround View, Infotainment
6. Mini FAKRA vs FAKRA: 5 Key Differences
7. Cable Types Compatible with Mini FAKRA
8. FAQ

**必含表格**:
- Mini FAKRA vs FAKRA 5 维度对比（尺寸 / 通道 / 频率 / 应用 / 成本）
- Mini FAKRA pin configuration table

**FAQ 主题**:
1. What does HFM stand for?
2. Can Mini FAKRA carry both data and power?
3. Is Mini FAKRA backward compatible with FAKRA?
4. What is the maximum data rate of Mini FAKRA?
5. Why is Mini FAKRA called "4-in-1"?

**内链**:
- Up → A1 / A2
- Side → A4 HSD / A10 Comparison
- Down → 产品页 `/mini-fakra-connectors-cable-assemblies/`
- Cross → A11 ADAS Camera

**图片**（≥4 张）:
1. `mini-fakra-connector-overview.webp`
2. `mini-fakra-vs-fakra-size-comparison.webp`
3. `mini-fakra-pinout-diagram.webp`
4. `mini-fakra-adas-camera-installation.webp`

**CTA**: "Mini FAKRA Datasheet 下载" + 询盘

---

### A4: HSD Connector Pinout: Star Quad Wiring for LVDS Cameras

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | hsd connector pinout |
| Secondary KW | hsd connector wiring, lvds camera cable, star quad pinout |
| URL Slug | `/news/hsd-connector-pinout-wiring` |
| Title Tag | HSD Connector Pinout: Star Quad Wiring for LVDS Cameras |
| Meta Description | Complete HSD connector pinout reference for LVDS camera applications. Learn star quad wiring, color codes, and how HSD differs from FAKRA. |
| Word Count | 2000 |
| Audience | Engineer |
| Search Intent | Pinout / Wiring |

**H2 大纲**:
1. What is HSD Connector? (Definition)
2. HSD Star Quad Pinout Reference（核心引脚图）
3. HSD Color Codes: A, B, C, D, Z (Coding Variants)
4. LVDS Signal Wiring on HSD
5. HSD Cable Construction: Differential Pairs and Shield
6. HSD vs FAKRA: When to Use Each
7. HSD Crimping and Termination Best Practices
8. FAQ

**必含表格**:
- HSD pinout（4 针）
- HSD 颜色编码 vs Application 对照
- HSD vs FAKRA 5 维度对比

**FAQ 主题**:
1. What does HSD stand for?
2. Can HSD carry data and power simultaneously?
3. What is "Star Quad" wiring?
4. What cable types work with HSD?
5. Is HSD obsolete with the arrival of H-MTD?

**内链**:
- Up → A1
- Side → A5 H-MTD / A2 FAKRA
- Cross → A11 ADAS Camera / A12 Robotaxi
- Down → 产品页 `/hsd-connectors-cable-assemblies/`

**图片**（≥4 张）:
1. `hsd-connector-pinout-star-quad.webp`
2. `hsd-cable-cross-section-with-shield.webp`
3. `hsd-vs-fakra-comparison.webp`
4. `hsd-camera-cable-vehicle-installation.webp`

---

### A5: H-MTD Connector: 10 Gbps Automotive Ethernet for ADAS and AV

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | h-mtd connector |
| Secondary KW | h-mtd pinout, h-mtd vs hsd, 10gbase-t1 connector |
| URL Slug | `/news/h-mtd-connector-guide` |
| Title Tag | H-MTD Connector: 10 Gbps Automotive Ethernet Explained |
| Meta Description | H-MTD is Rosenberger's 10 Gbps automotive ethernet connector for ADAS and autonomous vehicles. Learn pinout, standards, and how it compares to HSD and MATEnet. |
| Word Count | 2000 |
| Audience | Engineer |
| Search Intent | What is + Specs |

**H2 大纲**:
1. What is H-MTD Connector?
2. H-MTD Specifications: 10 Gbps and Beyond
3. H-MTD Pinout for Single and Dual Pair Configurations
4. H-MTD Standards: IEEE 802.3ch Compliance
5. Why ADAS L4/L5 Requires H-MTD
6. H-MTD vs HSD vs MATEnet: Performance Comparison
7. H-MTD Cable Construction and Shielding
8. FAQ

**必含表格**:
- H-MTD specifications table（频率、损耗、阻抗、温度范围）
- H-MTD vs HSD vs MATEnet 性能对比

**FAQ 主题**:
1. What does H-MTD stand for?
2. Is H-MTD only made by Rosenberger?
3. What data rate does H-MTD support?
4. Is H-MTD shielded?
5. When will H-MTD replace HSD?

**内链**:
- Up → A1
- Side → A4 HSD / A6 MATEnet / A10 Comparison
- Cross → A12 Robotaxi
- Down → 产品页 `/h-mtd-connectors-cable-assemblies/`

**图片**（≥4 张）:
1. `h-mtd-connector-overview.webp`
2. `h-mtd-pinout-diagram.webp`
3. `h-mtd-vs-hsd-bandwidth-chart.webp`
4. `h-mtd-autonomous-vehicle-application.webp`

---

### A6: MATEnet Connector System: Molex Modular Architecture for OEMs

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | matenet connector |
| Secondary KW | matenet pinout, molex matenet, matenet vs h-mtd |
| URL Slug | `/news/matenet-connector-guide` |
| Title Tag | MATEnet Connector: Molex Modular Automotive Ethernet System |
| Meta Description | MATEnet is Molex's modular automotive ethernet connector platform. Learn pinout, modular architecture, and how it competes with H-MTD and HSD. |
| Word Count | 1800 |
| Audience | Engineer |
| Search Intent | What is + Comparison |

**H2 大纲**:
1. What is MATEnet?
2. MATEnet Modular Architecture Explained
3. MATEnet Pinout and Pin Density
4. MATEnet Performance: Up to 25 Gbps Roadmap
5. MATEnet vs H-MTD: Two Modular Approaches
6. MATEnet Applications by OEM
7. FAQ

**必含表格**:
- MATEnet vs H-MTD 5 维度对比
- MATEnet pin configuration

**FAQ 主题**: 5 条围绕 MATEnet vs H-MTD vs FAKRA 选型

**内链**:
- Up → A1
- Side → A5 H-MTD / A7 GEMnet
- Down → 产品页 `/matenet-connectors-cable-assemblies/`

**图片**（≥4 张）

---

### A7: GEMnet vs NETBridge: Aptiv and TE Modular Connector Comparison

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | gemnet connector |
| Secondary KW | netbridge connector, gemnet vs netbridge, aptiv ethernet connector |
| URL Slug | `/news/gemnet-vs-netbridge-connector` |
| Title Tag | GEMnet vs NETBridge: Aptiv and TE Modular Connectors Compared |
| Meta Description | GEMnet (Aptiv) and NETBridge (TE) compete for modular automotive ethernet. Compare specs, pin density, and OEM adoption in this guide. |
| Word Count | 1500 |
| Audience | Engineer |
| Search Intent | Comparison |

**H2 大纲**:
1. What is GEMnet? (Aptiv's Modular Platform)
2. What is NETBridge? (TE's Modular Platform)
3. GEMnet vs NETBridge: Specifications Comparison
4. Pin Density and Module Configuration
5. OEM Adoption: Who Uses What
6. FAQ

**必含表格**: GEMnet vs NETBridge 5+ 维度对比

**内链**:
- Up → A1 / A6
- Side → A5 H-MTD
- Down → 产品页（GEMnet 和 NETBridge 各一个）

---

### A8: HSAutoLink Pinout: Tyco HSAutoLink I and II Pin Reference

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | hsautolink connector |
| Secondary KW | hsautolink pinout, tyco hsautolink, hsautolink ii |
| URL Slug | `/news/hsautolink-connector-pinout` |
| Title Tag | HSAutoLink Pinout: Tyco HSAutoLink I and II Reference |
| Meta Description | Complete HSAutoLink I and II pinout reference. Compare both versions, applications in legacy and modern vehicles, and cable types. |
| Word Count | 1500 |
| Audience | Engineer |
| Search Intent | Pinout |

**H2 大纲**:
1. What is HSAutoLink?
2. HSAutoLink I Pinout Reference
3. HSAutoLink II Pinout Reference
4. HSAutoLink I vs II Differences
5. Typical Applications and Vehicle Compatibility
6. FAQ

**必含表格**: I vs II 引脚对照表

---

### A9: IX Industrial Connector for Vehicles: 70% Smaller than RJ45

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | ix industrial connector |
| Secondary KW | ix connector automotive, ix vs rj45, harting ix |
| URL Slug | `/news/ix-industrial-connector-automotive` |
| Title Tag | IX Industrial Connector for Automotive: Compact RJ45 Alternative |
| Meta Description | IX Industrial connector is 70% smaller than RJ45 with 5x cycles. Learn pinout, automotive applications, and migration from RJ45. |
| Word Count | 1500 |
| Audience | Engineer |
| Search Intent | What is + Comparison |

**H2 大纲**:
1. What is IX Industrial Connector?
2. IX Pinout and Pin Configuration
3. IX vs RJ45: 70% Size Reduction
4. Why IX Suits In-Vehicle Networking
5. Mating Cycles and Vibration Resistance
6. FAQ

**必含表格**: IX vs RJ45 size & durability comparison

---

### A10: FAKRA vs Mini FAKRA vs HSD vs H-MTD: Selection Decision Tree

| 字段 | 内容 |
|------|------|
| Type | Comparison |
| Primary KW | fakra vs hsd |
| Secondary KW | automotive ethernet connector comparison, hsd vs h-mtd, fakra vs mini fakra |
| URL Slug | `/news/automotive-ethernet-connector-comparison` |
| Title Tag | FAKRA vs HSD vs H-MTD: Automotive Connector Decision Tree |
| Meta Description | Confused about FAKRA, Mini FAKRA, HSD, and H-MTD? This decision tree helps you choose the right automotive ethernet connector for your project. |
| Word Count | 2000 |
| Audience | Engineer + Procurement |
| Search Intent | Comparison / Selection |

**H2 大纲**:
1. The 4 Main Automotive Ethernet Connector Families
2. Decision Criteria: Bandwidth, Cost, Size, Future-Proofing
3. FAKRA vs Mini FAKRA: When to Stay vs Migrate
4. HSD vs H-MTD: Legacy LVDS or Future Ethernet
5. **Selection Decision Tree（核心可视化图表）**
6. Cost Comparison: Per-Unit and System Level
7. OEM Adoption Trends 2024-2030
8. FAQ

**必含表格 + 决策图**:
- 4-way comparison matrix（速率/尺寸/成本/认证/未来）
- 决策树流程图（用 SVG 或 Mermaid）

**FAQ 主题**:
1. Which connector has the highest bandwidth?
2. Which is cheapest for high volume?
3. Can I mix connectors in one harness?
4. Which is most future-proof?
5. What are the OEM trends?

**内链**:
- ✅ 链接到所有相关 Sub-Pillar (A2-A8)
- Up → A1
- Cross → A11 / A12

---

### A11: How to Choose Cables for ADAS Camera Systems: 7 Requirements

| 字段 | 内容 |
|------|------|
| Type | Application |
| Primary KW | adas camera cable |
| Secondary KW | adas wiring, autonomous driving cable, surround view camera cable |
| URL Slug | `/news/adas-camera-cable-selection` |
| Title Tag | ADAS Camera Cable Selection: 7 Critical Requirements |
| Meta Description | Choose the right cable for ADAS cameras with these 7 requirements: bandwidth, EMC, temperature, shielding, IP rating, length, and certification. |
| Word Count | 1800 |
| Audience | Engineer + Procurement |
| Search Intent | How to Choose / Application |

**H2 大纲**:
1. ADAS Camera Cable: Why Standards Matter
2. **Requirement 1: Bandwidth (100BASE-T1 vs Gigabit)**
3. **Requirement 2: EMC and Shielding**
4. **Requirement 3: Temperature Range (-40°C to +125°C)**
5. **Requirement 4: IP Rating for Engine Bay**
6. **Requirement 5: Cable Length and Signal Integrity**
7. **Requirement 6: Connector Choice (FAKRA, Mini FAKRA, HSD)**
8. **Requirement 7: Automotive Certifications (USCAR, IATF)**
9. Real Project Example: Surround View System
10. FAQ

**必含表格 + 案例**:
- 7 requirements summary checklist
- 真实案例：4 摄像头环视系统选型
- 案例数据：1080p 30fps × 4 = 必需 1Gbps

**内链**:
- Up → A1
- Side → A2 / A3 / A4
- Cross → B4 HSC Surround View / D8 EV Battery（可选）
- Down → 产品页 + RFQ 页

**外链**: NHTSA / EU regulation on ADAS standards

**图片**（≥4 张）: 真实环视摄像头安装图

**CTA**: "ADAS Cable Selection Checklist PDF" 下载 + RFQ

---

### A12: Robotaxi Cable Solutions: Automotive Ethernet for Self-Driving

| 字段 | 内容 |
|------|------|
| Type | Application |
| Primary KW | robotaxi cable |
| Secondary KW | autonomous vehicle cable, self-driving wiring, l4 robotaxi |
| URL Slug | `/news/robotaxi-cable-solutions` |
| Title Tag | Robotaxi Cable Solutions: Wiring for Autonomous Vehicles |
| Meta Description | Robotaxi requires specialized cable solutions for LiDAR, cameras, and high-speed compute. Learn architecture, connectors, and OEM requirements. |
| Word Count | 1800 |
| Audience | Engineer + Decision Maker |
| Search Intent | Application / Industry |

**H2 大纲**:
1. What is a Robotaxi? (L4/L5 Autonomous Vehicle)
2. Robotaxi Wiring Architecture: Sensor to Compute
3. Cable Requirements for LiDAR (10G+)
4. Cable Requirements for 360° Cameras
5. Compute Module Connectivity (H-MTD, MATEnet)
6. Heat, Vibration, and Continuous Operation
7. **Real Case: Robotaxi Fleet Deployment**（脱敏案例）
8. Procurement Considerations for Robotaxi OEMs
9. FAQ

**必含表格**:
- 各种传感器对应的 connector 类型
- L2/L3/L4/L5 对带宽的需求

**真实案例**:
- 一家欧洲 robotaxi 制造商，30 辆车队，使用 H-MTD + Mini FAKRA 混合架构，故障降低 70%

---

### A13: Why Automotive Ethernet Cables Fail: 6 Causes and How to Fix

| 字段 | 内容 |
|------|------|
| Type | Troubleshooting |
| Primary KW | automotive ethernet cable failure |
| Secondary KW | automotive ethernet troubleshooting, ethernet cable diagnostic |
| URL Slug | `/news/automotive-ethernet-cable-failures` |
| Title Tag | Why Automotive Ethernet Cables Fail: 6 Causes and Fixes |
| Meta Description | Diagnose automotive ethernet failures: shield damage, EMI, crimp issues, temperature stress, vibration. Each problem with symptoms, causes and fixes. |
| Word Count | 1800 |
| Audience | Engineer (现场调试) |
| Search Intent | Why fail / Troubleshooting |

**H2 大纲**:
1. Automotive Ethernet Failure Patterns
2. **Failure 1: Shield Damage Causing EMC Issues**
3. **Failure 2: Bad Crimping at Connector Termination**
4. **Failure 3: Temperature Stress and Solder Joints**
5. **Failure 4: Vibration-Induced Pin Wear**
6. **Failure 5: Wrong Cable Grade (Cat5 vs Auto Cable)**
7. **Failure 6: EMI from VFD/Motor Wiring**
8. Diagnostic Tools and Methodology
9. Field Quick Fixes vs Long-Term Solutions
10. FAQ

**每个 Failure 用统一 4 段结构**: Symptom / Likely Causes / How to Diagnose / Fix & Prevention

**必含表格**:
- 故障症状 → 原因 速查表
- 诊断工具清单（OTDR / Cable Tester / Oscilloscope）

---

### A14: FAKRA Color Code Chart: All Codes from A to Z (Free PDF)

| 字段 | 内容 |
|------|------|
| Type | Reference / 速查 |
| Primary KW | fakra color code chart |
| Secondary KW | fakra color codes, fakra reference, fakra cheat sheet |
| URL Slug | `/news/fakra-color-code-chart` |
| Title Tag | FAKRA Color Code Chart: A to Z Complete Reference (PDF) |
| Meta Description | Free FAKRA color code chart covering all codes A through Z, with applications, frequency ranges, and downloadable PDF for engineers. |
| Word Count | 1500 |
| Audience | Engineer (速查) |
| Search Intent | Reference |

**H2 大纲**:
1. FAKRA Color Code Quick Reference（核心表格）
2. How to Read FAKRA Color Codes
3. Color Code by Application Category
4. **Download Full PDF (留资下载)**
5. FAQ

**必含表格**: 完整 FAKRA 色卡（13+ 行）

**Lead Magnet**: PDF 下载（要求填邮箱）

**注**: 这篇是外链磁石和 ChatGPT 引用率最高的内容形态

---

## 📌 第 4 节：集群 B — HSC / HSL High-Speed Coax（4 篇）

### B1: What is HSC Connector? HSC vs HSL High-Speed Coax Compared

| 字段 | 内容 |
|------|------|
| Type | Pillar |
| Primary KW | hsc connector |
| Secondary KW | hsl connector, hsc cable, automotive coaxial connector |
| URL Slug | `/news/what-is-hsc-connector` |
| Title Tag | What is HSC Connector? HSC vs HSL Comparison Guide |
| Meta Description | HSC and HSL are high-speed coaxial connectors for automotive cameras. Learn pinouts, applications, and how they compare to FAKRA. |
| Word Count | 2000 |
| Audience | Engineer |

**H2 大纲**:
1. What is HSC Connector?
2. What is HSL Connector?
3. HSC vs HSL: Specifications Compared
4. Typical Applications: Surround View / Rear Camera
5. HSC/HSL vs FAKRA / Mini FAKRA
6. Cable Construction and Coax Specs
7. FAQ

**必含表格**: HSC vs HSL vs FAKRA / Mini FAKRA 对比

**内链**: Up→无（这是 B 集群的 Pillar）/ Down→B2/B3/B4 / Cross→A2 FAKRA / A3 Mini FAKRA

---

### B2: HSC Connector Pinout for Automotive Surround View Cameras

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | hsc pinout |
| Secondary KW | hsc connector wiring, automotive camera pinout |
| URL Slug | `/news/hsc-connector-pinout` |
| Word Count | 1500 |

**H2 大纲**: 同 A4 结构（Pinout 速查型）

**必含**: HSC pin diagram + 应用场景

---

### B3: HSC vs FAKRA: Which Coaxial Connector for Camera Cables

| 字段 | 内容 |
|------|------|
| Type | Comparison |
| Primary KW | hsc vs fakra |
| Word Count | 1500 |
| URL Slug | `/news/hsc-vs-fakra` |

**H2 大纲**:
1. Two Coaxial Connector Families
2. HSC Specifications
3. FAKRA Specifications
4. **5-Way Comparison Table**
5. When to Choose HSC
6. When to Choose FAKRA
7. FAQ

**跨集群链接**: → A2 FAKRA / A3 Mini FAKRA

---

### B4: How HSC Cables Are Used in 360° Surround View Camera Systems

| 字段 | 内容 |
|------|------|
| Type | Application |
| Primary KW | hsc surround view |
| Secondary KW | 360 camera cable, surround view wiring |
| URL Slug | `/news/hsc-surround-view-camera` |
| Word Count | 1500 |

**H2 大纲**:
1. 360° Surround View System Architecture
2. Cable Routing and Length Constraints
3. Why HSC Suits Surround View
4. Real Project Example
5. FAQ

**跨集群**: → A11 ADAS Camera

---

## 📌 第 5 节：集群 C — Vehicle Serial & Diagnostic（4 篇）

### C1: OBD2 to DB9 Cable: RS232 Wiring for Vehicle Diagnostics

| 字段 | 内容 |
|------|------|
| Type | Pillar |
| Primary KW | obd2 to db9 cable |
| Secondary KW | obd2 db9 wiring, rs232 vehicle diagnostic |
| URL Slug | `/news/obd2-to-db9-cable` |
| Title Tag | OBD2 to DB9 Cable: RS232 Wiring for Vehicle Diagnostics |
| Meta Description | OBD2 to DB9 cable converts vehicle diagnostic data to RS232. Learn pinout, wiring, applications in scan tools and fleet telematics. |
| Word Count | 2000 |

**H2 大纲**:
1. What is OBD2? (Definition)
2. What is DB9 RS232?
3. OBD2 to DB9 Cable: Why It Exists
4. **Pinout Mapping: OBD2 → DB9（核心表格）**
5. Common Applications: Scan Tools, Telematics, GPS
6. Cable Construction and Length Limits
7. Custom OBD2 Cable Manufacturing
8. FAQ

**必含表格**: OBD2 16-pin → DB9 9-pin 完整对照

---

### C2: DB9 to OBD-II Pinout Diagram: Full Wire Color Reference

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar / Pinout 速查 |
| Primary KW | db9 to obd2 pinout |
| URL Slug | `/news/db9-obd2-pinout-diagram` |
| Word Count | 1500 |

**H2 大纲**: 同 A2 结构（Pinout 速查型）

**Lead Magnet**: PDF 下载

---

### C3: RS232 Cable for Fleet GPS Trackers: Specs and Installation

| 字段 | 内容 |
|------|------|
| Type | Application |
| Primary KW | rs232 fleet tracker cable |
| URL Slug | `/news/rs232-fleet-gps-tracker-cable` |
| Word Count | 1500 |

**H2 大纲**:
1. Fleet Telematics Architecture
2. Why RS232 Still Used in Fleet GPS
3. Cable Specifications for Fleet Use
4. Installation Best Practices
5. Common Problems
6. FAQ

---

### C4: Custom OBD2 Cable for Telematics OEM: MOQ and Lead Time

| 字段 | 内容 |
|------|------|
| Type | Procurement |
| Primary KW | custom obd2 cable manufacturer |
| URL Slug | `/news/custom-obd2-cable-oem` |
| Word Count | 1200 |

**H2 大纲**:
1. When You Need Custom OBD2 Cables
2. **Specifications to Provide for RFQ**
3. **MOQ, Lead Time, Tooling**
4. **Certifications: CE, FCC, IATF**
5. Working with Asian Manufacturers
6. FAQ

**软性提及**: "alternatives to Phoenix Contact / Wago"
**Lead Magnet**: "Quotation Request Template" PDF

---

## 📌 第 6 节：集群 D — Automotive Wire Harness（11 篇）

### D1: What is an Automotive Wire Harness? Manufacturing and Selection

| 字段 | 内容 |
|------|------|
| Type | Pillar |
| Primary KW | automotive wire harness |
| Secondary KW | wire harness manufacturing, vehicle wiring harness, oem cable assembly |
| URL Slug | `/news/what-is-automotive-wire-harness` |
| Title Tag | What is an Automotive Wire Harness? Complete OEM Guide |
| Meta Description | Automotive wire harness explained: manufacturing process, materials, top connector brands (Aptiv, Tyco, Deutsch), and how to qualify a supplier. |
| Word Count | 3000 |
| Audience | Engineer + Procurement |

**H2 大纲**:
1. What is an Automotive Wire Harness?
2. Wire Harness Components: Wires, Connectors, Terminals, Sleeving
3. Manufacturing Process: Cut → Strip → Crimp → Assemble → Test
4. Major Connector Brands: Aptiv, Tyco AMP, Deutsch DT, Molex
5. Wire Types: TXL, GXL, SXL, ETFE
6. Quality Standards: USCAR, IATF 16949, ISO 14001
7. Custom vs Standard Harness
8. How to Qualify a Wire Harness Supplier
9. FAQ

**必含表格**:
- 主流 brand connector 对比（Aptiv / Tyco / Deutsch / Molex）
- Wire type comparison（TXL/GXL/SXL/ETFE 温度等级）

---

### D2: Aptiv Delphi Connectors: GT 150, GT 280 and Metri-Pack Pinout

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | aptiv delphi connector |
| Secondary KW | gt 150 connector, gt 280 connector, metri-pack pinout |
| URL Slug | `/news/aptiv-delphi-connector-pinout` |
| Word Count | 1800 |

**H2 大纲**:
1. Who is Aptiv Delphi?
2. GT 150 Connector Series Pinout
3. GT 280 Connector Series Pinout
4. Metri-Pack 150 / 280 / 480 / 630 Series
5. Aptiv Sealed vs Unsealed Comparison
6. Application Selection Guide
7. FAQ

**必含表格**: 各系列引脚 + 电流/电压等级

---

### D3: Tyco AMP Junior Power Timer: Pinout and Crimping Guide

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | tyco amp junior power timer |
| URL Slug | `/news/tyco-amp-junior-power-timer-pinout` |
| Word Count | 1800 |

**H2 大纲**:
1. What is Tyco AMP JPT (Junior Power Timer)?
2. JPT Pin Configuration: 1 / 2 / 3 / 4 / 6 / 8 Pin
3. JPT Crimping Tool and Process
4. Common Applications: Sensors, Fuel Injection, Ignition
5. JPT vs MQS (Micro Quadlok)
6. FAQ

**必含表格**: JPT vs MQS / Multilock 对比

---

### D4: Deutsch DT Connector Pinout: 2/4/6/8/12-Pin Full Reference

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar |
| Primary KW | deutsch dt pinout |
| Secondary KW | deutsch dt connector, dt connector pinout, deutsch dtm |
| URL Slug | `/news/deutsch-dt-connector-pinout` |
| Word Count | 2000 |

**H2 大纲**:
1. What is Deutsch DT Series?
2. DT 2-Pin Pinout
3. DT 4-Pin Pinout
4. DT 6/8/12-Pin Pinout
5. **Complete Pin Reference Chart（核心表格）**
6. DT vs DTM vs DTP: Size and Current
7. Heavy-Duty Vehicle Applications
8. FAQ

**Lead Magnet**: "Deutsch DT Full Pinout PDF" 下载

---

### D5: Deutsch DT vs DTM vs DTP: Heavy-Duty Series Differences

| 字段 | 内容 |
|------|------|
| Type | Sub-Pillar / Comparison |
| Primary KW | deutsch dt vs dtm |
| URL Slug | `/news/deutsch-dt-vs-dtm-vs-dtp` |
| Word Count | 1500 |

**H2 大纲**:
1. The 3 Deutsch Heavy-Duty Series
2. DT: Standard Heavy-Duty
3. DTM: Mini (Smaller Form Factor)
4. DTP: Power (High Current)
5. **Side-by-Side Comparison Table**
6. Which to Choose by Application
7. FAQ

**必含表格**: DT / DTM / DTP 6 维度对比

---

### D6: Aptiv vs Tyco AMP vs Deutsch DT: Connector Choice by Application

| 字段 | 内容 |
|------|------|
| Type | Comparison |
| Primary KW | automotive connector comparison |
| URL Slug | `/news/aptiv-vs-tyco-vs-deutsch` |
| Word Count | 1800 |
| Audience | Engineer + Procurement |

**H2 大纲**:
1. The 3 Major Automotive Connector Brands
2. Aptiv: Strengths and Typical Use
3. Tyco AMP: Strengths and Typical Use
4. Deutsch DT: Strengths and Typical Use
5. **Decision Matrix by Application（关键表格）**
6. Cost Comparison
7. OEM Approved Brands
8. FAQ

**Cross-link**: A10 Auto Ethernet Comparison

---

### D7: Custom Wire Harness Manufacturer: How to Submit RFQ for OEM

| 字段 | 内容 |
|------|------|
| Type | Procurement |
| Primary KW | custom wire harness manufacturer |
| Secondary KW | wire harness oem, custom cable assembly, automotive harness rfq |
| URL Slug | `/news/custom-wire-harness-rfq` |
| Word Count | 1500 |
| Audience | Procurement / Buyer |

**H2 大纲**:
1. When You Need a Custom Wire Harness
2. **What Information to Provide for RFQ**
   - Schematic / BOM / Wire types / Connector list / Quantity / Environment
3. **Typical MOQ, Lead Time, Tooling Cost**
4. Customization Options（连接器/线径/标签/包装/Logo）
5. **Certifications: USCAR, IATF 16949, ISO/TS 16949, RoHS, REACH** ★EEAT
6. How to Compare Manufacturers
7. Working with Asian Manufacturers: Sample → Prototype → Mass Production
8. FAQ（采购 6 条）

**软性提及**: "alternatives to Phoenix Contact / Wago / Lapp"

**Lead Magnet**: "Wire Harness Quotation Template" PDF

**Author 建议**: Sales Engineer 署名

---

### D8: EV Battery Wire Harness: BMS Cable Requirements and Specs

| 字段 | 内容 |
|------|------|
| Type | Application |
| Primary KW | ev battery wire harness |
| Secondary KW | bms cable, ev battery harness, lithium battery wiring |
| URL Slug | `/news/ev-battery-wire-harness-bms` |
| Word Count | 1800 |

**H2 大纲**:
1. EV Battery Architecture and BMS
2. **Voltage Sense Lines: Specifications**
3. **Current Sense Lines: Shunt Resistor Wiring**
4. **Temperature Sense: Thermistor Cables**
5. Communication: CAN / Daisy Chain
6. High Voltage vs Low Voltage Wiring Separation
7. Safety Standards: ISO 26262, UL 2580
8. **Real Project Example**（脱敏案例）
9. FAQ

**真实案例**: 一家欧洲 EV 电池厂，72V 模组，48 节电芯，使用定制 BMS 线束

**外链**: ISO 26262 / UL 2580 标准

---

### D9: Heavy Duty Truck Wire Harness: Off-Highway Vehicle Requirements

| 字段 | 内容 |
|------|------|
| Type | Application |
| Primary KW | heavy duty truck wire harness |
| URL Slug | `/news/heavy-duty-truck-wire-harness` |
| Word Count | 1800 |

**H2 大纲**:
1. Off-Highway Vehicle Wiring Challenges
2. Temperature: -40°C to +125°C Engine Bay
3. Vibration: ISO 16750-3 Compliance
4. Chemical Resistance: Diesel, Oil, Brake Fluid
5. **Connector Choice: Deutsch DT for Heavy-Duty**
6. Cable Routing and Strain Relief
7. Real Case: Mining Truck Wiring
8. FAQ

---

### D10: Wire Harness for Engine Bay: Heat, Vibration, Oil Resistance

| 字段 | 内容 |
|------|------|
| Type | Application |
| Primary KW | engine wire harness |
| URL Slug | `/news/engine-bay-wire-harness` |
| Word Count | 1500 |

**H2 大纲**:
1. Engine Bay Environment: Why Standard Wires Fail
2. **Heat Resistance: Wire Insulation Materials**
3. **Vibration Resistance: Strain Relief Design**
4. **Oil and Fuel Resistance: Jacket Material**
5. Routing Best Practices
6. Common Failures and Prevention
7. FAQ

---

### D11: Why Automotive Wire Harnesses Fail: 8 Common Faults and Fixes

| 字段 | 内容 |
|------|------|
| Type | Troubleshooting |
| Primary KW | wire harness failure |
| Secondary KW | automotive wiring problems, harness troubleshooting |
| URL Slug | `/news/automotive-wire-harness-failures` |
| Word Count | 1500 |

**H2 大纲**:
1. Wire Harness Failure Patterns
2. **Fault 1: Open Circuit at Crimp Joint**
3. **Fault 2: Insulation Wear from Vibration**
4. **Fault 3: Connector Pin Corrosion**
5. **Fault 4: Heat Damage to Insulation**
6. **Fault 5: Rodent Damage**
7. **Fault 6: Water Ingress**
8. **Fault 7: Wrong Wire Gauge**
9. **Fault 8: Bad Strain Relief**
10. Diagnostic Workflow
11. FAQ

**每个 Fault 用统一 4 段结构**: Symptom / Likely Causes / How to Diagnose / Fix & Prevention

---

## 📌 第 7 节：内链架构总图

### 7.1 内链层级

```
Level 1: 网站枢纽（可选）
  /automotive-cable-solutions/

Level 2: 集群 Pillar
  A1 / B1 / C1 / D1（各自集群中心）

Level 3: Sub-Pillar / Comparison
  接受 Pillar 上链 + 同集群 Side链 + 跨集群 Cross链

Level 4: Application / Procurement / Troubleshooting
  接受 Pillar 上链 + 多个 Sub-Pillar 上链
```

### 7.2 跨集群链接规则（必做）

| 文章 | 跨集群链接到 |
|------|------------|
| A2 FAKRA | → B3 HSC vs FAKRA |
| A11 ADAS Camera | → B4 HSC Surround View |
| A12 Robotaxi | → D8 EV Battery Harness |
| C1 OBD2 | → D11 Wire Harness Failures |
| D1 Wire Harness Pillar | → A1 Automotive Ethernet Pillar |

### 7.3 锚文本规则
- 同一目标页用 3-5 种不同锚文本
- 不用 "click here"
- 锚文本必须含目标页关键词或长尾变体

---

## 📌 第 8 节：12 周发布节奏

| 周次 | 文章 | 重点 |
|------|------|------|
| W1 | A1 + A2 | Pillar + FAKRA（最高搜索量产品） |
| W2 | A3 + A4 | Mini FAKRA + HSD |
| W3 | A5 + A6 | H-MTD + MATEnet |
| W4 | A7 + A8 + A9 | GEMnet/NETBridge + HSAutoLink + IX |
| W5 | A10 + A11 | 对比 + ADAS 应用 |
| W6 | A12 + A13 + A14 | Robotaxi + 故障 + FAKRA Color PDF |
| W7 | B1 + B2 + B3 | HSC 集群启动 |
| W8 | B4 + C1 + C2 | B 收尾 + C 启动 |
| W9 | C3 + C4 + D1 | C 收尾 + D 启动 |
| W10 | D2 + D3 + D4 | Aptiv / Tyco / Deutsch 三大产品 |
| W11 | D5 + D6 + D7 | DT 对比 + 综合对比 + 采购 |
| W12 | D8 + D9 + D10 + D11 | 应用 + 故障收尾 |

---

## 📌 第 9 节：客户旅程 + 搜索意图覆盖

### 9.1 客户旅程 7 阶段

| 旅程阶段 | 覆盖文章 |
|---------|---------|
| Awareness（认知）| A1, B1, C1, D1 |
| Consideration（考虑）| A2-A9, B2, D2-D5 |
| Comparison（对比）| A10, B3, D5, D6 |
| Procurement（采购）| C4, D7（+ A11/A13 间接）|
| Installation（安装）| A2, A4, B2, D2-D4（合并入 Sub-Pillar）|
| Troubleshoot（故障）| A13, D11 |
| Validation（验证）| A11, A12, B4, C3, D8, D9, D10 |

**7/7 全覆盖 ✅**

### 9.2 工程师搜索意图（8 类）

| 意图 | 示例词 | 覆盖文章 |
|------|------|---------|
| What is（认知）| what is fakra | A1, A3, B1, C1, D1 |
| Pinout（速查）| fakra pinout | A2, A4, A8, A14, B2, C2, D2-D4 |
| How to（操作）| how to crimp tyco amp | A11, D3 |
| Why fail（故障）| why automotive ethernet fail | A13, D11 |
| vs（对比）| fakra vs hsd | A10, B3, D5, D6 |
| Color code / chart | fakra color code | A14 |
| Specifications | deutsch dt specs | D4, D5 |
| Application | adas camera cable | A11, A12, B4, D8, D9, D10 |

### 9.3 采购搜索意图（7 类）

| 意图 | 示例词 | 覆盖文章 |
|------|------|---------|
| 寻找供应商 | wire harness manufacturer china | D7 |
| 询价 / 报价 | custom obd2 cable rfq | C4, D7 |
| 认证 / 合规 | iatf 16949 cable supplier | D7（+ D1 提及）|
| 行业 / 应用匹配 | ev battery harness manufacturer | D8 |
| 替代品 | aptiv connector alternative | D6, D7 |
| MOQ / Lead Time | custom wire harness moq | C4, D7 |
| 中国制造 | automotive cable manufacturer china | D7 |

---

## 📌 第 10 节：发布前检查清单（每篇必勾）

### 内容质量
- [ ] H1 唯一且含主关键词
- [ ] 引言无套话，直接切入痛点
- [ ] 每个 H2 有总结句
- [ ] 段落 ≤4 行
- [ ] 至少 1 个对比表
- [ ] 至少 1 处引用权威标准
- [ ] 无禁用词
- [ ] FAQ 5 条，问题含长尾词

### SEO
- [ ] 主关键词出现在 H1/Title/Meta/首段/URL
- [ ] 关键词密度 0.8%-1.5%
- [ ] 内链 ≥5 个
- [ ] 外链 ≥1 个权威源
- [ ] 图片 alt 完整
- [ ] Title ≤60 字符
- [ ] Meta ≤155 字符

### EEAT
- [ ] 至少 1 张真实图片（非渲染）
- [ ] 作者署名 + LinkedIn
- [ ] Last Updated 日期已写
- [ ] 至少引用 1 个标准
- [ ] 提供可下载 PDF（速查页/Procurement 页必做）

### 技术 SEO（PHP 后端）
- [ ] FAQ Schema JSON-LD 已注入
- [ ] Article Schema JSON-LD 已注入
- [ ] BreadcrumbList Schema 已注入
- [ ] Open Graph 标签完整
- [ ] URL slug 短且含关键词
- [ ] 移动端排版正常
- [ ] 图片已压缩 < 200KB（建议用 WebP）
- [ ] 已提交 Google Search Console
- [ ] 已添加到 sitemap.xml

---

## 📌 第 11 节：每篇文章的 Brief 填写表（写手用）

每篇文章动手前先填好以下 YAML：

```yaml
# ==== 基础信息 ====
Article ID:           [A1-A14, B1-B4, C1-C4, D1-D11]
Type:                 [Pillar / Sub-Pillar / Comparison / Procurement / Application / Troubleshooting / Reference]
Primary Keyword:      [核心 1 个]
Secondary Keywords:   [3-5 个]
Word Count:           [字数]
Audience:             [Engineer / Procurement / Decision Maker]
Search Intent:        [What/How/Why/vs/Pinout/Application/Procurement]

# ==== SEO 字段 ====
URL Slug:             [/news/xxx-xxx]
Title Tag:            [≤60 字符]
Meta Description:     [≤155 字符]
H1:                   [仅 1 个]

# ==== 内链表（开写前预填）====
Pillar Up-link:       [上链 URL]
Side-links:           [3-5 个同集群 URL]
Cross-cluster Links:  [1-2 个跨集群 URL]
Product Down-link:    [产品分类页 URL]
PDF Download:         [资源 URL]

# ==== 图片清单 ====
Hero image:           [filename.webp + alt]
Section images:       [3+ 个 filename + alt]
Real photo:           [必须 ≥1 张实拍]
```

---

## 📌 第 12 节：变更日志

| 版本 | 日期 | 变更 |
|------|------|------|
| v1.0 | 2026-05-14 | 初版：33 篇 Brief / 4 集群 / 12 周节奏 / PHP+CSS 代码栈 |

---

## 📌 第 13 节：下一步行动

写手 / 团队拿到这份 Brief 后的执行流程：

1. **W1 W2 启动**：先写 A1 Pillar（最重要）+ A2 FAKRA Pinout（最易排名）
2. **CSS 准备**：开发同事按 §2 提供的 CSS 变量先做好 article.css 模板
3. **PHP 模板**：做一个文章页模板，自动注入 Article + FAQPage + Breadcrumb Schema
4. **图片素材库**：开始拍真实工厂/产品/装车图，每篇至少备 4-6 张
5. **作者档案**：为每位工程师做署名 + LinkedIn 关联
6. **PDF 资源**：先做 A14 FAKRA 色卡 PDF + D4 Deutsch DT Pinout PDF（这两个是 Lead Magnet 主力）

---

*Brief 文档结束。33 篇文章 / 12 周 / 4 集群 / 7 维度全覆盖。*
