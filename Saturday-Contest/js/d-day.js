var now = new Date();
var then = new Date("2019-12-06");
var gap = then.getTime() - now.getTime();
gap = Math.floor(gap / (1000 * 60 * 60 * 24));
if(gap<=-1) {
    document.write("D-DAY");
} else if(gap<=7) {
    document.write("D-"+gap);
    $(".d-day").css("color", "red");
    $(".d-day").css("font-weight", "bold");
} else {
    document.write("D-"+gap);
}
