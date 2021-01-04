function pow(x,y){
	result = x;
	while(y > 1) {
		result *= x;
		y--;
	}
	return result	
}
function repeater(num){
	while (isNaN(num)) {
	num = Number(prompt("Try again ",''));
	}
	return num
}

firstNum = Number(prompt("Enter a number, greater than 0",''));

if (isNaN(firstNum)){
	firstNum = repeater(firstNum);
}	

if (firstNum > 0) {

	secondNum = Number(prompt("Once more, remember, greater than 0!",''));

	if (isNaN(secondNum)){
		secondNum = repeater(secondNum);
	}

	if (secondNum > 0){
		console.log("equals " + pow(firstNum,secondNum)); 
		alert( firstNum + ' multiplied by ' + secondNum + ' = (check the console)');
	}
	else {
		alert('bye');
	}
}

else{
	alert('bye ( ͝° ͜ʖ͡°)');
}


