function test(){
	alert("test");
}
$("#submitNews").click(function(){
	var email = document.getElementById("emailFieldNews").value;
	if(isEmail(email)){
		var email = $("#newsModal #emailFieldNews").val().trim();
		addEmail(email, "NewsletterList");
		$("#submitNewsHidden").click();
		
	}else{
		alert("Please enter a valid email");
	}
});

function noPopUp(){
    var d = new Date();
    d.setTime(d.getTime() + (7*24*60*60));
    var expires = "expires="+ d.toUTCString();
    document.cookie = "noPopUp=true;" + expires + ";path=/";
}

function getEmail(googleUser){
    var profile = googleUser.getBasicProfile();
    var email = profile.getEmail();
    console.log(email);
    addEmail(email, "NewsletterList");
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(";");
    for(var i = 0; i < cookieArray.length; i++){
        var cookie = cookieArray[i].trim();
		console.log(cookie);
        if(cookie == 'noPopUp=true'){
            var isCookie = cookie;
        }
    }
    noPopUp();
}

function onSignIn(googleUser) {
	var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(";");
	for(var i = 0; i < cookieArray.length; i++){
        var cookie = cookieArray[i].trim();
        if(cookie == 'noPopUp=true'){
            var isCookie = cookie;
        }
    }
		if(isCookie != 'noPopUp=true'){
			var profile = googleUser.getBasicProfile();
			getEmail(googleUser);
			noPopUp();
			$("#submitNewsHidden").click();
		}
}

setTimeout(function newsModal(){
    console.log(document.cookie);
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(";");
    for(var i = 0; i < cookieArray.length; i++){
        var cookie = cookieArray[i].trim();
        if(cookie == 'noPopUp=true'){
            var isCookie = cookie;
        }
    }
    if(isCookie != 'noPopUp=true'){
        $('#newsHidden').click();
    }
}, 5000);

document.getElementsByClassName("g-signin2").onclick = function(){
    var auth2 = gapi.auth2.getAuthInstance();

    auth2.signIn()
    .then(changeProfile);
	gapi.load('auth2', function(){

    gapi.auth2.init().then(function(auth2) {
        if(auth2.isSignedIn.get()){
            var googleUser = auth2.currentuser.get();

            changeProfile(googleUser);
        }
    });
});
};

$("#submitBeta").click(function(){
	var email = document.getElementById("emailFieldBeta").value;
	if(isEmail(email)){
		var email = $("#betaModal #emailFieldBeta").val().trim();
		addEmail(email, "BetaList");
		$("#submitHidden").click();
		
	}else{
		alert("Please enter a valid email");
	}
});

function addEmail(email, database){
    if(email == ""){
        return;
    } else {
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
       xmlhttp.open("GET", "/js/modal.php?email=" + email + "&database=" + database);
       xmlhttp.send();
    }
}

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
};
/*
var modal = document.getElementById('myModal');

var span = document.getElementsByClassName("close")[0];

var tyModal = document.getElementById('tyModal');

var span2 = document.getElementsByClassName("tyClose")[0];

var betaModal = document.getElementById('betaModal');

var span3 = document.getElementsByName('betaClose')[0];

var betaModalTY = document.getElementById('betaModalTY');

var span4 = document.getElementsByName('betaCloseTY')[0];

span4.onclick = function(){
    betaModalTY.style.display = "none";
}

span3.onclick = function(){
    betaModal.style.display = "none";
}

span2.onclick = function(){
    tyModal.style.display = "none";
}

function betaModal(){
    betaModal.style.display = "block";
}



span.onclick = function(){
    modal.style.display = "none";
    console.log("span");
    noPopUp();
}

window.onclick = function(event){
    if(event.target == modal) {
        modal.style.display = "none";
        console.log("window")
        noPopUp();
    }
}
$('#modalForm').validate({
    rules: {
        email: {email:true, required: true}
    },
    messages: {
        email: "Please enter a valid email address."
    },
    tooltip_options: {
        email: {trigger:'focus'}
    },
    submitHandler: function(form){
       
            var email = $("#myModal #emailField").val().trim();
            addEmail(email, "NewsletterList");
            if(email != ""){
                modal.style.display = "none";
                tyModal.style.display = "block";
                noPopUp();
            }
            return false;
 
    }
});

$('#modalFormBeta').validate({
    rules: {
        email: {email:true, required: true}
    },
    messages: {
        email: "Please enter a valid email address."
    },
    tooltip_options: {
        email: {trigger:'focus'}
    },
    submitHandler: function(form){
       
            
            if(email != ""){
                betaModal.style.display = "none";
                betaModalTY.style.display = "block";
            }
            return false;
 
    }
});







function closeModal(){
    modal.style.display = "none";
    noPopUp();
}



*/