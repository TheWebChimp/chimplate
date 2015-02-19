<?php $site->getParts(array('shared/header_html', 'sticky-footer/header')); ?>

		<section class="site-section">
			<h1 class="section-title">Helpers</h1>
			<p>Just some helpers for ya'</p>

			<h2 class="title">Media element</h2>
			<p>Since the dawn of times, humanity has strived to add images to everything and this is the culmination of that practice.</p>
			<p>Meet the media element. With it you'll be able to add thumbnails to your content blocks. Isn't it amazing?</p>

			<div class="media">
				<img src="<?php $site->img('chimplate-logo.png'); ?>" alt="" class="media-object">
				<div class="media-details">
					<h3>Some title here</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio perferendis ad reprehenderit labore ea, porro ipsum, dolore cum iure consequatur ex perspiciatis sequi doloremque voluptatibus saepe a cupiditate vel magni!</p>
					<p>Eius unde nostrum magnam voluptas repellat suscipit. Cupiditate eum at provident ab dolorum minima itaque libero. Nihil commodi voluptatum tempore, corporis eius ratione odit recusandae quo. Laborum, voluptatem at fugit.</p>
				</div>
			</div>

			<h3>Right-aligned content</h3>
			<p>Just add the <code>.media-right</code> class and you're set.</p>

			<div class="media media-right">
				<img src="<?php $site->img('chimplate-logo.png'); ?>" alt="" class="media-object">
				<div class="media-details">
					<h3>Some title here</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio perferendis ad reprehenderit labore ea, porro ipsum, dolore cum iure consequatur ex perspiciatis sequi doloremque voluptatibus saepe a cupiditate vel magni!</p>
					<p>Eius unde nostrum magnam voluptas repellat suscipit. Cupiditate eum at provident ab dolorum minima itaque libero. Nihil commodi voluptatum tempore, corporis eius ratione odit recusandae quo. Laborum, voluptatem at fugit.</p>
				</div>
			</div>

			<h2 class="title">Image stylin'</h2>
			<p>Yo dawg! Add fizzlin' images to your sites easily.</p>
			<div class="row">
				<div class="col col-3">
					<p class="text-center"><code>.img-rounded</code></p>
					<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Schimpanse_Zoo_Leipzig.jpg/1024px-Schimpanse_Zoo_Leipzig.jpg" alt="" class="img-responsive img-rounded">
				</div>
				<div class="col col-3">
					<p class="text-center"><code>.img-thumbnail</code></p>
					<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Schimpanse_Zoo_Leipzig.jpg/1024px-Schimpanse_Zoo_Leipzig.jpg" alt="" class="img-responsive img-thumbnail">
				</div>
				<div class="col col-3">
					<p class="text-center"><code>.img-circle</code></p>
					<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Schimpanse_Zoo_Leipzig.jpg/1024px-Schimpanse_Zoo_Leipzig.jpg" alt="" class="img-responsive img-circle">
				</div>
				<div class="col col-3">
					<p class="text-center"><code>.img-shadow</code></p>
					<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Schimpanse_Zoo_Leipzig.jpg/1024px-Schimpanse_Zoo_Leipzig.jpg" alt="" class="img-responsive img-shadow">
				</div>
			</div>
		</section>

<?php $site->getParts(array('sticky-footer/footer', 'shared/footer_html')); ?>