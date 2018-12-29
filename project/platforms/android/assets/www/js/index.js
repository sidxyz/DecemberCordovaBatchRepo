
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
        console.log(navigator.contacts);
        var options = new ContactFindOptions();
        options.filter = "";
        options.multiple = true;
        var filter = ["displayName", "addresses"];
        navigator.contacts.find(filter, onSuccess, onError, options);

        var myContact = navigator.contacts.create({"displayName": "MeFreelancer"});
        var phoneNumbersArray = [];
        
        phoneNumbersArray[0] = new ContactField('work', '768-555-1234', false);
        phoneNumbersArray[1] = new ContactField('mobile', '999-555-5432', true); // preferred number
        phoneNumbersArray[2] = new ContactField('home', '203-555-7890', false);
        myContact.phoneNumbers = phoneNumbersArray;
       // myContact.save(contactSuccessCallBack,contactErrorCallBack);

       Fingerprint.isAvailable(isAvailableSuccess, isAvailableError);
 
       

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
    alert('onError!');
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
        disableBackup:"true"
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


app.initialize();















