var theForm = document.testForm
function validationFunc()
{
   if(theForm.num1.value == "" && theForm.num2.value == "")
  {
    alert("Please insert number 1 and number 2");
    return false;
  }
  if(theForm.num1.value =="")
  {
    alert("number 1 is empty");
    theForm.num1.focus();
    return false;
  }
  if(theForm.num2.value =="")
  {
    alert("Number 2 is empty");
    return false;
  }

return (true);
}