//Feature Set 1 - No Return
//Feature Set 1.1 - Build your first function
function myMessage() {
    console.log("This is my first function!");
}
//Feature Set 1.3 - Building a function with parameters
function add(x, y) {
    console.log("The sum of " + x + " and " + y + " is " + (x + y));
}
//Feature Set 2 - Time To Return
//Feature Set 2.1 - return to add
function add2(x,y) {
    return x + y;
}
var add2result = 'Add2result is ' + add2(2,3);
//Feature Set 3 - Card Reveal
//Feature Set 3.1 - cardFlip Function
function cardFlip(element){
    $(element).hide();
}