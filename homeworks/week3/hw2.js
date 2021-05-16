function solve(lines){
	let temp = lines[0].split(' ')
	let n = Number(temp[0])
	let m = Number(temp[1])
	for(let i=n; i<=m; i++){
		if(isNarcissistic(i)){
			console.log(i)
		}
	}
}

solve(['5 200'])

function digitsCount(n){
	if(n===0) return 1
	let answer = 0
	while(n !=0){
		n = Math.floor(n/10)
		answer++
	}
	return answer
}

function isNarcissistic(n){
    let m = n
	let digits = digitsCount(m)
	let sum = 0
    while(m !=0){
    	let num = m % 10
    	sum += num**digits
    	m= Math.floor( m / 10)
    }


     if (sum === n) {
	     return true
    }else{
    	 return false
 }
}