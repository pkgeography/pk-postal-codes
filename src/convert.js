var node_xj = require("xls-to-json");

node_xj({
	input: "../data/temp.xls", 
	output: "../data/temp.json"
}, function(err, result) {
	if(err) {
		console.error(err);
	} else {
		console.log(result);
	}
});