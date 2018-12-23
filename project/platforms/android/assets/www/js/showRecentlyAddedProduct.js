
var app = {
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        //write your functionality here!
        var localStorage = window.localStorage;
        document.querySelector('#productName').innerHTML = localStorage.getItem('productName');
        document.querySelector('#productDescription').innerHTML = localStorage.getItem('productDescription');
        document.querySelector('#productDimension').innerHTML = localStorage.getItem('productDimension');
        document.querySelector('#productColor').innerHTML = localStorage.getItem('productColor');

        var postData = {
            productName : localStorage.getItem('productName'),
            productDescription : localStorage.getItem('productDescription'),
            productDimension : localStorage.getItem('productDimension'),
            productColor : localStorage.getItem('productColor'),
        }
        
        $.post('https://685ab211.ngrok.io/addProduct',postData,callBackFunction);
    },
};

function callBackFunction(responseData,status,xhr)
{
    console.log("server response data is = "+responseData+" status = "+status+" xhr ="+xhr);
    window.location = 'showProductsFromDatabase.html';
}
app.initialize();















