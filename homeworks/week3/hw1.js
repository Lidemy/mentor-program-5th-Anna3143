function starts(i){
	var result=''
	for(var j=1; j<=i; j++){
		result += '*'
	}
	console.log(result)
}

function repeat(n){
	for( var i=1; i<=n; i++){
	starts(i)
	}
}

repeat(4)