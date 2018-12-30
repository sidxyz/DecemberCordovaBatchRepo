
var app = {
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        //write your functionality here!        
        var submitBtn = document.querySelector('#submitBtn');
        submitBtn.addEventListener("click", submitFunction);

        var uploadImageBtn = document.querySelector('#productImageBtn');
        uploadImageBtn.addEventListener("click",uploadImageFunction);

    },
};

var localStorage = window.localStorage;

function uploadImageFunction()
{
    var cameraOptions = {
        "quality":100,
        "destinationType":Camera.DestinationType.DATA_URL,
        "sourceType":Camera.PictureSourceType.CAMERA,
        "allowEdit":true,
        "encodingType":Camera.EncodingType.PNG,
        "targetWidth":100,
        "targetHeight":100,
        "correctOrientation":true,
        "saveToPhotoAlbum":true,
        "cameraDirection":Camera.Direction.FRONT
    }

    navigator.camera.getPicture(cameraSuccessCallBack, cameraErrorCallBack, cameraOptions);
}    

function cameraSuccessCallBack(imageData)
  {
    console.log("in success callback of camera");
    var image = document.getElementById('uploadedImage');
    image.src = "data:image/jpeg;base64," + imageData;  
    console.log("image data ="+imageData);
    localStorage.setItem("uploadedImageData",imageData);
  }

  function cameraErrorCallBack(err)
  {
    alert('Camera plugin Failed because: ' + err);
  }

function submitFunction()
{
    var baseUrl = localStorage.getItem('baseUrl');

    var productName = document.querySelector('#productName').value;
    var productDescription = document.querySelector('#productDescription').value;
    var productDimension = document.querySelector('#productDimension').value;
    var productColor = document.querySelector('#productColor').value;
    var productImage = localStorage.getItem('uploadedImageData');

    console.log(" "+productName+" "+productDescription+" "+productDimension+" "+productColor);
    localStorage.setItem('productName',productName);
    localStorage.setItem('productDescription',productDescription);
    localStorage.setItem('productDimension',productDimension);
    localStorage.setItem('productColor',productColor);

    var postData = {
        productName : localStorage.getItem('productName'),
        productDescription : localStorage.getItem('productDescription'),
        productDimension : localStorage.getItem('productDimension'),
        productColor : localStorage.getItem('productColor'),
        imageExtension : 'png',
        productImage : productImage
    }
    
    //$.post(baseUrl+'/addProduct',postData,callBackFunction);

    $.ajax(
        {
            url:baseUrl+'/addProduct',
            type:'POST',
            data:JSON.stringify(postData),
            success:callBackFunction,
            contentType:'application/json'
        }
    );
    console.log(postData);
}

function callBackFunction(responseData,status,xhr)
{
    console.log("server response data is = "+responseData+" status = "+status+" xhr ="+xhr);
    window.location = 'showProductsFromDatabase.html';
}

app.initialize();















