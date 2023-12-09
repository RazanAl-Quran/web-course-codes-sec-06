function sum() {
    let x = parseInt(document.getElementById('number1').value);
    console.log("x",x);
    console.log(typeof(x));
    let y = parseInt(document.getElementById('number2').value);
    console.log("y",y);
    console.log(typeof(y));
    let z = x+y;
    console.log("z",z);
    document.getElementById("result").value=z;

}

