try {                        // block of code to try
    undefinedFunction();
}
catch(err) {                 // block to handle errors
    console.log(err.message);
}


// INPUT
var x = document.getElementById("mynum").value;

try {
    if (x == "") throw "empty";         // error cases
    if (isNaN(x)) throw "not a number";
    x = Number(x);
    if (x > 10) throw "too high";
}
catch(err) {
    document.write("Input is " + err);  // output error
    console.error(err);                 // write the error in console
}
finally {
    // executed regardless of the try/catch result
    document.write("<br/>Done");
}
