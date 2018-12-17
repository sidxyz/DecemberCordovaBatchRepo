
var app = {
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        //write your functionality here!
        var submitBtn = document.querySelector('#submitBtn');
        submitBtn.addEventListener("click", submitFunction);

    },
};

var localStorage = window.localStorage;

function submitFunction()
{
    var productName = document.querySelector('#productName').value;
    var productDescription = document.querySelector('#productDescription').value;
    var productDimension = document.querySelector('#productDimension').value;
    var productColor = document.querySelector('#productColor').value;

    console.log(" "+productName+" "+productDescription+" "+productDimension+" "+productColor);
    localStorage.setItem('productName',productName);
    localStorage.setItem('productDescription',productDescription);
    localStorage.setItem('productDimension',productDimension);
    localStorage.setItem('productColor',productColor);

    window.location = "showRecentlyAddedProduct.html";

}
app.initialize();















