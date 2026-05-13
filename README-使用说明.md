# Premier Cable 文章模板使用说明

## 文件清单

| 文件 | 用途 | 上传到哪 |
|------|------|---------|
| `article.css` | 全局文章样式（只上传一次） | CMS 后台的"文章正文专用 CSS"位置 |
| `01-din-rail-interface-terminal-block-guide.html` | #01 Pillar 文章 HTML 正文 | 富文本编辑器 → 切换到"源代码/HTML"模式 → 粘贴 |

---

## 一、首次部署步骤

### Step 1：上传 CSS（只需做一次）

1. 联系服务商，确认"文章正文专用 CSS"的上传入口
2. 把 `article.css` 整个文件内容上传/粘贴到该位置
3. 保存后，打开任意一篇已有文章，检查页面是否有样式冲突
4. 如果有冲突（如字体变了、间距异常），告诉我具体现象，我调整 CSS

### Step 2：发布文章

1. 后台新建文章 → 填写标题、SEO 字段（见下方）
2. 进入富文本编辑器 → 切换到 **HTML/源代码模式**
3. 将 `01-din-rail-interface-terminal-block-guide.html` 的全部内容粘贴进去
4. 切回"可视化模式"确认排版正常
5. 替换图片占位符（见下方图片替换说明）
6. 发布

---

## 二、SEO 字段填写（后台表单）

| 字段 | 填写内容 |
|------|---------|
| Title Tag | `DIN Rail Interface Terminal Blocks: RJ45, DB9, DB25 Guide` |
| Meta Description | `Practical guide to DIN rail interface terminal blocks for RJ45, DB9 and DB25 wiring. Learn applications, selection criteria and installation tips for industrial cabinets.` |
| URL Slug | `din-rail-interface-terminal-block-guide` |
| 文章分类 | News / Knowledge（按你站点分类选） |
| 作者 | 你的工程师署名 |

---

## 三、JSON-LD 结构化数据（后台表单）

后台 JSON-LD 表单填写这些字段：

### Article Schema

```
Type: TechArticle（如不支持则选 Article）
Headline: DIN Rail Interface Terminal Blocks: Complete Guide for RJ45, DB9 and DB25
Author: [工程师姓名]
Author URL: [LinkedIn URL]
datePublished: 2026-05-13
dateModified: 2026-05-13
Publisher: Premier Cable
Image: [文章主图 URL]
Description: [同 Meta Description]
```

### FAQ Schema（6 条）

```
Q1: What is a DIN rail interface terminal block?
A1: It is a passive wiring module that converts a standard connector (RJ45, DB9, or DB25) into numbered screw or spring terminals on a 35 mm DIN rail, making cabinet wiring easier to install, label, and service.

Q2: Is an RJ45 DIN rail terminal block the same as an Ethernet switch?
A2: No. The terminal block is a passive pass-through — it connects each RJ45 pin directly to a terminal. It does not switch packets, regenerate signals, or perform any active function.

Q3: Can DB9 terminal blocks be used for RS-485?
A3: Yes. RS-485 typically uses pins 3 (A/D+), 8 (B/D−), and 5 (GND) on a DB9. Always verify the device's specific pinout, as some manufacturers use non-standard layouts.

Q4: What is the difference between DB9 and DB25 terminal blocks?
A4: DB9 modules carry 9 signals — usually serial communication. DB25 modules carry 25 signals for multi-axis machine control, parallel interfaces, or high-pin-count breakouts.

Q5: Can the pin assignment be customized?
A5: Yes. Most manufacturers can reroute pin-to-terminal mapping, change connector type, integrate LEDs, or modify the housing. Custom layouts usually require a quotation and a 4–6 week lead time.

Q6: What DIN rail standard do these modules use?
A6: The standard 35 mm top-hat rail defined in IEC/EN 60715 (formerly DIN EN 50022). This is the most common rail in industrial cabinets worldwide.
```

---

## 四、图片替换说明

文章 HTML 中有 4 个图片占位符，搜索 `IMAGE_PLACEHOLDER` 即可找到。

替换步骤：
1. 准备好图片（规格见下表）
2. 上传到 CMS 图片库
3. 获取图片 URL
4. 替换 HTML 中的 `src="/uploads/IMAGE_PLACEHOLDER_xxx.webp"` 为真实 URL

| 占位符名 | 建议图片内容 | 文件命名 |
|---------|-------------|---------|
| `din-rail-interface-terminal-block-overview` | RJ45+DB9+DB25 三个模块合照 | `din-rail-interface-terminal-block-overview.webp` |
| `terminal-block-wiring-diagram` | 接线示意图（connector→terminal） | `din-rail-terminal-block-wiring-diagram.webp` |
| `plc-control-cabinet-din-rail` | 真实控制柜安装实拍图 ★ | `plc-control-cabinet-din-rail-terminal.webp` |
| `din-rail-terminal-block-installed` | RJ45/DB9 模块近距离特写 | `rj45-db9-din-rail-terminal-block-close-up.webp` |

### 图片规格要求

- 格式：WebP 优先，JPG 备选
- 尺寸：宽 1200px（最大），高按比例
- 文件大小：< 200 KB
- Alt 文本：已在 HTML 中写好，不需额外修改
- ★ 至少 1 张必须是真实工厂/控制柜实拍图（EEAT 要求）

---

## 五、兼容性测试清单

上传 CSS 和第一篇文章后，用以下清单逐项确认：

### A. CSS 是否生效

```
[ ] Hero 区域显示蓝绿渐变背景
[ ] TL;DR 绿色框显示正常
[ ] Definition Box 蓝色左边框显示正常
[ ] 表格表头为绿色（#0f766e）背景白字
[ ] FAQ 区域有灰色背景
[ ] CTA 区域有蓝色背景
[ ] 按钮显示绿色圆角
```

### B. HTML 标签/属性是否被保留

```
[ ] class 属性保留（检查：右键审查元素，看 class="pcm-hero" 是否还在）
[ ] id 属性保留（检查：点击目录锚链接能跳转到对应段落）
[ ] <time> 标签保留（检查源码中 <time datetime="2026-05"> 是否还在）
[ ] rel="noopener noreferrer" 保留（检查外链的 rel 属性）
[ ] loading="lazy" 保留（检查图片标签）
```

### C. 如果某项被剥离了

| 被剥离的 | 影响 | 回退方案 |
|---------|------|---------|
| class 属性 | 所有样式失效 | 回退到 inline style 版本（联系我重出） |
| id 属性 | 目录锚链接失效 | 改用 name 属性或 a 标签锚点 |
| `<time>` 标签 | 语义丢失，不影响显示 | 可忽略，用普通文字代替 |
| rel 属性 | 安全性降低 | 可接受，不影响 SEO |
| loading="lazy" | 图片全部立即加载 | 可接受，性能略降 |

**如果 class 被剥离，这是最关键的。告诉我，我会在 30 分钟内给你一份 inline style 回退版（方案 C）。**

---

## 六、后续文章怎么写

### 复制模板流程

1. 复制 `01-xxx.html` 为新文件
2. 替换以下内容：
   - Hero 区域的标签文字、H1、描述
   - TL;DR 内容
   - Definition Box 内容
   - 各 Section 的 H2/H3/正文
   - 表格数据
   - FAQ 问答
   - Related Articles 链接
   - 图片
   - Footer 日期

3. **不要动的部分**：
   - class 名称（全部保持 pcm-xxx 不变）
   - HTML 结构层次
   - 组件块的排列顺序

### 每种文章类型的差异

| 文章类型 | 与 Pillar 相比的差异 |
|---------|-------------------|
| Sub-Pillar | 去掉 Section 4(DIN Rail Standards) 和 Section 8(Customization)，加入 How-to 步骤 |
| Comparison | 主体改为 3 列大对比表 + 每项详解 |
| Procurement | 主体改为 买家提供信息清单 + MOQ/Lead Time 表 |
| Troubleshooting | 主体改为 Problem→Cause→Diagnose→Fix 重复结构 |
| Application | 主体改为 行业背景 + 方案 + 脱敏案例 |

---

## 七、当前代码对比旧版的改进

| 维度 | 旧版 | 新版 |
|------|------|------|
| inline style 次数 | 80+ | **0**（全部用 class） |
| HTML 体积 | ~45 KB | **~12 KB**（减少 73%） |
| 修改全站颜色 | 改 20+ 处 | **改 CSS 1 处** |
| Schema 支持 | 无 | FAQ + Article（后台表单填） |
| TL;DR / Definition Box | 无 | ✅ 有 |
| Author + Date | 无 | ✅ 有 |
| AI Search 友好度 | 低 | ✅ TL;DR + Definition + Table + FAQ |
| 移动端 | 未优化 | ✅ 768px 断点响应式 |
| 正文行宽 | 1200px（太宽） | **800px**（pcm-prose 限制） |
| 品牌色统一 | 5 个不同蓝色 | **2 个主色**（#0f766e + #1e3a8a） |

---

## 八、给服务商的额外问题（如还没问）

如果 CSS 上传后发现问题，可能需要服务商确认：

1. CSS 文件是通过 `<link>` 引入还是直接注入到 `<style>` 标签？
2. CSS 的加载优先级是否高于主题默认样式？（如果不是，我需要加 `!important`）
3. CSS 文件有大小限制吗？（当前 article.css 约 5 KB，不应有问题）

---

## 九、维护日历

| 时间 | 动作 |
|------|------|
| 每篇发布时 | 按本说明操作 |
| 每月 1 次 | 检查内链是否有 404（新文章发布后旧文章的占位链接需要激活） |
| 每 6 个月 | 更新 Last Updated 日期，补充新内容或新图片 |
| 需要改全站样式时 | 只改 article.css 一个文件，全站生效 |

---

*文档版本: 1.0 | 创建日期: 2026-05-13*
