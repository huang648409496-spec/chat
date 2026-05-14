# Premier-Cables.com 车载线网站 SEO 内容矩阵 — AI 交接包

> 本文档是完整的项目上下文。把整份内容作为新 AI 对话的第一条消息发送即可让新 AI 完整接手。
>
> **使用方式**：复制全部内容 → 粘贴到新 AI（Claude / ChatGPT / Gemini）→ 加一句"以上是我的车载线网站文章规划上下文，请基于此协助我后续工作"。
>
> **文档版本**：v1.0
> **最后更新**：2026-05-14
> **关联仓库**：https://github.com/huang648409496-spec/chat

---

## 📌 第 0 节：项目快速概览

| 字段 | 值 |
|------|---|
| 网站域名 | premier-cables.com |
| 业务定位 | 中国制造，车载线（Automotive Cable）外贸 B2B 出口 |
| 主要市场 | 欧美、日韩、东南亚 |
| 内容语言 | 英文 |
| 后台板块结构 | 技术文章（Technical Article）+ 应用文章（Application Article）|
| 后台特性 | 富文本编辑器支持 HTML 上传；JSON-LD 表单填写；不支持 `<style>` 标签；据说支持文章正文专用 CSS |
| 当前阶段 | 全新站点起步阶段，需要建立完整 SEO 内容矩阵 |
| 历史项目 | 已完成 DIN Rail Terminal Block 集群 8 篇文章（在另一站点 premier-cable.net）|

---

## 📌 第 1 节：产品线全景

车载线网站分两大板块共 14 个产品系列：

### 板块 1：Automotive Connector & Cable Assemblies（11 款）
- FAKRA Connectors & Cable Assemblies
- Mini FAKRA Connectors & Cable Assemblies
- HSC / HSL Connectors & Cable Assemblies
- HSAutoLink Connectors & Cable Assemblies
- HSD Connectors & Cable Assemblies
- H-MTD Connectors & Cable Assemblies
- MATEnet Connectors & Cable Assemblies
- GEMnet Connectors & Cable Assemblies
- NETBridge Connectors & Cable Assemblies
- IX Series Automotive Ethernet Cables
- DB9 RS232 Cable Assemblies

### 板块 2：Automotive Wire Harnesses（3 款）
- Aptiv Delphi Cable
- Tyco AMP Cable
- Deutsch DT Series Cable

---

## 📌 第 2 节：已做出的关键决策（请务必遵守）

这些是经过反复讨论确定下来的项目级决策，**新 AI 必须遵守不得推翻**：

### 决策 1：代码风格 = 单文件 inline HTML（AGV 同款）

✅ 采用：单文件、纯 inline style、无外部 CSS、复制粘贴即可使用
❌ 弃用：class-based + 全局 CSS 方案（用户明确说"算了 太复杂 还有bug 就用之前那种杂乱的代码模式吧"）

**原因**：建站后台是富文本编辑器，外部 CSS 上传可靠性不确定，不支持 `<style>` 标签。inline 方案虽然代码冗余但 100% 兼容、出错概率为零、视觉一致。

### 决策 2：分类按"产品集群"而非"技术/应用"

✅ 采用：建立 4 个产品集群分类（如 `DIN Rail Terminal Block`、`Automotive Ethernet`），文章按集群归类
❌ 弃用：仅按"技术文章 / 应用文章"分类（Google 不认文章类型，只认主题相关性）

**实操**：同一集群内的所有文章互相内链，权重聚集；技术/应用板块作为前台导航辅助分类。

### 决策 3：标题优先级 — 搜索意图 > 专业感

✅ 采用：用 What / How / Why 问题词开头；单一关键词聚焦；含具体数字
❌ 弃用：堆叠多产品名的"Complete Guide"式泛标题

例如：
- ❌ "Automotive Ethernet Connectors: Complete Evolution Guide (FAKRA → HSD → H-MTD → MATEnet)"
- ✅ "What is Automotive Ethernet? Benefits Over CAN and LVDS"

### 决策 4：禁用营销话术词

严禁使用：
- best / world-leading / perfect / 100% reliable / No.1 manufacturer
- "In today's industrial world..." 类套话开头

### 决策 5：AI Search 优化必装

每篇文章必含：
- TL;DR 摘要 + Definition Box（≤40 词）
- Markdown 对比表格（不用图片表格）
- FAQ Schema（后台 JSON-LD 表单填写）
- Article Schema（后台 JSON-LD 表单填写）

### 决策 6：每篇文章 9 块结构（不可省略）

1. TL;DR 顶部摘要 3-5 行
2. Definition Box 纯定义段 ≤40 词
3. 引言 80-120 词痛点切入
4. 主体内容（按文章类型）
5. 至少 1 个对比/数据表格
6. FAQ 5 条（Q ≤15 词，A 40-60 词）
7. Related Articles 内链区
8. CTA 含资源下载
9. 文末 Author + LinkedIn + Last Updated

---

## 📌 第 3 节：写作规范

### 3.1 内容禁用词
严禁出现：best / world-leading / perfect / 100% reliable / No.1 manufacturer
禁用开头："In today's industrial world..." 类套话

### 3.2 SEO 字段
- Title Tag ≤60 字符
- Meta Description ≤155 字符
- URL slug 全小写连字符
- 主关键词出现位置：H1 / Title / Meta / 首段 / URL
- 关键词密度：0.8% – 1.5%
- 每篇内链 ≥5 个
- 每篇外链 ≥1 个权威源（IEC / IEEE / UL / IATF / USCAR）

### 3.3 EEAT 要求
- 每篇至少 1 张真实工厂/产品/控制柜实拍图（非渲染图）
- 作者署名带工程师 LinkedIn
- 引用 IEC / UL / VDE / IATF 16949 / USCAR 标准
- 提供 Datasheet / Pinout PDF 下载
- 写明 Last Updated 日期

### 3.4 图片规范
- Pillar 文章 ≥6 张，Sub-Pillar ≥4 张，其它 ≥3 张
- 命名：`[primary-keyword].jpg` 全小写连字符
- Alt ≤125 字符，含主关键词
- 真实图占比 ≥50%
- 文件大小 < 200KB，优先 WebP 格式

### 3.5 写作风格
- 段落 ≤4 行
- 每个 H2 开头一句总结
- 引用具体数字（电压 / 电流 / IP 等级 / MOQ / Lead Time / 长度 / 频率）
- 不写营销话术

### 3.6 标题撰写原则（核心）
1. 一个标题只主打 1 个核心关键词（不堆 4 个产品名）
2. 优先用问题词开头（What / How / Why / Which）
3. 加具体数字（"8 Pin Types"、"6 Common Causes"、"2026 Guide"）
4. 主关键词出现在前 60 字符
5. 同义词留给 Meta Description，不挤进 Title
6. Pillar 文章可加年份（如 "2026 Guide"），Pinout / 对比 / 速查类不加

---

## 📌 第 4 节：完整文章规划（42 个内容单元）

### 4.1 集群 A：Automotive Ethernet Connectors（14 篇 / 5 周）⭐ 最重要

主关键词域：automotive ethernet connector / fakra hsd connector / car ethernet cable

| # | 类型 | 标题 | 主关键词 | 字数 | 板块 |
|---|------|-----|---------|-----|------|
| A1 | Pillar | What is Automotive Ethernet? Benefits Over CAN and LVDS | what is automotive ethernet | 3000 | 技术 |
| A2 | Sub-Pillar | FAKRA Connector Color Codes and Pinout: Full Reference Chart | fakra connector pinout | 2000 | 技术 |
| A3 | Sub-Pillar | What is Mini FAKRA? 4-in-1 Pinout and Vehicle Use Cases | what is mini fakra | 1800 | 技术 |
| A4 | Sub-Pillar | HSD Connector Pinout for LVDS Cameras: Wiring Guide | hsd connector pinout | 2000 | 技术 |
| A5 | Sub-Pillar | H-MTD vs HSD: 10 Gbps Automotive Ethernet Compared | h-mtd connector | 2000 | 技术 |
| A6 | Sub-Pillar | MATEnet vs Rosenberger H-MTD: Which Automotive Ethernet to Choose | matenet connector | 1800 | 技术 |
| A7 | Sub-Pillar | HSAutoLink Pinout: Tyco HSAutoLink I and II Reference | hsautolink connector | 1500 | 技术 |
| A8 | Sub-Pillar | IX Industrial Connector for Automotive: 70% Smaller than RJ45 | ix industrial connector | 1500 | 技术 |
| A9 | Comparison | FAKRA vs HSD: Which Automotive Connector for Your Project | fakra vs hsd | 1800 | 技术 |
| A10 | Procurement | Custom Automotive Ethernet Cable: MOQ, Lead Time, OEM Process | custom automotive ethernet cable | 1500 | 技术 |
| A11 | Application | How to Choose Cables for ADAS Camera Systems: 7 Requirements | adas camera cable | 1800 | 应用 |
| A12 | Application | Robotaxi Cable Solutions: Automotive Ethernet for Self-Driving | robotaxi cable | 1800 | 应用 |
| A13 | Troubleshooting | Why Automotive Ethernet Cables Fail: 6 Common Causes and Fixes | automotive ethernet cable failure | 1800 | 技术 |
| A14 | Reference 速查 | FAKRA Color Code Chart: All Codes from A to Z (Free PDF) | fakra color code chart | 1000 | 技术 |

### 4.2 集群 B：HSC / HSL High-Speed Coax（5 篇 / 2 周）

| # | 类型 | 标题 | 主关键词 | 字数 |
|---|------|-----|---------|-----|
| B1 | Pillar | What is HSC Connector? HSC vs HSL Pinout Compared | hsc connector | 2000 |
| B2 | Sub-Pillar | HSC Connector Pinout for Automotive Surround View Cameras | hsc pinout | 1500 |
| B3 | Comparison | HSC vs FAKRA: Which Coaxial Connector for Camera Cables | hsc vs fakra | 1500 |
| B4 | Application | How HSC Cables Are Used in 360° Surround View Cameras | hsc cable application | 1500 |
| B5 | Reference 速查 | Coax Connector Size Chart: HSC, HSL, FAKRA, BNC Compared | automotive coax size chart | 1000 |

### 4.3 集群 C：Vehicle Serial & Diagnostic（4 篇 / 1.5 周）

| # | 类型 | 标题 | 主关键词 | 字数 |
|---|------|-----|---------|-----|
| C1 | Pillar | What is OBD2 to DB9 Cable? RS232 Wiring for Vehicle Diagnostics | obd2 to db9 cable | 2000 |
| C2 | Sub-Pillar | DB9 to OBD-II Pinout Diagram: Full Wire Reference | db9 to obd2 pinout | 1500 |
| C3 | Application | RS232 Cable for Fleet GPS Trackers: Specs and Wiring | rs232 fleet tracker cable | 1500 |
| C4 | Procurement | Custom OBD2 Cable for Telematics OEM: MOQ and Lead Time | custom obd2 cable manufacturer | 1200 |

### 4.4 集群 D：Automotive Wire Harness（10 篇 / 3.5 周）

| # | 类型 | 标题 | 主关键词 | 字数 |
|---|------|-----|---------|-----|
| D1 | Pillar | What is an Automotive Wire Harness? Aptiv, Tyco, Deutsch Explained | what is automotive wire harness | 2500 |
| D2 | Sub-Pillar | Aptiv Delphi Connector Pinout: GT 150, GT 280, Metri-Pack | aptiv delphi connector | 1800 |
| D3 | Sub-Pillar | Tyco AMP Junior Power Timer Pinout and Crimping Guide | tyco amp junior power timer | 1800 |
| D4 | Sub-Pillar | Deutsch DT Connector Pinout: 2, 4, 6, 8 and 12-Pin Reference | deutsch dt pinout | 1800 |
| D5 | Comparison | Deutsch DT vs Tyco AMP: Which Connector for Heavy-Duty Trucks | deutsch vs tyco connector | 1500 |
| D6 | Procurement | Custom Wire Harness Manufacturer: How to Submit RFQ for OEM | custom wire harness manufacturer | 1500 |
| D7 | Application | EV Battery Wire Harness: BMS Cable Requirements and Specs | ev battery wire harness | 1800 |
| D8 | Application | Heavy Duty Truck Wire Harness: Requirements for Off-Highway Vehicles | heavy duty truck wire harness | 1800 |
| D9 | Troubleshooting | Why Wire Harnesses Fail in Cars: 8 Common Faults and Fixes | wire harness failure | 1500 |
| D10 | Reference 速查 | Deutsch DT Connector Size Chart: Pin Count, Current, Wire Gauge | deutsch dt size chart | 1000 |

### 4.5 全站枢纽 + 供应商导向（4 项）

| # | 类型 | 标题 | 用途 |
|---|------|-----|------|
| HUB1 | 网站枢纽 | Automotive Cable & Connector Solutions: Complete Catalog Overview | 4 集群总入口 |
| SUP1 | 供应商型 | Automotive Cable Manufacturer in China: IATF 16949 Certified Production | 中国制造采购 |
| SUP2 | 供应商型 | EV Battery Harness Manufacturer: How to Qualify Your Supplier | EV 行业采购 |
| SUP3 | 供应商型 | Tier 2 Automotive Connector Supplier: Working with OEM Programs | Tier 2 采购 |

### 4.6 FAQ 大全页（4 个集群各 1 个）

| # | 标题 | 问题数 |
|---|-----|--------|
| FAQ1 | 50 Questions About FAKRA, HSD and Automotive Ethernet — Answered | 50 |
| FAQ2 | HSC and HSL Connector FAQ: 25 Questions Answered | 25 |
| FAQ3 | OBD2 and Vehicle Diagnostic Cable FAQ: 25 Questions Answered | 25 |
| FAQ4 | Automotive Wire Harness FAQ: 50 Questions for OEM Buyers | 50 |

### 4.7 数量汇总

| 类别 | 数量 |
|------|------|
| 集群 A 文章 | 14 |
| 集群 B 文章 | 5 |
| 集群 C 文章 | 4 |
| 集群 D 文章 | 10 |
| 网站枢纽 | 1 |
| 供应商导向 | 3 |
| FAQ 大全 | 4 |
| **总计** | **42** |

---

## 📌 第 5 节：内链架构（4 层）

```
第 1 层：网站枢纽（HUB1）
  └─ 链 4 个集群 Pillar + 4 个产品分类页

第 2 层：集群 Pillar（A1, B1, C1, D1）
  └─ 上链：HUB1 + 产品分类页
  └─ 下链：本集群所有 Sub-Pillar / Cluster / Reference / FAQ大全

第 3 层：集群 Sub-Pillar / Cluster
  └─ 上链：本集群 Pillar
  └─ 平链：本集群其他 Sub-Pillar（≥3 个）
  └─ 下链：相关产品页 + Reference 速查页
  └─ 跨集群链：相关其他集群文章（≥1 个）

第 4 层：Reference 速查页 + FAQ 大全页
  └─ 收集所有同集群文章的反链
  └─ 链：所有同集群文章
  └─ 提供：Datasheet PDF / 速查表下载
```

### 5.1 跨集群链接规则（必做）

| 文章 | 跨集群链接到 |
|------|------------|
| A2 FAKRA | → B3 HSC vs FAKRA |
| A11 ADAS Camera | → B4 HSC for Surround View Camera |
| A12 Robotaxi | → D7 EV Battery Harness |
| C1 OBD2 | → D9 Wire Harness Failures |
| D7 EV Battery | → A1 Automotive Ethernet |

### 5.2 锚文本规则
- 每个目标页用 3-5 种不同锚文本
- 不用"click here"
- 锚文本必须包含目标页关键词

---

## 📌 第 6 节：16 周发布节奏

```
W1-2:  HUB1 + A1 Pillar + A2 FAKRA            → 集群 A 启动
W3-4:  A3 + A4 + A5                          → A 主体
W5-6:  A6 + A7 + A8 + A9                     → A 收尾连接器
W7:    A10 + A14 (FAKRA Color Chart)          → A 转化 + 速查
W8:    A11 + A12 + A13                       → A 应用 + 故障
W9:    FAQ1 (50问) + B1 Pillar                → A 集大成 + B 启动
W10:   B2 + B3 + B4 + B5                     → B 完成
W11:   C1 + C2 + C3 + C4 + FAQ2 + FAQ3       → C 完成 + B/C FAQ
W12:   D1 Pillar + D2 + D3                   → D 启动
W13:   D4 + D5 + D10                         → D 主体
W14:   D6 + D7 + D8                          → D 转化 + 应用
W15:   D9 + FAQ4 (50问)                       → D 收尾
W16:   SUP1 + SUP2 + SUP3                    → 供应商导向收割
```

---

## 📌 第 7 节：客户旅程 7 阶段覆盖

| 旅程阶段 | 用户问题 | 覆盖文章 |
|---------|---------|---------|
| Awareness（认知）| 这是什么？ | A1, B1, C1, D1 |
| Consideration（考虑）| 哪个适合？ | A2-A8, B2, D2-D4 |
| Comparison（对比）| 哪个更好？ | A5, A6, A9, B3, D5 |
| Procurement（采购）| 谁能做？怎么报价？| A10, C4, D6, SUP1-3 |
| Installation（安装）| 怎么装？ | A2, A4, B2, D3（合并入 Sub-Pillar）|
| Troubleshoot（故障）| 出问题怎么办？ | A13, D9 |
| Validation（验证）| 真实效果？ | A11, A12, B4, C3, D7, D8 |

**7/7 全覆盖 ✅**

---

## 📌 第 8 节：工程师 + 采购搜索意图覆盖

### 8.1 工程师搜索意图（8 类）

| 意图 | 示例词 | 覆盖文章 |
|------|------|---------|
| What is（认知）| what is fakra | A1, A3, B1, C1, D1 |
| Pinout（速查）| fakra pinout | A2, A4, A7, D2-D4, A14, D10 |
| How to（操作）| how to crimp fakra | A11, D3 |
| Why fail（故障）| why automotive ethernet fail | A13, D9 |
| vs（对比）| fakra vs hsd | A5, A6, A9, B3, D5 |
| Color code / chart | fakra color code | A14, D10 |
| Specifications | deutsch dt specs | D4, D10 |
| Application | automotive ethernet adas | A11, A12, B4 |

### 8.2 采购搜索意图（7 类）

| 意图 | 示例词 | 覆盖文章 |
|------|------|---------|
| 寻找供应商 | fakra connector manufacturer | SUP1 |
| 询价 / 报价 | custom automotive cable rfq | A10, C4, D6 |
| 认证 / 合规 | iatf 16949 cable supplier | SUP1 |
| 行业 / 应用匹配 | ev battery harness manufacturer | SUP2, D7 |
| 替代品 | phoenix contact alternative | D6 |
| MOQ / Lead Time | custom wire harness moq | A10, C4, D6 |
| 中国制造 | automotive cable manufacturer china | SUP1 |

---

## 📌 第 9 节：代码风格 + HTML 模板

### 9.1 风格说明

- 单文件 inline HTML
- 无外部 CSS、无 `<style>` 标签
- 富文本编辑器复制粘贴即可发布
- 视觉一致：所有文章用同一套配色和板块样式

### 9.2 配色系统

| 用途 | 颜色 |
|------|------|
| Hero 渐变起点 | `#1e3a8a` (navy) |
| Hero 渐变终点 / 主品牌色 | `#0f766e` (teal) |
| 表格表头 | `#004085` |
| 正文深色 | `#111827` |
| 正文 | `#1f2937` |
| 辅助文字 | `#4b5563` |
| 链接色 | `#0f766e` |
| 警告框（橙）| 边框 `#ea580c` 背景 `#fff7ed` 文字 `#9a3412` |
| 提示框（绿）| 边框 `#16a34a` 背景 `#f0fdf4` 文字 `#166534` |
| 引用框（青）| 边框 `#0f766e` 背景 `#f8fafc` |

### 9.3 板块顺序（按出现顺序）

1. Hero Section（含分类标签 + H1 + 描述段）
2. TL;DR Box（绿色背景）
3. Definition Box（蓝色左边框）
4. Table of Contents（双列 ol）
5. Section 1 ~ Section N（含 id 锚点 + 总结段 + 表格 + 图片占位）
6. FAQ Section（灰色背景 + 5 条 Q&A）
7. Related Articles（白色卡片 + 6 个集群内链）
8. CTA Section（蓝色背景 + 询盘按钮）
9. Contact Block（白色卡片 + Email/WhatsApp/Website）
10. Footer Meta（Author + Reviewed by + Last Updated）

### 9.4 样板代码片段（Hero + TL;DR + Definition + 表格示例）

```html
<div style="box-sizing:border-box; color:#333333; font-family:'Segoe UI',Roboto,Helvetica,Arial,sans-serif; line-height:1.8; margin-bottom:40px; margin-left:auto; margin-right:auto; margin-top:40px; max-width:1200px; padding:0 20px; width:100%">

<!-- Hero Section -->
<div style="background-color:#1e3a8a; background-image:linear-gradient(135deg, #1e3a8a 0%, #0f766e 100%); border-radius:8px; box-shadow:0 8px 20px rgba(0,0,0,0.15); color:#ffffff; margin-bottom:40px; padding:50px 30px; text-align:center">
<div style="color:#a7f3d0; font-size:13px; font-weight:700; letter-spacing:0.04em; margin-bottom:12px; text-transform:uppercase">Pillar Guide</div>

<h1>[文章标题]</h1>

<p style="color:#e2e8f0; font-size:18px; line-height:1.8; margin-bottom:18px; margin-left:auto; margin-right:auto; margin-top:0; max-width:1000px">[Hero 描述段，80-120 词]</p>
</div>

<!-- TL;DR Box -->
<div style="background:#f0fdf4; border:1px solid #bbf7d0; border-radius:8px; margin-bottom:30px; padding:22px 28px">
<div style="color:#166534; font-size:14px; font-weight:700; letter-spacing:0.03em; margin-bottom:10px; text-transform:uppercase">TL;DR - Key Takeaways</div>

<ul style="color:#166534; font-size:15px; line-height:1.7; margin-bottom:0; margin-left:0; margin-right:0; margin-top:0; padding-left:20px" class="pro-ulli1">
  <li>[要点 1]</li>
  <li>[要点 2]</li>
  <li>[要点 3]</li>
  <li>[要点 4]</li>
  <li>[要点 5]</li>
</ul>
</div>

<!-- Definition Box -->
<div style="background:#eff6ff; border-left:4px solid #3b82f6; border-radius:4px; margin-bottom:40px; padding:18px 24px">
<p style="color:#1e40af; font-size:16px; font-weight:500; line-height:1.7; margin-bottom:0; margin-top:0"><strong>Definition:</strong> [≤40 词的纯定义]</p>
</div>

<!-- 表格示例 -->
<div style="border-radius:6px; border:1px solid #dddddd; box-shadow:0 4px 15px rgba(0,0,0,0.03); margin-bottom:25px; overflow-x:auto">
<table cellspacing="0" cellpadding="0" style="border-collapse:collapse; width:100%">
  <thead>
    <tr>
      <th style="background-color:#004085; text-align:left; padding:12px 14px"><span style="color:#ffffff">列标题1</span></th>
      <th style="background-color:#004085; text-align:left; padding:12px 14px"><span style="color:#ffffff">列标题2</span></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border-bottom:1px solid #eeeeee; padding:11px 14px">数据1</td>
      <td style="border-bottom:1px solid #eeeeee; padding:11px 14px">数据2</td>
    </tr>
  </tbody>
</table>
</div>

<!-- 警告框 -->
<div style="background:#fff7ed; border-left:4px solid #ea580c; border-radius:4px; margin-bottom:25px; padding:15px">
<p style="color:#9a3412; font-size:15px; margin-bottom:0; margin-left:0; margin-right:0; margin-top:0"><strong>⚠️ Warning:</strong> [警告内容]</p>
</div>

<!-- 提示框 -->
<div style="background:#f0fdf4; border-left:4px solid #16a34a; border-radius:4px; margin-bottom:25px; padding:15px">
<p style="color:#166534; font-size:15px; margin-bottom:0; margin-left:0; margin-right:0; margin-top:0"><strong>💡 Pro tip:</strong> [提示内容]</p>
</div>

<!-- 完整模板请参考已完成的 8 篇 DIN Rail 文章 -->
</div>
```

**完整代码模板**：参考已完成的 DIN Rail 集群 8 篇 HTML 文件（仓库 `huang648409496-spec/chat` 主分支）。新 AI 必须先阅读其中至少 1 篇完整 HTML 才能开始写新文章，确保格式一致。

---

## 📌 第 10 节：每篇文章 Brief 模板

每篇文章动手前先填写以下表格：

```yaml
# ==== 文章基础信息 ====
Article ID:           [A1-D10 / SUP1-3 / FAQ1-4]
Article Type:         [Pillar / Sub-Pillar / Comparison / Procurement / Troubleshooting / Application / Reference / Hub / FAQ]
Primary Keyword:      [核心目标词，1 个]
Secondary Keywords:   [次要词，3-5 个]
Target Word Count:    [字数范围]
Target Audience:      [Engineer / Procurement / Decision Maker]
Search Intent:        [What/How/Why/vs/Pinout/Specs/Application/Procurement]

# ==== SEO 字段 ====
URL Slug:             [/news/xxx-xxx-xxx]
Title Tag:            [≤60 字符，含主关键词]
Meta Description:     [≤155 字符，含主关键词 + CTA 暗示]
H1:                   [仅 1 个，含主关键词]
Schema Types:         [Article + FAQPage]

# ==== 内链字段（开写前预填好）====
Pillar Up-link:       [上链支柱页 URL]
Cluster Side-links:   [3-5 个同集群文章 URL]
Cross-cluster Links:  [1-2 个跨集群 URL]
Product Down-link:    [产品分类/详情页 URL]
PDF Download:         [关联资源 PDF URL]
```

---

## 📌 第 11 节：发布前检查清单

每篇文章上线前必须勾选完成：

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
- [ ] 主关键词出现位置正确（H1/Title/Meta/首段/URL）
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
- [ ] 提供可下载 PDF

### 技术 SEO
- [ ] FAQ Schema 已配置
- [ ] Article Schema 已配置
- [ ] URL slug 短且含关键词
- [ ] 移动端排版正常
- [ ] 图片已压缩 < 200KB
- [ ] 已提交 Google Search Console

---

## 📌 第 12 节：站点基础工作清单（不只写文章）

这些是支撑文章效果的基础，**优先级高于第 4 篇文章之后**：

| 任务 | 优先级 | 说明 |
|------|------|------|
| 产品分类页 SEO 改造 | ⭐⭐⭐ | 每个分类页 200-400 词原创介绍 |
| About / Team / Certifications 页 | ⭐⭐⭐ | EEAT 关键 |
| Sitemap.xml + Search Console | ⭐⭐⭐ | 提交后才能被抓 |
| FAQ Schema 模板（后台填）| ⭐⭐⭐ | 每篇必装 |
| Article Schema 模板（后台填）| ⭐⭐⭐ | 每篇必装 |
| 面包屑导航 | ⭐⭐ | Home > Category > Sub-Cat > Article |
| 真实工厂图 + 产品图素材库 | ⭐⭐⭐ | EEAT 必需 |
| 全站统一作者署名系统 | ⭐⭐ | EEAT 信号 |

---

## 📌 第 13 节：参考资源 — 已完成的 DIN Rail 集群

新 AI 上手前**必须**先阅读以下文件作为参照样板（仓库 `huang648409496-spec/chat`）：

| 文件 | 用途 |
|------|------|
| `01-din-rail-pillar.html` | Pillar 文章样板（2800 词） |
| `02-rj45-din-rail-terminal-block.html` | Sub-Pillar 样板（2100 词，含 Pinout 表）|
| `03-db9-din-rail-terminal-block.html` | Sub-Pillar 样板（2200 词，含 RS232/485/422 对比）|
| `04-db25-din-rail-terminal-block.html` | Sub-Pillar 样板（1500 词）|
| `05-screw-vs-spring-vs-push-in-terminal.html` | Comparison 样板（1600 词）|
| `06-custom-oem-din-rail-terminal-block.html` | Procurement 样板（1500 词）|
| `07-din-rail-terminal-block-troubleshooting.html` | Troubleshooting 样板（1800 词，6 问题×4 段结构）|
| `08-plc-control-cabinet-wiring-din-rail.html` | Application 样板（1800 词，含脱敏案例）|
| `din-rail-cluster-8-briefs.md` | Brief 文档示例 |

**这 8 篇文章是格式标准，新 AI 必须遵循同一风格输出。**

---

## 📌 第 14 节：用法说明 — 给新 AI 的指令模板

把这份文档完整粘贴给新 AI 后，加上这段话：

```
以上是 Premier-Cables.com 车载线网站文章规划的完整上下文，请基于此协助我后续工作。

【请你严格遵守以下原则】
1. 代码风格用单文件 inline HTML，参考已完成的 8 篇 DIN Rail 文章格式（必须先读至少 1 篇 HTML 才能开始写新文章）
2. 标题用 What/How/Why 问题词开头，单一关键词聚焦，不堆产品名
3. 每篇必含 9 块结构（TL;DR + Definition + 引言 + 主体 + 表格 + FAQ5 + Related + CTA + Author/Date）
4. 禁用词：best / world-leading / perfect / 100% reliable / No.1 manufacturer
5. 不写营销话术，引用具体数字（电压、电流、IP、MOQ、Lead Time）
6. 内链 ≥5 个，外链 ≥1 个权威源（IEC/IEEE/UL/IATF）

【我现在的任务是】
[在这里写具体任务，例如：]
- 出 A1 Pillar 文章的完整 HTML 初稿
- 把 30 篇 Brief 转成可执行的工作表格
- 给 A14 FAKRA Color Code 速查页设计内容大纲
- ...
```

---

## 📌 第 15 节：变更日志

| 版本 | 日期 | 变更 |
|------|------|------|
| v1.0 | 2026-05-14 | 初版交接包：4 集群 + HUB + 供应商 + FAQ 大全共 42 项规划 |

---

## 📌 第 16 节：最佳实践提醒（避免新 AI 踩坑）

### ⚠️ 坑 1：不同 AI 的 HTML 输出偏好
- Claude / ChatGPT-4o：能严格遵守 inline style
- Gemini：可能自作主张加 class 或 `<style>` 标签
- DeepSeek / Qwen：HTML 输出可能丢失部分 inline style

**对策**：明确告诉新 AI："必须按 DIN Rail 已完成文章的 HTML 格式输出，不允许使用 class、`<style>` 标签或外部 CSS"

### ⚠️ 坑 2：长上下文需求
- 整套规划 42 项 + HTML 模板较长，需要长上下文 AI（Claude Sonnet 4 / GPT-4o / Gemini 2.5 Pro）
- 短上下文模型（GPT-3.5 / 小模型）会丢失细节

### ⚠️ 坑 3：Steering 历史不会迁移
本交接包已经包含所有"已做决策"，但**新 AI 不知道讨论过程**。如果新 AI 提议推翻第 2 节的决策，请明确拒绝并指向本文档。

### ⚠️ 坑 4：图片占位符
所有 HTML 中图片用 `src="/uploads/PLACEHOLDER-xxx.webp"` 占位，发布前必须替换。新 AI 写新文章时也应使用同样格式占位。

### ⚠️ 坑 5：Author 占位符
所有 HTML 中作者用 `[Engineer Name]` 和 `[Senior Engineer Name]` 占位，发布前必须替换为真实姓名 + LinkedIn。

---

## 🎯 收尾：交接包使用流程

1. ✅ 把这份完整文档复制粘贴到新 AI 的第一条消息
2. ✅ 加上第 14 节的指令模板 + 你当前的具体任务
3. ✅ 让新 AI 先读 GitHub 仓库里的 1-2 篇已完成 HTML 作为格式参照
4. ✅ 开始具体任务

**有问题随时回原 AI 对话验证或更新交接包版本。**

---

*交接包终结。如新 AI 完整接收此文档，应能独立完成后续 42 项内容单元的所有工作。*
