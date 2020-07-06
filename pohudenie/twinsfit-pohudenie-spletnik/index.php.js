window.showCase = {isActive: false};
var GeoInfo = {
    ip: '91.226.254.101',
    cityId: '32428',
    city: 'KIEV',
    countryCode: 'UA'
};

window.pageType = 'layer';
        window.hasComebacker = false;
        $(document).ready(function(){
            function removeComebacker(counter) {
                if ($('#comebacker_main_div').size() == 0 && counter <= 60) {
                    setTimeout(function(){
                        counter = counter + 1;
                        removeComebacker(counter);
                    }, 50);
                } else {
                    $('#comebacker_main_div').remove();
                }
            }
            var counter = 0
            removeComebacker(counter);
        });
    
