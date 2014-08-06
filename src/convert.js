var node_xj = require("xls-to-json");

node_xj({
	input: "../data/national_post_code_directory.xls", 
	output: "../data/national_post_code_directory.json"
}, function(err, result) {
	if(err) {
		console.error(err);
	} else {
		console.log(result);
	}
});