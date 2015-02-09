<?php $site->getParts(array('shared/header_html', 'sticky-footer/header')); ?>

		<section class="site-section">
			<h1 class="section-title">The Grid (responsive of course)</h1>

			<h2 class="title">12-column responsive layout</h2>
			<p>We chose to use a 12-column grid for our responsive layouts. Why? Because number 12 has many ways to be divided.</p>
			<p>The basic grid has a 15px gutter (left and right padding) per column.</p>

			<div class="row shaded">
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
				<div class="col col-1"><span>.col-1</span></div>
			</div>

			<div class="row shaded">
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
			</div>

			<div class="row shaded">
				<div class="col col-4"><span>.col-4</span></div>
				<div class="col col-4"><span>.col-4</span></div>
				<div class="col col-4"><span>.col-4</span></div>
			</div>

			<div class="row shaded">
				<div class="col col-6"><span>.col-6</span></div>
				<div class="col col-6"><span>.col-6</span></div>
			</div>

			<div class="row shaded">
				<div class="col col-7"><span>.col-7</span></div>
				<div class="col col-5"><span>.col-5</span></div>
			</div>

			<div class="row shaded">
				<div class="col col-8"><span>.col-8</span></div>
				<div class="col col-4"><span>.col-4</span></div>
			</div>

			<div class="row shaded">
				<div class="col col-9"><span>.col-9</span></div>
				<div class="col col-3"><span>.col-3</span></div>
			</div>

			<div class="row shaded">
				<div class="col col-10"><span>.col-10</span></div>
				<div class="col col-2"><span>.col-2</span></div>
			</div>

			<div class="row shaded">
				<div class="col col-11"><span>.col-11</span></div>
				<div class="col col-1"><span>.col-1</span></div>
			</div>

			<div class="row shaded">
				<div class="col col-12"><span>.col-12</span></div>
			</div>

			<br>

			<h2 class="title">Different Gutters</h2>
			<p>Sometimes, we will need different gutters. Maybe we don't want our columns to be near, even 'collapsing'.</p>

			<p>Here a <code>.row-10</code> grid.</p>

			<div class="row row-10 shaded">
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
			</div>

			<div class="row row-10 shaded">
				<div class="col col-4"><span>.col-4</span></div>
				<div class="col col-4"><span>.col-4</span></div>
				<div class="col col-4"><span>.col-4</span></div>
			</div>
			<br>

			<p>Here a <code>.row-5</code> grid.</p>

			<div class="row row-5 shaded">
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
			</div>

			<div class="row row-5 shaded">
				<div class="col col-4"><span>.col-4</span></div>
				<div class="col col-4"><span>.col-4</span></div>
				<div class="col col-4"><span>.col-4</span></div>
			</div>
			<br>

			<p>And Here a completly collapse grid, with the class<code>.row-collapse</code>.</p>

			<div class="row row-collapse shaded">
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
				<div class="col col-3"><span>.col-3</span></div>
			</div>

			<div class="row row-collapse shaded">
				<div class="col col-4"><span>.col-4</span></div>
				<div class="col col-4"><span>.col-4</span></div>
				<div class="col col-4"><span>.col-4</span></div>
			</div>
			<br>

			<h2 class="title">Column offsets</h2>

			<div class="row shaded">
				<div class="col col-4">.col-4</div>
			</div>

			<div class="row shaded">
				<div class="col col-4 col-offset-1">.col-4 .col-offset-1</div>
			</div>

			<div class="row shaded">
				<div class="col col-4 col-offset-2">.col-4 .col-offset-2</div>
			</div>

			<div class="row shaded">
				<div class="col col-4 col-offset-3">.col-4 .col-offset-3</div>
			</div>

			<div class="row shaded">
				<div class="col col-4 col-offset-4">.col-4 .col-offset-4</div>
			</div>

			<div class="row shaded">
				<div class="col col-4 col-offset-5">.col-4 .col-offset-5</div>
			</div>

			<div class="row shaded">
				<div class="col col-4 col-offset-6">.col-4 .col-offset-6</div>
			</div>

			<div class="row shaded">
				<div class="col col-4 col-offset-7">.col-4 .col-offset-7</div>
			</div>

			<div class="row shaded">
				<div class="col col-4 col-offset-8">.col-4 .col-offset-8</div>
			</div>

			<br>

			<h2 class="title">Nested</h2>
			<p>One of the great, great advantages of our grid is the capability to nest. Here, when you need some ways to divide your grid that are no dividable through normal methods, you can start nesting.</p>

			<div class="row shaded">
				<div class="col col-8 col-offset-2">
					<span>.col-8 .col-offset-2</span>
					<div class="row">
						<div class="col col-8">.col-8</div>
						<div class="col col-4">.col-4</div>
					</div>
				</div>
			</div>

			<br>

			<div class="row shaded">
				<div class="col col-8 col-offset-2">
					<span>.col-8 .col-offset-2</span>
					<div class="row">
						<div class="col col-8">
							<div class="row">
								<div class="col col-6">.col-6</div>
								<div class="col col-6">.col-6</div>
							</div>
						</div>
						<div class="col col-4">.col-4</div>
					</div>
				</div>
			</div>

		</section>

<?php $site->getParts(array('sticky-footer/footer', 'shared/footer_html')); ?>