function input_check()
{
  let valid = true;

  let inputs = document.getElementsByTagName("INPUT");

  //Checking text and number inputs
  for(let input of inputs)
  {
    switch(input.type)
    {
      case "text":
        if(input.value.length==0)
        {
          update_info(input.id+" empty.<br>");
          valid=false;
        }
        break;

      case "number":
      if(input.value<0 || input.value == 0)
      {
        update_info("Info not submitted: Negative or Null.<br>");
        valid=false;
      }
      break;
    }
  }
}

function update_info(new_info)
{
	let info = document.getElementById("info");
	let current_info = info.innerHTML;

	current_info = current_info + new_info;

	info.innerHTML = current_info;
}
