
var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    // deviceready Event Handler
    // Bind any cordova events here. Common events are:
    // 'pause', 'resume', etc.
    onDeviceReady: function() {

            $('input').blur(function() {
              var $this = $(this);
              if ($this.val())
                $this.addClass('used');
              else
                $this.removeClass('used');
            });
          
            var $ripples = $('.ripples');
          
            $ripples.on('click.Ripples', function(e) {
          
              var $this = $(this);
              var $offset = $this.parent().offset();
              var $circle = $this.find('.ripplesCircle');
          
              var x = e.pageX - $offset.left;
              var y = e.pageY - $offset.top;
          
              $circle.css({
                top: y + 'px',
                left: x + 'px'
              });
          
              $this.addClass('is-active');
          
            });
          
            $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
                $(this).removeClass('is-active');
            });   
            
             var loginBtn = document.querySelector("#loginSubmitBtn");
             loginBtn.addEventListener("click",validateLogin);   

    },

    // Update DOM on a Received Event
    receivedEvent: function(id) {
       // var parentElement = document.getElementById(id);
        console.log('Received Event: ');
    }
};


function validateLogin()
{
    var username = document.querySelector("#username").value;
    var password = document.querySelector("#password").value;

    var postData = {
        username : username,
        password : password
    }

    var baseUrl = localStorage.getItem('baseUrl');

    console.log(JSON.stringify(postData));

    $.ajax(
        {
            url:baseUrl+'/api/login',
            type:'POST',
            data:JSON.stringify(postData),
            success:loginCallBackFunction,
            contentType:'application/json'
        }
    );
}

function loginCallBackFunction(response)
{
    console.log("response from login api = "+response);
}

app.initialize();















