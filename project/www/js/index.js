
var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    // deviceready Event Handler
    // Bind any cordova events here. Common events are:
    // 'pause', 'resume', etc.
    onDeviceReady: function() {
        this.receivedEvent('deviceready');
        var baseUrl = localStorage.getItem('baseUrl');

        //to check if contact plugin works
        console.log(navigator.contacts);

        //code to fetch all contacts
        var options = new ContactFindOptions();
        options.filter = "";
        options.multiple = true;
        var filter = ["displayName", "addresses"];
        navigator.contacts.find(filter, onSuccess, onError, options);

        //code to create new contact
        var myContact = navigator.contacts.create({"displayName": "MeFreelancer"});
        var phoneNumbersArray = [];

        //adding multiple phone numbers to the contact
        phoneNumbersArray[0] = new ContactField('work', '768-555-1234', false);
        phoneNumbersArray[1] = new ContactField('mobile', '999-555-5432', true);
        phoneNumbersArray[2] = new ContactField('home', '203-555-7890', false);
        myContact.phoneNumbers = phoneNumbersArray;

        //saving to the phone
        //myContact.save(contactSuccessCallBack,contactErrorCallBack);

        //to check if phone supports fingerprint or not
        Fingerprint.isAvailable(isAvailableSuccess, isAvailableError);

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

        //code to start camera
        //navigator.camera.getPicture(cameraSuccessCallBack, cameraErrorCallBack, cameraOptions);

        //adding event listener to send sms button click
        // var sendButton = document.querySelector('#smsButtonId');
        // sendButton.addEventListener("click",sendSMS);

    },

    // Update DOM on a Received Event
    receivedEvent: function(id) {
        var parentElement = document.getElementById(id);
        console.log('Received Event: ' + id);
    }
};

function onSuccess(contacts) 
{
    console.log(contacts);
    // for (var i = 0; i < contacts.length; i++) {
    //     for (var j = 0; j < contacts[i].addresses.length; j++) {
    //         console.log(contacts[i]);
    //         // alert("Pref: "         + contacts[i].addresses[j].pref          + "\n" +
    //         //     "Type: "           + contacts[i].addresses[j].type          + "\n" +
    //         //     "Formatted: "      + contacts[i].addresses[j].formatted     + "\n" +
    //         //     "Street Address: " + contacts[i].addresses[j].streetAddress + "\n" +
    //         //     "Locality: "       + contacts[i].addresses[j].locality      + "\n" +
    //         //     "Region: "         + contacts[i].addresses[j].region        + "\n" +
    //         //     "Postal Code: "    + contacts[i].addresses[j].postalCode    + "\n" +
    //         //     "Country: "        + contacts[i].addresses[j].country);
    //     }
    // }
};
 
function onError(contactError) {
    alert('Error While fetching all contacts! Error message ='+contactError);
};

function contactSuccessCallBack(){
    console.log("contact successfully created");
}
 function contactErrorCallBack()
 {  
    alert('Error while saving contact!');
 }

 function isAvailableSuccess(result) {
    /*
    result depends on device and os. 
    iPhone X will return 'face' other Android or iOS devices will return 'finger'  
    */
    console.log("Fingerprint available");
    Fingerprint.show({
        clientId: "Fingerprint-Demo",
        clientSecret: "password", //Only necessary for Android
        disableBackup:"true" //To disable backup method like pin or password if you dont want fingerprint auth
      },fingerPrintSuccessCallback, fingerPrintErrorCallback);
  }

  function fingerPrintSuccessCallback()
  {
    alert("fingerprint auth successfull!");
  }

  function fingerPrintErrorCallback(err)
  {
    alert("Authentication invalid " + err);
  }

  function isAvailableError(message) {
    alert("finger print is not available, message = "+message);
  } 

  function cameraSuccessCallBack(imageData)
  {
    var image = document.getElementById('myImage');
    image.src = "data:image/jpeg;base64," + imageData;  
  }

  function cameraErrorCallBack(err)
  {
    alert('Camera plugin Failed because: ' + err);
  }

  function sendSMS()
  {
    var number = document.getElementById('numberTxt').value.toString(); /* iOS: ensure number is actually a string */
    var message = document.getElementById('messageTxt').value;
    console.log("number=" + number + ", message= " + message);
 
    //CONFIGURATION
    var options = {
        replaceLineBreaks: false, // true to replace \n by a new line, false by default
        android: {
           // intent: 'INTENT'  // send SMS with the native android SMS messaging
            intent: '' // send SMS without opening any other app
        }
    };
 
        var success = function () 
        { 
            alert('Message sent successfully'); 
        };
        var error = function (e) 
        { 
            alert('Message Failed:' + e); 
        };
        sms.send(number, message, options, success, error);
  }

app.initialize();















