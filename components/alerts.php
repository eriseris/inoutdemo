<?php

if(isset($success_msg)){
   foreach($success_msg as $success_msg){
      echo '<script>
      Swal.fire({
         text: "'.$success_msg.'",
         toast: true,
         position: "bottom",
         showConfirmButton: false,
         timer: 2500,
         timerProgressBar: true,
         icon: "success"
       });
      </script>';
   }
}

// Swal.fire({
//    text: 'Sent Successfully!',
//    toast: true,
//    position: 'bottom',
//    showConfirmButton: false,
//    timer: 3500,
//    timerProgressBar: true,
//    icon: 'success'
//  });

if(isset($error_msg)){
   foreach($error_msg as $error_msg){
      echo '<script>
      Swal.fire({
         text: "'.$error_msg.'",
         toast: true,
         position: "bottom",
         showConfirmButton: false,
         timer: 2500,
         timerProgressBar: true,
         icon: "error"
       });
      </script>';
   }
}

?>
