<style>
	table {

		width: 100% !important;
		display: table !important;
	}
</style>

# Chimplate

## Helpers

### Explanation

From Sitepoint:

> Helper classes can help remove repetition by creating a set of abstract classes that can be used over and over on HTML elements. Each helper class is responsible for doing one job and doing it well.


### General Helpers

| Helper Class                             | Description                                                                                                                        |
|:-----------------------------------------|:-----------------------------------------------------------------------------------------------------------------------------------|
| `[hide]`, `[hidden]`, `.hide`, `.hidden` | Hides the element, has `!important`                                                                                                |
| `[show]`, `.show`                        | Shows the element, has `!important`                                                                                                |
| `.no-text`                               | Removes visually the text by text-indenting it to `-9999px`                                                                        |
| `.overlay-element`                       | Makes the element cover all the parent element by giving absolute position, width fo 100%, height of 100% and top/left equals to 0 |
| `.remove-overlay-element`                | Reverts back `.overlay-element` giving a static position and reseting top / left / width / height                                  |
| `anchor-link`                            | Removes default underline in anchor and gives it back on hover                                                                     |


### Responsive Embed

The class `.embed-responsive` add a proportion to a `div` so the child embed has an `.overlay-element` application. This applies to `iframe`, `object`, `video` and `embed`.

### Clear Fixes

We have two helper classes that apply a different techniques each:

| Helper Class | Description                                                                                                                           |
|:-------------|:--------------------------------------------------------------------------------------------------------------------------------------|
| `.cf`        | Removes the float bug on an element, so if it's children float, they do not overflow inside the parent                                |
| `br.clear`   | Adds an element that itself is not affected by floating elements. This `br` fixes the floats without being child of any other element |

### Images

Some image helpers to display images differently:

| Helper Class         | Description                                               |
|:---------------------|:----------------------------------------------------------|
| `img.img-rounded`    | Adds a `border-radius` of 10px                            |
| `img.img-circle`     | Adds a `border-radius` of 50%                             |
| `img.img-shadow`     | Adds a shadow to the image `2px 2px 5px fade(black, 35%)` |
| `img.img-responsive` | Adds a `max-width` of 100% and a height of `auto`         |

### The Content

### Flex

### Shows and Hides

For each breakpoint in variables we have a `show` and `hide` helper to show and hide elements through different breakpoints.

Each size has the following:

| Helper Class                | Description                  |
|:----------------------------|:-----------------------------|
| `.hide-[size]`              | Adds `display: none`         |
| `.show-[size]`              | Adds `display: block`        |
| `.show-[size]-inline`       | Adds `display: block-inline` |
| `.show-[size]-inline-block` | Adds `display: inline-block` |
| `.show-[size]-grid`         | Adds `display: grid`         |
| `.show-[size]-table`        | Adds `display: table`        |
| `.show-[size]-table-cell`   | Adds `display: table-cell`   |
| `.show-[size]-table-row`    | Adds `display: table-row`    |
| `.show-[size]-flex`         | Adds `display: flex`         |
| `.show-[size]-inline-flex`  | Adds `display: inline-flex`  |