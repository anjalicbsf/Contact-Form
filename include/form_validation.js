<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<script type="text/javascript">
   
      function validate()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         
         if( document.myForm.number.value == "" )
         {
            alert( "Please provide your contact number!" );
            document.myForm.number.focus() ;
            return false;
         }
         
         if( document.myForm.location.value == "" )
         {
            alert( "Please provide your location!" );
            return false;
         }
         return( true );
      }
   
</script>
</body>
</html>