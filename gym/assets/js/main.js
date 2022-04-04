//member update
function successupdate() {
  alert("Your info successfully updated!");
}

//confirm payment
function confirmpayment(){
 ("Are you confirm to make this payment?");
}

function delete_id(memberid)
{
   if(confirm('Sure To Remove This Trainer ?'))
   {
    window.location.href='deletetrainer.php?delete_id='+memberid;
   }
}
/*
if(confirm("Are you confirm to make this payment?")){
   return true;
}
else{
  return false;
*/
