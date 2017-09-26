// --------------------------------------------------------------------------------- webchimp -- //

ChimplateApp = Ladybug.Application.extend({
	init: function(options) {
		var obj = this;
		obj.parent(options);
	},
	onDomReady: function() {
		var obj = this;
		//
		obj.partials.header = Ladybug.Utils.compileTemplate('#partial-header');
		obj.partials.footer = Ladybug.Utils.compileTemplate('#partial-footer');
		//
		obj.router.start();
	}
});

// --------------------------------------------------------------------------------- webchimp -- //

ChimplateModule = Ladybug.Module.extend({
	name: 'Module',
	onTitleRequest: function() {
		return 'Chimplate / ' + this.name;
	},
	onEnter: function(prev, callback) {
		var obj = this;
		if ( $('.site-content').length ) {
			$('.site-content').velocity('transition.slideUpIn', {
				duration: 500,
				complete: callback
			});
		} else {
			callback.call(obj);
		}
	},
	onExit: function(next, callback) {
		var obj = this;
		if ( $('.site-content').length ) {
			if (next) {
				$('.site-content').velocity('transition.slideDownOut', {
					duration: 500,
					complete: callback
				});
			}
		} else {
			callback.call(obj);
		}
	},
	onRender: function(params, callback) {
		var obj = this;
		app.element.html( obj.templates.page() );
		callback.call(obj);
	},
	runVelocity: function(elements, complete) {
		var obj = this,
			complete = complete || $.noop,
			elements = elements || $('[data-animate=auto]'),
			pending = elements.length;
		elements.each(function() {
			var el = $(this),
				selector = el.data('selector') || '',
				delay = el.data('delay') || 0,
				duration = el.data('duration') || 700,
				stagger = el.data('stagger') || 0,
				transition = el.data('transition') || 'transition.fadeIn';
			if ( transition.indexOf('transition.') != 0 ) {
				transition = 'transition.' + transition;
			}
			if (selector) {
				el.css({ opacity: 1 });
				el = el.find(selector);
				el.css({ opacity: 0 });
			}
			el.velocity(transition, {
				delay: delay,
				stagger: stagger,
				duration: duration,
				complete: function() {
					pending--;
					if (pending <= 0) {
						complete.call(obj);
					}
				}
			});
		});
		app.introAnimate = false;
	}
});

// --------------------------------------------------------------------------------- webchimp -- //

ModuleHome = ChimplateModule.extend({
	init: function(options) {
		var obj = this;
		obj.name = 'Home';
		obj.parent(options);
	},
	onPrepareTemplates: function(params) {
		var obj = this;
		obj.templates.page = Ladybug.Utils.compileTemplate('#page-home');
	},
	onDomReady: function(params) {
		var obj = this;
		new Vivus('chimplate-logo-stroke', {duration: 200}, myCallback);

		function myCallback() {
			$('#chimplate-logo-fill').fadeIn();
		}

		obj.runVelocity();
	}
});

// --------------------------------------------------------------------------------- webchimp -- //

ModuleOther = ChimplateModule.extend({
	init: function(options) {
		var obj = this;
		obj.name = 'Other';
		obj.parent(options);
	},
	onPrepareTemplates: function(params) {
		var obj = this;
		obj.templates.page = Ladybug.Utils.compileTemplate('#page-other');
	},
	onDomReady: function(params) {
		var obj = this;

		// Do jQuery stuff here

		obj.runVelocity();
	}
});

// --------------------------------------------------------------------------------- webchimp -- //

var app = new ChimplateApp({
	element: '#ladybug-root'
});

app.registerModule('home', new ModuleHome);
app.registerModule('grid', new ModuleOther);
app.registerModule('tables', new ModuleOther);
app.registerModule('buttons', new ModuleOther);
app.registerModule('forms', new ModuleOther);

// --------------------------------------------------------------------------------- webchimp -- //