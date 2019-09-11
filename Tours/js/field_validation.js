
/****************** To cut the Email checker **************/
function emailcheck(event)
{
if(navigator.appName != "Microsoft Internet Explorer" )
 {
 if( (event.which >= 97 && event.which <= 122 )
|| (event.which >= 48 && event.which <= 57 )
|| (event.which == 45) || (event.which == 95)
|| (event.which == 8 )  || (event.which==0)
|| (event.which >= 65 && event.which <= 90 ) 
|| (event.which == 64 ) || (event.which == 46 )) 
{
	     return ; 
	}
  else {
    return false;
  }
 }
 else
 {
if( (event.keyCode >= 97 && event.keyCode <= 122 )
|| (event.keyCode >= 48 && event.keyCode <= 57 )
|| (event.keyCode == 45) || (event.keyCode == 95)
|| (event.keyCode == 8 )
|| (event.keyCode >= 65 && event.keyCode <= 90 ) 
|| (event.keyCode == 64 ) || (event.keyCode == 46 )) 
{
	     return ; 
	}
  else {
    return false;
  }
}
}
 /************************** To allow alpha numeric and - *************************************************/
 function alpnumcheckusername(event) 
 {
 if(navigator.appName != "Microsoft Internet Explorer" )
 {
 if( (event.which >= 48 && event.which <= 57) || (event.which >= 97 && event.which <= 122) || (event.which >= 65 && event.which <= 90) || (event.which==45) || (event.which == 8 )  || (event.which==0))
	   {
	     return; 
	}
  else { 
    return false;
  }
 }
 else
 {
    if( (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 97 && event.keyCode <= 122) || (event.keyCode >= 65 && event.keyCode <= 90) || (event.keyCode==45) || (event.keyCode == 8 ))
	   {
	     return; 
	}
  else { 
    return false;
  }
}
 }

 /************************** To allow alpha numeric + spaces *************************************************/
 function alpnumcheck(event) 
 {
 if(navigator.appName != "Microsoft Internet Explorer" )
 {
 if( (event.which >= 48 && event.which <= 57) || (event.which >= 97 && event.which <= 122) || (event.which >= 65 && event.which <= 90) || (event.which==32) || (event.which == 8 )  || (event.which==0))
	   {
	     return; 
	}
  else { 
    return false;
  }
 }
 else
 {
    if( (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 97 && event.keyCode <= 122) || (event.keyCode >= 65 && event.keyCode <= 90) || (event.keyCode==32) || (event.keyCode == 8 ))
	   {
	     return; 
	}
  else { 
    return false;
  }
}
 }

/************************** To allow alpha numeric + spaces + dot + ampersand + apostophe + - *************************************************/

 function alpnumcheckwithspecial(event) 
 {
 if(navigator.appName != "Microsoft Internet Explorer" )
 {
	 //alert(event.which);
	if( (event.which >= 48 && event.which <= 57) || (event.which >= 97 && event.which <= 122) || (event.which >= 65 && event.which <= 90) || (event.which==32) || (event.which==38) || (event.which==39) || (event.which==44) || (event.which==45) || (event.which==46) || (event.which == 8 )  || (event.which==0) || (event.which==13))
	   {
	     return; 
	}
  else { 
    return false;
  }
 }
 else
 {
    if( (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 97 && event.keyCode <= 122) || (event.keyCode >= 65 && event.keyCode <= 90) || (event.keyCode==32) || (event.keyCode == 8 )  || (event.keyCode==38) || (event.keyCode==39) || (event.keyCode==44) || (event.keyCode==45) || (event.keyCode==46) || (event.keyCode==13))
	   {
	     return; 
	}
  else { 
    return false;
  }
}
 }

/************************** To allow alpha not numbers + spaces + dot + ampersand + apostophe + - *************************************************/

 function alpacheckwithspecial(event) 
 {
 if(navigator.appName != "Microsoft Internet Explorer" )
 {
	 //alert(event.which);
	if(  (event.which >= 97 && event.which <= 122) || (event.which >= 65 && event.which <= 90) || (event.which==32) || (event.which==38) || (event.which==39) || (event.which==44) || (event.which==45) || (event.which==46) || (event.which == 8 )  || (event.which==0) || (event.which==13))
	   {
	     return; 
	}
  else { 
    return false;
  }
 }
 else
 {
    if( (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 97 && event.keyCode <= 122) || (event.keyCode >= 65 && event.keyCode <= 90) || (event.keyCode==32) || (event.keyCode == 8 )  || (event.keyCode==38) || (event.keyCode==39) || (event.keyCode==44) || (event.keyCode==45) || (event.keyCode==46) || (event.keyCode==13))
	   {
	     return; 
	}
  else { 
    return false;
  }
}
 }

 
  function alpnumcheckgeneral(event) 
 {
	 
 if(navigator.appName != "Microsoft Internet Explorer" )
 {
	 	 //alert(event.which);

	if( (event.which >= 48 && event.which <= 57) || (event.which >= 97 && event.which <= 122) || (event.which >= 65 && event.which <= 90) || (event.which==32) || (event.which==38) || (event.which==39) || (event.which==44) || (event.which==45) || (event.which==46) || (event.which == 8 )  || (event.which==0) || (event.which==13) || (event.which==34))
	   {
	     return; 
	}
  else { 
    return false;
  }
 }
 else
 {
    if( (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 97 && event.keyCode <= 122) || (event.keyCode >= 65 && event.keyCode <= 90) || (event.keyCode==32) || (event.keyCode == 8 )  || (event.keyCode==38) || (event.keyCode==39) || (event.keyCode==44) || (event.keyCode==45) || (event.keyCode==46) || (event.keyCode==13) || (event.keyCode==34))
	   {
	     return; 
	}
  else { 
    return false;
  }
}
 }
 
 /********************** To allow alpha numeric + spaces + dot + ampersand + comma + -  ******************************/

 function alpnumcheckwithcomma(event) 
 {
 if(navigator.appName != "Microsoft Internet Explorer" )
 {
	if( (event.which >= 48 && event.which <= 57) || (event.which >= 97 && event.which <= 122) || (event.which >= 65 && event.which <= 90) || (event.which==32) || (event.which==38) || (event.which==39) || (event.which==44) || (event.which==45) || (event.which==46) || (event.which == 8 )  || (event.which==0))
	   {
	     return; 
	}
  else { 
    return false;
  }
 }
 else
 {
    if( (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 97 && event.keyCode <= 122) || (event.keyCode >= 65 && event.keyCode <= 90) || (event.keyCode==32) || (event.keyCode == 8 )  || (event.keyCode==38) || (event.keyCode==39) || (event.keyCode==44) || (event.keyCode==45) || (event.keyCode==46))
	   {
	     return; 
	}
  else { 
    return false;
  }
}
 }

 
 /*******************To allow only integers*********************/
 function numcheck(event) 
 { //fun2
 		if(navigator.appName != "Microsoft Internet Explorer")
 		{
  			if( (event.which >= 48 && event.which <= 57) || (event.which==0) )
	  		{
	     		return; 
			}
 			else
   			{ 
  				return false;
  			}
		 }
 		else
 		{
   			if( (event.keyCode >= 48 && event.keyCode <= 57) )
	   		{
	     		return; 
			}
 			else 
			{ 
    			return false;
  			}
		}
 } //fun2
 //*****************************************************************************
 function phonecheck(event) 
 {
 
 if(navigator.appName != "Microsoft Internet Explorer" )
 {
  if( (event.which >= 48 && event.which <= 57) || (event.which == 8 ) || (event.which == 45 )  || (event.which==0) )
	   {
	     return; 
		}
  else
   { 
  		return false;
  	}
 }
 else
 {

    if( (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode == 8 )  || (event.keyCode == 45 ))
	   {
	     return; 
	}
  else { 
    return false;
  }
	}
 }
  /*******************To allow only integers and dot *********************/
 function amountcheck(event) 
 {
 if(navigator.appName != "Microsoft Internet Explorer" )
 {
  if( (event.which >= 48 && event.which <= 57) || (event.which == 8 ) || (event.which == 46 )  || (event.which==0) )
	   {
	     return; 
		}
  else
   { 
  		return false;
  	}
 }
 else
 {
    if( (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode == 8 ) || (event.keyCode == 46 ))
	   {
	     return; 
	}
  else { 
    return false;
  }
	}
 }
 
  /*******************To allow only integers and dot and - *********************/
 function signedamountcheck(event) 
 {
 if(navigator.appName != "Microsoft Internet Explorer" )
 {
  if( (event.which >= 48 && event.which <= 57) || (event.which == 8 ) || (event.which == 45 ) || (event.which == 46 )  || (event.which==0) )
	   {
	     return; 
		}
  else
   { 
  		return false;
  	}
 }
 else
 {
    if( (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode == 8 ) || (event.keyCode == 46 || (event.keyCode == 45 ))) 
	   {
	     return false; 
	}
  else { 
    return false;
  }
	}
 }
 
 
 /**********************To allow only characters*******************/
 function charactercheck(event)
{
  if(navigator.appName != "Microsoft Internet Explorer" )
 {
  if( (event.which >= 97 && event.which <= 122 ) 
   || (event.which >= 65 && event.which <= 90 ) || (event.which == 13 ) || (event.which == 95 )
   || (event.which == 8 ) || (event.which==0))
    {
	     return ; 
	}
  else {
    return false;
  }
 }
 else
 {
  if( (event.keyCode >= 97 && event.keyCode <= 122 ) 
   || (event.keyCode >= 65 && event.keyCode <= 90 ) || (event.keyCode == 13 ) || (event.keyCode == 95 )
   || (event.keyCode == 8 ) || (event.keyCode==32))
    {
	     return ; 
	}
  else {
    return false;
  }
  }
}

/********************** Address Field Validation*******************/

function addrcheck(event)
{
	if(navigator.appName != "Microsoft Internet Explorer" )
 	{
 		if( (event.which >= 97 && event.which <= 122 ) || (event.which >= 65 && event.which <= 90 ) || (event.which == 35 ) || (event.which == 32 ) || (event.which == 8 ) || (event.which == 0 ) || (event.which >= 44 && event.which <= 57))
		{
	     	return ; 
		}
		else
		{
			return false;
		}
	}
 else
 {
    if( (event.keyCode >= 97 && event.keyCode <= 122 )
   || (event.keyCode >= 65 && event.keyCode <= 90 )
   || (event.keyCode == 35 ) || (event.keyCode == 32 ) 
   || (event.keyCode >= 44 && event.keyCode <= 57)) {
	     return ; 
		   
	}
  else {
    return false;
  }
}
 } 
 
 
 /********************** Quotes disabled Field Validation*******************/

function disablequ(event)
 {
  if(navigator.appName != "Microsoft Internet Explorer" )
 {
	if( (event.which == 39) || (event.which == 34 ) || (event.which == 32 ) )
	{
	     return false; 
		   
	}
	else
	{
    	return true;
	}
 }
 else
 {
	 	if( (event.keyCode == 39) || (event.keyCode == 34 ) || (event.keyCode == 32 ) )
		{
	     return false ; 
		   
	}
  else {
    return true;
  }
}
 } 
  /********************** Quotes disabled Field Validation*******************/
function generalFieldCheck(event)
 {
  if(navigator.appName != "Microsoft Internet Explorer" )
 {
	if( (event.which == 39) || (event.which == 34 ) || (event.which == 32 ) )
	{
	     return ; 
		   
	}
	else
	{
    	return false;
	}
 }
 else
 {
	 	if( (event.keyCode == 39) || (event.keyCode == 34 ) || (event.keyCode == 32 ) )
		{
	     return ; 
		   
	}
  else {
    return false;
  }
}
 } 
//-----------------------------------------------------------------------------------------------------------------