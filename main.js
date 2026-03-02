$(document).ready(function(){


  var boots = document.getElementById("boots-animation"),
      hoodie = document.getElementById("hoodie-animation"),
      pants = document.getElementById("pants-animation"),
      blockboots = document.getElementById("blockboots"),
      blockhoodie = document.getElementById("blockhoodie"),
      blockpants = document.getElementById("blockpants")
  
      
      
  boots.addEventListener("mouseover",function(){
    this.style.border = "4px solid orange";
    })
    
  boots.addEventListener("mouseout",function() {
    this.style.border = "4px solid black";
  })

  hoodie.addEventListener("mouseover",function(){
    this.style.border = "4px solid orange";
  })
  
  hoodie.addEventListener("mouseout",function() {
    this.style.border = "4px solid black";
  })

  pants.addEventListener("mouseover",function(){
  this.style.border = "4px solid orange";
  })

  pants.addEventListener("mouseout",function() {
  this.style.border = "4px solid black";
  })


  blockboots.style.display = 'none';
  blockhoodie.style.display = 'none';
  blockpants.style.display = 'none';

  boots.addEventListener("click",function(){
    if(blockboots.style.display == 'none'){
      blockboots.style.display = 'block';
      blockhoodie.style.display = 'none';
      blockpants.style.display = 'none';
    }else{
      blockboots.style.display = 'none';
      blockhoodie.style.display = 'none';
      blockpants.style.display = 'none';
    }
  })  

  hoodie.addEventListener("click",function(){
    if(blockhoodie.style.display == 'none'){
      blockhoodie.style.display = 'block';
      blockboots.style.display = 'none';
      blockpants.style.display = 'none';
    }else{
      blockhoodie.style.display = 'none';
      blockboots.style.display = 'none';
      blockpants.style.display = 'none';
    }
  })

  pants.addEventListener("click",function(){
    if(blockpants.style.display =='none'){
      blockpants.style.display = 'block';
      blockhoodie.style.display = 'none';
      blockboots.style.display = 'none';
    }else{
      blockpants.style.display = 'none';
      blockhoodie.style.display = 'none';
      blockboots.style.display = 'none';
    }
  })


    
  // var buybot1 = document.getElementById("buybot1"),
  //     buybot2 = document.getElementById("buybot2");

  // const arr2 = [];

  // buybot1.addEventListener('click',function(){
  //   arr2.push(buybot1.value);
  //   localStorage.setItem('arr2',JSON.stringify(arr2));
  //   location.href='vvod2.php'+ arr2;
  // })  

  // buybot2.addEventListener('click',function(){
  //   arr2.push(buybot2.value);
  //   localStorage.setItem('arr2',JSON.stringify(arr2));
  //   location.href='vvod2.php'+ arr2;
  // })  





  changepass.addEventListener("click",function(){
    if(changepass.style.display == 'none'){
      changepass.style.display = 'block';
    }else{
      changepass.style.display = 'none';
    }
  })


    let email = $("#email").val().trim();

    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }
    
    if (!isEmail(email)){
      return false;       
    }
 

    
})