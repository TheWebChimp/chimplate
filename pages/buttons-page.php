<?php $site->getParts(array('shared/header_html', 'sticky-footer/header')); ?>

		<section class="site-section">
			<h1 class="section-title">Buttons</h1>
			<p>Buttons are tricky ones. We have a huge range of controls that act like buttons: <code>button</code>, <code>input</code> even (an primarly) <code>anchors</code>.</p>
			<p>Also, buttons are used widely across the web as the main tool to perform actions.</p>

			<h2 class="title">Different button tags</h2>
			<p>Note that all look the same. They should if you are a good programmer :)</p>

			<p><a href="#" class="button">Hi, I'm an anchor!</a> vs. <button class="button">I'm a button</button> vs. <input class="button" type="button" value="I'm an input[type=button]"> vs. <input class="button" type="submit" value="And I'm an input[type=submit]"></p>

			<h2 class="title">Button Classes</h2>
			<p>Here our classes, plain but very class-y (pun intended).</p>
			<p>Depending the case, you may use a different style for your button. Some actions may represent the primary action (submitting, continuing), while some actions may cancel or return you to the previous step.</p>

			<table class="table">
				<tbody>
					<tr>
						<th class="button-th"><a href="#" class="button">Basic button</a></th>
						<td>Our basic button. No class added. Gray and beautiful.</td>
						<td class="swatch" style="background-color: #7f8c8d;"><small>#7F8C8D</small><br>Asbestos</td>
						<td class="swatch" style="background-color: #95a5a6;"><small>#95A5A6</small><br>Concrete</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-primary">Primary Button</a></th>
						<td>Good ol' primary button. Apply the class <code>.button-primary</code> and get this dawg.</td>
						<td class="swatch" style="background-color: #2980B9;"><small>#2980B9</small><br>Belize Hole</td>
						<td class="swatch" style="background-color: #3498DB;"><small>#3498DB</small><br>Peter River</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-success">Success Button</a></th>
						<td>Success is green. This button as well. Apply the class <code>.button-success</code> and get this dawg.</td>
						<td class="swatch" style="background-color: #27AE60;"><small>#27AE60</small><br>Nephritis</td>
						<td class="swatch" style="background-color: #2ECC71;"><small>#2ECC71</small><br>Emerald</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-warning">Warning Button</a></th>
						<td>Warning comes in beautiful pumpkin color. Apply the class <code>.button-warning</code> and get this dawg.</td>
						<td class="swatch" style="background-color: #D35400;"><small>#D35400</small><br>Pumpkin</td>
						<td class="swatch" style="background-color: #E67E22;"><small>#E67E22</small><br>Carrot</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-error">Error Button</a></th>
						<td>Error is red. This button is red. Do the math. Apply the class <code>.button-error</code> and get this dawg.</td>
						<td class="swatch" style="background-color: #C0392B;"><small>#C0392B</small><br>Pomegranate</td>
						<td class="swatch" style="background-color: #E74C3C;"><small>#E74C3C</small><br>Alizarin</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-facebook"><i class="fa fa-facebook"></i> Facebook Button</a></th>
						<td>Facebook Button, always useful. Apply the class <code>.button-facebook</code> and get this dawg.</td>
						<td class="swatch" style="background-color: #2D5F9A;"><small>#2D5F9A</small><br>Facebook</td>
						<td class="swatch" style="background-color: #567EAE;"><small>#567EAE</small><br>Washed Mark</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-twitter"><i class="fa fa-twitter"></i> Twitter Button</a></th>
						<td>Twitter button, make the fail whale feel proud. Apply the class <code>.button-twitter</code> and get this dawg.</td>
						<td class="swatch" style="background-color: #55ACEE;"><small>#55ACEE</small><br>Twitter</td>
						<td class="swatch" style="background-color: #76BCF1;"><small>#76BCF1</small><br>Dorsey</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-linkedin"><i class="fa fa-linkedin"></i> Linkedin Button</a></th>
						<td>Linkedin button, serious blue. Apply the class <code>.button-linkedin</code> and get this dawg.</td>
						<td class="swatch" style="background-color: #2189BE;"><small>#2189BE</small><br>Linkedin</td>
						<td class="swatch" style="background-color: #4DA0CB;"><small>#4DA0CB</small><br>Hoffman</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-pinterest"><i class="fa fa-pinterest"></i> Pinterest Button</a></th>
						<td>Pinterest with a beautiful cherry red. Apply the class <code>.button-pinterest</code> and get this dawg.</td>
						<td class="swatch" style="background-color: #D11E16;"><small>#D11E16</small><br>Pinterest</td>
						<td class="swatch" style="background-color: #DA4A44;"><small>#DA4A44</small><br>Sciarra</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-rss"><i class="fa fa-rss"></i> RSS Button</a></th>
						<td>RSS Button is orange. Apply the class <code>.button-rss</code> and get this dawg.</td>
						<td class="swatch" style="background-color: #F60;"><small>#FF6600</small><br>Blaze Orange</td>
						<td class="swatch" style="background-color: #FF8432;"><small>#FF8432</small><br>Syndicate</td>
					</tr>
				</tbody>
			</table>

			<h2 class="title">Button Sizes</h2>
			<p>We won't be using the same size of button always.</p>

			<table class="table">
				<tbody>
					<tr>
						<th class="button-th"><a href="#" class="button button-primary button-xsmall">Extra-small button</a></th>
						<td>Extra-small button.</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-primary button-small">Small button</a></th>
						<td>Small button.</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-primary">Normal button</a></th>
						<td>Normal button.</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-primary button-large">Large button</a></th>
						<td>Large button.</td>
					</tr>
					<tr>
						<th class="button-th"><a href="#" class="button button-primary button-large">Extra-large button</a></th>
						<td>Extra-large button.</td>
					</tr>
				</tbody>
			</table>

			<h2 class="title">Font-Awesome Button</h2>
			<p>This buttons play well with Font-Awesome. At the end, it's just a font. And our buttons are awesome.</p>

			<p>
				<a href="#" class="button"><i class="fa fa-heart"></i> Share your love</a>
				<a href="#" class="button"><i class="fa fa-star"></i> Like this</a>
				<a href="#" class="button"><i class="fa fa-html5"></i> Oh look, html5</a>
			</p>

			<h2 class="title">Outline Buttons</h2>
			<p>The new web-buttons trend comes with outline, transparent buttons. Same classes than the normal ones.</p>

			<p>
				<a href="#" class="button button-outline"><i class="fa fa-heart"></i> Share your love</a>
				<a href="#" class="button button-outline button-outline-primary"><i class="fa fa-heart"></i> Share your love</a>
				<a href="#" class="button button-outline button-outline-success"><i class="fa fa-heart"></i> Share your love</a>
				<a href="#" class="button button-outline button-outline-error"><i class="fa fa-heart"></i> Share your love</a>
				<a href="#" class="button button-outline button-outline-warning"><i class="fa fa-heart"></i> Share your love</a>
			</p>

			<h2 class="title">Button Types</h2>

			<table class="table">
				<tr>
					<th class="button-th"><a href="#" class="button button-pill">I'm a pill</a></th>
					<td><small>Pill Button</small><br>Beautiful rounded borders, so rounded the button look like a pill. Apply the class <code>.button-pill</code> to get the pill.</td>
				</tr>
				<tr>
					<th class="button-th"><a href="#" class="button button-square">I'm not rounded</a></th>
					<td><small>Square Button</small><br>No rounded borders, sharp and solid. Apply the class <code>.button-square</code> to get the square.</td>
				</tr>
			</table>
		</section>

<?php $site->getParts(array('sticky-footer/footer', 'shared/footer_html')); ?>