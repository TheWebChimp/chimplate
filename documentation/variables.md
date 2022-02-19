<style>
	.shade {

		display: inline-block;
		width: 32px;
		height: 32px;
	}

	table {

		width: 100% !important;
		display: table !important;
	}
</style>

# Chimplate

## Variables

### Explanation

Chimplate has been created using [LESS](https://lesscss.org/). There's a lot of information online pointing that SASS may have won the battle agains less. Even [this post on reddit](https://www.reddit.com/r/webdev/comments/5asrch/is_less_dead/) from __2016__ is debating if LESS has already lost or if it's even still used. Well, it's 2022 and Nuxt has a library for it, it can still be used so I would say it works pretty well. From other perspective, CSS now have a wide usage on native CSS variables so maybe a preprocessor is not mandatory now. This is even supported by the fact that, for example, it is a loooot easier to get color modes (light mode vs dark mode) using CSS variables than LESS variables.

Now, to understand Chimplate variables, we need to understand CSS variables vs. LESS Variables.

Let's start with LESS variables. Less variables have a *Lazy Evaluation* meaning that they do not have to be declared before being used. From LESS documentation, its important to note:

>When defining a variable twice, the last definition of the variable is used, searching from the current scope upwards. This is similar to css itself where the last property inside a definition is used to determine the value.

This means that we cannot have one variable being defined and then changed based on a parent class, for example this:

```css

	html[data-theme="theme-dark"] {

		@color: white;
		@background: black;
	}

	html[data-theme="theme-light"] {

		@color: black;
		@background: white;
	}

	body {

		color: @color;
		background: @background;
	}

```

In this case, we will receive a message of **NameError: variable \@color is undefined** in the body definition since the variables have not been defined in the global or body scope.

So, to change variables based on a theme data on the html node we would need to depend in something different. Enter, CSS Variables.

CSS Variables can change based on the scope, so if we define the following:

```css

	:root[data-theme="theme-dark"] {

		--color: white;
		--background: black;
	}

	:root[data-theme="theme-light"] {

		--color: black;
		--background: white;
	}

	body {

		color: var(--color);
		background: var(--background);
	}

```

We will get what we expect. Changing the theme to dark or light will have a reaction over body color and background.

### Index

Here the different variables we have available:

-----

#### Animation

Animation variables are a kind of helpers since we can define animation directly in CSS.

##### Variables

<small>**Note:** variables depend on the `easing` variables:</small>

| Name            | Variable                     | Definition                          |
|:----------------|:-----------------------------|:------------------------------------|
| Fade In         | `@animation-fade-in`         | `fade-in .5s @ease-3`               |
| Fade Out        | `@animation-fade-out`        | `fade-out .5s @ease-3`              |
| Scale Up        | `@animation-scale-up`        | `scale-up .5s @ease-3`              |
| Scale Down      | `@animation-scale-down`      | `scale-down .5s @ease-3`            |
| Slide Out Up    | `@animation-slide-out-up`    | `slide-out-up .5s @ease-3`          |
| Slide Out Down  | `@animation-slide-out-down`  | `slide-out-down .5s @ease-3`        |
| Slide Out Right | `@animation-slide-out-right` | `slide-out-right .5s @ease-3`       |
| Slide Out Left  | `@animation-slide-out-left`  | `slide-out-left .5s @ease-3`        |
| Slide In Up     | `@animation-slide-in-up`     | `slide-in-up .5s @ease-3`           |
| Slide In Down   | `@animation-slide-in-down`   | `slide-in-down .5s @ease-3`         |
| Slide In Right  | `@animation-slide-in-right`  | `slide-in-right .5s @ease-3`        |
| Slide In Left   | `@animation-slide-in-left`   | `slide-in-left .5s @ease-3`         |
| Shake X         | `@animation-shake-x`         | `shake-x .75s @ease-out-5`          |
| Shake Y         | `@animation-shake-y`         | `shake-y .75s @ease-out-5`          |
| Spin            | `@animation-spin`            | `spin 2s linear infinite`           |
| Ping            | `@animation-ping`            | `ping 5s @ease-out-3 infinite`      |
| Blink           | `@animation-blink`           | `blink 1s @ease-out-3 infinite`     |
| Float           | `@animation-float`           | `float 3s @ease-in-out-3 infinite`  |
| Bounce          | `@animation-bounce`          | `bounce 2s @ease-squish-2 infinite` |
| Pulse           | `@animation-pulse`           | `pulse 2s @ease-out-3 infinite`     |

##### How to use them

Just throw the variable wherever you want an animation to happen:

```css
.loaded {
	animation: @-animation-fade-in forwards;
}
```

-----

#### Aspects

Aspect ratios are variables that help us give alias to different possible aspect ratios we would like to use in our project.

##### Variables

| Name       | Variable            | Definition |
|:-----------|:--------------------|:-----------|
| Box        | `@ratio-box`        | `1`        |
| Landscape  | `@ratio-landscape`  | `4/3`      |
| Portrait   | `@ratio-portrait`   | `3/4`      |
| Widescreen | `@ratio-widescreen` | `16/9`     |
| Ultrawide  | `@ratio-ultrawide`  | `18/5`     |
| Golden     | `@ratio-golden`     | `1.6180/1` |

##### How to use them

Just throw the variable wherever you want an animation to happen:

```css
.video-thumbnail {
	block-size: 480px;
	aspect-ratio: @-ratio-widescreen;
}
```

#### Borders

Border variables give us two types: border-sizes and border-radiuses.

##### Variables

###### Border Sizes

| Name          | Variable         | Definition |
|:--------------|:-----------------|:-----------|
| Border Size 1 | `@border-size-1` | `1px`      |
| Border Size 2 | `@border-size-2` | `2px`      |
| Border Size 3 | `@border-size-3` | `5px`      |
| Border Size 4 | `@border-size-4` | `10px`     |
| Border Size 5 | `@border-size-5` | `25px`     |

###### Border Radius

| Name                 | Variable                | Definition                                           |
|:---------------------|:------------------------|:-----------------------------------------------------|
| Radius 1             | `@radius-1`             | `2px`                                                |
| Radius 2             | `@radius-2`             | `5px`                                                |
| Radius 3             | `@radius-3`             | `1rem`                                               |
| Radius 4             | `@radius-4`             | `2rem`                                               |
| Radius 5             | `@radius-5`             | `4rem`                                               |
| Radius 6             | `@radius-6`             | `8rem`                                               |
| Radius Round         | `@radius-round`         | `1e5px`                                              |
| Radius Blob 1        | `@radius-blob-1`        | `30% 70% 70% 30% / 53% 30% 70% 47%`                  |
| Radius Blob 2        | `@radius-blob-2`        | `53% 47% 34% 66% / 63% 46% 54% 37%`                  |
| Radius Blob 3        | `@radius-blob-3`        | `37% 63% 56% 44% / 49% 56% 44% 51%`                  |
| Radius Blob 4        | `@radius-blob-4`        | `63% 37% 37% 63% / 43% 37% 63% 57%`                  |
| Radius Blob 5        | `@radius-blob-5`        | `49% 51% 48% 52% / 57% 44% 56% 43%`                  |
| Radius Conditional 1 | `@radius-conditional-1` | `clamp(0px, calc(100vw - 100%) * 1e5, @{-radius-1})` |
| Radius Conditional 2 | `@radius-conditional-2` | `clamp(0px, calc(100vw - 100%) * 1e5, @{-radius-2})` |
| Radius Conditional 3 | `@radius-conditional-3` | `clamp(0px, calc(100vw - 100%) * 1e5, @{-radius-3})` |
| Radius Conditional 4 | `@radius-conditional-4` | `clamp(0px, calc(100vw - 100%) * 1e5, @{-radius-4})` |
| Radius Conditional 5 | `@radius-conditional-5` | `clamp(0px, calc(100vw - 100%) * 1e5, @{-radius-5})` |
| Radius Conditional 6 | `@radius-conditional-6` | `clamp(0px, calc(100vw - 100%) * 1e5, @{-radius-6})` |


#### Colors
Color variables use a set of different colors in 10 different shades, each one from 0 (lighter) to 9 (darker).

##### Variables
The colors we use are the following

| Color  | Variable      | Shades                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
|:-------|:--------------|:------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Gray   | `@gray-{0-9}` | <span class="shade" style="background-color: #f8f9fa;"></span> <span class="shade" style="background-color: #f1f3f5;"></span> <span class="shade" style="background-color: #e9ecef;"></span> <span class="shade" style="background-color: #dee2e6;"></span> <span class="shade" style="background-color: #ced4da;"></span> <span class="shade" style="background-color: #adb5bd;"></span> <span class="shade" style="background-color: #868e96;"></span> <span class="shade" style="background-color: #495057;"></span> <span class="shade" style="background-color: #343a40;"></span> <span class="shade" style="background-color: #212529;"></span> |
| Red    | `@red-{0-9}`  | <span class="shade" style="background-color: #fff5f5;"></span> <span class="shade" style="background-color: #ffe3e3;"></span> <span class="shade" style="background-color: #ffc9c9;"></span> <span class="shade" style="background-color: #ffa8a8;"></span> <span class="shade" style="background-color: #ff8787;"></span> <span class="shade" style="background-color: #ff6b6b;"></span> <span class="shade" style="background-color: #fa5252;"></span> <span class="shade" style="background-color: #f03e3e;"></span> <span class="shade" style="background-color: #e03131;"></span> <span class="shade" style="background-color: #c92a2a;"></span> |
| Pink   | `@pink-{0-9}` | <span class="shade" style="background-color: #fff0f6;"></span> <span class="shade" style="background-color: #ffdeeb;"></span> <span class="shade" style="background-color: #fcc2d7;"></span> <span class="shade" style="background-color: #faa2c1;"></span> <span class="shade" style="background-color: #f783ac;"></span> <span class="shade" style="background-color: #f06595;"></span> <span class="shade" style="background-color: #e64980;"></span> <span class="shade" style="background-color: #d6336c;"></span> <span class="shade" style="background-color: #c2255c;"></span> <span class="shade" style="background-color: #a61e4d;"></span> |
| Grape  | `@pink-{0-9}` | <span class="shade" style="background-color: #f8f0fc;"></span> <span class="shade" style="background-color: #f3d9fa;"></span> <span class="shade" style="background-color: #eebefa;"></span> <span class="shade" style="background-color: #e599f7;"></span> <span class="shade" style="background-color: #da77f2;"></span> <span class="shade" style="background-color: #cc5de8;"></span> <span class="shade" style="background-color: #be4bdb;"></span> <span class="shade" style="background-color: #ae3ec9;"></span> <span class="shade" style="background-color: #9c36b5;"></span> <span class="shade" style="background-color: #862e9c;"></span> |
| Violet | `@pink-{0-9}` | <span class="shade" style="background-color: #f3f0ff;"></span> <span class="shade" style="background-color: #e5dbff;"></span> <span class="shade" style="background-color: #d0bfff;"></span> <span class="shade" style="background-color: #b197fc;"></span> <span class="shade" style="background-color: #9775fa;"></span> <span class="shade" style="background-color: #845ef7;"></span> <span class="shade" style="background-color: #7950f2;"></span> <span class="shade" style="background-color: #7048e8;"></span> <span class="shade" style="background-color: #6741d9;"></span> <span class="shade" style="background-color: #5f3dc4;"></span> |
| Indigo | `@pink-{0-9}` | <span class="shade" style="background-color: #edf2ff;"></span> <span class="shade" style="background-color: #dbe4ff;"></span> <span class="shade" style="background-color: #bac8ff;"></span> <span class="shade" style="background-color: #91a7ff;"></span> <span class="shade" style="background-color: #748ffc;"></span> <span class="shade" style="background-color: #5c7cfa;"></span> <span class="shade" style="background-color: #4c6ef5;"></span> <span class="shade" style="background-color: #4263eb;"></span> <span class="shade" style="background-color: #3b5bdb;"></span> <span class="shade" style="background-color: #364fc7;"></span> |
| Blue   | `@pink-{0-9}` | <span class="shade" style="background-color: #e7f5ff;"></span> <span class="shade" style="background-color: #d0ebff;"></span> <span class="shade" style="background-color: #a5d8ff;"></span> <span class="shade" style="background-color: #74c0fc;"></span> <span class="shade" style="background-color: #4dabf7;"></span> <span class="shade" style="background-color: #339af0;"></span> <span class="shade" style="background-color: #228be6;"></span> <span class="shade" style="background-color: #1c7ed6;"></span> <span class="shade" style="background-color: #1971c2;"></span> <span class="shade" style="background-color: #1864ab;"></span> |
| Cyan   | `@pink-{0-9}` | <span class="shade" style="background-color: #e3fafc;"></span> <span class="shade" style="background-color: #c5f6fa;"></span> <span class="shade" style="background-color: #99e9f2;"></span> <span class="shade" style="background-color: #66d9e8;"></span> <span class="shade" style="background-color: #3bc9db;"></span> <span class="shade" style="background-color: #22b8cf;"></span> <span class="shade" style="background-color: #15aabf;"></span> <span class="shade" style="background-color: #1098ad;"></span> <span class="shade" style="background-color: #0c8599;"></span> <span class="shade" style="background-color: #0b7285;"></span> |
| Teal   | `@pink-{0-9}` | <span class="shade" style="background-color: #e6fcf5;"></span> <span class="shade" style="background-color: #c3fae8;"></span> <span class="shade" style="background-color: #96f2d7;"></span> <span class="shade" style="background-color: #63e6be;"></span> <span class="shade" style="background-color: #38d9a9;"></span> <span class="shade" style="background-color: #20c997;"></span> <span class="shade" style="background-color: #12b886;"></span> <span class="shade" style="background-color: #0ca678;"></span> <span class="shade" style="background-color: #099268;"></span> <span class="shade" style="background-color: #087f5b;"></span> |
| Green  | `@pink-{0-9}` | <span class="shade" style="background-color: #ebfbee;"></span> <span class="shade" style="background-color: #d3f9d8;"></span> <span class="shade" style="background-color: #b2f2bb;"></span> <span class="shade" style="background-color: #8ce99a;"></span> <span class="shade" style="background-color: #69db7c;"></span> <span class="shade" style="background-color: #51cf66;"></span> <span class="shade" style="background-color: #40c057;"></span> <span class="shade" style="background-color: #37b24d;"></span> <span class="shade" style="background-color: #2f9e44;"></span> <span class="shade" style="background-color: #2b8a3e;"></span> |
| Lime   | `@pink-{0-9}` | <span class="shade" style="background-color: #f4fce3;"></span> <span class="shade" style="background-color: #e9fac8;"></span> <span class="shade" style="background-color: #d8f5a2;"></span> <span class="shade" style="background-color: #c0eb75;"></span> <span class="shade" style="background-color: #a9e34b;"></span> <span class="shade" style="background-color: #94d82d;"></span> <span class="shade" style="background-color: #82c91e;"></span> <span class="shade" style="background-color: #74b816;"></span> <span class="shade" style="background-color: #66a80f;"></span> <span class="shade" style="background-color: #5c940d;"></span> |
| Yellow | `@pink-{0-9}` | <span class="shade" style="background-color: #fff9db;"></span> <span class="shade" style="background-color: #fff3bf;"></span> <span class="shade" style="background-color: #ffec99;"></span> <span class="shade" style="background-color: #ffe066;"></span> <span class="shade" style="background-color: #ffd43b;"></span> <span class="shade" style="background-color: #fcc419;"></span> <span class="shade" style="background-color: #fab005;"></span> <span class="shade" style="background-color: #f59f00;"></span> <span class="shade" style="background-color: #f08c00;"></span> <span class="shade" style="background-color: #e67700;"></span> |
| Orange | `@pink-{0-9}` | <span class="shade" style="background-color: #fff4e6;"></span> <span class="shade" style="background-color: #ffe8cc;"></span> <span class="shade" style="background-color: #ffd8a8;"></span> <span class="shade" style="background-color: #ffc078;"></span> <span class="shade" style="background-color: #ffa94d;"></span> <span class="shade" style="background-color: #ff922b;"></span> <span class="shade" style="background-color: #fd7e14;"></span> <span class="shade" style="background-color: #f76707;"></span> <span class="shade" style="background-color: #e8590c;"></span> <span class="shade" style="background-color: #d9480f;"></span> |

#### Easings

Easing variable is a set of shorthands for CSS easings functions.

##### Variables

| Name           | Variable          | Definition                          |
|:---------------|:------------------|:------------------------------------|
| Ease 1         | `@ease-1`         | `cubic-bezier(.25, 0, .5, 1)`       |
| Ease 2         | `@ease-2`         | `cubic-bezier(.25, 0, .4, 1)`       |
| Ease 3         | `@ease-3`         | `cubic-bezier(.25, 0, .3, 1)`       |
| Ease 4         | `@ease-4`         | `cubic-bezier(.25, 0, .2, 1)`       |
| Ease 5         | `@ease-5`         | `cubic-bezier(.25, 0, .1, 1)`       |
| Ease In 1      | `@ease-in-1`      | `cubic-bezier(.25, 0, 1, 1)`        |
| Ease In 2      | `@ease-in-2`      | `cubic-bezier(.50, 0, 1, 1)`        |
| Ease In 3      | `@ease-in-3`      | `cubic-bezier(.70, 0, 1, 1)`        |
| Ease In 4      | `@ease-in-4`      | `cubic-bezier(.90, 0, 1, 1)`        |
| Ease In 5      | `@ease-in-5`      | `cubic-bezier(1, 0, 1, 1)`          |
| Ease Out 1     | `@ease-out-1`     | `cubic-bezier(0, 0, .75, 1)`        |
| Ease Out 2     | `@ease-out-2`     | `cubic-bezier(0, 0, .50, 1)`        |
| Ease Out 3     | `@ease-out-3`     | `cubic-bezier(0, 0, .3, 1)`         |
| Ease Out 4     | `@ease-out-4`     | `cubic-bezier(0, 0, .1, 1)`         |
| Ease Out 5     | `@ease-out-5`     | `cubic-bezier(0, 0, 0, 1)`          |
| Ease In Out 1  | `@ease-in-out-1`  | `cubic-bezier(.1, 0, .9, 1)`        |
| Ease In Out 2  | `@ease-in-out-2`  | `cubic-bezier(.3, 0, .7, 1)`        |
| Ease In Out 3  | `@ease-in-out-3`  | `cubic-bezier(.5, 0, .5, 1)`        |
| Ease In Out 4  | `@ease-in-out-4`  | `cubic-bezier(.7, 0, .3, 1)`        |
| Ease In Out 5  | `@ease-in-out-5`  | `cubic-bezier(.9, 0, .1, 1)`        |
| Ease Elastic 1 | `@ease-elastic-1` | `cubic-bezier(.5, .75, .75, 1.25)`  |
| Ease Elastic 2 | `@ease-elastic-2` | `cubic-bezier(.5, 1, .75, 1.25)`    |
| Ease Elastic 3 | `@ease-elastic-3` | `cubic-bezier(.5, 1.25, .75, 1.25)` |
| Ease Elastic 4 | `@ease-elastic-4` | `cubic-bezier(.5, 1.5, .75, 1.25)`  |
| Ease Elastic 5 | `@ease-elastic-5` | `cubic-bezier(.5, 1.75, .75, 1.25)` |
| Ease Squish 1  | `@ease-squish-1`  | `cubic-bezier(.5, -.1, .1, 1.5)`    |
| Ease Squish 2  | `@ease-squish-2`  | `cubic-bezier(.5, -.3, .1, 1.5)`    |
| Ease Squish 3  | `@ease-squish-3`  | `cubic-bezier(.5, -.5, .1, 1.5)`    |
| Ease Squish 4  | `@ease-squish-4`  | `cubic-bezier(.5, -.7, .1, 1.5)`    |
| Ease Squish 5  | `@ease-squish-5`  | `cubic-bezier(.5, -.9, .1, 1.5)`    |
| Ease Step 1    | `@ease-step-1`    | `steps(2)`                          |
| Ease Step 2    | `@ease-step-2`    | `steps(3)`                          |
| Ease Step 3    | `@ease-step-3`    | `steps(4)`                          |
| Ease Step 4    | `@ease-step-4`    | `steps(7)`                          |
| Ease Step 5    | `@ease-step-5`    | `steps(10)`                         |

#### Fonts

Font variables have different tools: family type, weights, line heights, letter spacings and sizes.

##### Variables

###### Family Types

| Name       | Variable      | Definition                                                                                                            |
|:-----------|:--------------|:----------------------------------------------------------------------------------------------------------------------|
| Font Sans  | `@font-sans`  | `system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif`                                       |
| Font Serif | `@font-serif` | `ui-serif,serif`                                                                                                      |
| Font Mono  | `@font-mono`  | `Dank Mono,Operator Mono,Inconsolata,Fira Mono,ui-monospace,SF Mono,Monaco,Droid Sans Mono,Source Code Pro,monospace` |

###### Font Weights

Font weight short hand is a 1 to one from 1x to 100x. Also we implemented semantic variables based on font weight names.

| Name                  | Variable                 | Definition |
|:----------------------|:-------------------------|:-----------|
| Font Weight 1         | `@font-weight-1`         | `100`      |
| Font Weight 2         | `@font-weight-2`         | `200`      |
| Font Weight 3         | `@font-weight-3`         | `300`      |
| Font Weight 4         | `@font-weight-4`         | `400`      |
| Font Weight 5         | `@font-weight-5`         | `500`      |
| Font Weight 6         | `@font-weight-6`         | `600`      |
| Font Weight 7         | `@font-weight-7`         | `700`      |
| Font Weight 8         | `@font-weight-8`         | `800`      |
| Font Weight 9         | `@font-weight-9`         | `900`      |
| Font Weight Light     | `@font-weight-light`     | `300`      |
| Font Weight Regular   | `@font-weight-regular`   | `400`      |
| Font Weight Medium    | `@font-weight-medium`    | `500`      |
| Font Weight Semibold  | `@font-weight-semibold`  | `600`      |
| Font Weight Bold      | `@font-weight-bold`      | `700`      |
| Font Weight Extrabold | `@font-weight-extrabold` | `800`      |
| Font Weight Black     | `@font-weight-black`     | `900`      |


###### Line Heights

| Name                | Variable              | Definition |
|:--------------------|:----------------------|:-----------|
| Font Line Height 00 | `@font-lineheight-00` | `.95`      |
| Font Line Height 0  | `@font-lineheight-0`  | `1.1`      |
| Font Line Height 1  | `@font-lineheight-1`  | `1.25`     |
| Font Line Height 2  | `@font-lineheight-2`  | `1.375`    |
| Font Line Height 3  | `@font-lineheight-3`  | `1.5`      |
| Font Line Height 4  | `@font-lineheight-4`  | `1.75`     |
| Font Line Height 5  | `@font-lineheight-5`  | `2`        |

###### Letter Spacing

| Name                  | Variable                | Definition |
|:----------------------|:------------------------|:-----------|
| Font Letter Spacing 0 | `@font-letterspacing-0` | `-.05em`   |
| Font Letter Spacing 1 | `@font-letterspacing-1` | `.025em`   |
| Font Letter Spacing 2 | `@font-letterspacing-2` | `.050em`   |
| Font Letter Spacing 3 | `@font-letterspacing-3` | `.075em`   |
| Font Letter Spacing 4 | `@font-letterspacing-4` | `.150em`   |
| Font Letter Spacing 5 | `@font-letterspacing-5` | `.500em`   |
| Font Letter Spacing 6 | `@font-letterspacing-6` | `.750em`   |
| Font Letter Spacing 7 | `@font-letterspacing-7` | `1em`      |

###### Font Size

| Name              | Variable             | Definition                   |
|:------------------|:---------------------|:-----------------------------|
| Font Size 00      | `@font-size-00`      | `.5rem`                      |
| Font Size 0       | `@font-size-0`       | `.75rem`                     |
| Font Size 1       | `@font-size-1`       | `1rem`                       |
| Font Size 2       | `@font-size-2`       | `1.1rem`                     |
| Font Size 3       | `@font-size-3`       | `1.25rem`                    |
| Font Size 4       | `@font-size-4`       | `1.5rem`                     |
| Font Size 5       | `@font-size-5`       | `2rem`                       |
| Font Size 6       | `@font-size-6`       | `2.5rem`                     |
| Font Size 7       | `@font-size-7`       | `3rem`                       |
| Font Size 8       | `@font-size-8`       | `3.5rem`                     |
| Font Size Fluid 0 | `@font-size-fluid-0` | `clamp(.75rem, 2vw, 1rem)`   |
| Font Size Fluid 1 | `@font-size-fluid-1` | `clamp(1rem, 4vw, 1.5rem)`   |
| Font Size Fluid 2 | `@font-size-fluid-2` | `clamp(1.5rem, 6vw, 2.5rem)` |
| Font Size Fluid 3 | `@font-size-fluid-3` | `clamp(2rem, 9vw, 3.5rem)`   |

#### Gradients

#### Media

We have defined different media sizes and helpers to handle all the devices:

##### Sizes

| Name              | Variable    | Definition | Icon                                                                                                                                                                                                                                                                                                                                                                                                      |
|:------------------|:------------|:-----------|:----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Extra Extra Small | `@xxs-size` | `240px`    | <svg height="24" width="24"><path d="m14.31 2 .41 2.48C13.87 4.17 12.96 4 12 4c-.95 0-1.87.17-2.71.47L9.7 2h4.61m.41 17.52L14.31 22H9.7l-.41-2.47c.84.3 1.76.47 2.71.47.96 0 1.87-.17 2.72-.48M16 0H8l-.95 5.73C5.19 7.19 4 9.45 4 12s1.19 4.81 3.05 6.27L8 24h8l.96-5.73C18.81 16.81 20 14.54 20 12s-1.19-4.81-3.04-6.27L16 0zm-4 18c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"></path></svg> |
| Extra Small       | `@xs-size`  | `360px`    | <svg height="24" width="24"><path d="M17 1.01 7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"></path></svg>                                                                                                                                                                                                                                              |
| Small             | `@sm-size`  | `480px`    | <svg height="24" width="24"><path d="M15.5 1h-8A2.5 2.5 0 0 0 5 3.5v17A2.5 2.5 0 0 0 7.5 23h8a2.5 2.5 0 0 0 2.5-2.5v-17A2.5 2.5 0 0 0 15.5 1zm-4 21c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm4.5-4H7V4h9v14z"></path></svg>                                                                                                                                                 |
| Medium            | `@md-size`  | `768px`    | <svg height="24" width="24"><path d="M18 0H6C4.34 0 3 1.34 3 3v18c0 1.66 1.34 3 3 3h12c1.66 0 3-1.34 3-3V3c0-1.66-1.34-3-3-3zm-4 22h-4v-1h4v1zm5.25-3H4.75V3h14.5v16z"></path></svg>                                                                                                                                                                                                                      |
| Large             | `@lg-size`  | `1024px`   | <svg height="24" width="24"><path d="M1.01 7 1 17c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2H3c-1.1 0-1.99.9-1.99 2zM19 7v10H5V7h14z"></path></svg>                                                                                                                                                                                                                                                 |
| Extra Large       | `@xl-size`  | `1440px`   | <svg height="24" width="24"><path d="M20 18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"></path></svg>                                                                                                                                                                                                                                                |
| Extra Extra Large | `@xl-size`  | `1920px`   | <svg height="24" width="24"><path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"></path></svg>                                                                                                                                                                                                                                         |

- __Extra Extra small__ is used for smartwatches and other very small devices.
- __Extra small__ is used for old / small phones.
- __Small__ is used for smart phones.
- __Medium__ is used for tablets.
- __Large__ is used for small computers / laptops or landscape oriented tablets.
- __Extra Large__ is used for normal computers and laptops.
- __Extra Extra Large__ is used for devices with the size or equal or bigger to 1080p.

With this sizes variables we defined a number of variables that contain useful media queries. Each variable has a _only_, _n-above_ and _n-below_:

| Name                      | Variable       | Definition                                             |
|:--------------------------|:---------------|:-------------------------------------------------------|
| Extra Extra Small Only    | `@xxs-only`    | `(min-width: 0) and (max-width: @{xxs-size})`          |
| Extra Extra Small & Above | `@xxs-n-above` | `(min-width: @{xxs-size})`                             |
| Extra Extra Small & Below | `@xxs-n-below` | `(max-width: @{xxs-size})`                             |
| Extra Small Only          | `@xs-only`     | `(min-width: @{xxs-size}) and (max-width: @{xs-size})` |
| Extra Small & Above       | `@xs-n-above`  | `(min-width: @{xs-size})`                              |
| Extra Small & Below       | `@xs-n-below`  | `(max-width: @{xs-size})`                              |
| Small Only                | `@sm-only`     | `(min-width: @{xs-size}) and (max-width: @{sm-size})`  |
| Small & Above             | `@sm-n-above`  | `(min-width: @{sm-size})`                              |
| Small & Below             | `@sm-n-below`  | `(max-width: @{sm-size})`                              |
| Medium Only               | `@md-only`     | `(min-width: @{sm-size}) and (max-width: @{md-size})`  |
| Medium & Above            | `@md-n-above`  | `(min-width: @{md-size})`                              |
| Medium & Below            | `@md-n-below`  | `(max-width: @{md-size})`                              |
| Large Only                | `@lg-only`     | `(min-width: @{md-size}) and (max-width: @{lg-size})`  |
| Large & Above             | `@lg-n-above`  | `(min-width: @{lg-size})`                              |
| Large & Below             | `@lg-n-below`  | `(max-width: @{lg-size})`                              |
| Extra Large Only          | `@xl-only`     | `(min-width: @{lg-size}) and (max-width: @{xl-size})`  |
| Extra Large & Above       | `@xl-n-above`  | `(min-width: @{xl-size})`                              |
| Extra Large & Below       | `@xl-n-below`  | `(max-width: @{xl-size})`                              |
| Extra Extra Large Only    | `@xxl-only`    | `(min-width: @{xl-size}) and (max-width: @{xxl-size})` |
| Extra Extra Large & Above | `@xxl-n-above` | `(min-width: @{xxl-size})`                             |
| Extra Extra Large & Below | `@xxl-n-below` | `(max-width: @{xxl-size})`                             |

Also we have some special media queries for different portrait displays:

| Name                    | Variable     | Definition                    |
|:------------------------|:-------------|:------------------------------|
| Extra Extra Small Phone | `@xxs-phone` | `@{xxs-only} and @{portrait}` |
| Extra Small Phone       | `@xs-phone`  | `@{xs-only} and @{portrait}`  |
| Small Phone             | `@sm-phone`  | `@{sm-only} and @{portrait}`  |
| Medium Phone            | `@md-phone`  | `@{md-only} and @{portrait}`  |
| Large Phone             | `@lg-phone`  | `@{lg-only} and @{portrait}`  |

And last but not least, the media queries targeting specific browsers (we really hope we don't need these in the near future):

| Name         | Variable       | Definition                             |
|:-------------|:---------------|:---------------------------------------|
| Safari Only  | `@safariONLY`  | `(-webkit-hyphens: none)`              |
| Firefox Only | `@firefoxONLY` | `(-moz-appearance: none)`              |
| Chrome Only  | `@chromeONLY`  | `(-webkit-tap-highlight-color: black)` |

#### Shadows

#### Sizes

This variables present different semantic names for sizes.

##### Variables

| Name           | Variable          | Definition                   |
|:---------------|:------------------|:-----------------------------|
| Size 000       | `@size-000`       | `-.5rem`                     |
| Size 00        | `@size-00`        | `-.25rem`                    |
| Size 1         | `@size-1`         | `.25rem`                     |
| Size 2         | `@size-2`         | `.5rem`                      |
| Size 3         | `@size-3`         | `1rem`                       |
| Size 4         | `@size-4`         | `1.25rem`                    |
| Size 5         | `@size-5`         | `1.5rem`                     |
| Size 6         | `@size-6`         | `1.75rem`                    |
| Size 7         | `@size-7`         | `2rem`                       |
| Size 8         | `@size-8`         | `3rem`                       |
| Size 9         | `@size-9`         | `4rem`                       |
| Size 10        | `@size-10`        | `5rem`                       |
| Size 11        | `@size-11`        | `7.5rem`                     |
| Size 12        | `@size-12`        | `10rem`                      |
| Size 13        | `@size-13`        | `15rem`                      |
| Size 14        | `@size-14`        | `20rem`                      |
| Size 15        | `@size-15`        | `30rem`                      |
| Size Fluid 1   | `@size-fluid-1`   | `clamp(.5rem, 1vw, 1rem)`    |
| Size Fluid 2   | `@size-fluid-2`   | `clamp(1rem, 2vw, 1.5rem)`   |
| Size Fluid 3   | `@size-fluid-3`   | `clamp(1.5rem, 3vw, 2rem)`   |
| Size Fluid 4   | `@size-fluid-4`   | `clamp(2rem, 4vw, 3rem)`     |
| Size Fluid 5   | `@size-fluid-5`   | `clamp(4rem, 5vw, 5rem)`     |
| Size Fluid 6   | `@size-fluid-6`   | `clamp(5rem, 7vw, 7.5rem)`   |
| Size Fluid 7   | `@size-fluid-7`   | `clamp(7.5rem, 10vw, 10rem)` |
| Size Fluid 8   | `@size-fluid-8`   | `clamp(10rem, 20vw, 15rem)`  |
| Size Fluid 9   | `@size-fluid-9`   | `clamp(15rem, 30vw, 20rem)`  |
| Size Fluid 10  | `@size-fluid-10`  | `clamp(20rem, 40vw, 30rem)`  |
| Size Content 1 | `@size-content-1` | `20ch`                       |
| Size Content 2 | `@size-content-2` | `45ch`                       |
| Size Content 3 | `@size-content-3` | `60ch`                       |
| Size Header 1  | `@size-header-1`  | `20ch`                       |
| Size Header 2  | `@size-header-2`  | `25ch`                       |
| Size Header 3  | `@size-header-3`  | `45rem`                      |

#### Z-Index

z-index variables are some helpful variables to define z-index in the project

##### Variables

| Name            | Variable           | Definition   |
|:----------------|:-------------------|:-------------|
| Layer 1         | `@layer-1`         | `1`          |
| Layer 2         | `@layer-2`         | `2`          |
| Layer 3         | `@layer-3`         | `3`          |
| Layer 4         | `@layer-4`         | `4`          |
| Layer 5         | `@layer-5`         | `5`          |
| Layer Important | `@layer-important` | `2147483647` |

#### Semantics