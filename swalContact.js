
swal({   title: "Newsletter!",   text: "Sign up for our newsletter to recieve important updates!",   type: "input",   showCancelButton: true,   closeOnConfirm: false,  
confirmButtonColor:"#004d1a", 
allowOutsideClick:true, 
animation:"slide-from-top", 
inputPlaceholder: "Type in your e-mail address here" },

function(inputValue){   if (inputValue === false) return false;      if (inputValue === "") {     swal.showInputError("Please type in a valid e-mail address");     return false   }  
                     
          
$.ajax({url:"newsLetter.php", type:"POST", data:{"email":inputValue} });
                                                       
swal({   title: "Thank you!",   text: "We won't send you spam, we promise",
confirmButtonColor:"#004d1a", imageSize:"150x150",   imageUrl: "images/contact_success.png" });});

 