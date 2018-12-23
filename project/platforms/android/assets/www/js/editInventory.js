
var app = {
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        //write your functionality here!        
        var localStorage = window.localStorage;
        var productId = localStorage.getItem('EditInventoryId');
        getInventoyDetailById(productId);
        var submitBtn = document.querySelector('#submitBtn');
        submitBtn.addEventListener("click", submitFunction);

    },
};

function getInventoyDetailById(productId)
{
    $.get(baseUrl+'/getProductInfoById/'+productId,getProductInfoCallBackFunction);
}

function getProductInfoCallBackFunction(responseData,status,xhr)
{
    var productsData = responseData;

    document.querySelector('#productName').value = productsData[0].name;
    document.querySelector('#productDescription').value = productsData[0].description;
    document.querySelector('#productDimension').value = productsData[0].dimension;
    document.querySelector('#productColor').value = productsData[0].color;
}

function submitFunction()
{
    var baseUrl = localStorage.getItem('baseUrl');

    var productName = document.querySelector('#productName').value;
    var productDescription = document.querySelector('#productDescription').value;
    var productDimension = document.querySelector('#productDimension').value;
    var productColor = document.querySelector('#productColor').value;

    var postData = {
        id : localStorage.getItem('EditInventoryId'),
        productName : productName,
        productDescription : productDescription,
        productDimension : productDimension,
        productColor : productColor
    }
    console.log(JSON.stringify(postData));
    //$.post(baseUrl+'/updateProductData',postData,updateCallBackFunction);

    $.ajax(
        {
            url:baseUrl+'/updateProductData',
            type:'POST',
            data:JSON.stringify(postData),
            success:updateCallBackFunction,
            contentType:'application/json'
        }
    );

}

function updateCallBackFunction(responseData,status,xhr)
{
    console.log("server response data is = "+responseData+" status = "+status+" xhr ="+xhr);
    window.location = 'showProductsFromDatabase.html';
}

app.initialize();















