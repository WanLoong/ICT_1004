function showText(num)
{
if(num==0){
document.getElementById('storeoption').style.display='block';
document.getElementById('homeaddress').style.display='none';
}
else{
    
document.getElementById('homeaddress').style.display='block';
document.getElementById('storeoption').style.display='none';
return;
}
}