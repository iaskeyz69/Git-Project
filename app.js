var theForm = document.testForm
function validationFunc()
{
  if(theForm.num1.value =="")
  {
    alert("number 1 is empty");
    theForm.num1.focus();
    return false
  }
return (true);
}