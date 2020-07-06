(function() {
    let taskMatch = setInterval(function () {
        if(typeof window.dmpProfitclicks === "undefined") { console.log(1); return; }
        clearInterval(taskMatch);
        window.dmpProfitclicks.match("load")
    }, 150);
})();

// (function() {
    // let taskMatch = setInterval(function () {
        // if(typeof window.dmpProfitclicks === "undefined") return;
        // clearInterval(taskMatch);
        // window.dmpProfitclicks.match(`load`)
    // }, 150);
// })();