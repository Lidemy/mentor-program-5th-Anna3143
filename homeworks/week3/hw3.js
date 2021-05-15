function isPrime(n){
	if(n===1) return 'Prime'
	for(var i=2; i<=n; i++){
		if(n % i===0){
			return 'Composite'
		}
	}	
    return 'Prime'
}

for ( var i=1; i<=5; i++){
  console.log(isPrime(i))
}
