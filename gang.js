const btn1 = document.querySelector("#button1");
btn1.addEventListener('click',function() {
  
  const res1 = document.querySelector('#res1');
  res1.textContent = "ここをおしてね";
  res1.classList.add('gold');
});

Element.onscroll = function() {
  const scrollTop = this.scrollTop;
  console.log("縦に移動した位置"+ scrollTop + "100px")
}


const btn2 = document.querySelector("#button2");
btn2.addEventListener('mouseover', function() {

  const res2 = document.querySelector('#res2')
  const res3 = document.querySelector('#res3')
  const res4 = document.querySelector('#res4')

  res2.classList.add('hidden');
  res3.classList.add('hidden');
  res4.classList.add('hidden');
});

btn2.addEventListener('mouseleave', function() {
  const res2 = document.querySelectorAll('#res2');

  res2.classList.remove('hidden');

});