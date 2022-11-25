let fs = require('fs');
let Handlebars = require('handlebars');

const args = process.argv.slice(2);
const folder = args[0] || '';
const { camelCase, capitalCase, constantCase, dotCase, headerCase, noCase, paramCase, pascalCase, pathCase, sentenceCase, snakeCase, } = require('change-case');

var figlet = require('figlet');

let rules = [];

const ruleFiles = fs.readdirSync(`./tools/rules/${ folder ? `${ folder }/` : '' }`);

ruleFiles.forEach(file => {

	const fileText = fs.readFileSync(`./tools/rules/${ folder ? `${ folder }/` : '' }${ file }`, 'utf8').toString();

	console.log(`\n\n===== ${ file } =====`);

	let rule = {prop: '', rules: {}};

	fileText.split(/\r?\n/).forEach(line => {

		console.log(line);

		if(line.indexOf('\t') >= 0) {

			let [ ruleName, ruleDefinition ] = line.split('\t');
			let [ ruleProp, ruleValue ] = ruleDefinition.split(':');

			rule.rules[ruleName] = ruleValue.trim().replace(';', '');
			rule.prop = ruleProp;
		}
	});

	rules.push(rule);
});

const templateText = fs.readFileSync('./tools/templates/utils.template.less').toString();
let template = Handlebars.compile(templateText);

rules.forEach(rule => {

	figlet.text(capitalCase(rule.prop), { font: 'Slant' }, (err, data) => {

		let comment = data;
		let commentLines = comment.split(/\r?\n/);

		commentLines[0] = '/*\t\t\t\t' + commentLines[0];
		commentLines[1] = '\t▀▀▀▀▀▀▀▀▀\t' + commentLines[1];
		commentLines[2] = '  █ ▀▀▀▀ ▀▀▀▀ █\t' + commentLines[2];
		commentLines[3] = '  ▀ █ ▀▀▀▀▀ █ ▀\t' + commentLines[3];
		commentLines[4] = '\t▀▀▀▀▀▀▀▀▀\t' + commentLines[4];

		for(var i = 5; i <= commentLines.length -1; i++) {
			commentLines[i] = '/*\t\t\t\t' + commentLines[i];
		}

		commentLines = commentLines.map(l => l.replace(/\s+$/, '')).filter(n => n);

		commentLines[commentLines.length -1] += '*/';

		let output = template(rule);
		output = commentLines.join('\r\n') + '\r\n\r\n' + output;

		output = output.replaceAll('&quot;', '\'');

		fs.writeFileSync(`./chimplate/utilities/${ folder ? `${ folder }/` : '' }${ rule.prop }.less`, output);
	});

});