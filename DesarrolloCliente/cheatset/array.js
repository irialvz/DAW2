var num = [1, 2, 3, 4];

num.at(1);                 // 2
num.push(5);               // Add element to the end: [1, 2, 3, 4, 5]
num.pop();                 // remove last element: [1, 2, 3]
num.fill(1);               // fill every element: [1, 1, 1]
num.shift();               // remove first element: [2, 3, 4]
num.unshift(5);            // Add element to beginning: [5, 1, 2, 3, 4]
num.reverse();             // sort in descending order: [4, 3, 2, 1]
num.includes(2);           // is array contains a specified value: true

num.map(item => 2 * item);         // Map elements: [2, 4, 6, 8]
num.filter(item => item > 2);      // filter elements: [3, 4]
num.find(item => item == 2);       // Find element: 2 (first match)
num.every(item => item > 0);       // true
num.findIndex(item => item === 2); // 1

num.reduce((prev, curr) => prev + curr, 0); // 10

num.toString();                     // convert to string
num.join(" * ");                    // join: "1 * 2 * 3 * 4"

num.splice(2, 0, "i", "p");         // add elements: [1, 2, "i", "p", 3, 4]
num.slice(1, 4);                    // slice elements from [1] to [4-1]

num.sort();                         // sort string alphabetically

x.sort(function(a, b){return a - b});        // numeric sort
x.sort(function(a, b){return b - a});        // numeric descending sort
x.sort(function(a, b){return 0.5 - Math.random()}); // random sort
