<style>
	table {

		width: 100% !important;
		display: table !important;
	}
</style>

# Chimplate

## Utilities - Spacing

### Properties

Spacing exists in two ways:

- Margin (`m`): External space between an element and the elements that surround it.
- Padding (`p`): Internal space of an element.

This are *spacing properties*.

### Directions

Each property has 4 different directions: top (`t`), bottom (`b`), right (`r`) and left (`l`).

This properties can be also grouped by axis: horizontal (`x`) and vertical (`y`)

Left and right can be considered as start (`s`) and end (`e`) in left-to-right languages (our main focus).

In this way, we can consider the following:

- ` ` - empty for all directions
- `t` - top
- `b` - bottom
- `x` - right and left
- `y` - top and bottom
- `s`, `l` - left
- `e`, `r` - right

### Values / Magnitudes

Now, the space (not matter the property or direction) has a value or magnitude:

- 0
- px - 1px
- 0.3, third - @spacer / 3
- 0.5, half - @spacer / 2
- 1, default - @spacer
- 1.5 - @spacer * 1.5
- 2, double	- @spacer * 2
- 3, triple - @spacer * 3
- 4, quad - @spacer * 4
- auto - auto

In this case, our spacing utilities can be arranged the following way:

`[property]-[direction]-[value]`

Direction can be omitted.

So, for example, this are some valid utilities:

- `m0` - Margin of 0px to all directions
- `px-default` - Padding of `@spacer` in horizontal axis (left and right).
