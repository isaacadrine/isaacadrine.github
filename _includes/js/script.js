/*for submission
     function getConfirmation(){
        var retVal=confirm("Do you wanna continue?");
        if(retVal == true) {
           window.location="_includes/_process.html";
           return true;
        }
        else{
           document.write("User does not want to continue!");
           return false;
        }
     } 

 		<!--
         var imgObj = null;
         var animate;
         function init() {
            imgObj = document.getElementById('myanim');
            imgObj.style.position='relative';
            imgObj.style.left='0px';
         }
         function moveRight(){
            imgObj.style.left = parseInt(imgObj.style.left) + 10 + 'px';
            animate= setTimeout(moveRight,20); // call moveRight in 20msec
         }
         function stop(){
            clearTimeout(animate);
            imgObj.style.left='0px';
         }
         window.onload = init;
      //-->*/

//getting names from the fields in html
 /*function getName(){
            var name=window.location.href.split("?name")[1].split("+").join("");
            var fieldNameElement= document.getElementById('name');
            var oldText =fieldNameElement.innerHTML;
            fieldNameElement.innerHTML = oldText+' '+name;
         }*/

/*for the form submission_attempt2
   function submitForm(){
               if(typeof(localStorage) != "undefined") {
                  localStorage.name =document.getElementById("name").value;
               }
               document.getElementById("name").submit();
            }*/

// getting sorage
const formEl =document.querySelector("#form");
formEl.addEventListener("submit", (event)=>{
	event.preventDefault();
	const formData =new FormData(formEL);

	fetch("index.html", {
		method:"POST",
		headers: {
			"Content-Type": "application/json",
		},
		body:JSON.stringify({
			name: formData.get("name"),
			address: formData.get("address"),
			email: formData.get("email"),
			gender: formData.get("gender"),
		}),
	})
	.then((response) => {
		window.location.href = "_includes/_process.html";
	})
	.catch((error) => {
		console.error(error);


});




