<?php $site->getParts(array('shared/header_html', 'sticky-footer/header')); ?>

		<section class="site-section">
			<h1 class="section-title">Forms</h1>

			<h2 class="title">Element Heights</h2>
			<p>One of the trickiest thing with form controls is to standarize them in style, specially in height.</p>

			<div class="form-group">
				<input type="text" class="form-control form-control-xlarge" placeholder="This is an input">
				<input size="25" type="text" class="form-control form-control-xlarge" placeholder="This is an input (w/datepicker)" data-select="datepicker">
				<select class="form-control form-control-xlarge">
					<option value="">This is a select</option>
				</select>
				<button class="button button-xlarge">Button</button>
			</div>

			<div class="form-group">
				<input type="text" class="form-control form-control-large" placeholder="This is an input">
				<input size="25" type="text" class="form-control form-control-large" placeholder="This is an input (w/datepicker)" data-select="datepicker">
				<select class="form-control form-control-large">
					<option value="">This is a select</option>
				</select>
				<button class="button button-large">Button</button>
			</div>

			<div class="form-group">
				<input type="text" class="form-control" placeholder="This is an input">
				<input size="25" type="text" class="form-control" placeholder="This is an input (w/datepicker)" data-select="datepicker">
				<select class="form-control">
					<option value="">This is a select</option>
				</select>
				<button class="button">Button</button>
			</div>

			<div class="form-group">
				<input type="text" class="form-control form-control-small" placeholder="This is an input">
				<input size="25" type="text" class="form-control form-control-small" placeholder="This is an input (w/datepicker)" data-select="datepicker">
				<select class="form-control form-control-small">
					<option value="">This is a select</option>
				</select>
				<button class="button button-small">Button</button>
			</div>

			<div class="form-group">
				<input type="text" class="form-control form-control-xsmall" placeholder="This is an input">
				<input size="25" type="text" class="form-control form-control-xsmall" placeholder="This is an input (w/datepicker)" data-select="datepicker">
				<select class="form-control form-control-xsmall">
					<option value="">This is a select</option>
				</select>
				<button class="button button-xsmall">Button</button>
			</div>

			<h2 class="title">Date Picker</h2>
			<p>Sometimes we need to input dates, and this dates need to be easy to pick and displayed in an especific format. Here we have the great jQuery DatePicker, created by one of our awesome programmers, Raul (<a href="https://github.com/biohzrdmx/" target="_blank">https://github.com/biohzrdmx/</a>).</p>
			<div class="form-group">
				<label for="birthday" class="control-label">Select your birthday</label>
				<input class="form-control" name="birthday" id="birthday" type="text" data-select="datepicker">
			</div>
			<br>

			<h2 class="title">Select2</h2>
			<p>Why Select2? Because it looks great, and works great by the way. Select2 is the jQuery replacement for select boxes (<a href="http://select2.github.io/" target="_blank">http://select2.github.io/</a>).</p>

			<div class="row">
				<div class="col col-6">
					<div class="form-group">
						<label for="select-normal" class="control-label">This is a normal select</label>
						<select name="select-normal" id="select-normal" class="input-block form-control">
							<option value="">Select a hero</option>
							<option>Spiderman</option>
							<option>Batman</option>
							<option>Ironman</option>
							<option>Deadpool</option>
						</select>
					</div>
				</div>

				<div class="col col-6">
					<div class="form-group">
						<label for="select-normal" class="control-label">This is a normal select with Select2 implemented</label>
						<select name="select-normal" id="select-normal" class="input-block form-control" data-toggle="select">
							<option value="">Select a hero</option>
							<option>Spiderman</option>
							<option>Batman</option>
							<option>Ironman</option>
							<option>Deadpool</option>
						</select>
					</div>
				</div>
			</div>
			<br>

		</section>

<?php $site->getParts(array('sticky-footer/footer', 'shared/footer_html')); ?>